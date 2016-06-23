<?php

/* feedback.html.twig */
class __TwigTemplate_1abb6abd46a3e60b20dcfe3f1f4ec12d2de3b248a232d6408efb7891a0dffb93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "feedback.html.twig", 1);
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
        $__internal_be55f870fbea94a12a839cf369c6ccfda3ee46b8d4cb9d5b96085c3c2704afd4 = $this->env->getExtension("native_profiler");
        $__internal_be55f870fbea94a12a839cf369c6ccfda3ee46b8d4cb9d5b96085c3c2704afd4->enter($__internal_be55f870fbea94a12a839cf369c6ccfda3ee46b8d4cb9d5b96085c3c2704afd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "feedback.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be55f870fbea94a12a839cf369c6ccfda3ee46b8d4cb9d5b96085c3c2704afd4->leave($__internal_be55f870fbea94a12a839cf369c6ccfda3ee46b8d4cb9d5b96085c3c2704afd4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_63bf794895d3bd795f83f2b333e9071539da1e6971f692712baf93661d4c3a3c = $this->env->getExtension("native_profiler");
        $__internal_63bf794895d3bd795f83f2b333e9071539da1e6971f692712baf93661d4c3a3c->enter($__internal_63bf794895d3bd795f83f2b333e9071539da1e6971f692712baf93661d4c3a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


<div class=\"wrapper\">

    <div class=\"pm-info\">
        <div class=\"preview\">
        </div>
        <div class=\"model-info\">
            <h1>Оформление заказа</h1>
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
            <div class=\"year\"><span>Цвет:</span><span>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
        echo "</span></div>
        </div>
    </div>
    <form action=\"/order-create\" method=\"post\" name=\"feedback-form\">
        <div class=\"form\">
            <div class=\"form-reg\">
                    <span class=\"help\">*Поля, обязательные для заполнения</span>
                    <br>
                    <label for=\"name_last-name\">
                        Имя и фамилия*
                    </label>
                    <input type=\"text\" name=\"name\" id=\"name_last-name\" maxlength=\"100\" class=\"field\" required><br>

                    <label for=\"phone\">
                        Телефон*
                    </label>
                    <input type=\"tel\" name=\"phone\" id=\"phone\" maxlength=\"15\" class=\"field\" required><br>
                    <label for=\"mail\">
                        Адрес электронной почты*
                    </label>
                    <input type=\"email\" name=\"email\" id=\"mail\" maxlength=\"75\" class=\"field\" required><br>
                    <label for=\"adress\">
                        Адрес доставки
                    </label>
                    <textarea name=\"comment\" id=\"adress\" cols=\"40\" rows=\"5\" class=\"field\"></textarea><br>

                <div class=\"total\">
                    <p><span>ИТОГО: позиций</span><strong>1</strong><span>на сумму</span><strong>180,00 грн</strong></p>
                    <div class=\"form\">
                        <input class=\"submit\" type=\"submit\" value=\"Оформить заказ\">
                    </div>
                </div>
            </div>

            <div class=\"info-more\">
                <span>Дополнительная информация</span>
                <p>Изменить/удалить заказ<p>
                <p>Отправки по Украине осуществляются компанией Новая Почта</p>
                <p>Стоимость доставки на отделение Новой Почты составляет 35.00 грн. (склад) и 55.00 грн. (к дверям). В случае оплаты наложенным платежём вы платите также дополнительно 18 грн. за услуги компании Новая Почта по обратному переводу денег.</p>
            </div>

        </div>
    </form>
</div>

    

";
        
        $__internal_63bf794895d3bd795f83f2b333e9071539da1e6971f692712baf93661d4c3a3c->leave($__internal_63bf794895d3bd795f83f2b333e9071539da1e6971f692712baf93661d4c3a3c_prof);

    }

    public function getTemplateName()
    {
        return "feedback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  60 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* <div class="wrapper">*/
/* */
/*     <div class="pm-info">*/
/*         <div class="preview">*/
/*         </div>*/
/*         <div class="model-info">*/
/*             <h1>Оформление заказа</h1>*/
/*             <div class="brend"><span>Марка:</span><span>{{ auto.brand }}</span></div>*/
/*             <div class="model"><span>Модель:</span><span>{{ auto.model }}</span></div>*/
/*             <div class="year"><span>Год:</span><span>{{ auto.year }}</span></div>*/
/*             <div class="year"><span>Цвет:</span><span>{{ color }}</span></div>*/
/*         </div>*/
/*     </div>*/
/*     <form action="/order-create" method="post" name="feedback-form">*/
/*         <div class="form">*/
/*             <div class="form-reg">*/
/*                     <span class="help">*Поля, обязательные для заполнения</span>*/
/*                     <br>*/
/*                     <label for="name_last-name">*/
/*                         Имя и фамилия**/
/*                     </label>*/
/*                     <input type="text" name="name" id="name_last-name" maxlength="100" class="field" required><br>*/
/* */
/*                     <label for="phone">*/
/*                         Телефон**/
/*                     </label>*/
/*                     <input type="tel" name="phone" id="phone" maxlength="15" class="field" required><br>*/
/*                     <label for="mail">*/
/*                         Адрес электронной почты**/
/*                     </label>*/
/*                     <input type="email" name="email" id="mail" maxlength="75" class="field" required><br>*/
/*                     <label for="adress">*/
/*                         Адрес доставки*/
/*                     </label>*/
/*                     <textarea name="comment" id="adress" cols="40" rows="5" class="field"></textarea><br>*/
/* */
/*                 <div class="total">*/
/*                     <p><span>ИТОГО: позиций</span><strong>1</strong><span>на сумму</span><strong>180,00 грн</strong></p>*/
/*                     <div class="form">*/
/*                         <input class="submit" type="submit" value="Оформить заказ">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="info-more">*/
/*                 <span>Дополнительная информация</span>*/
/*                 <p>Изменить/удалить заказ<p>*/
/*                 <p>Отправки по Украине осуществляются компанией Новая Почта</p>*/
/*                 <p>Стоимость доставки на отделение Новой Почты составляет 35.00 грн. (склад) и 55.00 грн. (к дверям). В случае оплаты наложенным платежём вы платите также дополнительно 18 грн. за услуги компании Новая Почта по обратному переводу денег.</p>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </form>*/
/* </div>*/
/* */
/*     */
/* */
/* {% endblock %}*/
/* */
