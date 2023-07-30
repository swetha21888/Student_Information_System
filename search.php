<!DOCTYPE html>
<html>
<head>
    <title>Student Information System</title>
</head>
<body>
<?php
echo "<center>";
echo "<form method='POST' action='' name='reg' onSubmit='return validate()'>";
echo "<table border='5' bgcolor='pink'> <h1 ><font color='blue'><b>STUDENT INFORMATION SYSTEM</b></font></h1><br><a href='index.php'>HOME</a>&nbsp&nbsp&nbsp&nbsp<a href='update.php'>UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href='delete.php'>DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href='search.php'>SEARCH</a><br><br></center>";

echo "<tr><td>
<center><table bgcolor='pink'>
<tr><td width='250'><b>Select Any One:<select name='sel'><option>Select Category</option>";

echo "<option value='fname'>FIRST NAME</option>";
echo "<option value='rn'>ROLL NO</option>";
echo "<option value='branch'>BRANCH</option>";
echo "<option value='semester'>SEMESTER</option>";
echo "<option value='year'>YEAR</option>";
echo "<option value='address'>ADDRESS</option>
<td><input type='text' name='ty'><input type='submit' name='se1' value='Search'><input type='submit' name='allsearch' value='AllSearch'>";
echo "</tr></td></table>";
echo "</td></tr></table></center></form>
</body></html>";

require 'db_conn.php';

