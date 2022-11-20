<?php

// Ler o arquivo csv 
$rows = array_map('str_getcsv', file('../ex3/lista.csv'));
$header = array_shift($rows);
$csv = array();
foreach ($rows as $row) {
    $csv[] = array_combine($header, $row);
}

foreach ($csv as $row) {
    foreach ($row as $key => $value) {
        echo $key . ' => ' . $value . '<br>';
    }
    echo '<hr>' . '<br>';
}
?>