<?php

function downloadPictures($pathToFile)
{
  $string = file_get_contents($pathToFile);

  preg_match_all("|!\[[^\]]*\]\(([^)]+)\)|",
    $string,
    $out, PREG_PATTERN_ORDER);

  foreach ($out[1] as $url) {

    # nur der Dateiname, nicht der ganze Pfad
    $urlParted = explode("/", $url);
    $filename = $urlParted[count($urlParted)-1];

    # Leerzeichen entfernen
    $noSpacesArray = explode(" ", urldecode($filename));
    $noSpaces = "";
    foreach ($noSpacesArray as $fileNamePart) {
      $noSpaces .= $fileNamePart;
    }

    # Punkte entfernen

    ## Endung
    $noPeriodArray = explode(".", $noSpaces);
    $ending = array_pop($noPeriodArray);

    ## Datei Name
    $noPeriod = "";
    foreach ($noPeriodArray as $fileNamePart) {
      $noPeriod .= $fileNamePart;
    }

    ## Beide Dateihälften wieder zusammen fügen

    $newFileName = $noPeriod.$ending;

    
    `cd tex/images/ && wget -N $url -O $newFileName`;
  }
}