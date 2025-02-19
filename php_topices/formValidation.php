<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <style>
        input:invalid {
            border: 2px solid red;
        }

        input:invalid:required{
            background-color: blue;
        }
        input:valid{
            background-color: green;
        }
      
    </style>
</head>

<body>
    <div class="container">
        <form method="get">
            <h1 class="text-align:center">Login Form</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" pattern="\d{4,4}" name="password" required />
            </div>
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" pattern="\[aA]" name="name" required />
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Increment Number</label>
                <input type="number" class="form-control" min="0" max="10" step="2" name="number" required />
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <input type="url" autocapitalize="characters" class="form-control" name="url" placeholder="http://localhost/sumitra-php-learner/formValidation.php" readonly />
            </div>

            <!-- <p>
                <label>
                    Enter your phone number in the format (123) - 456 - 7890 (<input
                        name="tel1"
                        type="tel"
                        pattern="[0-9]{3}"
                        placeholder="###"
                        aria-label="3-digit area code"
                        size="1" />) -
                    <input
                        name="tel2"
                        type="tel"
                        pattern="[0-9]{3}"
                        placeholder="###"
                        aria-label="3-digit prefix"
                        size="1" />
                    -
                    <input
                        name="tel3"
                        type="tel"
                        pattern="[0-9]{4}"
                        placeholder="####"
                        aria-label="4-digit number"
                        size="3" />
                </label>
            </p> -->


            <button type="submit" class="mt-3 float-end btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>