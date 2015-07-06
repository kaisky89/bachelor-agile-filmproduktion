<?php

include_once 'processor.php';
include_once 'download-pictures.php';

`rm -R ../pipeline`;
`mkdir ../pipeline`;
`mkdir ../pipeline/01-pre`;
`mkdir ../pipeline/02-latex`;
`mkdir ../pipeline/03-post`;
`mkdir ../pipeline/others`;
`mkdir ../pipeline/others/01-pre`;
`mkdir ../pipeline/others/02-latex`;
`mkdir ../pipeline/others/03-post`;

# ---

# Bilder herunterladen

$files = scandir('../chapters/');

foreach ($files as $file) {
  if ($file == "." || $file == "..") {
    continue;
  }

  downloadPictures("../chapters/".$file);
}


# Alle Kapitel einzeln in latex konvertieren

$markdownPreProcessor = new WordProcessor('rules/markdown-pre.json');
$latexPostProcessor = new WordProcessor('rules/latex-post.json');

$files = scandir('../chapters/');

foreach ($files as $file) {
  if ($file == "." || $file == "..") {
    continue;
  }

  $markdownPreProcessor->processFile("../chapters/".$file, "../pipeline/01-pre/".$file);

  $texfile = explode('.', $file)[0].'.tex';

  `/usr/bin/pandoc --filter pandoc-citeproc -f markdown --latex-engine=xelatex -R -i ../pipeline/01-pre/$file  -o ../pipeline/02-latex/$texfile`; 

  $latexPostProcessor->processFile("../pipeline/02-latex/".$texfile, "../pipeline/03-post/".$texfile);
}

# Zusätzliche Teile in latex konvertieren

$files = scandir('../others/');

foreach ($files as $file) {
  if ($file == "." || $file == "..") {
    continue;
  }

  $markdownPreProcessor->processFile("../others/".$file, "../pipeline/others/01-pre/".$file);

  $texfile = explode('.', $file)[0].'.tex';

  `/usr/bin/pandoc --filter pandoc-citeproc -f markdown --latex-engine=xelatex -R -i ../pipeline/others/01-pre/$file  -o ../pipeline/others/02-latex/$texfile`; 

  $latexPostProcessor->processFile("../pipeline/others/02-latex/".$texfile, "../pipeline/others/03-post/".$texfile);
}

