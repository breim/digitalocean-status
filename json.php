<?php
mysql_connect("IP DO SERVIDOR", "LOGIN", "SENHA") or die(mysql_error());
mysql_select_db("BANCO DE DADOS") or die(mysql_error());
$query = mysql_query("SELECT *
FROM `consumo_internet`
ORDER BY data DESC LIMIT 100");
$rows = array();
while($row = mysql_fetch_assoc($query)) {
    $rows[] = $row;
}
print json_encode($rows);
mysql_close();

?>
