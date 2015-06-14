<?php

function downloadPictures($pathToFile)
{
  $string = file_get_contents($pathToFile);

  preg_match_all("|!\[[^\]]*\]\(([^)]+)\)|",
    $string,
    $out, PREG_PATTERN_ORDER);

  foreach ($out[1] as $url) {
    `cd tex/images/ && wget $url`;

    $urlParted = explode("/", $url);
    $filename = $urlParted[count($urlParted)-1];
    $newFileNameArray = explode(" ", urldecode($filename));
    $newFileName = "";
    foreach ($newFileNameArray as $fileNamePart) {
      $newFileName .= $fileNamePart;
    }
    if ($filename != $newFileName) {
      `cd tex/images/ && mv $filename $newFileName`;
    }
  }
}