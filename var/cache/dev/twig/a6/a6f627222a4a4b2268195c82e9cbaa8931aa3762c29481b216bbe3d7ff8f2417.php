<?php

/* main.html.twig */
class __TwigTemplate_c5df7102fccc2557c2a2fca8267cea8176dff7e8406cac784016e5ff2b506744 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main.html.twig", 1);
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
        $__internal_b355eb8692bf53ef38112e4de6601d3b42715afd53af7b461bac9581b57d1033 = $this->env->getExtension("native_profiler");
        $__internal_b355eb8692bf53ef38112e4de6601d3b42715afd53af7b461bac9581b57d1033->enter($__internal_b355eb8692bf53ef38112e4de6601d3b42715afd53af7b461bac9581b57d1033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b355eb8692bf53ef38112e4de6601d3b42715afd53af7b461bac9581b57d1033->leave($__internal_b355eb8692bf53ef38112e4de6601d3b42715afd53af7b461bac9581b57d1033_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d7206965a32c4fccfd328baf85ea455de04af31b532ba8c9fec2057901a76f8 = $this->env->getExtension("native_profiler");
        $__internal_0d7206965a32c4fccfd328baf85ea455de04af31b532ba8c9fec2057901a76f8->enter($__internal_0d7206965a32c4fccfd328baf85ea455de04af31b532ba8c9fec2057901a76f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        <div class=\"container-fluid slider\" style=\"margin-left: -15px;margin-right: -15px;\">
                <div id=\"slider-arrow\" class=\"slider-hidden\">
                    <div class=\"slider-button\"><span class=\"glyphicon glyphicon-menu-right\" aria-hidden=\"true\"></span></div>
                </div>

                <div id=\"slider-block1\" class=\"col-md-4 slider-menu\">
                    <div class=\"slider-button\" model=\"pens\">
                        <img src=\"/bundles/framework/images/main/pens.png\" alt=\"Карандаш\">
                        <div>Карандаш</div>
                    </div>
                </div>
                <div id=\"slider-block2\" class=\"col-md-4 slider-menu\">
                    <div class=\"slider-button\" model=\"balon\">
                        <img src=\"/bundles/framework/images/main/balon.png\" alt=\"Аерозоль\">
                        <div>Аерозоль</div>
                    </div>
                </div>
                <div id=\"slider-block3\" class=\"col-md-4 slider-menu \">
                    <div class=\"slider-button\" model=\"tin\">
                        <img src=\"/bundles/framework/images/main/tin.png\" alt=\"На разлив\">
                        <div>На разлив</div>
                    </div>
                </div>

                <div id=\"slider-form\" class=\"col-md-8 slider-hidden\">

                    <div class=\"balon-info\">
                        <div class=\"info\">
                            <div class=\"volume\">
                                Объем - 400 мл
                            </div>
                            <div class=\"area\">
                                Площадь покрытия – 1,2 - 2 м2
                            </div>
                            <div class=\"popad\">
                                Попадание в цвет 95 - 100%
                            </div>
                            <div class=\"guarantee\">
                                Гарантия – 2 года
                            </div>
                        </div>

                        <div class=\"description\">
                            - Баллон + наша краска. Изготовленная по заводскому цветовому коду
                            автомобиля – 300 грн.
                            - Баллон + наша краска. Подобранная нашим колористом по данной нам
                            детали Вашего автомобиля (подбор «по лючку бензобака») – 350 грн.
                            - Баллон + Ваша краска. 150 мл неразбавленной краски типа «металлик»
                            (базовая автоэмаль) или акриловой. - 150 грн.
                        </div>
                    </div>

                    <div class=\"pens-info\">
                        <div class=\"info\">
                            <div class=\"volume\">
                                Объем - 12 мл
                            </div>
                            <div class=\"area\">
                                Площадь покрытия – 30х30см
                            </div>
                            <div class=\"popad\">
                                Попадание в цвет 95 - 100%
                            </div>
                            <div class=\"guarantee\">
                                Гарантия – 2 года
                            </div>
                        </div>

                        <div class=\"description\">
                            - Карандаш + лак + наша краска. Изготовленная по заводскому цветовому
                            коду автомобиля – 150 грн.
                            - Карандаш + лак + наша краска. Подобранная нашим колористом по данной
                            нам детали Вашего автомобиля (подбор «по лючку бензобака») – 200 грн.
                        </div>
                    </div>

                    <div class=\"tin-info\">
                        <div class=\"info\">
                           Logos
                        </div>

                        <div class=\"description\">
                            - Готовая краска. Изготовленная по заводскому цветовому коду
                            автомобиля – 150 грн/100 мл.
                            - Подбор автоэмали. Подобранная нашим колористом по данной нам детали
                            Вашего автомобиля (подбор «по лючку бензобака») – 150 грн/100 мл +
                            подбор 100 грн.
                            В примечаниях нужно добавить \"Заказ от 100 мл\"
                        </div>
                    </div>

                    <div action=\"#\" class=\"form-inline select-auto\">
                        <div class=\"form-group\">

                            <select name=\"brand\" id=\"brand\" class=\"brand form-control\" onchange=\"selectBrand()\">

                                <option value=\"0\" class=\"text-muted\">Brand</option>
                                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brands"]) ? $context["brands"] : $this->getContext($context, "brands")));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 103
            echo "                                    <option  class=\"text-muted\"value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "brand", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "
                            </select>
                        </div>
                        <div class=\"form-group\">

                            <select name=\"model\" id=\"model\" class=\"model form-control\" onchange=\"selectModel()\" disabled>
                                <option value=\"0\" class=\"text-muted\">Model</option>
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <select name=\"year\" id=\"year\" class=\"year form-control\" onchange=\"undisableElement('load-colors')\" disabled>
                                <option value=\"0\" class=\"text-muted\">Year</option>
                            </select>
                        </div>

                        <input type=\"hidden\" value=\"pens\"/>
                        <input type=\"hidden\" value=\"balon\"/>
                        <input type=\"hidden\" value=\"tin\"/>

                        <button class=\"btn btn-primary\" disabled onclick=\"loadColors()\" id=\"load-colors\">Выбрать цвет</button>
                    </div>
                </div>
        </div>


        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\">Тип</a>
                </div>
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"#pens-info\">Карандаш</a></li>
                    <li><a href=\"#balon-info\">Аерозоль</a></li>
                    <li><a href=\"#tin-info\">Краска</a></li>
                </ul>
            </div>
        </nav>

        <div id=\"pens-info\" class=\"pens\">

            Lorem ipsum

        </div>
        <div id=\"balon-info\" class=\"pens\">

            Lorem ipsum

        </div>
        <div id=\"tin-info\" class=\"pens\">

            Lorem ipsum

        </div>

    <script src=\"/bundles/framework/js/common/slider.js\"></script>
";
        
        $__internal_0d7206965a32c4fccfd328baf85ea455de04af31b532ba8c9fec2057901a76f8->leave($__internal_0d7206965a32c4fccfd328baf85ea455de04af31b532ba8c9fec2057901a76f8_prof);

    }

    public function getTemplateName()
    {
        return "main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 105,  144 => 103,  140 => 102,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*         <div class="container-fluid slider" style="margin-left: -15px;margin-right: -15px;">*/
/*                 <div id="slider-arrow" class="slider-hidden">*/
/*                     <div class="slider-button"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></div>*/
/*                 </div>*/
/* */
/*                 <div id="slider-block1" class="col-md-4 slider-menu">*/
/*                     <div class="slider-button" model="pens">*/
/*                         <img src="/bundles/framework/images/main/pens.png" alt="Карандаш">*/
/*                         <div>Карандаш</div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="slider-block2" class="col-md-4 slider-menu">*/
/*                     <div class="slider-button" model="balon">*/
/*                         <img src="/bundles/framework/images/main/balon.png" alt="Аерозоль">*/
/*                         <div>Аерозоль</div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="slider-block3" class="col-md-4 slider-menu ">*/
/*                     <div class="slider-button" model="tin">*/
/*                         <img src="/bundles/framework/images/main/tin.png" alt="На разлив">*/
/*                         <div>На разлив</div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div id="slider-form" class="col-md-8 slider-hidden">*/
/* */
/*                     <div class="balon-info">*/
/*                         <div class="info">*/
/*                             <div class="volume">*/
/*                                 Объем - 400 мл*/
/*                             </div>*/
/*                             <div class="area">*/
/*                                 Площадь покрытия – 1,2 - 2 м2*/
/*                             </div>*/
/*                             <div class="popad">*/
/*                                 Попадание в цвет 95 - 100%*/
/*                             </div>*/
/*                             <div class="guarantee">*/
/*                                 Гарантия – 2 года*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="description">*/
/*                             - Баллон + наша краска. Изготовленная по заводскому цветовому коду*/
/*                             автомобиля – 300 грн.*/
/*                             - Баллон + наша краска. Подобранная нашим колористом по данной нам*/
/*                             детали Вашего автомобиля (подбор «по лючку бензобака») – 350 грн.*/
/*                             - Баллон + Ваша краска. 150 мл неразбавленной краски типа «металлик»*/
/*                             (базовая автоэмаль) или акриловой. - 150 грн.*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="pens-info">*/
/*                         <div class="info">*/
/*                             <div class="volume">*/
/*                                 Объем - 12 мл*/
/*                             </div>*/
/*                             <div class="area">*/
/*                                 Площадь покрытия – 30х30см*/
/*                             </div>*/
/*                             <div class="popad">*/
/*                                 Попадание в цвет 95 - 100%*/
/*                             </div>*/
/*                             <div class="guarantee">*/
/*                                 Гарантия – 2 года*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="description">*/
/*                             - Карандаш + лак + наша краска. Изготовленная по заводскому цветовому*/
/*                             коду автомобиля – 150 грн.*/
/*                             - Карандаш + лак + наша краска. Подобранная нашим колористом по данной*/
/*                             нам детали Вашего автомобиля (подбор «по лючку бензобака») – 200 грн.*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="tin-info">*/
/*                         <div class="info">*/
/*                            Logos*/
/*                         </div>*/
/* */
/*                         <div class="description">*/
/*                             - Готовая краска. Изготовленная по заводскому цветовому коду*/
/*                             автомобиля – 150 грн/100 мл.*/
/*                             - Подбор автоэмали. Подобранная нашим колористом по данной нам детали*/
/*                             Вашего автомобиля (подбор «по лючку бензобака») – 150 грн/100 мл +*/
/*                             подбор 100 грн.*/
/*                             В примечаниях нужно добавить "Заказ от 100 мл"*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div action="#" class="form-inline select-auto">*/
/*                         <div class="form-group">*/
/* */
/*                             <select name="brand" id="brand" class="brand form-control" onchange="selectBrand()">*/
/* */
/*                                 <option value="0" class="text-muted">Brand</option>*/
/*                                 {% for brand in brands %}*/
/*                                     <option  class="text-muted"value="{{brand.id}}">{{brand.brand}}</option>*/
/*                                 {% endfor %}*/
/* */
/*                             </select>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/* */
/*                             <select name="model" id="model" class="model form-control" onchange="selectModel()" disabled>*/
/*                                 <option value="0" class="text-muted">Model</option>*/
/*                             </select>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <select name="year" id="year" class="year form-control" onchange="undisableElement('load-colors')" disabled>*/
/*                                 <option value="0" class="text-muted">Year</option>*/
/*                             </select>*/
/*                         </div>*/
/* */
/*                         <input type="hidden" value="pens"/>*/
/*                         <input type="hidden" value="balon"/>*/
/*                         <input type="hidden" value="tin"/>*/
/* */
/*                         <button class="btn btn-primary" disabled onclick="loadColors()" id="load-colors">Выбрать цвет</button>*/
/*                     </div>*/
/*                 </div>*/
/*         </div>*/
/* */
/* */
/*         <nav class="navbar navbar-default">*/
/*             <div class="container-fluid">*/
/*                 <div class="navbar-header">*/
/*                     <a class="navbar-brand">Тип</a>*/
/*                 </div>*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li><a href="#pens-info">Карандаш</a></li>*/
/*                     <li><a href="#balon-info">Аерозоль</a></li>*/
/*                     <li><a href="#tin-info">Краска</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </nav>*/
/* */
/*         <div id="pens-info" class="pens">*/
/* */
/*             Lorem ipsum*/
/* */
/*         </div>*/
/*         <div id="balon-info" class="pens">*/
/* */
/*             Lorem ipsum*/
/* */
/*         </div>*/
/*         <div id="tin-info" class="pens">*/
/* */
/*             Lorem ipsum*/
/* */
/*         </div>*/
/* */
/*     <script src="/bundles/framework/js/common/slider.js"></script>*/
/* {% endblock %}*/
/* */
