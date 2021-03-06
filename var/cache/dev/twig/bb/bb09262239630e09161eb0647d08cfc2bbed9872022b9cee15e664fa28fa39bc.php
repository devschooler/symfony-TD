<?php

/* TDAdminBundle::layout.html.twig */
class __TwigTemplate_d14a293f1046c0bcf5b08f9d653616b48afd61119b8f1ebc0c6c80732171480f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eaf0b287fa892be1f7df2a390b7a6ece691febdeffeb3c94ebb0d0efaf5dc9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf0b287fa892be1f7df2a390b7a6ece691febdeffeb3c94ebb0d0efaf5dc9b4->enter($__internal_eaf0b287fa892be1f7df2a390b7a6ece691febdeffeb3c94ebb0d0efaf5dc9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle::layout.html.twig"));

        $__internal_b1453d71c424f741be0239c4a919128068e3d9c62893b6cfd2a9b400673c32ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1453d71c424f741be0239c4a919128068e3d9c62893b6cfd2a9b400673c32ee->enter($__internal_b1453d71c424f741be0239c4a919128068e3d9c62893b6cfd2a9b400673c32ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle::layout.html.twig"));

        // line 1
        echo "<head>
    <link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Administration du site </title>

    <!-- Bootstrap Core CSS -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"css/shop-item.css\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.html\">Devschool</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li>
                    <a href=\"#\">Bibliothèque</a>
                </li>
                <li class=\"active\">
                    <a href=";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("films_all");
        echo ">Cinéma</a>
                </li>
                <li>
                    <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_all");
        echo "\">Admin</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_eaf0b287fa892be1f7df2a390b7a6ece691febdeffeb3c94ebb0d0efaf5dc9b4->leave($__internal_eaf0b287fa892be1f7df2a390b7a6ece691febdeffeb3c94ebb0d0efaf5dc9b4_prof);

        
        $__internal_b1453d71c424f741be0239c4a919128068e3d9c62893b6cfd2a9b400673c32ee->leave($__internal_b1453d71c424f741be0239c4a919128068e3d9c62893b6cfd2a9b400673c32ee_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_63bf865c69497a256f9d2e1ce3816ab96695c39fd0e0e09d7b164481e2e56914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63bf865c69497a256f9d2e1ce3816ab96695c39fd0e0e09d7b164481e2e56914->enter($__internal_63bf865c69497a256f9d2e1ce3816ab96695c39fd0e0e09d7b164481e2e56914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e3c13fefee9279593ef3021a22a5068aec31d5da9fc34a7385361bd451f3a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3c13fefee9279593ef3021a22a5068aec31d5da9fc34a7385361bd451f3a6c->enter($__internal_9e3c13fefee9279593ef3021a22a5068aec31d5da9fc34a7385361bd451f3a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e3c13fefee9279593ef3021a22a5068aec31d5da9fc34a7385361bd451f3a6c->leave($__internal_9e3c13fefee9279593ef3021a22a5068aec31d5da9fc34a7385361bd451f3a6c_prof);

        
        $__internal_63bf865c69497a256f9d2e1ce3816ab96695c39fd0e0e09d7b164481e2e56914->leave($__internal_63bf865c69497a256f9d2e1ce3816ab96695c39fd0e0e09d7b164481e2e56914_prof);

    }

    public function getTemplateName()
    {
        return "TDAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 61,  85 => 52,  79 => 49,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<head>
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Administration du site </title>

    <!-- Bootstrap Core CSS -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"css/shop-item.css\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.html\">Devschool</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li>
                    <a href=\"#\">Bibliothèque</a>
                </li>
                <li class=\"active\">
                    <a href={{ path('films_all') }}>Cinéma</a>
                </li>
                <li>
                    <a href=\"{{ path('admin_all') }}\">Admin</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

{% block body  %}{% endblock %}", "TDAdminBundle::layout.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/AdminBundle/Resources/views/layout.html.twig");
    }
}
