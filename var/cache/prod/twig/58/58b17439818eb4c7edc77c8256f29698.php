<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* _admin.formation.from.html.twig */
class __TwigTemplate_e3f3f8955ae481691c06a9d133739fad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "_admin.formation.from.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container mt-4\" decreption=\"details formation\">
    

    ";
        // line 10
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formformation"] ?? null), 'form_start');
        yield "
    <div class=\"row mb-3\">
        <div class=\"col-md-3\">
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formformation"] ?? null), "publishedAt", [], "any", false, false, false, 13), 'row');
        yield " <br>
        </div>
        <div class=\"col-md-3\">
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formformation"] ?? null), "title", [], "any", false, false, false, 16), 'row');
        yield "<br>
        </div>
        <div class=\"col-md-3\">
            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formformation"] ?? null), "description", [], "any", false, false, false, 19), 'row');
        yield "<br>
        </div>
        <div class=\"col-md-3\">
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formformation"] ?? null), "videoId", [], "any", false, false, false, 22), 'row');
        yield "<br>
        </div>
    </div>
    <div class=\"row mb-3\">
        <div class=\"col-md-6\">
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formformation"] ?? null), "playlist", [], "any", false, false, false, 27), 'row');
        yield "<br>
        </div>
        <div class=\"col-md-6\">
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formformation"] ?? null), "categories", [], "any", false, false, false, 30), 'row');
        yield "<br>
        </div>
    </div>  

    ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formformation"] ?? null), 'form_end');
        yield "
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_admin.formation.from.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  110 => 34,  103 => 30,  97 => 27,  89 => 22,  83 => 19,  77 => 16,  71 => 13,  64 => 10,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_admin.formation.from.html.twig", "/opt/homebrew/var/www/mediatekformation/templates/_admin.formation.from.html.twig");
    }
}
