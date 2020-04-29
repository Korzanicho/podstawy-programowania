<?php require_once('./TaskTwo.php'); ?>
<!DOCTYPE html>
<html lang="pl">
<?php include_once('../../header.php') ?>
<body>
	<div class="content Task TaskTwo box">
		<div class="Task__header">
			<h2>Zadanie 2</h2>
		</div>
		<div class="Task__description">
			Napisać program liczący pole trójkąta o zadanych wierzchołkach (x1, y1), (x2, y2), (x3, y3). Wczytać współrzędne wierzchołków za pomocą formularza. Sprawdzić czy jest to trójkąt. Jeśli tak, policzyć jego pole i wyświetlić. Jeśli nie, napisać: <q>podane współrzędne nie tworzą trójkąta</q> 
		</div>
		<form action="" method="POST" class="TaskTwo__form">
			<div class="form-item">			
				(
					<input type="number" step="any" name="x1" id="x1" placeholder="x1" value="<?php echo $_POST ? $_POST['x1'] : null ?>">,&nbsp;
					<input type="number" step="any" name="y1" id="y1" placeholder="y1" value="<?php echo $_POST ? $_POST['y1'] : null ?>">
				)
			</div>
			<div class="form-item">			
				(
					<input type="number" step="any" name="x2" id="x2" placeholder="x2" value="<?php echo $_POST ? $_POST['x2'] : null ?>">,&nbsp;
					<input type="number" step="any" name="y2" id="y2" placeholder="y2" value="<?php echo $_POST ? $_POST['y2'] : null ?>">
				)
			</div>
			<div class="form-item">			
				(
					<input type="number" step="any" name="x3" id="x3" placeholder="x3" value="<?php echo $_POST ? $_POST['x3'] : null ?>">,&nbsp;
					<input type="number" step="any" name="y3" id="y3" placeholder="y3" value="<?php echo $_POST ? $_POST['y3'] : null ?>">
				)
			</div>
			<button class="button">Oblicz pole trójkąta</button>
		</form>
		<div class="TaskTwo__response">
			<?php 
				$taskTwo = new TaskTwo;
				$taskTwo->handle();
			?>
		</div>
	</div>
</body>
</html>