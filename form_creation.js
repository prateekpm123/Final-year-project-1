// $(document).ready(
// function () {



questionAreaCounter = 0;
multipleChoiceCounter = 1;
i = 0;
optionsClick = 0;
addOrRemoveCounter = 0;
questionCount = 0;

optionArray = [];
optioncount = 1;

// formIdIs = localStorage.getItem("myId");
// alert("the value recieved is " + formIdIs);

// if( formIdIs ) {
//   getTheQuestionCount();
// }

// let iddd = globalVariable1.formId;

// ******** DYNAMICALLY CREATING QUESTIONS AND OPTIONS MENu *********


// ************************* TO CREATE A NEW SET OF QUESTION AND OPTIONS  *******************

function createLongAnswer(info) {
  // alert('globalVariablei is' + globalVariable1.id);

  console.log("questionarea Counter", questionAreaCounter);

  console.log("idno ", idno);
  let idno2 = idno;
  idno2++;

  let createMultipleChoice = "#createMultipleChoice" + idno;
  $(createMultipleChoice).hide();

  // This creates a TextBox for Long Answer option
  let answerTextareaTag =
    '<textarea name="longAnswer" placeholder="Enter your answer..." id="longAnswer' +
    questionAreaCounter +
    '" cols="30" rows="2"  style="overflow:hidden" onkeyup="AutoGrowTextArea(this)" onkeydown="AutoShrinkArea(this)" class="questionarea answerarea questionsetComponents' +
    questionAreaCounter +
    '"> </textarea>';

  questionsetId = ".questionsetComponents" + idno2;
  questionSetComponentsList = $(questionsetId);
  questionSetComponentsListLen = questionSetComponentsList.length;
  console.log("options count " + questionSetComponentsListLen);
  console.log("options objects " + questionSetComponentsList);

  if (questionSetComponentsListLen == 0 || questionSetComponentsListLen == 1) {
    let questionsetdiv = "#questionset" + idno;
    let longTextAreaAns = "#longanswer" + idno + 1;

    $(questionsetdiv).append(answerTextareaTag);
  } else if (questionSetComponentsListLen > 0) {
    for (let c = 0; c < questionSetComponentsListLen - 1; c++) {
      console.log("in for loop");
      // alert('in for loop');
      questionSetComponentsList[questionSetComponentsListLen - c - 1].remove();
    }
    let questionsetdiv = "#questionset" + idno;
    $(questionsetdiv).append(answerTextareaTag);
  }

}

function createMultipleChoice(Info,ID) {
  // info = allInfo.className;
  // mcCounter++;
  console.log('-----------------------');
  console.log("info is ",Info);
  // let id = Info.substring('input-choice multipleChoiceInput'.length);


  let id = Info.match(/.\d+/g, ''); // this extracts only digits from the string
  let firstCharacter = id[0];
  console.log(typeof(firstCharacter));
  id = firstCharacter.substring('t'.length);

  console.log('passed id is ',ID);
  let passedID = ID.match(/.\d+/g, ''); // this extracts only digits from the string
  let firstElement = passedID[0];
  console.log('first element of passedID is ',typeof (firstElement));
  // passedID = firstElement.substring('d'.length);
  // console.log("passedID is ",passedID);
  passedID = passedID.toString();
  let passedIDLen = passedID.length;
  passedID = passedID.substring(1, passedIDLen);
  let questionCount = getCurrentQuestionId(Info); 
  let newPassedId = divideAfterAZero(passedID, questionCount);
  console.log('new passes id is ',newPassedId);
  console.log('id is ',id);
  id = id;
  // alert(Info);
  id1 = parseInt(id);
  console.log('id in creating multiple choice on enter is ', id);
  id--;
  console.log('id in creating multiple choice on enter is ', id);

  // alert(id);


  let multipleChoiceInputTag = '<input  type = "text"' +
    'class = "input-choice multipleChoiceInput' + id1 + '" ' +
    'placeholder=" - type your answer" ' +
    'id="multipleChoiceid' + newPassedId + '" ' +
    'onkeypress="myFunction(event, this.className,this.id)"' +
    'value="" ' +
    '</input>';


  idno = id;
  console.log("idno = ", id);
  let idno2 = idno;
  let questionsetdiv = "#questionset" + idno;

  // CreateMultipleChoice Function's Version of this button
  $(questionsetdiv).append(multipleChoiceInputTag);
  multipleChoiceCounter++;
}


function getCurrentQuestionId(classname) {
  let id = classname.match(/.\d+/g, ''); // this extracts only digits from the string
  id = id[0];
  console.log("id is ", id);
  id2 = id.substring(1, id.length);
  console.log("pure id is ", id2);
  return id2;
}


