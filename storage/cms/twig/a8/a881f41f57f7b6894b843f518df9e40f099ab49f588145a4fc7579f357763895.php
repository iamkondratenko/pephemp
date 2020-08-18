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

/* /Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/site/static.htm */
class __TwigTemplate_15ba1d277daeff2d92c93873faafd81922d2a0258ac04517329dcae168ce0850 extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["itemPost"] ?? null), "record", [], "any", false, false, false, 7);
        // line 8
        echo "    ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["itemPost"] ?? null), "displayColumn", [], "any", false, false, false, 8);
        // line 9
        echo "    ";
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["itemPost"] ?? null), "notFoundMessage", [], "any", false, false, false, 9);
        // line 10
        echo "    
    ";
        // line 11
        if (($context["record"] ?? null)) {
            // line 12
            echo "        
        <div class=\"blog  --container\">
        <div class=\"blog-item__header\">
            <h1 class=\"blog__title\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</h1>
        </div>
        <div class=\"blog__item__img-holder\">
           <img class=\"blog__item__img\" src=\"";
            // line 18
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "picture", [], "any", false, false, false, 18));
            echo "\" alt=\"\">
        </div>
        <div class=\"blog__item-content\">
            <p>
                ";
            // line 22
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "text", [], "any", false, false, false, 22);
            echo "
            </p>
        </div>

    </div>
        
    ";
        } else {
            // line 29
            echo "        ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
    ";
        }
        // line 31
        echo "
    

</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/site/static.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  96 => 29,  86 => 22,  79 => 18,  73 => 15,  68 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  55 => 7,  52 => 6,  50 => 3,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"App\">

{% put title %}
    {% default %} {{ record.title }}
{% endput %}

    {% set record = itemPost.record %}
    {% set displayColumn = itemPost.displayColumn %}
    {% set notFoundMessage = itemPost.notFoundMessage %}
    
    {% if record %}
        
        <div class=\"blog  --container\">
        <div class=\"blog-item__header\">
            <h1 class=\"blog__title\">{{ record.title }}</h1>
        </div>
        <div class=\"blog__item__img-holder\">
           <img class=\"blog__item__img\" src=\"{{ record.picture|media }}\" alt=\"\">
        </div>
        <div class=\"blog__item-content\">
            <p>
                {{ record.text|raw }}
            </p>
        </div>

    </div>
        
    {% else %}
        {{ notFoundMessage }}
    {% endif %}

    

</div>", "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/partials/site/static.htm", "");
    }
}
