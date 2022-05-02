<?php require_once './partials/add.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Backend/Full-stack recruitment task</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, nofollow"/>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

<main>
    <?php require_once './partials/menu.php'; ?>
</main>
<hr>
<div id="form">
    <h3>Dodawanie rekordu</h3>
    <form method="POST">
                     <?php //Komunikat błędu
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
        <label>Name</label>
        <input type="text" name="name">
                <label>Username:</label>
        <input type="text" name="username">
                <label>Email:</label>
        <input type="text" name="email">
                <label>Address:</label>
        <input type="text" name="address">
                 <label>Zipcode:</label>
        <input type="text" name="zipcode">
                <label>City:</label>
        <input type="text" name="city">
                <label>Phone</label>
        <input type="text" name="phone">
                <label>Company</label>
        <input type="text" name="company">
        <input type="submit" name="submit" value="Append" class="btn">
                     <?php //Komunikat porpawnego dodania
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
    </form>
</div>
<hr>
<script src="assets/js/script.js"></script>
</body>
</html>
