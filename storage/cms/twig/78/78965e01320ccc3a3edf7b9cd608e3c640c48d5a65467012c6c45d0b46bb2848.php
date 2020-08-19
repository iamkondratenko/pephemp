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

/* /Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/site/footer.htm */
class __TwigTemplate_30c0cad23050f7c61408ecd1494f111bd31c21ada8c64c6b1fb685d6edc0616d extends \Twig\Template
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
        echo "<div id=\"App-footer\">
        <div class=\"subscribe-section\">
            <div class=\"subscribe-section__text\">
                <h3 class=\"subscribe-section__title\">Задать вопрос</h3>
                <p class=\"subscribe-section__description\">
                    Если у Вас остались какие то вопросы, вы можете задать их в форме обратной связи
                </p>
                <form data-request=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "::onFormSubmit\" class=\"question-form\">

    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div id=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>


    <input type=\"text\" id=\"email\" name=\"email\" class=\"subscribe-section__input\" placeholder=\"Email\">
    <input type=\"text\" id=\"phone\" name=\"phone\" class=\"subscribe-section__input\" placeholder=\"Телефон\">
    <textarea rows=\"10\" cols=\"45\" name=\"text\" placeholder=\"Ваш вопрос\" class=\"subscribe-form-section__text\"></textarea>
    <button type=\"submit\" class=\"subscribe-section__subscribe-button\">Задать вопрос</button>




    </div>


