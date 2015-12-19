<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/19/15
 * Time: 8:53 AM
 */
function tableGenerator($result, $actions=null) {
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
        if($actions!=null){
            $tableRowHead .= "<th>";
            foreach($actions as $key=>$value)
                $tableRowHead .= $key."/";
            $tableRowHead = substr($tableRowHead, 0, -1);
            $tableRowHead .= "</th>";
            $tableRow .= "<td>";
            if(isset($actions['delete']))
                $tableRow .= "<a class='btn btn-danger' href='".$actions['delete'].$row['#']."'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>&nbsp;";
            if(isset($actions['edit']))
                $tableRow .= "<a class='btn btn-warning' href='".$actions['edit'].$row['#']."'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a>";
            $tableRow .= "</td>";
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
//            if($delete_url_pre!=null) $return_str .= "<td><a class='btn btn-danger' href='".$delete_url_pre.$row['#']."'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a></td>";
            if($actions!=null){
                $return_str .= "<td>";
                if(isset($actions['delete']))
                    $return_str .= "<a class='btn btn-danger' href='".$actions['delete'].$row['#']."'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>&nbsp;";
                if(isset($actions['edit']))
                    $return_str .= "<a class='btn btn-warning' href='".$actions['edit'].$row['#']."'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a>";
                $return_str .= "</td>";
            }
            $return_str .= "</tr>";
        }

    }

    return $return_str;
}