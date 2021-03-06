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

/* /Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/products/catalog.htm */
class __TwigTemplate_1a2a8f9bb363e43a7ffefc58165c9d2105beeece8f92b4d0356eaaf09bc4be76 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('title'        );
        // line 2
        echo "    ";
        echo '<!-- X_OCTOBER_DEFAULT_BLOCK_CONTENT -->';
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 2), "title", [], "any", false, false, false, 2), "html", null, true);
        echo "
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 4
        echo "
<div class=\"catalog --container ancore\" id=\"catalog-ancore\">
            <div class=\"catalog__header\">
                <h2 class=\"catalog__title\">Каталог</h2>
                <a href=\"/storage/app/media/Прайс/price.pdf\" class=\"catalog__header-price\" target=\"blanc\">Получить прайс</a>
            </div>

            <div class=\"catalog__products-section\">
                <aside class=\"catalog-homepage__filter\">
                    <div class=\"catalog-homepage__filter__title\">категории:</div>
                    <div class=\"catalog-homepage__filter-items\">
                        <a href=\"#catalog-all\" class=\"catalog-homepage__filter-item --filter-item-active\" data-category=\"all\">Всi</a>

                        ";
        // line 17
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["categoryList"] ?? null), "records", [], "any", false, false, false, 17);
        // line 18
        echo "                        ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["categoryList"] ?? null), "displayColumn", [], "any", false, false, false, 18);
        // line 19
        echo "                        ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["categoryList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 19);
        // line 20
        echo "                        ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["categoryList"] ?? null), "detailsPage", [], "any", false, false, false, 20);
        // line 21
        echo "                        ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["categoryList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 21);
        // line 22
        echo "                        ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["categoryList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 22);
        // line 23
        echo "

                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 26
            echo "
                                    ";
            // line 28
            echo "                                    ";
            ob_start();
            // line 29
            echo "                                        <a href=\"#catalog-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 29), "html", null, true);
            echo "\" class=\"catalog-homepage__filter-item\" data-category=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 29), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "category_title", [], "any", false, false, false, 29), "html", null, true);
            echo "</a>
                                    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 31
            echo "
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                                <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
                    </div>
                </aside>


                <div class=\"catalog__products\">



                    ";
        // line 44
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "records", [], "any", false, false, false, 44);
        // line 45
        echo "                    ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "displayColumn", [], "any", false, false, false, 45);
        // line 46
        echo "                    ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 46);
        // line 47
        echo "                    ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "detailsPage", [], "any", false, false, false, 47);
        // line 48
        echo "                    ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 48);
        // line 49
        echo "                    ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 49);
        // line 50
        echo "
                    <div class=\"catalog__product-items\">


                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 55
            echo "                            <div class=\"catalog__product-item\" data-category=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "category", [], "any", false, false, false, 55), "html", null, true);
            echo "\" data-productid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "\">
                                ";
            // line 57
            echo "                                ";
            ob_start();
            // line 58
            echo "                                    <a href=\"/product/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 58), "html", null, true);
            echo "\" class=\"product-item__link\">
                                                    <div class=\"product-item__image-holder\">
                                                        <img src=\"";
            // line 60
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "picture", [], "any", false, false, false, 60));
            echo "\" alt=\"\" class=\"product-item__image-item\">
                                                    </div>
                                                    <div class=\"product-item__info\">
                                                        <h3 class=\"product-item__info-title\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 63), "html", null, true);
            echo "</h3>
                                                        <p class=\"product-item__info-description\">
                                                            ";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 65);
            echo "
                                                        </p>




                                                    </div>
                                                </a>
                                                <div class=\"product-item__cart\">
                                                    <span class=\"product-item__cart-price\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "price", [], "any", false, false, false, 74), "html", null, true);
            echo "</span>
                                                    <button class=\"product-item__card-add\" id=\"pid";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 75), "html", null, true);
            echo "\">
                                                            <span class=\"product-item__card-add__icon\">

                                                            </span>Додати в кошик
                                                    </button>
                                                </div>
                                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 82
            echo "                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            echo "                            <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "


    </div>
                    </div>
                </div>




            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/products/catalog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 86,  218 => 84,  212 => 82,  202 => 75,  198 => 74,  186 => 65,  181 => 63,  175 => 60,  169 => 58,  166 => 57,  159 => 55,  154 => 54,  148 => 50,  145 => 49,  142 => 48,  139 => 47,  136 => 46,  133 => 45,  131 => 44,  120 => 35,  111 => 33,  105 => 31,  95 => 29,  92 => 28,  89 => 26,  84 => 25,  80 => 23,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  63 => 17,  48 => 4,  46 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put title %}
    {% default %} {{ this.page.title }}
{% endput %}

