// $(document).ready(
// function () {
questionAreaCounter = 1;
multipleChoiceCounter = 1;
i = 0;
optionsClick = 0;
addOrRemoveCounter = 0;
// previousIdno = 0;

// ******** DYNAMICALLY CREATING OPTIONS MENu *********

$("#optionsappear").click(function () {
  // Write here the code to append the options list
});

// ************************* TO CREATE A NEW QUESTION AREA  *******************8
// $('#create').click(function ()
function create() {

    // This is to rest the counter for the multiple choice inputs spaces and for creating their UNIQUE ID's 
    multipleChoiceCounter = 1;

    $("#form-page1").append(
        '<div class="question-set" id="questionset' +
        questionAreaCounter +
        '"></div>'
    );

    let questionsetno = "#questionset" + questionAreaCounter;

    let questionAreaCounter2 = questionAreaCounter;
    questionAreaCounter2++;
    $(questionsetno).append(
        '<textarea name="question' +
        questionAreaCounter +
        '" placeholder="Enter the questions..."  style="overflow:hidden"  onkeyup="AutoGrowTextArea(this)" cols="30" rows="3" id="Q' +
        questionAreaCounter +
        '" class="questionarea questionsetComponents' +
        questionAreaCounter2 +
        '"></textarea>'
    );

    let optionset = "#optionset" + questionAreaCounter;

    let rowOptionset = "#optionsetrow" + questionAreaCounter;

    let col1Optionset = "#optionCol-1-" + questionAreaCounter;
    let col2Optionset = "#optionCol-2-" + questionAreaCounter;
    let col3Optionset = "#optionCol-3-" + questionAreaCounter;
    let col4Optionset = "#optionCol-4-" + questionAreaCounter;
    let col5Optionset = "#optionCol-5-" + questionAreaCounter;

    // $('#form-page1').append(
    //         '<div class="options-set" id="optionset' + questionAreaCounter + '"> <div class="row option-setrow" id="optionsetrow' + questionAreaCounter + '"> <div class="col-lg-2 col-md-2 col-sm-2 col-xm-2" id="optionCol-1-' + questionAreaCounter + '"> </div> <div class="col-lg-2 col-md-2 col-sm-2 col-xm-2" id="optionCol-2-' + questionAreaCounter + '"> </div> <div class="col-lg-5 col-md-5 col-sm-5 col-xm-5" id="optionCol-3-' + questionAreaCounter + '"> </div> <div class="col-lg-1 col-md-1 col-sm-1 col-xm-1" id="optionCol-4-' + questionAreaCounter + '"> </div> <div class="col-lg-1 col-md-1 col-sm-1 col-xm-1" id="optionCol-5-' + questionAreaCounter + '"> </div></div></div>'
    // );

    $("#form-page1").append(
        '<div class="options-set" id="optionset' + questionAreaCounter + '"></div>'
    );

    $(optionset).append(
        '<div class="row option-setrow" id="optionsetrow' +
        questionAreaCounter +
        '"></div>'
    );

    $(rowOptionset).append(
        '<div class="col-lg-2 col-md-2 col-sm-2 col-xm-2" id="optionCol-1-' +
        questionAreaCounter +
        '"></div>'
    );
    $(col1Optionset).append(
        '<button id="sub' +
        questionAreaCounter +
        '" class="btn btn-primary savebtn" onclick="ajaxToSave(this.id)"> Save</button>'
    );

    $(rowOptionset).append(
        '<div class="col-lg-2 col-md-2 col-sm-2 col-xm-2" id="optionCol-2-' +
        questionAreaCounter +
        '"></div>'
    );
    $(col2Optionset).append('<span id="result0"></span>');

    $(rowOptionset).append(
        '<div class="col-lg-5 col-md-5 col-sm-5 col-xm-5" id="optionCol-3-' +
        questionAreaCounter +
        '"></div>'
    );
    $(col3Optionset).append(
        '<button class="btn btn-primary options' +
        questionAreaCounter +
        '" onclick="addMultipleChoice(this.className)" id="createMultipleChoice' +
        questionAreaCounter +
        '">Add Multiple choice</button>'
    );

function createLongAnswer(info) {
  // alert("into create long answer");
  // console.log(info);
  infolen = info.length;
  idno = info[infolen - 1];
  console.log("idno ", idno);
  let idno2 = idno;
  idno2++;

  let createMultipleChoice = "#createMultipleChoice" + idno;
  $(createMultipleChoice).hide();

  questionsetId = ".questionsetComponents" + idno2;
  questionSetComponentsList = $(questionsetId);
  questionSetComponentsListLen = questionSetComponentsList.length;
  console.log("options count " + questionSetComponentsListLen);
  console.log("options objects " + questionSetComponentsList);

  if (questionSetComponentsListLen == 0 || questionSetComponentsListLen == 1) {
    let questionsetdiv = "#questionset" + idno;
    let longTextAreaAns = "#longanswer" + idno + 1;

    $(questionsetdiv).append(
      '<textarea name="longAnswer" placeholder="Enter your answer..." id="longAnswer' +
        questionAreaCounter +
        '" cols="30" rows="2"  style="overflow:hidden" onkeyup="AutoGrowTextArea(this)" onkeydown="AutoShrinkArea(this)" class="questionarea answerarea questionsetComponents' +
        questionAreaCounter +
        '"> </textarea>'
    );
  } else if (questionSetComponentsListLen > 0) {
    for (let c = 0; c < questionSetComponentsListLen - 1; c++) {
      console.log("in for loop");
      // alert('in for loop');
      questionSetComponentsList[questionSetComponentsListLen - c - 1].remove();
    }
    let questionsetdiv = "#questionset" + idno;
    $(questionsetdiv).append(
      '<textarea name="longAnswer" placeholder="Enter your answer..." id="longAnswer' +
        questionAreaCounter +
        '" cols="30" rows="2"  style="overflow:hidden" onkeyup="AutoGrowTextArea(this)" onkeydown="AutoShrinkArea(this)" class="questionarea answerarea questionsetComponents' +
        questionAreaCounter +
        '"> </textarea>'
    );
  }
  // console.log("idno "+idno);
  // let previousIdno;
  // // let count = longAnswerCounter(idno);

  // if (previousIdno == idno) {
  //     alert("in if condition");
  //     return addOrRemoveCounter++;
  //     console.log("counter " + addOrRemoveCounter);
  // } else {
  //     return addOrRemoveCounter;
  //     console.log("counter " + addOrRemoveCounter);

  // // }
  // console.log("counter " + addOrRemoveCounter);

  // oneOrZero = addOrRemoveCounter % 2;

  let optionbtns = "#optionbtns" + idno;
  // $(optionbtns).hide();

  // $(longTextAreaAns).remove();

  // previousIdno = idno;
  // console.log("previousidno "+ previousIdno);
}

function createMultipleChoice(info) {
  // alert('in multiple choice');
  infolen = info.length;
  idno = info[infolen - 1];
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
        $(questionsetdiv).append(
            '<div class="input-group mb-3 questionsetComponents' +
            questionAreaCounter +
            " multipleChoiceOptions" +
            questionAreaCounter +
            '"> <input type="text" class="form-control multipleChoiceInput' +
            questionAreaCounter +
            '" placeholder=" - " id="multipleChoiceid'+
            questionAreaCounter +multipleChoiceCounter+
            '" aria-label="Recipient\'s username" aria-describedby="multipleChoiceBtn' +
            questionAreaCounter +
            '"> <div class="input-group-append"> <button class="btn btn-outline-secondary" onclick="addMultipleChoice(' +
            info +
            ')" type="button" id="multipleChoiceBtn' +
            questionAreaCounter +
            '">+</button> </div> </div>'
        );
    }

    // This tells us, there are more components then just question area
    else if (questionSetComponentsListLen > 1) {
        // This Condition checks weather, there are any multiple choice questions in the set or not
        let questionSetComponentsListLen2 = questionSetComponentsListLen;
        questionSetComponentsListLen2 = questionSetComponentsListLen2 - 1;
        if (multipleChoiceComponentsListLen == questionSetComponentsListLen2) {
            // alert('in checking are the components multiple choice or not');
            $(questionsetdiv).append(
                '<div class="input-group mb-3 questionsetComponents' +
                questionAreaCounter +
                " multipleChoiceOptions" +
                questionAreaCounter +
                '"> <input type="text" class="form-control multipleChoiceInput' +
                questionAreaCounter +
                '" placeholder=" - " id="multipleChoiceid' +
                questionAreaCounter + multipleChoiceCounter +
                '" aria-label="Recipient\'s username" aria-describedby="multipleChoiceBtn' +
                questionAreaCounter +
                '"> <div class="input-group-append"> <button class="btn btn-outline-secondary" onclick="addMultipleChoice(' +
                info +
                ')" type="button" id="multipleChoiceBtn' +
                questionAreaCounter +
                '">+</button> </div> </div>'
            );
        }

        // This Condition checks are there any other components other than choices already in the set or not,
        // For Ex: if there is already a Long Answer in the set, it'll first remove that Long Answer and then it'll add the Multiple choice options
        else if (multipleChoiceComponentsListLen == 0) {
            console.log(" multiple components list " + multipleChoiceComponentsList);
            for (let c = 0; c < questionSetComponentsListLen - 1; c++) {
                console.log("in for loop");
                // alert('in for loop');
                questionSetComponentsList[questionSetComponentsListLen - c - 1].remove();
            }
            $(questionsetdiv).append(
                '<div class="input-group mb-3 questionsetComponents' +
                questionAreaCounter +
                " multipleChoiceOptions" +
                questionAreaCounter +
                '"> <input type="text" class="form-control multipleChoiceInput' +
                questionAreaCounter +
                '" placeholder=" - " id="multipleChoiceid' +
                questionAreaCounter + multipleChoiceCounter +
                '" aria-label="Recipient\'s username" aria-describedby="multipleChoiceBtn' +
                questionAreaCounter +
                '"> <div class="input-group-append"> <button class="btn btn-outline-secondary" onclick="addMultipleChoice(' +
                info +
                ')" type="button" id="multipleChoiceBtn' +
                questionAreaCounter +
                '">+</button> </div> </div>'
            );
        }
    }
    multipleChoiceCounter++;
}

