<?php

function backend_style_css($ep)
{
    $backend_css = new rex_fragment();

    return    $ep->getSubject().$backend_css->parse('backend_css.php');
}
