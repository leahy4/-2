<html>
  <head>
    <title>Leap Years</title>
  </head>
  <body>
    <?php
    $leap = 4;
      for ($leap = 2004; $leap < 2030; $leap = $leap + 1) {
        echo "<p>$leap</p>";
      }
      /*using the shorthand to echo again*/
     for ($leap = 2004; $leap <2017; $leap){
         echo "<p>$leap</p>";
     }
/*******************************************88
It breaks down like this:

A for loop starts with the for keyword. This tells PHP to get ready to loop!
Next comes a set of parentheses (()). Inside the parentheses, we tell PHP three things,
separated by semicolons (;): where to start the loop; where to end the loop; and what to
do to get to the next iteration of the loop (for instance, count up by one).
After the part in parentheses, the part in curly braces ({}) tells PHP what code to run for each iteration of the loop.
So the above example says: "Start looping with $i at 0, stop the loop before $i gets to 10,
count up by 1 each time, and for each iteration, echo the current value of $i."

($i++ is shorthand for $i = $i + 1. You'll see this a lot!)*/
   
   
    ?>
  </body>
</html>