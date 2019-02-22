<?php

/* index.html */
class __TwigTemplate_0eba37a29aaf1e0dc4a7cd31424747badc46b6eb44218ab03797c82cce2b09b4 extends Twig_Template
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
        echo "<h1>
    <meta>
    <title> <?php echo \$title; ?> </title>
    <body>
        ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "
    </body>
</h1>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>
    <meta>
    <title> <?php echo \$title; ?> </title>
    <body>
        {{ data }}
    </body>
</h1>", "index.html", "C:\\Users\\13128\\Desktop\\myBlog\\app\\views\\index.html");
    }
}
