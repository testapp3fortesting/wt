<?php
    $arr = array(5,8,9,2,3,0,1);
    // sort function - sort the array
    sort($arr);
    print_r($arr);
    echo "\n"; 
    echo "<br>";
    // count - returns no. of elements in array
    print_r(count($arr));
    echo "\n";
    echo "<br>";
    // push
    print_r(array_push($arr,89,78));
    print_r($arr);
    echo "<br>";
    // pop
    print_r(array_pop($arr));
    print_r($arr);
    echo "<br>";
    // search
    print_r(array_search(8,$arr));
?>