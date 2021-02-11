<?php

class __Mustache_b61ca3dac37a2d18e3894a1c08813d10 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'showincourseonly' section
        $value = $context->find('showincourseonly');
        $buffer .= $this->section317b87ce2f2190611648a508f9790396($context, $indent, $value);

        return $buffer;
    }

    private function section27e5909abe352a5cb6c5360a73c6de50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="editcogbutton">{{{editcog}}}</div>
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
                
                $buffer .= $indent . '            <div class="editcogbutton">';
                $value = $this->resolveValue($context->find('editcog'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE151ee3f28ca13a4e427c29997f30d0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
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
                
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" class="list-group-item">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section201e75df3198db60a340e77b012718d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#hasqbanklinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasqbanklinks}}
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
                
                // 'hasqbanklinks' section
                $value = $context->find('hasqbanklinks');
                $buffer .= $this->sectionE151ee3f28ca13a4e427c29997f30d0d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf9060f2a21d6d083a6ba9943644be78(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="dashtitle">
                        <h3><i class="fa fa-question-circle dashicon"></i>{{{qbanktitle}}}</h3>
                        <p>{{{qbankdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hasqbanklinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasqbanklinks}}
                        {{/dashlinks}}
                    </div>
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
                
                $buffer .= $indent . '                    <div class="dashtitle">
';
                $buffer .= $indent . '                        <h3><i class="fa fa-question-circle dashicon"></i>';
                $value = $this->resolveValue($context->find('qbanktitle'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('qbankdesc'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="list-group">
';
                // 'dashlinks' section
                $value = $context->find('dashlinks');
                $buffer .= $this->section201e75df3198db60a340e77b012718d7($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section94ac3acfb59eebbbb5e3f751821b608c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#hasbadgelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasbadgelinks}}
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
                
                // 'hasbadgelinks' section
                $value = $context->find('hasbadgelinks');
                $buffer .= $this->sectionE151ee3f28ca13a4e427c29997f30d0d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section020c8347f248c89d705143b4192611a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="dashtitle">
                        <h3><i class="fa fa-trophy dashicon"></i>{{{badgestitle}}}</h3>
                        <p>{{{badgesdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hasbadgelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasbadgelinks}}
                        {{/dashlinks}}
                    </div>
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
                
                $buffer .= $indent . '                    <div class="dashtitle">
';
                $buffer .= $indent . '                        <h3><i class="fa fa-trophy dashicon"></i>';
                $value = $this->resolveValue($context->find('badgestitle'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('badgesdesc'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="list-group">
';
                // 'dashlinks' section
                $value = $context->find('dashlinks');
                $buffer .= $this->section94ac3acfb59eebbbb5e3f751821b608c($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35bd88650191694c8f4e40c47cf6c0df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#hascoursemanagelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hascoursemanagelinks}}
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
                
                // 'hascoursemanagelinks' section
                $value = $context->find('hascoursemanagelinks');
                $buffer .= $this->sectionE151ee3f28ca13a4e427c29997f30d0d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4bfaa787c1c1ef107ddd00ea076513a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="col-md-3 coursemanagelinks">
                    <div class="dashtitle">
                        <h3><i class="fa fa-cogs dashicon"></i>{{{coursemanagetitle}}}</h3>
                        <p>{{{coursemanagedesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hascoursemanagelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hascoursemanagelinks}}
                        {{/dashlinks}}
                    </div>
                </div>
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
                
                $buffer .= $indent . '                <div class="col-md-3 coursemanagelinks">
';
                $buffer .= $indent . '                    <div class="dashtitle">
';
                $buffer .= $indent . '                        <h3><i class="fa fa-cogs dashicon"></i>';
                $value = $this->resolveValue($context->find('coursemanagetitle'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('coursemanagedesc'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="list-group">
';
                // 'dashlinks' section
                $value = $context->find('dashlinks');
                $buffer .= $this->section35bd88650191694c8f4e40c47cf6c0df($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4505abafd013e124288ecc89a86589cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#haseasyenrollment}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/haseasyenrollment}}
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
                
                // 'haseasyenrollment' section
                $value = $context->find('haseasyenrollment');
                $buffer .= $this->sectionE151ee3f28ca13a4e427c29997f30d0d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f46c49bb630ac15138d63f3020f2594(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#dashlinks}}
                        {{#haseasyenrollment}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/haseasyenrollment}}
                        {{/dashlinks}}
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
                
                // 'dashlinks' section
                $value = $context->find('dashlinks');
                $buffer .= $this->section4505abafd013e124288ecc89a86589cc($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3bd0e5483c41d8bb35a0dd9806e0890c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#hasuserlinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasuserlinks}}
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
                
                // 'hasuserlinks' section
                $value = $context->find('hasuserlinks');
                $buffer .= $this->sectionE151ee3f28ca13a4e427c29997f30d0d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40ec35b8f4e843d6e7b6ed3cf6d43c90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="col-md-3 userlinks">
                    <div class="dashtitle">
                        <h3><i class="fa fa-users dashicon"></i>{{{userlinkstitle}}}</h3>
                        <p>{{{userlinksdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#haspermission}}
                        {{#dashlinks}}
                        {{#haseasyenrollment}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/haseasyenrollment}}
                        {{/dashlinks}}
                        {{/haspermission}}
                        {{#dashlinks}}
                        {{#hasuserlinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasuserlinks}}
                        {{/dashlinks}}
                    </div>
                </div>
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
                
                $buffer .= $indent . '                <div class="col-md-3 userlinks">
';
                $buffer .= $indent . '                    <div class="dashtitle">
';
                $buffer .= $indent . '                        <h3><i class="fa fa-users dashicon"></i>';
                $value = $this->resolveValue($context->find('userlinkstitle'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('userlinksdesc'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="list-group">
';
                // 'haspermission' section
                $value = $context->find('haspermission');
                $buffer .= $this->section9f46c49bb630ac15138d63f3020f2594($context, $indent, $value);
                // 'dashlinks' section
                $value = $context->find('dashlinks');
                $buffer .= $this->section3bd0e5483c41d8bb35a0dd9806e0890c($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc67543b626c13f98496afd6be655030(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

<div class="modal fade" id="teacherdashslider" tabindex="-1" role="dialog" aria-labelledby="teacherdashslider" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
    <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
        </button>

        <div class="teacherdashboard">
        <div class="container-fluid">
        {{#haseditcog}}
            <div class="editcogbutton">{{{editcog}}}</div>
        {{/haseditcog}}
                <div class="coursemanagementmessage">{{{coursemanagementmessage}}}</div>

                <div class="row">
                <div class="col-md-3 activities">
                    <div class="dashtitle">
                        <h3 class="card-title"><i class="fa fa-check-square-o dashicon"></i>{{{activitylinkstitle}}}</h3>
                        <p>{{{activitylinkstitle_desc}}}</p>
                    </div>
                    <div class="list-group">
                    {{{courseactivities}}}
                    </div>
                </div>

                <div class="col-md-3 questionlinks">
                    {{#hasquestionpermission}}
                    <div class="dashtitle">
                        <h3><i class="fa fa-question-circle dashicon"></i>{{{qbanktitle}}}</h3>
                        <p>{{{qbankdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hasqbanklinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasqbanklinks}}
                        {{/dashlinks}}
                    </div>
                    {{/hasquestionpermission}}
                    {{#hasbadgepermission}}
                    <div class="dashtitle">
                        <h3><i class="fa fa-trophy dashicon"></i>{{{badgestitle}}}</h3>
                        <p>{{{badgesdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hasbadgelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasbadgelinks}}
                        {{/dashlinks}}
                    </div>
                    {{/hasbadgepermission}}
                </div>

                {{#hascoursepermission}}
                <div class="col-md-3 coursemanagelinks">
                    <div class="dashtitle">
                        <h3><i class="fa fa-cogs dashicon"></i>{{{coursemanagetitle}}}</h3>
                        <p>{{{coursemanagedesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hascoursemanagelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hascoursemanagelinks}}
                        {{/dashlinks}}
                    </div>
                </div>
                {{/hascoursepermission}}

                {{#hasuserpermission}}
                <div class="col-md-3 userlinks">
                    <div class="dashtitle">
                        <h3><i class="fa fa-users dashicon"></i>{{{userlinkstitle}}}</h3>
                        <p>{{{userlinksdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#haspermission}}
                        {{#dashlinks}}
                        {{#haseasyenrollment}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/haseasyenrollment}}
                        {{/dashlinks}}
                        {{/haspermission}}
                        {{#dashlinks}}
                        {{#hasuserlinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasuserlinks}}
                        {{/dashlinks}}
                    </div>
                </div>
                {{/hasuserpermission}}
            </div>

        </div>
        </div>

    </div>
    </div>

</div>
</div>

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
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div class="modal fade" id="teacherdashslider" tabindex="-1" role="dialog" aria-labelledby="teacherdashslider" aria-hidden="true">
';
                $buffer .= $indent . '  <div class="modal-dialog" role="document">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="modal-content">
';
                $buffer .= $indent . '    <div class="modal-body">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
';
                $buffer .= $indent . '              <span aria-hidden="true">&times;</span>
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="teacherdashboard">
';
                $buffer .= $indent . '        <div class="container-fluid">
';
                // 'haseditcog' section
                $value = $context->find('haseditcog');
                $buffer .= $this->section27e5909abe352a5cb6c5360a73c6de50($context, $indent, $value);
                $buffer .= $indent . '                <div class="coursemanagementmessage">';
                $value = $this->resolveValue($context->find('coursemanagementmessage'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="row">
';
                $buffer .= $indent . '                <div class="col-md-3 activities">
';
                $buffer .= $indent . '                    <div class="dashtitle">
';
                $buffer .= $indent . '                        <h3 class="card-title"><i class="fa fa-check-square-o dashicon"></i>';
                $value = $this->resolveValue($context->find('activitylinkstitle'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('activitylinkstitle_desc'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="list-group">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('courseactivities'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="col-md-3 questionlinks">
';
                // 'hasquestionpermission' section
                $value = $context->find('hasquestionpermission');
                $buffer .= $this->sectionFf9060f2a21d6d083a6ba9943644be78($context, $indent, $value);
                // 'hasbadgepermission' section
                $value = $context->find('hasbadgepermission');
                $buffer .= $this->section020c8347f248c89d705143b4192611a1($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                // 'hascoursepermission' section
                $value = $context->find('hascoursepermission');
                $buffer .= $this->section4bfaa787c1c1ef107ddd00ea076513a3($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'hasuserpermission' section
                $value = $context->find('hasuserpermission');
                $buffer .= $this->section40ec35b8f4e843d6e7b6ed3cf6d43c90($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a48b4c314a9ebec53773f2a626e3585(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#teacherdash}}

<div class="modal fade" id="teacherdashslider" tabindex="-1" role="dialog" aria-labelledby="teacherdashslider" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
    <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
        </button>

        <div class="teacherdashboard">
        <div class="container-fluid">
        {{#haseditcog}}
            <div class="editcogbutton">{{{editcog}}}</div>
        {{/haseditcog}}
                <div class="coursemanagementmessage">{{{coursemanagementmessage}}}</div>

                <div class="row">
                <div class="col-md-3 activities">
                    <div class="dashtitle">
                        <h3 class="card-title"><i class="fa fa-check-square-o dashicon"></i>{{{activitylinkstitle}}}</h3>
                        <p>{{{activitylinkstitle_desc}}}</p>
                    </div>
                    <div class="list-group">
                    {{{courseactivities}}}
                    </div>
                </div>

                <div class="col-md-3 questionlinks">
                    {{#hasquestionpermission}}
                    <div class="dashtitle">
                        <h3><i class="fa fa-question-circle dashicon"></i>{{{qbanktitle}}}</h3>
                        <p>{{{qbankdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hasqbanklinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasqbanklinks}}
                        {{/dashlinks}}
                    </div>
                    {{/hasquestionpermission}}
                    {{#hasbadgepermission}}
                    <div class="dashtitle">
                        <h3><i class="fa fa-trophy dashicon"></i>{{{badgestitle}}}</h3>
                        <p>{{{badgesdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hasbadgelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasbadgelinks}}
                        {{/dashlinks}}
                    </div>
                    {{/hasbadgepermission}}
                </div>

                {{#hascoursepermission}}
                <div class="col-md-3 coursemanagelinks">
                    <div class="dashtitle">
                        <h3><i class="fa fa-cogs dashicon"></i>{{{coursemanagetitle}}}</h3>
                        <p>{{{coursemanagedesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hascoursemanagelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hascoursemanagelinks}}
                        {{/dashlinks}}
                    </div>
                </div>
                {{/hascoursepermission}}

                {{#hasuserpermission}}
                <div class="col-md-3 userlinks">
                    <div class="dashtitle">
                        <h3><i class="fa fa-users dashicon"></i>{{{userlinkstitle}}}</h3>
                        <p>{{{userlinksdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#haspermission}}
                        {{#dashlinks}}
                        {{#haseasyenrollment}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/haseasyenrollment}}
                        {{/dashlinks}}
                        {{/haspermission}}
                        {{#dashlinks}}
                        {{#hasuserlinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasuserlinks}}
                        {{/dashlinks}}
                    </div>
                </div>
                {{/hasuserpermission}}
            </div>

        </div>
        </div>

    </div>
    </div>

</div>
</div>

{{/teacherdash}}
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
                
                // 'teacherdash' section
                $value = $context->find('teacherdash');
                $buffer .= $this->sectionBc67543b626c13f98496afd6be655030($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4e3a656002eeb23d42f89a2cd2bbb31(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="col-md-8">
                        <div class="studentdashboardtextbox">{{{studentdashboardtextbox}}}</div>
                    </div>
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
                
                $buffer .= $indent . '                    <div class="col-md-8">
';
                $buffer .= $indent . '                        <div class="studentdashboardtextbox">';
                $value = $this->resolveValue($context->find('studentdashboardtextbox'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a969239c6b019af0103b1bc185746fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="col-md-2 studentgradebook">
                        <p>{{{mygradestext}}}</p><a href="{{{gradeslinkstudent}}}" alt="{{{mygradestext}}}"><i class="fa fa-5x fa-bar-chart"></i></a>
                    </div>
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
                
                $buffer .= $indent . '                    <div class="col-md-2 studentgradebook">
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('mygradestext'), $context);
                $buffer .= $value;
                $buffer .= '</p><a href="';
                $value = $this->resolveValue($context->find('gradeslinkstudent'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('mygradestext'), $context);
                $buffer .= $value;
                $buffer .= '"><i class="fa fa-5x fa-bar-chart"></i></a>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section49de0bbab8ae0dea3e3d747efed64393(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="col-md-2 studentadministration">
                        <p>{{{studentcoursemanage}}}</p><a href="{{{studentcourseadminlink}}}" alt="{{{studentcoursemanage}}}"><i class="fa fa-5x fa-cog"></i></a>
                    </div>
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
                
                $buffer .= '
';
                $buffer .= $indent . '                    <div class="col-md-2 studentadministration">
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('studentcoursemanage'), $context);
                $buffer .= $value;
                $buffer .= '</p><a href="';
                $value = $this->resolveValue($context->find('studentcourseadminlink'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('studentcoursemanage'), $context);
                $buffer .= $value;
                $buffer .= '"><i class="fa fa-5x fa-cog"></i></a>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74ee7b51d12f1769298c7478478742d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{#studentcourseadminlink}}
                    <div class="col-md-2 studentadministration">
                        <p>{{{studentcoursemanage}}}</p><a href="{{{studentcourseadminlink}}}" alt="{{{studentcoursemanage}}}"><i class="fa fa-5x fa-cog"></i></a>
                    </div>
                    {{/studentcourseadminlink}} ';
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
                
                $buffer .= ' ';
                // 'studentcourseadminlink' section
                $value = $context->find('studentcourseadminlink');
                $buffer .= $this->section49de0bbab8ae0dea3e3d747efed64393($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e70cd1d4089894b813d578e2c82638b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{{content}}}
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
                
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section767a9c8ab6e216c56167cb63e8b20f9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="dashtitle">
                            <h3><i class="fa fa-{{{icon}}}">&nbsp</i>{{{title}}}</h3>
                        </div>
                            <div class="card-block">
                                {{#courseinfo}}
                                    {{{content}}}
                                {{/courseinfo}}
                            </div>
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
                
                $buffer .= $indent . '                        <div class="dashtitle">
';
                $buffer .= $indent . '                            <h3><i class="fa fa-';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= $value;
                $buffer .= '">&nbsp</i>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                            <div class="card-block">
';
                // 'courseinfo' section
                $value = $context->find('courseinfo');
                $buffer .= $this->section7e70cd1d4089894b813d578e2c82638b($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa8367a26124e5c338d9e8a38bdcbffc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'email, moodle';
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
                
                $buffer .= 'email, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e2402b32a6c2dfe65fc05dd1c70528f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>';
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
                
                $buffer .= '<a href="mailto:';
                $value = $this->resolveValue($context->find('email'), $context);
                $buffer .= $value;
                $buffer .= '"><i class="fa fa-envelope-o">&nbsp</i>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAa8367a26124e5c338d9e8a38bdcbffc($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section721c00a4ef4104d4efadffb447c413f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sendmessage, message';
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
                
                $buffer .= 'sendmessage, message';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75f0ee63c42ca498cc9a2eaa532b829e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>';
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
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('messaging'), $context);
                $buffer .= $value;
                $buffer .= '"><i class="fa fa-comment">&nbsp</i>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section721c00a4ef4104d4efadffb447c413f4($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa57a06a2b9b7389ec930b0bc37b85a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="list-group-item">
                                    <div class="staffmember">
                                        {{{picture}}}
                                        <div class="staffinfo">
                                            <h4>{{{name}}}</h4>
                                            <p>{{#hasemail}}<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>{{/hasemail}} <br /> {{#hasmessaging}}<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>{{/hasmessaging}}</p>
                                        </div>
                                    </div>
                                </div>
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
                
                $buffer .= $indent . '                                <div class="list-group-item">
';
                $buffer .= $indent . '                                    <div class="staffmember">
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('picture'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                        <div class="staffinfo">
';
                $buffer .= $indent . '                                            <h4>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '                                            <p>';
                // 'hasemail' section
                $value = $context->find('hasemail');
                $buffer .= $this->section9e2402b32a6c2dfe65fc05dd1c70528f($context, $indent, $value);
                $buffer .= ' <br /> ';
                // 'hasmessaging' section
                $value = $context->find('hasmessaging');
                $buffer .= $this->section75f0ee63c42ca498cc9a2eaa532b829e($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8eb8341922d790912252588c57aef35b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="list-group-item">
                            <div class="staffmember">
                                {{{picture}}}
                                <div class="staffinfo">
                                    <h4>{{{name}}}</h4>
                                    <p>{{#hasemail}}<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>{{/hasemail}} <br /> {{#hasmessaging}}<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>{{/hasmessaging}}</p>
                                </div>
                            </div>
                            </div>
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
                
                $buffer .= $indent . '                            <div class="list-group-item">
';
                $buffer .= $indent . '                            <div class="staffmember">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('picture'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                <div class="staffinfo">
';
                $buffer .= $indent . '                                    <h4>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '                                    <p>';
                // 'hasemail' section
                $value = $context->find('hasemail');
                $buffer .= $this->section9e2402b32a6c2dfe65fc05dd1c70528f($context, $indent, $value);
                $buffer .= ' <br /> ';
                // 'hasmessaging' section
                $value = $context->find('hasmessaging');
                $buffer .= $this->section75f0ee63c42ca498cc9a2eaa532b829e($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8c026f8b7787c52abc3e5ba00402ee03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="dashtitle">
                            <h3><i class="fa fa-{{{icon}}}">&nbsp</i>{{{title}}}</h3>
                        </div>
                            <div class="list-group">
                                {{#courseteachers}}
                                <div class="list-group-item">
                                    <div class="staffmember">
                                        {{{picture}}}
                                        <div class="staffinfo">
                                            <h4>{{{name}}}</h4>
                                            <p>{{#hasemail}}<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>{{/hasemail}} <br /> {{#hasmessaging}}<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>{{/hasmessaging}}</p>
                                        </div>
                                    </div>
                                </div>
                                {{/courseteachers}}
                            </div>
                            <div class="list-group">
                            {{#courseother}}
                            <div class="list-group-item">
                            <div class="staffmember">
                                {{{picture}}}
                                <div class="staffinfo">
                                    <h4>{{{name}}}</h4>
                                    <p>{{#hasemail}}<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>{{/hasemail}} <br /> {{#hasmessaging}}<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>{{/hasmessaging}}</p>
                                </div>
                            </div>
                            </div>
                        {{/courseother}}
                        </div>
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
                
                $buffer .= $indent . '                        <div class="dashtitle">
';
                $buffer .= $indent . '                            <h3><i class="fa fa-';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= $value;
                $buffer .= '">&nbsp</i>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                            <div class="list-group">
';
                // 'courseteachers' section
                $value = $context->find('courseteachers');
                $buffer .= $this->sectionAa57a06a2b9b7389ec930b0bc37b85a6($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="list-group">
';
                // 'courseother' section
                $value = $context->find('courseother');
                $buffer .= $this->section8eb8341922d790912252588c57aef35b($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF56cffc57ffd185111a9e4ffdca565df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'myprogresstext, theme_fordson';
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
                
                $buffer .= 'myprogresstext, theme_fordson';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83bd7c462aa1f6b04b7e5b146c411f2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="col-md-12 studentprogress">
                    {{#str}}myprogresstext, theme_fordson{{/str}} 
                    {{{progress}}}
                </div>
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
                
                $buffer .= $indent . '                <div class="col-md-12 studentprogress">
';
                $buffer .= $indent . '                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF56cffc57ffd185111a9e4ffdca565df($context, $indent, $value);
                $buffer .= ' 
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2e4ce4cd2610f10652dddf8d0279efd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="modal fade" id="studentdashslider" tabindex="-1" role="dialog" aria-labelledby="teacherdashslider" aria-hidden="true">
<div class="modal-dialog" role="document">

    <div class="modal-content">
    <div class="modal-body">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        <div class="studentdashboard">
        <div class="container-fluid">
        {{#haseditcog}}
            <div class="editcogbutton">{{{editcog}}}</div>
        {{/haseditcog}}
            <div class="row">
                    {{#studentdashboardtextbox}}
                    <div class="col-md-8">
                        <div class="studentdashboardtextbox">{{{studentdashboardtextbox}}}</div>
                    </div>
                    {{/studentdashboardtextbox}}

                    {{#hasgradebookshow}}
                    <div class="col-md-2 studentgradebook">
                        <p>{{{mygradestext}}}</p><a href="{{{gradeslinkstudent}}}" alt="{{{mygradestext}}}"><i class="fa fa-5x fa-bar-chart"></i></a>
                    </div>
                    {{/hasgradebookshow}}

                    {{#hascourseadminshow}} {{#studentcourseadminlink}}
                    <div class="col-md-2 studentadministration">
                        <p>{{{studentcoursemanage}}}</p><a href="{{{studentcourseadminlink}}}" alt="{{{studentcoursemanage}}}"><i class="fa fa-5x fa-cog"></i></a>
                    </div>
                    {{/studentcourseadminlink}} {{/hascourseadminshow}}
                </div>

            <div class="row">
                    <div class="col-md-4 coursesummary">
                    {{#hascourseinfogroup}}
                        <div class="dashtitle">
                            <h3><i class="fa fa-{{{icon}}}">&nbsp</i>{{{title}}}</h3>
                        </div>
                            <div class="card-block">
                                {{#courseinfo}}
                                    {{{content}}}
                                {{/courseinfo}}
                            </div>
                    {{/hascourseinfogroup}}
                    </div>

                    <div class="col-md-5 coursestafflisting">
                    {{#hascoursestaffgroup}}
                        <div class="dashtitle">
                            <h3><i class="fa fa-{{{icon}}}">&nbsp</i>{{{title}}}</h3>
                        </div>
                            <div class="list-group">
                                {{#courseteachers}}
                                <div class="list-group-item">
                                    <div class="staffmember">
                                        {{{picture}}}
                                        <div class="staffinfo">
                                            <h4>{{{name}}}</h4>
                                            <p>{{#hasemail}}<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>{{/hasemail}} <br /> {{#hasmessaging}}<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>{{/hasmessaging}}</p>
                                        </div>
                                    </div>
                                </div>
                                {{/courseteachers}}
                            </div>
                            <div class="list-group">
                            {{#courseother}}
                            <div class="list-group-item">
                            <div class="staffmember">
                                {{{picture}}}
                                <div class="staffinfo">
                                    <h4>{{{name}}}</h4>
                                    <p>{{#hasemail}}<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>{{/hasemail}} <br /> {{#hasmessaging}}<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>{{/hasmessaging}}</p>
                                </div>
                            </div>
                            </div>
                        {{/courseother}}
                        </div>
                    {{/hascoursestaffgroup}}
                    </div>

                    <div class="col-md-3 activitylinks">
                        <div class="dashtitle">
                            <h3><i class="fa fa-check-square-o dashicon"></i>{{{activitylinkstitle}}}</h3>     
                        </div>
                        <div class="list-group">
                            {{{courseactivities}}}
                        </div>
                    </div>
                </div>
                {{#hascompletionshow}}
                <div class="col-md-12 studentprogress">
                    {{#str}}myprogresstext, theme_fordson{{/str}} 
                    {{{progress}}}
                </div>
                {{/hascompletionshow}}
        </div>
        </div>

    </div>
    </div>

</div>
</div>

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
                
                $buffer .= $indent . '<div class="modal fade" id="studentdashslider" tabindex="-1" role="dialog" aria-labelledby="teacherdashslider" aria-hidden="true">
';
                $buffer .= $indent . '<div class="modal-dialog" role="document">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="modal-content">
';
                $buffer .= $indent . '    <div class="modal-body">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
';
                $buffer .= $indent . '                <span aria-hidden="true">&times;</span>
';
                $buffer .= $indent . '            </button>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="studentdashboard">
';
                $buffer .= $indent . '        <div class="container-fluid">
';
                // 'haseditcog' section
                $value = $context->find('haseditcog');
                $buffer .= $this->section27e5909abe352a5cb6c5360a73c6de50($context, $indent, $value);
                $buffer .= $indent . '            <div class="row">
';
                // 'studentdashboardtextbox' section
                $value = $context->find('studentdashboardtextbox');
                $buffer .= $this->sectionB4e3a656002eeb23d42f89a2cd2bbb31($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'hasgradebookshow' section
                $value = $context->find('hasgradebookshow');
                $buffer .= $this->section4a969239c6b019af0103b1bc185746fb($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    ';
                // 'hascourseadminshow' section
                $value = $context->find('hascourseadminshow');
                $buffer .= $this->section74ee7b51d12f1769298c7478478742d5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="row">
';
                $buffer .= $indent . '                    <div class="col-md-4 coursesummary">
';
                // 'hascourseinfogroup' section
                $value = $context->find('hascourseinfogroup');
                $buffer .= $this->section767a9c8ab6e216c56167cb63e8b20f9b($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div class="col-md-5 coursestafflisting">
';
                // 'hascoursestaffgroup' section
                $value = $context->find('hascoursestaffgroup');
                $buffer .= $this->section8c026f8b7787c52abc3e5ba00402ee03($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div class="col-md-3 activitylinks">
';
                $buffer .= $indent . '                        <div class="dashtitle">
';
                $buffer .= $indent . '                            <h3><i class="fa fa-check-square-o dashicon"></i>';
                $value = $this->resolveValue($context->find('activitylinkstitle'), $context);
                $buffer .= $value;
                $buffer .= '</h3>     
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="list-group">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('courseactivities'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                // 'hascompletionshow' section
                $value = $context->find('hascompletionshow');
                $buffer .= $this->section83bd7c462aa1f6b04b7e5b146c411f2e($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section317b87ce2f2190611648a508f9790396(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#hasteacherdash}}
{{#teacherdash}}

<div class="modal fade" id="teacherdashslider" tabindex="-1" role="dialog" aria-labelledby="teacherdashslider" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
    <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
        </button>

        <div class="teacherdashboard">
        <div class="container-fluid">
        {{#haseditcog}}
            <div class="editcogbutton">{{{editcog}}}</div>
        {{/haseditcog}}
                <div class="coursemanagementmessage">{{{coursemanagementmessage}}}</div>

                <div class="row">
                <div class="col-md-3 activities">
                    <div class="dashtitle">
                        <h3 class="card-title"><i class="fa fa-check-square-o dashicon"></i>{{{activitylinkstitle}}}</h3>
                        <p>{{{activitylinkstitle_desc}}}</p>
                    </div>
                    <div class="list-group">
                    {{{courseactivities}}}
                    </div>
                </div>

                <div class="col-md-3 questionlinks">
                    {{#hasquestionpermission}}
                    <div class="dashtitle">
                        <h3><i class="fa fa-question-circle dashicon"></i>{{{qbanktitle}}}</h3>
                        <p>{{{qbankdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hasqbanklinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasqbanklinks}}
                        {{/dashlinks}}
                    </div>
                    {{/hasquestionpermission}}
                    {{#hasbadgepermission}}
                    <div class="dashtitle">
                        <h3><i class="fa fa-trophy dashicon"></i>{{{badgestitle}}}</h3>
                        <p>{{{badgesdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hasbadgelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasbadgelinks}}
                        {{/dashlinks}}
                    </div>
                    {{/hasbadgepermission}}
                </div>

                {{#hascoursepermission}}
                <div class="col-md-3 coursemanagelinks">
                    <div class="dashtitle">
                        <h3><i class="fa fa-cogs dashicon"></i>{{{coursemanagetitle}}}</h3>
                        <p>{{{coursemanagedesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hascoursemanagelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hascoursemanagelinks}}
                        {{/dashlinks}}
                    </div>
                </div>
                {{/hascoursepermission}}

                {{#hasuserpermission}}
                <div class="col-md-3 userlinks">
                    <div class="dashtitle">
                        <h3><i class="fa fa-users dashicon"></i>{{{userlinkstitle}}}</h3>
                        <p>{{{userlinksdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#haspermission}}
                        {{#dashlinks}}
                        {{#haseasyenrollment}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/haseasyenrollment}}
                        {{/dashlinks}}
                        {{/haspermission}}
                        {{#dashlinks}}
                        {{#hasuserlinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasuserlinks}}
                        {{/dashlinks}}
                    </div>
                </div>
                {{/hasuserpermission}}
            </div>

        </div>
        </div>

    </div>
    </div>

</div>
</div>

{{/teacherdash}}
{{/hasteacherdash}}


{{#hasstudentdash}}
<div class="modal fade" id="studentdashslider" tabindex="-1" role="dialog" aria-labelledby="teacherdashslider" aria-hidden="true">
<div class="modal-dialog" role="document">

    <div class="modal-content">
    <div class="modal-body">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        <div class="studentdashboard">
        <div class="container-fluid">
        {{#haseditcog}}
            <div class="editcogbutton">{{{editcog}}}</div>
        {{/haseditcog}}
            <div class="row">
                    {{#studentdashboardtextbox}}
                    <div class="col-md-8">
                        <div class="studentdashboardtextbox">{{{studentdashboardtextbox}}}</div>
                    </div>
                    {{/studentdashboardtextbox}}

                    {{#hasgradebookshow}}
                    <div class="col-md-2 studentgradebook">
                        <p>{{{mygradestext}}}</p><a href="{{{gradeslinkstudent}}}" alt="{{{mygradestext}}}"><i class="fa fa-5x fa-bar-chart"></i></a>
                    </div>
                    {{/hasgradebookshow}}

                    {{#hascourseadminshow}} {{#studentcourseadminlink}}
                    <div class="col-md-2 studentadministration">
                        <p>{{{studentcoursemanage}}}</p><a href="{{{studentcourseadminlink}}}" alt="{{{studentcoursemanage}}}"><i class="fa fa-5x fa-cog"></i></a>
                    </div>
                    {{/studentcourseadminlink}} {{/hascourseadminshow}}
                </div>

            <div class="row">
                    <div class="col-md-4 coursesummary">
                    {{#hascourseinfogroup}}
                        <div class="dashtitle">
                            <h3><i class="fa fa-{{{icon}}}">&nbsp</i>{{{title}}}</h3>
                        </div>
                            <div class="card-block">
                                {{#courseinfo}}
                                    {{{content}}}
                                {{/courseinfo}}
                            </div>
                    {{/hascourseinfogroup}}
                    </div>

                    <div class="col-md-5 coursestafflisting">
                    {{#hascoursestaffgroup}}
                        <div class="dashtitle">
                            <h3><i class="fa fa-{{{icon}}}">&nbsp</i>{{{title}}}</h3>
                        </div>
                            <div class="list-group">
                                {{#courseteachers}}
                                <div class="list-group-item">
                                    <div class="staffmember">
                                        {{{picture}}}
                                        <div class="staffinfo">
                                            <h4>{{{name}}}</h4>
                                            <p>{{#hasemail}}<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>{{/hasemail}} <br /> {{#hasmessaging}}<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>{{/hasmessaging}}</p>
                                        </div>
                                    </div>
                                </div>
                                {{/courseteachers}}
                            </div>
                            <div class="list-group">
                            {{#courseother}}
                            <div class="list-group-item">
                            <div class="staffmember">
                                {{{picture}}}
                                <div class="staffinfo">
                                    <h4>{{{name}}}</h4>
                                    <p>{{#hasemail}}<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>{{/hasemail}} <br /> {{#hasmessaging}}<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>{{/hasmessaging}}</p>
                                </div>
                            </div>
                            </div>
                        {{/courseother}}
                        </div>
                    {{/hascoursestaffgroup}}
                    </div>

                    <div class="col-md-3 activitylinks">
                        <div class="dashtitle">
                            <h3><i class="fa fa-check-square-o dashicon"></i>{{{activitylinkstitle}}}</h3>     
                        </div>
                        <div class="list-group">
                            {{{courseactivities}}}
                        </div>
                    </div>
                </div>
                {{#hascompletionshow}}
                <div class="col-md-12 studentprogress">
                    {{#str}}myprogresstext, theme_fordson{{/str}} 
                    {{{progress}}}
                </div>
                {{/hascompletionshow}}
        </div>
        </div>

    </div>
    </div>

</div>
</div>

{{/hasstudentdash}}
<div style="clear:both;"></div>
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
                
                // 'hasteacherdash' section
                $value = $context->find('hasteacherdash');
                $buffer .= $this->section2a48b4c314a9ebec53773f2a626e3585($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                // 'hasstudentdash' section
                $value = $context->find('hasstudentdash');
                $buffer .= $this->sectionF2e4ce4cd2610f10652dddf8d0279efd($context, $indent, $value);
                $buffer .= $indent . '<div style="clear:both;"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
