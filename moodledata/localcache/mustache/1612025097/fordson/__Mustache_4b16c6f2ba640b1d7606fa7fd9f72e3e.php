<?php

class __Mustache_4b16c6f2ba640b1d7606fa7fd9f72e3e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<nav role="navigation" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD29229e07a83cca1d96bbf5ab5cedbe4($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <ul class="breadcrumb">
';
        // 'get_items' section
        $value = $context->find('get_items');
        $buffer .= $this->section13acde641a507061d8888f083c9c2069($context, $indent, $value);
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '</nav>';

        return $buffer;
    }

    private function sectionD29229e07a83cca1d96bbf5ab5cedbe4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'breadcrumb, access';
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
                
                $buffer .= 'breadcrumb, access';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cf2c82ac90907e59224133e6f0b121a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' dimmed_text_fhs';
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
                
                $buffer .= ' dimmed_text_fhs';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6dabfc6e3de0f7ff4baa136bb16e58d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-current="page"';
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
                
                $buffer .= 'aria-current="page"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD354c672815be9693153e2ed645cc2eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{get_title}}"';
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
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->find('get_title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section581a91a787a958e3634cb53bf462afc0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="breadcrumb-item{{#is_hidden}} dimmed_text_fhs{{/is_hidden}}">
                    <a href="{{{action}}}" {{#is_last}}aria-current="page"{{/is_last}} {{#get_title}}title="{{get_title}}"{{/get_title}}>{{{get_content}}}</a>
                </li>
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
                
                $buffer .= $indent . '                <li class="breadcrumb-item';
                // 'is_hidden' section
                $value = $context->find('is_hidden');
                $buffer .= $this->section3cf2c82ac90907e59224133e6f0b121a($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= $value;
                $buffer .= '" ';
                // 'is_last' section
                $value = $context->find('is_last');
                $buffer .= $this->section6dabfc6e3de0f7ff4baa136bb16e58d0($context, $indent, $value);
                $buffer .= ' ';
                // 'get_title' section
                $value = $context->find('get_title');
                $buffer .= $this->sectionD354c672815be9693153e2ed645cc2eb($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('get_content'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13acde641a507061d8888f083c9c2069(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#has_action}}
                <li class="breadcrumb-item{{#is_hidden}} dimmed_text_fhs{{/is_hidden}}">
                    <a href="{{{action}}}" {{#is_last}}aria-current="page"{{/is_last}} {{#get_title}}title="{{get_title}}"{{/get_title}}>{{{get_content}}}</a>
                </li>
            {{/has_action}}
            {{^has_action}}
                <li class="breadcrumb-item{{#is_hidden}} dimmed_text_fhs{{/is_hidden}}">{{{text}}}</li>
            {{/has_action}}
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
                
                // 'has_action' section
                $value = $context->find('has_action');
                $buffer .= $this->section581a91a787a958e3634cb53bf462afc0($context, $indent, $value);
                // 'has_action' inverted section
                $value = $context->find('has_action');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <li class="breadcrumb-item';
                    // 'is_hidden' section
                    $value = $context->find('is_hidden');
                    $buffer .= $this->section3cf2c82ac90907e59224133e6f0b121a($context, $indent, $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
