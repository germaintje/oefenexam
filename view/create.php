<?php
//create formulier
?>
<form action="?op=create" method="POST">
                <div class="form-group">
                    <label for="voornaam">voornaam</label>
                    <input type="text" name="voornaam" id="voornaam" class="form-control" placeholder="naam" required>
                </div>
                <div class="form-group">
                    <label for="achternaam">achternaam</label>
                    <input type="text" name="achternaam" id="achternaam" class="form-control" placeholder="achternaam" required>
                </div>
                <div class="form-group">
                    <label for="bijnaam">bijnaam</label>
                    <input type="text" name="bijnaam" id="bijnaam" class="form-control" placeholder="bijnaam" required>
                </div>

                <button type="submit" class="btn btn-primary" value="voeg gegevens toe">voeg gegevens toe</button>
            </form>