function divideAfterAZero(passedID, currentQuestionAreaCounter) {
    if (currentQuestionAreaCounter < 9) {
      console.log('passedID in this new function is', passedID);
      // passedID = passedID[0];
      // passedID = toString(passedID);
      console.log(passedID);
      let questionCount = passedID[0];
      let multipleChoiceCount = passedID[1];

      console.log('separated passed id is', multipleChoiceCount);
      multipleChoiceCount = parseInt(multipleChoiceCount);
      multipleChoiceCount++;
      multipleChoiceCount = multipleChoiceCount.toString();
      multipleChoiceBoxIdNo = questionCount + multipleChoiceCount;
      console.log('final answer is ', multipleChoiceBoxIdNo);
      console.log('current question area coutner is ', currentQuestionAreaCounter);
      return multipleChoiceBoxIdNo;

    } 
    else if (currentQuestionAreaCounter < 99) {
      console.log('in 2nd condition');
      let questionCount = passedID.substring(0, 2);
      console.log('question count is ',questionCount);
      let multipleChoiceCount = passedID.substring(2, passedID.length);
      console.log('multiplechoicecount is ',multipleChoiceCount);
      // console.log('question count is', multipleChoiceCount);
      multipleChoiceCount = parseInt(multipleChoiceCount);
      multipleChoiceCount++;
      let multipleChoiceBoxIdNo = questionCount + multipleChoiceCount;
      console.log("fiunal answer is ", multipleChoiceBoxIdNo);
      return multipleChoiceBoxIdNo;

      // console.log('passedID in this new function is', passedID);
      // // passedID = passedID[0];
      // // passedID = toString(passedID);
      // console.log(passedID);
      // let questionCount = passedID[0];
      // let multipleChoiceCount = passedID[1];

      // console.log('separated passed id is', multipleChoiceCount);
      // multipleChoiceCount = parseInt(multipleChoiceCount);
      // multipleChoiceCount++;
      // multipleChoiceCount = multipleChoiceCount.toString();
      // multipleChoiceBoxIdNo = questionCount + multipleChoiceCount;
      // console.log('final answer is ', multipleChoiceBoxIdNo);
      // console.log('current question area coutner is ', currentQuestionAreaCounter);
      // return multipleChoiceBoxIdNo;
    } 
    
    else if (currentQuestionAreaCounter < 999) {
      console.log('in 2nd condition');
      let questionCount = passedID.substring(0, 3);
      let multipleChoiceCount = passedID.substring(3, passedID.length);
      console.log('question count is', multipleChoiceCount);
      multipleChoiceCount = parseInt(multipleChoiceCount);
      multipleChoiceCount++;
      let multipleChoiceBoxIdNo = questionCount + multipleChoiceCount;
      console.log("fiunal answer is ", multipleChoiceBoxIdNo);
      return multipleChoiceBoxIdNo;

  }
}

function createMultipleChoiceBefore(a, i) {

  let multipleChoiceInputTag = '<input  type = "text"' +
    'class = "input-choice multipleChoiceInput' + questionAreaCounter + '" ' +
    'placeholder=" - type your option" ' +
    'id="multipleChoiceid' + questionAreaCounter + multipleChoiceCounter + '" ' +
    'value="' + optionArray[a] + '" ' +
    'onkeypress="myFunction(event, this.className,this.id)"' +
    '</input>';


  idno = i;
  console.log("idno = ", idno);
  let idno2 = idno;
  let questionsetdiv = "#questionset" + idno;

  // CreateMultipleChoice Function's Version of this button
  $(questionsetdiv).append(multipleChoiceInputTag);

  multipleChoiceCounter++;
}


