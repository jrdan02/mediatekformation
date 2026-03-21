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
class __TwigTemplate_2c3e0c3c96cb8a99b30913306e440c3c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_admin.formation.from.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_admin.formation.from.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "_admin.formation.from.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container mt-4\" decreption=\"details formation\">
    

    ";
        // line 10
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 10, $this->source); })()), 'form_start');
        yield "
    <div class=\"row mb-3\">
        <div class=\"col-md-3\">
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 13, $this->source); })()), "publishedAt", [], "any", false, false, false, 13), 'row');
        yield " <br>
        </div>
        <div class=\"col-md-3\">
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), 'row');
        yield "<br>
        </div>
        <div class=\"col-md-3\">
            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), 'row');
        yield "<br>
        </div>
        <div class=\"col-md-3\">
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 22, $this->source); })()), "videoId", [], "any", false, false, false, 22), 'row');
        yield "<br>
        </div>
    </div>
    <div class=\"row mb-3\">
        <div class=\"col-md-6\">
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 27, $this->source); })()), "playlist", [], "any", false, false, false, 27), 'row');
        yield "<br>
        </div>
        <div class=\"col-md-6\">
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 30, $this->source); })()), "categories", [], "any", false, false, false, 30), 'row');
        yield "<br>
        </div>
    </div>  

    ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 34, $this->source); })()), 'form_end');
        yield "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  140 => 34,  133 => 30,  127 => 27,  119 => 22,  113 => 19,  107 => 16,  101 => 13,  94 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
<div class=\"container mt-4\" decreption=\"details formation\">
    

    {# Formulaire de création ou modification #}
    {{ form_start(formformation) }}
    <div class=\"row mb-3\">
        <div class=\"col-md-3\">
            {{ form_row(formformation.publishedAt ) }} <br>
        </div>
        <div class=\"col-md-3\">
            {{ form_row(formformation.title) }}<br>
        </div>
        <div class=\"col-md-3\">
            {{ form_row(formformation.description) }}<br>
        </div>
        <div class=\"col-md-3\">
            {{ form_row(formformation.videoId) }}<br>
        </div>
    </div>
    <div class=\"row mb-3\">
        <div class=\"col-md-6\">
            {{ form_row(formformation.playlist) }}<br>
        </div>
        <div class=\"col-md-6\">
            {{ form_row(formformation.categories) }}<br>
        </div>
    </div>  

    {{ form_end(formformation) }}
</div>
{% endblock %}", "_admin.formation.from.html.twig", "/opt/homebrew/var/www/mediatekformation/mediatekformation/templates/_admin.formation.from.html.twig");
    }
}
