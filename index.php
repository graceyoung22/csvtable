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
function build_table($array){
// begins table
$html = '<table>';
// header 
$html .= '<tr>';
foreach($array[0] as $key=>$value){
	$html .= '<th>' . $key . '</th>';
}
$html .= '</tr>';
// data
foreach ($array as $key=>$value){
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
$array = array(
	array('key'=>'word1', 'value'=>1),
	array('key'=>'word2', 'value'=>2),
	array('key'=>'word3', 'value'=>3),
);
echo build_table($array);
?>

</body>										</html>
