<?php


use JetBrains\PhpStorm\Pure;

class FilePrinter extends Printer
{
    protected string $file;

    #[Pure] public function __construct($name, $file)
    {
        parent::__construct($name);
        $this->file = $file;
    }

    function print($message)
    {
        // lam vic voi file
        // fopen() ham mo file; w+ = write + read
        $fileOpen = fopen($this->file, 'w+');
        //ghi noi dung vao file: fwrite()
        fwrite($fileOpen, $message);
        //dong file lai ham: fclose()
        fclose($fileOpen);
    }
}