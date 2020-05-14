

$(document).ready( function () {
    


    // GLOBAL VARIABLES
    questionCounter = 1;

    $('.create').click(function create(idis) {
        console.log('long Answer',idis.currentTarget.id);

        let createClass = new Create(this);

        questionCounter = createClass.createStructure().createLongAnswer();

        

    });
    
});


class Create {

    constructor(info) {
        this.Info = info;
    }

    createStructure() {

        // CREATING QUESTION SET AND OPTION SET
        let questionsetDivTag =
            '<div '+
                'class="question-set" '+
                'id="questionset' +this.Info.id +'">'+
            '</div>';

        let optionsetDivTag =
            '<div '+
                'class="options-set" '+
                'id="optionset' + this.Info.id + '">' +
            '</div>';

        $('.createArea').append(questionsetDivTag);
        $('.createArea').append(optionsetDivTag);
        console.log('in create clas');
        return this;
    }

    createLongAnswer() {
        let questionTextareaTag =
            '<textarea ' +
                'name="question' + this.Info.id + '"  ' +
                'placeholder="Enter the questions..."  ' +
                'style="overflow:hidden"  ' +
                'onkeyup="AutoGrowTextArea(this)" ' +
                'cols="30"  ' +
                'rows="1" ' +
                'id="Q' + this.Info.id + '" ' +
                'class="questionarea questionsetComponents' + this.Info.id + '">' +
            '</textarea>';

        let questionAreaId = '#questionset'+this.Info.id;
        $(questionAreaId).append(questionTextareaTag);
        return this.Info.id++;
    }
}

class Utlity {

    constructor(id) {
        this.id = id;
    }

    filterNumericid(idIs) {
        let id = idIs.match(/\d+/g, ''); // this extracts only digits from the string
        console.log("id is ", id);
        return id;
    }

}

function AutoGrowTextArea(textField) {
    if (textField.clientHeight < textField.scrollHeight) {
        textField.style.height = textField.scrollHeight + "px";
        if (textField.clientHeight < textField.scrollHeight) {
            textField.style.height =
                textField.scrollHeight * 2 - textField.clientHeight + "px";
        }
    }
}
