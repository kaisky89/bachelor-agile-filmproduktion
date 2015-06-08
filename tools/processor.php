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
    $this->rules = openJsonFile($rulesFile);
  }

  public function processFile($from, $to)
  {
    $string = openFile($from);
    $string = process($string);
    saveFile($string, $to);
  }

  private function openFile($from)
  {
    return file_get_contents($from);
  }

  private function openJsonFile($from)
  {
    $string = $openFile($from);
    return json_decode($string);
  }

  private function saveFile($string, $to)
  {
    file_put_contents($to, $string);
  }

  private function process($string)
  {
    foreach ($this->rules as $rule) {
      $string = preg_replace($rule->regex, $rule->replacement, $string);
    }
  }
}