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
    let option1Is = $('#option1').text();
    $('#optionDisplayArea').html(option1Is);
}
 