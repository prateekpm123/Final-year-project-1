let questionsArray = ['What is your name ?', 'What is your age ?', 'Where do you stay ?', 'What is your favourite anime', 'Which are you currently watching ? '];

counter = 0;

function showNextQuestion() 
{
    counter;
    let questionCount = $('#questionCountIs').text();
    questionCount--;
    // getData(counter);
    // setTimeout(displayQuestion(), 5000);
    // displayOption();
    // displayQuestion();
    // executeAsynchronously([getData(counter),displayQuestion(),displayOption1()],5000);
    if( counter == 0)
    {
        // alert('in if loop');
        // getData(counter);
        displayQuestion();
        displayOption1();
        counter++;
        getData(counter);
        
    }
    else if (0 < counter && counter < questionCount)
    {
        // alert('in else loop and counter = '+counter);

        // getData(counter);
        displayQuestion();
        displayOption1();
        counter++;
        getData(counter);
    }
    else
    {
        // alert('in 3rd condition');
        $('#longAnswer').hide();
        $('#end').append("<h1>Thank You</h1>");
        $('#questionDisplayArea').html("");


    }
    
    
}


function onloading(counter) {
    $('#longAnswer').hide();
    $('#optionArea1').hide();
    $('#optionArea2').hide();
    $('#optionArea3').hide();
    $('#optionArea4').hide();
    $('#optionArea5').hide();
    getData(counter);
    counter++;
    // showNextQuestion();
    // showNextQuestion();

}

function getData(counter) {
    // alert('in get data function');
    $.ajax({
        url: "getData.php",
        type: "post",
        data: {
            counter : counter
        },
        success: function (data, status) {
            // console.log(data);
            $("#hiddenDisplay").html(data);
            // alert(status);

        },
    }); 
    // counter++;

    // displayQuestion();
}

function displayQuestion() {
    // alert('in display question function');
    // let questionIs = document.getElementById('questionIs')
    let questionIs = $('#questionIs').text();
    // alert("questionIs", questionIs);
    $('#questionDisplayArea').html(questionIs);
    // displayOption();

} 

function displayOption() 
{
    // alert('in display option function');
    // let option1Is = $('#option1').text();
    // $('#optionDisplayArea').html(option1Is);

    // let alloptions = $('.multipleChoiceOption');    
    // let alloptionslen = alloptions.length;
    // console.log('alloptions ',alloptionslen);
    // console.log('in display options fucntionc');
    // for( let all=0; all<alloptions.length; all++)
    // {
    //     console.log('alloptions ', alloptions[all]);
    //     let all2 = all + 1;
    //     console.log('options = ', alloptions[all]);

        // ##############  Trying toa ccess the options values through this for Loop  ################
        // for(let i=1; 1<alloptionslen; i++)
        // {
        //     let optionname = "option"+i;
        //     optionname = $()
        // }

        let option = [];
        let option1 = $('#option1').text();
        let option2 = $('#option2').text();
        let option3 = $('#option3').text();
        let option4 = $('#option4').text();
        let option5 = $('#option5').text();
        console.log(option1);
        let checkbox1 = '<input type="checkbox" id="option' + 1 + '" name="option' + 1 + '" value="' + option1 + '"><label for="option' + 1 + '"> ' + option1 + ' </label><br>'; 
        $('#optionDisplayArea').append(checkbox1);
        let checkbox2 = '<input type="checkbox" id="option' + 2 + '" name="option' + 2 + '" value="' + option2 + '"><label for="option' + 2 + '"> ' + option2 + ' </label><br>';
        $('#optionDisplayArea').append(checkbox2);
        // option.push(option1);
        // option.push(option2);
        // option.push(option3);
        // option.push(option4);
        // option.push(option5);


        // let valueid = "#option" + all2;
        // let value = $(valueid).text();
        // console.log('options value', option);
        // // console.log(option);
        // if( option[all] != "" )
        // {            
        //     console.log('value is not empty');
        //     console.log('options value', option[all]);
        //     // $('#optionDisplayAreaPara').html(value);
            let checkbox = '<input type="checkbox" id="option' + all2 + '" name="option' + all2 + '" value="' + option[all] + '"><label for="option' + all2 + '"> '+ option[all] +' </label><br>';

        //     $('#optionDisplayArea').append(checkbox);
            
        // }
    // }
    // optionsCount = alloptions.length;
    // alert('optionsCount ',optionsCount);
    // console.log(optionsCount);



    // ####################   Bootstrap CheckBox code   #########################
    // <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    // <label class="form-check-label" for="defaultCheck1">
    //     Default checkbox
    // </label>
}


