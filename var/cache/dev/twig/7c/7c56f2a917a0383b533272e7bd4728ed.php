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

/* admin/formation/index.html.twig */
class __TwigTemplate_1732bc73ce3caa6e0787d25445bf9bb7 extends Template
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
        // line 2
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation/index.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/formation/index.html.twig", 2);
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
        yield "  <table class=\"table table-striped\">
        <thead>
    <tr>
        <!-- Formation -->
        <th class=\"text-left align-top\" scope=\"col\">
            formation
            <a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.sort", ["champ" => "title", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\"><</a>
            <a href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.sort", ["champ" => "title", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\">></a>
            <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.findAllContain", ["champ" => "title"]);
        yield "\">
                <div class=\"form-group mr-1 mb-2\">
                   <input type=\"text\" name=\"recherche\" value=\"";
        // line 14
        if ((((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 14, $this->source); })()))) : ("")) == "")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 14, $this->source); })()), "")) : ("")), "html", null, true);
        }
        yield "\">
                    <input type=\"hidden\" name=\"champ\" value=\"title\">
                    <input type=\"hidden\" name=\"table\" value=\"\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filter_titre"), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">Filtrer</button>
                </div>
            </form>
        </th>

        <!-- Playlist -->
        <th class=\"text-left align-top\" scope=\"col\">
            playlist
            <a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.sort", ["table" => "playlist", "champ" => "name", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\"><</a>
            <a href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.sort", ["table" => "playlist", "champ" => "name", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\">></a>
            <form action=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.findAllContain", ["champ" => "name", "table" => "playlist"]), "html", null, true);
        yield "\">
                <div class=\"form-group mr-1 mb-2\">
                    <input type=\"text\" class=\"sm\" name=\"recherche\"
                           value=\"";
        // line 31
        if (((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 31, $this->source); })()))) : ("")) && ((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 31, $this->source); })()))) : (""))) && ((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 31, $this->source); })()) == "playlist"))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 31, $this->source); })()), "html", null, true);
        }
        yield "\">
                    <input type=\"hidden\" name=\"champ\" value=\"name\">
                    <input type=\"hidden\" name=\"table\" value=\"playlist\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_name"), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">Filtrer</button>
                </div>
            </form>
        </th>

        <!-- Catégories -->
        <th class=\"text-left align-top\" scope=\"col\">
            catégories
                <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.findAllContain", ["champ" => "name", "table" => "categories"]), "html", null, true);
        yield "\">
                <select class=\"form-select form-select-sm\" name=\"recherche\" onchange=\"this.form.submit()\">
                    <option value=\"\"></option>
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 47
            yield "                        <option 
                            ";
            // line 48
            if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 48, $this->source); })()))) : ("")) && ((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 48, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 48)))) {
                yield " selected ";
            }
            // line 49
            yield "                            value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 49), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 49), "html", null, true);
            yield "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "                </select>
                <input type=\"hidden\" name=\"table\" value=\"categories\">
            </form>
        </th>
        <th class=\"text-center align-top\" scope=\"col\">
                    date
                    <a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.sort", ["champ" => "publishedAt", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" 
                    role=\"button\" aria-pressed=\"true\"><</a>

                    <a href=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.sort", ["champ" => "publishedAt", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\"
                     role=\"button\"  aria-pressed=\"true\">></a>                    
                </th>

    </tr>
