<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Validation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/validation.js"></script>
</head>

<body>
    <div class="container p-5">
        <form class="mt-10 p-5 rounded" style="background-color: #eee; " action="form.php" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput name" placeholder="Name" name="name">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput contact" placeholder="contact" name="contact">
                <label for="floatingInput">Contact No</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput email" placeholder="name@example.com"
                    name="email">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                    name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="container d-flex justify-content-between align-items-center w-100">
                <button type="submit" class="btn btn-outline-primary flex-grow-1 me-2" onclick="return onValidate();">Sign
                    up</button>
                <button type="reset" class="btn btn-outline-primary flex-grow-1 ms-2">Clear Form</button>
            </div>

        </form>
        <hr>
        <div class="text-center mt-0 p-10 rounded">
            <a href="table.php"><button class="btn btn-primary w-50">Show</button></a>
        </div>
    </div>
</body>

</html>
