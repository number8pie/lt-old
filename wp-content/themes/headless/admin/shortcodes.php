<?php

// Buttons Shortcode //
function button($atts, $content = null)
{
    extract(shortcode_atts(array('link' => '#', 'target' => '', 'class' => ''), $atts));
    return '<a class="button '.$class.'" href="'.$link.'" target="'.$target.'">' . do_shortcode($content) . '</a>';
}
add_shortcode('button', 'button');