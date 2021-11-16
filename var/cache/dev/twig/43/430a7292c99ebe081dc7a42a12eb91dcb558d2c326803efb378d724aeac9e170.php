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

/* chantier/index.html.twig */
class __TwigTemplate_4a0ec019a5276ff69517826055f5f8bdae11d2b9cec8196484e1b09f0398a50a extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chantier/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chantier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chantier/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<main>

  <div class=\"container px-4 py-5 pt-lg-0\" id=\"custom-cards\">

    <div class=\"row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5 border-bottom border-5\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 9
            echo "      <div class=\"col\" onclick=\"document.getElementById('";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "').click()\"  >
        <input type=\"checkbox\"  style=\"display:none;\" id=\"";
            // line 10
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\" onclick=\"doFilter()\" class=\"filter\">
        <div class=\"card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg\" style=\"background-image: url('unsplash-photo-1.jpg');\">
          <div class=\"d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1\">
            <h2 class=\"pt-5 mt-5 mb-4 display-6 lh-1 fw-bold\">";
            // line 13
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "</h2>
            <ul class=\"d-flex list-unstyled mt-auto\">
              <li class=\"me-auto\">
                <img src=\"https://github.com/twbs.png\" alt=\"Bootstrap\" width=\"32\" height=\"32\" class=\"rounded-circle border border-white\">
              </li>
              <li class=\"d-flex align-items-center me-3\">
                <svg class=\"bi me-2\" width=\"1em\" height=\"1em\"><use xlink:href=\"#geo-fill\"/></svg>
                <small>Earth</small>
              </li>
              <li class=\"d-flex align-items-center\">
                <svg class=\"bi me-2\" width=\"1em\" height=\"1em\"><use xlink:href=\"#calendar3\"/></svg>
                <small>3d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    </div>
  </div>


    <div class=\"container\"  >

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\" id=\"filtred\">
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
            // line 40
            echo "        <div class=\"col-lg-3 ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["chantier"], "getTypes", [], "method", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "getType", [], "method", false, false, false, 40), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " filter\">
          <div class=\"card shadow-sm\">
        <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/chantier/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chantier"], "getImages", [], "method", false, false, false, 42), 0, [], "array", false, false, false, 42), "getImage", [], "method", false, false, false, 42))), "html", null, true);
            echo "\" alt=\"img\">


            <div class=\"card-body\">
            <h6>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chantier"], "nom", [], "any", false, false, false, 46), "html", null, true);
            echo "</h6>
              <p class=\"card-text\" style=\"  white-space: normal;overflow: hidden;text-overflow: ellipsis;max-height: 105px;min-height: 105px;\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chantier"], "contenu", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group d-grid gap-2 col-12 mx-auto\">
                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-secondary\">View</a>

                </div>
              </div>
            </div>
          </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chantier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    <div class=\"filter error\" style=\"display:none;margin: auto;font-weight: bold;\" >
       Il n'y a pas d'article dans le chantier sélectionné
    <div>

    </div>
  </div>




