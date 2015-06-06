<?php

require_once('Git.php/Git.php');

$repo = Git::open('../');  // -or- Git::create('/path/to/repo')

$repo->pull('origin', 'master');