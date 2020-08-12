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

/* /Users/alexkondratenko/pephemp/themes/demo/partials/site/header.htm */
class __TwigTemplate_b461da50bd18326ee9718f0725cd30a93da3878ef46bd1577e8265b2a5329954 extends \Twig\Template
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
                    <a href=\"/catalog/#catalog-proteins\" class=\"dropped-menu__item\">
                        <div class=\"menu-item__img-holder\">
                            <img class=\"menu-item__img\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/products/protein.png");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"menu-item__category-title\">Протеин</div>
                    </a>
                    <a href=\"/catalog/#catalog-superfoods\" class=\"dropped-menu__item\">
                        <div class=\"menu-item__img-holder\">
                            <img class=\"menu-item__img\" src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/products/oliya_food.png");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"menu-item__category-title\">Суперфуд</div>
                    </a>
                    <a href=\"/catalog/#catalog-cosmetics\" class=\"dropped-menu__item\">
                        <div class=\"menu-item__img-holder\">
                            <img class=\"menu-item__img\" src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/products/milo.png");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"menu-item__category-title\">Косметика</div>
                    </a>
                </div>
            </div>

            <a href=\"/blog\" class=\"main-header__item --menu-item\">
                Статтi
            </a>

            <a href=\"/\" class=\"main-header__item --menu-logo\">
                <img class=\"menu_logo_pic\" src=\"";
        // line 40
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
                                                            <use xlink:href=\"#path-1\"></use>
                                                        </mask>
                                                        <use id=\"Mask\" xlink:href=\"#path-1\"></use>
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
        return "/Users/alexkondratenko/pephemp/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 40,  72 => 28,  63 => 22,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"App-header\">
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
                    <a href=\"/catalog/#catalog-proteins\" class=\"dropped-menu__item\">
                        <div class=\"menu-item__img-holder\">
                            <img class=\"menu-item__img\" src=\"{{ '/assets/products/protein.png'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"menu-item__category-title\">Протеин</div>
                    </a>
                    <a href=\"/catalog/#catalog-superfoods\" class=\"dropped-menu__item\">
                        <div class=\"menu-item__img-holder\">
                            <img class=\"menu-item__img\" src=\"{{ '/assets/products/oliya_food.png'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"menu-item__category-title\">Суперфуд</div>
                    </a>
                    <a href=\"/catalog/#catalog-cosmetics\" class=\"dropped-menu__item\">
                        <div class=\"menu-item__img-holder\">
                            <img class=\"menu-item__img\" src=\"{{ '/assets/products/milo.png'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"menu-item__category-title\">Косметика</div>
                    </a>
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
                                                            <use xlink:href=\"#path-1\"></use>
                                                        </mask>
                                                        <use id=\"Mask\" xlink:href=\"#path-1\"></use>
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
</div>", "/Users/alexkondratenko/pephemp/themes/demo/partials/site/header.htm", "");
    }
}
