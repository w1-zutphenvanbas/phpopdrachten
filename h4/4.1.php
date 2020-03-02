<?php
date_default_timezone_set("Europe/Amsterdam");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd hier in Nederland is $vandaag ";
?>

<?php
date_default_timezone_set("Asia/Tokyo");
$vandaag1 = date("d-m-Y H:i");
echo "De datum en tijd in Japan is nu: $vandaag1 ";
?>
<?php
date_default_timezone_set("");
$vandaag2 = date("d-m-Y H:i");
echo "De datum en tijd in New York is nu: $vandaag2 ";
?>

