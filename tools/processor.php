<?php

include_once 'download-pictures.php';

/**
* 
*/
class Rule
{
  public $regex;
  public $replace;

  public function __construct($regex, $replace)
  {
    $this->regex = $regex;
    $this->replace = $replace;
  }
}

/**
* 
*/
class WordProcessor
{
  private $rules;
  private $processImages = false;

  public function __construct($rulesFile, $processImages=false)
  {
    $this->rules = WordProcessor::openJsonFile($rulesFile);
    $this->processImages = $processImages;
  }

  public function processFile($from, $to)
  {
    $string = WordProcessor::openFile($from);
    $string = $this->process($string);
    WordProcessor::saveFile($string, $to);
  }

  private static function openFile($from)
  {
    return file_get_contents($from);
  }

  private static function openJsonFile($from)
  {
    $string = WordProcessor::openFile($from);
    return json_decode($string);
  }

  private static function saveFile($string, $to)
  {
    file_put_contents($to, $string);
  }

  private function process($string)
  {
    foreach ($this->rules as $rule) {
      $string = preg_replace($rule->regex, $rule->replace, $string);
    }

    if ($this->processImages) {
      $string = downloadPicturesString($string);
    }

    return $string;
  }


}