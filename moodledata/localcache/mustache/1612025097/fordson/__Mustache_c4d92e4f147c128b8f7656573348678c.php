<?php

class __Mustache_c4d92e4f147c128b8f7656573348678c extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<span class="badge badge-success">';
        $value = $this->resolveValue($context->find('status'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>
';

        return $buffer;
    }
}