</main>
        <script type=\"text/javascript\">
                    const filtred = document.querySelector(\"#filtred\")
                    const filters = document.querySelectorAll(\"input.filter\")
                    const filtererror = document.querySelector(\".filter.error\")
                    function doFilter(){
                        var any = ! [...filters].some((o)=>o.checked)
                        elements = filtred.querySelectorAll(\".filter:not(.error)\")
                        var isempty = false;
                        [...elements].map(filter=>{
                            var clzzs = filter.classList
                            clzzs = Object.values(clzzs)
                            var mod = [...filters].reduce(
                                (p,o)=>{
                                if(o.checked)
                                    p.push(o.getAttribute(\"id\"))
                                return p
                                },[]
                            )
                            var isgood = mod.some(x=>clzzs.includes(x))
                            isgood||=any
                            filter.style.display = isgood ?\"flex\":\"none\"

                            isempty ||= isgood

                        })

                        filtererror.style.display = !isempty ?\"flex\":\"none\"

                    }
                </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "chantier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 58,  159 => 50,  153 => 47,  149 => 46,  142 => 42,  128 => 40,  124 => 39,  114 => 31,  90 => 13,  84 => 10,  79 => 9,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
<main>

  <div class=\"container px-4 py-5 pt-lg-0\" id=\"custom-cards\">

    <div class=\"row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5 border-bottom border-5\">
    {% for type in types %}
      <div class=\"col\" onclick=\"document.getElementById('{{type}}').click()\"  >
        <input type=\"checkbox\"  style=\"display:none;\" id=\"{{type}}\" onclick=\"doFilter()\" class=\"filter\">
        <div class=\"card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg\" style=\"background-image: url('unsplash-photo-1.jpg');\">
          <div class=\"d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1\">
            <h2 class=\"pt-5 mt-5 mb-4 display-6 lh-1 fw-bold\">{{type}}</h2>
            <ul class=\"d-flex list-unstyled mt-auto\">
              <li class=\"me-auto\">
                <img src=\"https://github.com/twbs.png\" alt=\"Bootstrap\" width=\"32\" height=\"32\" class=\"rounded-circle border border-white\">
              </li>
              <li class=\"d-flex align-items-center me-3\">
                <svg class=\"bi me-2\" width=\"1em\" height=\"1em\"><use xlink:href=\"#geo-fill\"/></svg>
                <small>Earth</small>
              </li>
              <li class=\"d-flex align-items-center\">
                <svg class=\"bi me-2\" width=\"1em\" height=\"1em\"><use xlink:href=\"#calendar3\"/></svg>
                <small>3d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    {% endfor %}

    </div>
  </div>


    <div class=\"container\"  >

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\" id=\"filtred\">
    {% for chantier in projects %}
        <div class=\"col-lg-3 {% for type in chantier.getTypes() %} {{type.getType()}}{% endfor %} filter\">
          <div class=\"card shadow-sm\">
        <img src=\"{{ asset(\"/uploads/images/chantier/#{chantier.getImages()[0].getImage()}\") }}\" alt=\"img\">


            <div class=\"card-body\">
            <h6>{{ chantier.nom }}</h6>
              <p class=\"card-text\" style=\"  white-space: normal;overflow: hidden;text-overflow: ellipsis;max-height: 105px;min-height: 105px;\">{{ chantier.contenu}}</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group d-grid gap-2 col-12 mx-auto\">
                <a href=\"{{path('chantier_show',{'id': chantier.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">View</a>

                </div>
              </div>
            </div>
          </div>
        </div>
    {% endfor %}
    <div class=\"filter error\" style=\"display:none;margin: auto;font-weight: bold;\" >
       Il n'y a pas d'article dans le chantier sélectionné
    <div>

    </div>
  </div>




</main>
        <script type=\"text/javascript\">
                    const filtred = document.querySelector(\"#filtred\")
                    const filters = document.querySelectorAll(\"input.filter\")
                    const filtererror = document.querySelector(\".filter.error\")
                    function doFilter(){
                        var any = ! [...filters].some((o)=>o.checked)
                        elements = filtred.querySelectorAll(\".filter:not(.error)\")
                        var isempty = false;
                        [...elements].map(filter=>{
                            var clzzs = filter.classList
                            clzzs = Object.values(clzzs)
                            var mod = [...filters].reduce(
                                (p,o)=>{
                                if(o.checked)
                                    p.push(o.getAttribute(\"id\"))
                                return p
                                },[]
                            )
                            var isgood = mod.some(x=>clzzs.includes(x))
                            isgood||=any
                            filter.style.display = isgood ?\"flex\":\"none\"

                            isempty ||= isgood

                        })

                        filtererror.style.display = !isempty ?\"flex\":\"none\"

                    }
                </script>


{% endblock %}
", "chantier/index.html.twig", "/var/www/private/L3/stabs/templates/chantier/index.html.twig");
    }
}
