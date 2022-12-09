<?php

    function write(string $strData, string $file) {

        $handle = fopen($file, "a+");
        fputs($handle, $strData);
        fclose($handle);

    }

?>