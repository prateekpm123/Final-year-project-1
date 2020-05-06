    // var globalVariable = {
    //     x: 'sachin'
    // };

count = 1;
vCount = 0; 


// function passTheId(id) {
//     let val = id;
//     // alert(id);
//     localStorage.setItem("myId", val);
//     window.location.href="admin-conttrol-form.php";
//     window.location.href = "preview-form.php";
//     // window.location.href = ""; 

// } 

function newcard() {
    // let saveCard = "update";
    let cardBody = '<a>'+
                        '<div class="my-card newCard">'+
                            '<div class="my-card-body">'+
                                '<h6 class="card-title" contenteditable="true" id="'+count+'" >Type here the title</h6>' +
                                '<button class="btn btn-primary" id="button'+count+'" onclick="saveTheFormDetails(this.id)">Save</button>' +
                            '</div>'+
                        '</div>'+
                    '</a>';
    
    $('#cardArea').append(cardBody);



    count++;
}

function saveTheFormDetails(btnid) {

    var formNameIdIs = btnid.substring(6);
    console.log(formNameIdIs,' form name id is ')
    let cardIdIs = "#" + formNameIdIs;
    console.log(cardIdIs,' card id is ');
    let cardValueIs = $(cardIdIs).text();
    console.log(cardValueIs,' its value is ');
    $.ajax({
        url: "saveTheFormDetails.php",
        type: "post",
        data: {
            id: count,
            cardName : cardValueIs,
        },
        success: function (data, status) {
            if (status == "success")
                console.log('Data is updated');
            $('#display').html(data);
        },
    });
}

function insertTheFormDetails() {
    
    $.ajax({
        url: "insertTheFormDetails.php",
        type: "post",
        data: {
            id : count,
        },
        success: function (data, status) {
          if(status == "success")
            console.log('Data is entered'); 
            $('#display').html(data); 
        }, 
    });

}



function newcardVersion() {
    let cardBody = '<div class="my-card newCard">' +
                        '<div class="my-card-body">' +
                            '<h6 class="card-title" contenteditable="true" id="test">Teachers review on infrastructure</h6>' +
                            '<a href="admin-control-form.php" onclick="passTheId(this)" id="'+vCount+'" class="card-link">Edit</a>' +
                            '<a href="admin-control-form.php" class="card-link">Delete</a>' +
                        '</div>' +
                    '</div>';

    $('#cardAreaVersion').append(cardBody);
    vCount++;
}

function test() {
    let valueIs = $('#test').text();
    // alert('value is '+valueIs);
}