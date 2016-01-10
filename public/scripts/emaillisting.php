<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
$path = ROOT.'/emails.txt';
if(!file_exists($path)) {
    mkdir($path , 0755);
}

$handle = fopen($savedFile, 'w');
$contents = explode(',', fread($handle, filesize($fileLocation)));
$email_text = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
contents[] = $email_text;

fwrite($handle, implode(',', contents));
fclose($handle);

$redirect = getenv('HTTP_HOST');
header("Location: $redirect");

?>