<?php

echo `cd .. && git fetch origin`;
echo `cd .. && git reset --hard origin/master`;
echo `cd .. && git checkout master`;