function addMultipleChoice() {

  // This questionAreaCounter3 is created to balance the questionAreaCounter in id="multiplceChoiceId" of the inputtag of the multiple choice option
  let questionAreaCounter3 = questionAreaCounter;
  questionAreaCounter3++;
  // This creates an input box for the multiple choice option
  let multipleChoiceInputTag = '<input  type = "text"' +
    'class = "input-choice multipleChoiceInput' + questionAreaCounter3 + '" ' +
    'placeholder=" - type your option" ' +
    'id="multipleChoiceid' + questionAreaCounter3 + multipleChoiceCounter + '" ' +
    'onkeypress="myFunction(event, this.className, this.id)"' +
    '</input>';


  idno = questionAreaCounter;
  console.log("idno = ", idno);

  let idno2 = idno;
  idno2++;

  let createMultipleChoice = "#createMultipleChoice" + idno;
  $(createMultipleChoice).show();

  questionsetId = ".questionsetComponents" + idno2;
  questionSetComponentsList = $(questionsetId);
  questionSetComponentsListLen = questionSetComponentsList.length;
  console.log("options count " + questionSetComponentsListLen);
  console.log("options objects " + questionSetComponentsList);

  multipleChoiceId = ".multipleChoiceOptions" + idno2;
  multipleChoiceComponentsList = $(multipleChoiceId);
  multipleChoiceComponentsListLen = multipleChoiceComponentsList.length;

  let questionsetdiv = "#questionset" + idno;

  // This condition checks if the set is empty or not
  if (questionSetComponentsListLen == 1) {
    $(questionsetdiv).append(multipleChoiceInputTag);
  }

  // This tells us, there are more components then just question area
  else if (questionSetComponentsListLen > 1) {
    // This Condition checks weather, there are any multiple choice questions in the set or not
    let questionSetComponentsListLen2 = questionSetComponentsListLen;
    questionSetComponentsListLen2 = questionSetComponentsListLen2 - 1;
    if (multipleChoiceComponentsListLen == questionSetComponentsListLen2) {
      // alert('in checking are the components multiple choice or not');
      $(questionsetdiv).append(multipleChoiceInputTag);
    }

    // This Condition checks are there any other components other than choices already in the set or not,
    // For Ex: if there is already a Long Answer in the set, it'll first remove that Long Answer and then it'll add the Multiple choice options
    else if (multipleChoiceComponentsListLen == 0) {
      console.log(" multiple components list " + multipleChoiceComponentsList);
      for (let c = 0; c < questionSetComponentsListLen - 1; c++) {
        console.log("in for loop");
        // alert('in for loop');
        questionSetComponentsList[
          questionSetComponentsListLen - c - 1
        ].remove();
      }
      $(questionsetdiv).append(multipleChoiceInputTag);
    }
  }
  multipleChoiceCounter++;
}


/***
 * @ desc Creates an input field from the bootstrap to fill the options
 */
function addMultipleChoiceBefore() {
  let questionAreaCounter3 = questionAreaCounter;
  questionAreaCounter3++;

  let multipleChoiceInputTag = '<input  type = "text"' +
    'class = "input-choice multipleChoiceInput' + questionAreaCounter3 + '" ' +
    'placeholder=" - type your option" ' +
    'id="multipleChoiceid' + questionAreaCounter3 + multipleChoiceCounter + '" ' +
    'onkeypress="myFunction(event, this.className, this.id)"' +
    'value="' + globalVariable.option1[questionAreaCounter].Option1 + '" ' +
    '</input>';

  idno = questionAreaCounter;
  console.log("idno = ", idno);

  let idno2 = idno;
  idno2++;

  let createMultipleChoice = "#createMultipleChoice" + idno;
  $(createMultipleChoice).show();

  questionsetId = ".questionsetComponents" + idno2;
  questionSetComponentsList = $(questionsetId);
  questionSetComponentsListLen = questionSetComponentsList.length;
  console.log("options count " + questionSetComponentsListLen);
  console.log("options objects " + questionSetComponentsList);

  multipleChoiceId = ".multipleChoiceOptions" + idno2;
  multipleChoiceComponentsList = $(multipleChoiceId);
  multipleChoiceComponentsListLen = multipleChoiceComponentsList.length;

  let questionsetdiv = "#questionset" + idno;

  // This condition checks if the set is empty or not
  if (questionSetComponentsListLen == 1) {
    $(questionsetdiv).append(multipleChoiceInputTag);
  }

  // This tells us, there are more components then just question area
  else if (questionSetComponentsListLen > 1) {
    // This Condition checks weather, there are any multiple choice questions in the set or not
    let questionSetComponentsListLen2 = questionSetComponentsListLen;
    questionSetComponentsListLen2 = questionSetComponentsListLen2 - 1;
    if (multipleChoiceComponentsListLen == questionSetComponentsListLen2) {
      // alert('in checking are the components multiple choice or not');
      $(questionsetdiv).append(multipleChoiceInputTag);
    }

    // This Condition checks are there any other components other than choices already in the set or not,
    // For Ex: if there is already a Long Answer in the set, it'll first remove that Long Answer and then it'll add the Multiple choice options
    else if (multipleChoiceComponentsListLen == 0) {
      console.log(" multiple components list " + multipleChoiceComponentsList);
      for (let c = 0; c < questionSetComponentsListLen - 1; c++) {
        console.log("in for loop");
        // alert('in for loop');
        questionSetComponentsList[
          questionSetComponentsListLen - c - 1
        ].remove();
      }
      $(questionsetdiv).append(multipleChoiceInputTag);
    }
  }
  multipleChoiceCounter++;
}



