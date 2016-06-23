<?php

/* order.html.twig */
class __TwigTemplate_74ea6009c9cf8c9cfc3da1137eb1a8c6843378c0403af86ac67771f9e53e92d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "order.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b8ce62b1997d341061b9ec2b7ffa728955f5c8bc90b73c80a3969185ddeed58 = $this->env->getExtension("native_profiler");
        $__internal_0b8ce62b1997d341061b9ec2b7ffa728955f5c8bc90b73c80a3969185ddeed58->enter($__internal_0b8ce62b1997d341061b9ec2b7ffa728955f5c8bc90b73c80a3969185ddeed58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b8ce62b1997d341061b9ec2b7ffa728955f5c8bc90b73c80a3969185ddeed58->leave($__internal_0b8ce62b1997d341061b9ec2b7ffa728955f5c8bc90b73c80a3969185ddeed58_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_687341a934698d50e4e36f76589ebce59c8abcf6ba56d5cd8d63abf1be21dcb3 = $this->env->getExtension("native_profiler");
        $__internal_687341a934698d50e4e36f76589ebce59c8abcf6ba56d5cd8d63abf1be21dcb3->enter($__internal_687341a934698d50e4e36f76589ebce59c8abcf6ba56d5cd8d63abf1be21dcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <link href=\"/bundles/framework/css/t-y.css\" rel=\"stylesheet\">
<div class=\"wrapper\">

    <div class=\"wrapper\">
        <div class=\"pm-info\">
            <h2>Спасибо за Ваш заказ!</h2>
            <div class=\"order-info\">
                <ul>
                    <li>Model: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "auto", array()), "brand", array()), "html", null, true);
        echo " </li>
                    <li>Model: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "auto", array()), "model", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "auto", array()), "year", array()), "html", null, true);
        echo " </li>
                    <li>Color : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "color", array()), "color", array()), "html", null, true);
        echo "</span></li>
                </ul>
            </div>
            <p>В ближайшее время с Вaми свяжется наш менеджер.</p>
            <div class=\"customer-info\">
                <ul>
                    <li>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "customer", array()), "name", array()), "html", null, true);
        echo "</li>
                    <li>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "customer", array()), "phone", array()), "html", null, true);
        echo "</li>
                    <li>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "customer", array()), "email", array()), "html", null, true);
        echo "</li>
                </ul>
            </div>
        </div>
    </div>


</div>

";
        
        $__internal_687341a934698d50e4e36f76589ebce59c8abcf6ba56d5cd8d63abf1be21dcb3->leave($__internal_687341a934698d50e4e36f76589ebce59c8abcf6ba56d5cd8d63abf1be21dcb3_prof);

    }

    public function getTemplateName()
    {
        return "order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  74 => 22,  70 => 21,  61 => 15,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <link href="/bundles/framework/css/t-y.css" rel="stylesheet">*/
/* <div class="wrapper">*/
/* */
/*     <div class="wrapper">*/
/*         <div class="pm-info">*/
/*             <h2>Спасибо за Ваш заказ!</h2>*/
/*             <div class="order-info">*/
/*                 <ul>*/
/*                     <li>Model: {{ order.auto.brand }} </li>*/
/*                     <li>Model: {{ order.auto.model }} {{ order.auto.year }} </li>*/
/*                     <li>Color : {{ order.color.color }}</span></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <p>В ближайшее время с Вaми свяжется наш менеджер.</p>*/
/*             <div class="customer-info">*/
/*                 <ul>*/
/*                     <li>{{ order.customer.name }}</li>*/
/*                     <li>{{ order.customer.phone }}</li>*/
/*                     <li>{{ order.customer.email }}</li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
