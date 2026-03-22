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

/* admin/playlists/playlist.edit.html.twig */
class __TwigTemplate_c179fe515e752332bdf0c63fadbdc52a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/playlists/playlist.edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/playlists/playlist.edit.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/playlists/playlist.edit.html.twig", 1);
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
        yield "
<div class=\"container mt-4\">
    <h2>Modifier la playlist</h2>
    ";
        // line 7
        yield Twig\Extension\CoreExtension::include($this->env, $context, "_admin.playlist.from.html.twig");
        yield "
    <div class=\"row mt-4\">
        <div class=\"col-5\">
            <h5>Formations de la playlist :</h5>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlist"]) || array_key_exists("playlist", $context) ? $context["playlist"] : (function () { throw new RuntimeError('Variable "playlist" does not exist.', 11, $this->source); })()), "formations", [], "any", false, false, false, 11));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 12
            yield "                  <div class='row mt-1'>
                    <div class='col-md-auto'>
                        ";
            // line 14
            if (CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "miniature", [], "any", false, false, false, 14)) {
                // line 15
                yield "                            <img alt=\"Image miniature   \" src='";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "miniature", [], "any", false, false, false, 15), "html", null, true);
                yield "'>
                        ";
            }
            // line 17
            yield "                    </div>
                <div class=\"col d-flex align-items-center\">
                    ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 19), "html", null, true);
            yield "
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            yield "                <div class=\"text-muted\">
                    Aucune formation liée
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "
        </div>
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
        return "admin/playlists/playlist.edit.html.twig";
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
        return array (  119 => 26,  110 => 22,  102 => 19,  98 => 17,  92 => 15,  90 => 14,  86 => 12,  81 => 11,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseadmin.html.twig\" %}

{% block body %}

<div class=\"container mt-4\">
    <h2>Modifier la playlist</h2>
    {{ include('_admin.playlist.from.html.twig') }}
    <div class=\"row mt-4\">
        <div class=\"col-5\">
            <h5>Formations de la playlist :</h5>
            {% for formation in playlist.formations %}
                  <div class='row mt-1'>
                    <div class='col-md-auto'>
                        {% if formation.miniature %}
                            <img alt=\"Image miniature   \" src='{{ formation.miniature }}'>
                        {% endif %}
                    </div>
                <div class=\"col d-flex align-items-center\">
                    {{ formation.title }}
                </div>
            {% else %}
                <div class=\"text-muted\">
                    Aucune formation liée
                </div>
            {% endfor %}

        </div>
    </div>

</div>

{% endblock %}", "admin/playlists/playlist.edit.html.twig", "/opt/homebrew/var/www/mediatekformation/mediatekformation/templates/admin/playlists/playlist.edit.html.twig");
    }
}
