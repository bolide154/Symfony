<?php

/* AcmeBlogBundle:Product:index.html.twig */
class __TwigTemplate_b9c65ba55ed1b6418d761a6dbf33b60c6f21acc8c1711cd601e7f5ecc72d7ec4 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "AcmeBlogBundle:Product:index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\" style=\"width: 500px; margin: 0 auto  \">
        <table style=\"float:left\">
            <tr><td><h4>Product</h4></td></tr>
            ";
        // line 9
        if ((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))) {
            // line 10
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 11
                echo "                    <form action=\"";
                echo $this->env->getExtension('routing')->getPath("add_to_cart");
                echo "\" method=\"POST\">
                        <tr>
                            <td style=\"border: 1px solid #ccc\">
                                <p>Name: ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</p>
                                Description: ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
                echo "</br>
                                Price: ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
                echo "</br>
                                Quantity: ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "</br>
                                <input type=\"hidden\" value=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" name=\"product_id\" />
                                <input type=\"hidden\" value=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "\" name=\"name\" />
                                <input type=\"hidden\" value=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
                echo "\" name=\"description\" />
                                <input type=\"hidden\" value=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
                echo "\" name=\"price\" />
                                <input type=\"hidden\" value=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "\" name=\"quantity\" />

                                <input type=\"submit\" value=\"Add\" name=\"cartAdd\"/>
                            </td>
                        </tr>
                    </form>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            ";
        }
        // line 30
        echo "        </table>
        <table style=\"float:right; \">
            <tr><td><h4>Shopping Cart</h4></td></tr>
            ";
        // line 33
        if ((isset($context["carts"]) ? $context["carts"] : $this->getContext($context, "carts"))) {
            // line 34
            echo "                
                ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["carts"]) ? $context["carts"] : $this->getContext($context, "carts")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 36
                echo "                    <form action=\"";
                echo "remove_from_cart";
                echo "\" method=\"POST\">
                        <tr>
                            <td style=\"border: 1px solid #ccc\">
                                <p>Name: ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</p>
                                Description: ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
                echo "</br>
                                Price: ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
                echo "</br>
                                Quantity: ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "</br>
                                <input type=\"hidden\" value=\"";
                // line 43
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" name=\"product_id\" />
                                <input type=\"hidden\" value=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "\" name=\"name\" />
                                <input type=\"hidden\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
                echo "\" name=\"description\" />
                                <input type=\"hidden\" value=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
                echo "\" name=\"price\" />
                                <input type=\"hidden\" value=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "\" name=\"quantity\" />

                                <input type=\"submit\" value=\"Remove\" name=\"cartRemove\"/>
                            </td>
                        </tr>
                    </form>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("button_checkout_click");
            echo "\"><button type=\"button\">Check Out</button></a>
            ";
        }
        // line 56
        echo "        </table>
        <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("order_list");
        echo "\"><button type=\"button\">Order History</button></a>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 57,  185 => 56,  179 => 54,  166 => 47,  162 => 46,  158 => 45,  154 => 44,  150 => 43,  146 => 42,  142 => 41,  138 => 40,  134 => 39,  127 => 36,  123 => 35,  120 => 34,  118 => 33,  113 => 30,  110 => 29,  97 => 22,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  58 => 11,  53 => 10,  51 => 9,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