function create(btnclass, btnid) {

  // ######################  All the common tags used for dynamically creating  ############################

  // This creates the Questionset Div tag with gets appended to form-page1
  let questionsetDivTag =
    '<div class="question-set" id="questionset' +
    questionAreaCounter +
    '"></div>';

  let optionsetDivTag =
    '<div class="options-set" id="optionset' + questionAreaCounter + '"></div>';

  let questionAreaCounter2 = parseInt(questionAreaCounter);
  questionAreaCounter2++;
  // This creates the textareatag for the question with gets appended to the questionset Div tag
  let questionTextareaTag =
    '<textarea ' +
    'name="question' + questionAreaCounter + '"  ' +
    'placeholder="Enter the questions..."  ' +
    'style="overflow:hidden"  ' +
    'onkeyup="AutoGrowTextArea(this)" ' +
    'cols="30"  ' +
    'rows="3" ' +
    'id="Q' + questionAreaCounter + '" ' +
    'class="questionarea questionsetComponents' + questionAreaCounter2 + '">' +
    '</textarea>';

  // *************** From here and down, we'll be creating a structure for other options to land *************

  // This is created inside the id = optionset
  let optionsetRowDivTag =
    '<div class="row option-setrow" id="optionsetrow' +
    questionAreaCounter +
    '"></div>';

  // There will be 5 columns inside this row tag, and this is the first one
  let optionset1stColDivTag =
    '<div class="col-lg-2 col-md-2 col-sm-2 col-xm-2" id="optionCol-1-' +
    questionAreaCounter +
    '"></div>';
  // This goes under the optionset1stColTag
  let saveButtonTag =
    '<button id="' +
    questionAreaCounter +
    '" class="btn btn-primary savebtn" onclick="ajaxToSave(this.id,' +
    btnid +
    ')"> Save</button>';

  // This is the 2nd column
  let optionset2ndColDivTag =
    '<div class="col-lg-2 col-md-2 col-sm-2 col-xm-2" id="optionCol-2-' +
    questionAreaCounter +
    '"></div>';
  // The results of the MySQL query sucess rate are stored in here
  let resultShowingspanTag = '<span id="result0"></span>';

  // This is the 3rd column
  let optionset3rdColDivTag =
    '<div class="col-lg-5 col-md-5 col-sm-5 col-xm-5" id="optionCol-3-' +
    questionAreaCounter +
    '"></div>';
  // This is the button which will appear when multiple choice options is clicked
  // let addingMultipleChoiceBtnsButtonTag =
  //   '<button class="btn btn-primary options' +
  //   questionAreaCounter +
  //   '" onclick="createMultipleChoice(this.id)" id="createMultipleChoice' +
  //   questionAreaCounter +
  //   '">Add Multiple choice</button>';

  // This the 4th Column
  let optionset4thColDivTag =
    '<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1" id="optionCol-4-' +
    questionAreaCounter +
    '"></div>';
  // This is a DropDownButton From Bootstrap which is used for choosing the options for the question, like long Answer, Multiple choice
  let dropDownButton =
    '<div ' +
    'class="input-group-prepend" ' +
    'id="optionbtns' + questionAreaCounter + '"> ' +
    '<button ' +
    'class="btn btn-outline-secondary dropdown-toggle optionbtn-toggle" ' +
    'type="button" ' +
    'data-toggle="dropdown" ' +
    'aria-haspopup="true" ' +
    'aria-expanded="false">+' +
    '</button> ' +
    '<div ' +
    'class="dropdown-menu"> ' +
    '<button ' +
    'class="dropdown-item options' + questionAreaCounter + '" ' +
    'onclick="createMultipleChoice(this.className)"> ' +
    'Multiple choice ' +
    '</button> ' +
    '<button ' +
    'class="dropdown-item options' + questionAreaCounter + '" ' +
    'href="#">' +
    'Ratings ' +
    '</button> ' +
    '<button ' +
    'class="dropdown-item options' + questionAreaCounter + '" ' +
    'onclick="createLongAnswer(this.className)"> ' +
    'Long Answer ' +
    '</button> ' +
    '<button ' +
    'class="dropdown-item options' + questionAreaCounter + '">' +
    'Short Answer ' +
    '</button> ' +
    '</div> ' +
    '</div > ';

  // This is the 5th Column
  let optionset5thDivCol =
    '<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1" id="optionCol-5-' +
    questionAreaCounter +
    '"></div>';
  // This is also a dropDown button from Bootstrap but its use it to have extra options like delete and etc
  let dropDownButton2 =
    '<div class="input-group-prepend"> <button class="btn btn-outline-secondary dropdown-toggle optionbtn-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Del</button> <div class="dropdown-menu"> <button class="dropdown-item extraOptions' +
    questionAreaCounter +
    '">Delete Choice</button> <button class="dropdown-item extraOptions' +
    questionAreaCounter +
    '">Another action</button> <button class="dropdown-item extraOptions' +
    questionAreaCounter +
    '">Something else here</button> <div role="separator" class="dropdown-divider"></div> <button class="dropdown-item extraOptions' +
    questionAreaCounter +
    '">Separated link</button> </div> </div>';

  // This is to rest the counter for the multiple choice inputs spaces and for creating their UNIQUE ID's
  multipleChoiceCounter = 1;

  // Question set div tag generation
  // Here both the questions and there options like longanswer's textareatag and multiplechoice's input tag goes
  $("#form-page1").append(questionsetDivTag);

  // This tells us, there are more components then just question area

  // Options set Div tag Generations
  $("#form-page1").append(optionsetDivTag);

  let questionsetno = "#questionset" + questionAreaCounter;

  let optionset = "#optionset" + questionAreaCounter;

  let rowOptionset = "#optionsetrow" + questionAreaCounter;
  let col1Optionset = "#optionCol-1-" + questionAreaCounter;
  let col2Optionset = "#optionCol-2-" + questionAreaCounter;
  let col3Optionset = "#optionCol-3-" + questionAreaCounter;
  let col4Optionset = "#optionCol-4-" + questionAreaCounter;
  let col5Optionset = "#optionCol-5-" + questionAreaCounter;

  // This is will create a div tag which will get appended to form-page1 div tag, and it will contain a textarea for writing the Questions and it options like Long answer and Multiple choice questions
  $(questionsetno).append(questionTextareaTag);

  // This is will create a div tag which will get appended to form-page1 div tag, and it will be for options like save but and convert button etc
  $(optionset).append(optionsetRowDivTag);

  // This is the 1st column and the contents are just besides it
  $(rowOptionset).append(optionset1stColDivTag);
  $(col1Optionset).append(saveButtonTag);

  // This is the 2nd column and the contents are just besides it
  $(rowOptionset).append(optionset2ndColDivTag);
  $(col2Optionset).append(resultShowingspanTag);

  // This is the 3rd column and the contents are just besides it
  $(rowOptionset).append(optionset3rdColDivTag);
  // $(col3Optionset).append(addingMultipleChoiceBtnsButtonTag);

  let createMultipleChoice = "#createMultipleChoice" + questionAreaCounter;
  $(createMultipleChoice).hide();

  // This is the 4th column and the contents are just besides it
  $(rowOptionset)
    .append
  // optionset4thColDivTag
  ();
  // *************** Code for bootstrap dropdownbutton *****************
  $(col4Optionset)
    .append
  // dropDownButton
  ();

  // This is the 5th column and the contents are just besides it
  $(rowOptionset).append(optionset5thDivCol);
  $(col5Optionset).append(dropDownButton2);

  // createLongAnswer(Class, id);

  if (btnid == 1) {
    addMultipleChoice();
    insertQuestion(btnid);

    // alert('in if else condition of multiple choice');
  } else if (btnid == 2) {

  } else if (btnid == 3) {
    insertQuestion(btnid);
    // createLongAnswer(questionAreaCounter);
    // alert('in if else condition of long answer');
  } else if (btnid == 4) {}

  questionAreaCounter++;

}


