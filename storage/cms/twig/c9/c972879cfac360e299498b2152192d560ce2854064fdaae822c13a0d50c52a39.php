<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Users/alexkondratenko/git/pep-hemp/themes/demo/pages/product.htm */
class __TwigTemplate_b801907151ff58422277dd4effd55a149d8278c1f2e6bb174b4a01ce954acea3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"App\">
";
        // line 2
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["productDetails"] ?? null), "record", [], "any", false, false, false, 2);
        // line 3
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["productDetails"] ?? null), "displayColumn", [], "any", false, false, false, 3);
        // line 4
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["productDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 4);
        // line 5
        echo "
";
        // line 6
        if (($context["record"] ?? null)) {
            // line 7
            echo "   
       <div class=\"product-section\" data-productid=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
            echo "\">

        <div class=\"product-section__text-block\">
            <div class=\"product-section__text-block-holder\">
                <div class=\"text-block__breadcrumbs\">Головна / Каталог / Протеин</div>
                <div class=\"text-block__title-section\">
                    <h1 class=\"title-section__title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, false, 14), "html", null, true);
            echo "</h1>
                    <p class=\"title-section__description\">
                        ";
            // line 16
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, false, 16);
            echo "
                    </p>
                </div>
                <div class=\"text-block__basket-section\">
                    <div class=\"basket-section__price\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "price", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
                    <div class=\"basket-section__basket-button\">
                        <button class=\"product-item__card-add\" id=\"pid";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
                            <span class=\"product-item__card-add__icon\"></span>Додати в кошик
                        </button>
                    </div>
                </div>
                <div class=\"text-block__info-section\">
                    <div class=\"info-section__product-info-block\">
                        <p class=\"product-info-block__description\">
                            ";
            // line 30
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "text", [], "any", false, false, false, 30);
            echo "
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"product-section__photo-block\">
            <div class=\"photo-block__product-holder\">
                <img src=\"";
            // line 38
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "picture", [], "any", false, false, false, 38));
            echo "\" alt=\"\" class=\"photo-block__product\">
            </div>
        </div>


    </div>

    ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "first_additional_pic", [], "any", false, false, false, 45)) {
                // line 46
                echo "    <div class=\"section-adv\">
        <div class=\"section-adv__container\">

            <div class=\"section-adv__container__content\">
                <div class=\"section-adv__container__picture\">
                    <img class=\"section-adv__container__img\" src=\"";
                // line 51
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "first_additional_pic", [], "any", false, false, false, 51));
                echo "\"\">
                </div>
                <div class=\"section-adv__container__text-block-right\">
                    <h2 class=\"section-adv__container__text-block__title\">";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "first_additional_title", [], "any", false, false, false, 54), "html", null, true);
                echo "</h2>

                    <p class=\"section-adv__container__text-block__description\">
                        ";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "first_additional_text", [], "any", false, false, false, 57), "html", null, true);
                echo "
                    </p>
                </div>
            </div>

            <a href=\"#\" class=\"button-down\">


                <svg width=\"623px\" height=\"52px\" viewBox=\"0 0 623 52\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                    <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                    <title>Combined Shape</title>
                    <desc>Created with Sketch.</desc>
                    <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                        <g id=\"Desktop-HD\" transform=\"translate(-410.000000, -660.000000)\">
                            <g id=\"Group-3\" transform=\"translate(188.000000, 660.000000)\">
                                <g id=\"Group-7\" transform=\"translate(222.000000, 0.000000)\">
                                    <g id=\"Group-8\">
                                        <g id=\"Group-9\" transform=\"translate(0.000000, 0.552553)\">
                                            <path d=\"M310,0 C467,0 466,51.4474474 624,51.4474474 L620,51.434 L620,51.4474474 L0,51.4474474 L0.00285518841,51.4300088 C153.017866,50.3556669 154.674803,0 310,0 Z\" id=\"Combined-Shape\" fill=\"#252525\"></path>
                                            <path d=\"M315.674183,25.6670473 L306.584428,16.766957 C306.374193,16.5609425 306.093548,16.4474474 305.794304,16.4474474 C305.495059,16.4474474 305.214414,16.5609425 305.004179,16.766957 L304.334782,17.4222363 C303.8992,17.8492247 303.8992,18.5432028 304.334782,18.9695408 L311.967671,26.4433011 L304.326313,33.9253541 C304.116078,34.1313687 304,34.4060006 304,34.6988438 C304,34.9920121 304.116078,35.266644 304.326313,35.4728212 L304.99571,36.1279379 C305.206111,36.3339524 305.48659,36.4474474 305.785834,36.4474474 C306.085079,36.4474474 306.365724,36.3339524 306.575959,36.1279379 L315.674183,27.2197176 C315.884916,27.0130526 316.000661,26.7371199 316,26.4437889 C316.000661,26.1493198 315.884916,25.8735497 315.674183,25.6670473 Z\" id=\"Path\" fill=\"#FFFFFF\" fill-rule=\"nonzero\" transform=\"translate(310.000000, 26.447447) rotate(-270.000000) translate(-310.000000, -26.447447) \"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </div>

    </div>
    ";
            }
            // line 89
            echo "
    ";
            // line 90
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "second_additional_pic", [], "any", false, false, false, 90)) {
                // line 91
                echo "    <div class=\"section-adv --odd\">  
        <div class=\"section-adv__container\">
            <div class=\"section-adv__container__content\">
                <div class=\"section-adv__container__text-block-left\">
                    <h2 class=\"section-adv__container__text-block__title\">";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "second_additional_title", [], "any", false, false, false, 95), "html", null, true);
                echo "</h2>

                    <p class=\"section-adv__container__text-block__description\">
                        ";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "second_additional_text", [], "any", false, false, false, 98), "html", null, true);
                echo "
                    </p>
                </div>
                <div class=\"section-adv__container__picture\">
                    <img class=\"section-adv__container__img\" src=\"";
                // line 102
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "second_additional_pic", [], "any", false, false, false, 102));
                echo "\">
                </div>
            </div>
            <a href=\"#\" class=\"button-down\">


                <svg width=\"623px\" height=\"52px\" viewBox=\"0 0 623 52\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                    <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                    <title>Combined Shape</title>
                    <desc>Created with Sketch.</desc>
                    <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                        <g id=\"Desktop-HD\" transform=\"translate(-410.000000, -660.000000)\">
                            <g id=\"Group-3\" transform=\"translate(188.000000, 660.000000)\">
                                <g id=\"Group-7\" transform=\"translate(222.000000, 0.000000)\">
                                    <g id=\"Group-8\">
                                        <g id=\"Group-9\" transform=\"translate(0.000000, 0.552553)\">
                                            <path d=\"M310,0 C467,0 466,51.4474474 624,51.4474474 L620,51.434 L620,51.4474474 L0,51.4474474 L0.00285518841,51.4300088 C153.017866,50.3556669 154.674803,0 310,0 Z\" id=\"Combined-Shape\" fill=\"#383838\"></path>
                                            <path d=\"M315.674183,25.6670473 L306.584428,16.766957 C306.374193,16.5609425 306.093548,16.4474474 305.794304,16.4474474 C305.495059,16.4474474 305.214414,16.5609425 305.004179,16.766957 L304.334782,17.4222363 C303.8992,17.8492247 303.8992,18.5432028 304.334782,18.9695408 L311.967671,26.4433011 L304.326313,33.9253541 C304.116078,34.1313687 304,34.4060006 304,34.6988438 C304,34.9920121 304.116078,35.266644 304.326313,35.4728212 L304.99571,36.1279379 C305.206111,36.3339524 305.48659,36.4474474 305.785834,36.4474474 C306.085079,36.4474474 306.365724,36.3339524 306.575959,36.1279379 L315.674183,27.2197176 C315.884916,27.0130526 316.000661,26.7371199 316,26.4437889 C316.000661,26.1493198 315.884916,25.8735497 315.674183,25.6670473 Z\" id=\"Path\" fill=\"#FFFFFF\" fill-rule=\"nonzero\" transform=\"translate(310.000000, 26.447447) rotate(-270.000000) translate(-310.000000, -26.447447) \"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </div> 
    ";
            }
            // line 131
            echo "
    ";
            // line 132
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "third_additional_pic", [], "any", false, false, false, 132)) {
                // line 133
                echo "    <div class=\"section-adv\">
        <div class=\"section-adv__container\">

            <div class=\"section-adv__container__content\">
                <div class=\"section-adv__container__picture\">
                    <img class=\"section-adv__container__img\" src=\"";
                // line 138
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "third_additional_pic", [], "any", false, false, false, 138));
                echo "\">
                </div>
                <div class=\"section-adv__container__text-block-right\">
                    <h2 class=\"section-adv__container__text-block__title\">";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "third_additional_title", [], "any", false, false, false, 141), "html", null, true);
                echo "
                    </h2>

                    <p class=\"section-adv__container__text-block__description\">
                        ";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "third_additional_text", [], "any", false, false, false, 145), "html", null, true);
                echo "
                    </p>
                </div>
            </div>


        </div>
        ";
            }
            // line 153
            echo "    

    </div>
    
        
    
   
