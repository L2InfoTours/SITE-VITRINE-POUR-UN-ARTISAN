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

/* base.html.twig */
class __TwigTemplate_9a12077caf9fc002ee825b08718de522a90317ddbbc8734eb23457d38da972df extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta charset=\"UTF-8\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body style=\"background:#161616;\">

    <nav class=\"navbar  fixed-top\" style=\"background:#161616;\" aria-label=\"First navbar example\">
        <div class=\"container-fluid\">
          <a class=\"navbar-brand\" style=\"font-size:30pt;color: #C5A476;\" href=";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo ">LEGERMAIN</a>
          <button class=\"navbar-toggler\" style=\"color: #C5A476;\" onclick=\"openNav()\" >
        <span class=\"navbar-toggler-icon\"><svg xmlns=\"http://www.w3.org/2000/svg\" enable-background=\"new 0 0 297 297\" viewBox=\"0 0 297 297\"><path d=\"M280.214 39.211H16.786C7.531 39.211 0 46.742 0 55.997v24.335c0 9.256 7.531 16.787 16.786 16.787h263.428c9.255 0 16.786-7.531 16.786-16.787V55.997C297 46.742 289.469 39.211 280.214 39.211zM280.214 119.546H16.786C7.531 119.546 0 127.077 0 136.332v24.336c0 9.255 7.531 16.786 16.786 16.786h263.428c9.255 0 16.786-7.531 16.786-16.786v-24.336C297 127.077 289.469 119.546 280.214 119.546zM280.214 199.881H16.786C7.531 199.881 0 207.411 0 216.668v24.335c0 9.255 7.531 16.786 16.786 16.786h263.428c9.255 0 16.786-7.531 16.786-16.786v-24.335C297 207.411 289.469 199.881 280.214 199.881z\" fill=\"#c5a476\" class=\"color000 svgShape\" style=\"
        \"></path></svg></span>
          </button>
        </div>
    </nav>

        <div id=\"mySidenav\" class=\"sidenav\">
          <a style=\"color: #C5A476;\" href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
          ";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo " ";
            // line 28
            echo "            <a style=\"color: #C5A476;\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            echo "\">PANNEL ADMINISTRATION</a>
          ";
        }
        // line 30
        echo "          <a style=\"color: #C5A476;\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> HOME </a>
          <a style=\"color: #C5A476;\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier_index");
        echo "\">PROJETS</a>
          <a style=\"color: #C5A476;\" href=\"#\">OFFRES</a> ";
        // line 33
        echo "          <a style=\"color: #C5A476;\" href=\"#\">DEVIS/CONTACT</a> ";
        // line 34
        echo "          ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo " ";
            // line 35
            echo "            <a style=\"color: #C5A476;\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">SE DECONNECTER</a>
          ";
        } else {
            // line 37
            echo "            <a style=\"color: #C5A476;\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">SE CONNECTER</a>
            <a style=\"color: #C5A476;\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'INSCRIRE</a>
          ";
        }
        // line 40
        echo "        </div>
        <style>
