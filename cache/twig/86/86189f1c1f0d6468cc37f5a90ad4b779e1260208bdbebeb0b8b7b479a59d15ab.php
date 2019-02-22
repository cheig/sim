<?php

/* showMessage.html */
class __TwigTemplate_6c49cbecb43c0874f8ee40d44767f3004658f4b80abb80a5aae51a7875a31c01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html", "showMessage.html", 1);
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
        echo "<header data-v-f736ef30=\"\" class=\"top eye-protector-processed\" style=\"transition: background-color 0.3s ease 0s; background-color: rgb(193, 230, 198);\">
    <a data-v-f736ef30=\"\" href=\"javascript:;\" class=\"drop-icon\">
        <img data-v-f736ef30=\"\" src=\"/app/views/images/dropmenu1.svg\" alt=\"\">
    </a>
    <section data-v-f736ef30=\"\" style=\"position: relative;\"><!----></section>
    <h2 data-v-f736ef30=\"\" class=\"site-name router-link-active\">Blog</h2>
    <ul data-v-f736ef30=\"\" class=\"drop-menu\" id=\"menu\">
        <li data-v-f736ef30=\"\">
            <a data-v-f736ef30=\"\" href=\"/\" class=\"router-link-active\">首页</a>
        </li>
        <li data-v-f736ef30=\"\">
            <a data-v-f736ef30=\"\" href=\"/?cate=fe\" class=\"\">前端设计</a>
        </li>
        <li data-v-f736ef30=\"\">
            <a data-v-f736ef30=\"\" href=\"/?cate=php\" class=\"\">PHP</a></li>
        <li data-v-f736ef30=\"\">
            <a data-v-f736ef30=\"\" href=\"/?cate=go\" class=\"\">GoLang</a>
        </li>
        <li data-v-f736ef30=\"\">
            <a data-v-f736ef30=\"\" href=\"/?cate=other\" class=\"\">杂谈</a>
        </li>
        <li data-v-f736ef30=\"\">
            <a data-v-f736ef30=\"\" href=\"/link\" class=\"\">友情链接</a>
        </li>
    </ul>
    <section data-v-f736ef30=\"\" class=\"search\">
        <img data-v-f736ef30=\"\" src=\"/app/views/images/search.svg\" alt=\"\">
        <input data-v-f736ef30=\"\" type=\"text\" placeholder=\"搜索 O(∩_∩)O~~\" class=\"keyword eye-protector-processed\" style=\"transition: background-color 0.3s ease 0s; background-color: rgb(193, 230, 198);\">
    </section>
</header>
<section data-v-15646442=\"\" class=\"pageHeader\">
    <h2 data-v-15646442=\"\">He110's Blog</h2>
    <section data-v-15646442=\"\" class=\"intro\">手握日月摘星辰，世间无我这般人</section>
    <ul data-v-15646442=\"\">
        <li data-v-15646442=\"\">
            <a data-v-15646442=\"\" href=\"https://github.com/\">
                <img data-v-15646442=\"\" src=\"/app/views/images/github.svg\" alt=\"GitHub\">
            </a>
        </li>
        <li data-v-15646442=\"\">
            <a data-v-15646442=\"\" href=\"http://blog.he110.info\">
                <img data-v-15646442=\"\" src=\"/app/views/images/home.svg\" alt=\"Blog\">
            </a>
        </li>
        <li data-v-15646442=\"\">
            <a data-v-15646442=\"\" href=\"http://wpa.qq.com/msgrd?v=3&amp;uin=810535237&amp;site=qq&amp;menu=yes\">
                <img data-v-15646442=\"\" src=\"/app/views/images/qq.svg\" alt=\"OICQ\">
            </a>
        </li>
        <li data-v-15646442=\"\">
            <a data-v-15646442=\"\" href=\"mailto:i@he110.info\">
                <img data-v-15646442=\"\" src=\"/app/views/images/mail.svg\" alt=\"Mail\">
            </a>
        </li>
    </ul>
