<?php
$dane = 'REMOTE_ADDR='.$_SERVER["REMOTE_ADDR"];
$jezyk = 'HTTP_ACCEPT_LANGUAGE='.$_SERVER["HTTP_ACCEPT_LANGUAGE"];
$data=date("Y-m-d");
$czas=date("H:i");

print "Licznik odwiedzin == 0<br>";
print "Twoje dane to:<br>";
echo $dane;
print "<br>";
echo $jezyk;
print "<br>Mój czas lokalny: $data $czas<br><br>";
echo '<font color="red">Twoich odwiedzin nie zapisuję bo nie mam tyle miejsca na dysku!!! 73!</font>';
?>
sp9ryc
.