";
        } else {
            // line 161
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
        // line 163
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/pep-hemp/themes/demo/pages/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 163,  270 => 161,  260 => 153,  249 => 145,  242 => 141,  236 => 138,  229 => 133,  227 => 132,  224 => 131,  192 => 102,  185 => 98,  179 => 95,  173 => 91,  171 => 90,  168 => 89,  133 => 57,  127 => 54,  121 => 51,  114 => 46,  112 => 45,  102 => 38,  91 => 30,  80 => 22,  75 => 20,  68 => 16,  63 => 14,  54 => 8,  51 => 7,  49 => 6,  46 => 5,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"App\">
{% set record = productDetails.record %}
{% set displayColumn = productDetails.displayColumn %}
{% set notFoundMessage = productDetails.notFoundMessage %}

{% if record %}
   
       <div class=\"product-section\" data-productid=\"{{ record.id }}\">

        <div class=\"product-section__text-block\">
            <div class=\"product-section__text-block-holder\">
                <div class=\"text-block__breadcrumbs\">Головна / Каталог / Протеин</div>
                <div class=\"text-block__title-section\">
                    <h1 class=\"title-section__title\">{{ record.title }}</h1>
                    <p class=\"title-section__description\">
                        {{ record.description|raw }}
                    </p>
                </div>
                <div class=\"text-block__basket-section\">
                    <div class=\"basket-section__price\">{{ record.price }}</div>
                    <div class=\"basket-section__basket-button\">
                        <button class=\"product-item__card-add\" id=\"pid{{ record.id }}\">
                            <span class=\"product-item__card-add__icon\"></span>Додати в кошик
                        </button>
                    </div>
                </div>
                <div class=\"text-block__info-section\">
                    <div class=\"info-section__product-info-block\">
                        <p class=\"product-info-block__description\">
                            {{ record.text|raw }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"product-section__photo-block\">
            <div class=\"photo-block__product-holder\">
                <img src=\"{{ record.picture|media }}\" alt=\"\" class=\"photo-block__product\">
            </div>
        </div>


    </div>

    {% if record.first_additional_pic %}
    <div class=\"section-adv\">
        <div class=\"section-adv__container\">

            <div class=\"section-adv__container__content\">
                <div class=\"section-adv__container__picture\">
                    <img class=\"section-adv__container__img\" src=\"{{ record.first_additional_pic|media }}\"\">
                </div>
                <div class=\"section-adv__container__text-block-right\">
                    <h2 class=\"section-adv__container__text-block__title\">{{ record.first_additional_title }}</h2>

                    <p class=\"section-adv__container__text-block__description\">
                        {{ record.first_additional_text }}
                    </p>
                </div>
            </div>

            <a href=\"#\" class=\"button-down\">


                <svg width=\"623px\" height=\"52px\" viewBox=\"0 0 623 52\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                    <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                    <title>Combined Shape</title>
                    <desc>Created with Sketch.</desc>
                    <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                        <g id=\"Desktop-HD\" transform=\"translate(-410.000000, -660.000000)\">
                            <g id=\"Group-3\" transform=\"translate(188.000000, 660.000000)\">
                                <g id=\"Group-7\" transform=\"translate(222.000000, 0.000000)\">
                                    <g id=\"Group-8\">
                                        <g id=\"Group-9\" transform=\"translate(0.000000, 0.552553)\">
                                            <path d=\"M310,0 C467,0 466,51.4474474 624,51.4474474 L620,51.434 L620,51.4474474 L0,51.4474474 L0.00285518841,51.4300088 C153.017866,50.3556669 154.674803,0 310,0 Z\" id=\"Combined-Shape\" fill=\"#252525\"></path>
                                            <path d=\"M315.674183,25.6670473 L306.584428,16.766957 C306.374193,16.5609425 306.093548,16.4474474 305.794304,16.4474474 C305.495059,16.4474474 305.214414,16.5609425 305.004179,16.766957 L304.334782,17.4222363 C303.8992,17.8492247 303.8992,18.5432028 304.334782,18.9695408 L311.967671,26.4433011 L304.326313,33.9253541 C304.116078,34.1313687 304,34.4060006 304,34.6988438 C304,34.9920121 304.116078,35.266644 304.326313,35.4728212 L304.99571,36.1279379 C305.206111,36.3339524 305.48659,36.4474474 305.785834,36.4474474 C306.085079,36.4474474 306.365724,36.3339524 306.575959,36.1279379 L315.674183,27.2197176 C315.884916,27.0130526 316.000661,26.7371199 316,26.4437889 C316.000661,26.1493198 315.884916,25.8735497 315.674183,25.6670473 Z\" id=\"Path\" fill=\"#FFFFFF\" fill-rule=\"nonzero\" transform=\"translate(310.000000, 26.447447) rotate(-270.000000) translate(-310.000000, -26.447447) \"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </div>

    </div>
    {% endif %}

    {% if record.second_additional_pic %}
    <div class=\"section-adv --odd\">  
        <div class=\"section-adv__container\">
            <div class=\"section-adv__container__content\">
                <div class=\"section-adv__container__text-block-left\">
                    <h2 class=\"section-adv__container__text-block__title\">{{ record.second_additional_title }}</h2>

                    <p class=\"section-adv__container__text-block__description\">
                        {{ record.second_additional_text }}
                    </p>
                </div>
                <div class=\"section-adv__container__picture\">
                    <img class=\"section-adv__container__img\" src=\"{{ record.second_additional_pic|media }}\">
                </div>
            </div>
            <a href=\"#\" class=\"button-down\">


                <svg width=\"623px\" height=\"52px\" viewBox=\"0 0 623 52\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                    <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                    <title>Combined Shape</title>
                    <desc>Created with Sketch.</desc>
                    <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                        <g id=\"Desktop-HD\" transform=\"translate(-410.000000, -660.000000)\">
                            <g id=\"Group-3\" transform=\"translate(188.000000, 660.000000)\">
                                <g id=\"Group-7\" transform=\"translate(222.000000, 0.000000)\">
                                    <g id=\"Group-8\">
                                        <g id=\"Group-9\" transform=\"translate(0.000000, 0.552553)\">
                                            <path d=\"M310,0 C467,0 466,51.4474474 624,51.4474474 L620,51.434 L620,51.4474474 L0,51.4474474 L0.00285518841,51.4300088 C153.017866,50.3556669 154.674803,0 310,0 Z\" id=\"Combined-Shape\" fill=\"#383838\"></path>
                                            <path d=\"M315.674183,25.6670473 L306.584428,16.766957 C306.374193,16.5609425 306.093548,16.4474474 305.794304,16.4474474 C305.495059,16.4474474 305.214414,16.5609425 305.004179,16.766957 L304.334782,17.4222363 C303.8992,17.8492247 303.8992,18.5432028 304.334782,18.9695408 L311.967671,26.4433011 L304.326313,33.9253541 C304.116078,34.1313687 304,34.4060006 304,34.6988438 C304,34.9920121 304.116078,35.266644 304.326313,35.4728212 L304.99571,36.1279379 C305.206111,36.3339524 305.48659,36.4474474 305.785834,36.4474474 C306.085079,36.4474474 306.365724,36.3339524 306.575959,36.1279379 L315.674183,27.2197176 C315.884916,27.0130526 316.000661,26.7371199 316,26.4437889 C316.000661,26.1493198 315.884916,25.8735497 315.674183,25.6670473 Z\" id=\"Path\" fill=\"#FFFFFF\" fill-rule=\"nonzero\" transform=\"translate(310.000000, 26.447447) rotate(-270.000000) translate(-310.000000, -26.447447) \"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </div> 
    {% endif %}

    {% if record.third_additional_pic %}
    <div class=\"section-adv\">
        <div class=\"section-adv__container\">

            <div class=\"section-adv__container__content\">
                <div class=\"section-adv__container__picture\">
                    <img class=\"section-adv__container__img\" src=\"{{ record.third_additional_pic|media }}\">
                </div>
                <div class=\"section-adv__container__text-block-right\">
                    <h2 class=\"section-adv__container__text-block__title\">{{ record.third_additional_title }}
                    </h2>

                    <p class=\"section-adv__container__text-block__description\">
                        {{ record.third_additional_text }}
                    </p>
                </div>
            </div>


        </div>
        {% endif %}
    

    </div>
    
        
    
   
{% else %}
    {{ notFoundMessage }}
{% endif %}


</div>", "/Users/alexkondratenko/git/pep-hemp/themes/demo/pages/product.htm", "");
    }
}
