<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> DETAILS </title>
  <link rel="stylesheet" href="css/catstyle.css">
  <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .container{
        display: flex;
        flex-direction: column;
        width: 350px;
        padding: 15px;
        border: 1px solid ;
        border-radius: 5px;
        background-color: beige;
    }
    .input{
        margin: 5px 0px;
        height:
        padding: 7px;
    }
    .button{
        height: 35px;
        margin: 5px 0px;
        background-color: beige;
        border: none;
        border-radius: 5px;
    }
  </style>
</head>
<body>
<form action="" method="POST">
    <div class="container">
    <label for="full name"> Full Name:</label>
    <input type="text" name="full_name" id="full_name" placeholder="Enter full name" maxlength="60" required /><br>
    
    <label for="email"> Email:</label>
    <input type="text" name="email" id="email" placeholder="Enter Email" maxlength="60" required /><br>

    <label for="address"> Address:</label>
    <input type="text" name="address" id="address" placeholder="address" maxlength="60" /><br>

    <label for="date of birth">date of birth:</label>
    <input type="date" name="date of birth" id="date of birth" placeholder="Enter the date of birth" maxlength="160" required /><br>

    <label for="autobiography">AutoBiography:</label><br>
    <textarea name="autobiography" id="autobiography" placeholder="Enter autobiography" rows="10" required></textarea><br>

    <input type="radio" name="gender" value="male" >Male <br>
    <input type="radio" name="gender" value="female" >Female <br>

    <input type="submit" name="sign up" value="sign up" />
</form>

</body>
</html>