</form>



            </div>
        </div>
        <footer class=\"main-footer\">
            <div class=\"social-block\">
                <p class=\"social-block__title\">
                    Следите за новостями в соцсетях
                </p>
                <div class=\"social-block__icon-items\">
                    <a href=\"#\" class=\"social-block__icon-item\">

                        <svg width=\"36px\" height=\"36px\" viewBox=\"0 0 36 36\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                            <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                            <title>Path</title>
                            <desc>Created with Sketch.</desc>
                            <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                <g id=\"Desktop-HD\" transform=\"translate(-650.000000, -4892.000000)\">
                                    <rect id=\"Rectangle\" x=\"0\" y=\"4824\" width=\"1440\" height=\"140\"></rect>
                                    <g id=\"facebook-2\" transform=\"translate(650.000000, 4892.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
                                        <path d=\"M36,18 C36,8.0578125 27.9421875,0 18,0 C8.0578125,0 0,8.0578125 0,18 C0,27.9421875 8.0578125,36 18,36 C18.1054688,36 18.2109375,36 18.3164062,35.9929687 L18.3164062,21.9867187 L14.4492188,21.9867187 L14.4492188,17.4796875 L18.3164062,17.4796875 L18.3164062,14.1609375 C18.3164062,10.3148437 20.6648437,8.21953125 24.0960937,8.21953125 C25.7414062,8.21953125 27.1546875,8.3390625 27.5625,8.3953125 L27.5625,12.4171875 L25.2,12.4171875 C23.3367187,12.4171875 22.9710937,13.303125 22.9710937,14.6039062 L22.9710937,17.4726562 L27.4359375,17.4726562 L26.8523437,21.9796875 L22.9710937,21.9796875 L22.9710937,35.3039062 C30.4945312,33.1453125 36,26.2195312 36,18 Z\" id=\"Path\"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href=\"#\" class=\"social-block__icon-item\">
                        <svg width=\"36px\" height=\"36px\" viewBox=\"0 0 36 36\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                            <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                            <title>instagram-sketched</title>
                            <desc>Created with Sketch.</desc>
                            <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                <g id=\"Desktop-HD\" transform=\"translate(-702.000000, -4892.000000)\">
                                    <rect id=\"Rectangle\" fill=\"#272727\" x=\"0\" y=\"4824\" width=\"1440\" height=\"140\"></rect>
                                    <g id=\"facebook-2\" transform=\"translate(650.000000, 4892.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
                                        <g id=\"instagram-sketched\" transform=\"translate(52.000000, 0.000000)\">
                                            <path d=\"M21.4453125,18 C21.4453125,19.902832 19.902832,21.4453125 18,21.4453125 C16.097168,21.4453125 14.5546875,19.902832 14.5546875,18 C14.5546875,16.097168 16.097168,14.5546875 18,14.5546875 C19.902832,14.5546875 21.4453125,16.097168 21.4453125,18 Z\" id=\"Path\"></path>
                                            <path d=\"M26.057373,11.9042359 C25.8917541,11.4554443 25.627533,11.0492248 25.2842102,10.7157898 C24.9507752,10.372467 24.5448303,10.1082459 24.0957641,9.94262695 C23.7315674,9.80117796 23.1844482,9.6328125 22.1767273,9.58694456 C21.0866089,9.53723145 20.7597656,9.52651976 18,9.52651976 C15.2399597,9.52651976 14.9131164,9.5369568 13.8232727,9.58666992 C12.8155518,9.6328125 12.268158,9.80117796 11.9042359,9.94262695 C11.4551697,10.1082459 11.0489502,10.372467 10.7157898,10.7157898 C10.372467,11.0492248 10.1082459,11.4551697 9.94235231,11.9042359 C9.80090332,12.2684326 9.63253786,12.8158264 9.58666992,13.8235473 C9.5369568,14.9133911 9.52624512,15.2402344 9.52624512,18.0002746 C9.52624512,20.7600403 9.5369568,21.0868836 9.58666992,22.177002 C9.63253786,23.1847229 9.80090332,23.731842 9.94235231,24.0960388 C10.1082459,24.545105 10.3721924,24.9510498 10.7155152,25.2844848 C11.0489502,25.6278076 11.454895,25.8920288 11.9039612,26.0576477 C12.268158,26.1993713 12.8155518,26.3677368 13.8232727,26.4136047 C14.9131164,26.4633179 15.2396851,26.4737549 17.9997254,26.4737549 C20.7600403,26.4737549 21.0868836,26.4633179 22.1764527,26.4136047 C23.1841736,26.3677368 23.7315674,26.1993713 24.0957641,26.0576477 C24.9971924,25.7099304 25.7096558,24.997467 26.057373,24.0960388 C26.198822,23.731842 26.3671875,23.1847229 26.4133301,22.177002 C26.4630432,21.0868836 26.4734802,20.7600403 26.4734802,18.0002746 C26.4734802,15.2402344 26.4630432,14.9133911 26.4133301,13.8235473 C26.3674621,12.8158264 26.1990967,12.2684326 26.057373,11.9042359 L26.057373,11.9042359 Z M18,23.3074951 C15.068573,23.3074951 12.6922302,20.931427 12.6922302,18 C12.6922302,15.068573 15.068573,12.6925049 18,12.6925049 C20.9311523,12.6925049 23.3074951,15.068573 23.3074951,18 C23.3074951,20.931427 20.9311523,23.3074951 18,23.3074951 Z M23.517334,13.7230225 C22.8323364,13.7230225 22.2769775,13.1676636 22.2769775,12.482666 C22.2769775,11.7976684 22.8323364,11.2423096 23.517334,11.2423096 C24.2023316,11.2423096 24.7576904,11.7976684 24.7576904,12.482666 C24.7574158,13.1676636 24.2023316,13.7230225 23.517334,13.7230225 Z\" id=\"Shape\"></path>
                                            <path d=\"M18,0 C8.0603943,0 0,8.0603943 0,18 C0,27.9396057 8.0603943,36 18,36 C27.9396057,36 36,27.9396057 36,18 C36,8.0603943 27.9396057,0 18,0 Z M28.2735901,22.261322 C28.2236023,23.3616028 28.048645,24.112793 27.7932129,24.7703247 C27.2562561,26.1587219 26.1587219,27.2562561 24.7703247,27.7932129 C24.1130676,28.048645 23.3616028,28.2233277 22.2615967,28.2735901 C21.1593933,28.3238525 20.8072815,28.3359375 18.0002746,28.3359375 C15.1929932,28.3359375 14.841156,28.3238525 13.738678,28.2735901 C12.6386719,28.2233277 11.887207,28.048645 11.22995,27.7932129 C10.5400086,27.5336609 9.91543577,27.1268921 9.39907835,26.6009216 C8.87338259,26.0848389 8.46661373,25.4599914 8.20706175,24.7703247 C7.95162966,24.1130676 7.77667233,23.3616028 7.72668457,22.2615967 C7.67587282,21.1591187 7.6640625,20.8070068 7.6640625,18 C7.6640625,15.1929932 7.67587282,14.8408813 7.72640993,13.738678 C7.77639769,12.6383972 7.9510803,11.887207 8.20651247,11.2296753 C8.46606445,10.5400086 8.87310788,9.91516113 9.39907835,9.39907835 C9.91516113,8.87310788 10.5400086,8.46633909 11.2296753,8.20678711 C11.887207,7.95135502 12.6383972,7.77667233 13.738678,7.72640993 C14.8408813,7.67614746 15.1929932,7.6640625 18,7.6640625 C20.8070068,7.6640625 21.1591187,7.67614746 22.261322,7.72668457 C23.3616028,7.77667233 24.112793,7.95135502 24.7703247,8.20651247 C25.4599914,8.46606445 26.0848389,8.87310788 26.6011963,9.39907835 C27.1268921,9.91543577 27.5339355,10.5400086 27.7932129,11.2296753 C28.0489197,11.887207 28.2236023,12.6383972 28.2738648,13.738678 C28.3241272,14.8408813 28.3359375,15.1929932 28.3359375,18 C28.3359375,20.8070068 28.3241272,21.1591187 28.2735901,22.261322 L28.2735901,22.261322 Z\" id=\"Shape\"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href=\"#\" class=\"social-block__icon-item\">
                        <svg width=\"36px\" height=\"36px\" viewBox=\"0 0 36 36\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                            <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                            <title>youtube-2</title>
                            <desc>Created with Sketch.</desc>
                            <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                <g id=\"Desktop-HD\" transform=\"translate(-754.000000, -4892.000000)\">
                                    <rect id=\"Rectangle\" fill=\"#272727\" x=\"0\" y=\"4824\" width=\"1440\" height=\"140\"></rect>
                                    <g id=\"facebook-2\" transform=\"translate(650.000000, 4892.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
                                        <g id=\"youtube-2\" transform=\"translate(104.000000, 0.000000)\">
                                            <polygon id=\"Path\" points=\"15.7579651 21.3722535 21.6131287 18 15.7579651 14.6277465\"></polygon>
                                            <path d=\"M18,0 C8.0603943,0 0,8.0603943 0,18 C0,27.9396057 8.0603943,36 18,36 C27.9396057,36 36,27.9396057 36,18 C36,8.0603943 27.9396057,0 18,0 Z M29.2473502,18.0184021 C29.2473502,18.0184021 29.2473502,21.6688843 28.7841797,23.4291687 C28.5246277,24.3926697 27.7649231,25.1523743 26.8014221,25.4116516 C25.0411377,25.875 18,25.875 18,25.875 C18,25.875 10.9772644,25.875 9.1985779,25.3932495 C8.23507692,25.1339722 7.4753723,24.3739929 7.21582031,23.410492 C6.75247191,21.6688843 6.75247191,18 6.75247191,18 C6.75247191,18 6.75247191,14.3497925 7.21582031,12.589508 C7.47509766,11.6260071 8.25347897,10.8476258 9.1985779,10.5883484 C10.9588623,10.125 18,10.125 18,10.125 C18,10.125 25.0411377,10.125 26.8014221,10.6067505 C27.7649231,10.8660278 28.5246277,11.6260071 28.7841797,12.589508 C29.2659301,14.3497925 29.2473502,18.0184021 29.2473502,18.0184021 L29.2473502,18.0184021 Z\" id=\"Shape\"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </footer>

        <div class=\"modals\">
        <div class=\"modals__cart__close-button\" onclick=\"openCartDrawer()\"></div>
            <div class=\"modals__cart\">


                <div class=\"modals__cart__section\">
                    <div class=\"modals__cart__section__header\">
                        <h3 class=\"modals__cart__section__title\">Кошик</h3>
                        <button class=\"modals__cart__section__header__close-btn\" onclick=\"openCartDrawer()\">

                            <svg width=\"21px\" height=\"21px\" viewBox=\"0 0 21 21\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                                <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                                <title>Path</title>
                                <desc>Created with Sketch.</desc>
                                <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                    <g id=\"close\" fill=\"#252525\" fill-rule=\"nonzero\">
                                        <path d=\"M12.4239142,10.5098098 L20.6008921,2.33258285 C21.1330359,1.80068813 21.1330359,0.940687897 20.6008921,0.408793182 C20.0689974,-0.123101533 19.2089971,-0.123101533 18.6771024,0.408793182 L10.4998754,8.58602023 L2.3228975,0.408793182 C1.79075367,-0.123101533 0.931002552,-0.123101533 0.399107836,0.408793182 C-0.133035994,0.940687897 -0.133035994,1.80068813 0.399107836,2.33258285 L8.57608577,10.5098098 L0.399107836,18.6870369 C-0.133035994,19.2189316 -0.133035994,20.0789318 0.399107836,20.6108266 C0.664183228,20.8761511 1.01271752,21.0094362 1.3610027,21.0094362 C1.70928782,21.0094362 2.057573,20.8761511 2.3228975,20.6108266 L10.4998754,12.4335995 L18.6771024,20.6108266 C18.9424269,20.8761511 19.2907121,21.0094362 19.6389973,21.0094362 C19.9872824,21.0094362 20.3355675,20.8761511 20.6008921,20.6108266 C21.1330359,20.0789318 21.1330359,19.2189316 20.6008921,18.6870369 L12.4239142,10.5098098 Z\" id=\"Path\"></path>
                                    </g>
                                </g>
                            </svg>

                        </button>
                    </div>
                    <div class=\"modals__cart__section__product-items\"><div class=\"modals__cart__section__empty-cart\">В кошику ще нема товарiв :(</div></div>
                    <div class=\"modals__cart__section__footer\">
                        <h3 class=\"modals__cart__section__title\">Всього:&nbsp;<div class=\"cart_total_count\"></div></h3>
                        <button class=\"order-button\" onclick=\"openOrdering()\">Оформити замовлення</button>
                    </div>
                </div>
                <div class=\"modals__cart-order__section\">
                    <div class=\"modals__cart__section__header --drawer-ordering\">
                        <h3 class=\"modals__cart__section__title\">Оформлення замовлення</h3>
                        <button class=\"modals__cart__section__header__close-btn\" onclick=\"openCartDrawer()\">

                            <svg width=\"21px\" height=\"21px\" viewBox=\"0 0 21 21\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                                <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                                <title>Path</title>
                                <desc>Created with Sketch.</desc>
                                <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                    <g id=\"close\" fill=\"#252525\" fill-rule=\"nonzero\">
                                        <path d=\"M12.4239142,10.5098098 L20.6008921,2.33258285 C21.1330359,1.80068813 21.1330359,0.940687897 20.6008921,0.408793182 C20.0689974,-0.123101533 19.2089971,-0.123101533 18.6771024,0.408793182 L10.4998754,8.58602023 L2.3228975,0.408793182 C1.79075367,-0.123101533 0.931002552,-0.123101533 0.399107836,0.408793182 C-0.133035994,0.940687897 -0.133035994,1.80068813 0.399107836,2.33258285 L8.57608577,10.5098098 L0.399107836,18.6870369 C-0.133035994,19.2189316 -0.133035994,20.0789318 0.399107836,20.6108266 C0.664183228,20.8761511 1.01271752,21.0094362 1.3610027,21.0094362 C1.70928782,21.0094362 2.057573,20.8761511 2.3228975,20.6108266 L10.4998754,12.4335995 L18.6771024,20.6108266 C18.9424269,20.8761511 19.2907121,21.0094362 19.6389973,21.0094362 C19.9872824,21.0094362 20.3355675,20.8761511 20.6008921,20.6108266 C21.1330359,20.0789318 21.1330359,19.2189316 20.6008921,18.6870369 L12.4239142,10.5098098 Z\" id=\"Path\"></path>
                                    </g>
                                </g>
                            </svg>

                        </button>
                    </div>



                    <form class=\"ordering-form\">
                        <div class=\"form-fields\">
                            <h4 class=\"form-fields__title\">Персональные данные</h4>
                            <div class=\"field-set\">
                                <div class=\"form-field first-name\">
                                    <div class=\"label-field__ordering-form\">Имя:</div>
                                    <input class=\"ordering-field\" type=\"text\" name=\"first_name\" required>
                                </div>
                                <div class=\"form-field second-name\">
                                    <div class=\"label-field__ordering-form\">Фамилия:</div>
                                    <input class=\"ordering-field\" type=\"name\" name=\"last_name\" required>
                                </div>
                                <div class=\"form-field email\">
                                    <div class=\"label-field__ordering-form\">Email:</div>
                                    <input class=\"ordering-field\" type=\"email\" name=\"order_email\">
                                </div>
                                <div class=\"form-field phone\">
                                    <div class=\"label-field__ordering-form\">Телефон:</div>
                                    <input class=\"ordering-field\" type=\"tel\" name=\"phone\" required>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-fields\">
                            <h4 class=\"form-fields__title\">Доставка и оплата</h4>
                            <div class=\"field-set\">
                                <div class=\"form-field first-name\">
                                    <div class=\"label-field__ordering-form\">Город:</div>
                                    <input type=\"text\" name=\"city\" list=\"cityList\" class=\"ordering-field cityList\" required>
                                    <datalist id=\"cityList\">

                                    </datalist>
                                </div>
                                <div class=\"form-field radio-delivery-fields\">
                                    <div class=\"label-field__ordering-form\">Тип доставки:</div>
                                    <div class=\"input-fields\">
                                        <div class=\"radio__input-field\">
                                            <input class=\"ordering-field radio-delivery-field\" name=\"delivery\" value=\"novaposhta\" type=\"radio\" id=\"novaposhta\"><label class=\"label__form-field\" for=\"novaposhta\" checked>Нова Пошта</label>
                                        </div>
                                        <div class=\"radio__input-field delivery-pickpoint\">
                                            <input class=\"ordering-field radio-delivery-field\" name=\"delivery\" value=\"pickpoint\" type=\"radio\" id=\"pickpoint\"><label class=\"label__form-field\" for=\"pickpoint\">Самовывоз</label>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"form-field np-department\">
                                    <div class=\"label-field__ordering-form\">Отделение:</div>
                                    <input type=\"text\" name=\"department\" list=\"depList\" class=\"ordering-field depList\" required>
                                    <datalist id=\"depList\">

                                    </datalist>
                                </div>
                            </div>
                        </div>
                        <div class=\"modals__order__section__footer\">
                            <h3 class=\"modals__cart__section__title\">Всего:&nbsp;<div class=\"order_total_count\"></div></h3>
                            <button class=\"order-button\" onclick=\"ordering()\">Оформить заказ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  51 => 10,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"App-footer\">
        <div class=\"subscribe-section\">
            <div class=\"subscribe-section__text\">
                <h3 class=\"subscribe-section__title\">Задать вопрос</h3>
                <p class=\"subscribe-section__description\">
                    Если у Вас остались какие то вопросы, вы можете задать их в форме обратной связи
                </p>
                <form data-request=\"{{ genericForm }}::onFormSubmit\" class=\"question-form\">

    {{ form_token() }}

    <div id=\"{{ genericForm }}_forms_flash\"></div>


    <input type=\"text\" id=\"email\" name=\"email\" class=\"subscribe-section__input\" placeholder=\"Email\">
    <input type=\"text\" id=\"phone\" name=\"phone\" class=\"subscribe-section__input\" placeholder=\"Телефон\">
    <textarea rows=\"10\" cols=\"45\" name=\"text\" placeholder=\"Ваш вопрос\" class=\"subscribe-form-section__text\"></textarea>
    <button type=\"submit\" class=\"subscribe-section__subscribe-button\">Задать вопрос</button>




    </div>


