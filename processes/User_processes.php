<!-- ??Import dtbse -->
require_once "../config/dbConnect.php";

if(isset($_POST["signup"])){
    $fullname = mysqli_real_escape_string($dbConn, $_POST["fullname")];
    $username = mysqli_real_escape_string($dbConn, $_POST["username")];
    $email = mysqli_real_escape_string($dbConn, $_POST["email")];
    $password = mysqli_real_escape_string($dbConn, $_POST["password")];
    $created = mysqli_real_escape_string($dbConn, $_POST["created")];
    $updated = mysqli_real_escape_string($dbConn, $_POST["updated")];
}