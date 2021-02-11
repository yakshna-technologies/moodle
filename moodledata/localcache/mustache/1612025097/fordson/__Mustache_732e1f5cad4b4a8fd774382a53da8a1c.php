<?php

class __Mustache_732e1f5cad4b4a8fd774382a53da8a1c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'hascourseblocks' section
        $value = $context->find('hascourseblocks');
        $buffer .= $this->section227fe6ec421a7ae9353c07beb7e3881c($context, $indent, $value);

        return $buffer;
    }

    private function sectionEd05db738a49e7f4dd48f15944806c82(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' courseblockpanelbtnclose, theme_fordson ';
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
                
                $buffer .= ' courseblockpanelbtnclose, theme_fordson ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8d0f71c8d2d78b9c4b357acad91b4d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="fp-blocks">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                            <section data-region="blocks-fpa" class="hidden-print">
                                {{{ fpablocks }}}
                            </section>
                    </div>
                    <div class="col-md-4">
                            <section data-region="blocks-fpb" class="hidden-print">
                                {{{ fpbblocks }}}
                            </section>
                    </div>
                    <div class="col-md-4">
                            <section data-region="blocks-fpc" class="hidden-print">
                                {{{ fpcblocks }}}
                            </section>
                    </div>
                </div>
            </div>

        </div>
        <button id="blocksliderbuttonclose" class="btn btn-primary blockpanelbutton" type="button" data-toggle="collapse" data-target="#blockslider" aria-expanded="true" aria-controls="blockslider">
            <i class="fa fa-times-circle" aria-hidden="true"> </i> <span class="blockbtntext">{{# str }} courseblockpanelbtnclose, theme_fordson {{/ str }}</span>
        </button>
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
                
                $buffer .= $indent . '        <div class="fp-blocks">
';
                $buffer .= $indent . '            <div class="container-fluid">
';
                $buffer .= $indent . '                <div class="row">
';
                $buffer .= $indent . '                    <div class="col-md-4">
';
                $buffer .= $indent . '                            <section data-region="blocks-fpa" class="hidden-print">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('fpablocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </section>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="col-md-4">
';
                $buffer .= $indent . '                            <section data-region="blocks-fpb" class="hidden-print">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('fpbblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </section>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="col-md-4">
';
                $buffer .= $indent . '                            <section data-region="blocks-fpc" class="hidden-print">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('fpcblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </section>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <button id="blocksliderbuttonclose" class="btn btn-primary blockpanelbutton" type="button" data-toggle="collapse" data-target="#blockslider" aria-expanded="true" aria-controls="blockslider">
';
                $buffer .= $indent . '            <i class="fa fa-times-circle" aria-hidden="true"> </i> <span class="blockbtntext">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEd05db738a49e7f4dd48f15944806c82($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4fb3d2f83682217294bd52233fcb59bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' courseblockpanelbtn, theme_fordson ';
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
                
                $buffer .= ' courseblockpanelbtn, theme_fordson ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAef31e3ddec0b5ee4e05a4755eadfd14(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="text-right blockpanelbtn">
<button id="blocksliderbutton" class="btn btn-primary blockpanelbutton" type="button" data-toggle="collapse" data-target="#blockslider" aria-expanded="false" aria-controls="blockslider">
    <i class="fa fa-arrows-v" aria-hidden="true"> </i> <span class="blockbtntext">{{# str }} courseblockpanelbtn, theme_fordson {{/ str }}</span>
  </button>
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
                
                $buffer .= $indent . '<div class="text-right blockpanelbtn">
';
                $buffer .= $indent . '<button id="blocksliderbutton" class="btn btn-primary blockpanelbutton" type="button" data-toggle="collapse" data-target="#blockslider" aria-expanded="false" aria-controls="blockslider">
';
                $buffer .= $indent . '    <i class="fa fa-arrows-v" aria-hidden="true"> </i> <span class="blockbtntext">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4fb3d2f83682217294bd52233fcb59bf($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '  </button>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section227fe6ec421a7ae9353c07beb7e3881c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="collapse" id="blockslider" class="slidingblockpanel">
    {{#hasfpblockregion}}
        <div class="fp-blocks">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                            <section data-region="blocks-fpa" class="hidden-print">
                                {{{ fpablocks }}}
                            </section>
                    </div>
                    <div class="col-md-4">
                            <section data-region="blocks-fpb" class="hidden-print">
                                {{{ fpbblocks }}}
                            </section>
                    </div>
                    <div class="col-md-4">
                            <section data-region="blocks-fpc" class="hidden-print">
                                {{{ fpcblocks }}}
                            </section>
                    </div>
                </div>
            </div>

        </div>
        <button id="blocksliderbuttonclose" class="btn btn-primary blockpanelbutton" type="button" data-toggle="collapse" data-target="#blockslider" aria-expanded="true" aria-controls="blockslider">
            <i class="fa fa-times-circle" aria-hidden="true"> </i> <span class="blockbtntext">{{# str }} courseblockpanelbtnclose, theme_fordson {{/ str }}</span>
        </button>
    {{/hasfpblockregion}}
</div>

{{#hasfpblockregion}}
<div class="text-right blockpanelbtn">
<button id="blocksliderbutton" class="btn btn-primary blockpanelbutton" type="button" data-toggle="collapse" data-target="#blockslider" aria-expanded="false" aria-controls="blockslider">
    <i class="fa fa-arrows-v" aria-hidden="true"> </i> <span class="blockbtntext">{{# str }} courseblockpanelbtn, theme_fordson {{/ str }}</span>
  </button>
</div>
{{/hasfpblockregion}}

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
                
                $buffer .= $indent . '<div class="collapse" id="blockslider" class="slidingblockpanel">
';
                // 'hasfpblockregion' section
                $value = $context->find('hasfpblockregion');
                $buffer .= $this->sectionC8d0f71c8d2d78b9c4b357acad91b4d0($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                // 'hasfpblockregion' section
                $value = $context->find('hasfpblockregion');
                $buffer .= $this->sectionAef31e3ddec0b5ee4e05a4755eadfd14($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
