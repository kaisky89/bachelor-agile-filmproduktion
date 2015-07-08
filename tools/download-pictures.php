<?php

function downloadPictures($pathToFile)
{
  $string = file_get_contents($pathToFile);

  downloadPicturesString($string);  
}

function downloadPicturesString($string)
{
  preg_match_all("|!\[[^\]]*\]\(([^)]+)\)|",
    $string,
    $out, PREG_PATTERN_ORDER);

  $i = 0;

  foreach ($out[1] as $url) {

    # Bild speichern
    $urlArray = explode(".", $url);
    $ending = array_pop($urlArray);

    $newFileName = "image".$i++.$ending;
    
    `cd tex/images/ && wget -N --quiet $url -O $newFileName`;

    # Bild umbenennen im Text umbenennen

    $string = str_replace($url, 'images/'.$newFileName, $string);
  }

  return $string;
}