<?php

/* AcmeTableBundle:Default:index.html.twig */
class __TwigTemplate_d14f0c469d3869ed23f1a33068677975 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("AcmeTableBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <table id=\"tablesorter-demo\" class=\"tablesorter\"> 
        <thead> 
            <tr> 
                <th>Last Name</th> 
                <th>First Name</th> 
            </tr> 
        </thead> 
        <tbody> 
            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'users'));
        foreach ($context['_seq'] as $context['_key'] => $context['user']) {
            // line 15
            echo "                <tr>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user'), "name", array(), "any", false), "html");
            echo "</td>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user'), "age", array(), "any", false), "html");
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "            
        </tbody> 
    </table> 
";
    }

    public function getTemplateName()
    {
        return "AcmeTableBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
