<?php
require_once(dirname(__FILE__).'/../filesystem/plFiles.php');

# TODO: faltan test

class poMedia
{

    static public function sufixMediaPrefix($path, $id, $filename, $prefix = '', $sufix = '')
    {
        $plf = new plFiles();
        $filename = $plf->changeName($filename, $prefix, $sufix);

        return sprintf($path, $id, $filename);
    }

}