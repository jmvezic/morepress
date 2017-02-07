<?php

/* _sparklineFooter.twig */
class __TwigTemplate_34e2aab6586d7f67148ae5ff3330410f54b237e7627c16b739e78dc5064e4928 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    \$(function () {
        initializeSparklines();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "_sparklineFooter.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<script type=\"text/javascript\">
    \$(function () {
        initializeSparklines();
    });
</script>
";
    }
}
