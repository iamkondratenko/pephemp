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

/* /Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/site/header.htm */
class __TwigTemplate_18036e1f7f3533904266326a7691cd5b7512d0edab181c50fec446c9fe5f7868 extends \Twig\Template
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
        echo "<div id=\"App-header\">

    <div class=\"pre-header\">
        <div class=\"pre-header__content\">
            <svg width=\"14px\" height=\"18px\" viewBox=\"0 0 14 18\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                <title>seo-and-web</title>
                <desc>Created with Sketch.</desc>
                <g id=\"Home\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                    <g id=\"Главная\" transform=\"translate(-130.000000, -16.000000)\">
                        <g id=\"Header\" transform=\"translate(0.000000, -2.000000)\">
                            <g id=\"Rectangle-2\" transform=\"translate(0.000000, 2.000000)\" fill=\"#151A26\">
                                <rect id=\"Rectangle\" x=\"0\" y=\"0\" width=\"1440\" height=\"50\"></rect>
                            </g>
                            <g id=\"seo-and-web\" transform=\"translate(130.000000, 18.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
                                <path d=\"M6.5390625,0 C2.94451172,0 0.0201445312,2.92436719 0.0201445312,6.51888281 C0.0201445312,10.9797891 5.8539375,17.5286602 6.10231641,17.8052695 C6.33561328,18.0651094 6.74293359,18.0646523 6.97580859,17.8052695 C7.2241875,17.5286602 13.0579805,10.9797891 13.0579805,6.51888281 C13.0579805,2.92436719 10.1335781,0 6.5390625,0 Z M6.5390625,9.79871484 C4.73055469,9.79871484 3.25926562,8.32739062 3.25926562,6.51888281 C3.25926562,4.710375 4.73058984,3.23908594 6.5390625,3.23908594 C8.34753516,3.23908594 9.81882422,4.71041016 9.81882422,6.51891797 C9.81882422,8.32742578 8.34753516,9.79871484 6.5390625,9.79871484 Z\" id=\"Shape\"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg><a class=\"address-holder__title\" href=\"#\">М. Київ, бул. Вацлава Гавела, 6.</a>

            <div class=\"pre-header__phones\">
                <div class=\"pre-header__phone-item\"><span class=\"phone-item__label\">Отдел продаж: </span>093 269 56 88,</div>
                <div class=\"pre-header__phone-item\"><span class=\"phone-item__label\">067 232 20 77</span></div>
            </div>
        </div>
    </div>

    <header class=\"main-header\" id=\"main-header\">
        <div class=\"main-header__items\">
            <a href=\"/\" class=\"main-header__item --menu-item\">
                Головна
            </a>

            <a href=\"/catalog\" class=\"main-header__item --menu-item js-openCategoryMenu\">
                Каталог
            </a>

            <div class=\"main-header__dropped-menu\">
                <div class=\"dropped-menu__items\">
                
                ";
        // line 43
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["menuList"] ?? null), "records", [], "any", false, false, false, 43);
        // line 44
        echo "                ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["menuList"] ?? null), "displayColumn", [], "any", false, false, false, 44);
        // line 45
        echo "                ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["menuList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 45);
        // line 46
        echo "                ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["menuList"] ?? null), "detailsPage", [], "any", false, false, false, 46);
        // line 47
        echo "                ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["menuList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 47);
        // line 48
        echo "                ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["menuList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 48);
        // line 49
        echo "

    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 52
            echo "        
            ";
            // line 54
            echo "            ";
            ob_start();
            // line 55
            echo "                
                <a href=\"/catalog/#catalog-";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 56), "html", null, true);
            echo "\" class=\"dropped-menu__item\">
                        <div class=\"menu-item__img-holder\">
                            <img class=\"menu-item__img\" src=\"";
            // line 58
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "picture", [], "any", false, false, false, 58));
            echo "\" alt=\"\">
                        </div>
                        <div class=\"menu-item__category-title\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "category_title", [], "any", false, false, false, 60), "html", null, true);
            echo "</div>
                    </a>
                
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 64
            echo "        
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
                </div>
            </div>

            <a href=\"/blog\" class=\"main-header__item --menu-item\">
                Статтi
            </a>

            <a href=\"/\" class=\"main-header__item --menu-logo\">
                <img class=\"menu_logo_pic\" src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/Logo_pep_hemp.png");
        echo "\">
            </a>

            <a href=\"/about\" class=\"main-header__item --menu-item\">
                Про нас
            </a>

            <a href=\"contacts\" class=\"main-header__item --menu-item\">
                Контакти
            </a>

            <div class=\"main-header__item --menu-cart\" onclick=\"openCartDrawer()\">
                <div class=\"menu-cart__icon\">
                    <svg width=\"18px\" height=\"16px\" viewBox=\"0 0 18 16\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                        <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                        <title>supermarket</title>
                        <desc>Created with Sketch.</desc>
                        <defs>
                            <path d=\"M0,0 L1440,0 L1440,712 C1274.66667,712 1139.33333,712 1034,712 C876,712 877,660.552553 720,660.552553 C563,660.552553 563,712 405,712 C299.666667,712 164.666667,712 0,712 L0,0 Z\" id=\"path-1\"></path>
                        </defs>
                        <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                            <g id=\"Desktop-HD\" transform=\"translate(-1100.000000, -43.000000)\">
                                <g id=\"Group-2\">
                                    <g id=\"Group\">
                                        <g id=\"Logo_pep_hemp-2\">
                                            <g id=\"Bitmap-+-Bitmap-Mask\">
                                                <g>
                                                    <g>
                                                        <mask id=\"mask-2\" fill=\"white\">
                                                        </mask>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id=\"supermarket\" transform=\"translate(1100.000000, 43.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
                                                <path d=\"M5.83592113,10.2272949 L15.3633755,10.2272949 C15.5993062,10.2272949 15.8062606,10.0760182 15.8701185,9.85629399 L17.9796249,2.6971476 C18.0249434,2.542808 17.9939071,2.3770161 17.8940691,2.2487771 C17.7940938,2.12093758 17.6386377,2.04543235 17.4727446,2.04543235 L4.61850207,2.04543235 L4.24153475,0.400563836 C4.18797654,0.166324536 3.97374374,0 3.72655205,0 L0.527342271,0 C0.235930752,0 0,0.228779495 0,0.511358088 C0,0.794069873 0.235930752,1.02271618 0.527342271,1.02271618 L3.30330496,1.02271618 L5.20764225,9.33228511 C4.64734108,9.56852191 4.25389432,10.1093097 4.25389432,10.738653 C4.25389432,11.5845245 4.96360913,12.2727273 5.83592113,12.2727273 L15.3633755,12.2727273 C15.6549244,12.2727273 15.8907178,12.044081 15.8907178,11.7613692 C15.8907178,11.4787906 15.6549244,11.2500111 15.3633755,11.2500111 L5.83592113,11.2500111 C5.54547089,11.2500111 5.30857886,11.0208321 5.30857886,10.738653 C5.30857886,10.4564739 5.54547089,10.2272949 5.83592113,10.2272949 Z\" id=\"Path\"></path>
                                                <path d=\"M4.90909091,13.9090909 C4.90909091,14.8115057 5.64314996,15.5454545 6.54552556,15.5454545 C7.44775913,15.5454545 8.18181818,14.8115057 8.18181818,13.9090909 C8.18181818,13.0068182 7.44775913,12.2727273 6.54552556,12.2727273 C5.64314996,12.2727273 4.90909091,13.0068182 4.90909091,13.9090909 Z\" id=\"Path\"></path>
                                                <path d=\"M12.2727273,13.9090909 C12.2727273,14.8115057 13.0068182,15.5454545 13.9090909,15.5454545 C14.8115057,15.5454545 15.5454545,14.8115057 15.5454545,13.9090909 C15.5454545,13.0068182 14.8115057,12.2727273 13.9090909,12.2727273 C13.0068182,12.2727273 12.2727273,13.0068182 12.2727273,13.9090909 Z\" id=\"Path\"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class=\"menu-cart__label\">
                    Кошик
                </div>

                <div class=\"menu-cart__counter hideCounter\">
                    0
                </div>

            </div>

        </div>
    </header>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 77,  148 => 68,  139 => 66,  133 => 64,  126 => 60,  121 => 58,  116 => 56,  113 => 55,  110 => 54,  107 => 52,  102 => 51,  98 => 49,  95 => 48,  92 => 47,  89 => 46,  86 => 45,  83 => 44,  81 => 43,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"App-header\">

    <div class=\"pre-header\">
        <div class=\"pre-header__content\">
            <svg width=\"14px\" height=\"18px\" viewBox=\"0 0 14 18\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                <title>seo-and-web</title>
                <desc>Created with Sketch.</desc>
                <g id=\"Home\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                    <g id=\"Главная\" transform=\"translate(-130.000000, -16.000000)\">
                        <g id=\"Header\" transform=\"translate(0.000000, -2.000000)\">
                            <g id=\"Rectangle-2\" transform=\"translate(0.000000, 2.000000)\" fill=\"#151A26\">
                                <rect id=\"Rectangle\" x=\"0\" y=\"0\" width=\"1440\" height=\"50\"></rect>
                            </g>
                            <g id=\"seo-and-web\" transform=\"translate(130.000000, 18.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
                                <path d=\"M6.5390625,0 C2.94451172,0 0.0201445312,2.92436719 0.0201445312,6.51888281 C0.0201445312,10.9797891 5.8539375,17.5286602 6.10231641,17.8052695 C6.33561328,18.0651094 6.74293359,18.0646523 6.97580859,17.8052695 C7.2241875,17.5286602 13.0579805,10.9797891 13.0579805,6.51888281 C13.0579805,2.92436719 10.1335781,0 6.5390625,0 Z M6.5390625,9.79871484 C4.73055469,9.79871484 3.25926562,8.32739062 3.25926562,6.51888281 C3.25926562,4.710375 4.73058984,3.23908594 6.5390625,3.23908594 C8.34753516,3.23908594 9.81882422,4.71041016 9.81882422,6.51891797 C9.81882422,8.32742578 8.34753516,9.79871484 6.5390625,9.79871484 Z\" id=\"Shape\"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg><a class=\"address-holder__title\" href=\"#\">М. Київ, бул. Вацлава Гавела, 6.</a>

            <div class=\"pre-header__phones\">
                <div class=\"pre-header__phone-item\"><span class=\"phone-item__label\">Отдел продаж: </span>093 269 56 88,</div>
                <div class=\"pre-header__phone-item\"><span class=\"phone-item__label\">067 232 20 77</span></div>
            </div>
        </div>
    </div>

    <header class=\"main-header\" id=\"main-header\">
        <div class=\"main-header__items\">
            <a href=\"/\" class=\"main-header__item --menu-item\">
                Головна
            </a>

            <a href=\"/catalog\" class=\"main-header__item --menu-item js-openCategoryMenu\">
                Каталог
            </a>

            <div class=\"main-header__dropped-menu\">
                <div class=\"dropped-menu__items\">
                
                {% set records = menuList.records %}
                {% set displayColumn = menuList.displayColumn %}
                {% set noRecordsMessage = menuList.noRecordsMessage %}
                {% set detailsPage = menuList.detailsPage %}
                {% set detailsKeyColumn = menuList.detailsKeyColumn %}
                {% set detailsUrlParameter = menuList.detailsUrlParameter %}


    {% for record in records %}
        
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                
                <a href=\"/catalog/#catalog-{{ record.slug }}\" class=\"dropped-menu__item\">
                        <div class=\"menu-item__img-holder\">
                            <img class=\"menu-item__img\" src=\"{{ record.picture|media }}\" alt=\"\">
                        </div>
                        <div class=\"menu-item__category-title\">{{ record.category_title }}</div>
                    </a>
                
            {% endspaceless %}
        
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}

                </div>
            </div>

            <a href=\"/blog\" class=\"main-header__item --menu-item\">
                Статтi
            </a>

            <a href=\"/\" class=\"main-header__item --menu-logo\">
                <img class=\"menu_logo_pic\" src=\"{{ '/assets/Logo_pep_hemp.png'|theme }}\">
            </a>

            <a href=\"/about\" class=\"main-header__item --menu-item\">
                Про нас
            </a>

            <a href=\"contacts\" class=\"main-header__item --menu-item\">
                Контакти
            </a>

            <div class=\"main-header__item --menu-cart\" onclick=\"openCartDrawer()\">
                <div class=\"menu-cart__icon\">
                    <svg width=\"18px\" height=\"16px\" viewBox=\"0 0 18 16\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                        <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                        <title>supermarket</title>
                        <desc>Created with Sketch.</desc>
                        <defs>
                            <path d=\"M0,0 L1440,0 L1440,712 C1274.66667,712 1139.33333,712 1034,712 C876,712 877,660.552553 720,660.552553 C563,660.552553 563,712 405,712 C299.666667,712 164.666667,712 0,712 L0,0 Z\" id=\"path-1\"></path>
                        </defs>
                        <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                            <g id=\"Desktop-HD\" transform=\"translate(-1100.000000, -43.000000)\">
                                <g id=\"Group-2\">
                                    <g id=\"Group\">
                                        <g id=\"Logo_pep_hemp-2\">
                                            <g id=\"Bitmap-+-Bitmap-Mask\">
                                                <g>
                                                    <g>
                                                        <mask id=\"mask-2\" fill=\"white\">
                                                        </mask>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id=\"supermarket\" transform=\"translate(1100.000000, 43.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
                                                <path d=\"M5.83592113,10.2272949 L15.3633755,10.2272949 C15.5993062,10.2272949 15.8062606,10.0760182 15.8701185,9.85629399 L17.9796249,2.6971476 C18.0249434,2.542808 17.9939071,2.3770161 17.8940691,2.2487771 C17.7940938,2.12093758 17.6386377,2.04543235 17.4727446,2.04543235 L4.61850207,2.04543235 L4.24153475,0.400563836 C4.18797654,0.166324536 3.97374374,0 3.72655205,0 L0.527342271,0 C0.235930752,0 0,0.228779495 0,0.511358088 C0,0.794069873 0.235930752,1.02271618 0.527342271,1.02271618 L3.30330496,1.02271618 L5.20764225,9.33228511 C4.64734108,9.56852191 4.25389432,10.1093097 4.25389432,10.738653 C4.25389432,11.5845245 4.96360913,12.2727273 5.83592113,12.2727273 L15.3633755,12.2727273 C15.6549244,12.2727273 15.8907178,12.044081 15.8907178,11.7613692 C15.8907178,11.4787906 15.6549244,11.2500111 15.3633755,11.2500111 L5.83592113,11.2500111 C5.54547089,11.2500111 5.30857886,11.0208321 5.30857886,10.738653 C5.30857886,10.4564739 5.54547089,10.2272949 5.83592113,10.2272949 Z\" id=\"Path\"></path>
                                                <path d=\"M4.90909091,13.9090909 C4.90909091,14.8115057 5.64314996,15.5454545 6.54552556,15.5454545 C7.44775913,15.5454545 8.18181818,14.8115057 8.18181818,13.9090909 C8.18181818,13.0068182 7.44775913,12.2727273 6.54552556,12.2727273 C5.64314996,12.2727273 4.90909091,13.0068182 4.90909091,13.9090909 Z\" id=\"Path\"></path>
                                                <path d=\"M12.2727273,13.9090909 C12.2727273,14.8115057 13.0068182,15.5454545 13.9090909,15.5454545 C14.8115057,15.5454545 15.5454545,14.8115057 15.5454545,13.9090909 C15.5454545,13.0068182 14.8115057,12.2727273 13.9090909,12.2727273 C13.0068182,12.2727273 12.2727273,13.0068182 12.2727273,13.9090909 Z\" id=\"Path\"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class=\"menu-cart__label\">
                    Кошик
                </div>

                <div class=\"menu-cart__counter hideCounter\">
                    0
                </div>

            </div>

        </div>
    </header>
</div>", "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/site/header.htm", "");
    }
}
