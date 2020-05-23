<?php


$formId = $_POST['id'];
// $formId = 2;

echo $formId;
// Start the session
session_start();

$_SESSION["formId"] = $formId;
// $formId = 1;


// class setTheFormId {

//     public $formId;
    
//     function __construct($formId) {
//         $this->formId =  $formId;
//         echo "the form id is".$formId;  

//     }

//     function setTheFormIdFinally() {
//         return $this->formId;
//     }


// }

// $object = new setTheFormId($formId);

?>