{/* <script scr="preview-form.php"></script>  */}

formIdIs = localStorage.getItem("myId");

let count = 0;
let pressedCount = 0;
// alert(formIdIs);
// $(document).ready( function() {
//     $('body').on("click", function() {
        
//     })
// });
function fetchData() {
    // alert(' fetch the data');
    $.ajax({
        url: "getData.php",
        type: "post",
        data: {
            formId: formIdIs
        },
        success: function (data, status) {
            if(status == "success"){
                console.log("fetching is complete");
                
            }
        },

    });
}



function displayBack() {
    pressedCount++;
    console.log('In display Next count is ', count);
    // This count 1 is to place near the id attribute so that those id's start from 1;
    count1 = count + 1;
    console.log('In display Next count1 is ', count1);


    // // This check wheather what we are giving is a textarea or an Option
    // let whichOption = $('#answerArea').attr('class');
    // // alert("which option is "+whichOption);
    // let ans;
    // if(whichOption == 1)
    // {
    //     ans = saveAnswer(count);
    // }
    // else {
    //     ans = saveOption(count);
    //     // alert('not a textarea');
    // }

    // if( ans == 1){
    deleteCurrent();
    // }
    // count--;

    // // $("#display").append('<div class="questions" id="questionArea"></div>');
    if (pressedCount % 2 == 1) {
        count = count - 2;
        // alert('pressed once');
    } else {
        count = count - 1;
        // alert('pressed twice');
    }
    // ********************* Appending the questions over here *********************
    $("#questionArea").append('<p class="para" id="' + count1 + '">' + questionArray[count].Questions + '</p>');
    // alert("option is"+questionArray[count].Option1);


    // ************** Appending the Options over here !!! *********************

    let option1Len = option1[count].Option1;
    let option2Len = option2[count].Option2;
    let option3Len = option3[count].Option3;
    let option4Len = option4[count].Option4;
    let option5Len = option5[count].Option5;

    // console.log("option1Len is ",option1Len);
    if (count <= questionArrayCount) {
        if (option1[count].Option1 == 0) {
            $('#answerArea').append('<textarea name="" class="" id="T' + count1 + '" cols="30" rows="3"></textarea>')
            $('#answerArea').attr("class", "1");

        } else if (option1[count].Option1 != 0) {
            console.log('in 1st else if condition');
            $('#answerArea').attr("class", "2");
            if (option1[count].Option1 != 0) {
                console.log('in 1st else-if\'s 1st condition');
                $('#answerArea').append('<input type="checkbox" id="optionArea1' + count1 + '" name="optionArea1' + count1 + '" value="1" class="align-left"> <label class="align-left" for="optionArea1' + count1 + '" id="optionLabel1' + count1 + '" >' + option1[count].Option1 + '</label> <br id="tag">');

            } else {}
            if (option2[count].Option2 != 0) {

                $('#answerArea').append('<input type="checkbox" id="optionArea2' + count1 + '" name="optionArea2' + count1 + '" value="2" class="align-left"> <label class="align-left" for="optionArea2' + count1 + '" id="optionLabel2' + count1 + '" >' + option2[count].Option2 + '</label> <br id="tag">');

            } else {}
            if (option3[count].Option3 != 0) {

                $('#answerArea').append('<input type="checkbox" id="optionArea3' + count1 + '" name="optionArea3' + count1 + '" value="3" class="align-left"> <label class="align-left" for="optionArea3' + count1 + '" id="optionLabel3' + count1 + '" >' + option3[count].Option3 + '</label> <br id="tag">');

            } else {}
            if (option4[count].Option4 != 0) {

                $('#answerArea').append('<input type="checkbox" id="optionArea4' + count1 + '" name="optionArea4' + count1 + '" value="4" class="align-left"> <label class="align-left" for="optionArea4' + count1 + '" id="optionLabel4' + count1 + '" >' + option4[count].Option4 + '</label> <br id="tag">');

            } else {}
            if (option5[count].Option5 != 0) {

                $('#answerArea').append('<input type="checkbox" id="optionArea5' + count1 + '" name="optionArea5' + count1 + '" value="5" class="align-left"> <label class="align-left" for="optionArea5' + count1 + '" id="optionLabel5' + count1 + '" >' + option5[count].Option5 + '</label> <br id="tag">');

            } else {}
        }
    } else {
        // alert('in the big else')
        $('#answerArea').append('<h1>Thank You</h1>');
        $('#next').remove();
    }



}

