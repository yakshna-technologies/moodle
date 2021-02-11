<?php

class __Mustache_52c0b6e01e2c46ca0bf690a291e300df extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer id="page-footer" class="py-3 text-dark">
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="course-footer">';
        $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="col-md-8">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.footnote'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.login_info'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.home_link'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'output.page_doc_link' section
        $value = $context->findDot('output.page_doc_link');
        $buffer .= $this->section1aed63cdb84785c64c9e8b3cf28528fe($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="col-md-4">
';
        $buffer .= $indent . '                    <div class="brandbox">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        ';
        // 'output.brandorganization_footer' section
        $value = $context->findDot('output.brandorganization_footer');
        $buffer .= $this->sectionA63c2eda9e4854eee87db6a92c710a72($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            <ul class="footercontact">
';
        $buffer .= $indent . '                                ';
        // 'output.brandwebsite_footer' section
        $value = $context->findDot('output.brandwebsite_footer');
        $buffer .= $this->section1b9e4c6edeeb03d5ea47540c533de44b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                ';
        // 'output.brandemail_footer' section
        $value = $context->findDot('output.brandemail_footer');
        $buffer .= $this->sectionD77ec12b6b05f9dc0d7c24f801f646a6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                ';
        // 'output.brandphone_footer' section
        $value = $context->findDot('output.brandphone_footer');
        $buffer .= $this->sectionA1b62d6c08b79df708b845454a0b2103($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.social_icons'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <nav class="nav navbar-nav d-md-none">
';
        // 'output.custom_menu_flat' section
        $value = $context->findDot('output.custom_menu_flat');
        $buffer .= $this->section46b3ffb39342cde5c532f0c19de9640a($context, $indent, $value);
        $buffer .= $indent . '        </nav>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</footer>
';

        return $buffer;
    }

    private function section1aed63cdb84785c64c9e8b3cf28528fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <p class="helplink">{{{ output.page_doc_link }}}</p>
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
                
                $buffer .= $indent . '                        <p class="helplink">';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA63c2eda9e4854eee87db6a92c710a72(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3>{{output.brandorganization_footer}}</h3>';
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
                
                $buffer .= '<h3>';
                $value = $this->resolveValue($context->findDot('output.brandorganization_footer'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b9e4c6edeeb03d5ea47540c533de44b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<li><i class="fa fa-globe"></i>  {{output.brandwebsite_footer}}</li>';
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
                
                $buffer .= '<li><i class="fa fa-globe"></i>  ';
                $value = $this->resolveValue($context->findDot('output.brandwebsite_footer'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</li>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD77ec12b6b05f9dc0d7c24f801f646a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<li><i class="fa fa-envelope"></i>  {{output.brandemail_footer}}</li>';
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
                
                $buffer .= '<li><i class="fa fa-envelope"></i>  ';
                $value = $this->resolveValue($context->findDot('output.brandemail_footer'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</li>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA1b62d6c08b79df708b845454a0b2103(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<li><i class="fa fa-mobile-phone"></i>  {{output.brandphone_footer}}</li>';
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
                
                $buffer .= '<li><i class="fa fa-mobile-phone"></i>  ';
                $value = $this->resolveValue($context->findDot('output.brandphone_footer'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</li>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46b3ffb39342cde5c532f0c19de9640a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <ul class="list-unstyled pt-3">
                    {{> theme_boost/custom_menu_footer }}
                </ul>
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
                
                $buffer .= $indent . '                <ul class="list-unstyled pt-3">
';
                if ($partial = $this->mustache->loadPartial('theme_boost/custom_menu_footer')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
