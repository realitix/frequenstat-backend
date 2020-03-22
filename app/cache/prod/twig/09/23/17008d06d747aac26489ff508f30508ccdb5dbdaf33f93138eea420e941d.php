<?php

/* TrackerPlaceBundle:Form:fields.html.twig */
class __TwigTemplate_092317008d06d747aac26489ff508f30508ccdb5dbdaf33f93138eea420e941d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'geometry_widget' => array($this, 'block_geometry_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('geometry_widget', $context, $blocks);
    }

    public function block_geometry_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "TrackerPlaceBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  26 => 2,  20 => 1,);
    }
}
