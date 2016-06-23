<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2c2f6131c1ef1744450ce383cc5c3506e95aad7c7911044d77fc2ad7f04e0afe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3957e2348fbe93f0942e910d731dbb0035cd6f8e783780445b3135aa9bc3720 = $this->env->getExtension("native_profiler");
        $__internal_c3957e2348fbe93f0942e910d731dbb0035cd6f8e783780445b3135aa9bc3720->enter($__internal_c3957e2348fbe93f0942e910d731dbb0035cd6f8e783780445b3135aa9bc3720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3957e2348fbe93f0942e910d731dbb0035cd6f8e783780445b3135aa9bc3720->leave($__internal_c3957e2348fbe93f0942e910d731dbb0035cd6f8e783780445b3135aa9bc3720_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2791d2b50c68d3d951b04088f081683e590e26eff776afaa55a9b40efa5ad6c3 = $this->env->getExtension("native_profiler");
        $__internal_2791d2b50c68d3d951b04088f081683e590e26eff776afaa55a9b40efa5ad6c3->enter($__internal_2791d2b50c68d3d951b04088f081683e590e26eff776afaa55a9b40efa5ad6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2791d2b50c68d3d951b04088f081683e590e26eff776afaa55a9b40efa5ad6c3->leave($__internal_2791d2b50c68d3d951b04088f081683e590e26eff776afaa55a9b40efa5ad6c3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9136a5e794edba76b338e8c6505f3ea9e5bd1e197affcfcbd71feee0105dedca = $this->env->getExtension("native_profiler");
        $__internal_9136a5e794edba76b338e8c6505f3ea9e5bd1e197affcfcbd71feee0105dedca->enter($__internal_9136a5e794edba76b338e8c6505f3ea9e5bd1e197affcfcbd71feee0105dedca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9136a5e794edba76b338e8c6505f3ea9e5bd1e197affcfcbd71feee0105dedca->leave($__internal_9136a5e794edba76b338e8c6505f3ea9e5bd1e197affcfcbd71feee0105dedca_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f22617510ebf2bca422a6d463b4c2c47077632fdefcecf7c1c6295b65039564d = $this->env->getExtension("native_profiler");
        $__internal_f22617510ebf2bca422a6d463b4c2c47077632fdefcecf7c1c6295b65039564d->enter($__internal_f22617510ebf2bca422a6d463b4c2c47077632fdefcecf7c1c6295b65039564d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f22617510ebf2bca422a6d463b4c2c47077632fdefcecf7c1c6295b65039564d->leave($__internal_f22617510ebf2bca422a6d463b4c2c47077632fdefcecf7c1c6295b65039564d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
