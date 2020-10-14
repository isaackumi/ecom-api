<?php

// require ('secretkey.php');

$key = 'kumfrez';



?>

<!DOCTYPE html>
<html>
<head>
    <title>Api call</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
<div class="col col-lg-6">
    <form method="post" action="" id="form">
        <div class="form-group">
            <label for="exampleInputEmail1">Form</label>
            <!-- <input type="text" class="form-control col-lg-6" id="amount" name="amount" aria-describedby="emailHelp" placeholder="amount"> -->
            <input type="text" class="form-control col-lg-6" id="country"  name="country" aria-describedby="emailHelp"  placeholder="Enter country"><br><br>
            <input type="text" class="form-control" id="key" name="key" value="<?= isset($key)?($key):'' ?>" aria-describedby="emailHelp" placeholder="Enter email">

        </div>


        <button type="submit" id="btn1" name="payment" class="btn btn-primary">Submit</button>
    </form>
</div>
<div class="center mt-5 col-lg-6">
<h3 style="color:green;">Result</h3>

<label for="exampleInputEmail1">ISO code:</label>
 <p id="code" style="color:green;"></p>
<label for="exampleInputEmail1">Phone code:</label>
<p id="phonecode" style="color:green;"></p>
<p style="color:red;" id="error" class="alert"></p>
</div>
<script src="ajax.js"></script>
<script src="alert.js"></script>
</body>
</html>
