<?php 

	class Update extends Dbh {

		public $optionSpace;
		public $temp;
		public $questionCount;
		public $question;
		public $formId;
		public $answer;
		public $counter;

		public function setUpdate() {
			
			$sql = "UPDATE `questions` SET `Questions`='$question' WHERE `id`=1 AND `q_no`=$questionCount";
			$update = $this->connect()->prepare($sql);
			$update->execute();
			
		}

		public function setUpdate1() {

			$sql = "UPDATE `questions` SET `$temp`='$optionSpace' WHERE `id`=1 AND `q_no`=$questionCount";
			$update = $this->connect()->prepare($sql);
			$update->execute();
		}

		
		public function setUpdate2() {

			$sql = "UPDATE `questions` SET `Option1`='' ,`Option2`='' ,`Option3`='',`Option4`='' ,`Option5`='',`Option6`='',`Option7`='',`Option8`='',`Option9`='' ,`Option10`='' WHERE `id`=$formId AND `q_no`=$questionCount";
			$update = $this->connect()->prepare($sql);
			$update->execute();
			
		}

		public function setUpdate3() {

			$sql = "UPDATE `answers` SET `Answers`='$answer' WHERE `id`=1 AND `q_no`=$counter AND `ans_id`=$counter";
			$update = $this->connect()->prepare($sql);
			$update->execute();
		}

	}
	



 ?>