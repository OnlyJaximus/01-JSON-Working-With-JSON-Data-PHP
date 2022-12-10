<?php

$dogs = json_decode(file_get_contents("dogs.json"));

echo "<pre>";
print_r($dogs);
echo "</pre>";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Dogs</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>
    <div class="container py-5">
        <h1 class="display-2 text-center mb-5">Our Dogs (Object)</h1>

        <div class="row">
            <?php foreach ($dogs as $dog) : ?>

                <?php
                $age = round($dog->age / 12);
                $weight =  round($dog->weight / 16);

                if ($dog->fur->sheds == true) {
                    $sheds = "YES";
                } else {
                    $sheds = "No";
                }


                ?>

                <div class="col-12 col-md-4">
                    <div class="card mb-5">
                        <img class="card-img-top" src="<?php echo  $dog->image;  ?>" alt="<?php echo $dog->name ?>">
                        <div class="card-body">

                            <h2 class="h3 mb-0">
                                <?php echo ucfirst($dog->name); ?>
                            </h2>
                            <p class="lead">
                                <?php echo ucfirst($dog->breed); ?>
                            </p>
                            <!-- <hr class="my-4"> -->
                            <hr>
                            <ul class="list-unstyled">
                                <li>Age: <?php echo $age; ?></li>
                                <li>Sex: <?php echo $dog->sex; ?></li>
                                <li>Weight: <?php echo $weight; ?> lbs</li>
                            </ul>
                            <h3 class="h4">Fur: </h3>
                            <ul class="list-unstyled">
                                <li>Age: <?php echo $dog->fur->length ?></li>
                                <li>Sex: <?php echo $dog->fur->color; ?></li>
                                <li>Sheds: <?php echo $sheds; ?> </li>
                            </ul>
                            <h3 class="h4">Tricks</h3>
                            <ul class="list-unstyled">
                                <?php
                                $has_tricks = false;

                                foreach ($dog->tricks as  $key => $value) {
                                    if ($value == true) {
                                        $has_tricks = true;
                                        //  echo "<li>$key</li>";
                                        echo '<li>' . ucfirst($key) . '</li>';
                                    }
                                }

                                if ($has_tricks == false) {
                                    echo '<li>None. Teach me!<li>';
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