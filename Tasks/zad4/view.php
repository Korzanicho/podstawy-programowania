<?php require_once('./TaskFour.php'); ?>
<!DOCTYPE html>
<html lang="pl">
<?php include_once('../../header.php') ?>
<body>
	<div class="content Task TaskFour box">
		<div class="Task__header">
			<h2>Zadanie 4</h2>
		</div>
		<div class="Task__description">
			Ciąg geometryczny - conajmniej trójelementowy ciąg liczbowy skończony bądź nieskończony,  w którym każdy wyraz począwszy od drugiego, powstaje z przemnożenia poprzedniego przez pewną stałą liczbę różną od zera (q), którą nazywamy ilorazem ciągu. Każdy wyraz ciągu geometrycznego, prócz pierwszego (i dla ciągów skończonych - ostatniego) jest średnią geometryczną dla wyrazów sąsiednich. Np. ciąg: (1, 3, 9, 27, 82, 243, ...) jest ciągiem geometrycznym o ilorazie q = 3. Napisać program wczytujący z formularza q (iloraz) oraz liczbę n (ilość wyrazu ciągu). Następnie wyliczyć i wyświetlić pierwszych n wyrazów ciągu oraz podać ich sumę.
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