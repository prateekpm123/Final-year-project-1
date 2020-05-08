<?php 

	class Insert extends Dbh {

		public $q_no ;
		public $formId;
		public $questionCount;
		public $question;

		public function setInsert($formId, $q_no) {
			
			
			$sql = "INSERT INTO `questions`(`id`, `q_no`) VALUES (?,?)";
			$insert = $this->connect()->prepare($sql);
			if ($insert->execute())
			{
				echo "<h5>Inserted Blank Insert</h5>";
			}
			else 
			{
				echo "Error";
			}
			
		}

		public function setInsert1($formId, $q_no) {

			$sql = "INSERT INTO `questions`(`id`, `q_no`,`Option1`) VALUES (?, ?,'  ');";
			$insert = $this->connect()->prepare($sql);
			$insert->execute();
		}

		//adding question to the database
		public function setInsert2($questionCount, $question) {

			$sql = "INSERT INTO `questions`(`id`, `q_no`, `Questions`) VALUES ('1',?,?)";
			$insert = $this->connect()->prepare($sql);
			$insert->execute();
		}

	}
	



 ?>