</thead>
        <tbody>
            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 69
            yield "                    <tr>
                        
                        <td>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 71), "html", null, true);
            yield "</td>
                        <td>";
            // line 72
            ((CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "playlist", [], "any", false, false, false, 72)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "playlist", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72), "html", null, true)) : (yield ""));
            yield "</td>
                        <td>";
            // line 73
            ((CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "publishedAt", [], "any", false, false, false, 73)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "publishedAt", [], "any", false, false, false, 73), "d/m/Y"), "html", null, true)) : (yield ""));
            yield "</td>
                        <td>
                            ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "categories", [], "any", false, false, false, 75));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 76
                yield "                                <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 76), "html", null, true);
                yield "</span>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 78
                yield "                                <span class=\"text-muted\">Aucune catégorie</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield "                        </td>
                        <td>
                            <form method=\"post\" action=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\" style=\"display:inline-block;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 83))), "html", null, true);
            yield "\">
                            <button class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette formation ?');\">
                            Supprimer</button>
                            </form>
                            <a href=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm\">
                             modifie
                             </a>
                             <form class=\"form-inline mb-3\" method=\"POST\" action=\"";
            // line 90
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.add");
            yield "\">
                            <button type=\"submit\" class=\"btn btn-primary btn-sm\">Ajouter</button>
                              </form>
                             
                             
                            
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "        </tbody>
    </table>
            
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
        return "admin/formation/index.html.twig";
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
        return array (  274 => 99,  259 => 90,  253 => 87,  246 => 83,  242 => 82,  238 => 80,  231 => 78,  223 => 76,  218 => 75,  213 => 73,  209 => 72,  205 => 71,  201 => 69,  197 => 68,  187 => 61,  181 => 58,  173 => 52,  161 => 49,  157 => 48,  154 => 47,  150 => 46,  144 => 43,  132 => 34,  124 => 31,  118 => 28,  114 => 27,  110 => 26,  98 => 17,  90 => 14,  85 => 12,  81 => 11,  77 => 10,  69 => 4,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"baseadmin.html.twig\" %}
{% block body %}
  <table class=\"table table-striped\">
        <thead>
    <tr>
        <!-- Formation -->
        <th class=\"text-left align-top\" scope=\"col\">
            formation
            <a href=\"{{ path('admin.formation.sort', { champ:'title', ordre:'ASC' }) }}\" class=\"btn btn-info btn-sm active\"><</a>
            <a href=\"{{ path('admin.formation.sort', { champ:'title', ordre:'DESC' }) }}\" class=\"btn btn-info btn-sm active\">></a>
            <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('admin.formation.findAllContain', { champ: 'title'}) }}\">
                <div class=\"form-group mr-1 mb-2\">
                   <input type=\"text\" name=\"recherche\" value=\"{% if table|default == '' %}{{ valeur|default('') }}{% endif %}\">
                    <input type=\"hidden\" name=\"champ\" value=\"title\">
                    <input type=\"hidden\" name=\"table\" value=\"\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filter_titre') }}\">
                    <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">Filtrer</button>
                </div>
            </form>
        </th>

        <!-- Playlist -->
        <th class=\"text-left align-top\" scope=\"col\">
            playlist
            <a href=\"{{ path('admin.formation.sort', { table:'playlist', champ:'name', ordre:'ASC' }) }}\" class=\"btn btn-info btn-sm active\"><</a>
            <a href=\"{{ path('admin.formation.sort', { table:'playlist', champ:'name', ordre:'DESC' }) }}\" class=\"btn btn-info btn-sm active\">></a>
            <form action=\"{{ path('admin.formation.findAllContain', { champ: 'name', table: 'playlist' }) }}\">
                <div class=\"form-group mr-1 mb-2\">
                    <input type=\"text\" class=\"sm\" name=\"recherche\"
                           value=\"{% if valeur|default and table|default and table=='playlist' %}{{ valeur }}{% endif %}\">
                    <input type=\"hidden\" name=\"champ\" value=\"name\">
                    <input type=\"hidden\" name=\"table\" value=\"playlist\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_name') }}\">
                    <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">Filtrer</button>
                </div>
            </form>
        </th>

        <!-- Catégories -->
        <th class=\"text-left align-top\" scope=\"col\">
            catégories
                <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('admin.formation.findAllContain', { champ: 'name', table: 'categories' }) }}\">
                <select class=\"form-select form-select-sm\" name=\"recherche\" onchange=\"this.form.submit()\">
                    <option value=\"\"></option>
                    {% for categorie in categories %}
                        <option 
                            {% if valeur|default and valeur==categorie.name %} selected {% endif %}
                            value=\"{{ categorie.name }}\">{{ categorie.name }}
                        </option>
                    {% endfor %}
                </select>
                <input type=\"hidden\" name=\"table\" value=\"categories\">
            </form>
        </th>
        <th class=\"text-center align-top\" scope=\"col\">
                    date
                    <a href=\"{{ path('admin.formation.sort', {champ:'publishedAt', ordre:'ASC'}) }}\" class=\"btn btn-info btn-sm active\" 
                    role=\"button\" aria-pressed=\"true\"><</a>

                    <a href=\"{{ path('admin.formation.sort', {champ:'publishedAt', ordre:'DESC'}) }}\" class=\"btn btn-info btn-sm active\"
                     role=\"button\"  aria-pressed=\"true\">></a>                    
                </th>

    </tr>
</thead>
        <tbody>
            {% for formation in formations %}
                    <tr>
                        
                        <td>{{ formation.title }}</td>
                        <td>{{ formation.playlist ? formation.playlist.name : '' }}</td>
                        <td>{{ formation.publishedAt ? formation.publishedAt|date('d/m/Y') : '' }}</td>
                        <td>
                            {% for cat in formation.categories %}
                                <span class=\"badge bg-secondary\">{{ cat.name }}</span>
                            {% else %}
                                <span class=\"text-muted\">Aucune catégorie</span>
                            {% endfor %}
                        </td>
                        <td>
                            <form method=\"post\" action=\"{{ path('admin.formation.suppr', {'id': formation.id}) }}\" style=\"display:inline-block;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ formation.id) }}\">
                            <button class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette formation ?');\">
                            Supprimer</button>
                            </form>
                            <a href=\"{{ path('admin.formation.edit', {'id': formation.id}) }}\" class=\"btn btn-danger btn-sm\">
                             modifie
                             </a>
                             <form class=\"form-inline mb-3\" method=\"POST\" action=\"{{ path('admin.formation.add') }}\">
                            <button type=\"submit\" class=\"btn btn-primary btn-sm\">Ajouter</button>
                              </form>
                             
                             
                            
                        </td>
                    </tr>
                    {% endfor %}
        </tbody>
    </table>
            
{% endblock %}      ", "admin/formation/index.html.twig", "/opt/homebrew/var/www/mediatekformation/mediatekformation/templates/admin/formation/index.html.twig");
    }
}
