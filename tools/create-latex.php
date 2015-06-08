<?php

include_once 'processor.php';

# Ordner latex aufräumen

`rm -R ../latex`;
`mkdir ../latex`;

# ---

# Alle Kapitel einzeln in latex konvertieren

$markdownPreProcessor = new WordProcessor('rules/markdown-pre.json');

$files = scandir('../chapters/');

foreach ($files as $file) {
  if ($file == "." || $file == "..") {
    continue;
  }

  $markdownPreProcessor->process($file, $file);

  $texfile = explode('.', $file)[0].'.tex';

  `/usr/bin/pandoc -f markdown --latex-engine=xelatex -R -i ../chapters/$file  -o ../latex/$texfile`; 
}

