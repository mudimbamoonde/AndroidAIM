<?php
include '../include/config.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $othername = $_POST["othername"];
    $dateofbirth = $_POST["dateofbirth"];
    $gender= $_POST["gender"];
    $nrc = $_POST["nrc"];
    $programStudy = 'BSICTSE';
    $address = "NON";
    $studymode = 'fulltime';
    $email = 'icuzambia.net';
    $phone= $_POST["phone"];

    @$age = date("Y") - $dateofbirth;
    //st_id  firstname   lastname    othername   dob     nrc     age  gender program     doe     address     modeofstudy     email   phone   status
    try{


        //Program
        $sqli = "SELECT * FROM program WHERE shortname=?";
        $th = $conn->prepare($sqli);
        $th->bindValue(1,$programStudy);
        $th->execute();
        $fth = $th->fetch(PDO::FETCH_OBJ);
        $programCode = $fth->shortname;
        $programName = $fth->programName;



        //
        $sql = "INSERT INTO student1 VALUES(?,?,?,?,?,?,?,?,?,?,NOW(),?,?,?,?,?)";
        $stmt= $conn->prepare($sql);
        $stmt->bindValue(1,NULL,PDO::PARAM_INT);
        $stmt->bindValue(2,$fname,PDO::PARAM_STR);
        $stmt->bindValue(3,$lname,PDO::PARAM_STR);
        $stmt->bindValue(4,$othername,PDO::PARAM_STR);
        $stmt->bindValue(5,$dateofbirth);
        $stmt->bindValue(6,$nrc,PDO::PARAM_STR);
        $stmt->bindValue(7,$age,PDO::PARAM_INT);
        $stmt->bindValue(8,$gender,PDO::PARAM_STR);
        $stmt->bindValue(9,$programName,PDO::PARAM_STR);
        $stmt->bindValue(10,$programCode,PDO::PARAM_STR);
        //$stmt->bindValue(10,"NOW()");
        $stmt->bindValue(11,$address,PDO::PARAM_STR);
        $stmt->bindValue(12,$studymode,PDO::PARAM_STR);
        $stmt->bindValue(13,$email,PDO::PARAM_STR);
        $stmt->bindValue(14,$phone,PDO::PARAM_INT);
        $stmt->bindValue(15,"0",PDO::PARAM_STR);
        if ($stmt->execute()) {

           $result["success"] = "1";
           $result["message"] = "Successfully Submitted";
           echo json_encode($result);

        }

    }catch (Exception $e){
         $result["success"] = "0";
           $result["message"] =  $e->getMessage();
    echo json_encode($result);
    }


}