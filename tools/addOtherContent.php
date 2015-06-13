<?php

function addOtherContent()
{
  $files = scandir('../pipeline/others/03-post');

  foreach ($files as $file) {
    if ($file == "." || $file == "..") {
      continue;
    }

    `cat ../pipeline/others/03-post/$file >> ../pipeline/04-texprocess/etc/$file`:
  }
}