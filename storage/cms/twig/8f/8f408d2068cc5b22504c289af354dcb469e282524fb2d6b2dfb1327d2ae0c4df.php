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

/* /Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/pages/thankyoupage.htm */
class __TwigTemplate_6a3c4d4d40128db946b6b1116eab9012c529ba4b4773eaceb4ed425682d38bf3 extends \Twig\Template
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
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("thankyou"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/pages/thankyoupage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"App\">
{% partial 'thankyou'%}
</div>", "/Users/alexkondratenko/git/pep-hemp/themes/pep-hemp/pages/thankyoupage.htm", "");
    }
}
