<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Library;


class Helpers
{

    public static function getLangString($object, $string)
    {
        $lang = localization()->getCurrentLocale();
        return isset($object[$string . strtoupper($lang)]) ? $object[$string . strtoupper($lang)] : $object[$string];
    }

}
