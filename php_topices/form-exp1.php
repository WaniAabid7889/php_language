<?php
//var_dump($_GET["data"]);
// $getData = base64_decode($_GET['data']);
$getData = unserialize(base64_decode($_GET['data']));
echo "<pre>";
var_dump($getData);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        input:invalid {
            border: 2px solid red;
        }

        input:invalid:required {
            background-image: linear-gradient(to right, pink, lightgreen);
        }


        input:valid {
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Student Form</h1>
        <form action="student.php" method="POST" enctype="multipart/form-data">
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required minlength="3" maxlength="20" value=<?php echo $getData['name'] ?? ''; ?>>
            </div>
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" id="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" placeholder="Enter your email" minlength="10" maxlength="40" required value=<?php echo $getData['email'] ?? ''; ?>>
            </div>
            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" id="password" minlength="6" maxlength="8" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" placeholder="Enter your password" required value=<?php echo $getData['password'] ?? ''; ?>>
            </div>
            <!-- Gender -->
            <div class="mb-3">
                <label class="form-label">Gender:</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="radio"
                            class="form-check-input"
                            name="gender"
                            id="male"
                            value="Male"
                            <?php echo ($getData['gender'] ?? "")  == "Male" ? "checked" : ''; ?>>
                        <label class="form-check-label" for="male">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="radio"
                            class="form-check-input"
                            name="gender"
                            id="female"
                            value="Female"
                            value=<?php echo ($getData['gender'] ?? "") == "Female" ? "checked" : '' ?>>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
            </div>
            <!-- Age -->
            <div class="mb-3">
                <label for="age" class="form-label">Age:</label>
                <input type="number" class="form-control" name="age" min="0" required id="age" placeholder="Enter your age" value=<?php echo $getData['age'] ?? ''; ?>>
            </div>
            <!-- Subjects -->
            <div class="mb-3">
                <label for="subjects" class="form-label">Subjects:</label>
                <select class="form-select" name="subjects[]" id="subjects" multiple>
                    <option value="Java" <?php echo in_array("Java", $getData['subject']) ? "selected" : ''; ?>>Java</option>
                    <option value="C#" <?php echo in_array("C#", $getData['subject']) ? "selected" : ''; ?>>C#</option>
                    <option value="Salesforce" <?php echo in_array("Salesforce", $getData['subject']) ? "selected" : ''; ?>>Salesforce</option>
                    <option value="JavaScript" <?php echo in_array("JavaScript", $getData['subject']) ? "selected" : ''; ?>>JavaScript</option>
                </select>
            </div>

            <!-- Hobbies -->
            <div class="mb-3">
                <label class="form-label">Hobbies:</label>
                <div class="form-check">
                    <input type="checkbox"
                        class="form-check-input"
                        name="hobbies[]"
                        id="Singing"
                        value="Singing"
                        <?php echo in_array("Singing", $getData['hobbies']) ? "checked" : ""; ?>>
                    <label class="form-check-label" for="Singing">Singing</label>
                </div>
                <div class="form-check">
                    <input type="checkbox"
                        class="form-check-input"
                        name="hobbies[]"
                        id="Playing"
                        value="Playing"
                        <?php echo in_array("Playing", $getData['hobbies']) ? "checked" : ""; ?>>
                    <label class="form-check-label" for="Playing">Playing</label>
                </div>
                <div class="form-check">
                    <input type="checkbox"
                        class="form-check-input"
                        name="hobbies[]"
                        id="Traveling"
                        value="Traveling"
                        <?php echo in_array("Traveling", $getData['hobbies']) ? "checked" : ""; ?>>
                    <label class="form-check-label" for="Traveling">Traveling</label>
                </div>

            </div>
            <!-- Address -->
            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <textarea class="form-control"
                    name="address"
                    id="address"
                    rows="4"
                    required
                    placeholder="Enter your address"><?php echo htmlspecialchars($getData['address'], ENT_QUOTES, 'UTF-8'); ?></textarea>
            </div>
            <!-- File -->
            <div class="mb-3">
                <label for="file" class="form-label">Upload File:</label>
                <input type="file" class="form-control" name="file" id="file" required>

                <?php if (!empty($getData['filename'])): ?>
                    <p class="mt-2">
                        <strong>Uploaded File:</strong>
                        <a href="<?php echo htmlspecialchars($getData['filename'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank">
                            View File
                        </a>
                    </p>
                <?php endif; ?>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>