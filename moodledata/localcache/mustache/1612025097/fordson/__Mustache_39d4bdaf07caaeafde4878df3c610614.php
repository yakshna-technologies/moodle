<?php

class __Mustache_39d4bdaf07caaeafde4878df3c610614 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="progress border w-100">
';
        $buffer .= $indent . '    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="';
        $value = $this->resolveValue($context->find('progress'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" style= "width: ';
        $value = $this->resolveValue($context->find('progress'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '%" aria-valuemin="0" aria-valuemax="100"> 
';
        $buffer .= $indent . '    	<div class="small">
';
        $buffer .= $indent . '		    <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0293e8a3f68f0093fe0cb72d27aa2c88($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '		    <strong>';
        $value = $this->resolveValue($context->find('progress'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionAc2f386f1327573c83f4c08feef6c959($context, $indent, $value);
        $buffer .= ' </strong>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section0293e8a3f68f0093fe0cb72d27aa2c88(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria:courseprogress, block_myoverview';
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
                
                $buffer .= 'aria:courseprogress, block_myoverview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAc2f386f1327573c83f4c08feef6c959(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'myprogresspercentage, theme_fordson';
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
                
                $buffer .= 'myprogresspercentage, theme_fordson';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
