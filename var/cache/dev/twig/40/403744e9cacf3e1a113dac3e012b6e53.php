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

/* admin/categories/index.html.twig */
class __TwigTemplate_1f2f22a4675a26f1ce8d24b6eb9ce208 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories/index.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/categories/index.html.twig", 1);
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

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 8
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 9
                yield "            <div class=\"alert alert-warning\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "
    <table class=\"table table-striped\">
        <thead></thead>
        <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 17
            yield "                <tr class=\"align-middle\">
                    <td class=\"text-start\">
                        <h5 class=\"text-info\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 19), "html", null, true);
            yield "</h5>
                    </td>
                    <td class=\"text-start\">
                        <a href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categorie.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 22)]), "html", null, true);
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
        // line 29
        yield "        </tbody>
    </table>

    <h3><i class=\"bi bi-plus-circle\"></i> Ajouter une catégorie</h3>
    <form class=\"form-inline\" method=\"POST\" action=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categories.add");
        yield "\">
        <div class=\"form-group mr-1 mb-2\">
            <input type=\"text\" class=\"form-control\" name=\"nom\" required>
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("categorie"), "html", null, true);
        yield "\">
            <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">Ajouter</button>
        </div>
    </form>

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
        return "admin/categories/index.html.twig";
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
        return array (  143 => 36,  137 => 33,  131 => 29,  118 => 22,  112 => 19,  108 => 17,  104 => 16,  98 => 12,  92 => 11,  83 => 9,  78 => 8,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseadmin.html.twig\" %}

{% block body %}
<div class=\"text-center mt-3\">
    <h1>Gestion des catégories</h1>

    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-warning\">{{ message }}</div>
        {% endfor %}
    {% endfor %}

    <table class=\"table table-striped\">
        <thead></thead>
        <tbody>
            {% for categorie in categories %}
                <tr class=\"align-middle\">
                    <td class=\"text-start\">
                        <h5 class=\"text-info\">{{ categorie.name }}</h5>
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

    <h3><i class=\"bi bi-plus-circle\"></i> Ajouter une catégorie</h3>
    <form class=\"form-inline\" method=\"POST\" action=\"{{ path('admin.categories.add') }}\">
        <div class=\"form-group mr-1 mb-2\">
            <input type=\"text\" class=\"form-control\" name=\"nom\" required>
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('categorie') }}\">
            <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">Ajouter</button>
        </div>
    </form>

</div>
{% endblock %}", "admin/categories/index.html.twig", "/opt/homebrew/var/www/mediatekformation/mediatekformation/templates/admin/categories/index.html.twig");
    }
}
