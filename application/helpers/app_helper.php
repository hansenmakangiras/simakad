<?php

/*
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

if (!function_exists('dump')) {

    function dump($var, $label = 'Dump', $echo = TRUE) {
        // Store dump in variable
        ob_start();
        var_dump($var);
        $hasil = ob_get_clean();

        // Add formatting
        $hasil = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $hasil);
        $hasil = '<pre style="background: #FFFEEF; color: #000; border: 1px dotted #000; padding: 10px; margin: 10px 0; text-align: left;">' . $label . ' => ' . $output . '</pre>';

        // Output
        if ($echo == TRUE) {
            echo $hasil;
        } else {
            return $hasil;
        }
    }

}
if (!function_exists('dump_exit')) {

    function dump_exit($var, $label = 'Dump', $echo = TRUE) {
        dump($var, $label, $echo);
        exit;
    }

}