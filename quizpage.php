<?php
include("class/user.php");
$testid = $_POST['test'];
$_SESSION['test'] = $testid;
$queshow = new users();
$res = $queshow->ques_show($testid);
//print_r($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quizpage</title>
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
    <!-- navbarrrr -->
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
    <div class="container">
        <?php $i = 1;
        foreach ($res as $que) { ?>
            <form action="answer.php" method="post">
                <table class="table table-striped table-hover table-bordered">

                    <tr>
                        <td>
                            <?php echo "<b>$i.&nbsp;&nbsp;</b> " . $que['question']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="<?php echo $que['id'] ?>" value="0">
                                    <?php echo "(a)&nbsp;&nbsp;" . " " . $que['ans1'] ?>
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="<?php echo $que['id'] ?>" value="1">
                                    <?php echo "(b)&nbsp;&nbsp;" . " " . $que['ans2'] ?>
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="<?php echo $que['id'] ?>" value="2">
                                    <?php echo "(c)&nbsp;&nbsp;" . " " . $que['ans3'] ?>
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="<?php echo $que['id'] ?>" value="3">
                                    <?php echo "(d)&nbsp;&nbsp;" . " " . $que['ans4'] ?>
                                </label>
                            </div>
                        </td>
                    </tr>
                    <!-- this is for the no attempt -->
                    <tr style="display: none">
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" name="<?php echo $que['id'] ?>" value="no_attempt" checked="checked" style="display: none">
                                </label>
                            </div>
                        </td>
                    </tr>
                <?php $i++;
            } ?>

                </table>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>





</body>

</html>