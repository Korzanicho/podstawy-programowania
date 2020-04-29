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
			Ciąg arytmetyczny - to ciąg liczbowy, w którym każdy wyraz można otrzymać dodając wyraz bezpośrednio go poprzedzający oraz ustaloną liczbę r, zwaną różnicą ciągu. Np. ciąg: (1, 3, 5, 7, 9, ...) jest ciągiem arytmetycznym (jego różnicą r jest 2). Napisać program wczytujący z formularza r (różnicę) oraz liczbę n (ilość wyrazów ciągu). Następnie wyliczyć i wyświetlić pierwszych n wyrazów ciągu oraz podać ich sumę
		</div>
		<form action="" method="POST" class="TaskThree__form">
			<div class="form-item">
				<label for="difference">Różnica: </label>
				<input type="number" name="difference" id="difference" placeholder="r" value="<?php echo $_POST ? $_POST['difference'] : null ?>">
				<label for="wordsNumber">Ilość wyrazów ciągu: </label>
				<input type="number" name="wordsNumber" id="wordsNumber" placeholder="n" min="0" value="<?php echo $_POST ? $_POST['wordsNumber'] : null ?>">
			</div>
			<button class="button">Wylicz ciąg arytmetyczny</button>
		</form>
		<div class="TaskThree__response">
			<?php 
				$taskThree = new TaskThree;
				$taskThree->handle();
			?>
		</div>
	</div>
</body>
</html>