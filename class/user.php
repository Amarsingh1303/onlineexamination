<?php
session_start();
class users
{
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $db = "oepdb";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("connection failed" . $this->conn->connect_error);
        }
    }
    public function signup($q)
    {
        return $this->conn->query($q);
    }
    public function url($url)
    {
        header("location:" . $url);
    }

    public function signin($u, $p, $r)
    {
        $sql = "select * from user where username='$u' and password='$p' and role='$r'";
        $result = $this->conn->query($sql);
        $result->fetch_array(MYSQLI_ASSOC);
        if ($result->num_rows > 0) {
            $_SESSION['user'] = $u;
            return true;
        } else {
            return false;
        }
    }

    public function showtest()
    {
        $sql = "select * from test";
        $result = $this->conn->query($sql);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }

    public function ques_show($test)
    {
        $sql = "select * from questions where test_id='$test'";
        $result = $this->conn->query($sql);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $que[] = $row;
        }
        return $que;
    }

    public function answer($data)
    {
        $sql = "select id,answer from questions where test_id='" . $_SESSION['test'] . "'";
        $result = $this->conn->query($sql);
        $right = 0;
        $wrong = 0;
        $noattempt = 0;
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            if ($row['answer'] == $_POST[$row['id']]) {
                $right++;
            } elseif ($_POST[$row['id']] == "no_attempt") {
                $noattempt++;
            } else {
                $wrong++;
            }
        }
        // echo "right=" . $right . "<br>";
        // echo "noattemp=" . $noattempt . "<br>";
        // echo "wrong=" . $wrong . "<br>";
        $arr = array();
        $arr['right'] = $right;
        $arr['no_attempt'] = $noattempt;
        $arr['wrong'] = $wrong;
        return $arr;
        // return $anslist;
    }

    public function add_test_id($q)
    {
        return $this->conn->query($q);
    }

    public function add_question($q)
    {
        return $this->conn->query($q);
    }

    public function logout()
    {
        return $this->conn->close();
    }
}
