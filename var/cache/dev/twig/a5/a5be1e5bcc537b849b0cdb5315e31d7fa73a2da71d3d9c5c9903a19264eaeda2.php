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

/* home/index.html.twig */
class __TwigTemplate_9037c7ac189e564a8fce697805ad6d42849124018ddd19dd550a71aafc4abe0c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Hugo 0.84.0\">
    <title>Features · Bootstrap v5.0</title>

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.0/examples/features/\">

    

    <!-- Bootstrap core CSS -->
<!link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">


    <!-- Favicons -->
<link rel=\"apple-touch-icon\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2//assets/img/favicons/apple-touch-icon.png\" sizes=\"180x180\">
<link rel=\"icon\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/assets/img/favicons/favicon-32x32.png\" sizes=\"32x32\" type=\"image/png\">
<link rel=\"icon\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/assets/img/favicons/favicon-16x16.png\" sizes=\"16x16\" type=\"image/png\">
<link rel=\"manifest\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/assets/img/favicons/manifest.json\">
<link rel=\"mask-icon\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/assets/img/favicons/safari-pinned-tab.svg\" color=\"#7952b3\">
<link rel=\"icon\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/assets/img/favicons/favicon.ico\">
<meta name=\"theme-color\" content=\"#7952b3\">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    ";
        // line 47
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("feature");
        echo "
  </head>
  <body>
<main>
  <h1 class=\"visually-hidden\">Features examples</h1>



  <div class=\"b-example-divider\"></div>


  <div class=\"b-example-divider\"></div>

  <div class=\"container px-4 py-5\" id=\"custom-cards\">
    <h2 class=\"pb-2 border-bottom\">Notre savoir faire</h2>

    <div class=\"row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5\">
      <div class=\"col-8\">
        <p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"
        </p>
        <button>Découvrire nos projets</button>
      </div>

      <div class=\"col\">
        <div class=\"card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg\" style=\"background-image: url(";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/unsplash-photo-3.jpg"), "html", null, true);
        echo " );\">
          <div class=\"d-flex flex-column h-100 p-5 pb-3 text-shadow-1\">
            <h2 class=\"pt-5 mt-5 mb-4 display-6 lh-1 fw-bold\">Another longer title belongs here</h2>
            <ul class=\"d-flex list-unstyled mt-auto\">
              <li class=\"me-auto\">
                <img src=\"https://github.com/twbs.png\" alt=\"Bootstrap\" width=\"32\" height=\"32\" class=\"rounded-circle border border-white\">
              </li>
              <li class=\"d-flex align-items-center me-3\">
                <svg class=\"bi me-2\" width=\"1em\" height=\"1em\"><use xlink:href=\"#geo-fill\"/></svg>
                <small>California</small>
              </li>
              <li class=\"d-flex align-items-center\">
                <svg class=\"bi me-2\" width=\"1em\" height=\"1em\"><use xlink:href=\"#calendar3\"/></svg>
                <small>5d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"b-example-divider\"></div>

  <div class=\"container px-4 py-5\" id=\"custom-cards\">
    <h2 class=\"pb-2 border-bottom\">Prêt à travailler enssemble ?</h2>

    <div class=\"row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5\">

      <div class=\"col\">
        <div class=\"card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg\" style=\"background-image: url(";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/unsplash-photo-3.jpg"), "html", null, true);
        echo " );\">
          <div class=\"d-flex flex-column h-100 p-5 pb-3 text-shadow-1\">
            <h2 class=\"pt-5 mt-5 mb-4 display-6 lh-1 fw-bold\">Another longer title belongs here</h2>
            <ul class=\"d-flex list-unstyled mt-auto\">
              <li class=\"me-auto\">
                <img src=\"https://github.com/twbs.png\" alt=\"Bootstrap\" width=\"32\" height=\"32\" class=\"rounded-circle border border-white\">
              </li>
              <li class=\"d-flex align-items-center me-3\">
                <svg class=\"bi me-2\" width=\"1em\" height=\"1em\"><use xlink:href=\"#geo-fill\"/></svg>
                <small>California</small>
              </li>
              <li class=\"d-flex align-items-center\">
                <svg class=\"bi me-2\" width=\"1em\" height=\"1em\"><use xlink:href=\"#calendar3\"/></svg>
                <small>5d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"col-8\">
        <button>Découvrire nos projets</button>
      </div>
    </div>
  </div>

