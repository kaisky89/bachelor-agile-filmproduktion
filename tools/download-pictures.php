<?php

function downloadPictures($pathToFile)
{
  $string = file_get_contents($pathToFile);

  preg_match_all("|!\[[^\]]*\]\(([^)]+)\)|",
    $string,
    $out, PREG_PATTERN_ORDER);

  foreach ($out[1] as $url) {

    $urlParted = explode("/", $url);
    $filename = $urlParted[count($urlParted)-1];
    $newFileNameArray = explode(" ", urldecode($filename));
    $newFileName = "";
    foreach ($newFileNameArray as $fileNamePart) {
      $newFileName .= $fileNamePart;
    }
    
    `cd tex/images/ && wget -N $url -O $newFileName`;
  }
}