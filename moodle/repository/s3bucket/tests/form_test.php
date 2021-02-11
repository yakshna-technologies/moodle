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
 * Form tests.
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
 * Form tests.
 *
 * @package    repository_s3bucket
 * @copyright  2017 Renaat Debleu (www.eWallah.net) (based on work by Dongsheng Cai)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @coversDefaultClass \repository_s3bucket
 */
class repository_s3bucket_form_tests extends \advanced_testcase {

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
        $this->getDataGenerator()->create_repository_type('s3bucket');
        $this->repo = $this->getDataGenerator()->create_repository('s3bucket')->id;
        $this->data = [
            'endpoint' => 'eu-west-2',
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
     * Test type config form.
     */
    public function test_type_config_form() {
        $context = \context_system::instance();
        $para = [
            'plugin' => 's3bucket',
            'action' => 'show',
            'pluginname' => 'repository_s3bucket',
            'contextid' => $context->id];
        $mform = new repository_type_form('', $para);
        $this->assertEquals([], repository_s3bucket::type_form_validation($mform, null, []));
        ob_start();
        $mform->display();
        $out = ob_get_clean();
        $this->assertStringContainsString('(in minutes)', $out);
    }

    /**
     * Test instance form.
     */
    public function test_instance_form() {
        global $USER;
        $context = \context_user::instance($USER->id);
        $para = ['plugin' => 's3bucket', 'typeid' => '', 'instance' => null, 'contextid' => $context->id];
        $mform = new repository_instance_form('', $para);
        $this->data['endpoint'] = 'us-west-2';
        $this->assertEquals([], repository_s3bucket::instance_form_validation($mform, $this->data, []));
        ob_start();
        $mform->display();
        $out = ob_get_clean();
        $this->assertStringContainsString('There are required fields in this form marked', $out);
    }

    /**
     * Test instance form with proxy.
     */
    public function test_instance_formproxy() {
        global $USER;
        $context = \context_user::instance($USER->id);
        $para = ['plugin' => 's3bucket', 'typeid' => null, 'instance' => null, 'contextid' => $context->id];
        $mform = new repository_instance_form('', $para);
        $this->assertEquals([], repository_s3bucket::instance_form_validation($mform, $this->data, []));
        ob_start();
        $mform->display();
        $out = ob_get_clean();
        $this->assertStringContainsString('There are required fields in this form marked', $out);
    }

    /**
     * Test form.
     */
    public function test_form() {
        global $USER;
        $context = \context_user::instance($USER->id);
        $page = new \moodle_page();
        $page->set_context($context);
        $page->set_pagelayout('standard');
        $page->set_pagetype('course-view');
        $page->set_url('/repository/s3bucket/manage.php');
        $para = ['plugin' => 's3bucket', 'typeid' => '', 'instance' => null, 'contextid' => $context->id];
        $mform = new \repository_instance_form('', $para);
        ob_start();
        $mform->display();
        $fromform = $mform->get_data();
        $out = ob_get_clean();
        $this->assertEquals('', $fromform);
        $this->assertStringContainsString('There are required fields', $out);
        $this->assertEquals([], repository_s3bucket::instance_form_validation($mform, $this->data, []));
        ob_start();
        $mform->display();
        $fromform = $mform->get_data();
        $out = ob_get_clean();
        $this->assertEquals('', $fromform);
        $this->assertStringContainsString('value="us-east-1" selected', $out);
        $this->assertEquals([], repository_s3bucket::instance_form_validation($mform, $this->data, []));
        set_config('s3mock', false);
        $mform = new \repository_instance_form('', $para);
        $repo = new \repository_s3bucket($USER->id, $context);
        $para = ['plugin' => 's3bucket', 'typeid' => '', 'instance' => $repo, 'contextid' => $context->id];
        $this->assertCount(0, repository_s3bucket::instance_form_validation($mform, $this->data, []));
    }
}