function addMultipleChoice(info) {
    infolen = info.length;
    idno = info[infolen - 1];
    console.log("idno = ", idno);
    //   alert("info add choice funciton");
    let idno2 = idno;
    // idno2 = idno2 - 1;
    let questionsetdiv = "#questionset" + idno;

    // CreateMultipleChoice Function's Version of this button
    $(questionsetdiv).append(
      '<div class="input-group mb-3 questionsetComponents' +
        questionAreaCounter +
        " multipleChoiceOptions" +
        questionAreaCounter +
        '"> <input type="text" class="form-control multipleChoiceInput' +
        questionAreaCounter +
        '" placeholder=" - " id="multipleChoiceid' +
        questionAreaCounter + multipleChoiceCounter +
        '" aria-label="Recipient\'s username" aria-describedby="multipleChoiceBtn' +
        questionAreaCounter +
        '"> <div class="input-group-append"> <button class="btn btn-outline-secondary" onclick="addMultipleChoice(' +
        info +
        ')" type="button" id="multipleChoiceBtn' +
        questionAreaCounter +
        '">+</button> </div> </div>'
    );
  }

  // This tells us, there are more components then just question area
  else if (questionSetComponentsListLen > 1) {
    // This Condition checks weather, there are any multiple choice questions in the set or not
    let questionSetComponentsListLen2 = questionSetComponentsListLen;
    questionSetComponentsListLen2 = questionSetComponentsListLen2 - 1;
    if (multipleChoiceComponentsListLen == questionSetComponentsListLen2) {
      // alert('in checking are the components multiple choice or not');
      $(questionsetdiv).append(
        '<div class="input-group mb-3 questionsetComponents' +
          questionAreaCounter +
          " multipleChoiceOptions" +
          questionAreaCounter +
          '"> <input type="text" class="form-control multipleChoiceInput' +
          questionAreaCounter +
          '" placeholder=" - " aria-label="Recipient\'s username" aria-describedby="multipleChoiceBtn' +
          questionAreaCounter +
          '"> <div class="input-group-append"> <button class="btn btn-outline-secondary" onclick="addMultipleChoice(' +
          info +
          ')" type="button" id="multipleChoiceBtn' +
          questionAreaCounter +
          '">+</button> </div> </div>'
      );
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
      $(questionsetdiv).append(
        '<div class="input-group mb-3 questionsetComponents' +
          questionAreaCounter +
          " multipleChoiceOptions" +
          questionAreaCounter +
          '"> <input type="text" class="form-control multipleChoiceInput' +
          questionAreaCounter +
          '" placeholder=" - " aria-label="Recipient\'s username" aria-describedby="multipleChoiceBtn' +
          questionAreaCounter +
          '"> <div class="input-group-append"> <button class="btn btn-outline-secondary" onclick="addMultipleChoice(' +
          info +
          ')"  type="button" id="multipleChoiceBtn' +
          questionAreaCounter +
          '">+</button> </div> </div>'
      );
    }
  }
}

    // addMutiplechoice Function's Versions of buttons
    // $(questionsetdiv).append(
    //     '<div class="input-group mb-3 questionsetComponents' + questionAreaCounter + ' multipleChoiceOptions' + questionAreaCounter + '"> <input type="text" class="form-control multipleChoiceInput' + questionAreaCounter + '" placeholder=" - " aria-label="Recipient\'s username" aria-describedby="multipleChoiceBtn' + questionAreaCounter + '"> <div class="input-group-append"> <button class="btn btn-outline-secondary" onclick="addMultipleChoice(' + info + ')" type="button" id="multipleChoiceBtn' + questionAreaCounter + '">+</button> </div> </div>'
    //     );
    multipleChoiceCounter++;

}

