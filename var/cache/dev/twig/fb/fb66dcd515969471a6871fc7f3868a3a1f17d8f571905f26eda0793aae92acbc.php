<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9efe6b159241f7fba7f0fdfacc7736a352ac2998783380fb7e7e677c47e64493 extends Twig_Template
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
        $__internal_b7ad432a3168b292520e75e013fd389d562ed08f21066cd12114cf4ca1e7200c = $this->env->getExtension("native_profiler");
        $__internal_b7ad432a3168b292520e75e013fd389d562ed08f21066cd12114cf4ca1e7200c->enter($__internal_b7ad432a3168b292520e75e013fd389d562ed08f21066cd12114cf4ca1e7200c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7ad432a3168b292520e75e013fd389d562ed08f21066cd12114cf4ca1e7200c->leave($__internal_b7ad432a3168b292520e75e013fd389d562ed08f21066cd12114cf4ca1e7200c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5da829d8f56d378999ac042c9d601d8b9d4f512ab0bff87ee43f7e80e6213623 = $this->env->getExtension("native_profiler");
        $__internal_5da829d8f56d378999ac042c9d601d8b9d4f512ab0bff87ee43f7e80e6213623->enter($__internal_5da829d8f56d378999ac042c9d601d8b9d4f512ab0bff87ee43f7e80e6213623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5da829d8f56d378999ac042c9d601d8b9d4f512ab0bff87ee43f7e80e6213623->leave($__internal_5da829d8f56d378999ac042c9d601d8b9d4f512ab0bff87ee43f7e80e6213623_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ae11676c36e6e85612c862d80bcba111732920e9f03d4c584930fb2cbac8cfe = $this->env->getExtension("native_profiler");
        $__internal_4ae11676c36e6e85612c862d80bcba111732920e9f03d4c584930fb2cbac8cfe->enter($__internal_4ae11676c36e6e85612c862d80bcba111732920e9f03d4c584930fb2cbac8cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4ae11676c36e6e85612c862d80bcba111732920e9f03d4c584930fb2cbac8cfe->leave($__internal_4ae11676c36e6e85612c862d80bcba111732920e9f03d4c584930fb2cbac8cfe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6ad741e9888c1012532378bd34b976d2c11b9537652a15d648c3d67fc6d9b83 = $this->env->getExtension("native_profiler");
        $__internal_e6ad741e9888c1012532378bd34b976d2c11b9537652a15d648c3d67fc6d9b83->enter($__internal_e6ad741e9888c1012532378bd34b976d2c11b9537652a15d648c3d67fc6d9b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e6ad741e9888c1012532378bd34b976d2c11b9537652a15d648c3d67fc6d9b83->leave($__internal_e6ad741e9888c1012532378bd34b976d2c11b9537652a15d648c3d67fc6d9b83_prof);

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
