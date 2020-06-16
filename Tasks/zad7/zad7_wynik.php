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
		<div class="TaskSeven__response">
			<?php 
				$taskSeven = new TaskSeven;
				if($_POST) {
					$answers = array_splice($_POST, 0, -2);
					
					$taskSeven->response($answers, $_POST['rightAnswers']);
					
				} else {
					header('Location: view.php');
				}
			?>
		</div>
	</div>
</body>
</html>