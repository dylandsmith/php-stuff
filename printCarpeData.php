<?
   echo "--- for loop method ---\n";
   for($i=1; $i<=100; $i++) {
      if($i%15 == 0) {
         echo "CarpeData \n";
      }
      elseif($i%5 == 0) {
         echo "Data\n";
      }
      elseif($i%3 == 0) {
         echo "Carpe\n";
      }
      else {
         echo $i."\n";
      }
   }
   
   echo "\nProgram Done\n\n";

// recursive function call
// for loop seems cleaner and simpler
echo "--- recursive function call method---\n";
function printOutput($current_number) {
   // base case:
   if($current_number > 100) {
      echo "\nProgram Done\n";
   }

   else {
      if($current_number%15 ==0) {
         echo "Carpe Data\n";
      }
      elseif($current_number%5 == 0) {
         echo "Data\n";
      }
      elseif($current_number%3 == 0) {
         echo "Carpe\n";
      }
      else {
         echo $current_number."\n";
      }
      printOutput($current_number + 1);
   }
}
printOutput(1);

?>
