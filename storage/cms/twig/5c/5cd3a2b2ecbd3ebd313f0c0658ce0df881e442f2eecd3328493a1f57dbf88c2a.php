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

/* /Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/thankyou.htm */
class __TwigTemplate_9b6bb6df5f54686ece5b47901cc7b82409df0a2e0f756c61dce07a6a41a6e7be extends \Twig\Template
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

    <div class=\"main-banner\" data-bannerid=\"bid\">

        <div class=\"main-banner__text-section --container\">
            <h1 class=\"main-banner__title\">Дякуемо за замовлення</h1>
            <p class=\"main-banner__description\">
                 Ваше замовлення прийнято. <br>У разi необхiдностi, наш менеджер зателефонує вам
            </p>
            <a href=\"/\" class=\"catalog__header-price\">Повернутися на головну</a>
        </div>
<!--        <div class=\"main-banner__kod-bg\"></div>-->
        <div class=\"main-banner__weed-left\">

            <div class=\"weed-right__root --weed-right__img\">
                <img class=\"weed-right__root__img --root__img\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/root.png?123");
        echo "\">
            </div>

            <div class=\"weed-right__1st --weed-right__img\">
                <img class=\"weed-right__1st__img --root__img\" src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/1.png");
        echo "\">
            </div>

            <div class=\"weed-right__2nd --weed-right__img\">
                <img class=\"weed-right__2nd__img --root__img\" src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/2.png");
        echo "\">
            </div>

            <div class=\"weed-right__3rd --weed-right__img\">
                <img class=\"weed-right__3rd__img --root__img\" src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/3.png");
        echo "\">
            </div>

            <div class=\"weed-right__4th --weed-right__img\">
                <img class=\"weed-right__4th__img --root__img\" src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/4.png");
        echo "\">
            </div>

            <div class=\"weed-right__5th --weed-right__img\">
                <img class=\"weed-right__5th__img --root__img\" src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/5.png");
        echo "\">
            </div>

        </div>
        <div class=\"main-banner__weed-right\">

            <div class=\"weed-right__root --weed-right__img\">
                <img class=\"weed-right__root__img --root__img\" src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/root.png?234");
        echo "\">
            </div>

            <div class=\"weed-right__1st --weed-right__img\">
                <img class=\"weed-right__1st__img --root__img\" src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/1.png");
        echo "\">
            </div>

            <div class=\"weed-right__2nd --weed-right__img\">
                <img class=\"weed-right__2nd__img --root__img\" src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/2.png");
        echo "\">
            </div>

            <div class=\"weed-right__3rd --weed-right__img\">
                <img class=\"weed-right__3rd__img --root__img\" src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/3.png");
        echo "\">
            </div>

            <div class=\"weed-right__4th --weed-right__img\">
                <img class=\"weed-right__4th__img --root__img\" src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/4.png");
        echo "\">
            </div>

            <div class=\"weed-right__5th --weed-right__img\">
                <img class=\"weed-right__5th__img --root__img\" src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/5.png");
        echo "\">
            </div>

        </div>


    </div>



</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/thankyou.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 63,  127 => 59,  120 => 55,  113 => 51,  106 => 47,  99 => 43,  89 => 36,  82 => 32,  75 => 28,  68 => 24,  61 => 20,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"App\">

    <div class=\"main-banner\" data-bannerid=\"bid\">

        <div class=\"main-banner__text-section --container\">
            <h1 class=\"main-banner__title\">Дякуемо за замовлення</h1>
            <p class=\"main-banner__description\">
                 Ваше замовлення прийнято. <br>У разi необхiдностi, наш менеджер зателефонує вам
            </p>
            <a href=\"/\" class=\"catalog__header-price\">Повернутися на головну</a>
        </div>
<!--        <div class=\"main-banner__kod-bg\"></div>-->
        <div class=\"main-banner__weed-left\">

            <div class=\"weed-right__root --weed-right__img\">
                <img class=\"weed-right__root__img --root__img\" src=\"{{ '/assets/weed/root.png?123'|theme }}\">
            </div>

            <div class=\"weed-right__1st --weed-right__img\">
                <img class=\"weed-right__1st__img --root__img\" src=\"{{ '/assets/weed/1.png'|theme }}\">
            </div>

            <div class=\"weed-right__2nd --weed-right__img\">
                <img class=\"weed-right__2nd__img --root__img\" src=\"{{ '/assets/weed/2.png'|theme }}\">
            </div>

            <div class=\"weed-right__3rd --weed-right__img\">
                <img class=\"weed-right__3rd__img --root__img\" src=\"{{ '/assets/weed/3.png'|theme }}\">
            </div>

            <div class=\"weed-right__4th --weed-right__img\">
                <img class=\"weed-right__4th__img --root__img\" src=\"{{ '/assets/weed/4.png'|theme }}\">
            </div>

            <div class=\"weed-right__5th --weed-right__img\">
                <img class=\"weed-right__5th__img --root__img\" src=\"{{ '/assets/weed/5.png'|theme }}\">
            </div>

        </div>
        <div class=\"main-banner__weed-right\">

            <div class=\"weed-right__root --weed-right__img\">
                <img class=\"weed-right__root__img --root__img\" src=\"{{ '/assets/weed/root.png?234'|theme }}\">
            </div>

            <div class=\"weed-right__1st --weed-right__img\">
                <img class=\"weed-right__1st__img --root__img\" src=\"{{ '/assets/weed/1.png'|theme }}\">
            </div>

            <div class=\"weed-right__2nd --weed-right__img\">
                <img class=\"weed-right__2nd__img --root__img\" src=\"{{ '/assets/weed/2.png'|theme }}\">
            </div>

            <div class=\"weed-right__3rd --weed-right__img\">
                <img class=\"weed-right__3rd__img --root__img\" src=\"{{ '/assets/weed/3.png'|theme }}\">
            </div>

            <div class=\"weed-right__4th --weed-right__img\">
                <img class=\"weed-right__4th__img --root__img\" src=\"{{ '/assets/weed/4.png'|theme }}\">
            </div>

            <div class=\"weed-right__5th --weed-right__img\">
                <img class=\"weed-right__5th__img --root__img\" src=\"{{ '/assets/weed/5.png'|theme }}\">
            </div>

        </div>


    </div>



</div>", "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/thankyou.htm", "");
    }
}
