<?php

/* photo_meta.html */
class __TwigTemplate_0411c715edafbe78049ece4e91de0d833667839ab04e864c13c53ecc5191ee7b extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"photo_meta_nonce\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["photo_meta_nonce"]) ? $context["photo_meta_nonce"] : null), "html", null, true);
        echo "\" />
<div id=\"krc_mui_button\" class=\"wp-core-ui\">
\t<div id='krc_photo_upload_panel' >
\t\t<input type='button' value='キャスト画像アップロード' class='widefat button krc_upload_btn' id='' />
\t\t<div class='krc_preview_box' id='krc_photo__panel' >
\t\t\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["krc_cast_screens"]) ? $context["krc_cast_screens"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "\t\t\t<li><img class='krc_img_prev cast_photo' style='' src='";
            echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true);
            echo "' /><input class='krc_img_prev_hidden' type='hidden' name='h_krc_cast_screens[]' value='";
            echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true);
            echo "' /></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t\t</div>
\t\t<input type='button' value='キャスト画像アップロード' class='widefat button krc_upload_btn' id='' />
\t</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "photo_meta.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  32 => 7,  28 => 6,  19 => 1,);
    }
}
