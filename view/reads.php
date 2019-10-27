<?php 
//table met alle[gegevens die je wilt laten zien] gegevens van een database tabel

    $tableheader = false;
    $html = "";
    $html .= "<table class='table'>";

while($row = $reads->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
 if($tableheader == false) {
    $html.= "<tr>";
    foreach($row as $key => $value) {
        if($key == "id"){
            $html .= "";
        }else{
        $html .= "<th> $key</th>";
        }
    }
    $html .= "<th colspan='3'>Action</th></tr>";
    $tableheader = true;
 }
    $html .= "<tr>";
    foreach ($row as $key => $value) {
        if($key == "id"){
            $html .= "";
        }else{
            $html .= "<td>$value</td>";
        }
    }
    $html .= "
    <td>" . "<a class='' href='?op=read&id=$id'> Read</a>
    <td>" . "<a class='' href='?op=updateread&id=$id'> Update</a>
    <td>" . "<a class='' href='?op=delete&id=$id'> Delete</a></td></tr>";
}
$html .= "</table>";
//return $html;

echo $html;
    
//echo $row['voornaam'] . $row['achternaam'] . $row['bijnaam'] ;
?>
