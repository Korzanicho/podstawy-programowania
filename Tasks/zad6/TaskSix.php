<?php
	/**
	* TaskSix
	* Class to resolve task Six.
	* @author Adrian Korzan 6900 <adrian.korzan@gmail.com>
	*/
	final class TaskSix{
		/**
		* Generate form
		* @return String
		*/
		public function displayRadio(String $form = '', String $submit = '', String $query = '', Array $data = [], Array $solution = []) 
		{
			$iteration = max(count($solution), count($data));
			$formBody = '';

			for($i = 0; $i <= $iteration-1; $i++) {
				$formBody .= "
					<div class='form-item'>
						<label>
							<input type='radio' name='answer' value='$data[$i]$solution[$i]'>
							{$data[$i]}
							</label>
							</div>
							";
						}
						echo "
				<h2>Quiz</h2>
				<div class='query'>$query</div>
				<form action='$form' method='POST' class='TaskSix__form'>
					<input type='hidden' name='query' value='$query'>
					$formBody
					<button class='button'>$submit</button>
				</form>
			";
		}
	}