</main>


    <script src=\"/docs/5.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>

      
  </body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 101,  118 => 71,  91 => 47,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Hugo 0.84.0\">
    <title>Features · Bootstrap v5.0</title>

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.0/examples/features/\">

    

    <!-- Bootstrap core CSS -->
<!link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">


    <!-- Favicons -->
<link rel=\"apple-touch-icon\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2//assets/img/favicons/apple-touch-icon.png\" sizes=\"180x180\">
<link rel=\"icon\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/assets/img/favicons/favicon-32x32.png\" sizes=\"32x32\" type=\"image/png\">
<link rel=\"icon\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/assets/img/favicons/favicon-16x16.png\" sizes=\"16x16\" type=\"image/png\">
<link rel=\"manifest\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/assets/img/favicons/manifest.json\">
<link rel=\"mask-icon\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/assets/img/favicons/safari-pinned-tab.svg\" color=\"#7952b3\">
<link rel=\"icon\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/assets/img/favicons/favicon.ico\">
<meta name=\"theme-color\" content=\"#7952b3\">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    {{encore_entry_link_tags('feature')}}
  </head>
  <body>
<main>
  <h1 class=\"visually-hidden\">Features examples</h1>



  <div class=\"b-example-divider\"></div>


  <div class=\"b-example-divider\"></div>

  <div class=\"container px-4 py-5\" id=\"custom-cards\">
    <h2 class=\"pb-2 border-bottom\">Notre savoir faire</h2>

    <div class=\"row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5\">
      <div class=\"col-8\">
        <p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"
        </p>
        <button>Découvrire nos projets</button>
      </div>

      <div class=\"col\">
        <div class=\"card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg\" style=\"background-image: url({{ asset('images/unsplash-photo-3.jpg') }} );\">
          <div class=\"d-flex flex-column h-100 p-5 pb-3 text-shadow-1\">
            <h2 class=\"pt-5 mt-5 mb-4 display-6 lh-1 fw-bold\">Another longer title belongs here</h2>
            <ul class=\"d-flex list-unstyled mt-auto\">
              <li class=\"me-auto\">
                <img src=\"https://github.com/twbs.png\" alt=\"Bootstrap\" width=\"32\" height=\"32\" class=\"rounded-circle border border-white\">
              </li>
              <li class=\"d-flex align-items-center me-3\">
                <svg class=\"bi me-2\" width=\"1em\" height=\"1em\"><use xlink:href=\"#geo-fill\"/></svg>
                <small>California</small>
              </li>
              <li class=\"d-flex align-items-center\">
                <svg class=\"bi me-2\" width=\"1em\" height=\"1em\"><use xlink:href=\"#calendar3\"/></svg>
                <small>5d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"b-example-divider\"></div>

  <div class=\"container px-4 py-5\" id=\"custom-cards\">
    <h2 class=\"pb-2 border-bottom\">Prêt à travailler enssemble ?</h2>

    <div class=\"row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5\">

      <div class=\"col\">
        <div class=\"card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg\" style=\"background-image: url({{ asset('images/unsplash-photo-3.jpg') }} );\">
          <div class=\"d-flex flex-column h-100 p-5 pb-3 text-shadow-1\">
            <h2 class=\"pt-5 mt-5 mb-4 display-6 lh-1 fw-bold\">Another longer title belongs here</h2>
            <ul class=\"d-flex list-unstyled mt-auto\">
              <li class=\"me-auto\">
                <img src=\"https://github.com/twbs.png\" alt=\"Bootstrap\" width=\"32\" height=\"32\" class=\"rounded-circle border border-white\">
              </li>
              <li class=\"d-flex align-items-center me-3\">
                <svg class=\"bi me-2\" width=\"1em\" height=\"1em\"><use xlink:href=\"#geo-fill\"/></svg>
                <small>California</small>
              </li>
              <li class=\"d-flex align-items-center\">
                <svg class=\"bi me-2\" width=\"1em\" height=\"1em\"><use xlink:href=\"#calendar3\"/></svg>
                <small>5d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"col-8\">
        <button>Découvrire nos projets</button>
      </div>
    </div>
  </div>

</main>


    <script src=\"/docs/5.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>

      
  </body>
</html>

", "home/index.html.twig", "/var/www/private/L3/stabs/templates/home/index.html.twig");
    }
}
