<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_fd06e409de3cb3b87f83b2b88e97d1d3ceb43456c60ea2a4e4f21101a79cb35b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_235368f10a25f16301bc0d6d1fe4115b859d57176b55bc8410e399ae983c1980 = $this->env->getExtension("native_profiler");
        $__internal_235368f10a25f16301bc0d6d1fe4115b859d57176b55bc8410e399ae983c1980->enter($__internal_235368f10a25f16301bc0d6d1fe4115b859d57176b55bc8410e399ae983c1980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_235368f10a25f16301bc0d6d1fe4115b859d57176b55bc8410e399ae983c1980->leave($__internal_235368f10a25f16301bc0d6d1fe4115b859d57176b55bc8410e399ae983c1980_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1f0dbcf43f8458a6ebe025a34ed9ea20a4a352e1620f0696104920685be9c5a = $this->env->getExtension("native_profiler");
        $__internal_d1f0dbcf43f8458a6ebe025a34ed9ea20a4a352e1620f0696104920685be9c5a->enter($__internal_d1f0dbcf43f8458a6ebe025a34ed9ea20a4a352e1620f0696104920685be9c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d1f0dbcf43f8458a6ebe025a34ed9ea20a4a352e1620f0696104920685be9c5a->leave($__internal_d1f0dbcf43f8458a6ebe025a34ed9ea20a4a352e1620f0696104920685be9c5a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
