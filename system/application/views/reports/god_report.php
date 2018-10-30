<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

</head>

<?php
function f_d($var)
{
    if ($var == 0) return "&nbsp;"; else
        return sprintf("%22.2f", $var);
}

function datetostring($date)
{
    $d = explode("-", $date);
    return $d['0'] . '.' . $d['1'] . '.' . $d['2'];
}

echo "<table>";
echo "<tr>
		<td>Название фирмы</bd>
		<td>Договор</td>
		<td>БИН</td>
		<td>КВТ</td>
		</tr>";
$j = 1;
foreach ($god->result() as $n) {
    echo "<tr>
		<td>{$n->firm_name}</bd>
		<td>{$n->firm_dogovor}</td>
		<td>'" . (trim($n->firm_bin)) . "</td>
		<td>{$n->kvt}</td></tr>";

}

?>
</table>
</html>