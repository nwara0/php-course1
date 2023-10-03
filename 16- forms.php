<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</head>
<body>
<h1 class="text-center py-5">Html forms</h1>

<div class="container py-5">
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Login form
                    </h3>
                </div>
                <div class="card-body">
                    <form method="post" action="thank-you.php">
                        <div class="row g-4">
                            <div class="col-12">
<!--                                <button type="button" class="btn btn-danger">New button</button>-->
                                <input type="email"
                                       class="form-control"
                                       name="email_address"
                                       placeholder="Enter your email" required>
                            </div>
                            <div class="col-12">
                                <input type="password"
                                       class="form-control"
                                       name="password"
                                       placeholder="Enter your password" required>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
