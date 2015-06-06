<?php

 
# Alle Kapitel einzeln in latex konvertieren

$files = scandir('../chapters/');

foreach ($files as $file) {
  if ($file == "." || $file == "..") {
    continue;
  }
  $texfile = explode('.', $file)[0].'.tex';
  `/usr/bin/pandoc -f markdown --latex-engine=xelatex -R -i ../chapters/$file  -o ../latex/$texfile`; 
}