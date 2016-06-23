<?php

/* base.html.twig */
class __TwigTemplate_3311a2c97579b2774435b0bfc4164d7afe1c3080e9690e81fc3f6aa0501a00b0 extends Twig_Template
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
        $__internal_f18a62e42614677f8ee79c165c92899cf9effddd4ccfb4f78762fe8a14213db4 = $this->env->getExtension("native_profiler");
        $__internal_f18a62e42614677f8ee79c165c92899cf9effddd4ccfb4f78762fe8a14213db4->enter($__internal_f18a62e42614677f8ee79c165c92899cf9effddd4ccfb4f78762fe8a14213db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f18a62e42614677f8ee79c165c92899cf9effddd4ccfb4f78762fe8a14213db4->leave($__internal_f18a62e42614677f8ee79c165c92899cf9effddd4ccfb4f78762fe8a14213db4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9744a8edea34b11d2f6526aeb71bc73eb1a5ba4615d8729a6d0400564862c2b = $this->env->getExtension("native_profiler");
        $__internal_d9744a8edea34b11d2f6526aeb71bc73eb1a5ba4615d8729a6d0400564862c2b->enter($__internal_d9744a8edea34b11d2f6526aeb71bc73eb1a5ba4615d8729a6d0400564862c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d9744a8edea34b11d2f6526aeb71bc73eb1a5ba4615d8729a6d0400564862c2b->leave($__internal_d9744a8edea34b11d2f6526aeb71bc73eb1a5ba4615d8729a6d0400564862c2b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c40bc51cd47a04bf477705e90510597daf7e1d90d8cac69800d0172fb0a132ea = $this->env->getExtension("native_profiler");
        $__internal_c40bc51cd47a04bf477705e90510597daf7e1d90d8cac69800d0172fb0a132ea->enter($__internal_c40bc51cd47a04bf477705e90510597daf7e1d90d8cac69800d0172fb0a132ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c40bc51cd47a04bf477705e90510597daf7e1d90d8cac69800d0172fb0a132ea->leave($__internal_c40bc51cd47a04bf477705e90510597daf7e1d90d8cac69800d0172fb0a132ea_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f1a1b1b8de9a11bae28e10c73277e787ecc9a9b428a74b55cf15cbe8ee47980 = $this->env->getExtension("native_profiler");
        $__internal_7f1a1b1b8de9a11bae28e10c73277e787ecc9a9b428a74b55cf15cbe8ee47980->enter($__internal_7f1a1b1b8de9a11bae28e10c73277e787ecc9a9b428a74b55cf15cbe8ee47980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f1a1b1b8de9a11bae28e10c73277e787ecc9a9b428a74b55cf15cbe8ee47980->leave($__internal_7f1a1b1b8de9a11bae28e10c73277e787ecc9a9b428a74b55cf15cbe8ee47980_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9b69e799ee1ca05830a875f11fa58608056063eb88cbd7eefdfcce9d4c4cde76 = $this->env->getExtension("native_profiler");
        $__internal_9b69e799ee1ca05830a875f11fa58608056063eb88cbd7eefdfcce9d4c4cde76->enter($__internal_9b69e799ee1ca05830a875f11fa58608056063eb88cbd7eefdfcce9d4c4cde76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9b69e799ee1ca05830a875f11fa58608056063eb88cbd7eefdfcce9d4c4cde76->leave($__internal_9b69e799ee1ca05830a875f11fa58608056063eb88cbd7eefdfcce9d4c4cde76_prof);

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