//  ****************** Event Listeners **********************

function myFunction(key, Info,ID) {
  if (key.keyCode == "13") {
    createMultipleChoice(Info, ID);
    console.log('id is in my function',ID);
    // alert(Info);
  }
}

function cursorFocus(x) {
  // console.log(' working');
}



function createBefore(btnclass, btnid) {
  // alert('globalVariablei is' + iddd);

  console.log('QuestionAreaCounter is ', questionAreaCounter);
  // ######################  All the common tags used for dynamically creating  ############################

  // This creates the Questionset Div tag with gets appended to form-page1
  let questionsetDivTag =
    '<div class="question-set" id="questionset' +
    questionAreaCounter +
    '"></div>';

  let optionsetDivTag =
    '<div class="options-set" id="optionset' + questionAreaCounter + '"></div>';

  let questionAreaCounter2 = questionAreaCounter;
  questionAreaCounter2++;
  // This creates the textareatag for the question with gets appended to the questionset Div tag
  let questionTextareaTag =
    '<textarea name="question' +
    questionAreaCounter +
    '" placeholder="Enter the questions..."  style="overflow:hidden"  onkeyup="AutoGrowTextArea(this)" cols="30" rows="3" id="Q' +
    questionAreaCounter +
    '" class="questionarea questionsetComponents' +
    questionAreaCounter2 +
    '" value="">' + globalVariable.questionArray[questionAreaCounter].Questions + '</textarea>';

  // *************** From here and down, we'll be creating a structure for other options to land *************

  // This is created inside the id = optionset
  let optionsetRowDivTag =
    '<div class="row option-setrow" id="optionsetrow' +
    questionAreaCounter +
    '"></div>';

  // There will be 5 columns inside this row tag, and this is the first one
  let optionset1stColDivTag =
    '<div class="col-lg-2 col-md-2 col-sm-2 col-xm-2" id="optionCol-1-' +
    questionAreaCounter +
    '"></div>';
  // This goes under the optionset1stColTag
  let saveButtonTag =
    '<button id="' +
    questionAreaCounter +
    '" class="btn btn-primary savebtn" onclick="ajaxToSave(this.id,' +
    btnid +
    ')"> Save</button>';

  // This is the 2nd column
  let optionset2ndColDivTag =
    '<div class="col-lg-2 col-md-2 col-sm-2 col-xm-2" id="optionCol-2-' +
    questionAreaCounter +
    '"></div>';
  // The results of the MySQL query sucess rate are stored in here
  let resultShowingspanTag = '<span id="result0"></span>';

  // This is the 3rd column
  let optionset3rdColDivTag =
    '<div class="col-lg-5 col-md-5 col-sm-5 col-xm-5" id="optionCol-3-' +
    questionAreaCounter +
    '"></div>';

  // This is the button which will appear when multiple choice options is clicked
  // let addingMultipleChoiceBtnsButtonTag =
  //   '<button class="btn btn-primary options' +
  //   questionAreaCounter +
  //   '" onclick="createMultipleChoice(this.id)" id="createMultipleChoice' +
  //   questionAreaCounter +
  //   '">Add Multiple choice</button>';

  // This the 4th Column
  let optionset4thColDivTag =
    '<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1" id="optionCol-4-' +
    questionAreaCounter +
    '"></div>';
  // This is a DropDownButton From Bootstrap which is used for choosing the options for the question, like long Answer, Multiple choice
  let dropDownButton =
    '<div class="input-group-prepend" id="optionbtns' +
    questionAreaCounter +
    '"> <button class="btn btn-outline-secondary dropdown-toggle optionbtn-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+</button> <div class="dropdown-menu"> <button class="dropdown-item options' +
    questionAreaCounter +
    '" onclick="createMultipleChoice(this.className)">Multiple choice</button> <button class="dropdown-item options' +
    questionAreaCounter +
    '" href="#">Ratings</button> <button class="dropdown-item options' +
    questionAreaCounter +
    '" onclick="createLongAnswer(this.className)">Long Answer</button> <button class="dropdown-item options' +
    questionAreaCounter +
    '">Short Answer</button> </div> </div > ';

  // This is the 5th Column
  let optionset5thDivCol =
    '<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1" id="optionCol-5-' +
    questionAreaCounter +
    '"></div>';
  // This is also a dropDown button from Bootstrap but its use it to have extra options like delete and etc
  let dropDownButton2 =
    '<div class="input-group-prepend">' +
    '<button class="btn btn-outline-secondary dropdown-toggle optionbtn-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
    'Del' +
    '</button>' +
    '<div class="dropdown-menu">' +
    '<button class="dropdown-item extraOptions' + questionAreaCounter + '">' +
    'Delete question' +
    '</button> ' +
    '<button class="dropdown-item extraOptions' + questionAreaCounter + '">' +
    'Another action' +
    '</button> ' +
    '<button class="dropdown-item extraOptions' + questionAreaCounter + '">' +
    'Something else here' +
    '</button>' +
    '<div role="separator" class="dropdown-divider"></div>' +
    '<button class="dropdown-item extraOptions' + questionAreaCounter + '">' +
    'Separated link' +
    '</button>' +
    ' </div>' +
    '</div>';

  // This is to rest the counter for the multiple choice inputs spaces and for creating their UNIQUE ID's
  multipleChoiceCounter = 1;

  // Question set div tag generation
  // Here both the questions and there options like longanswer's textareatag and multiplechoice's input tag goes
  $("#form-page1").append(questionsetDivTag);

  // This tells us, there are more components then just question area

  // Options set Div tag Generations
  $("#form-page1").append(optionsetDivTag);

  let questionsetno = "#questionset" + questionAreaCounter;

  let optionset = "#optionset" + questionAreaCounter;

  let rowOptionset = "#optionsetrow" + questionAreaCounter;
  let col1Optionset = "#optionCol-1-" + questionAreaCounter;
  let col2Optionset = "#optionCol-2-" + questionAreaCounter;
  let col3Optionset = "#optionCol-3-" + questionAreaCounter;
  let col4Optionset = "#optionCol-4-" + questionAreaCounter;
  let col5Optionset = "#optionCol-5-" + questionAreaCounter;

  // This is will create a div tag which will get appended to form-page1 div tag, and it will contain a textarea for writing the Questions and it options like Long answer and Multiple choice questions
  $(questionsetno).append(questionTextareaTag);

  // This is will create a div tag which will get appended to form-page1 div tag, and it will be for options like save but and convert button etc
  $(optionset).append(optionsetRowDivTag);

  // This is the 1st column and the contents are just besides it
  $(rowOptionset).append(optionset1stColDivTag);
  $(col1Optionset).append(saveButtonTag);

  // This is the 2nd column and the contents are just besides it
  $(rowOptionset).append(optionset2ndColDivTag);
  $(col2Optionset).append(resultShowingspanTag);

  // This is the 3rd column and the contents are just besides it
  $(rowOptionset).append(optionset3rdColDivTag);
  // $(col3Optionset).append(addingMultipleChoiceBtnsButtonTag);

  let createMultipleChoice = "#createMultipleChoice" + questionAreaCounter;
  $(createMultipleChoice).hide();

  // This is the 4th column and the contents are just besides it
  $(rowOptionset)
  // .append('optionset4thColDivTag');

  // *************** Code for bootstrap dropdownbutton *****************
  $(col4Optionset)
  // .append('dropDownButton');


  // This is the 5th column and the contents are just besides it
  $(rowOptionset).append(optionset5thDivCol);
  $(col5Optionset).append(dropDownButton2);

  if (btnid == 1) {
    addMultipleChoiceBefore();
  } else if (btnid == 2) {} else if (btnid == 3) {} else if (btnid == 4) {}

  questionAreaCounter++;

}


