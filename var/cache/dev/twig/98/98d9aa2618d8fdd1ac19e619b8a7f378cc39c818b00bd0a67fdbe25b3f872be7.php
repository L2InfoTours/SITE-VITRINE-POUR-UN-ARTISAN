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

/* chantier/show.html.twig */
class __TwigTemplate_e514f1f489c196ccd2fd7bda3aff282f3b9c03d39ed76a1724f5cf97998266e0 extends Template
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
        return "present.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chantier/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chantier/show.html.twig"));

        $this->parent = $this->loadTemplate("present.html.twig", "chantier/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"mt-5 ms-5 mb-5 \">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>

  <div class=\"container \">
    <hr class=\"featurette-divider mb-5\">

    <div class=\"row featurette\">
      <div class=\"col-md-7 order-md-2\">

     <table class=\"table \">
             <tbody>
                 <tr>
                     <th>Id</th>
                     <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
                 </tr>
                 <tr>
                     <th>Nom</th>
                     <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                 </tr>
                 <tr>
                     <th>Contenu</th>
                     <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 24, $this->source); })()), "contenu", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                 </tr>
                 <tr>
                     <th>Adresse</th>
                     <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 28, $this->source); })()), "adresse", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                 </tr>
             </tbody>
         </table>
    <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 36
        echo twig_include($this->env, $context, "chantier/_delete_form.html.twig");
        echo "
     </div>
      <div class=\"col-md-5 order-md-1\">
    <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/chantier/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 39, $this->source); })()), "getImages", [], "method", false, false, false, 39), 0, [], "array", false, false, false, 39), "getImage", [], "method", false, false, false, 39))), "html", null, true);
        echo "\" class=\"img-thumbnail\" alt=\"...\">
      </div>
    </div>

        <hr class=\"featurette-divider mb-5 mt-5 text-center\">

        <h1 class=\"mt-5 ms-5 mb-5 text-center\">Photos</h1>
<!-- Gallery -->
<div class=\"row\">
  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 48, $this->source); })()), "getImages", [], "method", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 49
            echo "  ";
            // line 50
            echo "  <div class=\"col-lg-4 col-6\">
        <img class=\"w-100 shadow-1-strong rounded mb-4 img-fluid img-aspect lightbox\" src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/chantier/" . twig_get_attribute($this->env, $this->source, $context["image"], "getImage", [], "method", false, false, false, 51))), "html", null, true);
            echo "\" alt=\"img\" style=\"object-fit: cover;\" />
