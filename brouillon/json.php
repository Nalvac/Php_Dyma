<?php

$filename = __DIR__.'/data.json';
$data = file_get_contents($filename);
echo $data;