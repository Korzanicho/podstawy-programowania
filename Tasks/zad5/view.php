<?php require_once('./TaskFour.php'); ?>
<!DOCTYPE html>
<html lang="pl">
<?php include_once('../../header.php') ?>
<body>
	<div class="content Task TaskFour box">
		<div class="Task__header">
			<h2>Zadanie 5</h2>
		</div>
		<div class="Task__description">
			Napisać program służący do wprowadzania danych (formularz). Posłużyć się poniższym prototypem funkcji. Oznaczenia parametrów:<br> 
			$label definiuje etykiety do pól,<br>
			$form definiuje nazwę pliku PHP odbierającego dane z formularza,<br>
			$submit definiuje napis wyświetlany na przycisku,
			$data definuje domyślne dane wyświetlane na formularzu,
			$enable definiuje czy dane pole jest do edycji (0 - niedostępne, 1 - nieedytowalne, 2 - edytowalne),<br>
			$mess jest komunikatem, który ma się wyświetlić na górze strony.<br>
			Oprócz pliku PHP (view.php) należy również napisać plik PHP odbierający dane z formularza (zad5_wynik.php) i dopisujący je w nowej linii na końcu pliku tekstowego (zad5_dane.txt) - każda dana musi być oddzielona znakiem separatora "%"
		</div>
		<form action="" method="POST" class="TaskFour__form">
			<div class="form-item">
				<label for="quotient">Iloraz: </label>
				<input type="number" name="quotient" id="quotient" placeholder="q" value="<?php echo $_POST ? $_POST['quotient'] : null ?>">
				<label for="wordsNumber">Ilość wyrazów ciągu: </label>
				<input type="number" name="wordsNumber" id="wordsNumber" placeholder="n" min="3" value="<?php echo $_POST ? $_POST['wordsNumber'] : null ?>">
			</div>
			<button class="button">Wylicz ciąg geometryczny</button>
		</form>
		<div class="TaskFour__response">
			<?php 
				$taskFour = new TaskFour;
				$taskFour->handle();
			?>
		</div>
	</div>
</body>
</html>