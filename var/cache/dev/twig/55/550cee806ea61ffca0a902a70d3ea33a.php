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

/* admin/playlists/index.html.twig */
class __TwigTemplate_e51dfedd5a36fee73622ea49e6c14a70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/playlists/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/playlists/index.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/playlists/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 5
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                yield "            <div class=\"alert alert-warning\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "<table class=\"table table-striped\">
    <thead>
        <tr>
            <th class=\"text-left align-top\" scope=\"col\">
                playlist<br />
                <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.sort", ["champ" => "name", "ordre" => "ASC"]), "html", null, true);
        yield "\"class=\"btn btn-info btn-sm active\"><</a>
                <a href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.sort", ["champ" => "name", "ordre" => "DESC"]), "html", null, true);
        yield "\"
                   class=\"btn btn-info btn-sm active\">></a>

                <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.findallcontain", ["champ" => "name"]);
        yield "\">
                    <div class=\"form-group mr-1 mb-2\">
                        <input type=\"text\" class=\"sm\" name=\"recherche\" 
                         value=\"";
        // line 21
        if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 21, $this->source); })()))) : ("")) &&  !((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 21, $this->source); })()))) : ("")))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 21, $this->source); })()), "html", null, true);
        }
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_name"), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                    </div>
                </form>
            </th>

            <th class=\"text-left align-top\" scope=\"col\">
                catégories
                <form class=\"form-inline mt-1\" method=\"POST\"
                action=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.findallcontain", ["champ" => "name", "table" => "categories"]), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_name"), "html", null, true);
        yield "\">
                <select class=\"form-select form-select-sm\" name=\"recherche\" onchange=\"this.form.submit()\">
                    <option value=\"\"></option>
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 36
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 36), "html", null, true);
            yield "\"
                            ";
            // line 37
            if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 37, $this->source); })()))) : ("")) && ((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 37, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 37)))) {
                yield " selected ";
            }
            yield ">
                            ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 38), "html", null, true);
            yield "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                </select>
            </form>
            </th>

            <th class=\"text-left align-top\" scope=\"col\">
                Nb Formations<br />
                <button onclick=\"location.href='";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.sort", ["champ" => "nbformations", "ordre" => "ASC"]), "html", null, true);
        yield "'\"
                        class=\"btn btn-info btn-sm\">↑</button>
                <button onclick=\"location.href='";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.sort", ["champ" => "nbformations", "ordre" => "DESC"]), "html", null, true);
        yield "'\"
                        class=\"btn btn-info btn-sm\">↓</button>
            </th>

            <th class=\"text-center align-top\" scope=\"col\">&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 58
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 58, $this->source); })())) > 0)) {
            // line 59
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 59, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 60
                yield "                <tr class=\"align-middle\">

                    <td>
                        <h5 class=\"text-info\">
                            ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 64, $this->source); })()), $context["k"], [], "array", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
                yield "
                        </h5>
                    </td>

                    <td class=\"text-left\">
                        ";
                // line 69
                $context["cats"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 69, $this->source); })()), $context["k"], [], "array", false, false, false, 69), "categoriesplaylist", [], "any", false, false, false, 69);
                // line 70
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 70, $this->source); })())) > 0)) {
                    // line 71
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 71, $this->source); })())) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 72
                        yield "                                &nbsp;";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 72, $this->source); })()), $context["c"], [], "array", false, false, false, 72), "html", null, true);
                        yield "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    yield "                        ";
                }
                // line 75
                yield "                    </td>

                    <td class=\"text-center\">
                        ";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 78, $this->source); })()), $context["k"], [], "array", false, false, false, 78), "formations", [], "any", false, false, false, 78)), "html", null, true);
                yield "
                    </td>

                    <td>
                         <a href=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.add", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 82, $this->source); })()), $context["k"], [], "array", false, false, false, 82), "id", [], "any", false, false, false, 82)]), "html", null, true);
                yield "\"
                           class=\"btn btn-secondary btn-sm\">
                            Ajouter
                        </a>
                        <a href=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 86, $this->source); })()), $context["k"], [], "array", false, false, false, 86), "id", [], "any", false, false, false, 86)]), "html", null, true);
                yield "\"
                           class=\"btn btn-secondary btn-sm\">
                            Modifier
                        </a>

                        <form method=\"post\"
                              action=\"";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 92, $this->source); })()), $context["k"], [], "array", false, false, false, 92), "id", [], "any", false, false, false, 92)]), "html", null, true);
                yield "\" style=\"display:inline-block;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 93, $this->source); })()), $context["k"], [], "array", false, false, false, 93), "id", [], "any", false, false, false, 93))), "html", null, true);
                yield "\">
                            <button class=\"btn btn-danger btn-sm\"
                                    onclick=\"return confirm('Voulez-vous vraiment supprimer cette playlist ?');\">
                                Supprimer
                            </button>
                        </form>
                        <a href
                    </td>

                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            yield "        ";
        }
        // line 105
        yield "    </tbody>
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
        return "admin/playlists/index.html.twig";
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
        return array (  291 => 105,  288 => 104,  271 => 93,  267 => 92,  258 => 86,  251 => 82,  244 => 78,  239 => 75,  236 => 74,  227 => 72,  222 => 71,  219 => 70,  217 => 69,  209 => 64,  203 => 60,  198 => 59,  196 => 58,  184 => 49,  179 => 47,  171 => 41,  162 => 38,  156 => 37,  151 => 36,  147 => 35,  141 => 32,  137 => 31,  125 => 22,  119 => 21,  113 => 18,  107 => 15,  103 => 14,  96 => 9,  90 => 8,  81 => 6,  76 => 5,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseadmin.html.twig\" %}
{% block body %}

    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-warning\">{{ message }}</div>
        {% endfor %}
    {% endfor %}
<table class=\"table table-striped\">
    <thead>
        <tr>
            <th class=\"text-left align-top\" scope=\"col\">
                playlist<br />
                <a href=\"{{ path('admin.playlist.sort', {champ:'name', ordre:'ASC'}) }}\"class=\"btn btn-info btn-sm active\"><</a>
                <a href=\"{{ path('admin.playlist.sort', {champ:'name', ordre:'DESC'}) }}\"
                   class=\"btn btn-info btn-sm active\">></a>

                <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('admin.playlists.findallcontain', {champ:'name'}) }}\">
                    <div class=\"form-group mr-1 mb-2\">
                        <input type=\"text\" class=\"sm\" name=\"recherche\" 
                         value=\"{% if valeur|default and not table|default %}{{ valeur }}{% endif %}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_name') }}\">
                        <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                    </div>
                </form>
            </th>

            <th class=\"text-left align-top\" scope=\"col\">
                catégories
                <form class=\"form-inline mt-1\" method=\"POST\"
                action=\"{{ path('admin.playlists.findallcontain', {champ:'name', table:'categories'}) }}\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_name') }}\">
                <select class=\"form-select form-select-sm\" name=\"recherche\" onchange=\"this.form.submit()\">
                    <option value=\"\"></option>
                    {% for categorie in categories %}
                        <option value=\"{{ categorie.name }}\"
                            {% if valeur|default and valeur == categorie.name %} selected {% endif %}>
                            {{ categorie.name }}
                        </option>
                    {% endfor %}
                </select>
            </form>
            </th>

            <th class=\"text-left align-top\" scope=\"col\">
                Nb Formations<br />
                <button onclick=\"location.href='{{ path('admin.playlist.sort', {champ:'nbformations', ordre:'ASC'}) }}'\"
                        class=\"btn btn-info btn-sm\">↑</button>
                <button onclick=\"location.href='{{ path('admin.playlist.sort', {champ:'nbformations', ordre:'DESC'}) }}'\"
                        class=\"btn btn-info btn-sm\">↓</button>
            </th>

            <th class=\"text-center align-top\" scope=\"col\">&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        {% if playlists|length > 0 %}
            {% for k in 0..playlists|length-1 %}
                <tr class=\"align-middle\">

                    <td>
                        <h5 class=\"text-info\">
                            {{ playlists[k].name }}
                        </h5>
                    </td>

                    <td class=\"text-left\">
                        {% set cats = playlists[k].categoriesplaylist %}
                        {% if cats|length > 0 %}
                            {% for c in 0..cats|length-1 %}
                                &nbsp;{{ cats[c] }}
                            {% endfor %}
                        {% endif %}
                    </td>

                    <td class=\"text-center\">
                        {{ playlists[k].formations|length }}
                    </td>

                    <td>
                         <a href=\"{{ path('admin.playlist.add', {'id': playlists[k].id}) }}\"
                           class=\"btn btn-secondary btn-sm\">
                            Ajouter
                        </a>
                        <a href=\"{{ path('admin.playlist.edit', {'id': playlists[k].id}) }}\"
                           class=\"btn btn-secondary btn-sm\">
                            Modifier
                        </a>

                        <form method=\"post\"
                              action=\"{{ path('admin.playlist.suppr', {'id': playlists[k].id}) }}\" style=\"display:inline-block;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ playlists[k].id) }}\">
                            <button class=\"btn btn-danger btn-sm\"
                                    onclick=\"return confirm('Voulez-vous vraiment supprimer cette playlist ?');\">
                                Supprimer
                            </button>
                        </form>
                        <a href
                    </td>

                </tr>
            {% endfor %}
        {% endif %}
    </tbody>
</table>
{% endblock %}", "admin/playlists/index.html.twig", "/opt/homebrew/var/www/mediatekformation/mediatekformation/templates/admin/playlists/index.html.twig");
    }
}
