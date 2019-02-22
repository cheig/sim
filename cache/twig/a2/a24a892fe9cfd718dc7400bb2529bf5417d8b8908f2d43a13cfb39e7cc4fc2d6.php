<?php

/* template.html */
class __TwigTemplate_96815c92005e12bd5bcb3bf33a22eba5833ee3589f6777b87c59078b26514689 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<title>留言板- home</title>
<link href=\"/app/views/css/app.css\" rel='stylesheet' type='text/css' />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Pink Contact Form ,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements\"./>
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
\t<script type=\"text/javascript\" charset=\"utf-8\" async=\"\" src=\"/app/views/js/app.js\"></script>

</head>
<body class=\"eye-protector-processed\" style=\"background-color: rgb(193, 230, 198); transition: background-color 0.3s ease 0s;\">
";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "\t<!--start-copyright-->
   \t\t<div class=\"copy-right\">
   \t\t\t<div class=\"wrap\">
\t\t\t\t<p>2018.All rights reserved.Power By <a target=\"_blank\" href=\"localhost\">Lii Chua</a></p>
\t\t</div>
\t</div>
\t<!--//end-copyright-->
</body>
</html>";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "template.html";
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  49 => 14,  37 => 17,  35 => 14,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
<title>留言板- home</title>
<link href=\"/app/views/css/app.css\" rel='stylesheet' type='text/css' />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Pink Contact Form ,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements\"./>
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
\t<script type=\"text/javascript\" charset=\"utf-8\" async=\"\" src=\"/app/views/js/app.js\"></script>

</head>
<body class=\"eye-protector-processed\" style=\"background-color: rgb(193, 230, 198); transition: background-color 0.3s ease 0s;\">
{% block content %}

{% endblock %}
\t<!--start-copyright-->
   \t\t<div class=\"copy-right\">
   \t\t\t<div class=\"wrap\">
\t\t\t\t<p>2018.All rights reserved.Power By <a target=\"_blank\" href=\"localhost\">Lii Chua</a></p>
\t\t</div>
\t</div>
\t<!--//end-copyright-->
</body>
</html>", "template.html", "C:\\Users\\13128\\Desktop\\myBlog\\app\\views\\template.html");
    }
}
