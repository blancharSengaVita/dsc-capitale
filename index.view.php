<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form>
    <label for="country"> </label>

    <select id="country">
		<option value=""> Choisi un pays </option>
		<?php foreach ($countries as $key => $country): ?>
		<option value="<?= $key?>"> <?= $key ?></option>`
		<?php endforeach; ?>
	</select>
	<button>donne moi la capitale</button>
</form>
</body>
</html>

