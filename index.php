<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Student Information System</title>
    <script language="javascript">
        function validate() {
            var fname = document.reg.fn.value;
            var lname = document.reg.ln.value;
            var session = document.reg.session.value;
            var rn = document.reg.rn.value;
            var branch = document.reg.branch.value;
            var year = document.reg.year.value;
            var semester = document.reg.semester.value;
            var mm = document.reg.mm.value;
            var dd = document.reg.dd.value;
            var yy = document.reg.yy.value;
            var address = document.reg.address.value;

            if (fname == '') {
                window.alert("Please enter First Name!");
                document.reg.fn.focus();
                return false;
            }

            if (lname == '') {
                window.alert("Please enter Last Name!");
                document.reg.ln.focus();
                return false;
            }

            if (session == '') {
                window.alert("Please select Session!");
                document.reg.session.focus();
                return false;
            }

            if (rn == '') {
                window.alert("Please enter Roll No!");
                document.reg.rn.focus();
                return false;
            }

            if (branch == '') {
                window.alert("Please select Branch!");
                document.reg.branch.focus();
                return false;
            }

            if (year == '') {
                window.alert("Please select Year!");
                document.reg.year.focus();
                return false;
            }

            if (semester == '') {
                window.alert("Please select Semester!");
                document.reg.semester.focus();
                return false;
            }

            if (dd == '') {
                window.alert("Please select Day!");
                document.reg.dd.focus();
                return false;
            }

            if (mm == '') {
                window.alert("Please select Month!");
                document.reg.mm.focus();
                return false;
            }

            if (yy == '') {
                window.alert("Please select Year!");
                document.reg.yy.focus();
                return false;
            }

            if (address == '') {
                window.alert("Please enter Address!");
                document.reg.address.focus();
                return false;
            }
        }
    </script>
</head>

<body>
    <center>
        <form method="POST" action="" name="reg" onsubmit="return validate()">
            <center>
                <table border="5" bgcolor="pink">
                    <h1><font color="blue"><b>STUDENT INFORMATION SYSTEM</b></font></h1>
                    <br>
                    <a href="index.php">HOME</a>&nbsp&nbsp&nbsp&nbsp<a href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a>
                    <br><br>
            </center>

            <tr>
                <td>FIRST NAME:</td>
                <td><input type="text" name="fn" /></td>
            </tr>
            <tr>
                <td>LAST NAME:</td>
                <td><input type="text" name="ln" /></td>
            </tr>
            <tr>
                <td>SESSION:</td>
                <td>
                <select name="session">
                <option value="">select session</option>
                <?php
                for ($session = 2008; $session <= 2024; $session++) {
                echo "<option value=\"$session\">$session</option>";
                }
                ?>
                </select>

                </td>
            </tr>
            <tr>
                <td>ROLL NO:</td>
                <td><input type="text" name="rn"></td>
            </tr>
            <tr>
                <td>BRANCH</td>
                <td>
                <select name="branch">
                <option value="">select branch</option>
                <option value="CSE">CSE</option>
                <option value="IT">IT</option>
                <option value="MECHANICAL">MECHANICAL</option>
                <option value="ECE">ECE</option>
</select>

                </td>
            </tr>

            <tr>
                <td>YEAR:</td>
                <td>
                    <select name="year">
                        <option value="">select year</option>
                        <option value="FIRST">FIRST</option>
                        <option value="SECOND">SECOND</option>
                        <option value="THIRD">THIRD</option>
                        <option value="FOURTH">FOURTH</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>SEMESTER:</td>
                <td>
                    <select name="semester">
                        <option value="">select semester</option>
                        <option value="FIRST">FIRST</option>
                        <option value="SECOND">SECOND</option>
                        <option value="THIRD">THIRD</option>
                        <option value="FOURTH">FOURTH</option>
                        <option value="FIFTH">FIFTH</option>
                        <option value="SIXTH">SIXTH</option>
                        <option value="SEVENTH">SEVENTH</option>
                        <option value="EIGHTH">EIGHTH</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Date Of Birth (DD-MM-YYYY)</td>
                <td>
                <select name="dd">
                <option value="">select day</option>
                <?php
                for ($i = 1; $i <= 31; $i++) {
                echo "<option value=\"$i\">$i</option>";
                }
                ?>
                </select>
                <select name="mm">
                <option value="">select month</option>
                <option value="jan">JAN</option>
                <option value="feb">FEB</option>
                <option value="mar">MAR</option>
                <option value="apr">APR</option>
                <option value="may">MAY</option>
                <option value="jun">JUN</option>
                <option value="jul">JUL</option>
                <option value="aug">AUG</option>
                <option value="sep">SEP</option>
                <option value="oct">OCT</option>
                <option value="nov">NOV</option>
                <option value="dec">DEC</option>
            </select>

                    <select name="yy">
                    <option value="">select year</option>
                    <?php
                    for ($year = 1990; $year <= 2023; $year++) {
                        echo "<option value=\"$year\">$year</option>";
                    }
                    ?>
                    </select>

                </td>
            </tr>

            <tr>
                <td>ADDRESS:</td>
                <td><input type="text" name="address" /></td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="ADD" /></td>
            </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
error_reporting(0);
require 'db_conn.php';
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$session = $_POST['session'];
$rn = $_POST['rn'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$semester = $_POST['semester'];
$dd = $_POST['dd'];
$mm = $_POST['mm'];
$yy = $_POST['yy'];
$address = $_POST['address'];

if (isset($_POST['submit'])) {
    $dob = $dd . '-' . $mm . '-' . $yy;
    $q1 = mysqli_query($conn, "INSERT INTO bhup (fname, lname, session, rn, branch, year, semester, dob, address) VALUES ('$fn', '$ln', '$session', '$rn', '$branch', '$year', '$semester', '$dob', '$address')");
    if ($q1) {
        echo "Record Successfully Added";
    } else {
        echo "Failed to Add Record";
    }
}
?>
