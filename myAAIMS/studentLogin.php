<?php
include '../include/config.php';
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	 try{
        $username = trim($_POST["username"]);
        $password = md5($_POST["password"]);

     $sql = "SELECT*FROM user WHERE username =:username AND password = :password";
     $stmt = $conn->prepare($sql);
     $stmt->bindParam(":username",$username,PDO::PARAM_STR);
     $stmt->bindParam(":password",$password,PDO::PARAM_STR);
     $stmt->execute();

     $row = $stmt->fetch(PDO::FETCH_OBJ);

///

$result = array();
$result["login"] = array();

if ($stmt->rowCount() === 1) {
		$index["name"] = $row->name;
		$index["username"] = $row->username;
		$index["email"] = $row->email;
		$index["accessLevel"] = $row->access_level;

		array_push($result["login"], $index);
		$result["success"]= "1";
		$result["message"]= "success";

		echo json_encode($result);

	}else{
		$result["success"] = "0";
		$result["message"] = "error";

		echo json_encode($result);

	}




    }catch (Exception $e){
         $result["success"] = "0";
           $result["message"] =  $e->getMessage();
    echo json_encode($result);
    }

//close file

}
/////
