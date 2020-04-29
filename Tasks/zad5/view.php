<?php require_once('./TaskFive.php'); ?>
<!DOCTYPE html>
<html lang="pl">
<?php include_once('../../header.php') ?>
<body>
	<div class="content Task TaskFive box">
		<div class="Task__header">
			<h2>Zadanie 5</h2>
		</div>
		<div class="Task__description">
			Napisać program służący do wprowadzania danych (formularz). Posłużyć się poniższym prototypem funkcji. Oznaczenia parametrów:<br> 
			$label definiuje etykiety do pól,<br>
			$form definiuje nazwę pliku PHP odbierającego dane z formularza,<br>
			$submit definiuje napis wyświetlany na przycisku,<br>
			$data definuje domyślne dane wyświetlane na formularzu,<br>
			$enable definiuje czy dane pole jest do edycji (0 - niedostępne, 1 - nieedytowalne, 2 - edytowalne),<br>
			$mess jest komunikatem, który ma się wyświetlić na górze strony.<br>
			Oprócz pliku PHP (view.php) należy również napisać plik PHP odbierający dane z formularza (zad5_wynik.php) i dopisujący je w nowej linii na końcu pliku tekstowego (zad5_dane.txt) - każda dana musi być oddzielona znakiem separatora "%"
		</div>
		<div class="TaskFour__response">
			<?php 
				$taskFive = new TaskFive;
				if($_GET) {
					if($_GET['response'] == 'success') {
						echo '<div class="success">Dane zostały poprawnie zapisane!</div>';
					} else {
						echo 'Coś poszło nie tak';
					}
				}

				$label = ['numer', 'imie', 'nazwisko', 'grupa'];
				$data = ['100', 'Anna', 'Kowaleska', 'K0I'];
				$enable = [0, 1, 0, 1];

				$taskFive->displayForm($label, 'zad5_wynik.php', 'Wprowadź dane', $data, $enable, 'Dane Studenta');
			?>
		</div>
	</div>
</body>
</html>