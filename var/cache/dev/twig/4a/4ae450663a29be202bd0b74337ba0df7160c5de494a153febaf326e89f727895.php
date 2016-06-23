<?php

/* colors.html.twig */
class __TwigTemplate_4d5c953d6a27ddca5363f5ca4d22396ad71fca880891215e784e7b80acea17b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "colors.html.twig", 1);
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
        $__internal_7d1c9a5fdac9ae576b590f1a234f3ceb716d704207ee9219debb750f3bfc13a3 = $this->env->getExtension("native_profiler");
        $__internal_7d1c9a5fdac9ae576b590f1a234f3ceb716d704207ee9219debb750f3bfc13a3->enter($__internal_7d1c9a5fdac9ae576b590f1a234f3ceb716d704207ee9219debb750f3bfc13a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "colors.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d1c9a5fdac9ae576b590f1a234f3ceb716d704207ee9219debb750f3bfc13a3->leave($__internal_7d1c9a5fdac9ae576b590f1a234f3ceb716d704207ee9219debb750f3bfc13a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f0802e92d1fa1d2ed72a0b77db6514d8482613aedc00371431d43753cde96e6 = $this->env->getExtension("native_profiler");
        $__internal_8f0802e92d1fa1d2ed72a0b77db6514d8482613aedc00371431d43753cde96e6->enter($__internal_8f0802e92d1fa1d2ed72a0b77db6514d8482613aedc00371431d43753cde96e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"wrapper\">

        <header></header>
        <div class=\"pm-info\">
            <div class=\"preview\">

            </div>
            <div class=\"model-info\">
                <h1>Выберите цвет автомобиля</h1>
                <div class=\"brend\"><span>Марка:</span><span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")), "brand", array()), "html", null, true);
        echo "</span></div>
                <div class=\"model\"><span>Модель:</span><span>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")), "model", array()), "html", null, true);
        echo "</span></div>
                <div class=\"year\"><span>Год:</span><span>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : $this->getContext($context, "auto")), "year", array()), "html", null, true);
        echo "</span></div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <table class=\"table table-striped \">
                <thead>
                <tr>
                    <td colspan=\"2\"></td>
                    <td>Цветовая группа</td>
                    <td>Название</td>
                    <td>Цветовой код</td>
                </tr>
                </thead>
                <tbody id=\"color-fields\">

                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 32
            echo "                    <tr>
                        <td><input type=\"checkbox\" id=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "id", array()), "html", null, true);
            echo "\" onchange=\"setColorId(this)\"></td>
                        <td><img src=\"http://localhost:8000/bundles/framework/images/\" class=\"color-img\"></td>
                        <td><label for=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "title", array()), "html", null, true);
            echo "</label></td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "colorGroup", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "colorCode", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
                </tbody>

            </table>

            <p id=\"color-error\">* Please, choose your color</p>

            <script type=\"text/javascript\">
                var handler = function ( event ){
                    event = event || window.event;
                    var target = event.target || event.srcElement;
                    if ( target.nodeType == 1 && target.nodeName.toLowerCase() == \"input\" && target.type == \"checkbox\" && target.checked ) {
                        var inputs = document.getElementsByTagName(\"input\");
                        for ( var i = 0; inputs[i]; i++ ) {
                            if ( inputs[i].type == \"checkbox\" && inputs[i] != target ) {
                                inputs[i].checked = false;
                            }
                        }
                    }
                }
                if (document.addEventListener){
                    document.addEventListener('click', handler, false);
                } else if (document.attachEvent){
                    document.attachEvent('onclick', handler);
                }
            </script>



            <div class=\"total\">
                <p><span>ИТОГО: позиций</span><strong>1</strong><span>на сумму</span><strong>180,00 грн</strong></p>
                <div class=\"form\">
                        <input class=\"not-found\" id=\"#\" name=\"#\" type=\"button\" value=\"Не найдет цвет\">
                        <input class=\"submit\" id=\"#\" name=\"#\" type=\"button\" value=\"Оформить заказ\"  onclick=\"goToFeedback()\">
                </div>


            </div>

        </div>


    </div>


";
        
        $__internal_8f0802e92d1fa1d2ed72a0b77db6514d8482613aedc00371431d43753cde96e6->leave($__internal_8f0802e92d1fa1d2ed72a0b77db6514d8482613aedc00371431d43753cde96e6_prof);

    }

    public function getTemplateName()
    {
        return "colors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 40,  102 => 37,  98 => 36,  92 => 35,  85 => 33,  82 => 32,  78 => 31,  60 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="wrapper">*/
/* */
/*         <header></header>*/
/*         <div class="pm-info">*/
/*             <div class="preview">*/
/* */
/*             </div>*/
/*             <div class="model-info">*/
/*                 <h1>Выберите цвет автомобиля</h1>*/
/*                 <div class="brend"><span>Марка:</span><span>{{ auto.brand }}</span></div>*/
/*                 <div class="model"><span>Модель:</span><span>{{ auto.model }}</span></div>*/
/*                 <div class="year"><span>Год:</span><span>{{ auto.year }}</span></div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-6">*/
/*             <table class="table table-striped ">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <td colspan="2"></td>*/
/*                     <td>Цветовая группа</td>*/
/*                     <td>Название</td>*/
/*                     <td>Цветовой код</td>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody id="color-fields">*/
/* */
/*                 {% for color in colors %}*/
/*                     <tr>*/
/*                         <td><input type="checkbox" id="{{ color.id }}" value="{{ color.id }}" onchange="setColorId(this)"></td>*/
/*                         <td><img src="http://localhost:8000/bundles/framework/images/" class="color-img"></td>*/
/*                         <td><label for="{{ color.id }}">{{ color.title }}</label></td>*/
/*                         <td>{{ color.colorGroup }}</td>*/
/*                         <td>{{ color.colorCode }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/* */
/*                 </tbody>*/
/* */
/*             </table>*/
/* */
/*             <p id="color-error">* Please, choose your color</p>*/
/* */
/*             <script type="text/javascript">*/
/*                 var handler = function ( event ){*/
/*                     event = event || window.event;*/
/*                     var target = event.target || event.srcElement;*/
/*                     if ( target.nodeType == 1 && target.nodeName.toLowerCase() == "input" && target.type == "checkbox" && target.checked ) {*/
/*                         var inputs = document.getElementsByTagName("input");*/
/*                         for ( var i = 0; inputs[i]; i++ ) {*/
/*                             if ( inputs[i].type == "checkbox" && inputs[i] != target ) {*/
/*                                 inputs[i].checked = false;*/
/*                             }*/
/*                         }*/
/*                     }*/
/*                 }*/
/*                 if (document.addEventListener){*/
/*                     document.addEventListener('click', handler, false);*/
/*                 } else if (document.attachEvent){*/
/*                     document.attachEvent('onclick', handler);*/
/*                 }*/
/*             </script>*/
/* */
/* */
/* */
/*             <div class="total">*/
/*                 <p><span>ИТОГО: позиций</span><strong>1</strong><span>на сумму</span><strong>180,00 грн</strong></p>*/
/*                 <div class="form">*/
/*                         <input class="not-found" id="#" name="#" type="button" value="Не найдет цвет">*/
/*                         <input class="submit" id="#" name="#" type="button" value="Оформить заказ"  onclick="goToFeedback()">*/
/*                 </div>*/
/* */
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
