<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_kwota">Kwota: </label>
    <input type="text" id="id_kwota" name="kwota" required value="<?php if(isset($kwota)) print($kwota);?>"/><br />
    <label for="id_lata">Lata: </label>
    <input type="text" id="id_lata" name="lata" required value="<?php if(isset($lata)) print($lata);?>"/><br />
    <label for="id_opr">Oprocentowanie: </label>
    <select name="opr">
        <option value="0">0%</option>
        <option value="5">5%</option>
        <option value="10">10%</option>
        <option value="15">15%</option>
        <option value="20">20%</option>
    </select><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
if (isset($messages)) {
	if (count($messages) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; color: #fff; background-color: #860500; width:300px;">';
        echo 'Błędnie uzupełniony formularz!!! <br />';
		foreach ($messages as $key => $msg) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($rate)){ ?>
<div style="margin: 20px; padding: 10px;  background-color: #021548;color: white; width:300px;">
<?php echo 'Miesięczna rata: '.round($rate, 2).' zł'; ?>
</div>
<?php } ?>

</body>
</html>