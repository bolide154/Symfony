<?php

/* AcmeBlogBundle:Order:order-list.html.twig */
class __TwigTemplate_9ef7ba7c46cb99f94c6b9aeeeb778b6b06086209e94945a96b9bb0df54050f67 extends Twig_Template
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
        echo "    <table>
        <thead>
            <tr>
                <td><h4>Order Id</h4></td>
                <td><h4>First Name</h4></td>
                <td><h4>Last Name</h4></td>
                <td><h4>Email</h4></td>
                <td><h4>Shipping Address</h4></td>
                <td><h4>Date Added</h4></td>
                <td><h4>Date Modified</h4></td>
                <td><h4>Status</h4></td>
                <td><h4>Total Price</h4></td>
                <td><h4>Detail</h4></td>
                <td><h4>Action</h4></td>
            </tr>
        </thead>
        <tbody>
            ";
        // line 29
        if ((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results"))) {
            // line 30
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 31
                echo "                    <form name=\"order_remove_form\" action=\"";
                echo $this->env->getExtension('routing')->getPath("order_remove");
                echo "\" method=\"POST\">
                    <tr>
                        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</td>
                        <input type=\"hidden\" value=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" name=\"order_id\" />
                        <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "firstname", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "lastname", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "email", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "shipping_address", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date_added", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date_modified", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "status_id", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "total_price", array()), "html", null, true);
                echo "</td>
                        <td><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_detail", array("order_id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" class=\"detail\" >Detail</td>
                        <td><input type=\"submit\" value=\"Remove\" id=\"order_remove\" name=\"order_remove\" /></td>
                    </tr>
                    </form>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            ";
        } else {
            // line 49
            echo "                <tr><td>Order not found!</td></tr>
            ";
        }
        // line 51
        echo "        </tbody>
    </table>
    <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Home</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Order:order-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 53,  162 => 51,  158 => 49,  155 => 48,  144 => 43,  140 => 42,  136 => 41,  132 => 40,  128 => 39,  124 => 38,  120 => 37,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  98 => 31,  93 => 30,  91 => 29,  72 => 12,  69 => 11,  63 => 9,  57 => 7,  52 => 6,  49 => 5,  42 => 3,  39 => 2,  11 => 1,);
    }
}
