<!DOCTYPE html>
<html>
    <head>
        <title>Staffs</title>
        <style>
            *
            {
            box-sizing: border-box;
            }
            .container
            {
                background-color: orangered;
                width: 90%;
                margin: 100px auto;
                display: flex;
                padding: 12px;
            }
            .box
            {
                background-color: turquoise;
                height: 350px;
                padding: 20px;
                flex:1;
                border:orangered solid 3px;
                transition: 1s;
                width:15%;
            }
            .box:hover
            {
              flex:5;
              background-color: palevioletred;
            }
            img{
                height:200px ;
                
            }
            .hide
            {
                display: none;
                margin-left: 50%;
                float: left;
            }
            .box:hover  .hide
            {
                display: block;
                color: red;
               
                
            }
            
        </style>
    </head>
    <body>
      <div class="container">
         <div class="box">
             <div class="image">
                <img src="logo.png">
             </div>
           
        <div class="hide">
             <table>
                 <tr>
                     
                     <td>Name:Harshitha<br>
                    Experience:3 years</td>
                 </tr>
             </table>
        </div>

        </div>
         <div class="box">
            <div class="image">
                <img src="logo.png">
             </div>
           
        <div class="hide">
             <table>
                 <tr>
                     
                     <td>Name:Harshitha<br>
                    Experience:3 years</td>
                 </tr>
             </table>
        </div>
         </div>
         <div class="box">
            <div class="image">
                <img src="logo.png">
             </div>
         </div>
         <div class="box">
             <div class="image">
            <img src="logo.png">
         </div></div>
         <div class="box">
            <div class="image">
                <img src="logo.png">
             </div>
         </div>
      </div>
    </body>
</html>