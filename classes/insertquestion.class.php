<?php 

	class Insert extends Dbh {

		public $q_no;
		public $formId;
		public $questionCount;
		public $question;

		public function setInsert($formId, $q_no) {
			
			$sql = "INSERT INTO `questions`(`id`, `q_no`) VALUES ('$formId', '$q_no');";
			$insert = $this->connect()->prepare($sql);
			$insert->execute([$formId, $q_no]);
			
		}

		public function setInsert1($formId, $q_no) {

			$sql = "INSERT INTO `questions`(`id`, `q_no`,`Option1`) VALUES ('$formId', '$q_no','  ');";
			$insert = $this->connect()->prepare($sql);
			$insert->execute([$formId, $q_no]);
		}

		//adding question to the database
		public function setInsert2($questionCount, $question) {

			$sql = "INSERT INTO `questions`(`id`, `q_no`, `Questions`) VALUES ('1','$questionCount','$question')";
			$insert = $this->connect()->prepare($sql);
			$insert->execute([$questionCount, $question]);
		}

	}
	



 ?>