function getTheQuestionCount() {
  $.ajax({
    url: "getData.php",
    type: "post",
    data: {
      // formId: formIdIs,
    },
    success: function (data, status) {
      // console.log(data);
      $("#getDataContent").html(data);

      if (status == "success") {
        questionCount = $('#questionCount').text();
        let option1 = $('#option1').text();
        // console.log(questionCount);
        // alert(questionCount);
      }
      if (status == "success") {
        creatingTheExistingContent(questionCount, status);
      }
    },
  });

}

function creatingTheExistingContent(questionCount, status) {
  // alert('globalVariablei is' + iddd);
  console.log('testing 1 2 3');
  if (status == "success") {

  }
  let option1Len = option1.length;
  for (let i = 0; i < questionCount; i++) {
    if (globalVariable.option1[i].Option1.length == 0) {
      createBefore(i, 3);
    } else if (globalVariable.option1[i].Option1.length == 1) {
      // this is for rating
    } else if (globalVariable.option1[i].Option1.length > 1) {
      // this is multiple choice
      createBefore(i, 1);
      optioncount = 0;
      optionArray = [];
      optionArray.push(globalVariable.option1[i].Option1);
      if (globalVariable.option2[i].Option2.length > 1) {
        optionArray.push(globalVariable.option2[i].Option2);
        optioncount++;
      }
      if (globalVariable.option3[i].Option3.length > 1) {
        optionArray.push(globalVariable.option3[i].Option3);
        optioncount++;
      }
      if (globalVariable.option4[i].Option4.length > 1) {
        optionArray.push(globalVariable.option4[i].Option4);
        optioncount++;

      }
      if (globalVariable.option5[i].Option5.length > 1) {
        optionArray.push(globalVariable.option5[i].Option5);
        optioncount++;

      }
      for (let a = 1; a <= optioncount; a++) {
        createMultipleChoiceBefore(a, i);
        console.log("in option for loop");
        console.log('option array is ? ', optionArray);
      }


    }
    console.log("count value is --------", questionAreaCounter);
  }
}

