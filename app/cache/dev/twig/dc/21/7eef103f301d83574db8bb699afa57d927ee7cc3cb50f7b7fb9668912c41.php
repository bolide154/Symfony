<?php

/* AcmeBlogBundle:Order:order-detail.html.twig */
class __TwigTemplate_dc217eef103f301d83574db8bb699afa57d927ee7cc3cb50f7b7fb9668912c41 extends Twig_Template
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
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "AcmeBlogBundle:Order:index";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "message"), "method")) {
            // line 13
            echo "        ";
            $context["sessionMessage"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "message"), "method");
            // line 14
            echo "        ";
            if ($this->getAttribute((isset($context["sessionMessage"]) ? $context["sessionMessage"] : $this->getContext($context, "sessionMessage")), "error", array())) {
                // line 15
                echo "            <span>----------------</span>
            ";
            }
            // line 17
            echo "    ";
        }
        // line 18
        echo "    <h3>Order Information</h3>
    <table>
        ";
        // line 20
        if ((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results"))) {
            // line 21
            echo "            <tr><td>Order Id:</td><td>#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), 0, array(), "array"), "order_id", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Shipping Address:</td><td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), 0, array(), "array"), "shipping_address", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Date Added:</td><td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), 0, array(), "array"), "date_added", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Date Modified:</td><td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), 0, array(), "array"), "date_modified", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Status:</td><td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), 0, array(), "array"), "status_id", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Total Price:</td><td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")), 0, array(), "array"), "total_price", array()), "html", null, true);
            echo "</td></tr>
        ";
        }
        // line 28
        echo "    </table>
    <h3>Customer Information</h3>
    <table>
        ";
        // line 31
        if ((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results"))) {
            // line 32
            echo "            <tr><td>Email:</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "email", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Firddst Name:</td><td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "firstname", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Last Name:</td><td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "lastname", array()), "html", null, true);
            echo "</td></tr>
            <tr><td>Phone:</td><td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "phone", array()), "html", null, true);
            echo "</td></tr>
        ";
        }
        // line 37
        echo "    </table>
    <h3>Detail Product</h3>
    <table class=\"product-list\">
        <thead >
            <tr >
                <td ><span>Product Id</span></td>
                <td ><span>Name</span></td> 
                <td ><span>Description</span></td>
                <td ><span>Quantity</span></td>
                <td ><span>Price</span></td>
            </tr>
        </thead
        <tbody>
            ";
        // line 50
        if ((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results"))) {
            // line 51
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 52
                echo "                    <tr>
                        <td>#";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "product", array()), 0, array(), "array"), "id", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "product", array()), 0, array(), "array"), "name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "product", array()), 0, array(), "array"), "description", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "product", array()), 0, array(), "array"), "quantity", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "product", array()), 0, array(), "array"), "price", array()), "html", null, true);
                echo "</td>
                    </tr>  
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            ";
        }
        // line 61
        echo "        </tbody>
    </table>
</table>
<a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("order_list");
        echo "\">Order List</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Order:order-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 64,  198 => 61,  195 => 60,  186 => 57,  182 => 56,  178 => 55,  174 => 54,  170 => 53,  167 => 52,  162 => 51,  160 => 50,  145 => 37,  140 => 35,  136 => 34,  132 => 33,  127 => 32,  125 => 31,  120 => 28,  115 => 26,  111 => 25,  107 => 24,  103 => 23,  99 => 22,  94 => 21,  92 => 20,  88 => 18,  85 => 17,  81 => 15,  78 => 14,  75 => 13,  72 => 12,  69 => 11,  63 => 9,  57 => 7,  52 => 6,  49 => 5,  42 => 3,  39 => 2,  11 => 1,);
    }
}
