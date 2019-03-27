<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 27/03/19
 * Time: 23:09
 */


/**
 * @param $title String
 * @param $text Array of Strings
 * @return String html block
 */

function description($title, $text) {

    $html = "<section><h2>$title</h2><br>";
    foreach ($text as $item) {
        $html .= "<p class=\"text-justify\"> $item </p>";
    }
    return $html."</section>";
}