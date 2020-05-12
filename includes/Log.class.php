<?php

class Log 
{


/*
* @desc    Writes to a file
* @param   str $strFileName     The name of the file
* @param   str $strData         Data appended to the file     
 */

    public function Write($strFileName, $strData) 
    {
        if(!is_writable($strFileName)) {
            die('Change your CHMOD permissions to writeable for '.$strFileName);
        }

        $handle = fopen($strFileName, 'a+');

        fwrite( $handle, "\r" .$strData);
        fclose($handle);
    }

    public function Read($strFileName)
    {
        $handle = fopen($strFileName, 'r');
        
        return file_get_contents($strFileName);
    }

    public function LineCount($strFileName)
    {
        // $file="largefile.txt";
        // $linecount = 0;
        // $handle = fopen($strFileName, "r");
        // while(!feof($handle))
        // {
        //     $line = fgets($handle, 4096);
        //     $linecount = $linecount + substr_count($line, PHP_EOL);
        // }

        // fclose($handle);

        // return $linecount;

        $file = basename('test.txt'); 
        $no_of_lines = count(file($file)); 
        // echo "There are $no_of_lines lines in $file"."\n";
        return $no_of_lines;
    }
}





?>
