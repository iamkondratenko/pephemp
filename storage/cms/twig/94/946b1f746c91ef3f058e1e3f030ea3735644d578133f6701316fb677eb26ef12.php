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

/* /Users/alexkondratenko/git/pep-hemp/themes/demo/partials/blog/blog-post.htm */
class __TwigTemplate_82af211904eabe24e4713ef5d5fd56183fb5e8e68f148bba33c6b9fa5f6f93cd extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "record", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "displayColumn", [], "any", false, false, false, 4);
        // line 5
        echo "    ";
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "notFoundMessage", [], "any", false, false, false, 5);
        // line 6
        echo "    
    ";
        // line 7
        if (($context["record"] ?? null)) {
            // line 8
            echo "        
        <div class=\"blog  --container\">
        <div class=\"blog-item__header\">
            <h1 class=\"blog__title\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
            echo "</h1>
        </div>
        <div class=\"blog__item__img-holder\">
           <img class=\"blog__item__img\" src=\"";
            // line 14
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "picture", [], "any", false, false, false, 14));
            echo "\" alt=\"\">
        </div>
        <div class=\"blog__item-content\">
            <p>
                ";
            // line 18
            echo call_user_func_array($this->env->getFilter('md')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "text", [], "any", false, false, false, 18)]);
            echo "
            </p>
        </div>

       ";
            // line 22
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/blog"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 23
            echo "
    </div>
        
    ";
        } else {
            // line 27
            echo "        ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
    ";
        }
        // line 29
        echo "
    

</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/pep-hemp/themes/demo/partials/blog/blog-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 29,  89 => 27,  83 => 23,  79 => 22,  72 => 18,  65 => 14,  59 => 11,  54 => 8,  52 => 7,  49 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"App\">

    {% set record = blogPost.record %}
    {% set displayColumn = blogPost.displayColumn %}
    {% set notFoundMessage = blogPost.notFoundMessage %}
    
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
                {{ record.text|md }}
            </p>
        </div>

       {% partial 'blog/blog' %}

    </div>
        
    {% else %}
        {{ notFoundMessage }}
    {% endif %}

    

</div>", "/Users/alexkondratenko/git/pep-hemp/themes/demo/partials/blog/blog-post.htm", "");
    }
}
