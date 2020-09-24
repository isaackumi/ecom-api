<?php

require ('secretkey.php');

$key = i0();



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
</head>
<body>
<div>
    <form method="post" action="process.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Amount</label>
            <input type="text" class="form-control col-lg-6" id="amount" name="amount" aria-describedby="emailHelp" placeholder="amount">
            <input type="text" class="form-control col-lg-6" id="id"  name="student_id" aria-describedby="emailHelp"  placeholder="Enter ID">
            <input type="hidden" class="form-control" id="key" name="secret_key" value="<?= isset($key)?($key):'' ?>" aria-describedby="emailHelp" placeholder="Enter email">

        </div>


        <button type="submit" id="btn1" name="payment" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="ajax.js"></script>
</body>
</html>