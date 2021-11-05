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
      <div class=\"col\">
        <div class=\"card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg\" style=\"background-image: url('unsplash-photo-1.jpg');\">
          <div class=\"d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1\">
            <h2 class=\"pt-5 mt-5 mb-4 display-6 lh-1 fw-bold\">CHARPENTES</h2>
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

      <div class=\"col\">
        <div class=\"card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg\" style=\"background-image: url('unsplash-photo-2.jpg');\">
          <div class=\"d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1\">
            <h2 class=\"pt-5 mt-5 mb-4 display-6 lh-1 fw-bold\">COUVERTURES</h2>
            <ul class=\"d-flex list-unstyled mt-auto\">
              <li class=\"me-auto\">
                <img src=\"https://github.com/twbs.png\" alt=\"Bootstrap\" width=\"32\" height=\"32\" class=\"rounded-circle border border-white\">
              </li>
              <li class=\"d-flex align-items-center me-3\">
                <svg class=\"bi me-2\" width=\"1em\" height=\"1em\"><use xlink:href=\"#geo-fill\"/></svg>
                <small>Pakistan</small>
              </li>
              <li class=\"d-flex align-items-center\">
                <svg class=\"bi me-2\" width=\"1em\" height=\"1em\"><use xlink:href=\"#calendar3\"/></svg>
                <small>4d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class=\"col\">
        <div class=\"card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg\" style=\"background-image: url('unsplash-photo-3.jpg');\">
          <div class=\"d-flex flex-column h-100 p-5 pb-3 text-shadow-1\">
            <h2 class=\"pt-5 mt-5 mb-4 display-6 lh-1 fw-bold\">OUVRAGES</h2>
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


    <div class=\"container\">

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>



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
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
<main>


  <div class=\"container px-4 py-5 pt-lg-0\" id=\"custom-cards\">

    <div class=\"row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5 border-bottom border-5\">
      <div class=\"col\">
        <div class=\"card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg\" style=\"background-image: url('unsplash-photo-1.jpg');\">
          <div class=\"d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1\">
            <h2 class=\"pt-5 mt-5 mb-4 display-6 lh-1 fw-bold\">CHARPENTES</h2>
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

      <div class=\"col\">
        <div class=\"card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg\" style=\"background-image: url('unsplash-photo-2.jpg');\">
          <div class=\"d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1\">
            <h2 class=\"pt-5 mt-5 mb-4 display-6 lh-1 fw-bold\">COUVERTURES</h2>
            <ul class=\"d-flex list-unstyled mt-auto\">
              <li class=\"me-auto\">
                <img src=\"https://github.com/twbs.png\" alt=\"Bootstrap\" width=\"32\" height=\"32\" class=\"rounded-circle border border-white\">
              </li>
              <li class=\"d-flex align-items-center me-3\">
                <svg class=\"bi me-2\" width=\"1em\" height=\"1em\"><use xlink:href=\"#geo-fill\"/></svg>
                <small>Pakistan</small>
              </li>
              <li class=\"d-flex align-items-center\">
                <svg class=\"bi me-2\" width=\"1em\" height=\"1em\"><use xlink:href=\"#calendar3\"/></svg>
                <small>4d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class=\"col\">
        <div class=\"card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg\" style=\"background-image: url('unsplash-photo-3.jpg');\">
          <div class=\"d-flex flex-column h-100 p-5 pb-3 text-shadow-1\">
            <h2 class=\"pt-5 mt-5 mb-4 display-6 lh-1 fw-bold\">OUVRAGES</h2>
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


    <div class=\"container\">

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text></svg>

            <div class=\"card-body\">
              <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                </div>
                <small class=\"text-muted\">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>



{% endblock %}
", "chantier/index.html.twig", "/var/www/private/L3/stabs/templates/chantier/index.html.twig");
    }
}
