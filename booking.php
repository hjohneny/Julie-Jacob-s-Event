<!DOCTYPE html>
<html>
    
        <head>
                <h1>Julie & Jacob's Event</h1>
                <link id="pagestyle" rel="stylesheet" type="text/css" href="css/Cake_Design.css">
                <script src="js/java.js"></script> 
        </head>

<nav>
        <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="">SERVICES</a></li>
                <li><a href="login.php">LOG IN</a></li>
        </ul>
</nav> 
    
<body>
        <form  action="showFormdata.php" method="POST" id="form1">
            <table border="1">                
                    <th><label >Area :</label></th>
                    <td><select name="LOCATION" required >
                            <option value="-1" >[choose yours]</option>
                            <option value="Kuching"  >Kuching</option>
                            <option value="Kota Samarahan" >Kota Samarahan</option>
                            <option value="Serian" >Serian</option>
                        </select>
                        </td></table><br \><br \>
            
            <table border="0">
                    <th ><label for="name" >Cake Topping:</label> </th> 
                    <th ><label for="name">Custom Flavour</label> </th> 
                <tr>                
                                                  
                        <td style="padding: 10px; "><input type="char" id="topping" name="topping1"  required ></td>                               
                        <td style="padding: 10px; "><input type="char" name="number" placeholder="leave blank if none"  required ></td></tr>
                    </table>

            <table border="0">                
                    <th><label >DATE  :</label></th>
                    <tr>
                    <td><select name="MONTH" required >
                            <option value="-1" >[Choose Month]</option>
                            <option value="JANUARY">JANUARY</option>
                            <option value="FEBRUARY">FEBRUARY</option>
                            <option value="MARCH">MARCH</option>
                            <option value="APRIL">APRIL</option>
                            <option value="MAY">MAY</option>
                            <option value="JUN">JUN</option>
                            <option value="JULY">JULY</option>
                            <option value="AUGUST">AUGUST</option>
                            <option value="SEPTEMBER">SEPTEMBER</option>
                            <option value="OCTOBER">OCTOBER</option>
                            <option value="NOVEMBER">NOVEMBER</option>
                            <option value="DECEMBER">DECEMBER</option></td>
                    
                        <th><label></label></th>       
                        <td><select name="DAY" required >
                                <option value="-1" >[Choose Day]</option>
                                <option value="MONDAY">MONDAY</option>
                                <option value="TUESDAY">TUESDAY</option>
                                <option value="WEDNESDAY">WEDNESDAY</option>
                                <option value="THURSDAY">THURSAY</option>
                                <option value="FRIDAY">FRIDAY</option>
                                <option value="SATURDAY">SATURDAY</option>
                                <option value="SUNDAY">SUNDAY</option>     
                            
                                <td style="padding: 10px;"><input type="number" name="number2" min="2019"  required ></td></tr>
               
                    <table border="0">                
                    
                <table border="0" id="booking">
                        <input type="checkbox" name="condition" value="ageee" required>I AM AWARE OF MY ORDER REQUEST<br>
                        
                        <th><P class="submit"><input type="submit" name="submit" value="ORDER" ></P></th>
                        <th><input type="button" onclick="myFunction()" id="myForm" value="RESET"></th>

                        <td><div><a href="showDetail.php"><h4 >GO TO CAR DETAIL</h4></a></div></td>
                        </table>
                       
                                           
                </body>
               <br />
</html>
