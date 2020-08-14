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

/* /Users/alexkondratenko/git/pep-hemp/themes/demo/partials/products/catalog.htm */
class __TwigTemplate_003331ba88bf3b611b957ac2438ef355e2b0ac640a7bed1460a0a502155ee70d extends \Twig\Template
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
        echo "<div class=\"catalog --container ancore\" id=\"catalog-ancore\">
            <div class=\"catalog__header\">
                <h2 class=\"catalog__title\">Каталог</h2>
                <a href=\"#\" class=\"catalog__header-price\">Получить прайс</a>
            </div>

            <div class=\"catalog__products-section\">
                <aside class=\"catalog-homepage__filter\">
                    <div class=\"catalog-homepage__filter__title\">категории:</div>
                    <div class=\"catalog-homepage__filter-items\">
                        <a href=\"#catalog-all\" class=\"catalog-homepage__filter-item --filter-item-active\" data-category=\"all\">Всi</a>

                        ";
        // line 13
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["categoryList"] ?? null), "records", [], "any", false, false, false, 13);
        // line 14
        echo "                        ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["categoryList"] ?? null), "displayColumn", [], "any", false, false, false, 14);
        // line 15
        echo "                        ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["categoryList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 15);
        // line 16
        echo "                        ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["categoryList"] ?? null), "detailsPage", [], "any", false, false, false, 16);
        // line 17
        echo "                        ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["categoryList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 17);
        // line 18
        echo "                        ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["categoryList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 18);
        // line 19
        echo "

                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 22
            echo "
                                    ";
            // line 24
            echo "                                    ";
            ob_start();
            // line 25
            echo "                                        <a href=\"#catalog-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 25), "html", null, true);
            echo "\" class=\"catalog-homepage__filter-item\" data-category=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 25), "html", null, true);
            echo "\">Протеiн</a>
                                    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 27
            echo "
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "                                <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
                    </div>
                </aside>


                <div class=\"catalog__products\">



                    ";
        // line 40
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "records", [], "any", false, false, false, 40);
        // line 41
        echo "                    ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "displayColumn", [], "any", false, false, false, 41);
        // line 42
        echo "                    ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 42);
        // line 43
        echo "                    ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "detailsPage", [], "any", false, false, false, 43);
        // line 44
        echo "                    ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 44);
        // line 45
        echo "                    ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 45);
        // line 46
        echo "
                    <div class=\"catalog__product-items\">


                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 51
            echo "                            <div class=\"catalog__product-item\" data-category=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "category", [], "any", false, false, false, 51), "html", null, true);
            echo "\" data-productid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\">
                                ";
            // line 53
            echo "                                ";
            ob_start();
            // line 54
            echo "                                    <a href=\"/product/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 54), "html", null, true);
            echo "\" class=\"product-item__link\">
                                                    <div class=\"product-item__image-holder\">
                                                        <img src=\"";
            // line 56
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "picture", [], "any", false, false, false, 56));
            echo "\" alt=\"\" class=\"product-item__image-item\">
                                                    </div>
                                                    <div class=\"product-item__info\">
                                                        <h3 class=\"product-item__info-title\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 59), "html", null, true);
            echo "</h3>
                                                        <p class=\"product-item__info-description\">
                                                            ";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 61);
            echo "
                                                        </p>




                                                    </div>
                                                </a>
                                                <div class=\"product-item__cart\">
                                                    <span class=\"product-item__cart-price\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "price", [], "any", false, false, false, 70), "html", null, true);
            echo "</span>
                                                    <button class=\"product-item__card-add\" id=\"pid";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "\">
                                                            <span class=\"product-item__card-add__icon\">

                                                            </span>Додати в кошик
                                                    </button>
                                                </div>
                                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 78
            echo "                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            echo "                            <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "


    </div>
                    </div>
                </div>




            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/pep-hemp/themes/demo/partials/products/catalog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 82,  204 => 80,  198 => 78,  188 => 71,  184 => 70,  172 => 61,  167 => 59,  161 => 56,  155 => 54,  152 => 53,  145 => 51,  140 => 50,  134 => 46,  131 => 45,  128 => 44,  125 => 43,  122 => 42,  119 => 41,  117 => 40,  106 => 31,  97 => 29,  91 => 27,  83 => 25,  80 => 24,  77 => 22,  72 => 21,  68 => 19,  65 => 18,  62 => 17,  59 => 16,  56 => 15,  53 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"catalog --container ancore\" id=\"catalog-ancore\">
            <div class=\"catalog__header\">
                <h2 class=\"catalog__title\">Каталог</h2>
                <a href=\"#\" class=\"catalog__header-price\">Получить прайс</a>
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
                                        <a href=\"#catalog-{{ record.slug }}\" class=\"catalog-homepage__filter-item\" data-category=\"{{ record.slug }}\">Протеiн</a>
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
        </div>", "/Users/alexkondratenko/git/pep-hemp/themes/demo/partials/products/catalog.htm", "");
    }
}
