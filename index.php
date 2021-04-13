<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project1</title>
</head>
<body>
    <?php
     require_once 'db.php';
    ?>
  <form action="" method="post">
        <div class="form-container">
            <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter your name">
            </div>
            <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter your email">
            </div>
            <div>
            <label for="mobile">Mobile</label>
            <input type="integer" name="phone" placeholder="Enter your mobile number">
            </div>
            <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password">
            </div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>