<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodrigo
 * Date: 18/12/17
 * Time: 20:14
 */

namespace helpers;
use config\SiteInfo;

class Utilidade
{
    public static function asset($url)
    {
        return SiteInfo::$url.$url;
    }
}