let questionsArray = ['What is your name ?', 'What is your age ?', 'Where do you stay ?', 'What is your favourite anime', 'Which are you currently watching ? '];

counter = 0;

function showNextQuestion() 
{
    counter;
    getData(counter);
    setTimeout(displayQuestion(), 5000);
    displayOption();
    // displayQuestion();
    counter++;
    
}

function getData(counter) {
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


}

function displayQuestion() {
    // let questionIs = document.getElementById('questionIs')
    let questionIs = $('#questionIs').text();
    // alert("questionIs", questionIs);
    $('#questionDisplayArea').html(questionIs);
} 

function displayOption() 
{
    // let option1Is = $('#option1').text();
    // $('#optionDisplayArea').html(option1Is);

    let alloptions = $('.multipleChoiceOption');    
    let alloptionslen = alloptions.length;
    console.log('alloptions ',alloptionslen);
    console.log('in display options fucntionc');
    for( let all=0; all<alloptions.length; all++)
    {
        console.log('alloptions ', alloptions[all]);
        let all2 = all + 1;
        console.log('options = ', alloptions[all]);
        let valueid = "#option" + all2;
        let value = $(valueid).text();
        console.log('options value', value);
        if( value != "")
        {            
            console.log('value is not empty');
            console.log('options value', value);
            // $('#optionDisplayAreaPara').html(value);
            let checkbox = '<input type="checkbox" id="option' + all2 + '" name="option' + all2 + '" value="' + value + '"><label for="option' + all2 + '"> '+ value +' </label><br>'

            $('#optionDisplayArea').append(checkbox);
            
        }
    }
    // optionsCount = alloptions.length;
    // alert('optionsCount ',optionsCount);
    // console.log(optionsCount);



    // ####################   Bootstrap CheckBox code   #########################
    // <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    // <label class="form-check-label" for="defaultCheck1">
    //     Default checkbox
    // </label>
}
 