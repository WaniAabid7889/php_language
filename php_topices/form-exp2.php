<?php

$getData = unserialize(base64_decode($_GET['data']));
echo "<pre>";
var_dump($getData['file']);
echo "</pre>";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <form method="post" action="process.php"  enctype="multipart/form-data">
            <h1 class="text-align:center">Login Form</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required  value=<?php echo $getData['email'] ?? '' ?>  >
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" min="6" max="8" name="password" value=<?php echo $getData['password'] ?? '' ?>  >
            </div>
            <div>
                <h1>Student Information</h1>
            </div>
            <div>
                <label for="Student Name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value=<?php echo $getData['name'] ?? ''?> >
            </div>

            <div>
                <label for="Student Name" class="form-label">Age</label>
                <input type="number" class="form-control" name="age" value=<?php echo $getData['age'] ?? '' ?> >
            </div>

            <div>
                <label for="Student Name" class="mt-2 form-label form-control">DOB<label>
                <input type="date" class="form-control" name="date" value=<?php echo $getData['dob'] ?? '' ?>  >
            </div>
            

            <div>
                <label for="Student Subject" class="form-label">Subjects</label>
                <select class="form-control" name="subject[]" multiple>
                    <option value="" disabled>Select Subject</option>
                    <option value="science" <?php echo in_array("science", ($getData['subject']) ?? []) ? "selected" : ''; ?>> Science </option>
                    <option value="math"  <?php echo in_array("math",($getData['subject'])??[]) ? "selected" : ''; ?>>  Math</option>
                    <option value="computer"  <?php echo in_array("computer",($getData['subject']?? [])) ? "selected" : ''; ?>>Computer</option>
                </select>
            </div>


            <div class="mt-3">
            <label for="Student Gender" class="form-label">Gender</label>
                <input type="radio"  value="male"  name="gender" <?php echo ($getData['gender'] ?? '')== 'male' ? "checked" :''?>>Male
                <input type="radio"  value="female" name="gender" <?= ($getData['gender'] ?? '') == 'female' ? "checked ": ''?>>Female
            </div>

            

           <div class="mt-3">
               <label for="Student Hobbies" class="form-label">Hobbies</label>
               <input type="checkbox"  name="hobbies[]"  value="Sport" <?php echo in_array("Sport",($getData['hobbies']??[])) ? "checked" : ''; ?> >Sports
               <input type="checkbox"  name="hobbies[]"  value="Reading" <?php echo in_array("Reading",($getData['hobbies']??[])) ? "checked" : ''; ?>>reading
               <input type="checkbox"  name="hobbies[]"  value="Traveling" <?php echo in_array("Traveling",($getData['hobbies']??[])) ? "checked" : ''; ?>>Traveling
               <input type="checkbox"  name="hobbies[]"  value="Singing" <?php echo in_array("Singing",($getData['hobbies']??[])) ? "checked" : ''; ?>>Singing
            </div>

            <div>
                <label for="Student File" class="form-label">File</label>
                <input type="file" class="form-control" name="file">
                <?php if (!empty($getData['file'])): ?>
                    <p class="mt-2"> 
                        <strong>Uploaded File:</strong>
                        <?php echo $getData['file'] ?>;
                    </p>
                    <a href="<?php echo htmlspecialchars(dirname('uploads/' . $getData['file'])); ?>" target="_blank">
                         View File
                    </a>
                <?php endif; ?>  
            </div>

            <button type="submit" class="mt-3 float-end btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>