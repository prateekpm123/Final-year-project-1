$(document).ready(
    function () {
        let questionAreaCounter = 1;
        let i = 0;
        let optionsClick = 0;



        // ******** DYNAMICALLY CREATING OPTIONS MENu *********

        $("#optionsappear").click(function () {
            // Write here the code to append the options list

        });

        // ************************* TO CREATE A NEW QUESTION AREA  *******************8
        $('#create').click(function ()
        {

            alert('in create');
            // $('.addingQuestionBody').append(
            //     '<form method="post" id="form-page2' + questionAreaCounter + '" action="userinfo.php"> </form>'
            // );

            $('#form-page1').append(
                '<textarea name="question' + questionAreaCounter + '" placeholder="Enter the questions..."  onmouseover="" onkeypress="" cols="30" rows="10" id="Q' + questionAreaCounter + '" class="questionarea">'
            ); 
            
            $('#form-page1').append(
                '<button id="sub" class="btn btn-primary savebtn"> Save</button>'
            ); 


            // **************** My made option buttons *****************

            // $('#form-page1').append(
            //     // '< button class="btn btn-primary textarea-btn" name="submit" id="optionsappear" > + < /button>'
            //     '<button class="btn btn-primary textarea-btn" name="submit"  id="optionsappear' + questionAreaCounter + '" onclick=showOptions(this.id)>+</button>'
            // );
            // $('#form-page1').append(
            //     '<div id="optionsarea' + questionAreaCounter + '" class="optionsareaclass"></div>'
            // );
            // let questionCounter = "#optionsarea"+questionAreaCounter; 
            // $(questionCounter).append(
            //     '<button class="options' + questionAreaCounter + ' optionbtns"> Options</button>                <button class= "options' + questionAreaCounter + ' optionbtns"> Ratings</button>            <button class="options' + questionAreaCounter + ' optionbtns">Answers</button>'
            // );


            // *************** Code for bootstrap dropdownbutton *****************
            $('#form-page1').append(
                '<li class="nav-item dropdown myCustomization-li" id="user_dropdown">  <a class="nav-link dropdown-toggle myCustomization-a" href="#" id="navbarDropdownMenuLink" role="button"    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+</a>  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="dropdown"> <a class="dropdown-item" href="#">Multiple choice</a> <a class="dropdown-item" href="#">Ratings</a>                  <a class="dropdown-item" href="#">Long Answer</a> <a class="dropdown-item" href="#">Short Answer</a> </div> </li>'
            );

 

            questionAreaCounter ++;
                // div1.appendChild(textarea);
                // provideId(questionAreaCounter);
                // $("#tbl2").append('<input type="checkbox" id="' + firstId + '-' + secondId + '" >');
            }
        );



        // TO DELETE A NEW QUESTION AREA
        $('#delete').click(function () {
            let textareaarr = [];
            textareaarr = $('textarea');
            let savebtn = [];
            savebtn = $('.savebtn');

            // *************** Code for bootstrap dropdownbutton *****************
            let dropdown = [];
            dropdown = $('.dropdown');
            dropdownLen = dropdown.length;
            dropdown[dropdownLen-1].remove();


            // ****** My made option buttons *******
            // let optionbtn = [];
            // optionbtn = $('.textarea-btn');
            // let options = [];
            // options = $('.optionbtns');
            // let optionsdiv = [];
            // optionsdiv = $('.optionsareaclass');
            
            i = textareaarr.length;
            j = savebtn.length;

            // ****** My made option buttons *******
            // k = optionbtn.length;
            // l = options.length;
            // m = optionsdiv.length;

            textareaarr[i - 1].remove();
            savebtn[j - 1].remove();

            // ****** My made option buttons *******
            // optionbtn[k-1].remove();
            // for(a = 0;a<3; a++)
            // {
            //     options[l-1-a].remove();
            // }
            // optionsdiv[m - 1].remove();
            // console.log(textareaarr[i]);


            console.log(savebtn);

            // ****** My made option buttons *******
            // console.log(optionbtn);
            // console.log(options);
            // i--;
            // j--;
            // k--;
            questionAreaCounter--;
        });




        //************** / AJAX CODE TO SAVE THE QUESTIONS ANSWERS INTO DATABASE WITHOUT REFRESHING ****************
        $('#sub').click(function () {
            alert('in save');
            var data = $("#form-page1 :input").serializeArray();
            $.post($("#form-page1").attr("action"), data, function (info) {
                $("#result").html(info);
            });
            // alert('in sub function');
        });

        $("#form-page1").submit(function () {
            return false;
            alert('in false function');
        });


    // ******* CODE TO MAKE A WINDOW APPEAR AND DISAPPEAR *******

        // function appear() {
        //     $('.pop').show();
        // }

        // function goback() {
        //     $('.pop').hide();
        // } 


    }
);

