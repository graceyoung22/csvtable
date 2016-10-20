<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
     }
</style>
</head>
<body>
<?php

function readCSV($csvfile){
$handle = fopen($csvfile, 'r');
while (!feof($handle)) {
	$line[] = fgetcsv($handle, 1024);
}	
fclose($handle);
return $line;
}

$csvfile = 'text.csv';

$csv = readsvc($csvfile);
echo '<pre>';
print_r($csv);
echo '</pre>';


function build_table($csv){
// begins table
$html = '<table>';
// header 
$html .= '<tr>';
foreach($csv[0] as $key=>$value){
	$html .= '<th>' . $key . '</th>';
}
$html .= '</tr>';
// data
foreach ($csv as $key=>$value){
	$html .= '<tr>';
	foreach($value as $key2=>$value2){
		$html .= '<td>'	. $value2 .'</td>';
	}
$html .= '</tr>';
}
//return table
$html .= '</table>';
return $html;
}

echo build_table($csv);
?>

</body>										</html>
