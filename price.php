
# price product by visitor country currency
# Ahmed-Shahen


$count = @file_get_contents("http://api.falconx.net/ip/?country");
$small  = '$20';
$medium = '$25';
$big    = '$35';

if ($count == 'SA') {

	$small  = '80 ريال';
	$medium = '100 ريال';
	$big    = '135 ريال';

}
if ($count == 'EG') {

	$small  = '150 جنيه';
	$medium = '180 جنيه';
	$big    = '250 جنيه';

}