// ****** My made option buttons *******

        // ************* OPTION MENU ***************

        // function showOptions(id) {

        //     let idno;
        //     let idlen;
        //     console.log(id.length);
        //     if(id.length <= 13)
        //     {
        //         idno = "";
        //     }
        //     else
        //     {
        //         idlen = id.length;
        //         idno = id[idlen - 1];
        //         console.log(idno);
        //     }
        //     console.log(idno); 
        //     // var pos = $(optionsBtnsNo).position();
        //     // alert('in the option function');
        //     // $('.options').css("top","pos.top");
        //     // alert("pos.top"+pos.top+"position left"+pos.left);
        //     let optionsClick
        //     optionsClick++;
        //     oddEven = optionsClick % 2;

        //     // Adding the counter values to the put the variables in the jquery

        //     // let optionsareaBtnsNo = "#optionsarea"+questionAreaCounter;

        //     // optionsBtnsNo = ".options"+questionAreaCounter ;

        //     let optionarea = "#optionarea"+idno;
        //     let options = ".options"+idno;
        //     if (oddEven == 1) {
        //         $(optionarea).css({
        //             // "display": "block",
        //         });
        //         $(optionarea).show();
        //         $(options).show();
        //     } else {
        //         $(optionarea).hide();
        //         $(options).hide();
        //     }


        // }























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

// let optionsClick = 0;

// function optionsappear() {
//     var pos = $('#optionsappear').position();
//     // alert('in the option function');
//     // $('.options').css("top","pos.top");
//     // alert("pos.top"+pos.top+"position left"+pos.left);
//     optionsClick++;
//     oddEven = optionsClick % 2;
//     if (oddEven == 1) {
//         $('#optionsarea').css({
//             "display": "block",
//         });
//         $('#optionsarea').show();
//         $('.options').show();
//     } else {
//         $('#optionsarea').hide();
//         $('.options').hide();
//     }
// }


// ********** CODE FOR TESTING **************

// let div1 = document.createElement("div");
// div1.setAttribute("id",  "makingArea1");

// textarea = document.createElement('textarea');
// textarea.setAttribute("class","questionarea");
// textarea.setAttribute("name", "question");
// textarea.setAttribute("placeholder", "Enter the questions...");
// textarea.setAttribute("onmouseover", "");
// textarea.setAttribute("cols", "30");
// textarea.setAttribute("rows", "10");
// textarea.setAttribute("id", "questionAreaCounter");
// var s;
// s = '<div id="makingArea">'
//     +'< textarea name = "question" placeholder = "Enter the questions..." id = "1" onmouseover = "" onkeypress = "" cols = "30" rows = "10" class="questionarea" >'
//     +'</textarea >'
//     +'<button id="sub" class="btn btn-primary"> Save</button>'
//     +'<span id="result"></span>'
//     +'</div >';
// let form_page = document.getElementById('form-page');
// form_page.appendChild(textarea);
// $('#makingarea1').append()


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