<?php

include_once 'processor.php';

`rm -R ../pipeline`;
`mkdir ../pipeline`;
`mkdir ../pipeline/01-pre`;
`mkdir ../pipeline/02-latex`;
`mkdir ../pipeline/03-post`;
`mkdir ../pipeline/04-merged`;

# ---

# Alle Kapitel einzeln in latex konvertieren

$markdownPreProcessor = new WordProcessor('rules/markdown-pre.json');
$latexPostProcessor = new WordProcessor('rules/latex-post.json');

$files = scandir('../chapters/');

foreach ($files as $file) {
  if ($file == "." || $file == "..") {
    continue;
  }

  // echo "<br>File: <code>".$file."<code>";
  $markdownPreProcessor->processFile("../chapters/".$file, "../pipeline/01-pre/".$file);

  $texfile = explode('.', $file)[0].'.tex';

  `/usr/bin/pandoc -f markdown --latex-engine=xelatex -R -i ../pipeline/01-pre/$file  -o ../pipeline/02-latex/$texfile`; 

  $latexPostProcessor->processFile("../pipeline/02-latex/".$texfile, "../pipeline/03-post/".$texfile);
}

# Einzelne Chapter zusammenfügen

$files = scandir('../pipeline/03-post/');

foreach ($files as $file) {
  if ($file == "." || $file == "..") {
    continue;
  }

  `cat ../pipeline/03-post/$file >> ../pipeline/04-merged/all-chapters.tex`;
}