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

/* baseadmin.html.twig */
class __TwigTemplate_272c7d8d044a4220de120d3b83f048bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'top' => [$this, 'block_top'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "
";
        // line 2
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 3
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 6
        yield from $this->unwrap()->yieldBlock('top', $context, $blocks);
        // line 37
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        yield "  
";
        // line 38
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        yield "   ";
        return; yield '';
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
";
        return; yield '';
    }

    // line 6
    public function block_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "        <div class=\"text-left\">
            <img alt=\"banniere\" src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 8), "getBasePath", [], "method", false, false, false, 8) . "/banniere.jpg"), "html", null, true);
        yield "\"  alt='banniere'>
        </div>
    <div class =\"container>\">
       ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11)) {
            // line 12
            yield "       

    ";
        }
        // line 15
        yield "        <nav class=\"navbar navbar-expand-lg navbar-light bg-light mb-4\">
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav >
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation");
        yield "\">Formations</a>
                    </li>
                    <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist");
        yield "\">Playlists</a>
                    </li>
                    <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categories");
        yield "\">Categories</a>
                    </li>
                </ul>  
                </div>
                <a class=\"btn btn-secondary\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        yield "\">Déconnexion</a>
             
            </div>
        </nav>
       
        
    </div>
";
        return; yield '';
    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "baseadmin.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  143 => 38,  136 => 37,  123 => 29,  116 => 25,  110 => 22,  104 => 19,  98 => 15,  93 => 12,  91 => 11,  85 => 8,  82 => 7,  78 => 6,  69 => 3,  62 => 2,  56 => 38,  52 => 37,  50 => 6,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "baseadmin.html.twig", "/opt/homebrew/var/www/mediatekformation/templates/baseadmin.html.twig");
    }
}
