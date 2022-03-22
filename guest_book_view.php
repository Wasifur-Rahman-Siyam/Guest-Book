<?php
include_once ($_SERVER[ 'DOCUMENT_ROOT']."/Pondit_Practice/OOP/guest-book/config.php");
use App\GuestBook\GuestBook;


$stored_data=[];
if(array_key_exists('guest_book_data', $_COOKIE)){
  $stored_data = $_COOKIE['guest_book_data'];
}



$guest_book = new GuestBook($stored_data);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <section>
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-6">
                <h3 class="text-center">Show:</h3>

             <dl class="row">
             <dt class="col-sm-4">Full name:</dt>
             <dd class="col-sm-8"><?=!empty($guest_book->full_name)?"$guest_book->full_name":"Not provided full name"?></dd>
             <dt class="col-sm-4">Comment:</dt>
             <dd class="col-sm-8"><?= !empty($guest_book->comment)?"$guest_book->comment":"Not provided Comment"?></dd> 
           </dl>
      <div>

                      <button type="button" class="btn btn-secondary btn-sm"><a href="guest_book_index.php" class="text-white text-decoration-none">Back to index</a></button>
                    </div>
                </div>
            </div>
        </div>


        <form method="POST" action="guest_book_index.php" enctype="multipart/form-data" class="mt-3">
            <div class="mb-3 row">
              <label for="inpufull_Name" class="col-md-2 col-form-label"></label>
              <div class="col-md-10">
                <input type="hidden" class="form-control" id="inpufull_Name" name="full_name" value="<?=$guest_book->full_name ?>">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="inpufull_Name" class="col-md-2 col-form-label"></label>
            <div class="col-md-10">
            <input type="hidden" class="form-control" id="comment" name="comment" value="<?=$guest_book->comment ?>">
                
              </div>
            </div>

            
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
          </form> 


    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>