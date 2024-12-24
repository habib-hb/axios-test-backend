<?php


// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     if (isset($_POST['login'])) {
//         $email = $_POST['email'];
//         $password = $_POST['password'];

//         if (empty($email) || empty($password)) {
//             $error_message = "Email and password are required!";
//         } else {
//             $hashed_password = md5($password);

//             $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$hashed_password'";
//             $result = $conn->query($sql);

//             if ($result->num_rows == 1) {
//                 $row = $result->fetch_assoc();

//                 $_SESSION['user_id'] = $row['id'];
//                 $_SESSION['email'] = $row['email'];
//                 $_SESSION['type'] = $row['type'];

//                 header("Location: dashboard.php");
//                 exit();
//             } else {
//                 $error_message = "Invalid email or password!";
//             }
//         }
//     }

// }


if ($_SERVER["REQUEST_METHOD"] == "GET") {


  if (isset($_GET['name'])) {

    $name = $_GET['name'];

  };

    $data = [
       "status" => "success",
       "message" => "It's working!!",
       "timestamp" => time(),
       "name" => $name ?? "John Doe",
    ];


    header("Content-Type: application/json");
    

    echo json_encode($data);

}
?>
