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
            <h1 class=\"main-banner__title\">Спасибо за заказ</h1>
            <p class=\"main-banner__description\">
                 Ваш заказ №<span id=\"orderId\"></span>, успешно оформлен. <br>Итого: <span id=\"orderAmount\"></span> грн.
            </p>

            <a href=\"/\" class=\"order-pay_button\" id=\"payButton\" target=\"blanc\">Перейти к оплате</a>
            <a href=\"/\" class=\"order-back_button\">Повернутися на головну</a>
        </div>
<!--        <div class=\"main-banner__kod-bg\"></div>-->
        <div class=\"main-banner__weed-left\">

            <div class=\"weed-right__root --weed-right__img\">
                <img class=\"weed-right__root__img --root__img\" src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/root.png?123");
        echo "\">
            </div>

            <div class=\"weed-right__1st --weed-right__img\">
                <img class=\"weed-right__1st__img --root__img\" src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/1.png");
        echo "\">
            </div>

            <div class=\"weed-right__2nd --weed-right__img\">
                <img class=\"weed-right__2nd__img --root__img\" src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/2.png");
        echo "\">
            </div>

            <div class=\"weed-right__3rd --weed-right__img\">
                <img class=\"weed-right__3rd__img --root__img\" src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/3.png");
        echo "\">
            </div>

            <div class=\"weed-right__4th --weed-right__img\">
                <img class=\"weed-right__4th__img --root__img\" src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/4.png");
        echo "\">
            </div>

            <div class=\"weed-right__5th --weed-right__img\">
                <img class=\"weed-right__5th__img --root__img\" src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/5.png");
        echo "\">
            </div>

        </div>
        <div class=\"main-banner__weed-right\">

            <div class=\"weed-right__root --weed-right__img\">
                <img class=\"weed-right__root__img --root__img\" src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/root.png?234");
        echo "\">
            </div>

            <div class=\"weed-right__1st --weed-right__img\">
                <img class=\"weed-right__1st__img --root__img\" src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/1.png");
        echo "\">
            </div>

            <div class=\"weed-right__2nd --weed-right__img\">
                <img class=\"weed-right__2nd__img --root__img\" src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/2.png");
        echo "\">
            </div>

            <div class=\"weed-right__3rd --weed-right__img\">
                <img class=\"weed-right__3rd__img --root__img\" src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/3.png");
        echo "\">
            </div>

            <div class=\"weed-right__4th --weed-right__img\">
                <img class=\"weed-right__4th__img --root__img\" src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/4.png");
        echo "\">
            </div>

            <div class=\"weed-right__5th --weed-right__img\">
                <img class=\"weed-right__5th__img --root__img\" src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/weed/5.png");
        echo "\">
            </div>

        </div>


    </div>

</div>

<script>
    let getParams = window.location.search;
    let merchantUrl = 'https://www.liqpay.ua/api/3/checkout';
    let paymentUrl = merchantUrl + getParams;

    function getGet(name) {
        var s = getParams;
        s = s.match(new RegExp(name + '=([^&=]+)'));
        return s ? s[1] : false;
    }
    
    let orderInfo = JSON.parse(atob(getGet('data')));
    document.getElementById(\"orderId\").innerHTML = orderInfo.order_id
    document.getElementById(\"orderAmount\").innerHTML = orderInfo.amount
    console.log(orderInfo);
    document.getElementById('payButton').href = (\"https://www.liqpay.ua/api/3/checkout\"+ getParams);



</script>";
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
        return array (  136 => 65,  129 => 61,  122 => 57,  115 => 53,  108 => 49,  101 => 45,  91 => 38,  84 => 34,  77 => 30,  70 => 26,  63 => 22,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"App\">

    <div class=\"main-banner\" data-bannerid=\"bid\">

        <div class=\"main-banner__text-section --container\">
            <h1 class=\"main-banner__title\">Спасибо за заказ</h1>
            <p class=\"main-banner__description\">
                 Ваш заказ №<span id=\"orderId\"></span>, успешно оформлен. <br>Итого: <span id=\"orderAmount\"></span> грн.
            </p>

            <a href=\"/\" class=\"order-pay_button\" id=\"payButton\" target=\"blanc\">Перейти к оплате</a>
            <a href=\"/\" class=\"order-back_button\">Повернутися на головну</a>
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

</div>

<script>
    let getParams = window.location.search;
    let merchantUrl = 'https://www.liqpay.ua/api/3/checkout';
    let paymentUrl = merchantUrl + getParams;

    function getGet(name) {
        var s = getParams;
        s = s.match(new RegExp(name + '=([^&=]+)'));
        return s ? s[1] : false;
    }
    
    let orderInfo = JSON.parse(atob(getGet('data')));
    document.getElementById(\"orderId\").innerHTML = orderInfo.order_id
    document.getElementById(\"orderAmount\").innerHTML = orderInfo.amount
    console.log(orderInfo);
    document.getElementById('payButton').href = (\"https://www.liqpay.ua/api/3/checkout\"+ getParams);



</script>", "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/thankyou.htm", "");
    }
}