<div class=\"catalog --container ancore\" id=\"catalog-ancore\">
            <div class=\"catalog__header\">
                <h2 class=\"catalog__title\">Каталог</h2>
                <a href=\"/storage/app/media/Прайс/price.pdf\" class=\"catalog__header-price\" target=\"blanc\">Получить прайс</a>
            </div>

            <div class=\"catalog__products-section\">
                <aside class=\"catalog-homepage__filter\">
                    <div class=\"catalog-homepage__filter__title\">категории:</div>
                    <div class=\"catalog-homepage__filter-items\">
                        <a href=\"#catalog-all\" class=\"catalog-homepage__filter-item --filter-item-active\" data-category=\"all\">Всi</a>

                        {% set records = categoryList.records %}
                        {% set displayColumn = categoryList.displayColumn %}
                        {% set noRecordsMessage = categoryList.noRecordsMessage %}
                        {% set detailsPage = categoryList.detailsPage %}
                        {% set detailsKeyColumn = categoryList.detailsKeyColumn %}
                        {% set detailsUrlParameter = categoryList.detailsUrlParameter %}


                            {% for record in records %}

                                    {# Use spaceless tag to remove spaces inside the A tag. #}
                                    {% spaceless %}
                                        <a href=\"#catalog-{{ record.slug }}\" class=\"catalog-homepage__filter-item\" data-category=\"{{ record.slug }}\">{{ record.category_title }}</a>
                                    {% endspaceless %}

                            {% else %}
                                <li class=\"no-data\">{{ noRecordsMessage }}</li>
                            {% endfor %}

                    </div>
                </aside>


                <div class=\"catalog__products\">



                    {% set records = productList.records %}
                    {% set displayColumn = productList.displayColumn %}
                    {% set noRecordsMessage = productList.noRecordsMessage %}
                    {% set detailsPage = productList.detailsPage %}
                    {% set detailsKeyColumn = productList.detailsKeyColumn %}
                    {% set detailsUrlParameter = productList.detailsUrlParameter %}

                    <div class=\"catalog__product-items\">


                        {% for record in records %}
                            <div class=\"catalog__product-item\" data-category=\"{{ record.category }}\" data-productid=\"{{ record.id }}\">
                                {# Use spaceless tag to remove spaces inside the A tag. #}
                                {% spaceless %}
                                    <a href=\"/product/{{ record.slug }}\" class=\"product-item__link\">
                                                    <div class=\"product-item__image-holder\">
                                                        <img src=\"{{ record.picture|media }}\" alt=\"\" class=\"product-item__image-item\">
                                                    </div>
                                                    <div class=\"product-item__info\">
                                                        <h3 class=\"product-item__info-title\">{{ record.title }}</h3>
                                                        <p class=\"product-item__info-description\">
                                                            {{ record.description|raw }}
                                                        </p>




                                                    </div>
                                                </a>
                                                <div class=\"product-item__cart\">
                                                    <span class=\"product-item__cart-price\">{{ record.price }}</span>
                                                    <button class=\"product-item__card-add\" id=\"pid{{ record.id }}\">
                                                            <span class=\"product-item__card-add__icon\">

                                                            </span>Додати в кошик
                                                    </button>
                                                </div>
                                {% endspaceless %}
                            </div>
                        {% else %}
                            <li class=\"no-data\">{{ noRecordsMessage }}</li>
                        {% endfor %}



    </div>
                    </div>
                </div>




            </div>
        </div>", "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/products/catalog.htm", "");
    }
}