function displayNext() {
    console.log('In display Next count is ', count);
    console.log('This is question array ::'+globalVariable.questionArray[count].Questions);

    // This count 1 is to place near the id attribute so that those id's start from 1;
    count1 = count + 1;
    console.log('In display Next count1 is ', count1);


    // This check wheather what we are giving is a textarea or an Option
    let whichOption = $('#answerArea').attr('class');
    // alert("which option is "+whichOption);
    let ans;
    if (whichOption == 1) {
        ans = saveAnswer(count);
    } else {
        ans = saveOption(count);
        // alert('not a textarea');
    }

    if (ans == 1) {
        deletePrevious();
    }

    // $("#display").append('<div class="questions" id="questionArea"></div>');

    // ********************* Appending the questions over here *********************
    $("#questionArea").append('<h1 class="para" id="' + count1 + '">' +count1 +'. '+  questionArray[count].Questions + '</h1>');
    // alert("option is"+questionArray[count].Option1);


    // ************** Appending the Options over here !!! *********************

    let option1Len = option1[count].Option1;
    let option2Len = option2[count].Option2;
    let option3Len = option3[count].Option3;
    let option4Len = option4[count].Option4;
    let option5Len = option5[count].Option5;

    // console.log("option1Len is ",option1Len);
    if (count <= globalVariable.questionArrayCount) {
        if (option1[count].Option1 == 0) {
            $('#answerArea').append('<input name="" class="" id="T' + count1 + '" cols="30" rows="3"></input>')
            $('#answerArea').attr("class", "1");

        } else if (option1[count].Option1 != 0) {
            console.log('in 1st else if condition');
            $('#answerArea').attr("class", "2");
            if (option1[count].Option1 != 0) {
                console.log('in 1st else-if\'s 1st condition');
                $('#answerArea').append('<input type="checkbox" id="optionArea1' + count1 + '" name="optionArea1' + count1 + '" value="1" class="align-left"> <label class="align-left" for="optionArea1' + count1 + '" id="optionLabel1' + count1 + '" >' + option1[count].Option1 + '</label> <br id="tag">');

            } else {}
            if (option2[count].Option2 != 0) {

                $('#answerArea').append('<input type="checkbox" id="optionArea2' + count1 + '" name="optionArea2' + count1 + '" value="2" class="align-left"> <label class="align-left" for="optionArea2' + count1 + '" id="optionLabel2' + count1 + '" >' + option2[count].Option2 + '</label> <br id="tag">');

            } else {}
            if (option3[count].Option3 != 0) {

                $('#answerArea').append('<input type="checkbox" id="optionArea3' + count1 + '" name="optionArea3' + count1 + '" value="3" class="align-left"> <label class="align-left" for="optionArea3' + count1 + '" id="optionLabel3' + count1 + '" >' + option3[count].Option3 + '</label> <br id="tag">');

            } else {}
            if (option4[count].Option4 != 0) {

                $('#answerArea').append('<input type="checkbox" id="optionArea4' + count1 + '" name="optionArea4' + count1 + '" value="4" class="align-left"> <label class="align-left" for="optionArea4' + count1 + '" id="optionLabel4' + count1 + '" >' + option4[count].Option4 + '</label> <br id="tag">');

            } else {}
            if (option5[count].Option5 != 0) {

                $('#answerArea').append('<input type="checkbox" id="optionArea5' + count1 + '" name="optionArea5' + count1 + '" value="5" class="align-left"> <label class="align-left optionFont" for="optionArea5' + count1 + '" id="optionLabel5' + count1 + '" >' + option5[count].Option5 + '</label> <br id="tag">');

            } else {}
        }
    } else {
        // alert('in the big else')
        $('#answerArea').append('<h1>Thank You</h1>');
        $('#next').remove();
    }


    count++;

}

