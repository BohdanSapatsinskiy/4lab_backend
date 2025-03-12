<?php
namespace Models;

class FileManager
{
    private static $dir = "text";

    public static function readFile($fileName)
    {
        $filePath = self::$dir . "/" . $fileName;

        if (file_exists($filePath)) {
            return file_get_contents($filePath);
        } else {
            return "Файл не знайдено!";
        }
    }
    
    public static function writeFile($fileName, $text)
    {
        $filePath = self::$dir . "/" . $fileName;     
        file_put_contents($filePath, $text, FILE_APPEND);
    }
    

    public static function clearFile($fileName)
    {
        $filePath = self::$dir . "/" . $fileName;
        if (file_exists($filePath)) {
            file_put_contents($filePath, "");
        } else {
            return "Файл не знайдено!";
        }
    }
}
