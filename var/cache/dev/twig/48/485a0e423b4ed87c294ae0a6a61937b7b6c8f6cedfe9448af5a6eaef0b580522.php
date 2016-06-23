<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0d8b50eec419d6acf519852af014a072576296d771420f4cb6222329fdd59bf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85d9d8b80e1efa4f86da0804b2fbe5853a7476231df444f2d7f6def6d216ca7c = $this->env->getExtension("native_profiler");
        $__internal_85d9d8b80e1efa4f86da0804b2fbe5853a7476231df444f2d7f6def6d216ca7c->enter($__internal_85d9d8b80e1efa4f86da0804b2fbe5853a7476231df444f2d7f6def6d216ca7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85d9d8b80e1efa4f86da0804b2fbe5853a7476231df444f2d7f6def6d216ca7c->leave($__internal_85d9d8b80e1efa4f86da0804b2fbe5853a7476231df444f2d7f6def6d216ca7c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9f942cfa6ed82170a9ba0a35f1a0e7fe9243673b053ebf31fcba02bdba03cd32 = $this->env->getExtension("native_profiler");
        $__internal_9f942cfa6ed82170a9ba0a35f1a0e7fe9243673b053ebf31fcba02bdba03cd32->enter($__internal_9f942cfa6ed82170a9ba0a35f1a0e7fe9243673b053ebf31fcba02bdba03cd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9f942cfa6ed82170a9ba0a35f1a0e7fe9243673b053ebf31fcba02bdba03cd32->leave($__internal_9f942cfa6ed82170a9ba0a35f1a0e7fe9243673b053ebf31fcba02bdba03cd32_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_02013130f04f66cfd17f24e939ae3e336653481859c87dccca282a6f5e6c3218 = $this->env->getExtension("native_profiler");
        $__internal_02013130f04f66cfd17f24e939ae3e336653481859c87dccca282a6f5e6c3218->enter($__internal_02013130f04f66cfd17f24e939ae3e336653481859c87dccca282a6f5e6c3218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_02013130f04f66cfd17f24e939ae3e336653481859c87dccca282a6f5e6c3218->leave($__internal_02013130f04f66cfd17f24e939ae3e336653481859c87dccca282a6f5e6c3218_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4fcb892c7ae8a3d999eb79a31dca43b13cf50e48bbed939679bbd795eea8b2c2 = $this->env->getExtension("native_profiler");
        $__internal_4fcb892c7ae8a3d999eb79a31dca43b13cf50e48bbed939679bbd795eea8b2c2->enter($__internal_4fcb892c7ae8a3d999eb79a31dca43b13cf50e48bbed939679bbd795eea8b2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4fcb892c7ae8a3d999eb79a31dca43b13cf50e48bbed939679bbd795eea8b2c2->leave($__internal_4fcb892c7ae8a3d999eb79a31dca43b13cf50e48bbed939679bbd795eea8b2c2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
