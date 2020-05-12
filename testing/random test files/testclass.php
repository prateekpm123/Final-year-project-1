<?php

function select($value1,$tableName) {
    $str = "SELECT";
    return "select $value1 from $tableName";
    for( $i=0;$i<4;$i++){
        $str += ",questions";
    }
    $str += "from $tableName";
    echo "$str"
}

function select($value1,$value2,$tableName) {

    return "select $value1 from $tableName";
     
}
function select($value1,$value3,$value3,$tableName) {

    return "select $value1 from $tableName";
     
}


?>