</section>
<div class=\"login-01\">
    <section style=\"display:inline-block;float:right; \">
        <a href=\"index/test\">添加留言</a>
    </section>
    <ul data-v-6f47eb74=\"\" class=\"list\">
        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 66
            echo "        <li data-v-6f47eb74=\"\" class=\"eye-protector-processed\" style=\"transition: background-color 0.3s ease 0s;
         background-color: rgb(193, 230, 198);\">
            <h3 data-v-6f47eb74=\"\" class=\"eye-protector-processed\" style=\"border-bottom-color: rgba(0, 0, 0, 0.35);\">
                <a data-v-6f47eb74=\"\" href=\"/detail/0\" class=\"\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "title", array()), "html", null, true);
            echo "</a>
            </h3>
            <section data-v-6f47eb74=\"\" class=\"desc\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "content", array()), "html", null, true);
            echo "</section>
            <section data-v-6f47eb74=\"\" class=\"footer eye-protector-processed\" style=\"border-top-color: rgba(0, 0, 0, 0.35);\">
                <section data-v-6f47eb74=\"\" class=\"date\"> ";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "createtime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</section>
                <a data-v-6f47eb74=\"\" href=\"/detail/0\" class=\"more\">阅读全文 &gt;</a>
            </section>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    </ul>
    <div class=\"clear\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "showMessage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 78,  113 => 73,  108 => 71,  103 => 69,  98 => 66,  94 => 65,  31 => 4,  28 => 3,  11 => 1,);
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
<header data-v-f736ef30=\"\" class=\"top eye-protector-processed\" style=\"transition: background-color 0.3s ease 0s; background-color: rgb(193, 230, 198);\">
    <a data-v-f736ef30=\"\" href=\"javascript:;\" class=\"drop-icon\">
        <img data-v-f736ef30=\"\" src=\"/app/views/images/dropmenu1.svg\" alt=\"\">
    </a>
    <section data-v-f736ef30=\"\" style=\"position: relative;\"><!----></section>
    <h2 data-v-f736ef30=\"\" class=\"site-name router-link-active\">Blog</h2>
    <ul data-v-f736ef30=\"\" class=\"drop-menu\" id=\"menu\">
        <li data-v-f736ef30=\"\">
            <a data-v-f736ef30=\"\" href=\"/\" class=\"router-link-active\">首页</a>
        </li>
        <li data-v-f736ef30=\"\">
            <a data-v-f736ef30=\"\" href=\"/?cate=fe\" class=\"\">前端设计</a>
        </li>
        <li data-v-f736ef30=\"\">
            <a data-v-f736ef30=\"\" href=\"/?cate=php\" class=\"\">PHP</a></li>
        <li data-v-f736ef30=\"\">
            <a data-v-f736ef30=\"\" href=\"/?cate=go\" class=\"\">GoLang</a>
        </li>
        <li data-v-f736ef30=\"\">
            <a data-v-f736ef30=\"\" href=\"/?cate=other\" class=\"\">杂谈</a>
        </li>
        <li data-v-f736ef30=\"\">
            <a data-v-f736ef30=\"\" href=\"/link\" class=\"\">友情链接</a>
        </li>
    </ul>
    <section data-v-f736ef30=\"\" class=\"search\">
        <img data-v-f736ef30=\"\" src=\"/app/views/images/search.svg\" alt=\"\">
        <input data-v-f736ef30=\"\" type=\"text\" placeholder=\"搜索 O(∩_∩)O~~\" class=\"keyword eye-protector-processed\" style=\"transition: background-color 0.3s ease 0s; background-color: rgb(193, 230, 198);\">
    </section>
</header>
<section data-v-15646442=\"\" class=\"pageHeader\">
    <h2 data-v-15646442=\"\">He110's Blog</h2>
    <section data-v-15646442=\"\" class=\"intro\">手握日月摘星辰，世间无我这般人</section>
    <ul data-v-15646442=\"\">
        <li data-v-15646442=\"\">
            <a data-v-15646442=\"\" href=\"https://github.com/\">
                <img data-v-15646442=\"\" src=\"/app/views/images/github.svg\" alt=\"GitHub\">
            </a>
        </li>
        <li data-v-15646442=\"\">
            <a data-v-15646442=\"\" href=\"http://blog.he110.info\">
                <img data-v-15646442=\"\" src=\"/app/views/images/home.svg\" alt=\"Blog\">
            </a>
        </li>
        <li data-v-15646442=\"\">
            <a data-v-15646442=\"\" href=\"http://wpa.qq.com/msgrd?v=3&amp;uin=810535237&amp;site=qq&amp;menu=yes\">
                <img data-v-15646442=\"\" src=\"/app/views/images/qq.svg\" alt=\"OICQ\">
            </a>
        </li>
        <li data-v-15646442=\"\">
            <a data-v-15646442=\"\" href=\"mailto:i@he110.info\">
                <img data-v-15646442=\"\" src=\"/app/views/images/mail.svg\" alt=\"Mail\">
            </a>
        </li>
    </ul>
</section>
<div class=\"login-01\">
    <section style=\"display:inline-block;float:right; \">
        <a href=\"index/test\">添加留言</a>
    </section>
    <ul data-v-6f47eb74=\"\" class=\"list\">
        {% for val in data %}
        <li data-v-6f47eb74=\"\" class=\"eye-protector-processed\" style=\"transition: background-color 0.3s ease 0s;
         background-color: rgb(193, 230, 198);\">
            <h3 data-v-6f47eb74=\"\" class=\"eye-protector-processed\" style=\"border-bottom-color: rgba(0, 0, 0, 0.35);\">
                <a data-v-6f47eb74=\"\" href=\"/detail/0\" class=\"\">{{ val.title }}</a>
            </h3>
            <section data-v-6f47eb74=\"\" class=\"desc\">{{ val.content }}</section>
            <section data-v-6f47eb74=\"\" class=\"footer eye-protector-processed\" style=\"border-top-color: rgba(0, 0, 0, 0.35);\">
                <section data-v-6f47eb74=\"\" class=\"date\"> {{ val.createtime|date('Y-m-d H:i:s')}}</section>
                <a data-v-6f47eb74=\"\" href=\"/detail/0\" class=\"more\">阅读全文 &gt;</a>
            </section>
        </li>
        {% endfor %}
    </ul>
    <div class=\"clear\"></div>
</div>
{% endblock %}", "showMessage.html", "C:\\Users\\13128\\Desktop\\myBlog\\app\\views\\showMessage.html");
    }
}