function displayOption1() {

    // alert('in display function');
    $('#longAnswer').hide();
    $('#optionArea1').hide();
    $('#optionArea2').hide();
    $('#optionArea3').hide();
    $('#optionArea4').hide();
    $('#optionArea5').hide();


    let option1 = $('#option1').text();
    let option2 = $('#option2').text();
    let option3 = $('#option3').text();
    let option4 = $('#option4').text();
    let option5 = $('#option5').text();
    let option1Len = option1.length;
    let option2Len = option2.length;
    let option3Len = option3.length;
    let option4Len = option4.length;
    let option5Len = option5.length;

    console.log(option1Len);

    if( option1Len == 0)
    {
        // This is when we need a long answer
        // $('#multipleChoiceArea').remove();
        $('#longAnswer').show();
        $('#optionArea1').hide();
        $('#optionArea2').hide();
        $('#optionArea3').hide();
        $('#optionArea4').hide();
        $('#optionArea5').hide();
        $('#optionLabel1').hide();
        $('#optionLabel2').hide();
        $('#optionLabel3').hide();
        $('#optionLabel4').hide();
        $('#optionLabel5').hide();

    }
    else if( option1Len > 0) 
    {
        //********   This is for the Multiple Choice questions   *******//

        console.log(option1);
        // alert(option1);
        $('#longAnswer').hide();

        if(option1Len != 0){
            $('#optionArea1').show();
            $('#optionLabel1').show();
            $('#optionLabel1').html(option1);
        }
        else {
            $('#optionArea1').hide();
            $('#optionLabel1').hide();
        }
        if (option2Len != 0) {
            $('#optionArea2').show();
            $('#optionLabel2').show();
            $('#optionLabel2').html(option2);
        } else {
            $('#optionArea2').hide();
            $('#optionLabel2').hide();
        }
        if (option3Len != 0) {
            $('#optionArea3').show();
            $('#optionLabel3').show();
            $('#optionLabel3').html(option3);
        } else {
            $('#optionArea3').hide();
            $('#optionLabel3').hide();
        }
        if (option4Len != 0) {
            $('#optionArea4').show();
            $('#optionLabel4').show();
            $('#optionLabel4').html(option4);
        } else {
            $('#optionArea4').hide();
            $('#optionLabel4').hide();
        }
        if (option5Len != 0) {
            $('#optionArea5').show();
            $('#optionLabel5').show();
            $('#optionLabel5').html(option5);
        } else {
            $('#optionArea5').hide();
            $('#optionLabel5').hide();
        }

        // $('#optionArea2').show();
        // $('#optionArea3').show();
        // $('#optionLabel2').show();
        // $('#optionLabel3').show();

        // $('#optionLabel2').html(option2);
        // $('#optionLabel3').html(option3);
    }
    // alert("questionIs", questionIs);
    // $('#optionDisplayArea').html(option1);
    //    let optionValue= $('#optionDisplayArea').html(option1);
    // console.log(option1);
    // alert(option1);
    // $('#optionLabel1').html(option1);
    // $('#optionLabel2').html(option2);
    // $('#optionLabel3').html(option3);

    // $('#optionDisplayArea').append('<p>'+ option1+'</p>')
    // $('#optionDisplayArea').html(option1);
    // $('#optionDisplayArea').html(option2);
    // $('#optionDisplayArea').html(option3);
    // $('#optionDisplayArea').html(option4);
    // $('#optionDisplayArea').html(option5);


    // let checkbox1 = '<input type="checkbox" id="option' + 1 + '" name="option' + 1 + '" value="' + option1 + '"><label for="option' + 1 + '"> ' + option1 + ' </label><br>';
    // $('#testDisplayArea').append(checkbox1); 
}
 
function executeAsynchronously(functions, timeout) 
{
    for (var i = 0; i < functions.length; i++) 
    {
        setTimeout(functions[i], timeout);
    }
}
