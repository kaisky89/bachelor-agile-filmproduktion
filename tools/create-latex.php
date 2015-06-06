<?php

 
# Alle Kapitel einzeln in latex konvertieren

$files = scandir('../chapters/');

echo '<pre>';
foreach ($files as $file) {
  if ($file == "." || $file == "..") {
    continue;
  }
  echo $file;
  echo "\n";
}
echo '</pre>';


`/usr/bin/pandoc -f markdown --latex-engine=xelatex -R -i ../chapters/00-expose.md  -o ../latex/pandocked.tex`;