<?php

/* message.html */
class __TwigTemplate_aa1aa8f459544d7fec367e2dda827f1969bd56d5b32a01d7b5dd051b6eea7904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html", "message.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Pink Contact Form</h1>
<div class=\"login-01\">
    <form method=\"post\" action=\"save\">
        <ul>
            <li class=\"first\">
                <a href=\"#\" class=\" icon user\"></a>
                <input type=\"text\" class=\"text\" name=\"name\" value=\"Name\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Name';}\" >
                <div class=\"clear\"></div>
            </li>
            <li class=\"first\">
                <a href=\"#\" class=\" icon email\"></a>
                <input type=\"text\" class=\"text\" name=\"email\" value=\"Email\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Email';}\" >
                <div class=\"clear\"></div>
            </li>
            <li class=\"first\">
                <a href=\"#\" class=\" icon phone\"></a>
                <input type=\"text\" class=\"text\" name=\"phone\" value=\"Phone\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Phone';}\" >
                <div class=\"clear\"></div>
            </li>
            <li class=\"second\">
                <a href=\"#\" class=\" icon msg\"></a>
                <textarea value=\"Message\" name=\"content\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Comments';}\">Comments</textarea>
                <div class=\"clear\"></div>
            </li>
        </ul>
        <input type=\"submit\" onClick=\"myFunction()\" value=\"Submit\" >
        <div class=\"clear\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "message.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template.html\" %}

{% block content %}
<h1>Pink Contact Form</h1>
<div class=\"login-01\">
    <form method=\"post\" action=\"save\">
        <ul>
            <li class=\"first\">
                <a href=\"#\" class=\" icon user\"></a>
                <input type=\"text\" class=\"text\" name=\"name\" value=\"Name\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Name';}\" >
                <div class=\"clear\"></div>
            </li>
            <li class=\"first\">
                <a href=\"#\" class=\" icon email\"></a>
                <input type=\"text\" class=\"text\" name=\"email\" value=\"Email\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Email';}\" >
                <div class=\"clear\"></div>
            </li>
            <li class=\"first\">
                <a href=\"#\" class=\" icon phone\"></a>
                <input type=\"text\" class=\"text\" name=\"phone\" value=\"Phone\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Phone';}\" >
                <div class=\"clear\"></div>
            </li>
            <li class=\"second\">
                <a href=\"#\" class=\" icon msg\"></a>
                <textarea value=\"Message\" name=\"content\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Comments';}\">Comments</textarea>
                <div class=\"clear\"></div>
            </li>
        </ul>
        <input type=\"submit\" onClick=\"myFunction()\" value=\"Submit\" >
        <div class=\"clear\"></div>
    </form>
</div>
{% endblock %}", "message.html", "C:\\Users\\13128\\Desktop\\myBlog\\app\\views\\message.html");
    }
}
