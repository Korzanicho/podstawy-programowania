<?php
	/**
	* TaskOne
	* Class to resolve task one.
	* @author Adrian Korzan 6900
	*/
	final class TaskOne {
		private $params = [
			'parametrA' => 0,
			'parametrB' => 0,
			'parametrC' => 0
		];

		/**
		* Handle resolve task one
		*/
		public function handle(): void 
		{
			if(empty($_POST))	return;
			if(!$this->validateParams()) return;

			$this->setParams();
			$this->calculateQuadraticFunction(
				$this->calculateDelta($this->params),
				$this->params
			);
			return;
		}

		/**
		* Show messages
		* @param String
		*/
		private function showMessage(String $message = ''): void
		{
			echo $message;
		}

		/**
		 * Calculate quadratic function
		 * @param Int
		 * @param Array
		 */
		private function calculateQuadraticFunction(Int $delta = 0, Array $params = []): void
		{
			if($delta > 0) {
				$x1 = (-$params['parametrB']-sqrt($delta))/(2*$params['parametrA']);
				$x2 = (-$params['parametrB']+sqrt($delta))/(2*$params['parametrA']);
				$message = "
					<h2>Rozwiązanie:</h2>
					<span>Równanie ma dwa pierwiastki:</span>
					<ul>
						<li>&Delta; = {$this->calculateDelta($params)}</li>
						<li>x1 = $x1</li>
						<li>x2 = $x2</li>
					</ul>
				";
			} else if ($delta === 0) {
				$x = -$params['parametrB']/(2*$params['parametrA']);

				$message = "
				<h2>Rozwiązanie:</h2>
				<span>Równanie ma jeden pierwiastek:</span>
				<ul>
					<li>&Delta; = {$this->calculateDelta($params)}</li>
					<li>x = $x</li>
				</ul>
			";
			} else {
				$message = "&Delta; = {$this->calculateDelta($params)}
					Równanie nie ma pierwiastków rzeczywistych";
			}
			$this->showMessage($message);
		}

		/**
		 * Calculate delta
		 * @param Array
		 * @return Int
		 */
		private function calculateDelta(Array $params = []): Int
		{
			return pow($params['parametrB'], 2) - 4 * $params['parametrA'] * $params['parametrC'];
		}
		
		/**
		 * Set params
		 */
		private function setParams(): void
		{
			$this->params['parametrA'] = (int)$_POST['parametrA'];
			$this->params['parametrB'] = (int)$_POST['parametrB'];
			$this->params['parametrC'] = (int)$_POST['parametrC'];
		}
		
		/**
		 * @return Bool
		 */
		private function validateParams(): bool
		{
			if($_POST["parametrA"] === "" || $_POST["parametrB"] === "" || $_POST["parametrA"] === "" ) {
				$this->showMessage('Wartość parametru nie może być pusta. Czy chodziło Ci o 0?');
				return false;
			}
			if(!is_int((int)$_POST["parametrA"]) || !is_int((int)$_POST["parametrB"]) || !is_int((int)$_POST["parametrC"])) {
				$this->showMessage('Parametry muszą być liczbami');
				return false;
			}
			if((int)$_POST["parametrA"] === 0) {
				$this->showMessage('Miałem rozwiązać równanie kwadratowe. Proszę, podstaw inną liczbę przy x<sup>2</sup>');
				return false;
			}
			return true;
		}
	}