</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
</div>
<script>
const modal = {
    open:function(){
        if(!this.isClosed)return
        this.isClosed = false
        this.element = document.createElement('div')
        this.element.style = `
                                position: fixed; /* Stay in place */
                                z-index:9999; /* Sit on top */
                                left: 0;
                                top: 0;
                                width: 100%; /* Full width */
                                height: 100%; /* Full height */
                                overflow: auto; /* Enable scroll if needed */
                                background-color: rgb(0,0,0); /* Fallback color */
                                background-color: rgba(0,0,0,0.9); /* Black w/ opacity */`
        document.body.appendChild(this.element)
        this.element.addEventListener('click',(event)=>{
            var element = event.target
            if(element != this.context.canvas && !modal.isClosed)
                modal.close()
        })
    },
    close:function(){
        this.isClosed = true
        this.element.remove()
    },
    isClosed:true,

    showImage(img){
        let W,H
        this.context.canvas.width = W = 1920
        this.context.canvas.height = H = 1080


        var w = img.naturalWidth
        var h = img.naturalHeight

        var r = w/h

        var isH = w/W>h/H

        var x = 0
        var y = 0

        if(isH){
            w = H*r
            h = H
        }else{
            h = W/r
            w = W
        }

        x = W/2 - w/2
        y = H/2 - h/2

        this.context.drawImage(img,x,y,w,h)
        this.context.canvas.style = `max-width: 100%;max-height: 100%;`
        this.div.style = `height:100vmin;
                                       transform:translate(-50%,-50%);
                                       left:50%;
                                       top:50%;
                                       position:relative;
                                       width: max-content;max-width:100vw;
                                       `
                                 modal.div.style.padding = `\${modal.padding}px`
    },
    div:document.createElement('div'),
    context:null,
    hitbox:150,
    arrowR:\"M9.46967 5.46967C9.76256 5.17678 10.2374 5.17678 10.5303 5.46967L16.5303 11.4697C16.8232 11.7626 16.8232 12.2374 16.5303 12.5303L10.5303 18.5303C10.2374 18.8232 9.76256 18.8232 9.46967 18.5303C9.17678 18.2374 9.17678 17.7626 9.46967 17.4697L14.9393 12L9.46967 6.53033C9.17678 6.23744 9.17678 5.76256 9.46967 5.46967Z\",
    arrowL:\"M14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303L7.46967 12.5303C7.17678 12.2374 7.17678 11.7626 7.46967 11.4697L13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967C14.8232 5.76256 14.8232 6.23744 14.5303 6.53033L9.06066 12L14.5303 17.4697C14.8232 17.7626 14.8232 18.2374 14.5303 18.5303Z\",
    slideshow:function(imgs,index = 0){
        this.context = document.createElement('canvas').getContext('2d')
        this.div = document.createElement('div')
        this.currentImage = index

        const show = ()=>{
            if(!imgs[this.currentImage]){
                if(this.currentImage<0){
                    this.currentImage = imgs.length-1
                }
                if(this.currentImage>imgs.length-1){
                    this.currentImage = 0
                }
            }
            this.showImage(imgs[this.currentImage])
/*
            this.context.fillStyle = \"rgba(0,0,0,.8)\"
            this.context.fillRect(0,0,this.hitbox,this.context.canvas.height)
            this.context.fillRect(this.context.canvas.width-this.hitbox,0,this.hitbox,this.context.canvas.height)
*/
            var arrowR = new Path2D(this.arrowR)
            this.context.fillStyle = \"#fff\"
            this.context.save()
            this.context.translate(this.context.canvas.width-this.hitbox,this.context.canvas.height/2)
            this.context.scale(5,5)
            this.context.fill(arrowR)
            this.context.restore()
            this.context.save()
            var arrowL = new Path2D(this.arrowL)
            this.context.translate(0,this.context.canvas.height/2)
            this.context.scale(5,5)
            this.context.fill(arrowL)
            this.context.restore()
        }

        this.context.canvas.addEventListener('click',(event)=>{
            var padding = this.padding
            console.log(padding)
            var left = this.div.offsetLeft+padding - (this.div.offsetWidth)/2
            var x = (event.clientX-left)/this.context.canvas.offsetWidth*this.context.canvas.width
            console.log(left,x,this.hitbox,left)
            if(x>this.context.canvas.width-this.hitbox){
                console.log(\"Go TO RIGHT\")
                this.currentImage+=1
                show()
            }else if(x<this.hitbox){
                console.log(\"Go TO LEFT\")
                this.currentImage-=1
                show()
            }

        })
        show()

        this.div.appendChild(this.context.canvas)
        this.context.canvas.style.width=\"100%\"
        this.element.appendChild(this.div)
    },
}
window.addEventListener(\"resize\",()=>{
    var p = Math.min(window.innerWidth,window.innerHeight)/10;
    modal.div.style.padding = `\${p}px`
        modal.padding = p
})
window.addEventListener(\"load\",()=>{
    var p = Math.min(window.innerWidth,window.innerHeight)/10;
    modal.div.style.padding = `\${p}px`
    modal.padding = p
})
const slideshow = document.querySelectorAll('img.lightbox[src]')
slideshow.forEach((img,n)=> {
img.addEventListener('click',()=>{
                event.preventDefault();
                var element = event.target;
                if(modal.isClosed){
                    modal.open()
                    modal.slideshow(slideshow,n)
                }
    });
})
</script>
<!-- Gallery -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "chantier/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 54,  149 => 51,  146 => 50,  144 => 49,  140 => 48,  128 => 39,  122 => 36,  117 => 34,  112 => 32,  105 => 28,  98 => 24,  91 => 20,  84 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'present.html.twig' %}

