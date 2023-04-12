<pre>
<?php

$filename = __DIR__.'/test.txt';

var_dump(file_exists($filename));
echo '<br/>';
var_dump(is_file($filename));
readfile($filename);
file_get_contents($filename);

file_put_contents($filename, 'Je suis une pomme', FILE_APPEND);

/* Ressource de gestion de flux de ficher */

$handle = fopen($filename, 'r');

//fwrite($handle, 'oops')


do {
    $data = fread($handle, 1);
    echo $data;
}while($data);

fclose($handle);

copy($filename, 'copy.txt');

/* Suppression de fichier */
unlink($filename);

/* Supprimer un dossier */

rmdir('directoryLink')

?>

</pre>