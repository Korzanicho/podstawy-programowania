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
				if($_POST) {
					echo "<div class='query'><h2>{$_POST['query']}</h2></div>";
					$answer = substr($_POST['answer'], 0, -1);

					if(substr($_POST['answer'], -1) == '1') {
						echo "<div class='success'>Gratulację! <br> $answer to prawidłowa odpowiedź</div>";
					} else {
						echo "
							<div class='error'>Niestety :( <br>
							$answer to nieprawidłowa odpowiedź</div><br>
							<a href='view.php'><button class='button'>Spróbuj jeszcze raz</button></a>
						";
					}
				} else {
					header('Location: view.php');
				}
			?>
		</div>
	</div>
</body>
</html>