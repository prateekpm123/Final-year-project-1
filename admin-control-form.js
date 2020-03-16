$(document).ready(
    function()
    {
        let questionAreaCounter = 1;
        let i = 0;

        $('#create').click(function ()
        {
            questionAreaCounter++;
            $('#makingArea').append('<textarea name="question" '+questionAreaCounter+'" placeholder="Enter the questions..."  onmouseover="" onkeypress="" cols="30" rows="10" id="'+ questionAreaCounter+'" class="questionarea">');
            // provideId(questionAreaCounter);
            // $("#tbl2").append('<input type="checkbox" id="' + firstId + '-' + secondId + '" >');
            }
        );
        
        

        // function provideId(questionAreaCounter)
        // {
        //     $('.questionarea').each(function(index, element){

        //     });
        // }

        $('#delete').click(function () {
            let textareaarr = [];
            textareaarr = $('textarea');
            i = textareaarr.length;
            textareaarr[i - 1].remove();
            console.log(textareaarr[i]);
            i--;
            questionAreaCounter--;
        });


        // function appear() {
        //     $('.pop').show();
        // }

        // function goback() {
        //     $('.pop').hide();
        // } 

        //############### CODE TO INCREASE THE SIZE OF THE TEXT AREA ################
        // function area_increase() {

        //     $('#1').keypress(function () {
        //         var keyvalue = this.value;
        //         // alert('in keypress function');
        //         return (keyvalue);
        //         if (key == 13) {
        //             alert('working');


        //             var c = document.getElementById('1');
        //             // Q1. Why is it different from above one. This is 324 while earlier it was 320. See the output.
        //             // console.log(c.clientWidth);

        //             // Q2. How to update the code to increase the width by 10rem.
        //             $c.css({ width: $c.width() + 10 }); //It adds 10 pixels here.

        //         }
        //     });

        //     function test() {
        //         alert('in mouse over');

        //         var c = document.getElementById('1');
        //         // Q1. Why is it different from above one. This is 324 while earlier it was 320. See the output.
        //         // console.log(c.clientWidth);

        //         // Q2. How to update the code to increase the width by 10rem.
        //         $c.css({ width: $c.width() + 10 }); //It adds 10 pixels here.
        //     }

        // }

        

    }
);

// $('#sub').click(function () {
//     alert('in sub function');
//     var data = $("#form-page :input").serializeArray();
//     $.post($("#form-page").attr("action"), data, function (info) {
//         $("#results").html(info);
//     });
// });

// $("#form-page").submit(function () {
//     alert('in false function');
//     return false;
// });

// function deleting() {
//     $('#delete').on('click', '.questionarea',
//         $(this).remove('.questionarea'));
//     );
// }


