<?php

/* @UserCountry/getGeoIpUpdaterManageScreen.twig */
class __TwigTemplate_f29076ab70a4c412e8512266899ed37a10403a0bbba0d7d194efab60c31a060e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("@UserCountry/_updaterManage.twig", "@UserCountry/getGeoIpUpdaterManageScreen.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@UserCountry/getGeoIpUpdaterManageScreen.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% include \"@UserCountry/_updaterManage.twig\" %}";
    }
}
