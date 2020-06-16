<?php
	require_once('../Task.php');

	/**
	* TaskSeven
	* Class to resolve task Seven.
	* @author Adrian Korzan 6900 <adrian.korzan@gmail.com>
	*/
	final class TaskSeven extends Task{
		/**
		* Generate form
		* @return String
		*/
		public function displayCheckBox(String $form = '', String $submit = '', String $query = '', Array $data = [], Array $solution = []) 
		{
			$iteration = max(count($solution), count($data));
			$formBody = '';
			$rightAnswers = 0;

			foreach ($solution as $value) {
				$value == 1 ? $rightAnswers++ : null;
			}

			for($i = 0; $i <= $iteration-1; $i++) {
				$formBody .= "
					<div class='form-item'>
						<label for='answer$i'>{$data[$i]}</label>
						<input type='checkbox' name='answer$i' id='answer$i' value='$data[$i]$solution[$i]'>
					</div>
				";
			}
			echo "
				<h2>	Quiz</h2>
				<div class='query'>$query</div>
				<form action='$form' method='POST' class='TaskSeven__form'>
					$formBody
					<input type='hidden' name='rightAnswers' value='$rightAnswers'>
					<input type='hidden' name='query' value='$query'>
					<button class='button'>$submit</button>
				</form>
			";
		}

		/**
		 * Function show response
		 * @param Array
		 * @param Int
		 */
		public function response(Array $answers = [], Int $count = 0): void
		{
			if(count($answers) > $count) {
				$this->showMessage("
					<div class='error'>
						Niestety :(<br>
						Zaznaczyłeś:
						<ul>
				");
				
				$this->showAnswers($answers);

				$this->showMessage("
					</ul>
					To trochę za dużo odpowiedzi.<br>
					<a href='view.php'><button class='button'>Spróbuj jeszcze raz</button></a>
				");
			} else if (count($answers) < $count) {
				$this->showMessage("
					<div class='error'>
						Niestety, nie zaznaczyłeś wszystkich poprawnych odpowiedzi :(<br>
						Zaznaczyłeś:
						<ul>
				");
				
				$this->showAnswers($answers);

				$this->showMessage("
					</ul>
					<a href='view.php'><button class='button'>Spróbuj jeszcze raz</button></a>
				");
			} else if (count($answers) == $count) {
				$error = 0;
				foreach ($answers as $key => $answer) {
					if(substr($answer, -1) == 0) $error++;
				}

				if($error > 0) {
					$this->showMessage("
					<div class='error'>
						Niestety, jedna z Twoich odpowiedzi nie jest poprawna :(<br>
						Zaznaczyłeś:
						<ul>
					");

					$this->showAnswers($answers);

					$this->showMessage("
						</ul>
						<a href='view.php'><button class='button'>Spróbuj jeszcze raz</button></a>
					");
				}

				else {
					$this->showMessage("
					<div class='success'>
						Gratuluję, na to pytane odpowiedziałeś poprawnie<br>
						Zaznaczyłeś:
						<ul>
				");
				
				$this->showAnswers($answers);

				$this->showMessage("
					</ul>
				");
				}
			}
		}

		/**
		 * Function shows answers
		 * @param Array
		 */
		private function showAnswers(Array $answers = []): void
		{
			foreach ($answers as $key => $answer) {
				$answer = substr($answer, 0, -1);
				echo "<li>$answer</li>";
			}
		}
	}
