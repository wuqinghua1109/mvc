<?php

/* index.html */
class __TwigTemplate_27d34e15778624511e7e2d92d9f8f84a1b8dda45026628d9120d71bd944c11ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("show.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "show.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<center>
\t<table>
\t\t<tr>
\t\t\t<td>ID</td>
\t\t\t<td>用户id</td>
\t\t\t<td>商品id</td>
\t\t\t<td>操作</td>
\t\t</tr>
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 13
            echo "\t\t<tr>
\t\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "s_id", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "u_id", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "sum", array()), "html", null, true);
            echo "</td>
\t\t\t<td><a href=\"/mvc/index/del/id/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "s_id", array()), "html", null, true);
            echo "\">删除</a></td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t</table>
</center>

";
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
        return array (  70 => 20,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  46 => 13,  42 => 12,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"show.html\" %}
{% block content %}

<center>
\t<table>
\t\t<tr>
\t\t\t<td>ID</td>
\t\t\t<td>用户id</td>
\t\t\t<td>商品id</td>
\t\t\t<td>操作</td>
\t\t</tr>
\t\t{% for var in data %}
\t\t<tr>
\t\t\t<td>{{ var.s_id }}</td>
\t\t\t<td>{{ var.u_id }}</td>
\t\t\t<td>{{ var.sum }}</td>
\t\t\t<td><a href=\"/mvc/index/del/id/{{var.s_id }}\">删除</a></td>
\t\t</tr>
\t\t{%endfor %}
\t</table>
</center>

{% endblock %}
";
    }
}
