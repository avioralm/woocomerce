<?php

namespace WPML\Core;

use \WPML\Core\Twig\Environment;
use \WPML\Core\Twig\Error\LoaderError;
use \WPML\Core\Twig\Error\RuntimeError;
use \WPML\Core\Twig\Markup;
use \WPML\Core\Twig\Sandbox\SecurityError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedTagError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedFilterError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedFunctionError;
use \WPML\Core\Twig\Source;
use \WPML\Core\Twig\Template;

/* /setup/notice.twig */
class __TwigTemplate_192adbf2004391ad2ccb27e86a8e3429bef42949fb8e45a9dc0be9e95f7832f7 extends \WPML\Core\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"wcml-setup-wizard\" class=\"notice otgs-installer-notice otgs-installer-notice-wpml otgs-installer-notice-plugin-recommendation otgs-is-dismissible wcml-notice\">
    <div class=\"otgs-installer-notice-content\">
        <h2>";
        // line 3
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["text"] ?? null), "prepare", []), "html", null, true);
        echo "</h2>
        <p>";
        // line 4
        echo $this->getAttribute(($context["text"] ?? null), "help", []);
        echo "</p>
        <div class=\"otgs-installer-notice-status\">
            <a class=\"otgs-installer-notice-status-item otgs-installer-notice-status-item-btn\" href=\"";
        // line 6
        echo \WPML\Core\twig_escape_filter($this->env, ($context["setup_url"] ?? null), "html", null, true);
        echo "\">";
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["text"] ?? null), "start", []), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/setup/notice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  40 => 4,  36 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/setup/notice.twig", "/var/www/html/wp-content/plugins/woocommerce-multilingual/templates/setup/notice.twig");
    }
}
