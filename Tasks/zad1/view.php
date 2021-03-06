<?php require_once('./TaskOne.php'); ?>
<!DOCTYPE html>
<html lang="pl">
<?php include_once('../../header.php') ?>
<body>
	<div class="content Task TaskOne box">
		<div class="Task__header">
			<h2>Zadanie 1</h2>
		</div>
		<div class="Task__description">
			Napisać program rozwiązujący równanie kwadratowe w postaci ax<sup>2</sup> + bx + c = 0. Wczytać za pomocą formularza parametry: a, b, c. Sprawdzić istnienie pierwiastków, wyliczyć je i wyświetlić.
		</div>
		<form action="" method="POST" class="TaskOne__form">
			<input type="number" name="parametrA" value="0" id="paramA" value="<?php echo $_POST ? $_POST['parametrA'] : null ?>">
			<label for="paramA">x<sup>2</sup></label>+
			<input type="number" name="parametrB" value="0" id="paramB" value="<?php echo $_POST ? $_POST['parametrB'] : null ?>">
			<label for="paramB">x</label>+
			<input type="number" name="parametrC" value="0" value="<?php echo $_POST ? $_POST['parametrC'] : null ?>"> = 0
			<button class="button">Oblicz</button>
		</form>
		<div class="TaskOne__response">
			<?php 
				$taskOne = new TaskOne;
				$taskOne->handle();
			?>
		</div>
	</div>
</body>
</html>