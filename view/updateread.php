<?php include 'header.php';
// in dit bestand zet je de form die je houdige gegevens laat zien


while($row = $updateread->fetch(PDO::FETCH_ASSOC)) {

?>
<form action="?op=update&id=<?php echo $row['id']?>" method="POST">
                <div class="form-group">
                    <label for="voornaam">voornaam</label>
                    <input type="text" name="voornaam" id="voornaam" class="form-control" placeholder="naam" value="<?php echo $row['voornaam']?>" required>
                </div>
                <div class="form-group">
                    <label for="achternaam">achternaam</label>
                    <input type="text" name="achternaam" id="achternaam" class="form-control" placeholder="achternaam" value="<?php echo $row['achternaam']?>" required>
                </div>
                <div class="form-group">
                    <label for="bijnaam">bijnaam</label>
                    <input type="text" name="bijnaam" id="bijnaam" class="form-control" placeholder="bijnaam" value="<?php echo $row['bijnaam']?>"  required>
                </div>

                <button type="submit" class="btn btn-primary" value="voeg gegevens toe">voeg gegevens toe</button>
            </form>
<?php
}

?>