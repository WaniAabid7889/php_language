<?php
  
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email = $_REQUEST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $date = $_POST['date'];
        $subject = $_POST['subject'];
        
        $subjectArr = implode(',',$subject);
      

        $gender = $_POST['gender'];
        $hobbies = $_POST['hobbies'];
        
        $hobbiesName = implode(',',$hobbies);


        $filePath = $_FILES['file']['tmp_name'];
     
        $fileName = $_FILES['file']['name'];
        
        $folderPath = 'uploads/'.$fileName;

        echo $folderPath;

        if(!is_dir('uploads')){
            mkdir('uploads',0777,true);
            echo "direct is not found";
        }

        if(move_uploaded_file($filePath,$folderPath)){
            $fileUploadedStatus =  $fileName;
        }else{
            $fileUploadedStatus = 'File Uploaded Status fail' . $fileName;
        }

        $studentData = array(
            "name"=>$name,
            "email"=>$email,
            "password"=>$password,
            "age"=>$age,
            "gender"=>$gender,
            "dob"=>$date,
            "subject"=>$subject,
            "hobbies"=>$hobbies,
            "file"=>$fileUploadedStatus,
        );
    }

    echo "<pre>";
    // var_dump($studentData);
    echo "</pre>";
   // echo serialize($studentData);
    $userdata = base64_encode(serialize($studentData));


    echo "<pre>";
//    print_r($userdata);
    echo "</pre>";

    echo '<a href="./form-exp2.php?data='.$userdata.' ">click here</a>';
    echo '<a href="./form-exp2.php?id=101&name='.$name.'">click here</a>';
?>