{% block body %}
    <h1 class=\"mt-5 ms-5 mb-5 \">{{ chantier.nom}}</h1>

  <div class=\"container \">
    <hr class=\"featurette-divider mb-5\">

    <div class=\"row featurette\">
      <div class=\"col-md-7 order-md-2\">

     <table class=\"table \">
             <tbody>
                 <tr>
                     <th>Id</th>
                     <td>{{ chantier.id }}</td>
                 </tr>
                 <tr>
                     <th>Nom</th>
                     <td>{{ chantier.nom }}</td>
                 </tr>
                 <tr>
                     <th>Contenu</th>
                     <td>{{ chantier.contenu }}</td>
                 </tr>
                 <tr>
                     <th>Adresse</th>
                     <td>{{ chantier.adresse }}</td>
                 </tr>
             </tbody>
         </table>
    <a href=\"{{ path('chantier_index') }}\">back to list</a>

    <a href=\"{{ path('chantier_edit', {'id': chantier.id}) }}\">edit</a>

    {{ include('chantier/_delete_form.html.twig') }}
     </div>
      <div class=\"col-md-5 order-md-1\">
    <img src=\"{{ asset(\"/uploads/images/chantier/#{chantier.getImages()[0].getImage()}\") }}\" class=\"img-thumbnail\" alt=\"...\">
      </div>
    </div>

        <hr class=\"featurette-divider mb-5 mt-5 text-center\">

        <h1 class=\"mt-5 ms-5 mb-5 text-center\">Photos</h1>
