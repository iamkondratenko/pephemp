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

/* /Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/pages/blog.htm */
class __TwigTemplate_766b6dd6014bb9010bbe7b05d874f3abff57be970438d13ec481a68b828e1d7d extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('title'        );
        // line 2
        echo "    ";
        echo '<!-- X_OCTOBER_DEFAULT_BLOCK_CONTENT -->';
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 2), "title", [], "any", false, false, false, 2), "html", null, true);
        echo "
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 4
        echo "
<div id=\"App\">
    ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/blog"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  52 => 6,  48 => 4,  46 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put title %}
    {% default %} {{ this.page.title }}
{% endput %}

<div id=\"App\">
    {% partial 'blog/blog' %}
</div>", "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/pages/blog.htm", "");
    }
}