// TO DELETE A NEW QUESTION AREA

function deleted() {
  let questionsetdiv = [];
  questionsetdiv = $(".question-set");
  let textareaarr = [];
  textareaarr = $("textarea");
  let optionset = [];
  optionset = $(".options-set");
  // let savebtn = [];
  // savebtn = $('.savebtn');

  // *************** Code for bootstrap dropdownbutton *****************
  // let dropdown = [];
  // dropdown = $('.dropdown');
  // dropdownLen = dropdown.length;
  // dropdown[dropdownLen-1].remove();

  // ****** My made option buttons *******
  // let optionbtn = [];
  // optionbtn = $('.textarea-btn');
  // let options = [];
  // options = $('.optionbtns');
  // let optionsdiv = [];
  // optionsdiv = $('.optionsareaclass');
  h = questionsetdiv.length;
  i = textareaarr.length;
  optionsetLen = optionset.length;
  // j = savebtn.length;

  // ****** My made option buttons *******
  // k = optionbtn.length;
  // l = options.length;
  // m = optionsdiv.length;

  questionsetdiv[h - 1].remove();
  textareaarr[i - 1].remove();
  optionset[optionsetLen - 1].remove();
  // savebtn[j - 1].remove();

  // ****** My made option buttons *******
  // optionbtn[k-1].remove();
  // for(a = 0;a<3; a++)
  // {
  //     options[l-1-a].remove();
  // }
  // optionsdiv[m - 1].remove();
  // console.log(textareaarr[i]);

  // console.log(savebtn);

  // ****** My made option buttons *******
  // console.log(optionbtn);
  // console.log(options);
  // i--;
  // j--;
  // k--;
  questionAreaCounter--;
}

