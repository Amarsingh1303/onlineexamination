<?php
include("class/user.php");
$ans = new users();
extract($_POST);
$res = $ans->answer($_POST);
// print_r($res);
// print_r($_POST);
// print_r($_POST);
// $res = implode("", $_POST);
// echo $res;

// foreach ($_POST as $id => $a) {
//     echo "$id=$a<br>";
// }
// Array ( [1] => 1 [2] => 2 [3] => 0 [4] => 1 [5] => 2 ) 12012
//answer array
//Array ( [0] => Array ( [id] => 1 [answer] => 2 )
//        [1] => Array ( [id] => 2 [answer] => 2 ) 
//        [2] => Array ( [id] => 3 [answer] => 0 )
//        [3] => Array ( [id] => 4 [answer] => 1 )
//        [4] => Array ( [id] => 5 [answer] => 2 )
// )
// 1=1
// 2=2
// 3=0
// 4=1
// 5=2
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>answer</title>
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">Online Examination Portal</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    $total = $res['right'] + $res['no_attempt'] + $res['wrong'];
    $attempt = $res['right'] + $res['wrong'];
    $correct = $res['right'];
    $wrong = $res['wrong'];
    $noattempt = $res['no_attempt'];
    $score = ($correct / $total) * 100;
    // echo "total question=" . $total . "<br>";
    // echo "total attempt=" . $attempt . "<br>";
    // echo "total correct=" . $correct . "<br>";
    // echo "total wrong=" . $wrong . "<br>";
    // echo "total noattempt=" . $noattempt . "<br>";
    // echo "your score=" . $score . "%<br>";
    ?>
    <h1 class="bg-light text-dark text-center">Your test results</h1>
    <br>
    <div class="container">
        <center>
            <table class="=table table-striped table-hover table-bordered w-50">
                <tr>
                    <td>total question=</td>
                    <td><?php echo $total; ?></td>
                </tr>
                <tr>
                    <td>total attempt=</td>
                    <td><?php echo $attempt; ?></td>
                </tr>
                <tr>
                    <td>total correct=</td>
                    <td><?php echo $correct; ?></td>
                </tr>
                <tr>
                    <td>total wrong=</td>
                    <td><?php echo $wrong; ?></td>
                </tr>
                <tr>
                    <td>total noattempt=</td>
                    <td><?php echo $noattempt; ?></td>
                </tr>
                <tr>
                    <td>your score=</td>
                    <td><?php echo "$score" . "%"; ?></td>
                </tr>

            </table>
        </center>
    </div>

</body>

</html>