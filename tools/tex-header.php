<?php

include_once 'createAllChaptersTex.php';

`cp -R tex ../pipeline/04-texprocess`:

`mkdir ../pipeline/04-texprocess/chapters`;
`cp -R ../pipeline/03-post ../pipeline/04-texprocess/chapters`:

createAllChaptersTex('../pipeline/04-texprocess/chapters', '../pipeline/04-texprocess/all-chapter.tex', 'chapters/');

renderTex('../pipeline/04-texprocess')