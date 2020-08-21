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

/* /Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/site/bullets.htm */
class __TwigTemplate_aeab159a50d0624edff36fe2ab9c0cf171db27a53ee1ac21a502ba1708a0a68a extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["bullets"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["bullets"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["bullets"] ?? null), "notFoundMessage", [], "any", false, false, false, 3);
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "
";
            // line 7
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "adv_picture_1", [], "any", false, false, false, 7)) {
                // line 8
                echo "<div class=\"section-adv\" id=\"second-main-block\">
    <div class=\"section-adv__container\">

        <div class=\"section-adv__container__content\">
            <div class=\"section-adv__container__picture\">
                <img class=\"section-adv__container__img\" src=\"";
                // line 13
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "adv_picture_1", [], "any", false, false, false, 13));
                echo "\">
            </div>
            <div class=\"section-adv__container__text-block-right\">
                <h2 class=\"section-adv__container__text-block__title\">";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "adv_title_1", [], "any", false, false, false, 16), "html", null, true);
                echo "</h2>

                <p class=\"section-adv__container__text-block__description\">
                    ";
                // line 19
                echo call_user_func_array($this->env->getFilter('md')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "adv_text_1", [], "any", false, false, false, 19)]);
                echo "
                </p>
            </div>
        </div>

        <a href=\"#third-main-block\" class=\"button-down\">


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
            // line 51
            echo "
";
            // line 52
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "adv_picture_2", [], "any", false, false, false, 52)) {
                // line 53
                echo "<div class=\"section-adv --odd\" id=\"third-main-block\">
    <div class=\"section-adv__container\">
        <div class=\"section-adv__container__content\">
            <div class=\"section-adv__container__text-block-left\">
                <h2 class=\"section-adv__container__text-block__title\">";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "adv_title_2", [], "any", false, false, false, 57), "html", null, true);
                echo "</h2>

                <p class=\"section-adv__container__text-block__description\">
                  ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "adv_text_2", [], "any", false, false, false, 60), "html", null, true);
                echo "
                </p>
            </div>
            <div class=\"section-adv__container__picture\">
                <img class=\"section-adv__container__img\" src=\"";
                // line 64
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "adv_picture_2", [], "any", false, false, false, 64));
                echo "\">
            </div>
        </div>
        <a href=\"#last-main-block\" class=\"button-down\">


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
                                        <path d=\"M310,0 C467,0 466,51.4474474 624,51.4474474 L620,51.434 L620,51.4474474 L0,51.4474474 L0.00285518841,51.4300088 C153.017866,50.3556669 154.674803,0 310,0 Z\" id=\"Combined-Shape\" fill=\"#1d1d1d\"></path>
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
            // line 93
            echo "
";
            // line 94
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "adv_picture_3", [], "any", false, false, false, 94)) {
                // line 95
                echo "<div class=\"section-adv\" id=\"last-main-block\">
    <div class=\"section-adv__container\">
        <div class=\"section-adv__container__content\">
            <div class=\"section-adv__container__picture\">
                <img class=\"section-adv__container__img\" src=\"";
                // line 99
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "adv_picture_3", [], "any", false, false, false, 99));
                echo "\">
            </div>
            <div class=\"section-adv__container__text-block-right\">
                <h2 class=\"section-adv__container__text-block__title\">";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "adv_title_3", [], "any", false, false, false, 102), "html", null, true);
                echo "</h2>

                <p class=\"section-adv__container__text-block__description\">
                    ";
                // line 105
                echo call_user_func_array($this->env->getFilter('md')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "adv_text_3", [], "any", false, false, false, 105)]);
                echo "
                </p>
            </div>

            <a href=\"#catalog-all\" class=\"button-down\">


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
                                            <path d=\"M310,0 C467,0 466,51.4474474 624,51.4474474 L620,51.434 L620,51.4474474 L0,51.4474474 L0.00285518841,51.4300088 C153.017866,50.3556669 154.674803,0 310,0 Z\" id=\"Combined-Shape\" fill=\"#f8eee3\"></path>
                                            <path d=\"M315.674183,25.6670473 L306.584428,16.766957 C306.374193,16.5609425 306.093548,16.4474474 305.794304,16.4474474 C305.495059,16.4474474 305.214414,16.5609425 305.004179,16.766957 L304.334782,17.4222363 C303.8992,17.8492247 303.8992,18.5432028 304.334782,18.9695408 L311.967671,26.4433011 L304.326313,33.9253541 C304.116078,34.1313687 304,34.4060006 304,34.6988438 C304,34.9920121 304.116078,35.266644 304.326313,35.4728212 L304.99571,36.1279379 C305.206111,36.3339524 305.48659,36.4474474 305.785834,36.4474474 C306.085079,36.4474474 306.365724,36.3339524 306.575959,36.1279379 L315.674183,27.2197176 C315.884916,27.0130526 316.000661,26.7371199 316,26.4437889 C316.000661,26.1493198 315.884916,25.8735497 315.674183,25.6670473 Z\" id=\"Path\" fill=\"#383838\" fill-rule=\"nonzero\" transform=\"translate(310.000000, 26.447447) rotate(-270.000000) translate(-310.000000, -26.447447) \"></path>
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
</div>
";
            }
            // line 137
            echo "

