<?php 

namespace App\Traits;

trait GeneralTrait
{
public function convertToUpperCase($value){
    return array_map('strtoupper', $value);
}

public function convertToLoweCase($value){
    return strtolower($value);
}

public function converToAlternateCase($value) {
    $alternateArr = $this->convertToArray($value);
    $length = count($alternateArr);

    for ($x = 0; $x < $length; $x+=2) {
        $alternateArr[$x] = strtolower($alternateArr[$x]);
    }

    return $alternateArr;
}

public function convertToString($value){
    return implode(' ', $value);
}

public function convertToArray($value){
    return str_split($value);
}

public function createCSVFile($value){
    try{
        $list = array (
            $value
        );
        
        $fp = fopen('file.csv', 'w');
        
        foreach ($list as $fields) {
            fputcsv($fp, $fields);
        }     
        fclose($fp);

        return true;

    }catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
        return false;
    }
}

}