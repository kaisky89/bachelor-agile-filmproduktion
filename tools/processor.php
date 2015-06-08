<?php

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

  public function __construct($rulesFile)
  {
    $this->rules = WordProcessor::openJsonFile($rulesFile);
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
    // echo "<pre>";
    foreach ($this->rules as $rule) {
      // echo "Regel:";
      var_dump($rule);
      // echo "String vorher:";
      var_dump($string);
      $string = preg_replace($rule->regex, $rule->replace, $string);
      // echo "String nachher:";
      var_dump($string);
    }
    // echo "</pre>";

    return $string;
  }
}