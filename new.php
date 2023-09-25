<?php
$file = fopen("response.txt","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);
?>