";
        } else {
            // line 140
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/site/bullets.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 140,  221 => 137,  186 => 105,  180 => 102,  174 => 99,  168 => 95,  166 => 94,  163 => 93,  131 => 64,  124 => 60,  118 => 57,  112 => 53,  110 => 52,  107 => 51,  72 => 19,  66 => 16,  60 => 13,  53 => 8,  51 => 7,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = bullets.record %}
{% set displayColumn = bullets.displayColumn %}
{% set notFoundMessage = bullets.notFoundMessage %}

{% if record %}

{% if record.adv_picture_1 %}
<div class=\"section-adv\" id=\"second-main-block\">
    <div class=\"section-adv__container\">

        <div class=\"section-adv__container__content\">
            <div class=\"section-adv__container__picture\">
                <img class=\"section-adv__container__img\" src=\"{{ record.adv_picture_1|media }}\">
            </div>
            <div class=\"section-adv__container__text-block-right\">
                <h2 class=\"section-adv__container__text-block__title\">{{ record.adv_title_1 }}</h2>

                <p class=\"section-adv__container__text-block__description\">
                    {{ record.adv_text_1|md }}
                </p>
            </div>
        </div>

        <a href=\"#third-main-block\" class=\"button-down\">


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

{% if record.adv_picture_2 %}
<div class=\"section-adv --odd\" id=\"third-main-block\">
    <div class=\"section-adv__container\">
        <div class=\"section-adv__container__content\">
            <div class=\"section-adv__container__text-block-left\">
                <h2 class=\"section-adv__container__text-block__title\">{{ record.adv_title_2 }}</h2>

                <p class=\"section-adv__container__text-block__description\">
                  {{ record.adv_text_2 }}
                </p>
            </div>
            <div class=\"section-adv__container__picture\">
                <img class=\"section-adv__container__img\" src=\"{{ record.adv_picture_2|media }}\">
            </div>
        </div>
        <a href=\"#last-main-block\" class=\"button-down\">


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
                                        <path d=\"M310,0 C467,0 466,51.4474474 624,51.4474474 L620,51.434 L620,51.4474474 L0,51.4474474 L0.00285518841,51.4300088 C153.017866,50.3556669 154.674803,0 310,0 Z\" id=\"Combined-Shape\" fill=\"#1d1d1d\"></path>
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

{% if record.adv_picture_3 %}
<div class=\"section-adv\" id=\"last-main-block\">
    <div class=\"section-adv__container\">
        <div class=\"section-adv__container__content\">
            <div class=\"section-adv__container__picture\">
                <img class=\"section-adv__container__img\" src=\"{{ record.adv_picture_3|media }}\">
            </div>
            <div class=\"section-adv__container__text-block-right\">
                <h2 class=\"section-adv__container__text-block__title\">{{ record.adv_title_3 }}</h2>

                <p class=\"section-adv__container__text-block__description\">
                    {{ record.adv_text_3|md }}
                </p>
            </div>

            <a href=\"#catalog-all\" class=\"button-down\">


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
                                            <path d=\"M310,0 C467,0 466,51.4474474 624,51.4474474 L620,51.434 L620,51.4474474 L0,51.4474474 L0.00285518841,51.4300088 C153.017866,50.3556669 154.674803,0 310,0 Z\" id=\"Combined-Shape\" fill=\"#f8eee3\"></path>
                                            <path d=\"M315.674183,25.6670473 L306.584428,16.766957 C306.374193,16.5609425 306.093548,16.4474474 305.794304,16.4474474 C305.495059,16.4474474 305.214414,16.5609425 305.004179,16.766957 L304.334782,17.4222363 C303.8992,17.8492247 303.8992,18.5432028 304.334782,18.9695408 L311.967671,26.4433011 L304.326313,33.9253541 C304.116078,34.1313687 304,34.4060006 304,34.6988438 C304,34.9920121 304.116078,35.266644 304.326313,35.4728212 L304.99571,36.1279379 C305.206111,36.3339524 305.48659,36.4474474 305.785834,36.4474474 C306.085079,36.4474474 306.365724,36.3339524 306.575959,36.1279379 L315.674183,27.2197176 C315.884916,27.0130526 316.000661,26.7371199 316,26.4437889 C316.000661,26.1493198 315.884916,25.8735497 315.674183,25.6670473 Z\" id=\"Path\" fill=\"#383838\" fill-rule=\"nonzero\" transform=\"translate(310.000000, 26.447447) rotate(-270.000000) translate(-310.000000, -26.447447) \"></path>
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
</div>
{% endif %}


{% else %}
    {{ notFoundMessage }}
{% endif %}", "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/site/bullets.htm", "");
    }
}
