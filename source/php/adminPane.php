<?php
@session_start();
include('connection.php');

$qry = "Select username, user_state, active from webchat_users WHERE
    active = 'false'";
$result = mysqli_query($db, $qry);

  if (isset($_GET['toActivate'])) {
    $qry = "UPDATE webchat_users SET active='true' WHERE username ='$_GET[toActivate]'";
    mysqli_query($db, $qry);
    header("Location: http://192.168.56.101/source/myAccount.php");
  }
  if (isset($_GET['toAdmin'])) {
    $qry = "UPDATE webchat_users SET user_state='true' WHERE username ='$_GET[toAdmin]'";
    mysqli_query($db, $qry);
    header("Location: http://192.168.56.101/source/myAccount.php");
  }

  if (isset($_GET['toRemove'])) {
    $qry = "DELETE FROM webchat_users WHERE username ='$_GET[toRemove]'";
    mysqli_query($db, $qry);
    header("Location: http://192.168.56.101/source/myAccount.php");
  }

echo "<h1>new users to be confirmed</h1>";

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "username: " . $row["username"]. "";
            echo "<a href='php/adminPane.php?toActivate=". $row["username"]."'>make active</a>";
            echo "<br>";
        }
    } else {
        echo "<br>0 results";
    }

    $qryConf = "Select username, user_state, active from webchat_users WHERE
    active = 'true'";
    $resultConf= mysqli_query($db, $qryConf);
    echo "<h1>currently confirmed</h1>";
    if ($resultConf->num_rows > 0) {
        // output data of each row
        while($row = $resultConf->fetch_assoc()) {
            echo "username: " . $row["username"]. "";
            echo "<a href='php/adminPane.php?toAdmin=". $row["username"]."'>make admin</a>";
            echo "<a href='php/adminPane.php?toRemove=". $row["username"]."'>Remove</a>";
            echo "<br>";
        }
    } else {
        echo "<br>0 results";
    }

?>
