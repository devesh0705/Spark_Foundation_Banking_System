
<!DOCTYPE html>
<html>
    <head>
        <title>View customers</title>
        <style type="text/css">
        *{
            margin:0;
            padding: 0;
            font-family: 'Lato', sans-serif;
        }
        body{
          
             width: 100%;
            height: 90vh;
            background-image: url(vcimg.jpg);
            background-size: cover;
            background-position:center ;
            background-repeat: no-repeat;
            
            

        }
        nav{ /*this is the navigation bar*/
            width: 100%;
            background-color: rgba(0,0,0,0.9);
            overflow:hidden;
        }
        nav ul{
            list-style-type: none; /*this is to remove the bullet pts*/
            float: right;
            margin-top:7px;
        }
        nav ul li{
            display:inline-block; /*elements will be shown in a single line*/

        }
        nav ul li a{ /*styling anchors*/
            text-decoration:none;
            padding: 20px 35px;
            text-align:center ;
            color: #fff;
            display:block;
            font-weight: 700;
        }
        .logo{
            float: left;
            padding: 10px;
        }
       
      </style>
    </head>
    <body>
    <nav>
            <div class="logo">
                <img src="2.jpg" width="50" height="50">
            </div>
            <ul>
            <li><a href='spark_bank.php' onMouseOver="this.style.color='#3498DB'"
                    onMouseOut="this.style.color='#FDFEFE'" >SPARKS FOUNDATION BANKING SYSTEM</a></li>
            <li><a href="home.php" onMouseOver="this.style.color='#3498DB'"
                    onMouseOut="this.style.color='#FDFEFE'" >HOME</a></li>
            <li><a href="display.php" onMouseOver="this.style.color='#3498DB'"
                    onMouseOut="this.style.color='#FDFEFE'" >View Customers</a></li>
               
            <li><a href="transfermoney.php" onMouseOver="this.style.color='#3498DB'"
                    onMouseOut="this.style.color='#FDFEFE'" >Transfer Money </a></li>
            <li><a href="transactionhistory.php" onMouseOver="this.style.color='#3498DB'"
                    onMouseOut="this.style.color='#FDFEFE'" >View Transaction History</a></li>
            </ul>
        </nav>
         <div class="main-div">
             <h1>CUSTOMER DETAILS </h1>
            <div class="center-div">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>PHONE</th>
                                <th>DATE-OF-BIRTH</th>
                                <th>BALANCE</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include 'connection.php';
                            $selectquery = "select * from customer";

                            $query= mysqli_query($con, $selectquery);

                            $nums = mysqli_num_rows($query);

                            

                            while($res= mysqli_fetch_array($query)){

                             ?>

                                <tr>
                                    <td> <?php echo $res['id']; ?></td>
                                <td><?php echo $res['name']; ?></td>
                                <td><?php echo $res['email']; ?></td>
                                <td><?php echo $res['phone']; ?></td>
                                <td><?php echo $res['dob']; ?></td>
                                <td><?php echo $res['balance']; ?></td>
                               
                         
                            </tr>
                            <?php
                            }

                            ?>

                            
                        </tbody>
                    </table>

                </div>

            </div>
         </div>
         <style>
             .main-div{
    width:100%; height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}


h1{
    font-size: 18px;
    color: #000;
    text-align: center;
    margin-top: -80px;
    margin-bottom: 20px;
}
table{
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
    border-radius: 10px;
    margin:auto;
}
th,td{
    border: 1px solid #f2f2f2;
    padding: 10px 30px;
    text-align: center;
    color: black;

}
th{
    text-transform: uppercase;
    font-weight: 500;
}
   
td{font-size: 13 px;}
         </style>
    </body>

    </html>