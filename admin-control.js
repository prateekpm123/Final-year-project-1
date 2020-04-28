    // var globalVariable = {
    //     x: 'sachin'
    // };

function passTheId(id) {
    let val = id;
    alert(id);
    localStorage.setItem("myId", val);
    window.location.href="admin-conttrol-form.php";
    window.location.href = "preview-form.php";

} 

function newcard() {
    
    let cardBody = '<a>'+
                        '<div class="my-card newCard">'+
                            '<div class="my-card-body">'+
                                '<h6 class="card-title" contenteditable="true" id="test" >Type here the title</h6>' +
                            '</div>'+
                        '</div>'+
                    '</a>';
    
    $('#cardArea').append(cardBody);
}

function newcardVersion() {
    let cardBody = '<div class="my-card newCard">' +
                        '<div class="my-card-body">' +
                            '<h6 class="card-title" contenteditable="true" id="test">Teachers review on infrastructure</h6>' +
                            '<a href="admin-control-form.php" onclick="passTheId(this.id)" id="1" class="card-link">Edit</a>' +
                            '<a href="admin-control-form.php" class="card-link">Delete</a>' +
                        '</div>' +
                    '</div>';

    $('#cardAreaVersion').append(cardBody);
}

function test() {
    let valueIs = $('#test').text();
    alert('value is '+valueIs);
}