let questionsArray = ['What is your name ?', 'What is your age ?', 'Where do you stay ?', 'What is your favourite anime', 'Which are you currently watching ? '];

counter = 0;

function showNextQuestion() 
{
    let area = $('#questionDisplayArea');

    $('#questionDisplayArea').html(questionsArray[counter]);
    counter++;
}

