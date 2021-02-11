<?php

class __Mustache_535796e8c5e0f7bb9bdccb26af3cb5d4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'hascustomlogin' section
        $value = $context->find('hascustomlogin');
        $buffer .= $this->sectionA7f8852946ba6e90279ca123e2729234($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        // 'hasdefaultlogin' section
        $value = $context->find('hasdefaultlogin');
        $buffer .= $this->section8ec3136781bda609181360be5024e4d2($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionA4f2b1bc49f102a8397589c2999827d7($context, $indent, $value);

        return $buffer;
    }

    private function sectionF50c9504adb474cba23f09c98d981d11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <h1><img src="{{logourl}}" class="img-fluid" title="{{sitename}}" alt="{{sitename}}"/></h1>
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
                
                $buffer .= $indent . '                <h1><img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="img-fluid" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"/></h1>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section309344e982696feaf94bb13d0ba09d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="loginerrors m-t-1">
                    <a href="#" id="loginerrormessage" class="accesshide">{{error}}</a>
                    <div class="alert alert-danger" role="alert">{{error}}</div>
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
                
                $buffer .= $indent . '                <div class="loginerrors m-t-1">
';
                $buffer .= $indent . '                    <a href="#" id="loginerrormessage" class="accesshide">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    <div class="alert alert-danger" role="alert">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83fa1a0eb95df91595c360c402d2588c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fpsignup, theme_fordson';
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
                
                $buffer .= 'fpsignup, theme_fordson';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFea69428308e6a733cfeebf7670bdc01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'username';
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
                
                $buffer .= 'username';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section983b6843353faa33a83a9ec3069863a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usernameemail';
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
                
                $buffer .= 'usernameemail';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c515b76462237449150c7184535ffb2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                  {{#str}}usernameemail{{/str}}
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
                
                $buffer .= $indent . '                                  ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section983b6843353faa33a83a9ec3069863a3($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7011f9eedafcdb8d9dc662b124b2ed1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'newaccount';
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
                
                $buffer .= 'newaccount';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8c9ae409e0515df2e99a5a04b71d9831(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                | <a href="{{{ config.wwwroot }}}/login/signup.php?">{{#str}}newaccount{{/str}}</a>
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
                
                $buffer .= $indent . '                                | <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/login/signup.php?">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7011f9eedafcdb8d9dc662b124b2ed1e($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e50d9b1632f258e8c10be3e2ed759be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'password';
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
                
                $buffer .= 'password';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB15dee8971ab065bf4d6402b60d852be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'login';
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
                
                $buffer .= 'login';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6aa95a7e496f5307b40bee7262bd9321(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'forgotten';
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
                
                $buffer .= 'forgotten';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE384f0e9b1fcc321a1a78dba1d43f63f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' potentialidps, auth ';
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
                
                $buffer .= ' potentialidps, auth ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fc38b71bab296fb0efdd08834d72587(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}';
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
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section980ec98a7855c99ce645682daf28409c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <img src="{{iconurl}}" alt="" width="24" height="24"/>
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
                
                $buffer .= $indent . '                                                <img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="" width="24" height="24"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02bd6ba77def44fffed9b13ef737553c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="potentialidp">
                                        <a href="{{url}}" title={{#quote}}{{name}}{{/quote}} class="btn btn-secondary btn-block">
                                            {{#iconurl}}
                                                <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                            {{/iconurl}}
                                            {{name}}
                                        </a>
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
                
                $buffer .= $indent . '                                    <div class="potentialidp">
';
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section5fc38b71bab296fb0efdd08834d72587($context, $indent, $value);
                $buffer .= ' class="btn btn-secondary btn-block">
';
                // 'iconurl' section
                $value = $context->find('iconurl');
                $buffer .= $this->section980ec98a7855c99ce645682daf28409c($context, $indent, $value);
                $buffer .= $indent . '                                            ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </a>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD60b62e4eae2cca092be3ab9f9a18952(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <h6 class="mt-2">{{#str}} potentialidps, auth {{/str}}</h6>
                            <div class="potentialidplist" class="mt-3">
                                {{#identityproviders}}
                                    <div class="potentialidp">
                                        <a href="{{url}}" title={{#quote}}{{name}}{{/quote}} class="btn btn-secondary btn-block">
                                            {{#iconurl}}
                                                <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                            {{/iconurl}}
                                            {{name}}
                                        </a>
                                    </div>
                                {{/identityproviders}}
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
                
                $buffer .= $indent . '                            <h6 class="mt-2">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE384f0e9b1fcc321a1a78dba1d43f63f($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '                            <div class="potentialidplist" class="mt-3">
';
                // 'identityproviders' section
                $value = $context->find('identityproviders');
                $buffer .= $this->section02bd6ba77def44fffed9b13ef737553c($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93e4b62aaf677bf7878b06c5ac540671(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'someallowguest';
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
                
                $buffer .= 'someallowguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section017c9686023b74877131737c59ff1162(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loginguest';
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
                
                $buffer .= 'loginguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c9b9676c355c9a31b063cb68c31cbcb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="mt-2">
                            <p>{{#str}}someallowguest{{/str}}</p>
                            <form action="{{loginurl}}" method="post" id="guestlogin">
                                <input type="hidden" name="logintoken" value="{{logintoken}}">
                                <input type="hidden" name="username" value="guest" />
                                <input type="hidden" name="password" value="guest" />
                                <button class="btn btn-secondary btn-block" type="submit">{{#str}}loginguest{{/str}}</button>
                            </form>
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
                
                $buffer .= $indent . '                        <div class="mt-2">
';
                $buffer .= $indent . '                            <p>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section93e4b62aaf677bf7878b06c5ac540671($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                            <form action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" method="post" id="guestlogin">
';
                $buffer .= $indent . '                                <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <input type="hidden" name="username" value="guest" />
';
                $buffer .= $indent . '                                <input type="hidden" name="password" value="guest" />
';
                $buffer .= $indent . '                                <button class="btn btn-secondary btn-block" type="submit">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section017c9686023b74877131737c59ff1162($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                            </form>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD067d747db1c9287d49c56c6c24b1de0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="logintopimage">
                <img src="{{{ logintopimage }}}" class="img-fluid" alt="Responsive image">
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
                
                $buffer .= $indent . '            <div class="logintopimage">
';
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->find('logintopimage'), $context);
                $buffer .= $value;
                $buffer .= '" class="img-fluid" alt="Responsive image">
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88d2d2d24d0c07a1835a63ab2ba87c11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="alertbox">
                <div class="alertmessage">
                {{{alertbox}}}
                </div>
            </div>
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
                
                $buffer .= $indent . '            <div class="alertbox">
';
                $buffer .= $indent . '                <div class="alertmessage">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('alertbox'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div style="clear:both;"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7f8852946ba6e90279ca123e2729234(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="m-y-3 hidden-sm-down"></div>

<div class="row signin">
    <div class="col-xl-3 push-xl-1 col-md-4">
    <div class="fpsignup">
        <div class="card-title text-xs-center">
            {{#logourl}}
                <h1><img src="{{logourl}}" class="img-fluid" title="{{sitename}}" alt="{{sitename}}"/></h1>
            {{/logourl}}
            {{^logourl}}
                <h1>{{sitename}}</h1>
            {{/logourl}}
            <hr>
        </div>
            {{#error}}
                <div class="loginerrors m-t-1">
                    <a href="#" id="loginerrormessage" class="accesshide">{{error}}</a>
                    <div class="alert alert-danger" role="alert">{{error}}</div>
                </div>
            {{/error}}
            <div class="signinform">
                        <h3>{{#str}}fpsignup, theme_fordson{{/str}}</h3>
                        <form class="m-t-1" action="{{{ config.wwwroot }}}/login/index.php" method="POST" role="form">
                        <input type="hidden" name="logintoken" value="{{logintoken}}">
                            <label for="username">
                              {{^canloginbyemail}}
                                  {{#str}}username{{/str}}
                              {{/canloginbyemail}}
                              {{#canloginbyemail}}
                                  {{#str}}usernameemail{{/str}}
                              {{/canloginbyemail}}
                              {{#cansignup}}
                                | <a href="{{{ config.wwwroot }}}/login/signup.php?">{{#str}}newaccount{{/str}}</a>
                              {{/cansignup}}
                            </label>
                            <div class="input-group">
                              <div class="input-group-addon"></div>
                              <input type="text" class="form-control" id="username" name="username" placeholder="{{#str}}username{{/str}}" required />
                            </div>
                            <label for="password">{{#str}}password{{/str}}</label>
                            <div class="input-group">
                              <div class="input-group-addon"></div>
                              <input type="password" class="form-control" id="password" name="password" placeholder="{{#str}}password{{/str}}" required />
                            </div>
                            <div class="sign-up-btn">
                                <button type="submit" class="btn btn-primary">{{#str}}login{{/str}}</button>
                            </div>
                        </form>
                        <p><a href="{{{ config.wwwroot }}}/login/forgot_password.php">{{#str}}forgotten{{/str}}</a></p> 
                        
                        {{#hasidentityproviders}}
                            <h6 class="mt-2">{{#str}} potentialidps, auth {{/str}}</h6>
                            <div class="potentialidplist" class="mt-3">
                                {{#identityproviders}}
                                    <div class="potentialidp">
                                        <a href="{{url}}" title={{#quote}}{{name}}{{/quote}} class="btn btn-secondary btn-block">
                                            {{#iconurl}}
                                                <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                            {{/iconurl}}
                                            {{name}}
                                        </a>
                                    </div>
                                {{/identityproviders}}
                            </div>
                        {{/hasidentityproviders}}
                        
                        {{#canloginasguest}}
                        <div class="mt-2">
                            <p>{{#str}}someallowguest{{/str}}</p>
                            <form action="{{loginurl}}" method="post" id="guestlogin">
                                <input type="hidden" name="logintoken" value="{{logintoken}}">
                                <input type="hidden" name="username" value="guest" />
                                <input type="hidden" name="password" value="guest" />
                                <button class="btn btn-secondary btn-block" type="submit">{{#str}}loginguest{{/str}}</button>
                            </form>
                        </div>
                    {{/canloginasguest}}
            </div>
    </div>
    </div>

    <div class="col-xl-9 push-xl-1 col-md-8">
        <div class="logintop">
        {{#logintopimage}}
            <div class="logintopimage">
                <img src="{{{ logintopimage }}}" class="img-fluid" alt="Responsive image">
            </div>
        {{/logintopimage}}
        </div>
        {{#alertbox}}
            <div class="alertbox">
                <div class="alertmessage">
                {{{alertbox}}}
                </div>
            </div>
            <div style="clear:both;"></div>
        {{/alertbox}}
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
                
                $buffer .= $indent . '<div class="m-y-3 hidden-sm-down"></div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div class="row signin">
';
                $buffer .= $indent . '    <div class="col-xl-3 push-xl-1 col-md-4">
';
                $buffer .= $indent . '    <div class="fpsignup">
';
                $buffer .= $indent . '        <div class="card-title text-xs-center">
';
                // 'logourl' section
                $value = $context->find('logourl');
                $buffer .= $this->sectionF50c9504adb474cba23f09c98d981d11($context, $indent, $value);
                // 'logourl' inverted section
                $value = $context->find('logourl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <h1>';
                    $value = $this->resolveValue($context->find('sitename'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</h1>
';
                }
                $buffer .= $indent . '            <hr>
';
                $buffer .= $indent . '        </div>
';
                // 'error' section
                $value = $context->find('error');
                $buffer .= $this->section309344e982696feaf94bb13d0ba09d53($context, $indent, $value);
                $buffer .= $indent . '            <div class="signinform">
';
                $buffer .= $indent . '                        <h3>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section83fa1a0eb95df91595c360c402d2588c($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <form class="m-t-1" action="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/login/index.php" method="POST" role="form">
';
                $buffer .= $indent . '                        <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <label for="username">
';
                // 'canloginbyemail' inverted section
                $value = $context->find('canloginbyemail');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                  ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
                    $buffer .= '
';
                }
                // 'canloginbyemail' section
                $value = $context->find('canloginbyemail');
                $buffer .= $this->section0c515b76462237449150c7184535ffb2($context, $indent, $value);
                // 'cansignup' section
                $value = $context->find('cansignup');
                $buffer .= $this->section8c9ae409e0515df2e99a5a04b71d9831($context, $indent, $value);
                $buffer .= $indent . '                            </label>
';
                $buffer .= $indent . '                            <div class="input-group">
';
                $buffer .= $indent . '                              <div class="input-group-addon"></div>
';
                $buffer .= $indent . '                              <input type="text" class="form-control" id="username" name="username" placeholder="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
                $buffer .= '" required />
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <label for="password">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                            <div class="input-group">
';
                $buffer .= $indent . '                              <div class="input-group-addon"></div>
';
                $buffer .= $indent . '                              <input type="password" class="form-control" id="password" name="password" placeholder="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
                $buffer .= '" required />
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="sign-up-btn">
';
                $buffer .= $indent . '                                <button type="submit" class="btn btn-primary">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </form>
';
                $buffer .= $indent . '                        <p><a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/login/forgot_password.php">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6aa95a7e496f5307b40bee7262bd9321($context, $indent, $value);
                $buffer .= '</a></p> 
';
                $buffer .= $indent . '                        
';
                // 'hasidentityproviders' section
                $value = $context->find('hasidentityproviders');
                $buffer .= $this->sectionD60b62e4eae2cca092be3ab9f9a18952($context, $indent, $value);
                $buffer .= $indent . '                        
';
                // 'canloginasguest' section
                $value = $context->find('canloginasguest');
                $buffer .= $this->section3c9b9676c355c9a31b063cb68c31cbcb($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="col-xl-9 push-xl-1 col-md-8">
';
                $buffer .= $indent . '        <div class="logintop">
';
                // 'logintopimage' section
                $value = $context->find('logintopimage');
                $buffer .= $this->sectionD067d747db1c9287d49c56c6c24b1de0($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                // 'alertbox' section
                $value = $context->find('alertbox');
                $buffer .= $this->section88d2d2d24d0c07a1835a63ab2ba87c11($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
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

    private function section9a1c5497e68350656970fc0fa36c9d0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h1 class="card-header text-center" ><img src="{{logourl}}" class="img-fluid" title="{{sitename}}" alt="{{sitename}}"/></h1>
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
                
                $buffer .= $indent . '            <h1 class="card-header text-center" ><img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="img-fluid" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"/></h1>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78c7558fe34a1190743ac70d6d336ab2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tocreatenewaccount ';
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
                
                $buffer .= ' tocreatenewaccount ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32b7f66967bb1ff75d31815dae1e5d69(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="sr-only">
                    <a href="{{signupurl}}">{{#str}} tocreatenewaccount {{/str}}</a>
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
                
                $buffer .= $indent . '                <div class="sr-only">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section78c7558fe34a1190743ac70d6d336ab2($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30392c7a765d12e9e1955808758bc77e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="loginerrors mt-3">
                    <a href="#" id="loginerrormessage" class="accesshide">{{error}}</a>
                    <div class="alert alert-danger" role="alert">{{error}}</div>
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
                
                $buffer .= $indent . '                <div class="loginerrors mt-3">
';
                $buffer .= $indent . '                    <a href="#" id="loginerrormessage" class="accesshide">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    <div class="alert alert-danger" role="alert">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27e9419edc620e0e1872d2a6521f1533(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' username ';
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
                
                $buffer .= ' username ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22141a6741c33f407ef6171795337eec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' usernameemail ';
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
                
                $buffer .= ' usernameemail ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section017705f8f43550b2ff24417966371360(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{#str}} usernameemail {{/str}}
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
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section22141a6741c33f407ef6171795337eec($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cfee3b9563446af7cf73b3dabe83fe5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}usernameemail{{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section983b6843353faa33a83a9ec3069863a3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a2b2050243eb4dff6ce2b11212bbbcb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^canloginbyemail}}{{#str}}username{{/str}}{{/canloginbyemail}}{{#canloginbyemail}}{{#str}}usernameemail{{/str}}{{/canloginbyemail}}';
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
                
                // 'canloginbyemail' inverted section
                $value = $context->find('canloginbyemail');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
                }
                // 'canloginbyemail' section
                $value = $context->find('canloginbyemail');
                $buffer .= $this->section1cfee3b9563446af7cf73b3dabe83fe5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE056be559d6d01a9bd2bf6f760f8e3e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' password ';
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
                
                $buffer .= ' password ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e0c7d916e3932461ff09cf034c710f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}password{{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6c044fe8710d3502dd5cb9686c32f3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked="checked"';
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
                
                $buffer .= 'checked="checked"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAde9318c94c2f3a55f9a22a57e193ad0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' rememberusername, admin ';
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
                
                $buffer .= ' rememberusername, admin ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD98addcb3c7914ff1eeb728617f74e5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="rememberpass mt-3">
                                <input type="checkbox" name="rememberusername" id="rememberusername" value="1" {{#username}}checked="checked"{{/username}} />
                                <label for="rememberusername">{{#str}} rememberusername, admin {{/str}}</label>
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
                
                $buffer .= $indent . '                            <div class="rememberpass mt-3">
';
                $buffer .= $indent . '                                <input type="checkbox" name="rememberusername" id="rememberusername" value="1" ';
                // 'username' section
                $value = $context->find('username');
                $buffer .= $this->sectionE6c044fe8710d3502dd5cb9686c32f3f($context, $indent, $value);
                $buffer .= ' />
';
                $buffer .= $indent . '                                <label for="rememberusername">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAde9318c94c2f3a55f9a22a57e193ad0($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section946f040476794b323defa7b00688109b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cookiesenabled ';
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
                
                $buffer .= ' cookiesenabled ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3548f225ecd45fcf23dd16cb93924c0c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="mt-2">
                            <p>{{#str}}someallowguest{{/str}}</p>
                            <form action="{{loginurl}}" method="post" id="guestlogin">
                            	<input type="hidden" name="logintoken" value="{{logintoken}}">
                                <input type="hidden" name="username" value="guest" />
                                <input type="hidden" name="password" value="guest" />
                                <button class="btn btn-secondary btn-block" type="submit">{{#str}}loginguest{{/str}}</button>
                            </form>
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
                
                $buffer .= $indent . '                        <div class="mt-2">
';
                $buffer .= $indent . '                            <p>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section93e4b62aaf677bf7878b06c5ac540671($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                            <form action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" method="post" id="guestlogin">
';
                $buffer .= $indent . '                            	<input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <input type="hidden" name="username" value="guest" />
';
                $buffer .= $indent . '                                <input type="hidden" name="password" value="guest" />
';
                $buffer .= $indent . '                                <button class="btn btn-secondary btn-block" type="submit">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section017c9686023b74877131737c59ff1162($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                            </form>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0d8b0d71332b159137e167b138a0782(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <img src="{{iconurl}}" alt="" width="24" height="24"/>
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
                
                $buffer .= $indent . '                                        <img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="" width="24" height="24"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC5a96fc4ccf9025ed91323d0316b2d3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="potentialidp">
                                <a href="{{url}}" title={{#quote}}{{name}}{{/quote}} class="btn btn-secondary btn-block">
                                    {{#iconurl}}
                                        <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                    {{/iconurl}}
                                    {{name}}
                                </a>
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
                
                $buffer .= $indent . '                            <div class="potentialidp">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section5fc38b71bab296fb0efdd08834d72587($context, $indent, $value);
                $buffer .= ' class="btn btn-secondary btn-block">
';
                // 'iconurl' section
                $value = $context->find('iconurl');
                $buffer .= $this->sectionF0d8b0d71332b159137e167b138a0782($context, $indent, $value);
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5da136fd5af170616c6401ef5481bebb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <h6 class="mt-2">{{#str}} potentialidps, auth {{/str}}</h6>
                    <div class="potentialidplist" class="mt-3">
                        {{#identityproviders}}
                            <div class="potentialidp">
                                <a href="{{url}}" title={{#quote}}{{name}}{{/quote}} class="btn btn-secondary btn-block">
                                    {{#iconurl}}
                                        <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                    {{/iconurl}}
                                    {{name}}
                                </a>
                            </div>
                        {{/identityproviders}}
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
                
                $buffer .= $indent . '                    <h6 class="mt-2">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE384f0e9b1fcc321a1a78dba1d43f63f($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '                    <div class="potentialidplist" class="mt-3">
';
                // 'identityproviders' section
                $value = $context->find('identityproviders');
                $buffer .= $this->sectionC5a96fc4ccf9025ed91323d0316b2d3e($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB681534bda1faeeb31506c30e72ff16e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'firsttime';
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
                
                $buffer .= 'firsttime';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47f819a53e4575a4e7767be1939ab3bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startsignup';
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
                
                $buffer .= 'startsignup';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section41a8d0e1c28e991b9cdd212edf60cb52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <form class="mt-3" action="{{signupurl}}" method="get" id="signup">
                <button type="submit" class="btn btn-secondary">{{#str}}startsignup{{/str}}</button>
            </form>
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
                
                $buffer .= $indent . '            <form class="mt-3" action="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" method="get" id="signup">
';
                $buffer .= $indent . '                <button type="submit" class="btn btn-secondary">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section47f819a53e4575a4e7767be1939ab3bf($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '            </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section409a31ebf40c5cd9a28280b7a111631b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="row justify-content-center mt-3">
<div class="col-xl-6 col-sm-8">
<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h2>{{#str}}firsttime{{/str}}</h2>
        </div>
        <div>
        {{{instructions}}}
        {{#cansignup}}
            <form class="mt-3" action="{{signupurl}}" method="get" id="signup">
                <button type="submit" class="btn btn-secondary">{{#str}}startsignup{{/str}}</button>
            </form>
        {{/cansignup}}
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
                
                $buffer .= $indent . '<div class="row justify-content-center mt-3">
';
                $buffer .= $indent . '<div class="col-xl-6 col-sm-8">
';
                $buffer .= $indent . '<div class="card">
';
                $buffer .= $indent . '    <div class="card-body">
';
                $buffer .= $indent . '        <div class="card-title">
';
                $buffer .= $indent . '            <h2>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB681534bda1faeeb31506c30e72ff16e($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div>
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('instructions'), $context);
                $buffer .= $value;
                $buffer .= '
';
                // 'cansignup' section
                $value = $context->find('cansignup');
                $buffer .= $this->section41a8d0e1c28e991b9cdd212edf60cb52($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ec3136781bda609181360be5024e4d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#alertbox}}
            <div class="alertbox">
                <div class="alertmessage">
                {{{alertbox}}}
                </div>
            </div>
            <div style="clear:both;"></div>
        {{/alertbox}}
<div class="my-1 my-sm-5"></div>
<div class="row justify-content-center">

<div class="col-xl-6 col-sm-8 ">
<div class="card">
    <div class="card-block">
        {{#logourl}}
            <h1 class="card-header text-center" ><img src="{{logourl}}" class="img-fluid" title="{{sitename}}" alt="{{sitename}}"/></h1>
        {{/logourl}}
        {{^logourl}}
            <h1 class="card-header text-center">{{sitename}}</h1>
        {{/logourl}}
        <div class="card-body">
            {{#cansignup}}
                <div class="sr-only">
                    <a href="{{signupurl}}">{{#str}} tocreatenewaccount {{/str}}</a>
                </div>
            {{/cansignup}}

            {{#error}}
                <div class="loginerrors mt-3">
                    <a href="#" id="loginerrormessage" class="accesshide">{{error}}</a>
                    <div class="alert alert-danger" role="alert">{{error}}</div>
                </div>
            {{/error}}

            <div class="row justify-content-md-center">
                <div class="col-md-5">
                    <form class="mt-3" action="{{loginurl}}" method="post" id="login">
                        <input id="anchor" type="hidden" name="anchor" value="">
                        <script>document.getElementById(\'anchor\').value = location.hash;</script>
                        <input type="hidden" name="logintoken" value="{{logintoken}}">
                        <div class="form-group">
                            <label for="username" class="sr-only">
                                {{^canloginbyemail}}
                                    {{#str}} username {{/str}}
                                {{/canloginbyemail}}
                                {{#canloginbyemail}}
                                    {{#str}} usernameemail {{/str}}
                                {{/canloginbyemail}}
                            </label>
                            <input type="text" name="username" id="username"
                                class="form-control"
                                value="{{username}}"
                                placeholder={{#quote}}{{^canloginbyemail}}{{#str}}username{{/str}}{{/canloginbyemail}}{{#canloginbyemail}}{{#str}}usernameemail{{/str}}{{/canloginbyemail}}{{/quote}}>
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">{{#str}} password {{/str}}</label>
                            <input type="password" name="password" id="password" value=""
                                class="form-control"
                                placeholder={{#quote}}{{#str}}password{{/str}}{{/quote}}>
                        </div>
                        {{#rememberusername}}
                            <div class="rememberpass mt-3">
                                <input type="checkbox" name="rememberusername" id="rememberusername" value="1" {{#username}}checked="checked"{{/username}} />
                                <label for="rememberusername">{{#str}} rememberusername, admin {{/str}}</label>
                            </div>
                        {{/rememberusername}}

                        <button type="submit" class="btn btn-primary btn-block mt-3" id="loginbtn">{{#str}}login{{/str}}</button>
                    </form>
                </div>

                <div class="col-md-5">
                    <div class="forgetpass mt-3">
                        <p><a href="{{forgotpasswordurl}}">{{#str}}forgotten{{/str}}</a></p>
                    </div>

                    <div class="mt-3">
                        {{#str}} cookiesenabled {{/str}}
                        {{{cookieshelpiconformatted}}}
                    </div>
                    {{#canloginasguest}}
                        <div class="mt-2">
                            <p>{{#str}}someallowguest{{/str}}</p>
                            <form action="{{loginurl}}" method="post" id="guestlogin">
                            	<input type="hidden" name="logintoken" value="{{logintoken}}">
                                <input type="hidden" name="username" value="guest" />
                                <input type="hidden" name="password" value="guest" />
                                <button class="btn btn-secondary btn-block" type="submit">{{#str}}loginguest{{/str}}</button>
                            </form>
                        </div>
                    {{/canloginasguest}}

                {{#hasidentityproviders}}
                    <h6 class="mt-2">{{#str}} potentialidps, auth {{/str}}</h6>
                    <div class="potentialidplist" class="mt-3">
                        {{#identityproviders}}
                            <div class="potentialidp">
                                <a href="{{url}}" title={{#quote}}{{name}}{{/quote}} class="btn btn-secondary btn-block">
                                    {{#iconurl}}
                                        <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                    {{/iconurl}}
                                    {{name}}
                                </a>
                            </div>
                        {{/identityproviders}}
                    </div>
                {{/hasidentityproviders}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


{{#hasinstructions}}
<div class="row justify-content-center mt-3">
<div class="col-xl-6 col-sm-8">
<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h2>{{#str}}firsttime{{/str}}</h2>
        </div>
        <div>
        {{{instructions}}}
        {{#cansignup}}
            <form class="mt-3" action="{{signupurl}}" method="get" id="signup">
                <button type="submit" class="btn btn-secondary">{{#str}}startsignup{{/str}}</button>
            </form>
        {{/cansignup}}
        </div>
    </div>
</div>
</div>
</div>
{{/hasinstructions}}

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
                
                // 'alertbox' section
                $value = $context->find('alertbox');
                $buffer .= $this->section88d2d2d24d0c07a1835a63ab2ba87c11($context, $indent, $value);
                $buffer .= $indent . '<div class="my-1 my-sm-5"></div>
';
                $buffer .= $indent . '<div class="row justify-content-center">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div class="col-xl-6 col-sm-8 ">
';
                $buffer .= $indent . '<div class="card">
';
                $buffer .= $indent . '    <div class="card-block">
';
                // 'logourl' section
                $value = $context->find('logourl');
                $buffer .= $this->section9a1c5497e68350656970fc0fa36c9d0f($context, $indent, $value);
                // 'logourl' inverted section
                $value = $context->find('logourl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <h1 class="card-header text-center">';
                    $value = $this->resolveValue($context->find('sitename'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</h1>
';
                }
                $buffer .= $indent . '        <div class="card-body">
';
                // 'cansignup' section
                $value = $context->find('cansignup');
                $buffer .= $this->section32b7f66967bb1ff75d31815dae1e5d69($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'error' section
                $value = $context->find('error');
                $buffer .= $this->section30392c7a765d12e9e1955808758bc77e($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="row justify-content-md-center">
';
                $buffer .= $indent . '                <div class="col-md-5">
';
                $buffer .= $indent . '                    <form class="mt-3" action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" method="post" id="login">
';
                $buffer .= $indent . '                        <input id="anchor" type="hidden" name="anchor" value="">
';
                $buffer .= $indent . '                        <script>document.getElementById(\'anchor\').value = location.hash;</script>
';
                $buffer .= $indent . '                        <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="form-group">
';
                $buffer .= $indent . '                            <label for="username" class="sr-only">
';
                // 'canloginbyemail' inverted section
                $value = $context->find('canloginbyemail');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section27e9419edc620e0e1872d2a6521f1533($context, $indent, $value);
                    $buffer .= '
';
                }
                // 'canloginbyemail' section
                $value = $context->find('canloginbyemail');
                $buffer .= $this->section017705f8f43550b2ff24417966371360($context, $indent, $value);
                $buffer .= $indent . '                            </label>
';
                $buffer .= $indent . '                            <input type="text" name="username" id="username"
';
                $buffer .= $indent . '                                class="form-control"
';
                $buffer .= $indent . '                                value="';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                placeholder=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section4a2b2050243eb4dff6ce2b11212bbbcb($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="form-group">
';
                $buffer .= $indent . '                            <label for="password" class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE056be559d6d01a9bd2bf6f760f8e3e3($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                            <input type="password" name="password" id="password" value=""
';
                $buffer .= $indent . '                                class="form-control"
';
                $buffer .= $indent . '                                placeholder=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section1e0c7d916e3932461ff09cf034c710f8($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                        </div>
';
                // 'rememberusername' section
                $value = $context->find('rememberusername');
                $buffer .= $this->sectionD98addcb3c7914ff1eeb728617f74e5c($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                        <button type="submit" class="btn btn-primary btn-block mt-3" id="loginbtn">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                    </form>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="col-md-5">
';
                $buffer .= $indent . '                    <div class="forgetpass mt-3">
';
                $buffer .= $indent . '                        <p><a href="';
                $value = $this->resolveValue($context->find('forgotpasswordurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6aa95a7e496f5307b40bee7262bd9321($context, $indent, $value);
                $buffer .= '</a></p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div class="mt-3">
';
                $buffer .= $indent . '                        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section946f040476794b323defa7b00688109b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('cookieshelpiconformatted'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                // 'canloginasguest' section
                $value = $context->find('canloginasguest');
                $buffer .= $this->section3548f225ecd45fcf23dd16cb93924c0c($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'hasidentityproviders' section
                $value = $context->find('hasidentityproviders');
                $buffer .= $this->section5da136fd5af170616c6401ef5481bebb($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                // 'hasinstructions' section
                $value = $context->find('hasinstructions');
                $buffer .= $this->section409a31ebf40c5cd9a28280b7a111631b($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c05631471aa808569dc409f6b90d52b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        require([\'jquery\'], function($) {
            $(\'#loginerrormessage\').focus();
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
                
                $buffer .= $indent . '        require([\'jquery\'], function($) {
';
                $buffer .= $indent . '            $(\'#loginerrormessage\').focus();
';
                $buffer .= $indent . '        });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section910c82971845ca8b1f4a35920af1957d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            require([\'jquery\'], function($) {
                if ($(\'#username\').val()) {
                    $(\'#password\').focus();
                } else {
                    $(\'#username\').focus();
                }
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
                
                $buffer .= $indent . '            require([\'jquery\'], function($) {
';
                $buffer .= $indent . '                if ($(\'#username\').val()) {
';
                $buffer .= $indent . '                    $(\'#password\').focus();
';
                $buffer .= $indent . '                } else {
';
                $buffer .= $indent . '                    $(\'#username\').focus();
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4f2b1bc49f102a8397589c2999827d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#error}}
        require([\'jquery\'], function($) {
            $(\'#loginerrormessage\').focus();
        });
    {{/error}}
    {{^error}}
        {{#autofocusform}}
            require([\'jquery\'], function($) {
                if ($(\'#username\').val()) {
                    $(\'#password\').focus();
                } else {
                    $(\'#username\').focus();
                }
            });
        {{/autofocusform}}
    {{/error}}
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
                
                // 'error' section
                $value = $context->find('error');
                $buffer .= $this->section1c05631471aa808569dc409f6b90d52b($context, $indent, $value);
                // 'error' inverted section
                $value = $context->find('error');
                if (empty($value)) {
                    
                    // 'autofocusform' section
                    $value = $context->find('autofocusform');
                    $buffer .= $this->section910c82971845ca8b1f4a35920af1957d($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
