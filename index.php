<?php
// ******************** https://swapi.dev/ *************************

//consume some JSON data from a public API  https://swapi.dev/ 

$characters = json_decode(file_get_contents("https://swapi.dev/api/people/"));


// echo "<pre>";
// print_r($characters);
// echo "</pre>";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Peoples</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>
    <div class="container py-5">
        <div class="row">
            <?php foreach ($characters->results as  $character) : ?>
                <div class="col-12 col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="h4"><?php echo $character->name; ?></h2>
                            <p class="lead"><?php echo $character->birth_year ?> </p>
                            <hr>
                            <ul class="list-unstyled">
                                <?php
                                foreach ($character->films as $film) {
                                    $the_film = json_decode(file_get_contents($film));

                                    // echo '<pre>';
                                    // print_r($the_film);
                                    // echo '</pre>';

                                    echo '<li class="my-2">' . $the_film->title . '</li>';
                                }

                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>