<?php

class __Mustache_4d161725769cd6e32ef3de96d9babb2e extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_admin/setting_configfile')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
