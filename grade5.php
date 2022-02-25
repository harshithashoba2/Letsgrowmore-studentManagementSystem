<!DOCTYPE html>
<html>
<head>
    <title>Grade 5</title>
    <link rel="stylesheet" href="mystyle.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <style>
        body{
            
            background-position-y: 70px;
            background-image: url('class.jpg');
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
    form{
        background-color: white;
        border-radius: 4%;
        width:40%;
        margin-left: 30%;
    }
    input[type="submit"]
{
    background-color: blue;
    color: white;
    border-radius: 2%;
    margin-left: 42%;
    font-size: larger;
    border: none;
  
    padding: 12px 30px;
  cursor: pointer;
  border-radius: 8px;
}
input[type="submit"]:hover
{
    background-color: rgb(255, 72, 0);
    color: white;
}
h2{
    text-align: center;
    color: blue;
}
.details td{
    padding:4px;
}
    </style>
</head>

<body>
    
    <ul>
        
        <li><a href="grade5.php" >Add Student</a></li>
        <li><a href="update.php">Update Student</a></li>
        <li><a href="delete.php">Delete Student</a></li>
      
        <li><a href="view.php">View Students</a></li>
        
       
    </ul>
    <br>
    <br><br>
    <form  action="6.php" method="POST" class="form2">
        <br>
        <h2><u>Grade 5 Details</u></h2>
    <table class="details2">
        <tr>
            <td><h3><b>Name:</b></h3></td><td><input type="text" name="name" placeholder="Name"></td>
        </tr>
        <tr>
            <td><h3><b>Register Number:</b></h3></td><td><input type="tel" placeholder="Register Number" name="regno" maxlength="10"></td>
        </tr>
        <tr>
            <td><h3><b>Date of Birth:</b></h3></td><td><input type="date"  name="dob" maxlength="10"></td>
        </tr>
        <tr>
            <td><h3><b>English:<input type="tel" name="english" placeholder="English"></b></h3></td>&nbsp;&nbsp;<td><h3><b>Maths:<input type="tel" name="maths" placeholder="Maths"></b></h3></td>
        </tr>
        <tr>
            <td><h3><b>Science:<input type="tel" name="science" placeholder="Science"></b></h3></td>&nbsp;&nbsp;<td><h3><b>Social:<input type="tel" name="social" placeholder="Social"></b></h3></td>
        </tr>
        <tr>
            <td><h3><b>Tamil:<input type="tel" name="tamil" placeholder="Tamil"></b></h3></td>
        </tr>
  
    </table>
    <input type="submit" value="Submit" name="submit" > 
    
    
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
         
<a href="grade5.php" >Add Student</a>
        <a href="update.php">Update Student</a>
        <a href="delete.php">Delete Student</a>
      
        <a href="view.php">View Students</a>
        
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
