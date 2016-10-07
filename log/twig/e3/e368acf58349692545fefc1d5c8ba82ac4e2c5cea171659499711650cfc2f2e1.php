<?php

/* show.html */
class __TwigTemplate_0e4c3d02701d7b2bfc2e855516262490df917cc42e36a472821344b6fc8f3f59 extends Twig_Template
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
        echo "<html>
\t<header>header</header>
\t<content>
\t\t";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "\t</content>
     <footer>foot</footer>
</html>";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "show.html";
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  33 => 4,  27 => 7,  25 => 4,  20 => 1,);
    }

    public function getSource()
    {
        return "<html>
\t<header>header</header>
\t<content>
\t\t{% block content %}
\t\t
\t\t{% endblock %}
\t</content>
     <footer>foot</footer>
</html>";
    }
}
