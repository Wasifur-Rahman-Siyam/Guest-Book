<?php
include_once ($_SERVER[ 'DOCUMENT_ROOT']."/Pondit_Practice/OOP/guest-book/config.php");

use App\Utility\Sanitizer;
use App\Utility\Validator;
use App\Utility\Utility;


$guests = [];
if(array_key_exists('guest_book_data', $_COOKIE)){
  $guests = unserialize($_COOKIE['guest_book_data']);
}


if(Utility::is_posted()){
    $sanitizeData = Sanitizer::sanitize($_POST);
    $validateData = Validator::validate($sanitizeData);

  if($validateData){
    $guests [] = $validateData;
    $result= setcookie('guest_book_data', serialize($guests) ,time()+(3600),"/");
  }
  else{
    header('guest_book_from.php');
  }
  if($result){
    echo "Data has been sent successfully <a href='guest_book_index.php'> Go to index</a>";
  }
  else{
    echo "Data has not stored";
  }
    
}

?>