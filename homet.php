<?php
include("class/user.php");
$user = $_SESSION['user'];

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
    <!-- bootstrap link for collapisable nav -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- this is collapible navbar w3schools->bootstrap->css nav->tab-content -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light m-0">
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
    <h1 class="bg-dark text-white text-center m-0 p-2"><?php echo $user ?></h1>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            <li><a data-toggle="tab" href="#addcategory">Add category</a></li>
            <li><a data-toggle="tab" href="#addquestion">Add Question</a></li>
            <li><a data-toggle="tab" href="#viewusers">view users</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h3>HOME</h3>
                <?php
                if (isset($_GET['run']) && $_GET['run'] == "success") {
                    echo "TestId successfully added";
                }
                if (isset($_GET['qrun']) && $_GET['qrun'] == "qsuccess") {
                    echo "question added succefully";
                }

                ?>
                <p>this is the website where u can create test and student can give test online.</p>
            </div>
            <div id="addcategory" class="tab-pane fade">
                <h3>Add TestId</h3>
                <!-- <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                <form action="add_testid.php" method="post">
                    <div class="form-group">
                        <label for="t"></label>
                        <input type="text" class="form-control" name="cat" id="t" aria-describedby="helpId" placeholder="Testid">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div id="addquestion" class="tab-pane fade">
                <h3>Add Question</h3>
                <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p> -->
                <form action="add_question" method="post">
                    <div class="form-group">
                        <label for="que"></label>
                        <input type="text" class="form-control" name="question" id="que" aria-describedby="helpId" placeholder="Question">
                    </div>
                    <div class="form-group">
                        <label for="op1"></label>
                        <input type="text" class="form-control" name="option1" id="op1" aria-describedby="helpId" placeholder="option1">
                    </div>
                    <div class="form-group">
                        <label for="op2"></label>
                        <input type="text" class="form-control" name="option2" id="op2" aria-describedby="helpId" placeholder="option2">
                    </div>
                    <div class="form-group">
                        <label for="op3"></label>
                        <input type="text" class="form-control" name="option3" id="op3" aria-describedby="helpId" placeholder="option3">
                    </div>
                    <div class="form-group">
                        <label for="op4"></label>
                        <input type="text" class="form-control" name="option4" id="op4" aria-describedby="helpId" placeholder="option4">
                    </div>
                    <div class="form-group">
                        <label for="ans"></label>
                        <input type="text" class="form-control" name="answer" id="ans" aria-describedby="helpId" placeholder="answer">
                    </div>
                    <div class="form-group">
                        <label for="id"></label>
                        <input type="text" class="form-control" name="cat" id="id" aria-describedby="helpId" placeholder="testid">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div id="viewusers" class="tab-pane fade">
                <h3>View users</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
        </div>
    </div>
    <!-- <form action="add_testid.php" method="post">
        <div class="form-group">
            <label for="boom"></label>
            <input type="text" class="form-control" name="cat" id="boom" aria-describedby="helpId" placeholder="Testid">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> -->


</body>

</html>