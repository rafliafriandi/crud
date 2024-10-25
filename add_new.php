
<!DOCTYPE htnl>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>PHP CRUDE application</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573;">
        PHP Complete CRUDE application
    </nav>

    <div class="container"></div>
        <div class="text-center mb-4">
            <h3>add New user</h3>
            <p class="text-muted">Complete the form below to add a new user</p>
        </div>

        <div class="container d-flex justify-content-center">
            <from action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">first name:</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Albert">
                    </div>
                    <div class="col">
                        <label class="form-label">last name:</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Elinstein">
                </div>
             </div>
                  

             <div class="mb-3">
             <div>
             <div class="col">
                  <label class="form-label">Email:</label>
                  <input type="email" class="form-control" name="email" placeholder="name@example.com">
             </div>

             <div class="from-group mb-3">
                <label>Gender</label> &nbsp;
                <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                <label for="male" class="form-input-label">male</label>
                 &nbsp;
                <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                <label for="female" class="form-input-label">female</label>
            </div>

            <div>
                <button type="submit" class="btn btn-success" name="sumbit">save</button>
                <a href="index.php" class="btn btn-danger">cancel</a>
            </div>
        </from>
        </div>

<!--bootsrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>