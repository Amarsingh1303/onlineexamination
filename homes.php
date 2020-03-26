<?php
include("class/user.php");
$user = $_SESSION['user'];
$test = new users();
$res = $test->showtest();

// all this is done to analyze the array data
//print_r($res); this will give us the associative array of the test table in the format
//Array ( [0] => Array ( [id] => 1 [test_id] => test_01 ) [1] => Array ( [id] => 2 [test_id] => test_02 ) [2] => Array ( [id] => 3 [test_id] => test_03 ) [3] => Array ( [id] => 4 [test_id] => test_04 ) )
//or

// Array ( [0] => Array ( [id] => 1 [test_id] => test_01 ) 
//         [1] => Array ( [id] => 2 [test_id] => test_02 ) 
//         [2] => Array ( [id] => 3 [test_id] => test_03 ) 
//         [3] => Array ( [id] => 4 [test_id] => test_04 )
//       )
// foreach ($res as $boom) {
//     echo "" . $boom['id'] . "" . $boom['test_id'] . "<br>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">online Examination portal</a>
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
    <h1 class="bg-dark text-white p-2"><?php echo $user; ?></h1><br><br>
    <center>
        <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId">
                Start Test
            </a>
        </p>
        <div class="collapse" id="contentId">
            <form action="quizpage.php" method="post">
                <div class="form-group">
                    <label for="quiz"></label>
                    <select class="form-control" name="test" id="quiz">
                        <option>select test</option>
                        <?php foreach ($res as $boom) { ?>
                            <option value="<?php echo $boom['test_id'] ?>"><?php echo $boom['test_id'] ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </center>

</body>

</html>