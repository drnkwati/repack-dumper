<?php

use Repack\Dumper\Dumper;

if (!function_exists('dd')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param  dynamic mixed
     * @return void
     */
    function dd()
    {
        if (class_exists('\Symfony\Component\VarDumper\Dumper\HtmlDumper')) {
            array_map(function ($x) {
                $dumper = new Dumper;
                $dumper->dump($x);
            }, func_get_args());
        } else {
            array_map(function ($x) {var_dump($x);}, func_get_args());
        }

        exit(1);
    }
}

if (!function_exists('de')) {
    function de()
    {
        array_map(function ($x) {echo $x;}, func_get_args());

        exit(1);
    }
}
