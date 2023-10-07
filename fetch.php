<?php
$conn= mysqli_connect("127.0.0.1","root","","fetching");
if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$array=[];
if(mysqli_num_rows($result)>0){
    foreach($result as $row){
        //push row to array
        array_push($array,$row);
    }
    header('Content-type: application/json');
    echo json_encode($array);

}
else{
    echo $return="<hd>NO record found</hd>";
}
?>
