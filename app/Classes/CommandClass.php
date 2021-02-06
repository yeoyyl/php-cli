<?php 

namespace App\Classes;
use App\Traits\GeneralTrait;

class CommandClass {
  
  use GeneralTrait;

  public function getUpperStr($value) {
    $upperCaseArr = $this->convertToUpperCase($value);
    $upperCaseStr = $this->convertToString($upperCaseArr);
    return $upperCaseStr;
  }

  public function getAlternateStr($value) {
    $alternateArr = $this->converToAlternateCase($value);
    $alternateStr = implode('', $alternateArr);
    return $alternateStr;
  }

  public function createCSV($value) {
    $lowerCaseStr = $this->convertToLoweCase($value);
    $lowerCaseArr = $this->convertToArray($lowerCaseStr);
    $status = $this->createCSVFile($lowerCaseArr);
    return $status;
  }
}

