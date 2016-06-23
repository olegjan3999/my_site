<?php

/* base.html.twig */
class __TwigTemplate_959cb288acf4f9c7c727c4c60ef9da5612664add5aa525ad07abd49667ef5e44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62b07542a8f33ff6d6bf5da2dc0d1e4f01ddbc52909f84290000dbf9611b7989 = $this->env->getExtension("native_profiler");
        $__internal_62b07542a8f33ff6d6bf5da2dc0d1e4f01ddbc52909f84290000dbf9611b7989->enter($__internal_62b07542a8f33ff6d6bf5da2dc0d1e4f01ddbc52909f84290000dbf9611b7989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <script src=\"/bundles/framework/js/libs/jquery.js\"></script>
        <script src=\"/bundles/framework/js/libs/http.js\"></script>
        <script src=\"/bundles/framework/js/services/httpService.js\"></script>
        <script src=\"/bundles/framework/js/index.js\"></script>

        <link href=\"/bundles/framework/css/common/bootstrap.css\" rel=\"stylesheet\">
        <link href=\"/bundles/framework/css/common/slider.css\" rel=\"stylesheet\">

        <link href=\"/bundles/framework/css/css.css\" rel=\"stylesheet\">
        <link href=\"/bundles/framework/css/form-css.css\" rel=\"stylesheet\">
        <link href=\"/bundles/framework/css/header.css\" rel=\"stylesheet\">

    </head>
    <body>

    <header>
        <div class=\"container-fluid\">


            <div class=\"row\">

                <div class=\"logo\">
                    <a href=\"/\" rel=\"home\"><img src=\"/bundles/framework/images/Logo.png\" alt=\"Colorion\"/></a>
                </div>

                <ul class=\"nav nav-tabs menu-navigation\">
                    <li role=\"presentation\" class=\"active\"><a href=\"/\">Главная</a></li>
                    <li role=\"presentation\"><a href=\"#\">Контакты</a></li>
                    <li role=\"presentation\"><a href=\"/bundles/framework/index.html\">Кузовы</a></li>
                </ul>

                <div class=\"feedback\">
                    <p>Контакты</p>

                    <div class=\"num\">(066) 507-48-25</div>
                    <br/>

                    <div class=\"num\">(095) 817-13-86</div>
                    <br/>

                    <div class=\"num\">(095) 817-13-86</div>
                </div>




            </div>
        </div>
    </header>

        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    </body>
</html>
";
        
        $__internal_62b07542a8f33ff6d6bf5da2dc0d1e4f01ddbc52909f84290000dbf9611b7989->leave($__internal_62b07542a8f33ff6d6bf5da2dc0d1e4f01ddbc52909f84290000dbf9611b7989_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_20e7689c1775cbadf37dc1478bf213f026e6119b448830ad99f6967cb71ef392 = $this->env->getExtension("native_profiler");
        $__internal_20e7689c1775cbadf37dc1478bf213f026e6119b448830ad99f6967cb71ef392->enter($__internal_20e7689c1775cbadf37dc1478bf213f026e6119b448830ad99f6967cb71ef392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_20e7689c1775cbadf37dc1478bf213f026e6119b448830ad99f6967cb71ef392->leave($__internal_20e7689c1775cbadf37dc1478bf213f026e6119b448830ad99f6967cb71ef392_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d52309b12cf501259f9e517af5c98dd0fc2f31571bb0ae9a218b12b9af6ff2a = $this->env->getExtension("native_profiler");
        $__internal_9d52309b12cf501259f9e517af5c98dd0fc2f31571bb0ae9a218b12b9af6ff2a->enter($__internal_9d52309b12cf501259f9e517af5c98dd0fc2f31571bb0ae9a218b12b9af6ff2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9d52309b12cf501259f9e517af5c98dd0fc2f31571bb0ae9a218b12b9af6ff2a->leave($__internal_9d52309b12cf501259f9e517af5c98dd0fc2f31571bb0ae9a218b12b9af6ff2a_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_124bf1a045a772e642428181d04499e513f1422faa5dd8ca06d84965c1f439d9 = $this->env->getExtension("native_profiler");
        $__internal_124bf1a045a772e642428181d04499e513f1422faa5dd8ca06d84965c1f439d9->enter($__internal_124bf1a045a772e642428181d04499e513f1422faa5dd8ca06d84965c1f439d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_124bf1a045a772e642428181d04499e513f1422faa5dd8ca06d84965c1f439d9->leave($__internal_124bf1a045a772e642428181d04499e513f1422faa5dd8ca06d84965c1f439d9_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6cb41077d698591764a8c1f24fe261e374b80f0aff3026d8b06a070d8f972903 = $this->env->getExtension("native_profiler");
        $__internal_6cb41077d698591764a8c1f24fe261e374b80f0aff3026d8b06a070d8f972903->enter($__internal_6cb41077d698591764a8c1f24fe261e374b80f0aff3026d8b06a070d8f972903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6cb41077d698591764a8c1f24fe261e374b80f0aff3026d8b06a070d8f972903->leave($__internal_6cb41077d698591764a8c1f24fe261e374b80f0aff3026d8b06a070d8f972903_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 60,  131 => 59,  120 => 6,  108 => 5,  99 => 61,  96 => 60,  94 => 59,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         <script src="/bundles/framework/js/libs/jquery.js"></script>*/
/*         <script src="/bundles/framework/js/libs/http.js"></script>*/
/*         <script src="/bundles/framework/js/services/httpService.js"></script>*/
/*         <script src="/bundles/framework/js/index.js"></script>*/
/* */
/*         <link href="/bundles/framework/css/common/bootstrap.css" rel="stylesheet">*/
/*         <link href="/bundles/framework/css/common/slider.css" rel="stylesheet">*/
/* */
/*         <link href="/bundles/framework/css/css.css" rel="stylesheet">*/
/*         <link href="/bundles/framework/css/form-css.css" rel="stylesheet">*/
/*         <link href="/bundles/framework/css/header.css" rel="stylesheet">*/
/* */
/*     </head>*/
/*     <body>*/
/* */
/*     <header>*/
/*         <div class="container-fluid">*/
/* */
/* */
/*             <div class="row">*/
/* */
/*                 <div class="logo">*/
/*                     <a href="/" rel="home"><img src="/bundles/framework/images/Logo.png" alt="Colorion"/></a>*/
/*                 </div>*/
/* */
/*                 <ul class="nav nav-tabs menu-navigation">*/
/*                     <li role="presentation" class="active"><a href="/">Главная</a></li>*/
/*                     <li role="presentation"><a href="#">Контакты</a></li>*/
/*                     <li role="presentation"><a href="/bundles/framework/index.html">Кузовы</a></li>*/
/*                 </ul>*/
/* */
/*                 <div class="feedback">*/
/*                     <p>Контакты</p>*/
/* */
/*                     <div class="num">(066) 507-48-25</div>*/
/*                     <br/>*/
/* */
/*                     <div class="num">(095) 817-13-86</div>*/
/*                     <br/>*/
/* */
/*                     <div class="num">(095) 817-13-86</div>*/
/*                 </div>*/
/* */
/* */
/* */
/* */
/*             </div>*/
/*         </div>*/
/*     </header>*/
/* */
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
