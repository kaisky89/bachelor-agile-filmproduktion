<?php

function downloadPictures($pathToFile)
{
  $string = file_get_contents($pathToFile);

  preg_match_all("|!\[[^\]]*\]\(([^)]+)\)|",
    $string,
    $out, PREG_PATTERN_ORDER);

  foreach ($out[1] as $url) {
    `cd ../pipeline/04-texprocess/images/ && wget $url`;

    $urlParted = explode("/", $url);
    $filename = $urlParted[count($urlParted)-1];
    $newFileNameArray = explode("%20", $filename);
    $newFileName = "";
    foreach ($newFileNameArray as $fileNamePart) {
      $newFileName .= $fileNamePart;
    }
    if ($filename != $newFileName) {
      `cd ../pipeline/04-texprocess/images/ && mv $filename $newFileName`;
    }
  }
}