//************** / AJAX CODE TO SAVE THE QUESTIONS ANSWERS INTO DATABASE WITHOUT REFRESHING ****************
// function ajaxToSave() {
//     // alert('in the save button')
//     $.post("submit.php", {
//             question: $("#1").val()
//         },
//         function (data) {
//             $("#display").html(data);
//             // alert('in the function of the ajax');
//         });
// }

// *********************** MY VERSION OF THE SAME ABOVE CODE *****************************
function ajaxToSave(id) {

    let idLen = id.length;
    Id = id[idLen - 1];
    AId = Id;
    AId++;
    let textareaId = "#Q"+Id;
    let answerId = "#longAnswer"+AId;

    console.log('id ',answerId );
    let textarea = $(textareaId).val();
    let answerarea = $(answerId).val();
    console.log(answerarea);
    $.ajax({

        url: "submit.php",
        type: "post",
        data: {
            question : textarea,
            answer : answerarea
            // for()
        },
        success: function(data, status){
            // console.log(data);
            $("#display").html(data);
        }

    });
}

// });

// });


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
  // console.log(textField);
  // console.log("Client height ",textField.clientHeight);
  // console.log(textField.style.height);
  // console.log("Scroll height ",textField.scrollHeight);
  // console.log(rem);
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

// ****** My made option buttons *******

// ************* OPTION MENU ***************

// function showOptions(id) {

