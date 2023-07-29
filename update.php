<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script language="javascript">
function validate() {
    // Validation logic here
}

</script>
<title>Update Details</title>
</head>

<body>
<center>
    <form method="POST" action="" name="updateForm" onSubmit="return validate()">
        <center>
            <table border="5" bgcolor="pink">
                <h1><font color="blue"><b>STUDENT INFORMATION SYSTEM - UPDATE DETAILS</b></font></h1>
                <br>
                <a href="index.php">HOME</a>&nbsp&nbsp&nbsp&nbsp<a href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a>
                <br><br>
        </center>

        <tr>
            <td>ROLL NO:</td>
            <td><input type="text" name="rn"></td>
        </tr>
        
        <tr>
            <td>NEW SEMESTER:</td>
            <td>
                <select name="newSemester">
                    <option value="">select new semester</option>
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
            <td>NEW YEAR:</td>
            <td>
                <select name="newYear">
                    <option value="">select new year</option>
                    <option value="FIRST">FIRST</option>
                    <option value="SECOND">SECOND</option>
                    <option value="THIRD">THIRD</option>
                        <option value="FOURTH">FOURTH</option>
                    
                </select>
            </td>
        </tr>
        <tr>
            <td>NEW BRANCH</td>
            <td>
                <select name="newBranch">
                    <option value="">select new branch</option>
                        <option value="">select branch</option>
                        <option value="CSE">CSE</option>
                        <option value="IT">IT</option>
                        <option value="MECHANICAL">MECHANICAL</option>
                        <option value="ECE">ECE</option>
</select>

                </select>
            </td>
        </tr>
        <tr>
            <td>NEW ADDRESS:</td>
            <td><input type="text" name="newAddress" /></td>
        </tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Update" /></td>
        </tr>
        </table>
    </form>
</center>
</body>
</html>

<?php
error_reporting(0);
require 'db_conn.php';
$rn = $_POST['rn'];
$newSemester = $_POST['newSemester'];
$newYear = $_POST['newYear'];
$newBranch = $_POST['newBranch'];
$newAddress = $_POST['newAddress'];

if (isset($_POST['submit'])) {
    // Check if the student exists in the database
    $checkQuery = "SELECT * FROM bhup WHERE rn = '$rn'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // Update the student details
        $updateQuery = "UPDATE bhup SET semester = '$newSemester', year = '$newYear', branch = '$newBranch', address = '$newAddress' WHERE rn = '$rn'";
        $updateResult = mysqli_query($conn, $updateQuery);

        if ($updateResult) {
            echo "Student details updated successfully.";
        } else {
            echo "Failed to update student details.";
        }
    } else {
        echo "Student with the provided roll number does not exist.";
    }
}
?>
