<?php 
//als je naar ?op=read&[id die je wilt zien] gaat zie je de bijhorende gegevens

while($row = $read->fetch(PDO::FETCH_ASSOC)) {

echo $row['voornaam'] . $row['achternaam'] . $row['bijnaam'] ;


}?>