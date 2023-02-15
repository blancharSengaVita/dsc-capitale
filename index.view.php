<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<form action="index.php">
	<label for="country"> </label>

	<select name="country" id="country">
		<option value="">
			Choisi un pays
		</option>
		<?php foreach($countries as $countryName => $countryInfos ): ?>
			<option value="<?= urlencode($countryName) ?>">
				<?= mb_strtoupper($countryName) ?>
			</option>
		<?php endforeach; ?>

	</select>
	<button type='submit'>
		donne moi la capitale
	</button>
</form>



<div>
	<p>

	</p>
	<img src="images/-flag-icon-256.png"
		 alt="drapeau de ce pays : ">
</div>


<?php if(isset($erros['inexistant-country'])): ?>
	<p>
		<?=$erros['inexistant-country'] ?>
	</p>
<?php endif; ?>

</body>
</html>

