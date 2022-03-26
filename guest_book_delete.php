<?php

$guest_position=$_GET['guest_position'];
$guests=[];
if(array_key_exists('guest_book_data', $_COOKIE)){
  $guests = unserialize($_COOKIE['guest_book_data']);
}

unset($guests[$guest_position]);

$result= setcookie('guest_book_data', serialize($guests) ,time()+(3600),"/");

if($result){
    echo "Data has been deleted successfully <a href='guest_book_index.php'> Go to index</a>";
  }

  else{
    echo "Data has not stored";
  }
?>