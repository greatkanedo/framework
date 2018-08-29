<?php

/* Inc/base.html */
class __TwigTemplate_073f1742aa551e9227c8eb9a66d2087e86adedcf6a60ec774ab172de15afaef1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
    <div class=\"wrap\" id=\"barba-wrapper\" aria-live=\"polite\">
        <header>
            <h1 class=\"branding\"><a href=\"javascript:void(0);\" title=\"Kane\"><img class=\"logo-image\" src=\"/static/images/logo.svg\" alt=\"logo\"></a></h1>
            <ul class=\"nav nav-list\">
                <li class=\"nav-list-item\"><a class=\"nav-list-link\" href=\"/\" target=\"_self\">HOME</a></li>
                <li class=\"nav-list-item\"><a class=\"nav-list-link\" href=\"/\" target=\"_self\">ABOUT</a></li>
                <li class=\"nav-list-item\"><a class=\"nav-list-link\" href=\"https://github.com/greatkanedo\" target=\"_blank\">GITHUB</a></li>
                <li class=\"nav-list-item\"><a class=\"nav-list-link\" href=\"https://tiaanduplessis.github.io/hexo-theme-brewski-demo/atom.xml\" target=\"_self\">RSS</a></li>
            </ul>
        </header>
        <div class=\"barba-container\" style=\"visibility: visible;\">
            ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "        </div>
            <footer>
                <div class=\"paginator\"></div>
                <div class=\"copyright\">
                    <p> &copy; 2014<script>new Date().getFullYear()>2010&&document.write(\"-\"+new Date().getFullYear());</script>, Content By Kane. All Rights Reserved. <a href=\"/\">Kane Do</a>
                        <br>Powered by <a href=\"/\" rel=\"noreferrer\" target=\"_blank\">Kane</a></p>
                </div>
            </footer>
        </div>
    </div>
        ";
        // line 39
        $this->displayBlock('javascript', $context, $blocks);
        // line 40
        echo "    <script type=\"text/javascript\" src=\"/static/js/love.js\"></script>
</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <link rel=\"stylesheet\" href=\"style.css\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"description\" content=\"A Blog Powered By Kane\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" href=\"/static/favicon.svg\">
        <link rel=\"stylesheet\" href=\"/static/styles/nanoreset.min.css\">
        <link rel=\"stylesheet\" href=\"/static/styles/theme.css\">
    ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "Inc/base.html";
    }

    public function getDebugInfo()
    {
        return array (  99 => 39,  94 => 28,  77 => 6,  74 => 5,  71 => 4,  65 => 40,  63 => 39,  51 => 29,  49 => 28,  34 => 15,  32 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    {% block head %}
        <link rel=\"stylesheet\" href=\"style.css\" />
        <title>{% block title %}{% endblock %} - My Webpage</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"description\" content=\"A Blog Powered By Kane\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" href=\"/static/favicon.svg\">
        <link rel=\"stylesheet\" href=\"/static/styles/nanoreset.min.css\">
        <link rel=\"stylesheet\" href=\"/static/styles/theme.css\">
    {% endblock %}
    </head>
    <body>
    <div class=\"wrap\" id=\"barba-wrapper\" aria-live=\"polite\">
        <header>
            <h1 class=\"branding\"><a href=\"javascript:void(0);\" title=\"Kane\"><img class=\"logo-image\" src=\"/static/images/logo.svg\" alt=\"logo\"></a></h1>
            <ul class=\"nav nav-list\">
                <li class=\"nav-list-item\"><a class=\"nav-list-link\" href=\"/\" target=\"_self\">HOME</a></li>
                <li class=\"nav-list-item\"><a class=\"nav-list-link\" href=\"/\" target=\"_self\">ABOUT</a></li>
                <li class=\"nav-list-item\"><a class=\"nav-list-link\" href=\"https://github.com/greatkanedo\" target=\"_blank\">GITHUB</a></li>
                <li class=\"nav-list-item\"><a class=\"nav-list-link\" href=\"https://tiaanduplessis.github.io/hexo-theme-brewski-demo/atom.xml\" target=\"_self\">RSS</a></li>
            </ul>
        </header>
        <div class=\"barba-container\" style=\"visibility: visible;\">
            {% block content %}{% endblock %}
        </div>
            <footer>
                <div class=\"paginator\"></div>
                <div class=\"copyright\">
                    <p> &copy; 2014<script>new Date().getFullYear()>2010&&document.write(\"-\"+new Date().getFullYear());</script>, Content By Kane. All Rights Reserved. <a href=\"/\">Kane Do</a>
                        <br>Powered by <a href=\"/\" rel=\"noreferrer\" target=\"_blank\">Kane</a></p>
                </div>
            </footer>
        </div>
    </div>
        {% block javascript %}{% endblock %}
    <script type=\"text/javascript\" src=\"/static/js/love.js\"></script>
</body>
</html>", "Inc/base.html", "D:\\www\\myFramework\\application\\Views\\Inc\\base.html");
    }
}
