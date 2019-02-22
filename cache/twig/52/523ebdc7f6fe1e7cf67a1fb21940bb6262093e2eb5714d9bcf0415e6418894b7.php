<?php

/* layout.html */
class __TwigTemplate_612a31924304cacb35f23efd6751305139f1068cd360f2a4ad6bb276b0881cdf extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <title>留言板- home</title>
    <link href=\"/app/views/css/style.css\" rel='stylesheet' type='text/css' />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Pink Contact Form ,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements\"./>
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</head>
<body>
<h1>Pink Contact Form</h1>
<div class=\"login-01\">
    <form>
        <ul>
            <li class=\"first\">
                <a href=\"#\" class=\" icon user\"></a><input type=\"text\" class=\"text\" value=\"Name\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Name';}\" >
                <div class=\"clear\"></div>
            </li>
            <li class=\"first\">
                <a href=\"#\" class=\" icon email\"></a><input type=\"text\" class=\"text\" value=\"Email\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Email';}\" >
                <div class=\"clear\"></div>
            </li>
            <li class=\"first\">
                <a href=\"#\" class=\" icon phone\"></a><input type=\"text\" class=\"text\" value=\"Phone\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Phone';}\" >
                <div class=\"clear\"></div>
            </li>
            <li class=\"second\">
                <a href=\"#\" class=\" icon msg\"></a><textarea value=\"Message\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Comments';}\">Comments</textarea>
                <div class=\"clear\"></div>
            </li>
        </ul>
        <input type=\"submit\" onClick=\"myFunction()\" value=\"Submit\" >
        <div class=\"clear\"></div>
    </form>
</div>
<!--start-copyright-->
<div class=\"copy-right\">
    <div class=\"wrap\">
        <p>2018.All rights reserved.Power By <a target=\"_blank\" href=\"localhost\">Lii Chua</a></p>
    </div>
</div>
<!--//end-copyright-->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "layout.html";
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
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <title>留言板- home</title>
    <link href=\"/app/views/css/style.css\" rel='stylesheet' type='text/css' />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Pink Contact Form ,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements\"./>
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</head>
<body>
<h1>Pink Contact Form</h1>
<div class=\"login-01\">
    <form>
        <ul>
            <li class=\"first\">
                <a href=\"#\" class=\" icon user\"></a><input type=\"text\" class=\"text\" value=\"Name\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Name';}\" >
                <div class=\"clear\"></div>
            </li>
            <li class=\"first\">
                <a href=\"#\" class=\" icon email\"></a><input type=\"text\" class=\"text\" value=\"Email\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Email';}\" >
                <div class=\"clear\"></div>
            </li>
            <li class=\"first\">
                <a href=\"#\" class=\" icon phone\"></a><input type=\"text\" class=\"text\" value=\"Phone\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Phone';}\" >
                <div class=\"clear\"></div>
            </li>
            <li class=\"second\">
                <a href=\"#\" class=\" icon msg\"></a><textarea value=\"Message\" onFocus=\"this.value = '';\" onBlur=\"if (this.value == '') {this.value = 'Comments';}\">Comments</textarea>
                <div class=\"clear\"></div>
            </li>
        </ul>
        <input type=\"submit\" onClick=\"myFunction()\" value=\"Submit\" >
        <div class=\"clear\"></div>
    </form>
</div>
<!--start-copyright-->
<div class=\"copy-right\">
    <div class=\"wrap\">
        <p>2018.All rights reserved.Power By <a target=\"_blank\" href=\"localhost\">Lii Chua</a></p>
    </div>
</div>
<!--//end-copyright-->
</body>
</html>", "layout.html", "C:\\Users\\13128\\Desktop\\myBlog\\app\\views\\layout.html");
    }
}
