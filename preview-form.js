// let questionsArray = ['What is your name ?', 'What is your age ?', 'Where do you stay ?', 'What is your favourite anime', 'Which are you currently watching ? '];

// counter = 1;


// // This function is called after pressing the button, it is calling all the functions and also incrementing the counter

// function showNextQuestion() 
// {
//     // alert('in show question');
//     counter;
//     let questionCount = $('#questionCountIs').text();

    
//     // questionCount--;
//     // getData(counter);
//     // setTimeout(displayQuestion(), 5000);
//     // displayOption();
//     // displayQuestion();
//     // executeAsynchronously([getData(counter),displayQuestion(),displayOption1()],5000);
//     // alert('questionCount'+questionCount);
//     // alert('counter is '+counter);
//     if( counter == 1)
//     {
//         alert('in 1st if loop');
//         // getData(counter);
//         $('#welcome').remove();
        
//         // saveAnswer(counter);
//         // getData(counter);
//         // saveAnswer(counter);
//         let counterMinus1 = counter -1;
//         getData(counter);
//         saveAnswer(counter);

//         counter++;

//         displayQuestion();
//         displayOption1();
//         let option1 = $('#longAnswer').attr("name");
//         let option1Len = option1.length;
//         if(option1Len == 0)
//         {
//             alert('in saveanswer');
//             saveAnswer(counter);
//         }
//         else 
//         {
//             alert('in saveOption');
//             saveOptions(counter);
//         }
 
        
//     }
//     else if (1 < counter && counter <= questionCount)
//     {
//         alert('in 2nd if loop');
//         // alert('in else loop and counter = ' + counter);

//         // getData(counter);
//         getData(counter);
//         counter++;
//         saveAnswer(counter);

//         displayQuestion();
//         displayOption1();
//         let option1 = $('#longAnswer').attr("name");

//         let option1Len = option1.length;
//         if (option1Len == 0) {
//             alert('in saveanswer');
//             saveAnswer(counter);
//         } else {
//             alert('in saveOption');
//             saveOptions(counter);
//         }

//     }
//     else
//     {
//         alert('in 3rd condition');
//         $('#longAnswer').hide();
//         $('#multipleChoiceArea').hide();
//         $('#end').append("<h1 id='thankYou'>Thank You</h1>");
//         $('#questionDisplayArea').html("");
//         $('#next').hide();

//     }
     
    
// }

// // ********** This trigged when the page is loaded, its creates a welcome page, 

// function onloading(counter) {
//     // alert('in onload');
//     $('#longAnswer').hide();
//     $('#optionArea1').hide();
//     $('#optionArea2').hide();
//     $('#optionArea3').hide();
//     $('#optionArea4').hide();
//     $('#optionArea5').hide();
//     getData(counter);
//     saveTheValues();
// }




// // ******** It gets the question and its options from the database and displays in a hidden DIV tag, from there we display it through "displayQuestion()" and "displayOption()" 

// function getData(counter) {
//     // alert('in get data function');
//     $.ajax({
//         url: "getData.php",
//         type: "post",
//         data: {
//             counter : counter
//         },
//         success: function (data, status) {
//             // console.log(data);
//             $("#hiddenDisplay").html(data);
//             // alert(status);

//         },
//     }); 
//     // counter++;

//     // displayQuestion();
// }


// // This saves the answer in the database fetched from the textarea ?
// function saveAnswer(counter) {
//     let answer = $('#longAnswer').val();
//     // alert('in saveData');
//     $.ajax({
//         url: "saveAnswer.php",
//         type: "post",
//         data: {
//             counter: counter,
//             answer: answer

//         },
//         success: function (data, status) {
//             // console.log(data);
//             // alert(noOfRows);
//             $("#results").html(data);
//             // alert(status);

//         }
//     });
// }


// function saveOptions(counter) {
//     alert('in save option');
//     var val = [];
//     $(':checkbox:checked').each(function (i) {
//         val[i] = $(this).val();
//     });

//     alert('value of checkbox is '+val);

    
// }



// // ********* This displays the question taken from the hidden display tag

// function displayQuestion() {
//     // alert('in display question function');
//     // let questionIs = document.getElementById('questionIs')
//     let questionIs = $('#questionIs').text();
//     // alert("questionIs", questionIs);
//     $('#questionDisplayArea').html(questionIs);
//     // displayOption();

// } 


// // ********* This displays the Options taken from the hidden display tag

