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
		<?php foreach ($countries as $key => $country): ?>
			<option value="<?= $key?>" >
				<?= mb_strtoupper($key) ?>
			</option>`
			<?php $countryName = $_GET['country'] ?>
		<?php endforeach; ?>
	</select>
	<button type='submit'>
		donne moi la capitale
	</button>
</form>


<?php if (array_key_exists($countryName, $countries)): ?>
<div>
	<p>
		<?= mb_ucfirst($countries[$countryName]['capital-name']) ?>
	</p>
	<img src="images/<?= $countryName ?>-flag-icon-256.png"
		 alt="drapeau de ce pays : <?= mb_ucfirst($countryName) ?>">
</div>
<?php elseif ($countryName === ''): ?>

<?php else: ?>
	<p>
		erreur
	</p>
<?php endif; ?>
</body>
</html>

