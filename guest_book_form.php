<?php

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
          <h3 class="text-center">Add hare:</h3>

          <div>
            <button type="button" class="btn btn-secondary btn-sm"><a href="guest_book_index.php" class="text-white text-decoration-none">Index</a></button>
          </div>
          <form method="POST" action="guest_book_processor.php" enctype="multipart/form-data" class="mt-3">
            <div class="mb-3 row">
              <label for="inpufull_Name" class="col-md-2 col-form-label">Full Name:</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="inpufull_Name" name="full_name">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="inpufull_Name" class="col-md-2 col-form-label">Comment:</label>
            <div class="col-md-10">
                <textarea type="text" class="form-control" id="comment" name="comment" row ="4"></textarea> 
              </div>
            </div>

            
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
          </form>

          <div>
          </div>
        </div>
      </div>
    </div>
  </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>