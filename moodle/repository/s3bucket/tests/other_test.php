<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Other tests.
 *
 * @package    repository_s3bucket
 * @copyright  2017 Renaat Debleu (www.eWallah.net) (based on work by Dongsheng Cai)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->libdir. '/formslib.php');
require_once($CFG->dirroot . '/repository/lib.php');
require_once($CFG->dirroot . '/repository/s3bucket/lib.php');

/**
 * Other tests.
 *
 * @package    repository_s3bucket
 * @copyright  2017 Renaat Debleu (www.eWallah.net) (based on work by Dongsheng Cai)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @coversDefaultClass \repository_s3bucket
 */
class repository_s3bucket_other_tests extends \advanced_testcase {

    /** @var int repo */
    protected $repo;

    /** @var array data */
    protected $data;

    /**
     * Create type and instance.
     */
    public function setUp(): void {
        $this->resetAfterTest(true);
        set_config('s3mock', true);
        set_config('proxyhost', '192.168.192.168');
        set_config('proxyport', 66);
        set_config('proxytype', 'http');
        set_config('proxyuser', 'user');
        set_config('proxypassword', 'pass');
        $this->getDataGenerator()->create_repository_type('s3bucket');
        $this->repo = $this->getDataGenerator()->create_repository('s3bucket')->id;
        $this->data = [
           'endpoint' => 'eu-north-1',
           'secret_key' => 'secret',
           'bucket_name' => 'test',
           'access_key' => 'abc'];
        $this->SetAdminUser();
    }

    /**
     * Test tearDown.
     */
    public function tearDown(): void {
        set_config('s3mock', false);
    }

    /**
     * Test sendfile s3.
     */
    public function test_sendfiles3() {
        global $USER;
        $repo = new \repository_s3bucket($this->repo);
        $fs = get_file_storage();
        $filerecord = ['component' => 'user', 'filearea' => 'draft', 'contextid' => context_user::instance($USER->id)->id,
                       'itemid' => file_get_unused_draft_itemid(), 'filename' => 'filename.jpg', 'filepath' => '/'];
        $file = $fs->create_file_from_string($filerecord, 'test content');
        $this->expectException('repository_exception');
        $repo->send_file($file);
    }

    /**
     * Test class in system context.
     */
    public function test_class() {
        $repo = new \repository_s3bucket($this->repo);
        $this->assertEquals('S3 bucket', $repo->get_name());
        $this->assertTrue($repo->check_login());
        $this->assertFalse($repo->contains_private_data());
        $this->assertEquals(['duration'], $repo->get_type_option_names());
        $this->assertCount(4, $repo->get_instance_option_names());
        $this->assertEquals('Unknown source', $repo->get_reference_details(''));
        $this->assertEquals('s3://testrepo/filename.txt', $repo->get_file_source_info('filename.txt'));
        $this->assertEquals('s3://testrepo/filename.txt', $repo->get_reference_details('filename.txt'));
        $this->assertEquals('Unknown source', $repo->get_reference_details('filename.txt', 666));
        $repo->disabled = true;
        try {
            $repo->get_reference_details('filename.txt');
        } catch (Exception $e) {
            $this->assertEquals('Cannot download this file', $e->getMessage());
        }
        $repo->disabled = false;
        $this->assertEquals('Unknown source', $repo->get_reference_details('filename.txt', 666));
        $this->assertFalse($repo->global_search());
        $this->assertEquals(7, $repo->supported_returntypes());
        $this->assertEquals(4, $repo->default_returntype());
        $this->SetAdminUser();
        $this->assertEquals(2, $repo->check_capability());
        $result = $repo->get_listing('', 1);
        $this->assertCount(2, $result['list']);

        set_config('s3mock', false);
        $repo = new \repository_s3bucket($this->repo);
        $this->expectException('moodle_exception');
        $repo->get_listing('testfile.jpg', 1);
    }

    /**
     * Test empty in course context.
     */
    public function test_empty() {
        $courseid = $this->getDataGenerator()->create_course()->id;
        $repo = new \repository_s3bucket($this->repo, \context_course::instance($courseid), $this->data);
        $result = $repo->get_listing('.');
        $this->assertCount(1, $result['path']);
        set_config('s3mock', false);
        $repo = new \repository_s3bucket($this->repo, \context_course::instance($courseid), $this->data);
        $this->expectException('moodle_exception');
        $repo->get_listing('.');
    }

