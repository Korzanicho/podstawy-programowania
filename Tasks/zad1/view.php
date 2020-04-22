<?php require_once('./TaskOne.php'); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Zadanie 1</title>
</head>
<body>
	<div class="content TaskOne">
		<div class="task-description">
			Napisać program rozwiązujący równanie kwadratowe w postaci ax2 + bx + c = 0. Wczytać za pomocą formularza parametry: a, b, c. Sprawdzić istnienie pierwiastków, wyliczyć je i wyświetlić.
		</div>
		<form action="" method="POST">
			<label for="parametrA">Parametr A:</label>
			<input type="number" name="parametrA" value="0">
			<label for="parametrB">Parametr B:</label>
			<input type="number" name="parametrB" value="0">
			<label for="parametrC">Parametr C:</label>
			<input type="number" name="parametrC" value="0">
			<button>Wyślij</button>
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