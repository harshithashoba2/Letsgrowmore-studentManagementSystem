<?php
$server="localhost";
$username="root";
$password="";
$db="school";
$conn = mysqli_connect($server,$username,$password,$db);
if(!$conn)
{
    echo "sorry couldnt connect database".mysql_error();
}
else{
    
  
    if(isset($_POST['submit']))
    {	 
        
        
         $name = $_POST['name'];
         $regno = $_POST['regno'];
         $dob = $_POST['dob'];
         $english = $_POST['english'];
         $maths = $_POST['maths'];
         $science = $_POST['science'];
         $social = $_POST['social'];
         $tamil = $_POST['tamil'];
         $sql = "INSERT INTO grade5 (name,regno,dob,english,maths,science,social,tamil)
         VALUES ('$name','$regno','$dob','$english','$maths','$science','$social','$tamil')";
         if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Student added Successfully');window.location='grade5.php'</script>";
         } else {
            echo "Error: " . $sql . "
    " . mysqli_error($conn);
         }
         mysqli_close($conn);
    
}
}
?>