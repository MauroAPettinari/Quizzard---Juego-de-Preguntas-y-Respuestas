$(document).ready(function () {

    console.log(preguntas);
    $.each(preguntas, function (index, value) {
        //console.log(index);
        console.log(value);
        //console.log(value.pregunta);
    });

    function buildQuiz(){
        // variable to store the HTML output
        const output = [];

        // for each question...
        myQuestions.forEach(
          (currentQuestion, questionNumber) => {

            // variable to store the list of possible answers
            const answers = [];

            // and for each available answer...
            for(letter in currentQuestion.answers){

              // ...add an HTML radio button
              answers.push(
                `<label>
                  <input type="radio" name="question${questionNumber}" value="${letter}">
                  ${letter} :
                  ${currentQuestion.answers[letter]}
                </label>`
              );
            }

            // add this question and its answers to the output
            output.push(
              `<div class="question"> ${currentQuestion.question} </div>
              <div class="answers"> ${answers.join('')} </div>`
            );
          }
        );

        // finally combine our output list into one string of HTML and put it on the page
        quizContainer.innerHTML = output.join('');
      }

      function showResults(){

        // gather answer containers from our quiz
        const answerContainers = quizContainer.querySelectorAll('.answers');

        // keep track of user's answers
        let numCorrect = 0;

        // for each question...
        myQuestions.forEach( (currentQuestion, questionNumber) => {

          // find selected answer
          const answerContainer = answerContainers[questionNumber];
          const selector = `input[name=question${questionNumber}]:checked`;
          const userAnswer = (answerContainer.querySelector(selector) || {}).value;

          // if answer is correct
          if(userAnswer === currentQuestion.correctAnswer){
            // add to the number of correct answers
            numCorrect++;

            // color the answers green
            answerContainers[questionNumber].style.color = 'lightgreen';
          }
          // if answer is wrong or blank
          else{
            // color the answers red
            answerContainers[questionNumber].style.color = 'red';
          }
        });

        // show number of correct answers out of total
        resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;
      }

      const quizContainer = document.getElementById('quiz');
      const resultsContainer = document.getElementById('results');
      const submitButton = document.getElementById('submit');

      const misPreguntas = [
        {
            pregunta: "Cuando nació San Matin",
            respuestaA: "1926",
            respuestaB: "1845",
            respuestaC: "1789",
            opcion: "A"
        },
        {
            pregunta: "Cuando nació San Matin",
            respuestaA: "1926",
            respuestaB: "1845",
            respuestaC: "1789",
            opcion: "A"
        }
        ];

      const myQuestions = [
        {
          question: "Who invented JavaScript?",
          answers: {
            a: "Douglas Crockford",
            b: "Sheryl Sandberg",
            c: "Brendan Eich"
          },
          correctAnswer: "c"
        },
        {
          question: "Which one of these is a JavaScript package manager?",
          answers: {
            a: "Node.js",
            b: "TypeScript",
            c: "npm"
          },
          correctAnswer: "c"
        },
        {
          question: "Which tool can you use to ensure code quality?",
          answers: {
            a: "Angular",
            b: "jQuery",
            c: "RequireJS",
            d: "ESLint"
          },
          correctAnswer: "d"
        }
      ];

    //   const myQuestions = [
    //     {
    //       pregunta: "Who invented JavaScript?",
    //       respuestas: {
    //         respuestaA: "Douglas Crockford",
    //         respuestaB: "Sheryl Sandberg",
    //         respuestaCorrecta: "Brendan Eich"
    //       },
    //       opcion: "respuestaCorrecta"
    //     },
    //     {
    //       pregunta: "Which one of these is a JavaScript package manager?",
    //       respuestas: {
    //         a: "Node.js",
    //         b: "TypeScript",
    //         c: "npm"
    //       },
    //       opcion: "c"
    //     },
    //     {
    //       pregunta: "Which tool can you use to ensure code quality?",
    //       respuestas: {
    //         respuestaA: "Angular",
    //         respuestaB: "jQuery",
    //         respuestaC: "RequireJS",
    //       },
    //       opcion: "d"
    //     }
    //   ];


      // Kick things off
      buildQuiz();

      // Event listeners
      submitButton.addEventListener('click', showResults);


      console.log(myQuestions);
});




/*
 *  Creates a progressbar.
 *  @param id the id of the div we want to transform in a progressbar
 *  @param duration the duration of the timer example: '10s'
 *  @param callback, optional function which is called when the progressbar reaches 0.
 */
function createProgressbar(id, duration, callback) {
    // We select the div that we want to turn into a progressbar
    var progressbar = document.getElementById(id);
    progressbar.className = 'progressbar';

    // We create the div that changes width to show progress
    var progressbarinner = document.createElement('div');
    progressbarinner.className = 'inner';

    // Now we set the animation parameters
    progressbarinner.style.animationDuration = duration;

    // Eventually couple a callback
    if (typeof (callback) === 'function') {
        progressbarinner.addEventListener('animationend', callback);
    }

    // Append the progressbar to the main progressbardiv
    progressbar.appendChild(progressbarinner);

    // When everything is set up we start the animation
    progressbarinner.style.animationPlayState = 'running';
}

addEventListener('load', function () {
    createProgressbar('progressbar1', '10s');
});
