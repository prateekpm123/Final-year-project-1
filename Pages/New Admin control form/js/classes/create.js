
class Create {

    createStructure(ididis) {
        let questionsetDivTag =
            '<div '+
                'class="question-set" '+
                'id="questionset' +ididis +'">'+
            '</div>';

        let optionsetDivTag =
            '<div '+
                'class="options-set" '+
                'id="optionset' + ididis + '">' +
            '</div>';

        $('.createArea').append(questionsetDivTag);
        $('.createArea').append(optionsetDivTag);
        console.log('in create clas');
    }

    
}