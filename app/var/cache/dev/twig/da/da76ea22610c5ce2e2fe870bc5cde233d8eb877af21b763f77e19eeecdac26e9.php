<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* przepis/show.html.twig */
class __TwigTemplate_c05b20bfa3f51913c16d5b346e056c074be3c9116c8c559b33eeaed1a1d3c7ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "przepis/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "przepis/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "przepis/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_przepis_details", ["%id%" => ((twig_get_attribute($this->env, $this->source, ($context["przepis"] ?? null), "id", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["przepis"] ?? null), "id", [], "any", false, false, false, 4), "")) : (""))]), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_przepis_details", ["%id%" => ((twig_get_attribute($this->env, $this->source, ($context["przepis"] ?? null), "id", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["przepis"] ?? null), "id", [], "any", false, false, false, 8), "")) : (""))]), "html", null, true);
        echo "</h1>
    ";
        // line 9
        if ((array_key_exists("przepis", $context) && twig_length_filter($this->env, (isset($context["przepis"]) || array_key_exists("przepis", $context) ? $context["przepis"] : (function () { throw new RuntimeError('Variable "przepis" does not exist.', 9, $this->source); })())))) {
            // line 10
            echo "        <dl class=\"dl-horizontal\">
            <dt>";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_id"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["przepis"]) || array_key_exists("przepis", $context) ? $context["przepis"] : (function () { throw new RuntimeError('Variable "przepis" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
            echo "</dd>
            <dt>";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_created_at"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, (isset($context["przepis"]) || array_key_exists("przepis", $context) ? $context["przepis"] : (function () { throw new RuntimeError('Variable "przepis" does not exist.', 14, $this->source); })()), "dataUtworzenia", [], "any", false, false, false, 14), "long"), "html", null, true);
            echo "</dd>
            <dt>";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_title"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["przepis"]) || array_key_exists("przepis", $context) ? $context["przepis"] : (function () { throw new RuntimeError('Variable "przepis" does not exist.', 16, $this->source); })()), "nazwa", [], "any", false, false, false, 16), "html", null, true);
            echo "</dd>
            <dt>";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_skladniki"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["przepis"]) || array_key_exists("przepis", $context) ? $context["przepis"] : (function () { throw new RuntimeError('Variable "przepis" does not exist.', 18, $this->source); })()), "skladniki", [], "any", false, false, false, 18), "html", null, true);
            echo "</dd>
            <dt>";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_kroki"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["przepis"]) || array_key_exists("przepis", $context) ? $context["przepis"] : (function () { throw new RuntimeError('Variable "przepis" does not exist.', 20, $this->source); })()), "kroki", [], "any", false, false, false, 20), "html", null, true);
            echo "</dd>
        </dl>
        <p>
            <a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("przepis_index");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_back_to_list"), "html", null, true);
            echo "\">
                ";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_back_to_list"), "html", null, true);
            echo "
            </a>
        </p>
    ";
        } else {
            // line 28
            echo "        <p>
            ";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_item_not_found"), "html", null, true);
            echo "
        </p>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "przepis/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 29,  157 => 28,  150 => 24,  144 => 23,  138 => 20,  134 => 19,  130 => 18,  126 => 17,  122 => 16,  118 => 15,  114 => 14,  110 => 13,  106 => 12,  102 => 11,  99 => 10,  97 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ 'title_przepis_details'|trans({'%id%': przepis.id|default('')}) }}
{% endblock %}

{% block body %}
    <h1>{{ 'title_przepis_details'|trans({'%id%': przepis.id|default('')}) }}</h1>
    {% if przepis is defined and przepis|length %}
        <dl class=\"dl-horizontal\">
            <dt>{{ 'label_id'|trans }}</dt>
            <dd>{{ przepis.id }}</dd>
            <dt>{{ 'label_created_at'|trans }}</dt>
            <dd>{{ przepis.dataUtworzenia|format_date('long') }}</dd>
            <dt>{{ 'label_title'|trans }}</dt>
            <dd>{{ przepis.nazwa }}</dd>
            <dt>{{ 'label_skladniki'|trans }}</dt>
            <dd>{{ przepis.skladniki }}</dd>
            <dt>{{ 'label_kroki'|trans }}</dt>
            <dd>{{ przepis.kroki }}</dd>
        </dl>
        <p>
            <a href=\"{{ url('przepis_index') }}\" title=\"{{ 'action_back_to_list'|trans }}\">
                {{ 'action_back_to_list'|trans }}
            </a>
        </p>
    {% else %}
        <p>
            {{ 'message_item_not_found'|trans }}
        </p>
    {% endif %}
{% endblock %}", "przepis/show.html.twig", "/mnt/c/Users/karol/Programy/PhpstormProjects/test/app/templates/przepis/show.html.twig");
    }
}
