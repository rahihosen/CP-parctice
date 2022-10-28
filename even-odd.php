<?php
	$my_numbers = [1,213,4,5,8];
	
	$total = 0;
	for ($i = 0; $i < count($my_numbers); $i++) { 
  // echo "Index ", $i, ", value ", $my_numbers[$i], ": ";
  // A value is even if there's no remainder when you divide it by 2.
  if ($my_numbers[$i] % 2 == 0 && $my_numbers[$i] != 8 ) {
    $total += 2;
  } elseif ($my_numbers[$i]  === 8){
    $total += 5;
  }else {
   $total += 1;
  }
}
	
	echo "total ",$total;
// 	print_r($my_numbers);
?>
