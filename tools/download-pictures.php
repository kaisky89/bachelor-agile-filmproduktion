<?php

function downloadPictures($pathToFile)
{
  $string = file_get_contents($pathToFile);

  downloadPicturesString($string);  
}

function downloadPicturesString($string, &$imageNumber = null)
{
  preg_match_all("|!\[[^\]]*\]\(([^)]+)\)|",
    $string,
    $out, PREG_PATTERN_ORDER);

  if ($imageNumber == null) {
    $i = 0;
  } else {
    $i = $imageNumber;
  }

  foreach ($out[1] as $url) {

    # Bild speichern
    $urlArray = explode(".", $url);
    $ending = array_pop($urlArray);

    $newFileName = "image".$i++.'.'.$ending;
    
    `cd tex/images/ && wget -N $url -O $newFileName`;

    # Bild im Text umbenennen

    $string = str_replace($url, 'images/'.$newFileName, $string);
  }

  $imageNumber = $i;

  return $string;
}