</form>



            </div>
        </div>
        <footer class=\"main-footer\">
            <div class=\"social-block\">
                <p class=\"social-block__title\">
                    Следите за новостями в соцсетях
                </p>
                <div class=\"social-block__icon-items\">
                    <a href=\"#\" class=\"social-block__icon-item\">

                        <svg width=\"36px\" height=\"36px\" viewBox=\"0 0 36 36\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                            <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                            <title>Path</title>
                            <desc>Created with Sketch.</desc>
                            <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                <g id=\"Desktop-HD\" transform=\"translate(-650.000000, -4892.000000)\">
                                    <rect id=\"Rectangle\" x=\"0\" y=\"4824\" width=\"1440\" height=\"140\"></rect>
                                    <g id=\"facebook-2\" transform=\"translate(650.000000, 4892.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
                                        <path d=\"M36,18 C36,8.0578125 27.9421875,0 18,0 C8.0578125,0 0,8.0578125 0,18 C0,27.9421875 8.0578125,36 18,36 C18.1054688,36 18.2109375,36 18.3164062,35.9929687 L18.3164062,21.9867187 L14.4492188,21.9867187 L14.4492188,17.4796875 L18.3164062,17.4796875 L18.3164062,14.1609375 C18.3164062,10.3148437 20.6648437,8.21953125 24.0960937,8.21953125 C25.7414062,8.21953125 27.1546875,8.3390625 27.5625,8.3953125 L27.5625,12.4171875 L25.2,12.4171875 C23.3367187,12.4171875 22.9710937,13.303125 22.9710937,14.6039062 L22.9710937,17.4726562 L27.4359375,17.4726562 L26.8523437,21.9796875 L22.9710937,21.9796875 L22.9710937,35.3039062 C30.4945312,33.1453125 36,26.2195312 36,18 Z\" id=\"Path\"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href=\"#\" class=\"social-block__icon-item\">
                        <svg width=\"36px\" height=\"36px\" viewBox=\"0 0 36 36\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                            <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                            <title>instagram-sketched</title>
                            <desc>Created with Sketch.</desc>
                            <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                <g id=\"Desktop-HD\" transform=\"translate(-702.000000, -4892.000000)\">
                                    <rect id=\"Rectangle\" fill=\"#272727\" x=\"0\" y=\"4824\" width=\"1440\" height=\"140\"></rect>
                                    <g id=\"facebook-2\" transform=\"translate(650.000000, 4892.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
                                        <g id=\"instagram-sketched\" transform=\"translate(52.000000, 0.000000)\">
                                            <path d=\"M21.4453125,18 C21.4453125,19.902832 19.902832,21.4453125 18,21.4453125 C16.097168,21.4453125 14.5546875,19.902832 14.5546875,18 C14.5546875,16.097168 16.097168,14.5546875 18,14.5546875 C19.902832,14.5546875 21.4453125,16.097168 21.4453125,18 Z\" id=\"Path\"></path>
                                            <path d=\"M26.057373,11.9042359 C25.8917541,11.4554443 25.627533,11.0492248 25.2842102,10.7157898 C24.9507752,10.372467 24.5448303,10.1082459 24.0957641,9.94262695 C23.7315674,9.80117796 23.1844482,9.6328125 22.1767273,9.58694456 C21.0866089,9.53723145 20.7597656,9.52651976 18,9.52651976 C15.2399597,9.52651976 14.9131164,9.5369568 13.8232727,9.58666992 C12.8155518,9.6328125 12.268158,9.80117796 11.9042359,9.94262695 C11.4551697,10.1082459 11.0489502,10.372467 10.7157898,10.7157898 C10.372467,11.0492248 10.1082459,11.4551697 9.94235231,11.9042359 C9.80090332,12.2684326 9.63253786,12.8158264 9.58666992,13.8235473 C9.5369568,14.9133911 9.52624512,15.2402344 9.52624512,18.0002746 C9.52624512,20.7600403 9.5369568,21.0868836 9.58666992,22.177002 C9.63253786,23.1847229 9.80090332,23.731842 9.94235231,24.0960388 C10.1082459,24.545105 10.3721924,24.9510498 10.7155152,25.2844848 C11.0489502,25.6278076 11.454895,25.8920288 11.9039612,26.0576477 C12.268158,26.1993713 12.8155518,26.3677368 13.8232727,26.4136047 C14.9131164,26.4633179 15.2396851,26.4737549 17.9997254,26.4737549 C20.7600403,26.4737549 21.0868836,26.4633179 22.1764527,26.4136047 C23.1841736,26.3677368 23.7315674,26.1993713 24.0957641,26.0576477 C24.9971924,25.7099304 25.7096558,24.997467 26.057373,24.0960388 C26.198822,23.731842 26.3671875,23.1847229 26.4133301,22.177002 C26.4630432,21.0868836 26.4734802,20.7600403 26.4734802,18.0002746 C26.4734802,15.2402344 26.4630432,14.9133911 26.4133301,13.8235473 C26.3674621,12.8158264 26.1990967,12.2684326 26.057373,11.9042359 L26.057373,11.9042359 Z M18,23.3074951 C15.068573,23.3074951 12.6922302,20.931427 12.6922302,18 C12.6922302,15.068573 15.068573,12.6925049 18,12.6925049 C20.9311523,12.6925049 23.3074951,15.068573 23.3074951,18 C23.3074951,20.931427 20.9311523,23.3074951 18,23.3074951 Z M23.517334,13.7230225 C22.8323364,13.7230225 22.2769775,13.1676636 22.2769775,12.482666 C22.2769775,11.7976684 22.8323364,11.2423096 23.517334,11.2423096 C24.2023316,11.2423096 24.7576904,11.7976684 24.7576904,12.482666 C24.7574158,13.1676636 24.2023316,13.7230225 23.517334,13.7230225 Z\" id=\"Shape\"></path>
                                            <path d=\"M18,0 C8.0603943,0 0,8.0603943 0,18 C0,27.9396057 8.0603943,36 18,36 C27.9396057,36 36,27.9396057 36,18 C36,8.0603943 27.9396057,0 18,0 Z M28.2735901,22.261322 C28.2236023,23.3616028 28.048645,24.112793 27.7932129,24.7703247 C27.2562561,26.1587219 26.1587219,27.2562561 24.7703247,27.7932129 C24.1130676,28.048645 23.3616028,28.2233277 22.2615967,28.2735901 C21.1593933,28.3238525 20.8072815,28.3359375 18.0002746,28.3359375 C15.1929932,28.3359375 14.841156,28.3238525 13.738678,28.2735901 C12.6386719,28.2233277 11.887207,28.048645 11.22995,27.7932129 C10.5400086,27.5336609 9.91543577,27.1268921 9.39907835,26.6009216 C8.87338259,26.0848389 8.46661373,25.4599914 8.20706175,24.7703247 C7.95162966,24.1130676 7.77667233,23.3616028 7.72668457,22.2615967 C7.67587282,21.1591187 7.6640625,20.8070068 7.6640625,18 C7.6640625,15.1929932 7.67587282,14.8408813 7.72640993,13.738678 C7.77639769,12.6383972 7.9510803,11.887207 8.20651247,11.2296753 C8.46606445,10.5400086 8.87310788,9.91516113 9.39907835,9.39907835 C9.91516113,8.87310788 10.5400086,8.46633909 11.2296753,8.20678711 C11.887207,7.95135502 12.6383972,7.77667233 13.738678,7.72640993 C14.8408813,7.67614746 15.1929932,7.6640625 18,7.6640625 C20.8070068,7.6640625 21.1591187,7.67614746 22.261322,7.72668457 C23.3616028,7.77667233 24.112793,7.95135502 24.7703247,8.20651247 C25.4599914,8.46606445 26.0848389,8.87310788 26.6011963,9.39907835 C27.1268921,9.91543577 27.5339355,10.5400086 27.7932129,11.2296753 C28.0489197,11.887207 28.2236023,12.6383972 28.2738648,13.738678 C28.3241272,14.8408813 28.3359375,15.1929932 28.3359375,18 C28.3359375,20.8070068 28.3241272,21.1591187 28.2735901,22.261322 L28.2735901,22.261322 Z\" id=\"Shape\"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href=\"#\" class=\"social-block__icon-item\">
                        <svg width=\"36px\" height=\"36px\" viewBox=\"0 0 36 36\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                            <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                            <title>youtube-2</title>
                            <desc>Created with Sketch.</desc>
                            <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                <g id=\"Desktop-HD\" transform=\"translate(-754.000000, -4892.000000)\">
                                    <rect id=\"Rectangle\" fill=\"#272727\" x=\"0\" y=\"4824\" width=\"1440\" height=\"140\"></rect>
                                    <g id=\"facebook-2\" transform=\"translate(650.000000, 4892.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
                                        <g id=\"youtube-2\" transform=\"translate(104.000000, 0.000000)\">
                                            <polygon id=\"Path\" points=\"15.7579651 21.3722535 21.6131287 18 15.7579651 14.6277465\"></polygon>
                                            <path d=\"M18,0 C8.0603943,0 0,8.0603943 0,18 C0,27.9396057 8.0603943,36 18,36 C27.9396057,36 36,27.9396057 36,18 C36,8.0603943 27.9396057,0 18,0 Z M29.2473502,18.0184021 C29.2473502,18.0184021 29.2473502,21.6688843 28.7841797,23.4291687 C28.5246277,24.3926697 27.7649231,25.1523743 26.8014221,25.4116516 C25.0411377,25.875 18,25.875 18,25.875 C18,25.875 10.9772644,25.875 9.1985779,25.3932495 C8.23507692,25.1339722 7.4753723,24.3739929 7.21582031,23.410492 C6.75247191,21.6688843 6.75247191,18 6.75247191,18 C6.75247191,18 6.75247191,14.3497925 7.21582031,12.589508 C7.47509766,11.6260071 8.25347897,10.8476258 9.1985779,10.5883484 C10.9588623,10.125 18,10.125 18,10.125 C18,10.125 25.0411377,10.125 26.8014221,10.6067505 C27.7649231,10.8660278 28.5246277,11.6260071 28.7841797,12.589508 C29.2659301,14.3497925 29.2473502,18.0184021 29.2473502,18.0184021 L29.2473502,18.0184021 Z\" id=\"Shape\"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </footer>

        <div class=\"modals\">
        <div class=\"modals__cart__close-button\" onclick=\"openCartDrawer()\"></div>
            <div class=\"modals__cart\">


                <div class=\"modals__cart__section\">
                    <div class=\"modals__cart__section__header\">
                        <h3 class=\"modals__cart__section__title\">Кошик</h3>
                        <button class=\"modals__cart__section__header__close-btn\" onclick=\"openCartDrawer()\">

                            <svg width=\"21px\" height=\"21px\" viewBox=\"0 0 21 21\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                                <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                                <title>Path</title>
                                <desc>Created with Sketch.</desc>
                                <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                    <g id=\"close\" fill=\"#252525\" fill-rule=\"nonzero\">
                                        <path d=\"M12.4239142,10.5098098 L20.6008921,2.33258285 C21.1330359,1.80068813 21.1330359,0.940687897 20.6008921,0.408793182 C20.0689974,-0.123101533 19.2089971,-0.123101533 18.6771024,0.408793182 L10.4998754,8.58602023 L2.3228975,0.408793182 C1.79075367,-0.123101533 0.931002552,-0.123101533 0.399107836,0.408793182 C-0.133035994,0.940687897 -0.133035994,1.80068813 0.399107836,2.33258285 L8.57608577,10.5098098 L0.399107836,18.6870369 C-0.133035994,19.2189316 -0.133035994,20.0789318 0.399107836,20.6108266 C0.664183228,20.8761511 1.01271752,21.0094362 1.3610027,21.0094362 C1.70928782,21.0094362 2.057573,20.8761511 2.3228975,20.6108266 L10.4998754,12.4335995 L18.6771024,20.6108266 C18.9424269,20.8761511 19.2907121,21.0094362 19.6389973,21.0094362 C19.9872824,21.0094362 20.3355675,20.8761511 20.6008921,20.6108266 C21.1330359,20.0789318 21.1330359,19.2189316 20.6008921,18.6870369 L12.4239142,10.5098098 Z\" id=\"Path\"></path>
                                    </g>
                                </g>
                            </svg>

                        </button>
                    </div>
                    <div class=\"modals__cart__section__product-items\"><div class=\"modals__cart__section__empty-cart\">В кошику ще нема товарiв :(</div></div>
                    <div class=\"modals__cart__section__footer\">
                        <h3 class=\"modals__cart__section__title\">Всього:&nbsp;<div class=\"cart_total_count\"></div></h3>
                        <button class=\"order-button\" onclick=\"openOrdering()\">Оформити замовлення</button>
                    </div>
                </div>
                <div class=\"modals__cart-order__section\">
                    <div class=\"modals__cart__section__header --drawer-ordering\">
                        <h3 class=\"modals__cart__section__title\">Оформлення замовлення</h3>
                        <button class=\"modals__cart__section__header__close-btn\" onclick=\"openCartDrawer()\">

                            <svg width=\"21px\" height=\"21px\" viewBox=\"0 0 21 21\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                                <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                                <title>Path</title>
                                <desc>Created with Sketch.</desc>
                                <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                    <g id=\"close\" fill=\"#252525\" fill-rule=\"nonzero\">
                                        <path d=\"M12.4239142,10.5098098 L20.6008921,2.33258285 C21.1330359,1.80068813 21.1330359,0.940687897 20.6008921,0.408793182 C20.0689974,-0.123101533 19.2089971,-0.123101533 18.6771024,0.408793182 L10.4998754,8.58602023 L2.3228975,0.408793182 C1.79075367,-0.123101533 0.931002552,-0.123101533 0.399107836,0.408793182 C-0.133035994,0.940687897 -0.133035994,1.80068813 0.399107836,2.33258285 L8.57608577,10.5098098 L0.399107836,18.6870369 C-0.133035994,19.2189316 -0.133035994,20.0789318 0.399107836,20.6108266 C0.664183228,20.8761511 1.01271752,21.0094362 1.3610027,21.0094362 C1.70928782,21.0094362 2.057573,20.8761511 2.3228975,20.6108266 L10.4998754,12.4335995 L18.6771024,20.6108266 C18.9424269,20.8761511 19.2907121,21.0094362 19.6389973,21.0094362 C19.9872824,21.0094362 20.3355675,20.8761511 20.6008921,20.6108266 C21.1330359,20.0789318 21.1330359,19.2189316 20.6008921,18.6870369 L12.4239142,10.5098098 Z\" id=\"Path\"></path>
                                    </g>
                                </g>
                            </svg>

                        </button>
                    </div>



                    <form class=\"ordering-form\">
                        <div class=\"form-fields\">
                            <h4 class=\"form-fields__title\">Персональные данные</h4>
                            <div class=\"field-set\">
                                <div class=\"form-field first-name\">
                                    <div class=\"label-field__ordering-form\">Имя:</div>
                                    <input class=\"ordering-field\" type=\"text\" name=\"first_name\" required>
                                </div>
                                <div class=\"form-field second-name\">
                                    <div class=\"label-field__ordering-form\">Фамилия:</div>
                                    <input class=\"ordering-field\" type=\"name\" name=\"last_name\" required>
                                </div>
                                <div class=\"form-field email\">
                                    <div class=\"label-field__ordering-form\">Email:</div>
                                    <input class=\"ordering-field\" type=\"email\" name=\"order_email\">
                                </div>
                                <div class=\"form-field phone\">
                                    <div class=\"label-field__ordering-form\">Телефон:</div>
                                    <input class=\"ordering-field\" type=\"tel\" name=\"phone\" required>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-fields\">
                            <h4 class=\"form-fields__title\">Доставка и оплата</h4>
                            <div class=\"field-set\">
                                <div class=\"form-field first-name\">
                                    <div class=\"label-field__ordering-form\">Город:</div>
                                    <input type=\"text\" name=\"city\" list=\"cityList\" class=\"ordering-field cityList\" required>
                                    <datalist id=\"cityList\">

                                    </datalist>
                                </div>
                                <div class=\"form-field radio-delivery-fields\">
                                    <div class=\"label-field__ordering-form\">Тип доставки:</div>
                                    <div class=\"input-fields\">
                                        <div class=\"radio__input-field\">
                                            <input class=\"ordering-field radio-delivery-field\" name=\"delivery\" value=\"novaposhta\" type=\"radio\" id=\"novaposhta\"><label class=\"label__form-field\" for=\"novaposhta\" checked>Нова Пошта</label>
                                        </div>
                                        <div class=\"radio__input-field delivery-pickpoint\">
                                            <input class=\"ordering-field radio-delivery-field\" name=\"delivery\" value=\"pickpoint\" type=\"radio\" id=\"pickpoint\"><label class=\"label__form-field\" for=\"pickpoint\">Самовывоз</label>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"form-field np-department\">
                                    <div class=\"label-field__ordering-form\">Отделение:</div>
                                    <input type=\"text\" name=\"department\" list=\"depList\" class=\"ordering-field depList\" required>
                                    <datalist id=\"depList\">

                                    </datalist>
                                </div>
                            </div>
                        </div>
                        <div class=\"modals__order__section__footer\">
                            <h3 class=\"modals__cart__section__title\">Всего:&nbsp;<div class=\"order_total_count\"></div></h3>
                            <button class=\"order-button\" onclick=\"ordering()\">Оформить заказ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>", "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/site/footer.htm", "");
    }
}
