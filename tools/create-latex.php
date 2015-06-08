<?php

include_once 'processor.php';

# Ordner latex aufräumen

`rm -R ../latex`;
`mkdir ../latex`;

# Ordner pre aufräumen

`rm -R ../pre`;
`mkdir ../pre`;

# ---

# Alle Kapitel einzeln in latex konvertieren

$markdownPreProcessor = new WordProcessor('rules/markdown-pre.json');

$files = scandir('../chapters/');

foreach ($files as $file) {
  if ($file == "." || $file == "..") {
    continue;
  }

  echo "<br>File: <code>".$file."<code>";
  $markdownPreProcessor->processFile("../chapters/".$file, "../pre/".$file);

  $texfile = explode('.', $file)[0].'.tex';

  `/usr/bin/pandoc -f markdown --latex-engine=xelatex -R -i ../pre/$file  -o ../latex/$texfile`; 
}

