<?php

namespace App\Helpers;

use voku\helper\AntiXSS;

class HtmlHelper
{
    public static function purify($html)
    {
        $antiXss = new AntiXSS();
        return $antiXss->xss_clean($html);
    }
}