<!-- Gallery -->
<div class=\"row\">
  {% for image in chantier.getImages() %}
  {#col-md-12 mb-4 mb-lg-0 #}
  <div class=\"col-lg-4 col-6\">
        <img class=\"w-100 shadow-1-strong rounded mb-4 img-fluid img-aspect lightbox\" src=\"{{ asset(\"/uploads/images/chantier/#{image.getImage()}\") }}\" alt=\"img\" style=\"object-fit: cover;\" />
</div>
    {% endfor %}

</div>
<script>
const modal = {
    open:function(){
        if(!this.isClosed)return
        this.isClosed = false
        this.element = document.createElement('div')
        this.element.style = `
                                position: fixed; /* Stay in place */
                                z-index:9999; /* Sit on top */
                                left: 0;
                                top: 0;
                                width: 100%; /* Full width */
                                height: 100%; /* Full height */
                                overflow: auto; /* Enable scroll if needed */
                                background-color: rgb(0,0,0); /* Fallback color */
                                background-color: rgba(0,0,0,0.9); /* Black w/ opacity */`
        document.body.appendChild(this.element)
        this.element.addEventListener('click',(event)=>{
            var element = event.target
            if(element != this.context.canvas && !modal.isClosed)
                modal.close()
        })
    },
    close:function(){
        this.isClosed = true
        this.element.remove()
    },
    isClosed:true,

    showImage(img){
        let W,H
        this.context.canvas.width = W = 1920
        this.context.canvas.height = H = 1080


        var w = img.naturalWidth
        var h = img.naturalHeight

        var r = w/h

        var isH = w/W>h/H

        var x = 0
        var y = 0

        if(isH){
            w = H*r
            h = H
        }else{
            h = W/r
            w = W
        }

        x = W/2 - w/2
        y = H/2 - h/2

        this.context.drawImage(img,x,y,w,h)
        this.context.canvas.style = `max-width: 100%;max-height: 100%;`
        this.div.style = `height:100vmin;
                                       transform:translate(-50%,-50%);
                                       left:50%;
                                       top:50%;
                                       position:relative;
                                       width: max-content;max-width:100vw;
                                       `
                                 modal.div.style.padding = `\${modal.padding}px`
    },
    div:document.createElement('div'),
    context:null,
    hitbox:150,
    arrowR:\"M9.46967 5.46967C9.76256 5.17678 10.2374 5.17678 10.5303 5.46967L16.5303 11.4697C16.8232 11.7626 16.8232 12.2374 16.5303 12.5303L10.5303 18.5303C10.2374 18.8232 9.76256 18.8232 9.46967 18.5303C9.17678 18.2374 9.17678 17.7626 9.46967 17.4697L14.9393 12L9.46967 6.53033C9.17678 6.23744 9.17678 5.76256 9.46967 5.46967Z\",
    arrowL:\"M14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303L7.46967 12.5303C7.17678 12.2374 7.17678 11.7626 7.46967 11.4697L13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967C14.8232 5.76256 14.8232 6.23744 14.5303 6.53033L9.06066 12L14.5303 17.4697C14.8232 17.7626 14.8232 18.2374 14.5303 18.5303Z\",
    slideshow:function(imgs,index = 0){
        this.context = document.createElement('canvas').getContext('2d')
        this.div = document.createElement('div')
        this.currentImage = index

        const show = ()=>{
            if(!imgs[this.currentImage]){
                if(this.currentImage<0){
                    this.currentImage = imgs.length-1
                }
                if(this.currentImage>imgs.length-1){
                    this.currentImage = 0
                }
            }
            this.showImage(imgs[this.currentImage])
/*
            this.context.fillStyle = \"rgba(0,0,0,.8)\"
            this.context.fillRect(0,0,this.hitbox,this.context.canvas.height)
            this.context.fillRect(this.context.canvas.width-this.hitbox,0,this.hitbox,this.context.canvas.height)
*/
            var arrowR = new Path2D(this.arrowR)
            this.context.fillStyle = \"#fff\"
            this.context.save()
            this.context.translate(this.context.canvas.width-this.hitbox,this.context.canvas.height/2)
            this.context.scale(5,5)
            this.context.fill(arrowR)
            this.context.restore()
            this.context.save()
            var arrowL = new Path2D(this.arrowL)
            this.context.translate(0,this.context.canvas.height/2)
            this.context.scale(5,5)
            this.context.fill(arrowL)
            this.context.restore()
        }

        this.context.canvas.addEventListener('click',(event)=>{
            var padding = this.padding
            console.log(padding)
            var left = this.div.offsetLeft+padding - (this.div.offsetWidth)/2
            var x = (event.clientX-left)/this.context.canvas.offsetWidth*this.context.canvas.width
            console.log(left,x,this.hitbox,left)
            if(x>this.context.canvas.width-this.hitbox){
                console.log(\"Go TO RIGHT\")
                this.currentImage+=1
                show()
            }else if(x<this.hitbox){
                console.log(\"Go TO LEFT\")
                this.currentImage-=1
                show()
            }

        })
        show()

        this.div.appendChild(this.context.canvas)
        this.context.canvas.style.width=\"100%\"
        this.element.appendChild(this.div)
    },
}
window.addEventListener(\"resize\",()=>{
    var p = Math.min(window.innerWidth,window.innerHeight)/10;
    modal.div.style.padding = `\${p}px`
        modal.padding = p
})
window.addEventListener(\"load\",()=>{
    var p = Math.min(window.innerWidth,window.innerHeight)/10;
    modal.div.style.padding = `\${p}px`
    modal.padding = p
})
const slideshow = document.querySelectorAll('img.lightbox[src]')
slideshow.forEach((img,n)=> {
img.addEventListener('click',()=>{
                event.preventDefault();
                var element = event.target;
                if(modal.isClosed){
                    modal.open()
                    modal.slideshow(slideshow,n)
                }
    });
})
</script>
<!-- Gallery -->


{% endblock %}
", "chantier/show.html.twig", "/var/www/private/L3/stabs/templates/chantier/show.html.twig");
    }
}
