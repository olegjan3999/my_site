<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1905cc4be373c00a023d1b2a3f317f67dd35ab1ed394f0abf76d430aacb9f80f extends Twig_Template
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
        $__internal_2b52154bb40507052d707e1e98062f4e9d0d917d98fbf476722f4871560d783e = $this->env->getExtension("native_profiler");
        $__internal_2b52154bb40507052d707e1e98062f4e9d0d917d98fbf476722f4871560d783e->enter($__internal_2b52154bb40507052d707e1e98062f4e9d0d917d98fbf476722f4871560d783e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b52154bb40507052d707e1e98062f4e9d0d917d98fbf476722f4871560d783e->leave($__internal_2b52154bb40507052d707e1e98062f4e9d0d917d98fbf476722f4871560d783e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aef4bb0d3fd0091fe66eed003207c11d3fa951533c7ba56fcf0966a73e22a5b4 = $this->env->getExtension("native_profiler");
        $__internal_aef4bb0d3fd0091fe66eed003207c11d3fa951533c7ba56fcf0966a73e22a5b4->enter($__internal_aef4bb0d3fd0091fe66eed003207c11d3fa951533c7ba56fcf0966a73e22a5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aef4bb0d3fd0091fe66eed003207c11d3fa951533c7ba56fcf0966a73e22a5b4->leave($__internal_aef4bb0d3fd0091fe66eed003207c11d3fa951533c7ba56fcf0966a73e22a5b4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f28294ffc0e3e46b2bd7a2bb298e92449616a36e9ecdd5ea4dc09c74b714a34 = $this->env->getExtension("native_profiler");
        $__internal_6f28294ffc0e3e46b2bd7a2bb298e92449616a36e9ecdd5ea4dc09c74b714a34->enter($__internal_6f28294ffc0e3e46b2bd7a2bb298e92449616a36e9ecdd5ea4dc09c74b714a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6f28294ffc0e3e46b2bd7a2bb298e92449616a36e9ecdd5ea4dc09c74b714a34->leave($__internal_6f28294ffc0e3e46b2bd7a2bb298e92449616a36e9ecdd5ea4dc09c74b714a34_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e55a3278238d4c502fca45879679be15030fa6e0f744946a1c4a0ef369b5ce8a = $this->env->getExtension("native_profiler");
        $__internal_e55a3278238d4c502fca45879679be15030fa6e0f744946a1c4a0ef369b5ce8a->enter($__internal_e55a3278238d4c502fca45879679be15030fa6e0f744946a1c4a0ef369b5ce8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e55a3278238d4c502fca45879679be15030fa6e0f744946a1c4a0ef369b5ce8a->leave($__internal_e55a3278238d4c502fca45879679be15030fa6e0f744946a1c4a0ef369b5ce8a_prof);

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
