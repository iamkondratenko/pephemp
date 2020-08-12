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

/* /Users/alexkondratenko/git/pep-hemp/themes/demo/partials/blog/blog.htm */
class __TwigTemplate_9bd34f38a4e6af3a86673d3b613b6cc481fd06ce4aa93b9333b891b6a0816a6a extends \Twig\Template
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
        echo "<div class=\"blog  --container\">
            <h2 class=\"blog__title\">Статтi</h2>
            
            
            
            
            
            ";
        // line 8
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["blogPostList"] ?? null), "records", [], "any", false, false, false, 8);
        // line 9
        echo "            ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["blogPostList"] ?? null), "displayColumn", [], "any", false, false, false, 9);
        // line 10
        echo "            ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["blogPostList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 10);
        // line 11
        echo "            ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["blogPostList"] ?? null), "detailsPage", [], "any", false, false, false, 11);
        // line 12
        echo "            ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["blogPostList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 12);
        // line 13
        echo "            ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["blogPostList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 13);
        // line 14
        echo "
            <div class=\"blog__items\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 17
            echo "                    
                        ";
            // line 19
            echo "                        ";
            ob_start();
            // line 20
            echo "                            
                        <div class=\"blog__item\">
                    <div class=\"blog__item__img-holder\">
                        <a href=\"/blog/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 23), "html", null, true);
            echo "\"><img class=\"blog__item__img\" src=\"";
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "picture", [], "any", false, false, false, 23));
            echo "\" alt=\"\"></a>
                    </div>
                    <h4 class=\"blog__item__title\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo "</h4>
                    <p class=\"blog__item__description\">
                        ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 27), "html", null, true);
            echo "
                    </p>
                    <a href=\"/blog/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 29), "html", null, true);
            echo "\" class=\"blog__item__link\">Читати далi&nbsp;&nbsp;<span>

                        <svg width=\"7px\" height=\"12px\" viewBox=\"0 0 7 12\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                            <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                            <title>Path</title>
                            <desc>Created with Sketch.</desc>
                            <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                <g id=\"Desktop-HD\" transform=\"translate(-195.000000, -4300.000000)\">
                                    <g id=\"Group-5\" transform=\"translate(80.000000, 3720.000000)\">
                                        <g id=\"Group-6\" transform=\"translate(0.000000, 100.000000)\" font-family=\"Montserrat-Bold, Montserrat\" font-size=\"18\" font-weight=\"bold\" line-spacing=\"32\">
                                            <text id=\"Олія-конопляна-догля\">
                                                <tspan x=\"1\" y=\"274\" fill=\"#272727\">Олія конопляна догляд за руками </tspan>
                                                <tspan x=\"1\" y=\"306\" fill=\"#272727\">і нігтями</tspan>
                                                <tspan x=\"1\" y=\"348\" font-family=\"Montserrat-Medium, Montserrat\" font-size=\"16\" font-weight=\"400\" fill=\"#272727\">Конопляна олія від природи збагачена </tspan>
                                                <tspan x=\"1\" y=\"380\" font-family=\"Montserrat-Medium, Montserrat\" font-size=\"16\" font-weight=\"400\" fill=\"#272727\">величезною кількістю вітамінів та </tspan>
                                                <tspan x=\"1\" y=\"412\" font-family=\"Montserrat-Medium, Montserrat\" font-size=\"16\" font-weight=\"400\" fill=\"#272727\">мікроелементів. Їх вплив на шкіру важко </tspan>
                                                <tspan x=\"1\" y=\"444\" font-family=\"Montserrat-Medium, Montserrat\" font-size=\"16\" font-weight=\"400\" fill=\"#272727\">переоцінити! </tspan>
                                                <tspan x=\"1\" y=\"486\" font-size=\"16\" fill=\"#EF756E\">Читати далi</tspan>
                                            </text>
                                        </g>
                                        <path d=\"M121.670962,585.53176 L116.476816,580.191706 C116.356682,580.068097 116.196313,580 116.025316,580 C115.85432,580 115.693951,580.068097 115.573817,580.191706 L115.191304,580.584873 C114.9424,580.841066 114.9424,581.257453 115.191304,581.513256 L119.552955,585.997512 L115.186464,590.486744 C115.06633,590.610353 115,590.775132 115,590.950838 C115,591.126739 115.06633,591.291518 115.186464,591.415225 L115.568977,591.808294 C115.689206,591.931903 115.84948,592 116.020477,592 C116.191474,592 116.351842,591.931903 116.471977,591.808294 L121.670962,586.463362 C121.791381,586.339363 121.857521,586.173804 121.857143,585.997805 C121.857521,585.821124 121.791381,585.655661 121.670962,585.53176 Z\" id=\"Path\" fill=\"#F17570\" fill-rule=\"nonzero\"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span></a>
                </div>
                            
                        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 58
            echo "                    
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "                    <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </div>

            
                

            </div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/pep-hemp/themes/demo/partials/blog/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 62,  138 => 60,  132 => 58,  100 => 29,  95 => 27,  90 => 25,  83 => 23,  78 => 20,  75 => 19,  72 => 17,  67 => 16,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"blog  --container\">
            <h2 class=\"blog__title\">Статтi</h2>
            
            
            
            
            
            {% set records = blogPostList.records %}
            {% set displayColumn = blogPostList.displayColumn %}
            {% set noRecordsMessage = blogPostList.noRecordsMessage %}
            {% set detailsPage = blogPostList.detailsPage %}
            {% set detailsKeyColumn = blogPostList.detailsKeyColumn %}
            {% set detailsUrlParameter = blogPostList.detailsUrlParameter %}

            <div class=\"blog__items\">
                {% for record in records %}
                    
                        {# Use spaceless tag to remove spaces inside the A tag. #}
                        {% spaceless %}
                            
                        <div class=\"blog__item\">
                    <div class=\"blog__item__img-holder\">
                        <a href=\"/blog/{{ record.slug }}\"><img class=\"blog__item__img\" src=\"{{ record.picture|media }}\" alt=\"\"></a>
                    </div>
                    <h4 class=\"blog__item__title\">{{ record.title }}</h4>
                    <p class=\"blog__item__description\">
                        {{ record.description }}
                    </p>
                    <a href=\"/blog/{{ record.slug }}\" class=\"blog__item__link\">Читати далi&nbsp;&nbsp;<span>

                        <svg width=\"7px\" height=\"12px\" viewBox=\"0 0 7 12\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                            <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->
                            <title>Path</title>
                            <desc>Created with Sketch.</desc>
                            <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                <g id=\"Desktop-HD\" transform=\"translate(-195.000000, -4300.000000)\">
                                    <g id=\"Group-5\" transform=\"translate(80.000000, 3720.000000)\">
                                        <g id=\"Group-6\" transform=\"translate(0.000000, 100.000000)\" font-family=\"Montserrat-Bold, Montserrat\" font-size=\"18\" font-weight=\"bold\" line-spacing=\"32\">
                                            <text id=\"Олія-конопляна-догля\">
                                                <tspan x=\"1\" y=\"274\" fill=\"#272727\">Олія конопляна догляд за руками </tspan>
                                                <tspan x=\"1\" y=\"306\" fill=\"#272727\">і нігтями</tspan>
                                                <tspan x=\"1\" y=\"348\" font-family=\"Montserrat-Medium, Montserrat\" font-size=\"16\" font-weight=\"400\" fill=\"#272727\">Конопляна олія від природи збагачена </tspan>
                                                <tspan x=\"1\" y=\"380\" font-family=\"Montserrat-Medium, Montserrat\" font-size=\"16\" font-weight=\"400\" fill=\"#272727\">величезною кількістю вітамінів та </tspan>
                                                <tspan x=\"1\" y=\"412\" font-family=\"Montserrat-Medium, Montserrat\" font-size=\"16\" font-weight=\"400\" fill=\"#272727\">мікроелементів. Їх вплив на шкіру важко </tspan>
                                                <tspan x=\"1\" y=\"444\" font-family=\"Montserrat-Medium, Montserrat\" font-size=\"16\" font-weight=\"400\" fill=\"#272727\">переоцінити! </tspan>
                                                <tspan x=\"1\" y=\"486\" font-size=\"16\" fill=\"#EF756E\">Читати далi</tspan>
                                            </text>
                                        </g>
                                        <path d=\"M121.670962,585.53176 L116.476816,580.191706 C116.356682,580.068097 116.196313,580 116.025316,580 C115.85432,580 115.693951,580.068097 115.573817,580.191706 L115.191304,580.584873 C114.9424,580.841066 114.9424,581.257453 115.191304,581.513256 L119.552955,585.997512 L115.186464,590.486744 C115.06633,590.610353 115,590.775132 115,590.950838 C115,591.126739 115.06633,591.291518 115.186464,591.415225 L115.568977,591.808294 C115.689206,591.931903 115.84948,592 116.020477,592 C116.191474,592 116.351842,591.931903 116.471977,591.808294 L121.670962,586.463362 C121.791381,586.339363 121.857521,586.173804 121.857143,585.997805 C121.857521,585.821124 121.791381,585.655661 121.670962,585.53176 Z\" id=\"Path\" fill=\"#F17570\" fill-rule=\"nonzero\"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span></a>
                </div>
                            
                        {% endspaceless %}
                    
                {% else %}
                    <li class=\"no-data\">{{ noRecordsMessage }}</li>
                {% endfor %}
            </div>

            
                

            </div>", "/Users/alexkondratenko/git/pep-hemp/themes/demo/partials/blog/blog.htm", "");
    }
}
