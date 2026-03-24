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

/* pages/playlists.html.twig */
class __TwigTemplate_f393cebee4b88d4c1e433c2d4dc3337c extends Template
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
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("basefront.html.twig", "pages/playlists.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    playlist<br />
                    <a href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.sort", ["champ" => "name", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.sort", ["champ" => "name", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.findallcontain", ["champ" => "name"]);
        yield "\">
                        <div class=\"form-group mr-1 mb-2\">
                            <input type=\"text\" class=\"sm\" name=\"recherche\" 
                                   value=\"";
        // line 13
        if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default(($context["valeur"] ?? null))) : ("")) &&  !((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default(($context["table"] ?? null))) : ("")))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["valeur"] ?? null), "html", null, true);
        }
        yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_name"), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form>                    
                </th>

                <th class=\"text-left align-top\" scope=\"col\">
                    catégories
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.findallcontain", ["champ" => "id", "table" => "categories"]), "html", null, true);
        yield "\">
                        <select class=\"form-select form-select-sm\" name=\"recherche\" id=\"recherche\" onchange=\"this.form.submit()\">
                            <option value=\"\"></option>
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 26
            yield "                                <option 
                                    ";
            // line 27
            if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default(($context["valeur"] ?? null))) : ("")) && (($context["valeur"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 27)))) {
                yield " 
                                        selected
                                    ";
            }
            // line 29
            yield " 
                                    value=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 30), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "                        </select>                    
                    </form>            
                </th>
                 <th class=\"text-left align-top\" scope=\"col\">
                Nb Formations<br />
                <button onclick=\"location.href='";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.sort", ["champ" => "nbformations", "ordre" => "ASC"]), "html", null, true);
        yield "'\" class=\"btn btn-info btn-sm\" aria-label=\"Sort by number of formations ascending\">↑</button>
                <button onclick=\"location.href='";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.sort", ["champ" => "nbformations", "ordre" => "DESC"]), "html", null, true);
        yield "'\" class=\"btn btn-info btn-sm\" aria-label=\"Sort by number of formations descending\">↓</button>
            </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    &nbsp;
                </th>\t\t\t\t
            </tr>
        </thead>
        <tbody>
            <!-- boucle sur les playlists -->
            ";
        // line 48
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["playlists"] ?? null)) > 0)) {
            // line 49
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["playlists"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 50
                yield "                    <tr class=\"align-middle\">
                        <td>
                            <h5 class=\"text-info\">
                                ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = ($context["playlists"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["k"]] ?? null) : null), "name", [], "any", false, false, false, 53), "html", null, true);
                yield "
                            </h5>
                        </td>                 
                        <td class=\"text-left\">
                            ";
                // line 57
                $context["categories"] = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = ($context["playlists"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["k"]] ?? null) : null), "categoriesplaylist", [], "any", false, false, false, 57);
                // line 58
                yield "                            ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) > 0)) {
                    // line 59
                    yield "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 60
                        yield "                                    &nbsp;";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = ($context["categories"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["c"]] ?? null) : null), "html", null, true);
                        yield "                                  
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    yield "                            ";
                }
                // line 63
                yield "                        </td>
                         <td class=\"text-center\">
                                ";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_3 = ($context["playlists"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["k"]] ?? null) : null), "formations", [], "any", false, false, false, 65)), "html", null, true);
                yield "
                         </td> 
                                     \t\t\t\t\t
                        <td class=\"text-center\">
                            <a href=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = ($context["playlists"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["k"]] ?? null) : null), "id", [], "any", false, false, false, 69)]), "html", null, true);
                yield "\" class=\"btn btn-secondary\">Voir détail</a>
                        </td> 
                       
                        \t\t\t\t\t
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "\t
            ";
        }
        // line 76
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
        return "pages/playlists.html.twig";
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
        return array (  213 => 76,  209 => 74,  197 => 69,  190 => 65,  186 => 63,  183 => 62,  174 => 60,  169 => 59,  166 => 58,  164 => 57,  157 => 53,  152 => 50,  147 => 49,  145 => 48,  133 => 39,  129 => 38,  122 => 33,  111 => 30,  108 => 29,  102 => 27,  99 => 26,  95 => 25,  89 => 22,  78 => 14,  72 => 13,  66 => 10,  62 => 9,  58 => 8,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/playlists.html.twig", "/opt/homebrew/var/www/mediatekformation/templates/pages/playlists.html.twig");
    }
}
