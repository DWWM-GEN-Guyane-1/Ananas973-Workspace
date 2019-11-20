function myFunction() {
  var one = document.getElementById("one").value;
  var two = document.getElementById("two").value;
  var three = document.getElementById("three").value;
  var four = document.getElementById("four").value;
  var five = document.getElementById("five").value;
  var six = document.getElementById("six").value;
  var seven = document.getElementById("seven").value;
  var eight = document.getElementById("eight").value;
  var nine = document.getElementById("nine").value;
  var ten = document.getElementById("ten").value;
  
  var results = document.getElementById("results");
  var submit = document.getElementById("submit");
     if (one == 2 && two == 4 && three == 6 && four == 8 && five == 10 &&  six == 12 && seven == 14 && eight == 16 && nine == 18 && ten == 20) {
          document.getElementById("results").innerHTML = "Correct!"
      } else {
          document.getElementById("results").innerHTML = "Try Again!"
      }
   }
  