if (isset($_POST['se1'])) {
    $sel = $_POST['sel'];
    $ty = $_POST['ty'];

    if ($sel == "fname") {
        $q1 = mysqli_query($conn, "SELECT * FROM bhup WHERE fname='$_POST[ty]'");
        echo "<center><table border='1'>";
        echo "<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";
        while ($rows = mysqli_fetch_array($q1, MYSQLI_ASSOC)) {
            $ses = $rows['session'];
            $ln = $rows['lname'];
            $sem = $rows['semester'];
            $year = $rows['year'];
            $fn = $rows['fname'];
            $ln = $rows['lname'];
            $br = $rows['branch'];
            $rn = $rows['rn'];
            $add = $rows['address'];
            $dob = $rows['dob'];

            echo "<tr bgcolor='pink'><td><center>$ses</center></td><td><center>$rn</center></td><td><center>$fn</center></td><td><center>$ln</center></td><td><center>$year</center></td><td><center>$sem</center></td><td><center>$br</center></td><td><center>$dob</center></td><td><center>$add</center></td></tr>";
        }
        echo "</center>";
    } elseif ($sel == "rn") {
        $q2 = mysqli_query($conn, "SELECT * FROM bhup WHERE rn='$ty'");
        echo "<center><table border='1'>";
        echo "<tr bgcolor='yellow'><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

        while ($rows = mysqli_fetch_array($q2, MYSQLI_ASSOC)) {
            $ses = $rows['session'];
            $ln = $rows['lname'];
            $sem = $rows['semester'];
            $year = $rows['year'];
            $fn = $rows['fname'];
            $ln = $rows['lname'];
            $br = $rows['branch'];
            $rn = $rows['rn'];
            $add = $rows['address'];
            $dob = $rows['dob'];

            echo "<tr bgcolor='pink'><td><center>$ses</center></td><td><center>$rn</center></td><td><center>$fn</center></td><td><center>$ln</center></td><td><center>$year</center></td><td><center>$sem</center></td><td><center>$br</center></td><td><center>$dob</center></td><td><center>$add</center></td></tr>";
        }

        echo "</center>";
    } elseif ($sel == "branch") {
        $q3 = mysqli_query($conn, "SELECT * FROM bhup WHERE branch='$ty'");
        echo "<center><table border='1'>";
        echo "<tr bgcolor='yellow'><td><center>SESSION</center></td><td><center>ROLL NO</center></td><td><center>FIRST NAME</center></td><td><center>LAST NAME</center></td><td><center>YEAR</center></td><td><center>SEMESTER</center></td><td><center>BRANCH</center></td><td><center>DOB</center></td><td><center>ADDRESS</center></td></tr>";

        while ($rows = mysqli_fetch_array($q3, MYSQLI_ASSOC)) {
            $ses = $rows['session'];
            $ln = $rows['lname'];
            $sem = $rows['semester'];
            $year = $rows['year'];
            $fn = $rows['fname'];
            $ln = $rows['lname'];
            $br = $rows['branch'];
            $rn = $rows['rn'];
            $add = $rows['address'];
            $dob = $rows['dob'];

            echo "<tr bgcolor='pink'><td><center>$ses</center></td><td><center>$rn</center></td><td><center>$fn</center></td><td><center>$ln</center></td><td><center>$year</center></td><td><center>$sem</center></td><td><center>$br</center></td><td><center>$dob</center></td><td><center>$add</center></td></tr>";
        }

        echo "</table></center>";
    } elseif ($sel == "semester") {
        $q4 = mysqli_query($conn, "SELECT * FROM bhup WHERE semester='$ty'");
        echo "<center><table border='1'>";
        echo "<tr bgcolor='yellow'><td><center>SESSION</center></td><td><center>ROLL NO</center></td><td><center>FIRST NAME</center></td><td><center>LAST NAME</center></td><td><center>YEAR</center></td><td><center>SEMESTER</center></td><td><center>BRANCH</center></td><td><center>DOB</center></td><td><center>ADDRESS</center></td></tr>";

        while ($rows = mysqli_fetch_array($q4, MYSQLI_ASSOC)) {
            $ses = $rows['session'];
            $ln = $rows['lname'];
            $sem = $rows['semester'];
            $year = $rows['year'];
            $fn = $rows['fname'];
            $br = $rows['branch'];
            $rn = $rows['rn'];
            $add = $rows['address'];
            $dob = $rows['dob'];

            echo "<tr bgcolor='pink'><td><center>$ses</center></td><td><center>$rn</center></td><td><center>$fn</center></td><td><center>$ln</center></td><td><center>$year</center></td><td><center>$sem</center></td><td><center>$br</center></td><td><center>$dob</center></td><td><center>$add</center></td></tr>";
        }

        echo "</table></center>";
    } elseif ($sel == "year") {
        $q9 = mysqli_query($conn, "SELECT * FROM bhup WHERE year='$ty'");
        echo "<center><table border='1'>";
        echo "<tr bgcolor='yellow'><td><center>SESSION</center></td><td><center>ROLL NO</center></td><td><center>FIRST NAME</center></td><td><center>LAST NAME</center></td><td><center>YEAR</center></td><td><center>SEMESTER</center></td><td><center>BRANCH</center></td><td><center>DOB</center></td><td><center>ADDRESS</center></td></tr>";

        while ($rows = mysqli_fetch_array($q9, MYSQLI_ASSOC)) {
            $ses = $rows['session'];
            $ln = $rows['lname'];
            $sem = $rows['semester'];
            $year = $rows['year'];
            $fn = $rows['fname'];
            $br = $rows['branch'];
            $rn = $rows['rn'];
            $add = $rows['address'];
            $dob = $rows['dob'];

            echo "<tr bgcolor='pink'><td><center>$ses</center></td><td><center>$rn</center></td><td><center>$fn</center></td><td><center>$ln</center></td><td><center>$year</center></td><td><center>$sem</center></td><td><center>$br</center></td><td><center>$dob</center></td><td><center>$add</center></td></tr>";
        }

        echo "</table></center>";
    } elseif ($sel == "address") {
        $q5 = mysqli_query($conn, "SELECT * FROM bhup WHERE address='$ty'");
        echo "<center><table border='1'>";
        echo "<tr bgcolor='yellow'><td><center>SESSION</center></td><td><center>ROLL NO</center></td><td><center>FIRST NAME</center></td><td><center>LAST NAME</center></td><td><center>YEAR</center></td><td><center>SEMESTER</center></td><td><center>BRANCH</center></td><td><center>DOB</center></td><td><center>ADDRESS</center></td></tr>";

        while ($rows = mysqli_fetch_array($q5, MYSQLI_ASSOC)) {
            $ses = $rows['session'];
            $ln = $rows['lname'];
            $sem = $rows['semester'];
            $year = $rows['year'];
            $fn = $rows['fname'];
            $br = $rows['branch'];
            $rn = $rows['rn'];
            $add = $rows['address'];
            $dob = $rows['dob'];

            echo "<tr bgcolor='pink'><td><center>$ses</center></td><td><center>$rn</center></td><td><center>$fn</center></td><td><center>$ln</center></td><td><center>$year</center></td><td><center>$sem</center></td><td><center>$br</center></td><td><center>$dob</center></td><td><center>$add</center></td></tr>";
        }

        echo "</table></center>";
    }
} elseif (isset($_POST['allsearch'])) {
    $q8 = mysqli_query($conn, "SELECT * FROM bhup");
    echo "<center><table border='1'>";
    echo "<tr bgcolor='yellow'><td><center>SESSION</center></td><td><center>ROLL NO</center></td><td><center>FIRST NAME</center></td><td><center>LAST NAME</center></td><td><center>YEAR</center></td><td><center>SEMESTER</center></td><td><center>BRANCH</center></td><td><center>DOB</center></td><td><center>ADDRESS</center></td></tr>";

    while ($rows = mysqli_fetch_array($q8, MYSQLI_ASSOC)) {
        $ses = $rows['session'];
        $ln = $rows['lname'];
        $sem = $rows['semester'];
        $year = $rows['year'];
        $fn = $rows['fname'];
        $br = $rows['branch'];
        $rn = $rows['rn'];
        $add = $rows['address'];
        $dob = $rows['dob'];

        echo "<tr bgcolor='pink'><td><center>$ses</center></td><td><center>$rn</center></td><td><center>$fn</center></td><td><center>$ln</center></td><td><center>$year</center></td><td><center>$sem</center></td><td><center>$br</center></td><td><center>$dob</center></td><td><center>$add</center></td></tr>";
    }

    echo "</table></center>";
}
?>

</body>
</html>
