<?php

 
# Alle Kapitel einzeln in latex konvertieren

$files = scandir('../chapters/');

echp '<pre>';
foreach ($files as $file) {
  echo $file;
}
echo '</pre>';


`/usr/bin/pandoc -f markdown --latex-engine=xelatex -R -i ../chapters/00-expose.md  -o ../latex/pandocked.tex`;