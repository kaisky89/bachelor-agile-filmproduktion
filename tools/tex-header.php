<?php

include_once 'createAllChaptersTex.php';

`cp -R tex ../pipeline/04-texprocess`;

`cp -R ../pipeline/03-post ../pipeline/04-texprocess/chapters`;

createAllChaptersTex('../pipeline/04-texprocess/chapters', '../pipeline/04-texprocess/all-chapters.tex', 'chapters/');

//renderTex('../pipeline/04-texprocess')