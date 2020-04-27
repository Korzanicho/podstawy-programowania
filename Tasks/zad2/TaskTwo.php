<?php
	/**
	* TaskTwo
	* Class to resolve task two.
	* @author Adrian Korzan 6900 <adrian.korzan@gmail.com>
	*/
	final class TaskTwo {
		private $vertex = [
			'vertexOne' 	=> ['x1' => 0, 'y1' => 0],
			'vertexTwo' 	=> ['x2' => 0, 'y2' => 0],
			'vertexThree' => ['x3' => 0, 'y3' => 0]
		];

		/**
		* Handle resolve task two
		*/
		public function handle(): void 
		{
			if(empty($_POST))	return;
			if(!$this->validateParams()) return;

			$this->setVertex();
			$this->calculateTriangleArea();

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
		 * Calculate Triangle area function
		 */
		private function calculateTriangleArea(): void
		{
			if($this->isItTriangle($this->vertex)) {
				$absoluteValue = ((int)$this->vertex['vertexTwo']['x2']-(int)$this->vertex['vertexOne']['x1'])*((int)$this->vertex['vertexThree']['y3']-(int)$this->vertex['vertexOne']['y1'])-((int)$this->vertex['vertexTwo']['y2']-(int)$this->vertex['vertexOne']['y1'])*((int)$this->vertex['vertexThree']['x3']-(int)$this->vertex['vertexOne']['x1']);

				$absoluteValue < 0 ? $absoluteValue = -$absoluteValue : null;
				$triangleArea = $absoluteValue/2;
				$this->showMessage("Pole wynosi $triangleArea");
			} else {
				$this->showMessage('Podane współrzędne nie tworzą trójkąta');
			}
		}

		/**
		 * length of triangle sides
		 * @param Array
		 * @return Array
		 */
		private function triangleSidesLength(Array $vertex = []): Array
		{
			$sideAB = sqrt(pow(((int)$vertex['vertexTwo']['x2'] - (int)$vertex['vertexOne']['x1']), 2) + pow(((int)$vertex['vertexTwo']['y2']-(int)$vertex['vertexOne']['y1']), 2));
			$sideBC = sqrt(pow(((int)$vertex['vertexThree']['x3'] - (int)$vertex['vertexTwo']['x2']), 2) + pow(((int)$vertex['vertexThree']['y3']-(int)$vertex['vertexTwo']['y2']), 2));
			$sideAC = sqrt(pow(((int)$vertex['vertexThree']['x3'] - (int)$vertex['vertexOne']['x1']), 2) + pow(((int)$vertex['vertexThree']['y3']-(int)$vertex['vertexOne']['y1']), 2));

			return [$sideAB, $sideBC, $sideAC];
		}

		/**
		 * Check is triangle possible
		 * @return Boolean
		 */
		private function isItTriangle(): bool
		{
			$triangleSides = $this->triangleSidesLength($this->vertex);
			$longestSide = max($triangleSides);
			$remainingSidesLength = 0;

			foreach ($triangleSides as $side) {
				$side !== $longestSide ? $remainingSidesLength += $side : null;
			}

			if($remainingSidesLength <= $longestSide) return false;
			
			return true;
		}
		
		/**
		 * Set vertex
		 */
		private function setVertex(): void
		{
			$this->vertex['vertexOne']['x1'] = (int)$_POST['x1'];
			$this->vertex['vertexOne']['y1'] = (int)$_POST['y1'];
			$this->vertex['vertexTwo']['x2'] = (int)$_POST['x2'];
			$this->vertex['vertexTwo']['y2'] = (int)$_POST['y2'];
			$this->vertex['vertexThree']['x3'] = (int)$_POST['x3'];
			$this->vertex['vertexThree']['y3'] = (int)$_POST['y3'];
		}
		
		/**
		 * @return Bool
		 */
		private function validateParams(): bool
		{
			if($_POST["x1"] === "" || $_POST["y1"] === "" || $_POST["x2"] === "" || $_POST["y2"] === "" || $_POST["x3"] === "" || $_POST["y3"] === "" ) {
				$this->showMessage('Wartość parametru nie może być pusta. Czy chodziło Ci o 0?');
				return false;
			}
			if(!is_int((int)$_POST["x1"]) || !is_int((int)$_POST["y1"]) || !is_int((int)$_POST["x2"]) || !is_int((int)$_POST["y2"]) || !is_int((int)$_POST["x3"]) || !is_int((int)$_POST["y3"])) {
				$this->showMessage('Parametry muszą być liczbami');
				return false;
			}
			return true;
		}
	}