function deletePrevious() {
    // alert('in delete');
    previousCount = count;
    $('#intro').remove();
    previousParaCountId = "#" + previousCount;
    previousTextareaCountId = "#T" + previousCount;

    previousOption1CountId = "#optionArea1" + previousCount;
    previousOption2CountId = "#optionArea2" + previousCount;
    previousOption3CountId = "#optionArea3" + previousCount;
    previousOption4CountId = "#optionArea4" + previousCount;
    previousOption5CountId = "#optionArea5" + previousCount;

    previousOptionLabel1CountId = "#optionLabel1" + previousCount;
    previousOptionLabel2CountId = "#optionLabel2" + previousCount;
    previousOptionLabel3CountId = "#optionLabel3" + previousCount;
    previousOptionLabel4CountId = "#optionLabel4" + previousCount;
    previousOptionLabel5CountId = "#optionLabel5" + previousCount;



    $(previousParaCountId).remove();
    $(previousTextareaCountId).remove();


    $(previousOption1CountId).remove();
    $(previousOption2CountId).remove();
    $(previousOption3CountId).remove();
    $(previousOption4CountId).remove();
    $(previousOption5CountId).remove();

    $(previousOptionLabel1CountId).remove();
    $(previousOptionLabel2CountId).remove();
    $(previousOptionLabel3CountId).remove();
    $(previousOptionLabel4CountId).remove();
    $(previousOptionLabel5CountId).remove();

    for (let i = 0; i < 5; i++) {
        $('#tag').remove();
    }

}

function deleteCurrent() {
    // alert('in delete');
    count;
    previousCount = count;
    $('#intro').remove();
    previousParaCountId = "#" + previousCount;
    previousTextareaCountId = "#T" + previousCount;

    previousOption1CountId = "#optionArea1" + previousCount;
    previousOption2CountId = "#optionArea2" + previousCount;
    previousOption3CountId = "#optionArea3" + previousCount;
    previousOption4CountId = "#optionArea4" + previousCount;
    previousOption5CountId = "#optionArea5" + previousCount;

    previousOptionLabel1CountId = "#optionLabel1" + previousCount;
    previousOptionLabel2CountId = "#optionLabel2" + previousCount;
    previousOptionLabel3CountId = "#optionLabel3" + previousCount;
    previousOptionLabel4CountId = "#optionLabel4" + previousCount;
    previousOptionLabel5CountId = "#optionLabel5" + previousCount;



    $(previousParaCountId).remove();
    $(previousTextareaCountId).remove();


    $(previousOption1CountId).remove();
    $(previousOption2CountId).remove();
    $(previousOption3CountId).remove();
    $(previousOption4CountId).remove();
    $(previousOption5CountId).remove();

    $(previousOptionLabel1CountId).remove();
    $(previousOptionLabel2CountId).remove();
    $(previousOptionLabel3CountId).remove();
    $(previousOptionLabel4CountId).remove();
    $(previousOptionLabel5CountId).remove();

    for (let i = 0; i < 5; i++) {
        $('#tag').remove();
    }

}

// This saves the answer in the database fetched from the textarea ?
function saveAnswer(count) {
    let count1 = count + 1;
    let textareaId = "#T" + count;
    let answer = $(textareaId).val();
    // alert('answer is '+answer);
    // alert('in saveData');
    $.ajax({
        url: "saveAnswer.php",
        type: "post",
        data: {
            counter: count,
            answer: answer

        },
        success: function (data, status) {
            // console.log(data);
            // alert(noOfRows);
            // $("#results").html(data);   
            // alert(status);

        }
    });
    // deletePrevious();
    return 1;
}

function saveOption(count) {
    let count1 = count + 1;
    let textareaId = "#T" + count;
    let answer = $(textareaId).val();
    var val = [];
    $(':checkbox:checked').each(function (i) {
        val[i] = $(this).val();
    });
    // alert('options answer is '+ val);
    // alert('in saveData');
    $.ajax({
        url: "saveAnswer.php",
        type: "post",
        data: {
            counter: count,
            answer: val

        },
        success: function (data, status) {
            // console.log(data);
            // alert(noOfRows);
            // $("#results").html(data);
            // alert(status);

        }
    });
    // deletePrevious();
    return 1;
}

// function saveOption(counter) {
//     alert('in save option');
//     var val = [];
//     $(':checkbox:checked').each(function (i) {
//         val[i] = $(this).val();
//     });

//     alert('value of checkbox is '+val);


// }