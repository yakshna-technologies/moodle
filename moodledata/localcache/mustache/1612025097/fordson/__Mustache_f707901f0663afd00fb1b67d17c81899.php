<?php

class __Mustache_f707901f0663afd00fb1b67d17c81899 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div data-region="timeline-view-dates">
';
        if ($partial = $this->mustache->loadPartial('block_timeline/event-list')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
