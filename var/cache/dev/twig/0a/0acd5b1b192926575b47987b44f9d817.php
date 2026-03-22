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

/* _admin.playlist.from.html.twig */
class __TwigTemplate_ef9b0dfcc65aaed42088b1510f2b53f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_admin.playlist.from.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_admin.playlist.from.html.twig"));

        // line 1
        yield "

<div class=\"container mt-4\">
    ";
        // line 4
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 4, $this->source); })()), 'form_start');
        yield "
    <div class=\"row mt-3\">
        <div class=\"col-md-3\">
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), 'row');
        yield "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 10, $this->source); })()), "description", [], "any", false, false, false, 10), 'row');
        yield "
        </div>
    </div>
    ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 13, $this->source); })()), 'form_end');
        yield "
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_admin.playlist.from.html.twig";
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
        return array (  67 => 13,  61 => 10,  55 => 7,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<div class=\"container mt-4\">
    {{ form_start(formplaylist) }}
    <div class=\"row mt-3\">
        <div class=\"col-md-3\">
            {{ form_row(formplaylist.name) }}
        </div>
        <div class=\"col-md-3\">
            {{ form_row(formplaylist.description) }}
        </div>
    </div>
    {{ form_end(formplaylist) }}
</div>", "_admin.playlist.from.html.twig", "/opt/homebrew/var/www/mediatekformation/mediatekformation/templates/_admin.playlist.from.html.twig");
    }
}
