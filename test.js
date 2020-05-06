questionAreaCounter = 10;


// function divideAfterAZero(passedID) {
//     // alert('in the function');
//     if (questionAreaCounter < 9) {
//         console.log('passedID in this new function is', passedID);
//         // passedID = toString(passedID);
//         passedID = passedID;
//         console.log(passedID);
//         let questionCount = passedID[0];
//         let multipleChoiceCount = passedID.substring(questionCount.length);

//         console.log('separated passed id is', multipleChoiceCount);
//         multipleChoiceCount = parseInt(multipleChoiceCount);
//         multipleChoiceCount++;
//         multipleChoiceCount = multipleChoiceCount.toString();
//         multipleChoiceBoxIdNo = questionCount+multipleChoiceCount;
//         console.log('final answer is ', multipleChoiceBoxIdNo);
//         return multipleChoiceBoxIdNo;

//     }

//     else if( questionAreaCounter < 99) {
//         console.log('in 2nd condition');
//         let questionCount = passedID.substring(0, 2);
//         let multipleChoiceCount = passedID.substring(2, passedID.length);
//         console.log('question count is', multipleChoiceCount);
//         multipleChoiceCount = parseInt(multipleChoiceCount);
//         multipleChoiceCount++;
//         let multipleChoiceBoxIdNo =  questionCount + multipleChoiceCount;
//         console.log("fiunal answer is ", multipleChoiceBoxIdNo);
//         return multipleChoiceBoxIdNo;
//     }

//     else if( questionAreaCounter < 999) {
//         console.log('in 2nd condition');
//         let questionCount = passedID.substring(0, 3);
//         let multipleChoiceCount = passedID.substring(3, passedID.length);
//         console.log('question count is', multipleChoiceCount);
//         multipleChoiceCount = parseInt(multipleChoiceCount);
//         multipleChoiceCount++;
//         let multipleChoiceBoxIdNo = questionCount + multipleChoiceCount;
//         console.log("fiunal answer is ", multipleChoiceBoxIdNo);
//         return multipleChoiceBoxIdNo;
//     }

// }

// let num = 21;
// num = num.toString(); 

// divideAfterAZero(num);
// console.log('"test"');

let className = "input-choice multipleChoiceInput2 focus-visible";
let id = getTheQuestioncounter(className);


function getTheQuestioncounter(classname) {
  let id = classname.match(/.\d+/g, ''); // this extracts only digits from the string
  id = id[0];
  console.log("id is ",id);  
  id2 = id.substring(1,id.length);
  console.log("pure id is ",id2);
}