    /**
     * Test search.
     */
    public function test_search() {
        $userid = $this->getDataGenerator()->create_user()->id;
        $context = \context_user::instance($userid);
        $repo = new \repository_s3bucket($this->repo, $context, $this->data);
        $this->data['endpoint'] = 'eu-central-1';
        $repo->set_option($this->data);
        $result = $repo->search('filesearch');
        $this->assertCount(0, $result['list']);
        $result = $repo->search('2020');
        $this->assertCount(2, $result['list']);
        set_config('s3mock', false);
        $repo = new \repository_s3bucket($this->repo, $context, $this->data);
        $this->expectException('moodle_exception');
        $repo->search('filesearch');
    }

    /**
     * Test no access_key.
     */
    public function test_noaccess_key() {
        $courseid = $this->getDataGenerator()->create_course()->id;
        $repo = new \repository_s3bucket($this->repo, \context_course::instance($courseid));
        $repo->set_option(['access_key' => null]);
        $this->expectException('moodle_exception');
        $repo->get_listing();
    }

    /**
     * Test get file in user context.
     */
    public function test_getfile() {
        global $USER;
        $context = \context_user::instance($USER->id);
        $repo = new \repository_s3bucket($USER->id, $context);
        $this->data['endpoint'] = 'ap-south-1';
        $repo->set_option($this->data);
        $draft = file_get_unused_draft_itemid();
        $filerecord = ['component' => 'user', 'filearea' => 'draft', 'contextid' => $context->id,
                       'itemid' => $draft, 'filename' => 'filename.txt', 'filepath' => '/'];
        get_file_storage()->create_file_from_string($filerecord, 'test content');
        $result = $repo->get_file('/filename.txt');
        $this->assertEquals('/filename.txt', $result['url']);
    }

    /**
     * Test get url in user context.
     */
    public function test_getlink() {
        global $USER;
        $context = \context_user::instance($USER->id);
        $repo = new \repository_s3bucket($USER->id, $context);
        $url = $repo->get_link('tst.jpg');
        $this->assertStringContainsString('/s3/', $url);
        set_config('s3mock', false);
        $repo = new \repository_s3bucket($this->repo);
        $url = $repo->get_link('filename.txt');
    }

    /**
     * Test get url in course context.
     */
    public function test_pluginfile() {
        $headerf = 'Cannot modify header information - headers already sent';
        $systemcontext = \context_system::instance();
        $systemrepo = new \repository_s3bucket($this->repo, $systemcontext);
        $course = $this->getDataGenerator()->create_course();
        $coursecontext = \context_course::instance($course->id);
        $courserepo = new \repository_s3bucket($this->repo, $coursecontext);
        $user = $this->getDataGenerator()->create_user();
        $usercontext = \context_user::instance($user->id);
        $userrepo = new \repository_s3bucket($this->repo, $usercontext);
        $url = $this->getDataGenerator()->create_module('url', ['course' => $course->id]);
        $modcontext = \context_module::instance($url->cmid);
        $modrepo = new \repository_s3bucket($this->repo, $modcontext);
        $cm = get_coursemodule_from_instance('url', $url->id);
        $this->assertFalse(repository_s3bucket_pluginfile($course, $cm, $coursecontext, 'hr', [], true));
        try {
             repository_s3bucket_pluginfile(1, $cm, $systemcontext, 's3', [$systemrepo->id, 'tst.jpg'], true);
        } catch (Exception $e) {
            $this->assertStringContainsString($headerf, $e->getMessage());
        }
        try {
            repository_s3bucket_pluginfile($course, $cm, $coursecontext, 's3', [$courserepo->id, 'tst.jpg'], true);
        } catch (Exception $e) {
            $this->assertStringContainsString($headerf, $e->getMessage());
        }
        try {
            repository_s3bucket_pluginfile($course, $cm, $usercontext, 's3', [$userrepo->id, 'tst.jpg'], true);
        } catch (Exception $e) {
            $this->assertStringContainsString($headerf, $e->getMessage());
        }
        try {
            repository_s3bucket_pluginfile($course, $cm, $modcontext, 's3', [$modrepo->id, 'tst.jpg'], true);
        } catch (Exception $e) {
            $this->assertStringContainsString($headerf, $e->getMessage());
        }
    }

    /**
     * Tests other files.
     */
    public function test_local_other() {
        global $CFG;
        require_once($CFG->libdir . '/upgradelib.php');
        require_once($CFG->dirroot . '/repository/s3bucket/db/access.php');
        require_once($CFG->dirroot . '/repository/s3bucket/db/upgrade.php');
        require_once($CFG->dirroot . '/repository/s3bucket/tests/coverage.php');
        $this->expectException('downgrade_exception');
        xmldb_repository_s3bucket_upgrade(time());
    }
}