// function displayOption1() {

//     // alert('in display function');
//     $('#longAnswer').hide();
//     $('#optionArea1').hide();
//     $('#optionArea2').hide();
//     $('#optionArea3').hide();
//     $('#optionArea4').hide();
//     $('#optionArea5').hide();


//     let option1 = $('#option1').text();
//     let option2 = $('#option2').text();
//     let option3 = $('#option3').text();
//     let option4 = $('#option4').text();
//     let option5 = $('#option5').text();

//     console.log("option1  = ",option1);
//     let option1Len = option1.length;
//     let option2Len = option2.length;
//     let option3Len = option3.length;
//     let option4Len = option4.length;
//     let option5Len = option5.length;

//     console.log(option1Len);

//     if( option1Len == 0)
//     {
//         // This is when we need a long answer
//         // $('#multipleChoiceArea').remove();
//         $('#longAnswer').show();
//         $('#longAnswer').attr("name","1");

//         $('#optionArea1').hide();
//         $('#optionArea2').hide();
//         $('#optionArea3').hide();
//         $('#optionArea4').hide();
//         $('#optionArea5').hide();
//         $('#optionLabel1').hide();
//         $('#optionLabel2').hide();
//         $('#optionLabel3').hide();
//         $('#optionLabel4').hide();
//         $('#optionLabel5').hide();

//     }
//     else if( option1Len > 0) 
//     {
//         //********   This is for the Multiple Choice questions   *******//

//         console.log(option1);
//         // alert(option1);
//         $('#longAnswer').hide();    
//         $('#longAnswer').attr("name", "0");

//         if(option1Len != 0){
//             $('#optionArea1').show();
//             $('#optionLabel1').show();
//             $('#optionLabel1').html(option1);
//         }
//         else {
//             $('#optionArea1').hide();
//             $('#optionLabel1').hide();
//         }
//         if (option2Len != 0) {
//             $('#optionArea2').show();
//             $('#optionLabel2').show();
//             $('#optionLabel2').html(option2);
//         } else {
//             $('#optionArea2').hide();
//             $('#optionLabel2').hide();
//         }
//         if (option3Len != 0) {
//             $('#optionArea3').show();
//             $('#optionLabel3').show();
//             $('#optionLabel3').html(option3);
//         } else {
//             $('#optionArea3').hide();
//             $('#optionLabel3').hide();
//         }
//         if (option4Len != 0) {
//             $('#optionArea4').show();
//             $('#optionLabel4').show();
//             $('#optionLabel4').html(option4);
//         } else {
//             $('#optionArea4').hide();
//             $('#optionLabel4').hide();
//         }
//         if (option5Len != 0) {
//             $('#optionArea5').show();
//             $('#optionLabel5').show();
//             $('#optionLabel5').html(option5);
//         } else {
//             $('#optionArea5').hide();
//             $('#optionLabel5').hide();
//         }

//         // $('#optionArea2').show();
//         // $('#optionArea3').show();
//         // $('#optionLabel2').show();
//         // $('#optionLabel3').show();

//         // $('#optionLabel2').html(option2);
//         // $('#optionLabel3').html(option3);
//     }
//     // alert("questionIs", questionIs);
//     // $('#optionDisplayArea').html(option1);
//     //    let optionValue= $('#optionDisplayArea').html(option1);
//     // console.log(option1);
//     // alert(option1);
//     // $('#optionLabel1').html(option1);
//     // $('#optionLabel2').html(option2);
//     // $('#optionLabel3').html(option3);

//     // $('#optionDisplayArea').append('<p>'+ option1+'</p>')
//     // $('#optionDisplayArea').html(option1);
//     // $('#optionDisplayArea').html(option2);
//     // $('#optionDisplayArea').html(option3);
//     // $('#optionDisplayArea').html(option4);
//     // $('#optionDisplayArea').html(option5);


//     // let checkbox1 = '<input type="checkbox" id="option' + 1 + '" name="option' + 1 + '" value="' + option1 + '"><label for="option' + 1 + '"> ' + option1 + ' </label><br>';
//     // $('#testDisplayArea').append(checkbox1); 
// }
 

// // Just tried to excute the functions using setTimeOut() with order but didn't worked
// function executeAsynchronously(functions, timeout) 
// {
//     for (var i = 0; i < functions.length; i++) 
//     {
//         setTimeout(functions[i], timeout);
//     }
// }
