<?php

/* ShakleeMemberCenterBundle:Business:index.html.twig */
class __TwigTemplate_f9349b6fb69b5f2c888c4c257fae470f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ShakleeMemberCenterBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ShakleeMemberCenterBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "\t<ul>
\t\t<li>Summary</li>
\t</ul>
\t<div>
\t\t<h3>Fasttrack</h3>
\t</div>
\t<div>
\t\t<h3>Power Bonus</h3>
\t</div>
\t<div>
\t\t<h3>Dream Trip</h3>
\t</div>
\t<div>
\t\t<h3>Dream Trip</h3>
\t</div>
\t<div>
\t\t<h3>Trackers & Incentives</h3>
\t</div>
\t<div>
\t\t<h3>New Leads</h3>
\t</div>
\t<div>
\t\t<h3>Followup</h3>
\t</div>
\t<div>
\t\t<h3>My Date Book</h3>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ShakleeMemberCenterBundle:Business:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,);
    }
}
