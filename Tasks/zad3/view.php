<?php require_once('./TaskThree.php'); ?>
<!DOCTYPE html>
<html lang="pl">
<?php include_once('../../header.php') ?>
<body>
	<div class="content Task TaskThree box">
		<div class="Task__header">
			<h2>Zadanie 3</h2>
		</div>
		<div class="Task__description">
			Ciąg arytmetyczny - to ciąg liczbowy, w którym każdy wyraz można otrzymywać
		</div>
		<form action="" method="POST" class="TaskTwo__form">
			<div class="form-item">			
				(
					<input type="number" name="x1" id="x1" placeholder="x1">,&nbsp;
					<input type="number" name="y1" id="y1" placeholder="y1">
				)
			</div>
			<div class="form-item">			
				(
					<input type="number" name="x2" id="x2" placeholder="x2">,&nbsp;
					<input type="number" name="y2" id="y2" placeholder="y2">
				)
			</div>
			<div class="form-item">			
				(
					<input type="number" name="x3" id="x3" placeholder="x3">,&nbsp;
					<input type="number" name="y3" id="y3" placeholder="y3">
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