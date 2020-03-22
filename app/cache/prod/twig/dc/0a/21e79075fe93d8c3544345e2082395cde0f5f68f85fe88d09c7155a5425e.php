<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_dc0a21e79075fe93d8c3544345e2082395cde0f5f68f85fe88d09c7155a5425e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_clean.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_clean.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        if (array_key_exists("invalid_username", $context)) {
            // line 7
            echo "\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 col-md-offset-4 alert alert-danger fade in\">
\t\t\t<i class=\"fa-fw fa fa-times\"></i>
\t\t\t<strong>Erreur : </strong>
\t\t\tAdresse Email invalide.
\t\t</div>
\t</div>
";
        }
        // line 15
        echo "
<div class=\"row\">
\t<div class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 col-md-offset-4\">
\t\t<div class=\"well no-padding\">
\t\t\t<form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" id=\"login-form\" class=\"smart-form client-form\">
\t\t\t\t<header>
\t\t\t\t\tRéinitialisation du mot de passe
\t\t\t\t</header>

\t\t\t\t<fieldset>
\t\t\t\t\t<section>
\t\t\t\t\t\t<label class=\"label\">E-mail</label>
\t\t\t\t\t\t<label class=\"input\"> <i class=\"icon-append fa fa-user\"></i>
\t\t\t\t\t\t\t<input type=\"email\" name=\"username\" required=\"required\">
\t\t\t\t\t\t\t<b class=\"tooltip tooltip-top-right\"><i class=\"fa fa-user txt-color-teal\"></i> Entrez votre adresse email</b></label>
\t\t\t\t\t</section>
\t\t\t\t</fieldset>
\t\t\t\t<footer>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Valider</button>
\t\t\t\t</footer>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 19,  46 => 15,  36 => 7,  34 => 6,  31 => 5,  28 => 3,);
    }
}
