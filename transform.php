<?php

header("Access-Control-Allow-Origin: http://localhost:4000"); 
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); 
header("Access-Control-Allow-Headers: Content-Type, Authorization"); 
header("Access-Control-Allow-Credentials: true"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input = json_decode(file_get_contents("php://input"), true);

   
    if (isset($input['name'])) {
        $name = $input['name'];

            $data = [
               "status" => "success",
               "message" => "Awesome Name !!",
               "timestamp" => time(),
               "name" => $name,
            ];

            header("Content-Type: application/json");
            
            echo json_encode($data);
        
    }


  
}


?>
