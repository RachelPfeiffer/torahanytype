<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/torahanytype/install-master/themes/torahanytype/partials/site/footer.htm */
class __TwigTemplate_977883898c0a30ad256c3d9844fa678580a224dba1e66e124f304b02259b51ff extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p>A Project Of</p>
        <div>
            <ul class=\"founders\">
                <li>
                    <img style=\"max-width:35px;max-height:35px;\" src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/small bally.png");
        echo "\">
                    <span>Rachel Pfeiffer</span> <a target=\"_blank\" href=\"https://yourwebelf.com\">https://yourwebelf.com</a>
                </li>
            </ul>
        </div>
        <p class=\"muted credit\">&copy; ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Rachel Pfeiffer</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/torahanytype/install-master/themes/torahanytype/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p>A Project Of</p>
        <div>
            <ul class=\"founders\">
                <li>
                    <img style=\"max-width:35px;max-height:35px;\" src=\"{{ 'assets/images/small bally.png'|theme }}\">
                    <span>Rachel Pfeiffer</span> <a target=\"_blank\" href=\"https://yourwebelf.com\">https://yourwebelf.com</a>
                </li>
            </ul>
        </div>
        <p class=\"muted credit\">&copy; {{ \"now\"|date(\"Y\") }} Rachel Pfeiffer</p>
    </div>
</div>", "/var/www/torahanytype/install-master/themes/torahanytype/partials/site/footer.htm", "");
    }
}
