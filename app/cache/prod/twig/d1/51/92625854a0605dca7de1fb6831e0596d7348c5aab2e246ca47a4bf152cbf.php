<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d15192625854a0605dca7de1fb6831e0596d7348c5aab2e246ca47a4bf152cbf extends Twig_Template
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
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 7
            echo "\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-5 col-lg-4 col-md-offset-4 alert alert-danger fade in\">
\t\t\t<i class=\"fa-fw fa fa-times\"></i>
\t\t\t<strong>Erreur : </strong>
\t\t\tAdresse Email ou mot de passe invalide.
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
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"POST\" id=\"login-form\" class=\"smart-form client-form\">
\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
\t\t\t\t
\t\t\t\t<header>
\t\t\t\t\tConnexion
\t\t\t\t</header>

\t\t\t\t<fieldset>
\t\t\t\t\t
\t\t\t\t\t<section>
\t\t\t\t\t\t<label class=\"label\">E-mail</label>
\t\t\t\t\t\t<label class=\"input\"> <i class=\"icon-append fa fa-user\"></i>
\t\t\t\t\t\t\t<input type=\"email\" name=\"_username\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\">
\t\t\t\t\t\t\t<b class=\"tooltip tooltip-top-right\"><i class=\"fa fa-user txt-color-teal\"></i> Entrez votre adresse email</b></label>
\t\t\t\t\t</section>

\t\t\t\t\t<section>
\t\t\t\t\t\t<label class=\"label\">Mot de passe</label>
\t\t\t\t\t\t<label class=\"input\"> <i class=\"icon-append fa fa-lock\"></i>
\t\t\t\t\t\t\t<input type=\"password\" name=\"_password\" required=\"required\">
\t\t\t\t\t\t\t<b class=\"tooltip tooltip-top-right\"><i class=\"fa fa-lock txt-color-teal\"></i> Entrez votre mot de passe</b> </label>
\t\t\t\t\t\t<div class=\"note\">
\t\t\t\t\t\t\t<a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié ?</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>

\t\t\t\t\t<section>
\t\t\t\t\t\t<label class=\"checkbox\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\" checked=\"\" value=\"on\">
\t\t\t\t\t\t\t<i></i>Rester connecté</label>
\t\t\t\t\t</section>
\t\t\t\t</fieldset>
\t\t\t\t<footer>
\t\t\t\t\t<button type=\"submit\" name=\"_submit\" class=\"btn btn-primary\">
\t\t\t\t\t\tValider
\t\t\t\t\t</button>
\t\t\t\t</footer>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 41,  70 => 31,  56 => 20,  52 => 19,  46 => 15,  36 => 7,  34 => 6,  31 => 5,  28 => 3,);
    }
}
