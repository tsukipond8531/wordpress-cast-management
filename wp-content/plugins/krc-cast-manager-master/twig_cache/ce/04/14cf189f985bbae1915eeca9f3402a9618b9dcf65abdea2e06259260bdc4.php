<?php

/* cast_meta.html */
class __TwigTemplate_ce0414cf189f985bbae1915eeca9f3402a9618b9dcf65abdea2e06259260bdc4 extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"cast_meta_nonce\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["cast_meta_nonce"]) ? $context["cast_meta_nonce"] : null), "html", null, true);
        echo "\" />
<table class=\"form-table\">
\t<tr>
\t\t<th style=''><label for='名前'>名前 *</label></th>
\t\t<td><input class='widefat' name='krc_name' id='krc_name' type='text' value='";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["krc_name"]) ? $context["krc_name"] : null), "html", null, true);
        echo "' /></td>
\t</tr>
\t<tr>
\t\t<th style=''><label for='年齢'>年齢</label></th>
\t\t<td><input class='widefat' name='krc_age' id='krc_age' type='number' value='";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["krc_age"]) ? $context["krc_age"] : null), "html", null, true);
        echo "' /></td></tr>
\t<tr>
\t\t<th style=''><label for='身長'>身長</label></th>
\t\t<td><input class='widefat' name='krc_tall' id='krc_tall' type='number' value='";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["krc_tall"]) ? $context["krc_tall"] : null), "html", null, true);
        echo "' /></td>
\t</tr>
\t<tr>
\t\t<th style=''><label for='バスト'>バスト</label></th>
\t\t<td><input class='widefat' name='krc_bust' id='krc_bust' type='number' value='";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["krc_bust"]) ? $context["krc_bust"] : null), "html", null, true);
        echo "' /></td>
\t</tr>
\t<tr>
\t\t<th style=''><label for='ウェスト'>ウェスト</label></th>
\t\t<td><input class='widefat' name='krc_waist' id='krc_waist' type='number' value='";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["krc_waist"]) ? $context["krc_waist"] : null), "html", null, true);
        echo "' /></td>
\t</tr>
\t<tr>
\t\t<th style=''><label for='ヒップ'>ヒップ</label></th>
\t\t<td><input class='widefat' name='krc_hips' id='krc_hips' type='number' value='";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["krc_hips"]) ? $context["krc_hips"] : null), "html", null, true);
        echo "' /></td>
\t</tr>
\t<tr>
\t\t<th style=''><label for='カップ'>カップ</label></th>
\t\t<td><input class='widefat' name='krc_cups' id='krc_cups' type='text' value='";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["krc_cups"]) ? $context["krc_cups"] : null), "html", null, true);
        echo "' /></td>
\t</tr>
\t
\t
\t
\t
\t
</table>
";
    }

    public function getTemplateName()
    {
        return "cast_meta.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 28,  61 => 24,  54 => 20,  47 => 16,  40 => 12,  34 => 9,  27 => 5,  19 => 1,);
    }
}
