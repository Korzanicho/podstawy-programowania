<?php
	/**
	* TaskFive
	* Class to resolve task five.
	* @author Adrian Korzan 6900 <adrian.korzan@gmail.com>
	*/
	final class TaskFive{
		/**
		* Generate form
		* @return String
		*/
		public function displayForm(Array $label = [], String $form = '', String $submit = '', Array $data = [], Array $enable = [], String $mess = '') 
		{
			$iteration = max(count($label), count($data), count($enable));
			$formBody = '';
			$enableInput = [
				'disabled',
				'readonly',
				''
			];

			for($i = 0; $i <= $iteration-1; $i++) {
				$formBody .= "
					<div class='form-item'>
						<label for='./{$label[$i]}'>{$label[$i]}</label>
						<input type='text' value='{$data[$i]}' name='{$label[$i]}' id='{$label[$i]}' placeholder='{$label[$i]}' {$enableInput[(int)$enable[$i]]}>
					</div>
				";
			}
			echo "
				<h2>$mess</h2>
				<form action='$form' method='POST' class='TaskFive__form'>
					$formBody
					<button class='button'>$submit</button>
				</form>
			";
		}
	}
