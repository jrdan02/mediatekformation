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

/* categories/index.html.twig */
class __TwigTemplate_10b586a1413163b9f1ddc38ffa6476ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/index.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "categories/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<div class=\"text-center mt-3\">
    <h1>Gestion des catégories</h1>

    <table class=\"table table-striped\">
        <thead>
        </thead>
        <tbody>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 12
            yield "                <tr class=\"align-middle\">
                    <td class=\"text-start\">
                        <h5 class=\"text-info\">
                            ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 15), "html", null, true);
            yield "
                        </h5>
                    </td>
                    <td class=\"text-start\">
                        <a href=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categorie.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-danger\">
                            Supprimer
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "        </tbody>
    </table>
    <div class=\"card\">

        <h3><i class=\"bi ni-plus-circle\"><i/> Ajouter les categorie</h3>
         <form class=\"form-inline\" method=\"POST\" action=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categories.add");
        yield "\">
         <div class=\"form-group mr-1 mb-2\">
                <input type=\"text\" class=\"sm\" name=\"nom\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("form_ajout_categorie"), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">Ajouter</button>
            </div>
       


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
        return "categories/index.html.twig";
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
        return array (  120 => 34,  114 => 31,  107 => 26,  94 => 19,  87 => 15,  82 => 12,  78 => 11,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseadmin.html.twig\" %}

{% block body %}
<div class=\"text-center mt-3\">
    <h1>Gestion des catégories</h1>

    <table class=\"table table-striped\">
        <thead>
        </thead>
        <tbody>
            {% for categorie in categories %}
                <tr class=\"align-middle\">
                    <td class=\"text-start\">
                        <h5 class=\"text-info\">
                            {{ categorie.name }}
                        </h5>
                    </td>
                    <td class=\"text-start\">
                        <a href=\"{{ path('admin.categorie.suppr', {'id': categorie.id}) }}\" 
                           class=\"btn btn-danger\">
                            Supprimer
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <div class=\"card\">

        <h3><i class=\"bi ni-plus-circle\"><i/> Ajouter les categorie</h3>
         <form class=\"form-inline\" method=\"POST\" action=\"{{ path('admin.categories.add') }}\">
         <div class=\"form-group mr-1 mb-2\">
                <input type=\"text\" class=\"sm\" name=\"nom\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('form_ajout_categorie') }}\">
                <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">Ajouter</button>
            </div>
       


</div>
{% endblock %}", "categories/index.html.twig", "/opt/homebrew/var/www/mediatekformation/mediatekformation/templates/categories/index.html.twig");
    }
}
