<?php

function createAllChaptersTex($pathToChapters, $pathToTexFile, $prefixForChapterfiles){
  
  # read file for pre and suffix infos
  $json = json_decode(
    file_get_contents(
      'createAllChaptersPreSuffix.json'
    )
  );

  $prefix = $json->prefix;
  $suffix = $json->suffix;

  $outputString = "";

  $files = scandir($pathToChapters);

  foreach ($files as $file) {
    if ($file == "." || $file == "..") {
      continue;
    }

    # prefix
    foreach ($prefix as $pre) {
      $outputString .= $pre."\n";
    }

    # file
    $fileWithoutExtension = explode('.', $file)[0];
    $outputString .= '\include{'.$prefixForChapterfiles.$fileWithoutExtension.'}'."\n";

    # suffix
    foreach ($suffix as $suf) {
      $outputString .= $suf."\n";
    }

    $outputString .= "\n";
  }

  file_put_contents($pathToTexFile, $outputString);
}