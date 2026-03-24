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
class __TwigTemplate_e57122a42c4b640533b7051d5a3317c6 extends Template
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
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/playlists/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 4));
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
        if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default(($context["valeur"] ?? null))) : ("")) &&  !((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default(($context["table"] ?? null))) : ("")))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["valeur"] ?? null), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 36
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 36), "html", null, true);
            yield "\"
                            ";
            // line 37
            if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default(($context["valeur"] ?? null))) : ("")) && (($context["valeur"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 37)))) {
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["playlists"] ?? null)) > 0)) {
            // line 59
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["playlists"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 60
                yield "                <tr class=\"align-middle\">

                    <td>
                        <h5 class=\"text-info\">
                            ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = ($context["playlists"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["k"]] ?? null) : null), "name", [], "any", false, false, false, 64), "html", null, true);
                yield "
                        </h5>
                    </td>

                    <td class=\"text-left\">
                        ";
                // line 69
                $context["cats"] = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = ($context["playlists"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["k"]] ?? null) : null), "categoriesplaylist", [], "any", false, false, false, 69);
                // line 70
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["cats"] ?? null)) > 0)) {
                    // line 71
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["cats"] ?? null)) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 72
                        yield "                                &nbsp;";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = ($context["cats"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["c"]] ?? null) : null), "html", null, true);
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_3 = ($context["playlists"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["k"]] ?? null) : null), "formations", [], "any", false, false, false, 78)), "html", null, true);
                yield "
                    </td>

                    <td>
                         <a href=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = ($context["playlists"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["k"]] ?? null) : null), "id", [], "any", false, false, false, 82)]), "html", null, true);
                yield "\"
                           class=\"btn btn-secondary btn-sm\">
                            Ajouter
                        </a>
                        <a href=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = ($context["playlists"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["k"]] ?? null) : null), "id", [], "any", false, false, false, 86)]), "html", null, true);
                yield "\"
                           class=\"btn btn-secondary btn-sm\">
                            Modifier
                        </a>

                        <form method=\"post\"
                              action=\"";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_6 = ($context["playlists"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["k"]] ?? null) : null), "id", [], "any", false, false, false, 92)]), "html", null, true);
                yield "\" style=\"display:inline-block;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_7 = ($context["playlists"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["k"]] ?? null) : null), "id", [], "any", false, false, false, 93))), "html", null, true);
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
        return array (  273 => 105,  270 => 104,  253 => 93,  249 => 92,  240 => 86,  233 => 82,  226 => 78,  221 => 75,  218 => 74,  209 => 72,  204 => 71,  201 => 70,  199 => 69,  191 => 64,  185 => 60,  180 => 59,  178 => 58,  166 => 49,  161 => 47,  153 => 41,  144 => 38,  138 => 37,  133 => 36,  129 => 35,  123 => 32,  119 => 31,  107 => 22,  101 => 21,  95 => 18,  89 => 15,  85 => 14,  78 => 9,  72 => 8,  63 => 6,  58 => 5,  54 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/playlists/index.html.twig", "/opt/homebrew/var/www/mediatekformation/templates/admin/playlists/index.html.twig");
    }
}
