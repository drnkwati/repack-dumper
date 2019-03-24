<?php

namespace Repack\Dumper;

use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;

class Dumper
{
    /**
     * Dump a value with elegance.
     *
     * @param  mixed  $value
     * @return void
     */
    public function dump($value)
    {
        $dumper = in_array(PHP_SAPI, array('cli', 'phpdbg')) ? new CliDumper : new HtmlDumper;

        $cloner = new VarCloner;

        $dumper->dump($cloner->cloneVar($value));
    }
}
