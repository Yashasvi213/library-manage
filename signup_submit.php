<?php
$conn= mysqli_connect("127.0.0.1","root","","library");
if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}

$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1($password);

$year = $_POST['year'];
$branch = $_POST['branch'];


$sql = "SELECT * FROM students WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (!$result) {
	echo "Something went wrong!";
	exit;
}

$row_count = mysqli_num_rows($result);
if ($row_count != 0) {
	echo "This email id is already registered with us!";
	exit;
}

$sql = "INSERT INTO students (email, full_name, phone,   year,branch) VALUES ('$email', '$full_name', '$phone',  '$year','$branch')";
$result = mysqli_query($conn, $sql);
if (!$result) {
	echo "Something went wrong!";
	exit;
}

echo "Your account has been created successfully!";
?>

Click <a href="index.php">here</a> to verify
<?php
mysqli_close($conn);
