<?php	
	/**
	* TaskFiveResult
	* Class to resolve task five resoults.
	* @author Adrian Korzan 6900 <adrian.korzan@gmail.com>
	*/
	final class TaskFiveResult {

		/**
		 * File to append data
		 */
		const FILE = 'zad5_dane.txt';

		/**
		* Append data from POST to file
		*/
		public function appendToFile(): void
		{
			$fileContent = file_get_contents(self::FILE);
			$i = 1;
			$len = count($_POST);

			foreach ($_POST as $key => $value) {
				if($i !== $len) $fileContent .= $value.'%';
				else $fileContent .= $value."\n";
				$i++;
			}

			file_put_contents(self::FILE, $fileContent);
			$this->forward('success');

			die();
		}

		/**
		 * Function to redirect
		 */
		private function forward($message): void
		{
			header("Location: ./view.php?response=$message");
		}
	}

	$taskFiveResult = new TaskFiveResult();
	$taskFiveResult->appendToFile();
