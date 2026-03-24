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
class __TwigTemplate_0bfd50407d241e24a0c651f8becbcb56 extends Template
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
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/formation/index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if ((((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default(($context["table"] ?? null))) : ("")) == "")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default(($context["valeur"] ?? null), "")) : ("")), "html", null, true);
        }
        yield "\">
                    <input type=\"hidden\" name=\"champ\" value=\"title\">
                    <input type=\"hidden\" name=\"table\" value=\"\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_title"), "html", null, true);
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
        if (((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default(($context["valeur"] ?? null))) : ("")) && ((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default(($context["table"] ?? null))) : (""))) && (($context["table"] ?? null) == "playlist"))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["valeur"] ?? null), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 47
            yield "                        <option 
                            ";
            // line 48
            if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default(($context["valeur"] ?? null))) : ("")) && (($context["valeur"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 48)))) {
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
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_name"), "html", null, true);
        yield "\">
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["formations"] ?? null));
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
        return array (  259 => 99,  244 => 90,  238 => 87,  231 => 83,  227 => 82,  223 => 80,  216 => 78,  208 => 76,  203 => 75,  198 => 73,  194 => 72,  190 => 71,  186 => 69,  182 => 68,  172 => 61,  166 => 58,  158 => 53,  155 => 52,  143 => 49,  139 => 48,  136 => 47,  132 => 46,  126 => 43,  114 => 34,  106 => 31,  100 => 28,  96 => 27,  92 => 26,  80 => 17,  72 => 14,  67 => 12,  63 => 11,  59 => 10,  51 => 4,  47 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/formation/index.html.twig", "/opt/homebrew/var/www/mediatekformation/templates/admin/formation/index.html.twig");
    }
}
