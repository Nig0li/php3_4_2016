<?php

/* Index.html */
class __TwigTemplate_9b5925b22ed8490a717acdb5679fbcf99da8df418857b84d26caf286b6d9a655 extends Twig_Template
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
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <title>Главная</title>
</head>
<body>
";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 9
        echo "</body>
</html>";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "Index.html";
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  31 => 9,  29 => 8,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*   <meta charset="UTF-8">*/
/*   <title>Главная</title>*/
/* </head>*/
/* <body>*/
/* {% block content %}{% endblock %}*/
/* </body>*/
/* </html>*/
