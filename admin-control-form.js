$(document).ready(
    function()
    {
        $('#create').click(function ()
        {
            $('#makingArea').append('<textarea name="question" placeholder="Enter the questions..."  onmouseover="" onkeypress="" cols="30" rows="10" class="questionarea">');

        });

        let i = 0;

        $('#delete').click(function () {
            let textareaarr = [];
            textareaarr = $('textarea');
            i = textareaarr.length;
            textareaarr[i - 1].remove();
            console.log(textareaarr[i]);
            i--;
        });
        // function appear() {
        //     $('.pop').show();
        // }

        // function goback() {
        //     $('.pop').hide();
        // } 

        //############### CODE TO INCREASE THE SIZE OF THE TEXT AREA ################
        // function area_increase() {

        //     $('#area-increase').keypress(function () {
        //         var keyvalue = this.value;
        //         // alert('in keypress function');
        //         return (keyvalue);
        //         if (key == 13) {
        //             alert('working');


        //             var c = document.getElementById('area-increase');
        //             // Q1. Why is it different from above one. This is 324 while earlier it was 320. See the output.
        //             // console.log(c.clientWidth);

        //             // Q2. How to update the code to increase the width by 10rem.
        //             $c.css({ width: $c.width() + 10 }); //It adds 10 pixels here.

        //         }
        //     });

        //     function test() {
        //         alert('in mouse over');

        //         var c = document.getElementById('area-increase');
        //         // Q1. Why is it different from above one. This is 324 while earlier it was 320. See the output.
        //         // console.log(c.clientWidth);

        //         // Q2. How to update the code to increase the width by 10rem.
        //         $c.css({ width: $c.width() + 10 }); //It adds 10 pixels here.
        //     }

        // }

        

    }
);

// function deleting() {
//     $('#delete').on('click', '.questionarea',
//         $(this).remove('.questionarea'));
//     );
// }


