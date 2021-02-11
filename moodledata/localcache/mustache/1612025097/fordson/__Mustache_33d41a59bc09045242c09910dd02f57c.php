<?php

class __Mustache_33d41a59bc09045242c09910dd02f57c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'showincourseonly' section
        $value = $context->find('showincourseonly');
        $buffer .= $this->sectionE5ef5164882f228952fe0c69f0c36fbc($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hasadminlink' section
        $value = $context->find('hasadminlink');
        $buffer .= $this->sectionCae0839f87bee02433d20f603613c511($context, $indent, $value);

        return $buffer;
    }

    private function sectionDf6824245eb29b749071c89627d3d418(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="teacherdash nav-item nav-link">
            <a role="button" data-tooltip="tooltip" data-placement= "bottom" title="{{{togglebutton}}}" data-toggle="modal" href="#teacherdashslider" class="btn btn-secondary fhs-tooltip">  <i class="fa fa-cogs" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '    <div class="teacherdash nav-item nav-link">
';
                $buffer .= $indent . '            <a role="button" data-tooltip="tooltip" data-placement= "bottom" title="';
                $value = $this->resolveValue($context->find('togglebutton'), $context);
                $buffer .= $value;
                $buffer .= '" data-toggle="modal" href="#teacherdashslider" class="btn btn-secondary fhs-tooltip">  <i class="fa fa-cogs" aria-hidden="true"></i></a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4971ec47e3e62ec41c3019ae18041c2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="enrollcodes nav-item nav-link">
                    <a href="{{{url}}}" data-tooltip="tooltip" data-placement= "bottom" title="{{{title}}}" class="btn btn-secondary fhs-tooltip"><i class="fa fa-key" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                <div class="enrollcodes nav-item nav-link">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" data-tooltip="tooltip" data-placement= "bottom" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '" class="btn btn-secondary fhs-tooltip"><i class="fa fa-key" aria-hidden="true"></i></a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9194a90ab657b0c50a85e90d6af3e06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#haseasyenrollment}}
                <div class="enrollcodes nav-item nav-link">
                    <a href="{{{url}}}" data-tooltip="tooltip" data-placement= "bottom" title="{{{title}}}" class="btn btn-secondary fhs-tooltip"><i class="fa fa-key" aria-hidden="true"></i></a>
                </div>
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
                $buffer .= $this->section4971ec47e3e62ec41c3019ae18041c2f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7602b73a5f62b226b69db1bb5d8e73d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#dashmenu}}
            {{#haseasyenrollment}}
                <div class="enrollcodes nav-item nav-link">
                    <a href="{{{url}}}" data-tooltip="tooltip" data-placement= "bottom" title="{{{title}}}" class="btn btn-secondary fhs-tooltip"><i class="fa fa-key" aria-hidden="true"></i></a>
                </div>
            {{/haseasyenrollment}}
        {{/dashmenu}}
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
                
                // 'dashmenu' section
                $value = $context->find('dashmenu');
                $buffer .= $this->sectionD9194a90ab657b0c50a85e90d6af3e06($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9dc656c5a9288bc7e715eb03bb85b1d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="studentdash nav-item nav-link">
        <a role="button" data-tooltip="tooltip" data-placement= "bottom" title="{{{togglebuttonstudent}}}" data-toggle="modal" href="#studentdashslider" class="btn btn-secondary fhs-tooltip"><i class="fa fa-cogs" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '    <div class="studentdash nav-item nav-link">
';
                $buffer .= $indent . '        <a role="button" data-tooltip="tooltip" data-placement= "bottom" title="';
                $value = $this->resolveValue($context->find('togglebuttonstudent'), $context);
                $buffer .= $value;
                $buffer .= '" data-toggle="modal" href="#studentdashslider" class="btn btn-secondary fhs-tooltip"><i class="fa fa-cogs" aria-hidden="true"></i></a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5ef5164882f228952fe0c69f0c36fbc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#hasteacherdash}}
    <div class="teacherdash nav-item nav-link">
            <a role="button" data-tooltip="tooltip" data-placement= "bottom" title="{{{togglebutton}}}" data-toggle="modal" href="#teacherdashslider" class="btn btn-secondary fhs-tooltip">  <i class="fa fa-cogs" aria-hidden="true"></i></a>
    </div>
    {{/hasteacherdash}}

    {{#haspermission}}
        {{#dashmenu}}
            {{#haseasyenrollment}}
                <div class="enrollcodes nav-item nav-link">
                    <a href="{{{url}}}" data-tooltip="tooltip" data-placement= "bottom" title="{{{title}}}" class="btn btn-secondary fhs-tooltip"><i class="fa fa-key" aria-hidden="true"></i></a>
                </div>
            {{/haseasyenrollment}}
        {{/dashmenu}}
    {{/haspermission}}

    {{#hasstudentdash}}
    <div class="studentdash nav-item nav-link">
        <a role="button" data-tooltip="tooltip" data-placement= "bottom" title="{{{togglebuttonstudent}}}" data-toggle="modal" href="#studentdashslider" class="btn btn-secondary fhs-tooltip"><i class="fa fa-cogs" aria-hidden="true"></i></a>
    </div>
    {{/hasstudentdash}}
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
                $buffer .= $this->sectionDf6824245eb29b749071c89627d3d418($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'haspermission' section
                $value = $context->find('haspermission');
                $buffer .= $this->section7602b73a5f62b226b69db1bb5d8e73d5($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'hasstudentdash' section
                $value = $context->find('hasstudentdash');
                $buffer .= $this->section9dc656c5a9288bc7e715eb03bb85b1d6($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCae0839f87bee02433d20f603613c511(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="siteadminlink nav-item nav-link">
        <a href="{{{siteadminurl}}}" data-tooltip="tooltip" data-placement= "bottom" title="{{{siteadmintitle}}}" class="btn btn-secondary fhs-tooltip"><i class="fa fa-sitemap" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '    <div class="siteadminlink nav-item nav-link">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('siteadminurl'), $context);
                $buffer .= $value;
                $buffer .= '" data-tooltip="tooltip" data-placement= "bottom" title="';
                $value = $this->resolveValue($context->find('siteadmintitle'), $context);
                $buffer .= $value;
                $buffer .= '" class="btn btn-secondary fhs-tooltip"><i class="fa fa-sitemap" aria-hidden="true"></i></a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
