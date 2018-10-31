<?php
require_once(dirname(__FILE__).'/ConnectionInfoStudent.php');

$connectionInfo = new ConnectionInfo();
$con=$connectionInfo->GetConnection();

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM Students";
$result = $con->query($sql);

$contacts = array();

if ($result->num_rows > 0) {

      while($row = mysqli_fetch_assoc($result)) {
          $contact = array("id" => $row['idStudent'],"name" => $row['studentName'],"surname" => $row['studentSurname'],"age" => $row['studentAge'],"course" => $row['studentCourse']);
          array_push($contacts, $contact);


      }
    echo json_encode($contacts);
} else {
    echo "0 results";
}
$con->close();
?>
