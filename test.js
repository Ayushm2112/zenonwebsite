var myQuestions = [
    {
      question: " Q1 - Choose the operator which cannot be overloaded.",
      answers:{

        a: '/',

        b: '()',
        
        c: '::',
        
        d: '%'

      },
      correctAnswer: 'c'
    },
    {
      question: "Q2 - We can use this pointer in static member function of the class.",
      answers: {

        a:  'True',
        
        b:  'False'

      },
      correctAnswer: 'b'
    },
    {
        question: "Q3 - Object oriented programming employs_________ programming approach.",
        answers: {

          a: 'top-down',
          b: 'procedural',
          c: 'bottom-up',
          d: 'all of these'
        },
        correctAnswer: 'c'

      },
      {
        question: "Q4 - In CPP, cin and cout are the predefined stream __________ .",
        answers: {   
          a: 'Operator',
          b: 'Functions',
          c:  'Objects',
          d:  'Data types'

        },
        correctAnswer: 'c'
      },
      {
        question: "Q5 - _________________are used for generic programming.",
        answers: {
          a: 'Inheritance',
          b: 'Virtual Functions',
          c: 'Templates',
          d: 'None of these'
        },
        correctAnswer: 'c'
      }
  ];
  
  var quizContainer = document.getElementById('quiz');
  var resultsContainer = document.getElementById('results');
 var submitButton = document.getElementById('submit');
 var resul = document.getElementById("result");
  
  generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);
  
  function generateQuiz(questions, quizContainer, resultsContainer, submitButton){
  
    function showQuestions(questions, quizContainer){
      // we'll need a place to store the output and the answer choices
      var output = [];
      var answers;
  
      // for each question...
      for(var i=0; i<questions.length; i++){
        
        // first reset the list of answers
        answers = [];
  
        // for each available answer...
        for(letter in questions[i].answers){
  
          // ...add an html radio button
          answers.push(
            '<label>'
              + '<input type="radio" name="question'+i+'" value="'+letter+'">'
              + letter + ': '
              + questions[i].answers[letter]
            + '</label>'
          );
        }
  
        // add this question and its answers to the output
        output.push(
          '<div class="question">' + questions[i].question + '</div>'
          + '<div class="answers">' + answers.join('') + '</div>'
        );
      }
  
      // finally combine our output list into one string of html and put it on the page
      quizContainer.innerHTML = output.join('');
    }
  
  
    function showResults(questions, quizContainer, resultsContainer){
      
      // gather answer containers from our quiz
      var answerContainers = quizContainer.querySelectorAll('.answers');
      
      // keep track of user's answers
      var userAnswer = '';
      var numCorrect = 0;
      
      // for each question...
      for(var i=0; i<questions.length; i++){
  
        // find selected answer
        userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;
        
        // if answer is correct
        if(userAnswer===questions[i].correctAnswer){
          // add to the number of correct answers
          numCorrect++;
          
          // color the answers green
          answerContainers[i].style.color = 'lightgreen';
        }
        // if answer is wrong or blank
        else{
          // color the answers red
          answerContainers[i].style.color = 'red';
        }
      }
  
      // show number of correct answers out of total
      resultsContainer.innerHTML = numCorrect  + ' out of ' + myQuestions.length;

      if(numCorrect<3){
        
      document.getElementById("result").innerHTML = window.location.href = "failedtest.html";
      }
      else{

        var str = "Click here for your next round";
        var result = str.link("www.google.com");

        document.getElementById("result").innerHTML = "pass, we want to tell you that you have clear the test." + result;
        
      
        
      }
    

    
    }
    


  
    // show questions right away
    showQuestions(questions, quizContainer);
    
    // on submit, show results
    submitButton.onclick = function(){
     // document.getElementById("submit").innerHTML = "Result:",showResults(questions, quizContainer, resultsContainer);
      showResults(questions, quizContainer, resultsContainer);
    }
    
  
  
  



  // Set the date we're counting down to
var countDownDate = new Date("Jan 12, 2021 10:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds

  var minutes = Math.floor((distance % (1000 * 60 * 5)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML =  minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
  }