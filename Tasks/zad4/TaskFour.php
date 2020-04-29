<?php
	require_once('../Task.php');
	
	/**
	* TaskFour
	* Class to resolve task three.
	* @author Adrian Korzan 6900 <adrian.korzan@gmail.com>
	*/
	final class TaskFour extends Task {

		/**
		* Array
		*/
		private $params = [
			'firstWord' 		=> 1,
			'quotient' 			=> 0,
			'wordsNumber' 	=> 0
		];

		/**
		* Handle resolve task three
		*/
		public function handle(): void 
		{
			if(empty($_POST))	return;
			if(!$this->validateParams()) return;

			$this->setParams();
			$this->calculateString();

			return;
		}

		/**
		 * Calculate string function
		 */
		private function calculateString(): void
		{
			$string = [];
			$stringSum = 0;

			$this->params['quotient'] !== 1 ? 
				$stringSum = $this->params['firstWord'] * ( (1 - pow($this->params['quotient'], $this->params['wordsNumber'])) / (1 - $this->params['quotient'])) : 
				$stringSum = $this->params['firstWord'] * $this->params['wordsNumber'];
			
			$this->showMessage("
			<h2>Odpowiedź:</h2>
			<span>Dla n = {$this->params['wordsNumber']} oraz q = {$this->params['quotient']}</span><br>
			<span>Suma wynosi: S<sub>{$this->params['wordsNumber']}</sub> = $stringSum.<br><br>
			<span>Ciąg: </span><br>
			");
			
			for($i = 1; $i<=$this->params['wordsNumber']; $i++) {
				$an = $this->params['firstWord'] * pow($this->params['quotient'], $i-1);

				echo "a<sub>{$i}</sub> = $an<br>"; 
			}
		}
		
		/**
		 * Set params
		 */
		private function setParams(): void
		{
			$this->params['quotient'] = (int)$_POST['quotient'];
			$this->params['wordsNumber'] = (int)$_POST['wordsNumber'];
		}
		
		/**
		 * @return Bool
		 */
		private function validateParams(): bool
		{
			if($_POST["quotient"] === "" || $_POST["wordsNumber"] === "") {
				$this->showMessage('<span class="error">Wartość parametru nie może być pusta</span>');
				return false;
			}
			if(!is_int((int)$_POST["quotient"]) || !is_int((int)$_POST["wordsNumber"])) {
				$this->showMessage('<span class="error">Parametry muszą być liczbami całkowitymi</span>');
				return false;
			}
			if((int)$_POST["quotient"] === 0 || (int)$_POST["wordsNumber"] < 3) {
				$this->showMessage('<span class="error">Iloraz nie może być równy 0, ilość wyrazów musi być większa bądź równa 3</span>');
				return false;
			}

			return true;
		}
	}
