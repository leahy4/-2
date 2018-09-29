
<html>
  <head>
    <title>Modifying Elements</title>
  </head>
  <body>
    <p>
      <?php
      //Array examples
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        foreach($languages as $lang){
            print "<p>$lang</p>";
        }

        // Write the code to remove Python here!
        unset($languages[3]);
        
        
       echo "<strong>After using <em>unset</em> on Python...</strong>";
        
        foreach($languages as $lang) {
          echo "<p>$lang</p>";
        }
        echo "Printing single parts of the array</br>";
        echo $languages{2};
        echo "</br>";
        echo $languages[1];
         echo "</br>";
        


// Create a simple array.
$array = array(1, 2, 3, 4, 5);
print_r($array);
echo "</br>";
// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);
echo "</br>";
// Append an item (note that the new key is 5, instead of 0).
$array[] = 6;
print_r($array);
echo "</br>";
// Re-index:
$array = array_values($array);
$array[] = 7;
print_r($array);

      ?>
    </p>
  </body>
</html>