$(document).ready(function () {



	// GLOBAL VARIABLES
	questionCounter = 1;

	$('.create').click(function create(idis) {
		console.log('long Answer', idis.currentTarget.id);

		let createClass = new Create(this);

		if(idis.currentTarget.id == '1' ) {
			console.log('is a long answer ');

			questionCounter = createClass.createStructure().createLongAnswer().createSaveButton().createDeleteButton().incrementCounter();
		}
		else if (idis.currentTarget.id == '2') {
			console.log('is a multiple choice');

			questionCounter = createClass.createStructure().createLongAnswer().createMultipleChoice().createSaveButton().createDeleteButton().incrementCounter();
		}
		



	});

});


class Create {

	constructor(info) {
		this.Info = info;
	}

	createStructure() {

		// CREATING QUESTION SET AND OPTION SET
		let questionsetDivTag =
			'<div ' +
			'class="question-set" ' +
			'id="questionset' + this.Info.id + '">' +
			'</div>';

		let optionsetDivTag =
			'<div ' +
			'class="options-set" ' +
			'id="optionset' + this.Info.id + '">' +
			'</div>';

		// HTml for under question set div tag
		let extraInfoSpace = '<div class="row" id="extraInfoSpa'+this.Info.id+'">'+
								'<div class="col-lg-1 col-md-1" id="questionNo'+this.Info.id+'">'+
									'<span class="badge badge-warning">'+this.Info.id+'</span>'+
								'</div>'+
								'<div class="col-lg-11 col-md-11" id="questionTextArea'+this.Info.id+'">'+
								'</div>'+
							'</div>';

		let questionSetId = '#questionset'+this.Info.id;

		$('.createArea').append(questionsetDivTag);
		$('.createArea').append(optionsetDivTag);
		$(questionSetId).append(extraInfoSpace);
		console.log('in create class');
		return this;
	}

	createLongAnswer() {
		let questionTextareaTag =
			'<textarea ' +
			'name="question' + this.Info.id + '"  ' +
			'placeholder="Enter the ' + this.Info.id + ' question..."  ' +
			'style="overflow:hidden"  ' +
			'onkeyup="AutoGrowTextArea(this)" ' +
			'cols="30"  ' +
			'rows="1" ' +
			'id="Q' + this.Info.id + '" ' +
			'class="questionarea questionsetComponents' + this.Info.id + '">' +
			'</textarea>';

		let questionAreaId = '#questionTextArea' + this.Info.id;
		$(questionAreaId).append(questionTextareaTag);
		return this;
	}

	createSaveButton() {
		let saveButton = '<button ' +
			'class="btn btn-primary"' +
			'id="savebtn' + this.Info.id + '">' +
			'Save  ' +
			'</button>';

		let questionAreaId = '#questionset' + this.Info.id;
		$(questionAreaId).append(saveButton);
		return this;
	}

	createDeleteButton() {
		let deleteButton = '<button ' +
			'class="btn btn-primary"' +
			'id="deletebtn' + this.Info.id + '">' +
			'Delete  ' +
			'</button>';

		let questionAreaId = '#questionset' + this.Info.id;
		$(questionAreaId).append(deleteButton);
		return this;
	}

	createMultipleChoice() {
		let multipleChoiceCounter = this.Info.id;

		let multipleChoiceInputTag = '<input  type = "text"' +
				'class = "input-choice multipleChoiceInput' + this.Info.id + '" ' +
				'placeholder=" - type your option 1" ' +
				'id="multipleChoiceid' + this.Info.id + multipleChoiceCounter + '" ' +
				'value="" ' +
				'onkeypress="myFunction(event, this.className,this.id)"' +
			'</input>';

		let questionAreaId = '#questionTextArea' + this.Info.id;
		$(questionAreaId).append(multipleChoiceInputTag);

		multipleChoiceCounter++;
		return this;
	}

	incrementCounter() {
		return this.Info.id++;
	}

	setMultipleChoiceCounter() {
		let multipleChoiceCounter = 1;
		return multipleChoiceCounter;
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