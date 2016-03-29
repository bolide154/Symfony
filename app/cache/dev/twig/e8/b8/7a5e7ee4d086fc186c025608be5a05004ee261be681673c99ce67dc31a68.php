<?php

/* AcmeBlogBundle:Order:index.html.twig */
class __TwigTemplate_e8b87a5e7ee4d086fc186c025608be5a05004ee261be681673c99ce67dc31a68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeblog/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeblog/js/jquery/jquery-2.2.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeblog/js/myscript.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeblog/js/ajax.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "AcmeBlogBundle:Order:index";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ((isset($context["carts"]) ? $context["carts"] : $this->getContext($context, "carts"))) {
            // line 14
            echo "        ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("checkout_confirm")));
            echo "
        <table class=\"product-list\">
            <thead >
                <tr >
                    <td ><span>Product Id</span></td>
                    <td ><span>Name</span></td> 
                    <td ><span>Description</span></td>
                    <td ><span>Quantity</span></td>
                    <td ><span>Price</span></td>
                </tr>
            </thead>
            <tbody>
                ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["carts"]) ? $context["carts"] : $this->getContext($context, "carts")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 27
                echo "                    <tr>
                        <td>#";
                // line 28
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</td>
                        <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
                echo "</td>
                        <td><input class=\"hidden-quantity\" data-url=\"";
                // line 31
                echo $this->env->getExtension('routing')->getPath("order_update_product");
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" type=\"text\" name=\"carts[";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "][quantity]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "\"></td>
                        <td>";
                // line 32
                echo twig_escape_filter($this->env, ($this->getAttribute($context["item"], "price", array()) * $this->getAttribute($context["item"], "quantity", array())), "html", null, true);
                echo "</td>
                        
                    </tr>
                    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                <tr>
                    <td>Total price:</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : $this->getContext($context, "totalPrice")), "html", null, true);
            echo "</td>
                    <td style=\"border:none\"><input type=\"hidden\" name=\"totalPrice\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : $this->getContext($context, "totalPrice")), "html", null, true);
            echo "\"/></td>
                </tr>
            </tbody>
        </table>
        
        <table>
            <tr>
                <td>";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "account", array()), 'widget');
            echo "
                    ";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "account", array()), 'label', array("label" => "Non Account"));
            echo "</td>
            </tr>
            <tr>
                <td>";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email:"));
            echo "</td>
                <td>";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
            echo "</td>
                <td>";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "check_email", array()), 'widget');
            echo "</td>
            </tr>
            <tr>
                <td>";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'label', array("label" => "Shipping Address:"));
            echo "</td>
                <td>";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget');
            echo "</td>
            </tr>
            
        </table>
        <div id=\"non-account\" style=\"display: none\">
            ";
            // line 62
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label', array("label" => "First name:"));
            echo "
            ";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
            echo "</br>
            ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label', array("label" => "Last name::"));
            echo "
            ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget');
            echo "</br>
            ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label', array("label" => "Phone:"));
            echo "
            ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
            echo "
        </div>
        <a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("index");
            echo "\">Back</a>
        ";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confirm", array()), 'widget');
            echo "
        ";
            // line 71
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
    ";
        }
        // line 73
        echo "    <input type=\"hidden\" value=\"";
        echo $this->env->getExtension('routing')->getPath("order_update_product");
        echo "\" id=\"url-ajax-update-quantity\"/>
";
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Order:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 73,  222 => 71,  218 => 70,  214 => 69,  209 => 67,  205 => 66,  201 => 65,  197 => 64,  193 => 63,  189 => 62,  181 => 57,  177 => 56,  171 => 53,  167 => 52,  163 => 51,  157 => 48,  153 => 47,  143 => 40,  139 => 39,  135 => 37,  124 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  99 => 27,  95 => 26,  79 => 14,  76 => 13,  73 => 12,  67 => 10,  61 => 8,  57 => 7,  52 => 6,  49 => 5,  42 => 3,  39 => 2,  11 => 1,);
    }
}
