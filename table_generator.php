<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/19/15
 * Time: 8:53 AM
 */
function tableGenerator($result) {
    $return_str = false;
    
    if ($result->num_rows > 0) {
        $return_str = "";
        $row = $result->fetch_assoc();

        $tableRowHead = "<tr>";
        $tableRow = "<tr>";
        foreach($row as $key => $value) {
            $tableRowHead .= "<th>" . $key . "</th>";
            $tableRow .= "<td>".$value."</td>";
        }
        $tableRowHead .= "</tr>";
        $tableRow .= "</tr>";

        $return_str .= "<thead>";
        $return_str .= $tableRowHead;
        $return_str .= "</thead>";
        $return_str .= "<tbody>";
        $return_str .= $tableRow;
        while($row = $result->fetch_assoc()) {
            $return_str .= "<tr>";
            foreach($row as $key=>$value)
                $return_str .= "<td>".$value."</td>";
            $return_str .= "</tr>";
        }

    }

    return $return_str;
}