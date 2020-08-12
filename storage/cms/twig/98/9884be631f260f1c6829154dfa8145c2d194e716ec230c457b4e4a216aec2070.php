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

/* /Users/alexkondratenko/gitlab/pep-hemp/themes/demo/partials/products/catalog.htm */
class __TwigTemplate_4df28e51873021e9bc3163aa352b429281b63eeddc6172cf8a93bd5cc3ad38f7 extends \Twig\Template
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
                        <a href=\"#catalog-proteins\" class=\"catalog-homepage__filter-item\" data-category=\"proteins\">Протеiн</a>
                        <a href=\"#catalog-superfoods\" class=\"catalog-homepage__filter-item\" data-category=\"superfoods\">Суперфуди</a>
                        <a href=\"#catalog-cosmetics\" class=\"catalog-homepage__filter-item\" data-category=\"cosmetics\">Косметика</a>
                    </div>
                </aside>


                <div class=\"catalog__products\">
                


                    ";
        // line 23
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "records", [], "any", false, false, false, 23);
        // line 24
        echo "                    ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "displayColumn", [], "any", false, false, false, 24);
        // line 25
        echo "                    ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 25);
        // line 26
        echo "                    ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "detailsPage", [], "any", false, false, false, 26);
        // line 27
        echo "                    ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 27);
        // line 28
        echo "                    ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 28);
        // line 29
        echo "                
                    <div class=\"catalog__product-items\">

                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 33
            echo "                            <div class=\"catalog__product-item\" data-category=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "category", [], "any", false, false, false, 33), "html", null, true);
            echo "\" data-productid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
                                ";
            // line 35
            echo "                                ";
            ob_start();
            // line 36
            echo "                                    <a href=\"/product/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 36), "html", null, true);
            echo "\" class=\"product-item__link\">
                                                    <div class=\"product-item__image-holder\">
                                                        <img src=\"";
            // line 38
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "picture", [], "any", false, false, false, 38));
            echo "\" alt=\"\" class=\"product-item__image-item\">
                                                    </div>
                                                    <div class=\"product-item__info\">
                                                        <h3 class=\"product-item__info-title\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 41), "html", null, true);
            echo "</h3>
                                                        <p class=\"product-item__info-description\">
                                                            ";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 43);
            echo "
                                                        </p>




                                                    </div>
                                                </a>
                                                <div class=\"product-item__cart\">
                                                    <span class=\"product-item__cart-price\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "price", [], "any", false, false, false, 52), "html", null, true);
            echo "</span>
                                                    <button class=\"product-item__card-add\" id=\"pid";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\">
                                                            <span class=\"product-item__card-add__icon\">

                                                            </span>Додати в кошик
                                                    </button>
                                                </div>
                                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 60
            echo "                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "                            <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
                        

    </div>
                    </div>
                </div>




            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/gitlab/pep-hemp/themes/demo/partials/products/catalog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 64,  147 => 62,  141 => 60,  131 => 53,  127 => 52,  115 => 43,  110 => 41,  104 => 38,  98 => 36,  95 => 35,  88 => 33,  83 => 32,  78 => 29,  75 => 28,  72 => 27,  69 => 26,  66 => 25,  63 => 24,  61 => 23,  37 => 1,);
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
                        <a href=\"#catalog-proteins\" class=\"catalog-homepage__filter-item\" data-category=\"proteins\">Протеiн</a>
                        <a href=\"#catalog-superfoods\" class=\"catalog-homepage__filter-item\" data-category=\"superfoods\">Суперфуди</a>
                        <a href=\"#catalog-cosmetics\" class=\"catalog-homepage__filter-item\" data-category=\"cosmetics\">Косметика</a>
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
        </div>", "/Users/alexkondratenko/gitlab/pep-hemp/themes/demo/partials/products/catalog.htm", "");
    }
}