//     let idno;
//     let idlen;
//     console.log(id.length);
//     if(id.length <= 13)
//     {
//         idno = "";
//     }
//     else
//     {
//         idlen = id.length;
//         idno = id[idlen - 1];
//         console.log(idno);
//     }
//     console.log(idno);
//     // var pos = $(optionsBtnsNo).position();
//     // alert('in the option function');
//     // $('.options').css("top","pos.top");
//     // alert("pos.top"+pos.top+"position left"+pos.left);
//     let optionsClick
//     optionsClick++;
//     oddEven = optionsClick % 2;

//     // Adding the counter values to the put the variables in the jquery

//     // let optionsareaBtnsNo = "#optionsarea"+questionAreaCounter;

//     // optionsBtnsNo = ".options"+questionAreaCounter ;

//     let optionarea = "#optionarea"+idno;
//     let options = ".options"+idno;
//     if (oddEven == 1) {
//         $(optionarea).css({
//             // "display": "block",
//         });
//         $(optionarea).show();
//         $(options).show();
//     } else {
//         $(optionarea).hide();
//         $(options).hide();
//     }

// }

// #################################################   Code for testing   ####################################################

// function longAnswerCounter(info)
// {
//     let previousIdno;
//     infolen = info.length;
//     idno = info[infolen - 1];
//     console.log(info,"info");
//     if (previousIdno == idno) {
//         alert("in if condition");
//         return addOrRemoveCounter++;
//     } else {
//         return addOrRemoveCounter;
//     }
//     // previousIdno = idno;
// }

// $('#sub').click(function () {
//     alert('in sub function');
//     var data = $("#form-page :input").serializeArray();
//     $.post($("#form-page").attr("action"), data, function (info) {
//         $("#results").html(info);
//     });
// });

// $("#form-page").submit(function () {
//     alert('in false function');
//     return false;
// });

// function deleting() {
//     $('#delete').on('click', '.questionarea',
//         $(this).remove('.questionarea'));
//     );
// }

// let optionsClick = 0;

// function optionsappear() {
//     var pos = $('#optionsappear').position();
//     // alert('in the option function');
//     // $('.options').css("top","pos.top");
//     // alert("pos.top"+pos.top+"position left"+pos.left);
//     optionsClick++;
//     oddEven = optionsClick % 2;
//     if (oddEven == 1) {
//         $('#optionsarea').css({
//             "display": "block",
//         });
//         $('#optionsarea').show();
//         $('.options').show();
//     } else {
//         $('#optionsarea').hide();
//         $('.options').hide();
//     }
// }

// ********** CODE FOR TESTING **************

// let div1 = document.createElement("div");
// div1.setAttribute("id",  "makingArea1");

// textarea = document.createElement('textarea');
// textarea.setAttribute("class","questionarea");
// textarea.setAttribute("name", "question");
// textarea.setAttribute("placeholder", "Enter the questions...");
// textarea.setAttribute("onmouseover", "");
// textarea.setAttribute("cols", "30");
// textarea.setAttribute("rows", "10");
// textarea.setAttribute("id", "questionAreaCounter");
// var s;
// s = '<div id="makingArea">'
//     +'< textarea name = "question" placeholder = "Enter the questions..." id = "1" onmouseover = "" onkeypress = "" cols = "30" rows = "10" class="questionarea" >'
//     +'</textarea >'
//     +'<button id="sub" class="btn btn-primary"> Save</button>'
//     +'<span id="result"></span>'
//     +'</div >';
// let form_page = document.getElementById('form-page');
// form_page.appendChild(textarea);
// $('#makingarea1').append()

//############### CODE TO INCREASE THE SIZE OF THE TEXT AREA ################
// function area_increase() {

//     $('#1').keypress(function () {
//         var keyvalue = this.value;
//         // alert('in keypress function');
//         return (keyvalue);
//         if (key == 13) {
//             alert('working');

//             var c = document.getElementById('1');
//             // Q1. Why is it different from above one. This is 324 while earlier it was 320. See the output.
//             // console.log(c.clientWidth);

//             // Q2. How to update the code to increase the width by 10rem.
//             $c.css({ width: $c.width() + 10 }); //It adds 10 pixels here.

//         }
//     });

//     function test() {
//         alert('in mouse over');

//         var c = document.getElementById('1');
//         // Q1. Why is it different from above one. This is 324 while earlier it was 320. See the output.
//         // console.log(c.clientWidth);

//         // Q2. How to update the code to increase the width by 10rem.
//         $c.css({ width: $c.width() + 10 }); //It adds 10 pixels here.
//     }

// }
