<?php require_once('./TaskSix.php'); ?>
<!DOCTYPE html>
<html lang="pl">
<?php include_once('../../header.php') ?>
<body>
	<div class="content Task TaskSix box">
		<div class="Task__header">
			<h2>Zadanie 6</h2>
		</div>
		<div class="Task__description">
			Napisać program służący do realizacji ankiety typu jednokrotny wybór. Posłóżyć się poniższym prototypem funkcji displayRadio(). Oznaczenia parametrów:
			<ul>
				<li><b>$form</b> definiuje nazwę pliku PHP odbierającego dane z formularza</li>
				<li><b>$submit</b> definiuje napis wyświetlany na przycisku</li>
				<li><b>$query</b> zawiera pytanie z ankiety</li>
				<li><b>$data</b> zawiera możliwe odpowiedzi</li>
				<li><b>$solution</b> zawiera rozwiązanie 0 - złe, 1 - dobre</li>
			</ul>
			Oprócz pliku PHP zawierającego formularz (zad6_form.php) należy również napisać plik PHP odbierający dane z formularza (zad6_wynik.php) - ma on wyświetlić pytanie, zaznaczoną odpowiedź i określić czy jest prawidłowa.
		</div>
		<div class="TaskFour__response">
			<?php 
				$taskSix = new TaskSix;

				$data = ['Warszawa', 'Kraków', 'Gdynia', 'Gdańsk'];
				$solution = [1, 0, 0, 0];

				$taskSix->displayRadio('zad6_wynik.php', 'OK', 'Stolicą Polski jest?', $data, $solution);
			?>
		</div>
	</div>
</body>
</html>