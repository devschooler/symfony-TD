<?php

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_2b1ea969bca21451dddea26e9f8cfc9960c1e44c1b0d676a4f3d913c97314e21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8837adb560896379297bfae8a097e43230691ca63c117f28c7db61e27897adf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8837adb560896379297bfae8a097e43230691ca63c117f28c7db61e27897adf9->enter($__internal_8837adb560896379297bfae8a097e43230691ca63c117f28c7db61e27897adf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $__internal_cd92654ce3dd8a4c3656c8d64bd25473583a731c38168176cf3a83ec695c732a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd92654ce3dd8a4c3656c8d64bd25473583a731c38168176cf3a83ec695c732a->enter($__internal_cd92654ce3dd8a4c3656c8d64bd25473583a731c38168176cf3a83ec695c732a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8837adb560896379297bfae8a097e43230691ca63c117f28c7db61e27897adf9->leave($__internal_8837adb560896379297bfae8a097e43230691ca63c117f28c7db61e27897adf9_prof);

        
        $__internal_cd92654ce3dd8a4c3656c8d64bd25473583a731c38168176cf3a83ec695c732a->leave($__internal_cd92654ce3dd8a4c3656c8d64bd25473583a731c38168176cf3a83ec695c732a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e234a532c2d52386385fb1370ece4f469621dcfcfaa223f05859529db362d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e234a532c2d52386385fb1370ece4f469621dcfcfaa223f05859529db362d93->enter($__internal_1e234a532c2d52386385fb1370ece4f469621dcfcfaa223f05859529db362d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_316d1cee14aaf0ea92014b2ffa37d5b46a1ba4aa6e40431cdbe67c2655fb7071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316d1cee14aaf0ea92014b2ffa37d5b46a1ba4aa6e40431cdbe67c2655fb7071->enter($__internal_316d1cee14aaf0ea92014b2ffa37d5b46a1ba4aa6e40431cdbe67c2655fb7071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        echo "

    <div id=\"summary\">
        ";
        // line 7
        $this->displayBlock('summary', $context, $blocks);
        // line 83
        echo "    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    ";
        // line 89
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
                    ";
        // line 90
        $this->displayBlock('panel', $context, $blocks);
        // line 91
        echo "                </div>
            </div>

            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" id=\"sidebarShortcutsMenu\" class=\"visible-small\">
                            <span class=\"icon\">";
        // line 98
        echo twig_include($this->env, $context, "@WebProfiler/Icon/menu.svg");
        echo "</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search", array("limit" => 10));
        echo "\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", twig_array_merge(array("token" => "latest"), $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "all", array()))), "html", null, true);
        echo "\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" ";
        // line 104
        if ((array_key_exists("tokens", $context) || array_key_exists("about", $context))) {
            echo "data-toggle-initial=\"display\"";
        }
        echo ">
                            ";
        // line 105
        echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
        echo " <span class=\"hidden-small\">Search</span>
                        </a>

                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_bar", $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "all", array())));
        echo "
                    </div>
                </div>

                ";
        // line 112
        if (array_key_exists("templates", $context)) {
            // line 113
            echo "                    <ul id=\"menu-profiler\">
                        ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 115
                echo "                            ";
                ob_start();
                // line 116
                $__internal_40e290306e7b2b679784482d24aaff701fc6649e29cf62b2a07e27ae6e54d171 = array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"), "profiler_markup_version" => (isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")));
                if (!is_array($__internal_40e290306e7b2b679784482d24aaff701fc6649e29cf62b2a07e27ae6e54d171)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_40e290306e7b2b679784482d24aaff701fc6649e29cf62b2a07e27ae6e54d171);
                // line 117
                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 117)->displayBlock("menu", $context);
                $context = $context['_parent'];
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 120
                echo "                            ";
                if ( !twig_test_empty((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")))) {
                    // line 121
                    echo "                                <li class=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " ";
                    echo ((($context["name"] == (isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")))) ? ("selected") : (""));
                    echo "\">
                                    <a href=\"";
                    // line 122
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => $context["name"])), "html", null, true);
                    echo "\">";
                    echo (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"));
                    echo "</a>
                                </li>
                            ";
                }
                // line 125
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                    </ul>
                ";
        }
        // line 128
        echo "            </div>
        </div>
    </div>
    <script>
        (function () {
            Sfjs.addEventListener(document.getElementById('sidebarShortcutsMenu'), 'click', function (event) {
                event.preventDefault();
                Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded');
            })
        }())
    </script>
";
        
        $__internal_316d1cee14aaf0ea92014b2ffa37d5b46a1ba4aa6e40431cdbe67c2655fb7071->leave($__internal_316d1cee14aaf0ea92014b2ffa37d5b46a1ba4aa6e40431cdbe67c2655fb7071_prof);

        
        $__internal_1e234a532c2d52386385fb1370ece4f469621dcfcfaa223f05859529db362d93->leave($__internal_1e234a532c2d52386385fb1370ece4f469621dcfcfaa223f05859529db362d93_prof);

    }

    // line 7
    public function block_summary($context, array $blocks = array())
    {
        $__internal_842bae92baceb3f8e5992cd8e9bb9feef9a534abba76c67aebfef6edad1cb34d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842bae92baceb3f8e5992cd8e9bb9feef9a534abba76c67aebfef6edad1cb34d->enter($__internal_842bae92baceb3f8e5992cd8e9bb9feef9a534abba76c67aebfef6edad1cb34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5658e2d38d8f72d230f3e5acfcac759fce2a36b69576911d9b410e311ab3088a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5658e2d38d8f72d230f3e5acfcac759fce2a36b69576911d9b410e311ab3088a->enter($__internal_5658e2d38d8f72d230f3e5acfcac759fce2a36b69576911d9b410e311ab3088a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 8
        echo "            ";
        if (array_key_exists("profile", $context)) {
            // line 9
            echo "                ";
            $context["status_code"] = ((twig_in_filter("request", twig_get_array_keys_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "collectors", array())))) ? ((($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array()), 0)) : (0))) : (0));
            // line 10
            echo "                ";
            $context["css_class"] = ((((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) > 399)) ? ("status-error") : (((((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) > 299)) ? ("status-warning") : ("status-success"))));
            // line 11
            echo "
                <div class=\"status ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["css_class"]) ? $context["css_class"] : $this->getContext($context, "css_class")), "html", null, true);
            echo "\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            ";
            // line 15
            if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "method", array())), array(0 => "GET", 1 => "HEAD"))) {
                // line 16
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 18
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "
                            ";
            }
            // line 20
            echo "                        </h2>

                        ";
            // line 22
            $context["request_collector"] = (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "collectors", array(), "any", false, true), "request", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "collectors", array(), "any", false, true), "request", array()), false)) : (false));
            // line 23
            echo "                        ";
            if ((array_key_exists("request_collector", $context) && $this->getAttribute((isset($context["request_collector"]) ? $context["request_collector"] : $this->getContext($context, "request_collector")), "redirect", array()))) {
                // line 24
                $context["redirect"] = $this->getAttribute((isset($context["request_collector"]) ? $context["request_collector"] : $this->getContext($context, "request_collector")), "redirect", array());
                // line 25
                $context["controller"] = $this->getAttribute((isset($context["redirect"]) ? $context["redirect"] : $this->getContext($context, "redirect")), "controller", array());
                // line 26
                $context["redirect_route"] = ("@" . $this->getAttribute((isset($context["redirect"]) ? $context["redirect"] : $this->getContext($context, "redirect")), "route", array()));
                // line 27
                echo "                            <dl class=\"metadata\">
                                <dt>
                                    <span class=\"label\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redirect"]) ? $context["redirect"] : $this->getContext($context, "redirect")), "status_code", array()), "html", null, true);
                echo "</span>
                                    Redirect from
                                </dt>
                                <dd>
                                    ";
                // line 33
                echo twig_escape_filter($this->env, ((("GET" != $this->getAttribute((isset($context["redirect"]) ? $context["redirect"] : $this->getContext($context, "redirect")), "method", array()))) ? ($this->getAttribute((isset($context["redirect"]) ? $context["redirect"] : $this->getContext($context, "redirect")), "method", array())) : ("")), "html", null, true);
                echo "
                                    ";
                // line 34
                if ($this->getAttribute($this->getAttribute((isset($context["redirect"]) ? $context["redirect"] : null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
                    // line 35
                    $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "file", array()), $this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "line", array()));
                    // line 36
                    if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "file", array()), "html", null, true);
                        echo "\">";
                    }
                    // line 37
                    echo twig_escape_filter($this->env, (isset($context["redirect_route"]) ? $context["redirect_route"] : $this->getContext($context, "redirect_route")), "html", null, true);
                    // line 38
                    if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                        echo "</a>";
                    }
                } else {
                    // line 40
                    echo twig_escape_filter($this->env, (isset($context["redirect_route"]) ? $context["redirect_route"] : $this->getContext($context, "redirect_route")), "html", null, true);
                }
                // line 42
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["redirect"]) ? $context["redirect"] : $this->getContext($context, "redirect")), "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redirect"]) ? $context["redirect"] : $this->getContext($context, "redirect")), "token", array()), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 46
            echo "
                        ";
            // line 47
            if ((((isset($context["request_collector"]) ? $context["request_collector"] : $this->getContext($context, "request_collector")) && (($this->getAttribute((isset($context["request_collector"]) ? $context["request_collector"] : null), "forward", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request_collector"]) ? $context["request_collector"] : null), "forward", array()), false)) : (false))) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["request_collector"]) ? $context["request_collector"] : null), "forward", array(), "any", false, true), "controller", array(), "any", false, true), "class", array(), "any", true, true))) {
                // line 48
                $context["forward"] = $this->getAttribute((isset($context["request_collector"]) ? $context["request_collector"] : $this->getContext($context, "request_collector")), "forward", array());
                // line 49
                $context["controller"] = $this->getAttribute((isset($context["forward"]) ? $context["forward"] : $this->getContext($context, "forward")), "controller", array());
                // line 50
                echo "<dl class=\"metadata\">
                                <dt>Forwarded to</dt>
                                <dd>
                                    ";
                // line 53
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "file", array()), $this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "line", array()));
                // line 54
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "file", array()), "html", null, true);
                    echo "\">";
                }
                // line 55
                echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "class", array()))), "html", null, true);
                // line 56
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "method", array())) ? ((" :: " . $this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "method", array()))) : ("")), "html", null, true);
                // line 57
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "</a>";
                }
                // line 58
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["forward"]) ? $context["forward"] : $this->getContext($context, "forward")), "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forward"]) ? $context["forward"] : $this->getContext($context, "forward")), "token", array()), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 62
            echo "
                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>";
            // line 65
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "method", array())), "html", null, true);
            echo "</dd>

                            <dt>HTTP Status</dt>
                            <dd>";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
            echo "</dd>

                            <dt>IP</dt>
                            <dd>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "ip", array()), "html", null, true);
            echo "</dd>

                            <dt>Profiled on</dt>
                            <dd>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "time", array()), "r"), "html", null, true);
            echo "</dd>

                            <dt>Token</dt>
                            <dd>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token", array()), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>
                </div>
            ";
        }
        // line 82
        echo "        ";
        
        $__internal_5658e2d38d8f72d230f3e5acfcac759fce2a36b69576911d9b410e311ab3088a->leave($__internal_5658e2d38d8f72d230f3e5acfcac759fce2a36b69576911d9b410e311ab3088a_prof);

        
        $__internal_842bae92baceb3f8e5992cd8e9bb9feef9a534abba76c67aebfef6edad1cb34d->leave($__internal_842bae92baceb3f8e5992cd8e9bb9feef9a534abba76c67aebfef6edad1cb34d_prof);

    }

    // line 90
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b962eeba441ccde29a30b142e86d958ee29b8a8c6d1e3bbf11dc93b3f8eb7872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b962eeba441ccde29a30b142e86d958ee29b8a8c6d1e3bbf11dc93b3f8eb7872->enter($__internal_b962eeba441ccde29a30b142e86d958ee29b8a8c6d1e3bbf11dc93b3f8eb7872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef6a5dde2b3faa9f27804980398888c3030f3d7b3a5b051e4080af8e7af10b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6a5dde2b3faa9f27804980398888c3030f3d7b3a5b051e4080af8e7af10b7e->enter($__internal_ef6a5dde2b3faa9f27804980398888c3030f3d7b3a5b051e4080af8e7af10b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ef6a5dde2b3faa9f27804980398888c3030f3d7b3a5b051e4080af8e7af10b7e->leave($__internal_ef6a5dde2b3faa9f27804980398888c3030f3d7b3a5b051e4080af8e7af10b7e_prof);

        
        $__internal_b962eeba441ccde29a30b142e86d958ee29b8a8c6d1e3bbf11dc93b3f8eb7872->leave($__internal_b962eeba441ccde29a30b142e86d958ee29b8a8c6d1e3bbf11dc93b3f8eb7872_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 90,  392 => 82,  384 => 77,  378 => 74,  372 => 71,  366 => 68,  360 => 65,  355 => 62,  346 => 58,  342 => 57,  340 => 56,  338 => 55,  330 => 54,  328 => 53,  323 => 50,  321 => 49,  319 => 48,  317 => 47,  314 => 46,  305 => 42,  302 => 40,  297 => 38,  295 => 37,  287 => 36,  285 => 35,  283 => 34,  279 => 33,  272 => 29,  268 => 27,  266 => 26,  264 => 25,  262 => 24,  259 => 23,  257 => 22,  253 => 20,  247 => 18,  239 => 16,  237 => 15,  231 => 12,  228 => 11,  225 => 10,  222 => 9,  219 => 8,  210 => 7,  189 => 128,  185 => 126,  171 => 125,  163 => 122,  156 => 121,  153 => 120,  149 => 117,  142 => 116,  139 => 115,  122 => 114,  119 => 113,  117 => 112,  110 => 108,  104 => 105,  98 => 104,  93 => 102,  89 => 101,  83 => 98,  74 => 91,  72 => 90,  68 => 89,  60 => 83,  58 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block body %}
    {{ include('@WebProfiler/Profiler/header.html.twig', with_context = false) }}

    <div id=\"summary\">
        {% block summary %}
            {% if profile is defined %}
                {% set status_code = ('request' in profile.collectors|keys) ? profile.getcollector('request').statuscode|default(0) : 0 %}
                {% set css_class = status_code > 399 ? 'status-error' : status_code > 299 ? 'status-warning' : 'status-success' %}

                <div class=\"status {{ css_class }}\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            {% if profile.method|upper in ['GET', 'HEAD'] %}
                                <a href=\"{{ profile.url }}\">{{ profile.url }}</a>
                            {% else %}
                                {{ profile.url }}
                            {% endif %}
                        </h2>

                        {% set request_collector = profile.collectors.request|default(false) %}
                        {% if request_collector is defined and request_collector.redirect -%}
                            {%- set redirect = request_collector.redirect -%}
                            {%- set controller = redirect.controller -%}
                            {%- set redirect_route = '@' ~ redirect.route %}
                            <dl class=\"metadata\">
                                <dt>
                                    <span class=\"label\">{{ redirect.status_code }}</span>
                                    Redirect from
                                </dt>
                                <dd>
                                    {{ 'GET' != redirect.method ? redirect.method }}
                                    {% if redirect.controller.class is defined -%}
                                        {%- set link = controller.file|file_link(controller.line) -%}
                                        {% if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% endif -%}
                                            {{ redirect_route }}
                                        {%- if link %}</a>{% endif -%}
                                    {%- else -%}
                                            {{ redirect_route }}
                                    {%- endif %}
                                    (<a href=\"{{ path('_profiler', { token: redirect.token }) }}\">{{ redirect.token }}</a>)
                                </dd>
                            </dl>
                        {%- endif %}

                        {% if request_collector and request_collector.forward|default(false) and request_collector.forward.controller.class is defined -%}
                            {%- set forward = request_collector.forward -%}
                            {%- set controller = forward.controller -%}
                            <dl class=\"metadata\">
                                <dt>Forwarded to</dt>
                                <dd>
                                    {% set link = controller.file|file_link(controller.line) -%}
                                    {%- if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% endif -%}
                                        {{- controller.class|abbr_class|striptags -}}
                                        {{- controller.method ? ' :: ' ~ controller.method }}
                                    {%- if link %}</a>{% endif %}
                                    (<a href=\"{{ path('_profiler', { token: forward.token }) }}\">{{ forward.token }}</a>)
                                </dd>
                            </dl>
                        {%- endif %}

                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>{{ profile.method|upper }}</dd>

                            <dt>HTTP Status</dt>
                            <dd>{{ status_code }}</dd>

                            <dt>IP</dt>
                            <dd>{{ profile.ip }}</dd>

                            <dt>Profiled on</dt>
                            <dd>{{ profile.time|date('r') }}</dd>

                            <dt>Token</dt>
                            <dd>{{ profile.token }}</dd>
                        </dl>
                    </div>
                </div>
            {% endif %}
        {% endblock %}
    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    {{ include('@WebProfiler/Profiler/base_js.html.twig') }}
                    {% block panel '' %}
                </div>
            </div>

            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" id=\"sidebarShortcutsMenu\" class=\"visible-small\">
                            <span class=\"icon\">{{ include('@WebProfiler/Icon/menu.svg') }}</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"{{ path('_profiler_search', { limit: 10 }) }}\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"{{ path('_profiler', { token: 'latest' }|merge(request.query.all)) }}\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" {% if tokens is defined or about is defined %}data-toggle-initial=\"display\"{% endif %}>
                            {{ include('@WebProfiler/Icon/search.svg') }} <span class=\"hidden-small\">Search</span>
                        </a>

                        {{ render(path('_profiler_search_bar', request.query.all)) }}
                    </div>
                </div>

                {% if templates is defined %}
                    <ul id=\"menu-profiler\">
                        {% for name, template in templates %}
                            {% set menu -%}
                                {% with { collector: profile.getcollector(name), profiler_markup_version: profiler_markup_version } %}
                                    {{- block('menu', template) -}}
                                {% endwith %}
                            {%- endset %}
                            {% if menu is not empty %}
                                <li class=\"{{ name }} {{ name == panel ? 'selected' : '' }}\">
                                    <a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{{ menu|raw }}</a>
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>
        </div>
    </div>
    <script>
        (function () {
            Sfjs.addEventListener(document.getElementById('sidebarShortcutsMenu'), 'click', function (event) {
                event.preventDefault();
                Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded');
            })
        }())
    </script>
{% endblock %}
", "@WebProfiler/Profiler/layout.html.twig", "/Applications/MAMP/htdocs/MovieSymfo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/layout.html.twig");
    }
}
