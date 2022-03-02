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

/* task/new.html.twig */
class __TwigTemplate_51755b8f5d752317728ca56cfa61b5c697ec68f1a6c7eb44e04a72a6e4f8c323 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        // line 1
        echo "<html>
    <body style=\"display: flex; justify-content: center\">
        <div style=\"flex-direction: column\">
            ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form');
        echo "
            ";
        // line 5
        if (((isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 5, $this->source); })()) && (isset($context["dueDate"]) || array_key_exists("dueDate", $context) ? $context["dueDate"] : (function () { throw new RuntimeError('Variable "dueDate" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "                <table>
                    <tr>
                        <th>Task</th>
                        <th>Due Date</th>
                    </tr>
                    <tr>
                        <td>";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "</td>
                        <td>";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["dueDate"]) || array_key_exists("dueDate", $context) ? $context["dueDate"] : (function () { throw new RuntimeError('Variable "dueDate" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "</td>
                    </tr>
                </table>
            ";
        }
        // line 17
        echo "        </div>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "task/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  66 => 13,  62 => 12,  54 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <body style=\"display: flex; justify-content: center\">
        <div style=\"flex-direction: column\">
            {{ form(form) }}
            {% if task and dueDate %}
                <table>
                    <tr>
                        <th>Task</th>
                        <th>Due Date</th>
                    </tr>
                    <tr>
                        <td>{{ task }}</td>
                        <td>{{ dueDate }}</td>
                    </tr>
                </table>
            {% endif %}
        </div>
    </body>
</html>
", "task/new.html.twig", "/app/templates/task/new.html.twig");
    }
}
