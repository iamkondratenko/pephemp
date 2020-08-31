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

/* /Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/pages/product.htm */
class __TwigTemplate_c4820dbcdb028f8d80cea6ad023e7b40ce45b50d98632a0f8ec0e034112f753f extends \Twig\Template
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
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('title'        );
        // line 4
        echo "    ";
        echo '<!-- X_OCTOBER_DEFAULT_BLOCK_CONTENT -->';
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 6
        echo "
";
        // line 7
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["productDetails"] ?? null), "record", [], "any", false, false, false, 7);
        // line 8
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["productDetails"] ?? null), "displayColumn", [], "any", false, false, false, 8);
        // line 9
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["productDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 9);
        // line 10
        echo "
";
        // line 11
        if (($context["record"] ?? null)) {
            // line 12
            echo "
    ";
            // line 13
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('title'            );
            // line 14
            echo "    ";
            echo '<!-- X_OCTOBER_DEFAULT_BLOCK_CONTENT -->';
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, false, 14), "html", null, true);
            echo "
    ";
            // line 13
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
            // line 16
            echo "
       <div class=\"product-section\" data-productid=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\">

        <div class=\"product-section__text-block\">
            <div class=\"product-section__text-block-holder\">
                <div class=\"text-block__breadcrumbs\"><a href=\"/\">Головна</a> / <a href=\"/catalog\">Каталог</a> / ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, false, 21), "html", null, true);
            echo "</div>
                <div class=\"text-block__title-section\">
                    <h1 class=\"title-section__title\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</h1>
                    <p class=\"title-section__description\">
                        ";
            // line 25
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, false, 25);
            echo "
                    </p>
                </div>
                <div class=\"text-block__basket-section\">
                    <div class=\"basket-section__price\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "price", [], "any", false, false, false, 29), "html", null, true);
            echo "</div>
                    <div class=\"basket-section__basket-button\">
                        <button class=\"product-item__card-add\" id=\"pid";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\">
                            <span class=\"product-item__card-add__icon\"></span>Додати в кошик
                        </button>
                    </div>
                </div>
                <div class=\"text-block__info-section\">
                    <div class=\"info-section__product-info-block\">
                        <p class=\"product-info-block__description\">
                            ";
            // line 39
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "text", [], "any", false, false, false, 39);
            echo "
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"product-section__photo-block\">
            <div class=\"photo-block__product-holder\">
                <img src=\"";
            // line 47
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "picture", [], "any", false, false, false, 47));
            echo "\" alt=\"\" class=\"photo-block__product\">
            </div>
        </div>


    </div>



    ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "additional", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 57
                echo "
        <div class=\"section-adv\">
            <div class=\"section-adv__container\">

                <div class=\"section-adv__container__content\">
                    <div class=\"section-adv__container__text-block-right\">
                        <h2 class=\"section-adv__container__text-block__title\">";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "additional_title", [], "any", false, false, false, 63), "html", null, true);
                echo "
                        </h2>

                        <p class=\"section-adv__container__text-block__description\">
                            ";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["item"], "additional_text", [], "any", false, false, false, 67);
                echo "
                        </p>
                    </div>
                </div>


            </div>


        </div>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "




";
        } else {
            // line 85
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
        // line 87
        echo "

</div>

<style>
    .section-adv__container__text-block-right {
        margin: 0 auto;
    }

    .section-adv__container__text-block__title {
        text-align: center;
    }

    .section-adv {
        background-color: #1d1d1d;
         height: auto;
        min-height: 680px;
        padding-top: 60px;
    }

</style>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/pages/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 87,  191 => 85,  183 => 79,  165 => 67,  158 => 63,  150 => 57,  146 => 56,  134 => 47,  123 => 39,  112 => 31,  107 => 29,  100 => 25,  95 => 23,  90 => 21,  83 => 17,  80 => 16,  78 => 13,  71 => 14,  69 => 13,  66 => 12,  64 => 11,  61 => 10,  59 => 9,  57 => 8,  55 => 7,  52 => 6,  50 => 3,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"App\">

{% put title %}
    {% default %} {{ record.title }}
{% endput %}

{% set record = productDetails.record %}
{% set displayColumn = productDetails.displayColumn %}
{% set notFoundMessage = productDetails.notFoundMessage %}

{% if record %}

    {% put title %}
    {% default %} {{ record.title }}
    {% endput %}

       <div class=\"product-section\" data-productid=\"{{ record.id }}\">

        <div class=\"product-section__text-block\">
            <div class=\"product-section__text-block-holder\">
                <div class=\"text-block__breadcrumbs\"><a href=\"/\">Головна</a> / <a href=\"/catalog\">Каталог</a> / {{ record.title }}</div>
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



    {% for item in record.additional %}

        <div class=\"section-adv\">
            <div class=\"section-adv__container\">

                <div class=\"section-adv__container__content\">
                    <div class=\"section-adv__container__text-block-right\">
                        <h2 class=\"section-adv__container__text-block__title\">{{ item.additional_title }}
                        </h2>

                        <p class=\"section-adv__container__text-block__description\">
                            {{ item.additional_text|raw }}
                        </p>
                    </div>
                </div>


            </div>


        </div>

    {% endfor %}





{% else %}
    {{ notFoundMessage }}
{% endif %}


</div>

<style>
    .section-adv__container__text-block-right {
        margin: 0 auto;
    }

    .section-adv__container__text-block__title {
        text-align: center;
    }

    .section-adv {
        background-color: #1d1d1d;
         height: auto;
        min-height: 680px;
        padding-top: 60px;
    }

</style>", "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/pages/product.htm", "");
    }
}
