<?php

class __Mustache_be66350d893a812c1eb06f830c2b2536 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'readonly' section
        $value = $context->find('readonly');
        $buffer .= $this->section1da4d893831795764752d46bad279317($context, $indent, $value);
        // 'readonly' inverted section
        $value = $context->find('readonly');
        if (empty($value)) {
            
            $buffer .= $indent . '<div class="form-password">
';
            $buffer .= $indent . '    <span data-passwordunmask="wrapper" data-passwordunmaskid="';
            $value = $this->resolveValue($context->find('id'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">
';
            $buffer .= $indent . '        <span data-passwordunmask="editor">
';
            $buffer .= $indent . '            <input  type="hidden"
';
            $buffer .= $indent . '                    name="';
            $value = $this->resolveValue($context->find('name'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"
';
            $buffer .= $indent . '                    id="';
            $value = $this->resolveValue($context->find('id'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"
';
            $buffer .= $indent . '                    value="';
            $value = $this->resolveValue($context->find('value'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"
';
            $buffer .= $indent . '                    data-size="';
            $value = $this->resolveValue($context->find('size'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"
';
            $buffer .= $indent . '                    class="form-control d-inline-block"
';
            $buffer .= $indent . '                    >
';
            $buffer .= $indent . '        </span>
';
            $buffer .= $indent . '        <a href="#" data-passwordunmask="edit" title="';
            $value = $this->resolveValue($context->find('edithint'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">
';
            $buffer .= $indent . '            <span data-passwordunmask="displayvalue">';
            if ($partial = $this->mustache->loadPartial('core_form/element-passwordunmask-fill')) {
                $buffer .= $partial->renderInternal($context);
            }
            $buffer .= '</span>
';
            $buffer .= $indent . '            ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->sectionA7d3cdaa80a4fb55cbbbdcf6e8230551($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </a>
';
            $buffer .= $indent . '        <a href="#" data-passwordunmask="unmask" title="';
            $value = $this->resolveValue($context->find('unmaskhint'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">
';
            $buffer .= $indent . '            ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->sectionD238d708b51d531766660a637c3be472($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </a>
';
            $buffer .= $indent . '        <span data-passwordunmask="instructions" class="form-text text-muted" style="display: none;">
';
            $buffer .= $indent . '            ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionF86965103a62cc37f20777605d623629($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </span>
';
            $buffer .= $indent . '    </span>
';
            $buffer .= $indent . '</div>
';
            // 'js' section
            $value = $context->find('js');
            $buffer .= $this->section6464548dd70ac3fdc93221fca8faaabc($context, $indent, $value);
        }

        return $buffer;
    }

    private function section1da4d893831795764752d46bad279317(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="form-password">
        <input type="text"
               name = "{{ name }}"
               id="{{ id }}"
               value="********"
               size="{{ size }}"
               class="form-control"
               disabled
        >
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
                
                $buffer .= $indent . '    <div class="form-password">
';
                $buffer .= $indent . '        <input type="text"
';
                $buffer .= $indent . '               name = "';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '               id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '               value="********"
';
                $buffer .= $indent . '               size="';
                $value = $this->resolveValue($context->find('size'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '               class="form-control"
';
                $buffer .= $indent . '               disabled
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1966ed63f39357352a1e773a9fe2c4a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' passwordunmaskedithint, form ';
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
                
                $buffer .= ' passwordunmaskedithint, form ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7d3cdaa80a4fb55cbbbdcf6e8230551(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/passwordunmask-edit, core, {{# str }} passwordunmaskedithint, form {{/ str }}';
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
                
                $buffer .= ' t/passwordunmask-edit, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB1966ed63f39357352a1e773a9fe2c4a($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0456df008114280c7908271e554ab4e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' passwordunmaskrevealhint, form ';
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
                
                $buffer .= ' passwordunmaskrevealhint, form ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD238d708b51d531766660a637c3be472(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/passwordunmask-reveal, core, {{# str }} passwordunmaskrevealhint, form {{/ str }}';
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
                
                $buffer .= ' t/passwordunmask-reveal, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0456df008114280c7908271e554ab4e3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF86965103a62cc37f20777605d623629(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' passwordunmaskinstructions, form ';
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
                
                $buffer .= ' passwordunmaskinstructions, form ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6464548dd70ac3fdc93221fca8faaabc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_form/passwordunmask\'], function(PasswordUnmask) {
    new PasswordUnmask("{{ id }}");
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
                
                $buffer .= $indent . 'require([\'core_form/passwordunmask\'], function(PasswordUnmask) {
';
                $buffer .= $indent . '    new PasswordUnmask("';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '");
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
