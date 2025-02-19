<?php
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        echo "hello we are handle student form<br>";
        $name= $_POST['name'];
        
        $email = $_POST['email'];
        $password = $_POST['password'];
      
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $subjects = $_POST['subjects'];
        $subjectName = implode(",",$subjects);
        // echo $subjectName;

        $hobbies = $_POST['hobbies'];
        $hobbiesName = implode(",",$hobbies);
        // echo $hobbiesName;

        
        $address = $_POST['address'];
        // echo $address;
        
        $filePath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $uploadPath = 'uploads/'.$fileName;
        echo $uploadPath;

        if(!is_dir('uploads')){
            mkdir('uploads',0777,true);
        }

        if(move_uploaded_file($filePath,$uploadPath)){
            $fileUploadedStatus = 'File Uploaded successfully '. $fileName;
        }else{
            $fileUploadedStatus = 'File Uploaded Status fail' . $fileName;
        }
        echo $fileUploadedStatus;

        
        $studentData = array(
           "name"=>$name,
           "email"=>$email,
           "password"=>$password,
           "gender"=>$gender,
           "age"=>$age,
           "subject"=>$subjects,
           "hobbies"=>$hobbies,
           "address"=>$address,
           "filename"=>$uploadPath
        );

        echo "<pre>";
        var_dump($studentData);
        echo "</pre>";
    // $queryString = http_build_query(array("data" => $studentData));
    // echo $queryString;


    // var_dump(base64_encode(serialize($studentData)));

        $data = base64_encode(serialize($studentData));
        echo '<a href="form-exp1.php?data=' . $data . '">Click here</a>';
    }
?>