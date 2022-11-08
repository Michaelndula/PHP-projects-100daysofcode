<?php
$file = 'users.txt';

if (file_exists($file)) {
//    echo readfile($file);
$handle = fopen($file, 'r');
$content = fread($handle, filesize($file));
fclose($handle);

echo $content;
}else{
    $handle = fopen($file, 'w');
    $content = 'Mike'. PHP_EOL . 'John' . PHP_EOL . 'Matthew';
    fwrite($handle, $content);
    fclose($handle);
}