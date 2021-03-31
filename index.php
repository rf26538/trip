<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to treval form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase&family=Dosis:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="bg.jpg" alt="trip to paradise">
    <div class="container">
        <h1>Welcome To Paradise Trip</h1>
        <p>Enter your detail's</p>
        <?php
            session_start();
            if(!empty($_SESSION['message'])){
        ?>
		  <p class="close" data-dismiss="alert">&times;
		  <?=$_SESSION['message']?>
          </p>
        <?php
            unset($_SESSION['message']);
            }
        ?>
        <form action="add.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your Name">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone">
            <textarea name="other" id="other" col="30" rows="10" placeholder="Enter Something about you"></textarea>
            <button class="btn" type="submit" id="submit">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>