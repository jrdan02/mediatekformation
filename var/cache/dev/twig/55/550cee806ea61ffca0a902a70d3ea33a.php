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
        yield "<table class=\"table table-striped\">
    <thead>
        <tr>
            <th class=\"text-left align-top\" scope=\"col\">
                playlist<br />
                <a href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.sort", ["champ" => "name", "ordre" => "ASC"]), "html", null, true);
        yield "\"class=\"btn btn-info btn-sm active\"><</a>
                <a href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.sort", ["champ" => "name", "ordre" => "DESC"]), "html", null, true);
        yield "\"
                   class=\"btn btn-info btn-sm active\">></a>

                <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.findallcontain", ["champ" => "name"]);
        yield "\">
                    <div class=\"form-group mr-1 mb-2\">
                        <input type=\"text\" class=\"sm\" name=\"recherche\" 
                         value=\"";
        // line 15
        if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 15, $this->source); })()))) : ("")) &&  !((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 15, $this->source); })()))) : ("")))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 15, $this->source); })()), "html", null, true);
        }
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 16
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
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.findallcontain", ["champ" => "name", "table" => "categories"]), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_name"), "html", null, true);
        yield "\">
                <select class=\"form-select form-select-sm\" name=\"recherche\" onchange=\"this.form.submit()\">
                    <option value=\"\"></option>
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 30
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 30), "html", null, true);
            yield "\"
                            ";
            // line 31
            if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 31, $this->source); })()))) : ("")) && ((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 31, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 31)))) {
                yield " selected ";
            }
            yield ">
                            ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 32), "html", null, true);
            yield "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "                </select>
            </form>
            </th>

            <th class=\"text-left align-top\" scope=\"col\">
                Nb Formations<br />
                <button onclick=\"location.href='";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.sort", ["champ" => "nbformations", "ordre" => "ASC"]), "html", null, true);
        yield "'\"
                        class=\"btn btn-info btn-sm\">↑</button>
                <button onclick=\"location.href='";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.sort", ["champ" => "nbformations", "ordre" => "DESC"]), "html", null, true);
        yield "'\"
                        class=\"btn btn-info btn-sm\">↓</button>
            </th>

            <th class=\"text-center align-top\" scope=\"col\">&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 52
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 52, $this->source); })())) > 0)) {
            // line 53
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 53, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 54
                yield "                <tr class=\"align-middle\">

                    <td>
                        <h5 class=\"text-info\">
                            ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 58, $this->source); })()), $context["k"], [], "array", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
                yield "
                        </h5>
                    </td>

                    <td class=\"text-left\">
                        ";
                // line 63
                $context["cats"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 63, $this->source); })()), $context["k"], [], "array", false, false, false, 63), "categoriesplaylist", [], "any", false, false, false, 63);
                // line 64
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 64, $this->source); })())) > 0)) {
                    // line 65
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 65, $this->source); })())) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 66
                        yield "                                &nbsp;";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 66, $this->source); })()), $context["c"], [], "array", false, false, false, 66), "html", null, true);
                        yield "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 68
                    yield "                        ";
                }
                // line 69
                yield "                    </td>

                    <td class=\"text-center\">
                        ";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 72, $this->source); })()), $context["k"], [], "array", false, false, false, 72), "formations", [], "any", false, false, false, 72)), "html", null, true);
                yield "
                    </td>

                    <td>
                         <a href=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.add", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 76, $this->source); })()), $context["k"], [], "array", false, false, false, 76), "id", [], "any", false, false, false, 76)]), "html", null, true);
                yield "\"
                           class=\"btn btn-secondary btn-sm\">
                            Ajouter
                        </a>
                        <a href=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 80, $this->source); })()), $context["k"], [], "array", false, false, false, 80), "id", [], "any", false, false, false, 80)]), "html", null, true);
                yield "\"
                           class=\"btn btn-secondary btn-sm\">
                            Modifier
                        </a>

                        <form method=\"post\"
                              action=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 86, $this->source); })()), $context["k"], [], "array", false, false, false, 86), "id", [], "any", false, false, false, 86)]), "html", null, true);
                yield "\" style=\"display:inline-block;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 87, $this->source); })()), $context["k"], [], "array", false, false, false, 87), "id", [], "any", false, false, false, 87))), "html", null, true);
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
            // line 98
            yield "        ";
        }
        // line 99
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
        return array (  264 => 99,  261 => 98,  244 => 87,  240 => 86,  231 => 80,  224 => 76,  217 => 72,  212 => 69,  209 => 68,  200 => 66,  195 => 65,  192 => 64,  190 => 63,  182 => 58,  176 => 54,  171 => 53,  169 => 52,  157 => 43,  152 => 41,  144 => 35,  135 => 32,  129 => 31,  124 => 30,  120 => 29,  114 => 26,  110 => 25,  98 => 16,  92 => 15,  86 => 12,  80 => 9,  76 => 8,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseadmin.html.twig\" %}
{% block body %}
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
