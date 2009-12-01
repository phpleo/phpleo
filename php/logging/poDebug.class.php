<?php

class poDebug
{

    //private static
    
    /**
     * metodo para depurar archivos y tener una salida en html
     * ideal para usar con xDebug
     *
     * @param <type> $data
     * @param <type> $filename
     * @param <type> $fileext
     */
    public static function debug2Vardump($data, $filename = 'debug', $fileext = 'html')
    {
        if (class_exists('sfConfig'))
            $path = sfConfig::get('sf_log_dir', '.');
        else
            $path = '.';

        $file = sprintf('%s.%s', $filename, $fileext);
        
        ob_start();
            var_dump($data);
            $data = ob_get_contents();
        ob_end_clean();
        
        file_put_contents($file, $data);
    }
    
    public static function debugToFileR($data, $fileName = 'debug')
    {
        $fileName = $fileName.'.txt';

        ob_start();
            print_r($data);
            $data = ob_get_contents();
        ob_end_clean();

        file_put_contents($fileName, $data);
    }

    public static function alertPhp($varName) {
        print "<script type='text/javascript'>alert('".$varName."');</script>";
    }

}