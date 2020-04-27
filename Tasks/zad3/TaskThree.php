<?php
	require_once('../Task.php');
	
	/**
	* TaskThree
	* Class to resolve task three.
	* @author Adrian Korzan 6900 <adrian.korzan@gmail.com>
	*/
	final class TaskThree extends Task {

		/**
		 * Array
		 */
		private $params = [
			'firstWord' 		=> 1,
			'difference' 		=> 0,
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
			$an = 0;
			$string = [];
			$stringSum = 0;

			$an = $this->params['firstWord'] + ($this->params['wordsNumber'] - 1) * $this->params['difference'];

			$stringSum = ($this->params['firstWord'] + $an) / 2 * $this->params['wordsNumber'];

			$lastWord = $this->params['firstWord'];

			
			$this->showMessage("
			<h2>Odpowiedź:</h2>
			<span>Dla n = {$this->params['wordsNumber']} oraz r = {$this->params['difference']}</span><br>
			<span>Suma wynosi: S<sub>{$this->params['difference']}</sub> = $an.<br><br>
			<span>Ciąg: </span><br>
			");
			
			for($i = 0; $i<=$this->params['wordsNumber'] - 1; $i++) {
				$string = $this->params['firstWord'] + ($i+1 - 1) * $this->params['difference'];
				$an = $i+1;
				echo "a<sub>{$an}</sub> = $string<br>"; 
			}
		}
		
		/**
		 * Set params
		 */
		private function setParams(): void
		{
			$this->params['difference'] = (int)$_POST['difference'];
			$this->params['wordsNumber'] = (int)$_POST['wordsNumber'];
		}
		
		/**
		 * @return Bool
		 */
		private function validateParams(): bool
		{
			if($_POST["difference"] === "" || $_POST["wordsNumber"] === "") {
				$this->showMessage('<span class="error">Wartość parametru nie może być pusta</span>');
				return false;
			}
			if(!is_int((int)$_POST["difference"]) || !is_int((int)$_POST["wordsNumber"])) {
				$this->showMessage('<span class="error">Parametry muszą być liczbami całkowitymi</span>');
				return false;
			}
			return true;
		}
	}

