<?php

class __Mustache_82a58b4d6e1abfe8b986b3a7dc2cf40b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form id="groupeditform" action="index.php" method="post">
';
        $buffer .= $indent . '    <div class="container-fluid groupmanagementtable">
';
        $buffer .= $indent . '        <div class="row rtl-compatible">
';
        $buffer .= $indent . '            <div class="col-md-6 mb-1">
';
        $buffer .= $indent . '                <input type="hidden" name="id" value="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                <div class="form-group">
';
        $buffer .= $indent . '                    <label for="groups">
';
        $buffer .= $indent . '                        <span id="groupslabel">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section07b3ceab8d7100ef826c28857d1522f3($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                        <span id="thegrouping">&nbsp;</span>
';
        $buffer .= $indent . '                    </label>
';
        $buffer .= $indent . '                    <select name="groups[]" multiple="multiple" id="groups" size="15" class="form-control input-block-level">
';
        // 'groups' section
        $value = $context->find('groups');
        $buffer .= $this->section72cc482fd3e8dee0a7d0dc78f1e0b774($context, $indent, $value);
        $buffer .= $indent . '                    </select>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="form-group">
';
        $buffer .= $indent . '                    <input type="submit" name="act_updatemembers" id="updatemembers" value="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9db7e4bc5f16a36de19bce56d85d3992($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary" />
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="form-group">
';
        $buffer .= $indent . '                    <input type="submit" name="act_showgroupsettingsform" id="showeditgroupsettingsform" value="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6ab1c7d796f353151ef9c76d9867de3b($context, $indent, $value);
        $buffer .= '" ';
        // 'editgroupsettingsdisabled' section
        $value = $context->find('editgroupsettingsdisabled');
        $buffer .= $this->section2eb10691007c92bdff260da6f5c039fd($context, $indent, $value);
        $buffer .= ' class="btn btn-secondary" />
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="form-group">
';
        $buffer .= $indent . '                    <input type="submit" name="act_deletegroup" id="deletegroup" value="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionFa414baa85f4ddc5dd8b84320c171be9($context, $indent, $value);
        $buffer .= '" ';
        // 'deletegroupdisabled' section
        $value = $context->find('deletegroupdisabled');
        $buffer .= $this->section2eb10691007c92bdff260da6f5c039fd($context, $indent, $value);
        $buffer .= ' class="btn btn-secondary" />
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="form-group">
';
        $buffer .= $indent . '                    <input type="submit" name="act_showcreateorphangroupform" id="showcreateorphangroupform" value="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section933f680f21c30185ea1285a27f349637($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary" />
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="form-group">
';
        $buffer .= $indent . '                    <input type="submit" name="act_showautocreategroupsform" id="showautocreategroupsform" value="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE981309a9c88fdbff700badad9299c05($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary" />
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="form-group">
';
        $buffer .= $indent . '                    <input type="submit" name="act_showimportgroups" id="showimportgroups" value="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section7e3c70b3235cd3c658aeb2583c3e5b15($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary" />
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="col-md-6 mb-1">
';
        $buffer .= $indent . '                <div class="form-group">
';
        $buffer .= $indent . '                    <label for="members">
';
        $buffer .= $indent . '                        <span id="memberslabel">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionAdadf327cc0a1dc31d7c65f510e500c8($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                        <span id="thegroup">';
        $value = $this->resolveValue($context->find('selectedgroup'), $context);
        $buffer .= $value;
        $buffer .= '</span>
';
        $buffer .= $indent . '                    </label>
';
        $buffer .= $indent . '                    <select size="15" multiple="multiple" class="form-control input-block-level" id="members" name="user">
';
        // 'members' section
        $value = $context->find('members');
        $buffer .= $this->section5163626e8d699544054c116e32bf008e($context, $indent, $value);
        $buffer .= $indent . '                    </select>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="form-group">
';
        $buffer .= $indent . '                    <input type="submit" value="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4e12385a6e0170839a40c14d8de6b906($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary" ';
        // 'addmembersdisabled' section
        $value = $context->find('addmembersdisabled');
        $buffer .= $this->section2eb10691007c92bdff260da6f5c039fd($context, $indent, $value);
        $buffer .= ' name="act_showaddmembersform" id="showaddmembersform"/>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</form>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionC40f688cf06da1349f353e773d4b4474($context, $indent, $value);

        return $buffer;
    }

    private function section07b3ceab8d7100ef826c28857d1522f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'groups';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'groups';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC877874b20aed109ed5be9bdc0ef9c49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected="selected"';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected="selected"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72cc482fd3e8dee0a7d0dc78f1e0b774(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <option value="{{value}}" {{#selected}}selected="selected"{{/selected}} title="{{{text}}}">{{{text}}}</option>
                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'selected' section
                $value = $context->find('selected');
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $value);
                $buffer .= ' title="';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9db7e4bc5f16a36de19bce56d85d3992(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showmembersforgroup, group';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showmembersforgroup, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ab1c7d796f353151ef9c76d9867de3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editgroupsettings, group';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editgroupsettings, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2eb10691007c92bdff260da6f5c039fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled="disabled"';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'disabled="disabled"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa414baa85f4ddc5dd8b84320c171be9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'deleteselectedgroup, group';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'deleteselectedgroup, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section933f680f21c30185ea1285a27f349637(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'creategroup, group';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'creategroup, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE981309a9c88fdbff700badad9299c05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'autocreategroups, group';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'autocreategroups, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e3c70b3235cd3c658aeb2583c3e5b15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'importgroups, group';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'importgroups, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAdadf327cc0a1dc31d7c65f510e500c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'membersofselectedgroup, group';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'membersofselectedgroup, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a0e3d9efb531da37eca1a91f2d8c23e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <option value="{{value}}">{{{text}}}‎</option>
                                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '‎</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5163626e8d699544054c116e32bf008e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <optgroup label="{{role}}">
                                {{#rolemembers}}
                                    <option value="{{value}}">{{{text}}}‎</option>
                                {{/rolemembers}}
                            </optgroup>
                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <optgroup label="';
                $value = $this->resolveValue($context->find('role'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'rolemembers' section
                $value = $context->find('rolemembers');
                $buffer .= $this->section6a0e3d9efb531da37eca1a91f2d8c23e($context, $indent, $value);
                $buffer .= $indent . '                            </optgroup>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e12385a6e0170839a40c14d8de6b906(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'adduserstogroup, group';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'adduserstogroup, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC40f688cf06da1349f353e773d4b4474(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\', \'core/yui\'], function($) {
        $("#groups").change(function() {
            M.core_group.membersCombo.refreshMembers();
        });
        M.core_group.init_index(Y, "{{wwwroot}}", {{courseid}});
        var undeletableGroups = JSON.parse(\'{{{undeletablegroups}}}\');
        M.core_group.groupslist(Y, undeletableGroups);
    });
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'jquery\', \'core/yui\'], function($) {
';
                $buffer .= $indent . '        $("#groups").change(function() {
';
                $buffer .= $indent . '            M.core_group.membersCombo.refreshMembers();
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '        M.core_group.init_index(Y, "';
                $value = $this->resolveValue($context->find('wwwroot'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '", ';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');
';
                $buffer .= $indent . '        var undeletableGroups = JSON.parse(\'';
                $value = $this->resolveValue($context->find('undeletablegroups'), $context);
                $buffer .= $value;
                $buffer .= '\');
';
                $buffer .= $indent . '        M.core_group.groupslist(Y, undeletableGroups);
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
