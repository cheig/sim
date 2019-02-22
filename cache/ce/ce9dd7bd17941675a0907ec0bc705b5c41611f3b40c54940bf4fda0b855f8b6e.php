<?php

/* index.html */
class __TwigTemplate_8e0a9240501ada89d9e7392c51e601a2109caa4d0e40aff4b9953050c873677d extends Twig_Template
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
        <?php  echo \$data; ?>
    </body>
</h1>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "C:\\Users\\13128\\Desktop\\myBlog\\app\\views\\index.html");
    }
}
