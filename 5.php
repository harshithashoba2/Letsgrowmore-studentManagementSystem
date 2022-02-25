<!DOCTYPE html>
<html>
<head>
    <title>Grade 5</title>
    <link rel="stylesheet" href="style.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <style>
        body{
            
            background-position-y: 70px;
            background-image: url('5.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        
    footer
    {
    background-color: gold;
    
    }
    footer table td{
        padding: 14px 100px;
    }
    td a{
        text-decoration: none;
        color: blue;
        margin-left: 2%;
    }

    </style>
</head>

<body>
    
    <ul>
        
        <li><a href="home.php" >Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="result.php">Result</a></li>
      
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="staff.php">Staffs</a></li>
       
    </ul>
    <br>
    <form name="myForm" action="" method="POST">
        <br>
        <h2><u>Enter Details</u></h2>
    <table class="details">
        <tr>
            <td><h3><b>Name:</b></h3></td><td><input type="text" name="name" placeholder="Name"></td>
        </tr>
        <tr>
            <td><h3><b>Register Number:</b></h3></td><td><input type="tel" placeholder="Register Number" name="regno" maxlength="10"></td>
        </tr>
        <tr>
            <td><h3><b>Date of Birth:</b></h3></td><td><input type="date"  name="dob" maxlength="10"></td>
        </tr>
        
  
    </table>
    <button name="submit" class="button" type="button">Submit</button>
    <br>
    <text></text>
</form>
<br><br><br><br><br><br><br><br>
<footer>
    <table>
<tr><td>
<h4><u>Sri Seshaas International Public School</u></h4>
Welcome to Sri Seshaas International Public School, we are number one source for all things related to Education. We're dedicated to giving you the very best of Education with a focus on quality and real-world problem solution.
</td><td>     
<td>
<h4><u>Quick links</u></h4>
<br>
        <a href="home.php" >Home</a><br>
        <a href="about.php">About</a><br>
        <a href="result.php">Result</a><br>
      
       <a href="gallery.php">Gallery</a><br>
       <a href="staff.php">Staffs</a><br>
       
      </td>
  <td>
      <h4><u>Contact</u></h4> 
      <br><br><br>
      <b>Address:</b>Yeracud Foot <br>hills,Salem - 636008.<br><b>Phone no:</b>1234567890<br>
          <b>Email:</b>seshaas@gmail.com
      </h5>
  </td>
  </tr>
      
      </table>
</footer>

</body>
</html>