/* The side navigation menu */
.sidenav {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 6666; /* Stay on top */
  top: 0;
  right: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

        </style>
        <script>
        function openNav() {
          var w = \"50vmin\";
          document.getElementById(\"mySidenav\").style.width = w;
          document.getElementById(\"main\").style.marginLeft = w;
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
          document.getElementById(\"mySidenav\").style.width = \"0\";
          document.getElementById(\"main\").style.marginLeft = \"0\";
        }
        </script>


        ";
        // line 108
        $this->displayBlock('header', $context, $blocks);
        // line 109
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 111
        echo "    </body>
    <div style=\"background:#222;\">
<div class=\"container\">
  <footer class=\"py-3 \" >
    <a href=\"/\" class=\"col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-3 ms-auto me-md-auto link-dark text-decoration-none\">
      <svg width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M13 24h-2v-5.126c-.806-.208-1.513-.661-2.039-1.274-.602.257-1.265.4-1.961.4-2.76 0-5-2.24-5-5 0-1.422.595-2.707 1.55-3.617-.348-.544-.55-1.19-.55-1.883 0-1.878 1.483-3.413 3.341-3.496.823-2.332 3.047-4.004 5.659-4.004 2.612 0 4.836 1.672 5.659 4.004 1.858.083 3.341 1.618 3.341 3.496 0 .693-.202 1.339-.55 1.883.955.91 1.55 2.195 1.55 3.617 0 2.76-2.24 5-5 5-.696 0-1.359-.143-1.961-.4-.526.613-1.233 1.066-2.039 1.274v5.126z\"/></svg>
    </a>
    <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
      <li class=\"nav-item\"><a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link px-2 text-muted\">HOME</a></li>
      <li class=\"nav-item\"><a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier_index");
        echo "\" class=\"nav-link px-2 text-muted\">PROJETS</a></li>
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">OFFRES</a></li>
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">DEVIS/CONTACT</a></li>
      <li class=\"nav-item\"><a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aboutus");
        echo "\" class=\"nav-link px-2 text-muted\">ABOUT US</a></li>
    </ul>
    <p class=\"text-center text-muted\">&copy; 2021 Company, Inc</p>
  </footer>
</div>
</div>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 7, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t";
        // line 10
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("haiku");
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 109
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 110,  302 => 109,  284 => 108,  272 => 10,  267 => 9,  257 => 8,  238 => 7,  220 => 123,  214 => 120,  210 => 119,  200 => 111,  197 => 110,  194 => 109,  192 => 108,  122 => 40,  117 => 38,  112 => 37,  106 => 35,  102 => 34,  100 => 33,  96 => 31,  91 => 30,  85 => 28,  82 => 27,  69 => 17,  62 => 12,  60 => 8,  56 => 7,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta charset=\"UTF-8\">
        <title>{% block title %}{{titre}}{% endblock %}</title>
        {% block stylesheets %}
\t\t{{ encore_entry_link_tags('app') }}
\t\t{{encore_entry_link_tags('haiku') }}
\t\t{% endblock %}
    </head>
    <body style=\"background:#161616;\">

    <nav class=\"navbar  fixed-top\" style=\"background:#161616;\" aria-label=\"First navbar example\">
        <div class=\"container-fluid\">
          <a class=\"navbar-brand\" style=\"font-size:30pt;color: #C5A476;\" href={{ path('home') }}>LEGERMAIN</a>
          <button class=\"navbar-toggler\" style=\"color: #C5A476;\" onclick=\"openNav()\" >
        <span class=\"navbar-toggler-icon\"><svg xmlns=\"http://www.w3.org/2000/svg\" enable-background=\"new 0 0 297 297\" viewBox=\"0 0 297 297\"><path d=\"M280.214 39.211H16.786C7.531 39.211 0 46.742 0 55.997v24.335c0 9.256 7.531 16.787 16.786 16.787h263.428c9.255 0 16.786-7.531 16.786-16.787V55.997C297 46.742 289.469 39.211 280.214 39.211zM280.214 119.546H16.786C7.531 119.546 0 127.077 0 136.332v24.336c0 9.255 7.531 16.786 16.786 16.786h263.428c9.255 0 16.786-7.531 16.786-16.786v-24.336C297 127.077 289.469 119.546 280.214 119.546zM280.214 199.881H16.786C7.531 199.881 0 207.411 0 216.668v24.335c0 9.255 7.531 16.786 16.786 16.786h263.428c9.255 0 16.786-7.531 16.786-16.786v-24.335C297 207.411 289.469 199.881 280.214 199.881z\" fill=\"#c5a476\" class=\"color000 svgShape\" style=\"
        \"></path></svg></span>
          </button>
        </div>
    </nav>

        <div id=\"mySidenav\" class=\"sidenav\">
          <a style=\"color: #C5A476;\" href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
          {% if is_granted('ROLE_ADMIN') %} {# SI ON EST CONNECTER EN TANT QU'ADMIN #}
            <a style=\"color: #C5A476;\" href=\"{{ path('app_admin')}}\">PANNEL ADMINISTRATION</a>
          {% endif %}
          <a style=\"color: #C5A476;\" href=\"{{ path('home') }}\"> HOME </a>
          <a style=\"color: #C5A476;\" href=\"{{ path('chantier_index') }}\">PROJETS</a>
          <a style=\"color: #C5A476;\" href=\"#\">OFFRES</a> {#TODO#}
          <a style=\"color: #C5A476;\" href=\"#\">DEVIS/CONTACT</a> {#TODO#}
          {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %} {#SI ON EST CONNECTER#}
            <a style=\"color: #C5A476;\" href=\"{{ path('app_logout')}}\">SE DECONNECTER</a>
          {% else %}
            <a style=\"color: #C5A476;\" href=\"{{ path('login')}}\">SE CONNECTER</a>
            <a style=\"color: #C5A476;\" href=\"{{ path('app_register')}}\">S'INSCRIRE</a>
          {% endif %}
        </div>
        <style>
/* The side navigation menu */
.sidenav {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 6666; /* Stay on top */
  top: 0;
  right: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

        </style>
        <script>
        function openNav() {
          var w = \"50vmin\";
          document.getElementById(\"mySidenav\").style.width = w;
          document.getElementById(\"main\").style.marginLeft = w;
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
          document.getElementById(\"mySidenav\").style.width = \"0\";
          document.getElementById(\"main\").style.marginLeft = \"0\";
        }
        </script>


        {% block header %}{% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}{{ encore_entry_script_tags('app') }}{% endblock %}
    </body>
    <div style=\"background:#222;\">
<div class=\"container\">
  <footer class=\"py-3 \" >
    <a href=\"/\" class=\"col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-3 ms-auto me-md-auto link-dark text-decoration-none\">
      <svg width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M13 24h-2v-5.126c-.806-.208-1.513-.661-2.039-1.274-.602.257-1.265.4-1.961.4-2.76 0-5-2.24-5-5 0-1.422.595-2.707 1.55-3.617-.348-.544-.55-1.19-.55-1.883 0-1.878 1.483-3.413 3.341-3.496.823-2.332 3.047-4.004 5.659-4.004 2.612 0 4.836 1.672 5.659 4.004 1.858.083 3.341 1.618 3.341 3.496 0 .693-.202 1.339-.55 1.883.955.91 1.55 2.195 1.55 3.617 0 2.76-2.24 5-5 5-.696 0-1.359-.143-1.961-.4-.526.613-1.233 1.066-2.039 1.274v5.126z\"/></svg>
    </a>
    <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
      <li class=\"nav-item\"><a href=\"{{ path('home') }}\" class=\"nav-link px-2 text-muted\">HOME</a></li>
      <li class=\"nav-item\"><a href=\"{{ path('chantier_index') }}\" class=\"nav-link px-2 text-muted\">PROJETS</a></li>
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">OFFRES</a></li>
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">DEVIS/CONTACT</a></li>
      <li class=\"nav-item\"><a href=\"{{ path('aboutus') }}\" class=\"nav-link px-2 text-muted\">ABOUT US</a></li>
    </ul>
    <p class=\"text-center text-muted\">&copy; 2021 Company, Inc</p>
  </footer>
</div>
</div>
</html>
", "base.html.twig", "/var/www/private/L3/stabs/templates/base.html.twig");
    }
}
