<?php 
	session_start();
	include 'connection.php';

	$q="select * from customer";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
?>

<html>
<head>
	<title>Transfer Money</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style> 
		
		
		table {
			font-family: 'Lato', sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h2{
			font-family: 'Lato', sans-serif; 
		font-size:30px;
		}
		
		td, th {
		border: 1px solid black;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(even) {
		background-color:#FDFEFE;
		}
		tr:nth-child(odd) {
		background-color:#EBF5FB;
		}
		nav{ /*this is the navigation bar*/
            width: 100%;
            background-color:#17202A;
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
            color: 	#FDFEFE;
            display:block;
            font-weight: 700;
        }
        .logo{
            float: left;
            padding: 10px;
        }	

		.footer {
            position: fixed;
            left: 0;
            bottom: 100;
            width: 100%;
            background-color: #AED6F1;
            color: #CB4335;
            text-align: center;

        }

		.footer1 {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #AED6F1;
            color: black;
            text-align: center;

        }
	</style>
	
</head>
<body style="background-color:#AED6F1;">
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
		

    <h2 style="color:black;text-align: center;font-family: cursive;" >To transfer money from one user to another , click on the user </h2>
    <table class="flat-table flat-table-1" align=center style="font-family: 'Lato', sans-serif;;color:black;font-weight: bold;">
	<thead>
		<th>CUSTOMER ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>PHONE</th>
		<th>BALANCE</th>
	</thead>
	<tbody>
		<tr align = center>
        
		<?php  
			while($row=mysqli_fetch_array($result)){
         ?>
		 
		<td><?php echo  $row["id"]; ?></td>
		<?php echo "<td> <a href = 'transact.php?Name=$row[1]'>$row[1]</a></td>";?>
		<td><?php echo  $row["email"]; ?></td>
		<td><?php echo  $row["phone"]; ?></td>
		<td><?php echo  $row["balance"]; ?></td>
		<tr align = center>
		
		<?php }
		?>
		
		</tr>

        
	</tbody>
	</table>
	<br><br>
	
	<div class="footer">
            <p><b><h3>Transferring Money Require Great Care, Make Sure You Double Check Email and Phone Number of a Person.</h3></b>
            </p>
    </div>

	<div class="footer1">
			<p><b>Developed by Devesh Yadav.
                <br>As a part of THE SPARKS FOUNDATION INTERNSHIP.
                <br>September Batch 2022</b>
            </p>
    </div>
    
</body>
</html>