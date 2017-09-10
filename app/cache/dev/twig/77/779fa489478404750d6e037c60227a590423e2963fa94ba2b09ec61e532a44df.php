<?php

/* base.html.twig */
class __TwigTemplate_5fd45f05cd77215283137449b324a118d1b4a264528fc2f73a8c966746603584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'topbar' => array($this, 'block_topbar'),
            'navbar' => array($this, 'block_navbar'),
            'leftmenu' => array($this, 'block_leftmenu'),
            'js' => array($this, 'block_js'),
            'grafics' => array($this, 'block_grafics'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45a0b03b1e552136cfa099096b4aa86336ba18b8b291cf0f5f28e3761a564ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a0b03b1e552136cfa099096b4aa86336ba18b8b291cf0f5f28e3761a564ee5->enter($__internal_45a0b03b1e552136cfa099096b4aa86336ba18b8b291cf0f5f28e3761a564ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"description\" content=\"A front-end template that helps you build fast, modern mobile web apps.\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "        <!-- Add to homescreen for Chrome on Android -->
        <meta name=\"mobile-web-app-capable\" content=\"yes\">
        <link rel=\"icon\" sizes=\"192x192\" href=\"images/android-desktop.png\">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <meta name=\"apple-mobile-web-app-title\" content=\"Material Design Lite\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"images/ios-desktop.png\">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name=\"msapplication-TileImage\" content=\"images/touch/ms-touch-icon-144x144-precomposed.png\">
        <meta name=\"msapplication-TileColor\" content=\"#3372DF\">

        <link rel=\"shortcut icon\" href=\"images/favicon.png\">

        <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
        <!--
        <link rel=\"canonical\" href=\"http://www.example.com/\">
        -->
        ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 58
        echo "    </head>
    <body>
        ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 179
        echo "        </div>
    </body>    
</html>
";
        
        $__internal_45a0b03b1e552136cfa099096b4aa86336ba18b8b291cf0f5f28e3761a564ee5->leave($__internal_45a0b03b1e552136cfa099096b4aa86336ba18b8b291cf0f5f28e3761a564ee5_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_e461b68545ba2543be9cc7a8531a611a448f97878be6075d397ab16871b50053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e461b68545ba2543be9cc7a8531a611a448f97878be6075d397ab16871b50053->enter($__internal_e461b68545ba2543be9cc7a8531a611a448f97878be6075d397ab16871b50053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "            <title>Welcome!</title>
        ";
        
        $__internal_e461b68545ba2543be9cc7a8531a611a448f97878be6075d397ab16871b50053->leave($__internal_e461b68545ba2543be9cc7a8531a611a448f97878be6075d397ab16871b50053_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31e853428abfccba5f0655f158d41480699d51ab7bd6ad2d4dd1b125ee7b3ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e853428abfccba5f0655f158d41480699d51ab7bd6ad2d4dd1b125ee7b3ab4->enter($__internal_31e853428abfccba5f0655f158d41480699d51ab7bd6ad2d4dd1b125ee7b3ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 32
        echo "            <link href=\"https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en\" rel=\"stylesheet\">
            <link href=\"material.cyan-light_blue.min.css\" rel=\"stylesheet\">

            <!-- Compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\">

            <!-- Compiled and minified JavaScript -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>

            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">


            <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/material.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" >
            <style>
                #view-source {
                    position: fixed;
                    display: block;
                    right: 0;
                    bottom: 0;
                    margin-right: 40px;
                    margin-bottom: 40px;
                    z-index: 900;
                }
            </style>
        ";
        
        $__internal_31e853428abfccba5f0655f158d41480699d51ab7bd6ad2d4dd1b125ee7b3ab4->leave($__internal_31e853428abfccba5f0655f158d41480699d51ab7bd6ad2d4dd1b125ee7b3ab4_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f47468aeb1980827ad472398808e8d5324f552174da1158a06eb83f2d1fb685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f47468aeb1980827ad472398808e8d5324f552174da1158a06eb83f2d1fb685->enter($__internal_6f47468aeb1980827ad472398808e8d5324f552174da1158a06eb83f2d1fb685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "            ";
        $this->displayBlock('topbar', $context, $blocks);
        // line 87
        echo "                ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 123
        echo "                </div>


                ";
        // line 126
        $this->displayBlock('js', $context, $blocks);
        // line 129
        echo "                ";
        $this->displayBlock('grafics', $context, $blocks);
        // line 178
        echo "            ";
        
        $__internal_6f47468aeb1980827ad472398808e8d5324f552174da1158a06eb83f2d1fb685->leave($__internal_6f47468aeb1980827ad472398808e8d5324f552174da1158a06eb83f2d1fb685_prof);

    }

    // line 61
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_403faa7a4b893373d0f2961ff913ee943e1524eec7731e12408f228d15776fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403faa7a4b893373d0f2961ff913ee943e1524eec7731e12408f228d15776fa7->enter($__internal_403faa7a4b893373d0f2961ff913ee943e1524eec7731e12408f228d15776fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 62
        echo "                <div class=\"demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header\">
                    <header class=\"demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600\">
                        <div class=\"mdl-layout__header-row\">
                            <span class=\"mdl-layout-title\">Home</span>
                            <div class=\"mdl-layout-spacer\"></div>
                            <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--expandable\">
                                <label class=\"mdl-button mdl-js-button mdl-button--icon\" for=\"search\">
                                    <i class=\"material-icons\">search</i>
                                </label>
                                <div class=\"mdl-textfield__expandable-holder\">
                                    <input class=\"mdl-textfield__input\" type=\"text\" id=\"search\">
                                    <label class=\"mdl-textfield__label\" for=\"search\">Enter your query...</label>
                                </div>
                            </div>
                            <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon\" id=\"hdrbtn\">
                                <i class=\"material-icons\">more_vert</i>
                            </button>
                            <ul class=\"mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right\" for=\"hdrbtn\">
                                <li class=\"mdl-menu__item\">About</li>
                                <li class=\"mdl-menu__item\">Contact</li>
                                <li class=\"mdl-menu__item\">Legal information</li>
                            </ul>
                        </div>
                    </header>
                ";
        
        $__internal_403faa7a4b893373d0f2961ff913ee943e1524eec7731e12408f228d15776fa7->leave($__internal_403faa7a4b893373d0f2961ff913ee943e1524eec7731e12408f228d15776fa7_prof);

    }

    // line 87
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_d2f90f2d81a9f7e9202715b99c859d41b605633a3b604c8cad4c62478692444f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f90f2d81a9f7e9202715b99c859d41b605633a3b604c8cad4c62478692444f->enter($__internal_d2f90f2d81a9f7e9202715b99c859d41b605633a3b604c8cad4c62478692444f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 88
        echo "                    <div class=\"demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50\">
                        <header class=\"demo-drawer-header\">
                            <img src=\"images/user.jpg\" class=\"demo-avatar\">
                            <div class=\"demo-avatar-dropdown\">
                                <span>hello@example.com</span>
                                <div class=\"mdl-layout-spacer\"></div>
                                <button id=\"accbtn\" class=\"mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon\">
                                    <i class=\"material-icons\" role=\"presentation\">arrow_drop_down</i>
                                    <span class=\"visuallyhidden\">Accounts</span>
                                </button>
                                <ul class=\"mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect\" for=\"accbtn\">
                                    <li class=\"mdl-menu__item\">hello@example.com</li>
                                    <li class=\"mdl-menu__item\">info@example.com</li>
                                    <li class=\"mdl-menu__item\"><i class=\"material-icons\">add</i>Add another account...</li>
                                </ul>
                            </div>
                        </header>


                        <nav class=\"demo-navigation mdl-navigation mdl-color--blue-grey-800\">
                            ";
        // line 108
        $this->displayBlock('leftmenu', $context, $blocks);
        // line 121
        echo "                        </nav>
                    ";
        
        $__internal_d2f90f2d81a9f7e9202715b99c859d41b605633a3b604c8cad4c62478692444f->leave($__internal_d2f90f2d81a9f7e9202715b99c859d41b605633a3b604c8cad4c62478692444f_prof);

    }

    // line 108
    public function block_leftmenu($context, array $blocks = array())
    {
        $__internal_8a6a2478e7f6cf8875de737f9d4752a0a14324f497a104413430d05afee5d4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6a2478e7f6cf8875de737f9d4752a0a14324f497a104413430d05afee5d4bc->enter($__internal_8a6a2478e7f6cf8875de737f9d4752a0a14324f497a104413430d05afee5d4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftmenu"));

        // line 109
        echo "                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">home</i>Home</a>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">inbox</i>Inbox</a>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">delete</i>Trash</a>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">report</i>Spam</a>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">forum</i>Forums</a>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">flag</i>Updates</a>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">local_offer</i>Promos</a>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">shopping_cart</i>Purchases</a>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">people</i>Social</a>
                                <div class=\"mdl-layout-spacer\"></div>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">help_outline</i><span class=\"visuallyhidden\">Help</span></a>
                            ";
        
        $__internal_8a6a2478e7f6cf8875de737f9d4752a0a14324f497a104413430d05afee5d4bc->leave($__internal_8a6a2478e7f6cf8875de737f9d4752a0a14324f497a104413430d05afee5d4bc_prof);

    }

    // line 126
    public function block_js($context, array $blocks = array())
    {
        $__internal_0c6a8623300468b5935301a63177296dc868740132c574800234063ed703e2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6a8623300468b5935301a63177296dc868740132c574800234063ed703e2aa->enter($__internal_0c6a8623300468b5935301a63177296dc868740132c574800234063ed703e2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 127
        echo "                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/material.min.js"), "html", null, true);
        echo "\"></script>
                ";
        
        $__internal_0c6a8623300468b5935301a63177296dc868740132c574800234063ed703e2aa->leave($__internal_0c6a8623300468b5935301a63177296dc868740132c574800234063ed703e2aa_prof);

    }

    // line 129
    public function block_grafics($context, array $blocks = array())
    {
        $__internal_7dc0657e03ad6ec879f3be3bbe9835fa91d02bf77a5e7eb24740ebb325ed526b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc0657e03ad6ec879f3be3bbe9835fa91d02bf77a5e7eb24740ebb325ed526b->enter($__internal_7dc0657e03ad6ec879f3be3bbe9835fa91d02bf77a5e7eb24740ebb325ed526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grafics"));

        // line 130
        echo "                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" style=\"position: fixed; left: -1000px; height: -1000px;\">
                    <defs>
                    <mask id=\"piemask\" maskContentUnits=\"objectBoundingBox\">
                        <circle cx=0.5 cy=0.5 r=0.49 fill=\"white\">
                        <circle cx=0.5 cy=0.5 r=0.40 fill=\"black\">
                    </mask>
                    <g id=\"piechart\">
                    <circle cx=0.5 cy=0.5 r=0.5>
                    <path d=\"M 0.5 0.5 0.5 0 A 0.5 0.5 0 0 1 0.95 0.28 z\" stroke=\"none\" fill=\"rgba(255, 255, 255, 0.75)\">
                    </g>
                    </defs>
                    </svg>
                    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 500 250\" style=\"position: fixed; left: -1000px; height: -1000px;\">
                    <defs>
                    <g id=\"chart\">
                    <g id=\"Gridlines\">
                    <line fill=\"#888888\" stroke=\"#888888\" stroke-miterlimit=\"10\" x1=\"0\" y1=\"27.3\" x2=\"468.3\" y2=\"27.3\">
                    <line fill=\"#888888\" stroke=\"#888888\" stroke-miterlimit=\"10\" x1=\"0\" y1=\"66.7\" x2=\"468.3\" y2=\"66.7\">
                    <line fill=\"#888888\" stroke=\"#888888\" stroke-miterlimit=\"10\" x1=\"0\" y1=\"105.3\" x2=\"468.3\" y2=\"105.3\">
                    <line fill=\"#888888\" stroke=\"#888888\" stroke-miterlimit=\"10\" x1=\"0\" y1=\"144.7\" x2=\"468.3\" y2=\"144.7\">
                    <line fill=\"#888888\" stroke=\"#888888\" stroke-miterlimit=\"10\" x1=\"0\" y1=\"184.3\" x2=\"468.3\" y2=\"184.3\">
                    </g>
                    <g id=\"Numbers\">
                    <text transform=\"matrix(1 0 0 1 485 29.3333)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">500</text>
                    <text transform=\"matrix(1 0 0 1 485 69)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">400</text>
                    <text transform=\"matrix(1 0 0 1 485 109.3333)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">300</text>
                    <text transform=\"matrix(1 0 0 1 485 149)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">200</text>
                    <text transform=\"matrix(1 0 0 1 485 188.3333)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">100</text>
                    <text transform=\"matrix(1 0 0 1 0 249.0003)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">1</text>
                    <text transform=\"matrix(1 0 0 1 78 249.0003)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">2</text>
                    <text transform=\"matrix(1 0 0 1 154.6667 249.0003)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">3</text>
                    <text transform=\"matrix(1 0 0 1 232.1667 249.0003)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">4</text>
                    <text transform=\"matrix(1 0 0 1 309 249.0003)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">5</text>
                    <text transform=\"matrix(1 0 0 1 386.6667 249.0003)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">6</text>
                    <text transform=\"matrix(1 0 0 1 464.3333 249.0003)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">7</text>
                    </g>
                    <g id=\"Layer_5\">
                    <polygon opacity=\"0.36\" stroke-miterlimit=\"10\" points=\"0,223.3 48,138.5 154.7,169 211,88.5
                             294.5,80.5 380,165.2 437,75.5 469.5,223.3 \t\">
                    </g>
                    <g id=\"Layer_4\">
                    <polygon stroke-miterlimit=\"10\" points=\"469.3,222.7 1,222.7 48.7,166.7 155.7,188.3 212,132.7
                             296.7,128 380.7,184.3 436.7,125 \t\">
                    </g>
                    </g>
                    </defs>
                    </svg>
                ";
        
        $__internal_7dc0657e03ad6ec879f3be3bbe9835fa91d02bf77a5e7eb24740ebb325ed526b->leave($__internal_7dc0657e03ad6ec879f3be3bbe9835fa91d02bf77a5e7eb24740ebb325ed526b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  289 => 130,  283 => 129,  273 => 127,  267 => 126,  249 => 109,  243 => 108,  235 => 121,  233 => 108,  211 => 88,  205 => 87,  174 => 62,  168 => 61,  161 => 178,  158 => 129,  156 => 126,  151 => 123,  148 => 87,  145 => 61,  139 => 60,  119 => 45,  115 => 44,  101 => 32,  95 => 31,  87 => 9,  81 => 8,  71 => 179,  69 => 60,  65 => 58,  63 => 31,  41 => 11,  39 => 8,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"description\" content=\"A front-end template that helps you build fast, modern mobile web apps.\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {% block title %}
            <title>Welcome!</title>
        {% endblock  %}
        <!-- Add to homescreen for Chrome on Android -->
        <meta name=\"mobile-web-app-capable\" content=\"yes\">
        <link rel=\"icon\" sizes=\"192x192\" href=\"images/android-desktop.png\">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <meta name=\"apple-mobile-web-app-title\" content=\"Material Design Lite\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"images/ios-desktop.png\">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name=\"msapplication-TileImage\" content=\"images/touch/ms-touch-icon-144x144-precomposed.png\">
        <meta name=\"msapplication-TileColor\" content=\"#3372DF\">

        <link rel=\"shortcut icon\" href=\"images/favicon.png\">

        <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
        <!--
        <link rel=\"canonical\" href=\"http://www.example.com/\">
        -->
        {% block stylesheets %}
            <link href=\"https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en\" rel=\"stylesheet\">
            <link href=\"material.cyan-light_blue.min.css\" rel=\"stylesheet\">

            <!-- Compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\">

            <!-- Compiled and minified JavaScript -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>

            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">


            <link rel=\"stylesheet\" href=\"{{ asset('css/material.min.css')}}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\" >
            <style>
                #view-source {
                    position: fixed;
                    display: block;
                    right: 0;
                    bottom: 0;
                    margin-right: 40px;
                    margin-bottom: 40px;
                    z-index: 900;
                }
            </style>
        {% endblock  %}
    </head>
    <body>
        {% block body %}
            {% block topbar %}
                <div class=\"demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header\">
                    <header class=\"demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600\">
                        <div class=\"mdl-layout__header-row\">
                            <span class=\"mdl-layout-title\">Home</span>
                            <div class=\"mdl-layout-spacer\"></div>
                            <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--expandable\">
                                <label class=\"mdl-button mdl-js-button mdl-button--icon\" for=\"search\">
                                    <i class=\"material-icons\">search</i>
                                </label>
                                <div class=\"mdl-textfield__expandable-holder\">
                                    <input class=\"mdl-textfield__input\" type=\"text\" id=\"search\">
                                    <label class=\"mdl-textfield__label\" for=\"search\">Enter your query...</label>
                                </div>
                            </div>
                            <button class=\"mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon\" id=\"hdrbtn\">
                                <i class=\"material-icons\">more_vert</i>
                            </button>
                            <ul class=\"mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right\" for=\"hdrbtn\">
                                <li class=\"mdl-menu__item\">About</li>
                                <li class=\"mdl-menu__item\">Contact</li>
                                <li class=\"mdl-menu__item\">Legal information</li>
                            </ul>
                        </div>
                    </header>
                {% endblock topbar %}
                {% block navbar %}
                    <div class=\"demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50\">
                        <header class=\"demo-drawer-header\">
                            <img src=\"images/user.jpg\" class=\"demo-avatar\">
                            <div class=\"demo-avatar-dropdown\">
                                <span>hello@example.com</span>
                                <div class=\"mdl-layout-spacer\"></div>
                                <button id=\"accbtn\" class=\"mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon\">
                                    <i class=\"material-icons\" role=\"presentation\">arrow_drop_down</i>
                                    <span class=\"visuallyhidden\">Accounts</span>
                                </button>
                                <ul class=\"mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect\" for=\"accbtn\">
                                    <li class=\"mdl-menu__item\">hello@example.com</li>
                                    <li class=\"mdl-menu__item\">info@example.com</li>
                                    <li class=\"mdl-menu__item\"><i class=\"material-icons\">add</i>Add another account...</li>
                                </ul>
                            </div>
                        </header>


                        <nav class=\"demo-navigation mdl-navigation mdl-color--blue-grey-800\">
                            {% block leftmenu %}
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">home</i>Home</a>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">inbox</i>Inbox</a>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">delete</i>Trash</a>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">report</i>Spam</a>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">forum</i>Forums</a>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">flag</i>Updates</a>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">local_offer</i>Promos</a>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">shopping_cart</i>Purchases</a>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">people</i>Social</a>
                                <div class=\"mdl-layout-spacer\"></div>
                                <a class=\"mdl-navigation__link\" href=\"\"><i class=\"mdl-color-text--blue-grey-400 material-icons\" role=\"presentation\">help_outline</i><span class=\"visuallyhidden\">Help</span></a>
                            {% endblock leftmenu%}
                        </nav>
                    {% endblock navbar%}
                </div>


                {% block js %}
                    <script src=\"{{asset('js/material.min.js')}}\"></script>
                {% endblock %}
                {% block grafics %}
                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" style=\"position: fixed; left: -1000px; height: -1000px;\">
                    <defs>
                    <mask id=\"piemask\" maskContentUnits=\"objectBoundingBox\">
                        <circle cx=0.5 cy=0.5 r=0.49 fill=\"white\">
                        <circle cx=0.5 cy=0.5 r=0.40 fill=\"black\">
                    </mask>
                    <g id=\"piechart\">
                    <circle cx=0.5 cy=0.5 r=0.5>
                    <path d=\"M 0.5 0.5 0.5 0 A 0.5 0.5 0 0 1 0.95 0.28 z\" stroke=\"none\" fill=\"rgba(255, 255, 255, 0.75)\">
                    </g>
                    </defs>
                    </svg>
                    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 500 250\" style=\"position: fixed; left: -1000px; height: -1000px;\">
                    <defs>
                    <g id=\"chart\">
                    <g id=\"Gridlines\">
                    <line fill=\"#888888\" stroke=\"#888888\" stroke-miterlimit=\"10\" x1=\"0\" y1=\"27.3\" x2=\"468.3\" y2=\"27.3\">
                    <line fill=\"#888888\" stroke=\"#888888\" stroke-miterlimit=\"10\" x1=\"0\" y1=\"66.7\" x2=\"468.3\" y2=\"66.7\">
                    <line fill=\"#888888\" stroke=\"#888888\" stroke-miterlimit=\"10\" x1=\"0\" y1=\"105.3\" x2=\"468.3\" y2=\"105.3\">
                    <line fill=\"#888888\" stroke=\"#888888\" stroke-miterlimit=\"10\" x1=\"0\" y1=\"144.7\" x2=\"468.3\" y2=\"144.7\">
                    <line fill=\"#888888\" stroke=\"#888888\" stroke-miterlimit=\"10\" x1=\"0\" y1=\"184.3\" x2=\"468.3\" y2=\"184.3\">
                    </g>
                    <g id=\"Numbers\">
                    <text transform=\"matrix(1 0 0 1 485 29.3333)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">500</text>
                    <text transform=\"matrix(1 0 0 1 485 69)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">400</text>
                    <text transform=\"matrix(1 0 0 1 485 109.3333)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">300</text>
                    <text transform=\"matrix(1 0 0 1 485 149)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">200</text>
                    <text transform=\"matrix(1 0 0 1 485 188.3333)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">100</text>
                    <text transform=\"matrix(1 0 0 1 0 249.0003)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">1</text>
                    <text transform=\"matrix(1 0 0 1 78 249.0003)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">2</text>
                    <text transform=\"matrix(1 0 0 1 154.6667 249.0003)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">3</text>
                    <text transform=\"matrix(1 0 0 1 232.1667 249.0003)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">4</text>
                    <text transform=\"matrix(1 0 0 1 309 249.0003)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">5</text>
                    <text transform=\"matrix(1 0 0 1 386.6667 249.0003)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">6</text>
                    <text transform=\"matrix(1 0 0 1 464.3333 249.0003)\" fill=\"#888888\" font-family=\"'Roboto'\" font-size=\"9\">7</text>
                    </g>
                    <g id=\"Layer_5\">
                    <polygon opacity=\"0.36\" stroke-miterlimit=\"10\" points=\"0,223.3 48,138.5 154.7,169 211,88.5
                             294.5,80.5 380,165.2 437,75.5 469.5,223.3 \t\">
                    </g>
                    <g id=\"Layer_4\">
                    <polygon stroke-miterlimit=\"10\" points=\"469.3,222.7 1,222.7 48.7,166.7 155.7,188.3 212,132.7
                             296.7,128 380.7,184.3 436.7,125 \t\">
                    </g>
                    </g>
                    </defs>
                    </svg>
                {% endblock grafics %}
            {% endblock body%}
        </div>
    </body>    
</html>
", "base.html.twig", "/var/www/html/mongoDBsymfony/app/Resources/views/base.html.twig");
    }
}
