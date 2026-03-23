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

/* pages/accueil.html.twig */
class __TwigTemplate_ddb3a1b93ceda7b6804adfc4018f1263 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/accueil.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "pages/accueil.html.twig", 1);
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
        yield "    <p class=\"mt-3\">
        <h3>Bienvenue sur le site de MediaTek86 consacré aux formations en ligne</h3>
    </p>
    <p class=\"mt-3\">
        Vous allez pouvoir vous former à différents outils numériques gratuitement et directement en ligne.<br />
        Dans la partie <strong><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations");
        yield "\" class=\"link-info\">Formations</a></strong>, vous trouverez la liste des formations proposées.
        Vous pourrez faire des recherches et des tris. 
        En cliquant sur la capture, vous accèderez à la présentation plus détaillée de la formation ainsi que la vidéo correspondante.<BR />
        Vous pouvez aussi retrouver les vidéos regroupées dans des playlists, dans la partie <strong><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists");
        yield "\" class=\"link-info\">Playlists</a></strong>.
    </p>
    <p>
        Voici les <strong>deux dernières formations</strong> ajoutées au catalogue :
        <table class=\"table\">
            <tr>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 19
            yield "                    <td>
                        <div class=\"row\">
                            <div class=\"col\">
                                <!-- emplacement photo -->
                                ";
            // line 23
            if (CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "picture", [], "any", false, false, false, 23)) {
                // line 24
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 24)]), "html", null, true);
                yield "\">
                                    <img src=\"";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "picture", [], "any", false, false, false, 25), "html", null, true);
                yield "\" 
                                         class=\"card-img-top\" style=\"width:100%;height:auto;\">
                                    </a>    
                                ";
            }
            // line 29
            yield "                            </div>
                            <div class=\"col\">
                                <p>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "publishedatstring", [], "any", false, false, false, 31), "html", null, true);
            yield "</p>
                                <h5 class=\"text-info mt-1\">
                                    ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 33), "html", null, true);
            yield "
                                </h5>
                                <strong>playlist : </strong>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "playlist", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
            yield "<br />
                                <strong>catégories : </strong> 
                                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "categories", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 38
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 38), "html", null, true);
                yield "&nbsp;
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "                            </div>    
                        </div>                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "    
            </tr>

        </table>        
    </p>
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
        return "pages/accueil.html.twig";
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
        return array (  155 => 42,  147 => 40,  138 => 38,  134 => 37,  129 => 35,  124 => 33,  119 => 31,  115 => 29,  108 => 25,  103 => 24,  101 => 23,  95 => 19,  91 => 18,  82 => 12,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"basefront.html.twig\" %}

{% block body %}
    <p class=\"mt-3\">
        <h3>Bienvenue sur le site de MediaTek86 consacré aux formations en ligne</h3>
    </p>
    <p class=\"mt-3\">
        Vous allez pouvoir vous former à différents outils numériques gratuitement et directement en ligne.<br />
        Dans la partie <strong><a href=\"{{ path('formations') }}\" class=\"link-info\">Formations</a></strong>, vous trouverez la liste des formations proposées.
        Vous pourrez faire des recherches et des tris. 
        En cliquant sur la capture, vous accèderez à la présentation plus détaillée de la formation ainsi que la vidéo correspondante.<BR />
        Vous pouvez aussi retrouver les vidéos regroupées dans des playlists, dans la partie <strong><a href=\"{{ path('playlists') }}\" class=\"link-info\">Playlists</a></strong>.
    </p>
    <p>
        Voici les <strong>deux dernières formations</strong> ajoutées au catalogue :
        <table class=\"table\">
            <tr>
                {% for formation in formations %}
                    <td>
                        <div class=\"row\">
                            <div class=\"col\">
                                <!-- emplacement photo -->
                                {% if formation.picture %}
                                    <a href=\"{{ path('formations.showone', {id:formation.id}) }}\">
                                    <img src=\"{{ formation.picture }}\" 
                                         class=\"card-img-top\" style=\"width:100%;height:auto;\">
                                    </a>    
                                {% endif %}
                            </div>
                            <div class=\"col\">
                                <p>{{ formation.publishedatstring }}</p>
                                <h5 class=\"text-info mt-1\">
                                    {{ formation.title }}
                                </h5>
                                <strong>playlist : </strong>{{ formation.playlist.name }}<br />
                                <strong>catégories : </strong> 
                                {% for categorie in formation.categories %}
                                    {{ categorie.name }}&nbsp;
                                {% endfor %}
                            </div>    
                        </div>                    
                {% endfor %}    
            </tr>

        </table>        
    </p>
{% endblock %}


", "pages/accueil.html.twig", "/opt/homebrew/var/www/mediatekformation/mediatekformation/templates/pages/accueil.html.twig");
    }
}
