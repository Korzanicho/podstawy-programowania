<?php require_once('./TaskSeven.php'); ?>
<!DOCTYPE html>
<html lang="pl">
<?php include_once('../../header.php') ?>
<body>
	<div class="content Task TaskSeven box">
		<div class="Task__header">
			<h2>Zadanie 7</h2>
		</div>
		<div class="Task__description">
			Napisać program służący do realizacji ankiety typu wielokrotnego wyboru. Posłóżyć się poniższym prototypem funkcji displayCheckBox(). Oznaczenia parametrów:
			<ul>
				<li><b>$form</b> definiuje nazwę pliku PHP odbierającego dane z formularza</li>
				<li><b>$submit</b> definiuje napis wyświetlany na przycisku</li>
				<li><b>$query</b> zawiera pytanie z ankiety</li>
				<li><b>$data</b> zawiera możliwe odpowiedzi</li>
				<li><b>$solution</b> zawiera rozwiązanie 0 - złe, 1 - dobre</li>
			</ul>
			Oprócz pliku PHP zawierającego formularz (zad7_form.php) należy również napisać plik PHP odbierający dane z formularza (zad7_wynik.php) - ma on wyświetlić pytanie, zaznaczoną odpowiedź i określić czy jest prawidłowa.
		</div>
		<div class="TaskSeven__response">
			<?php 
				$taskSeven = new TaskSeven;

				$data = ['Karp', 'Wieloryb', 'Rekin', 'Panda'];
				$solution = [1, 0, 1, 0];

				$taskSeven->displayCheckBox('zad7_wynik.php', 'OK', 'Które zwierze jest rybą?', $data, $solution);
			?>
		</div>
	</div>
</body>
</html>