// TO DELETE A NEW QUESTION AREA

function deleted() {
  let questionsetdiv = [];
  questionsetdiv = $(".question-set");
  let textareaarr = [];
  textareaarr = $("textarea");
  let optionset = [];
  optionset = $(".options-set");

  j = questionsetdiv.length;
  i = textareaarr.length;
  optionsetLen = optionset.length;

  questionsetdiv[j - 1].remove();
  textareaarr[i - 1].remove();
  optionset[optionsetLen - 1].remove();


  let q_noArray = globalVariable.q_no;
  let last_q_no = q_noArray.length;

  $.ajax({
    url: 'deleteQuestion.php',
    type: "post",
    data: {
      // last_q_no : last_q_no

    },
    success: function (data, status) {
      // console.log(data);
      $("#display2").html(data);

    },
  });

  questionAreaCounter--;


}

function insertQuestion(btnid) {
  let q_no1 = parseInt(questionAreaCounter);
  q_no1++;
  // alert(q_no1);
  $.ajax({
    url: "insertQuestion.php",
    type: "post",
    data: {
      id: q_no1,
      formId: formIdIs,
      btnid: btnid
    },
    success: function (data, status) {
      // console.log(data);
      $("#display").html(data);

    },
  });
}

// *********************** MY VERSION OF THE SAME ABOVE CODE *****************************
function ajaxToSave(id, btnid) {
  if (btnid == 3) {
    let idLen = id.length;
    Id = id[idLen - 1];
    AId = Id;
    let questionAreaCounterMinus1 = questionAreaCounter - 1;

    let textareaId = "#Q" + id;

    let textarea = $(textareaId).val(); 

    $.ajax({
      url: "submit.php",
      type: "post",
      data: {
        id: id,
        question: textarea,
        option: 1,
        btnid: btnid,
        formId: formIdIs
      },
      success: function (data, status) {
        // console.log(data);
        $("#display").html(data);

      },
    });
  }

  if (btnid == 1) {
    let idLen = id.length;
    Id = id[idLen - 1];
    Id2 = parseInt(id) + 1;
    AId = Id;
    let questionAreaCounterMinus1 = questionAreaCounter - 1;

    let textareaId = "#Q" + id;
    // let answerId = "#longAnswer" + AId;
    console.log('id ', id);
    console.log('id2 ', Id2);

    // Collecting Multiple choice options count
    let multipleChoiceInputId1 = ".multipleChoiceInput" + Id2;
    // let multipleChoiceInputId2 = ".multipleChoiceInput" + Id2;

    let multipleChoiceInputsCount1 = $(multipleChoiceInputId1);
    // let multipleChoiceInputsCount2 = $(multipleChoiceInputId2);

    console.log('mulitplechoiceinput id1', multipleChoiceInputId1);
    // console.log('mulitplechoiceinput id2', multipleChoiceInputId2);


    let multipleChoiceInputCountLen1 = multipleChoiceInputsCount1.length;
    // let multipleChoiceInputCountLen2 = multipleChoiceInputsCount2.length;

    let totalMultipleChoiceInputCountLen =
      multipleChoiceInputCountLen1;
    console.log(
      "total no of multiple choices ",
      totalMultipleChoiceInputCountLen
    );
    // alert(' total number of multiple chocies are ' + totalMultipleChoiceInputCountLen);
    let optionValue = [];

    for (a = 1; a < totalMultipleChoiceInputCountLen + 1; a++) {
      let optionId = "#multipleChoiceid" + Id2 + a;
      console.log("option id = ".optionId);
      optionValue.push($(optionId).val());
    }

    console.log("optionValue ", optionValue);

    // console.log('id ', answerId);
    let textarea = $(textareaId).val();
    // let answerarea = $(answerId).val();
    // console.log(answerarea);
    $.ajax({
      url: "submit.php",
      type: "post",
      data: {
        id: id,
        question: textarea,
        option: optionValue,
        btnid: btnid,
        // formId: formIdIs

      },
      success: function (data, status) {
        // console.log(data);
        $("#display").html(data);
      },
    });

  }
}

// ******* CODE TO MAKE A WINDOW APPEAR AND DISAPPEAR *******

// function appear()
// {
//     $('.pop').show();
// }

// function goback() {
//     $('.pop').hide();
// }

// }
// );

// ********************************  FUNCTION TO INCREASE SIZE OF THE TEXTAREA  *****************************************
function AutoGrowTextArea(textField) {
  if (textField.clientHeight < textField.scrollHeight) {
    textField.style.height = textField.scrollHeight + "px";
    if (textField.clientHeight < textField.scrollHeight) {
      textField.style.height =
        textField.scrollHeight * 2 - textField.clientHeight + "px";
    }
  }
}

function AutoShrinkArea(textField) {
  if (textField.clientHeight > textField.scrollHeight) {
    textField.style.height = textField.clientHeight - 14 + "px";
    if (textField.clientHeight > textField.scrollHeight) {
      textField.style.height =
        textField.scrollHeight * 2 - textField.clientHeight + "px";
    }
  }
}


// #################################################   Code for testing   ####################################################