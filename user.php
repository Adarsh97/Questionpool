 
<?php 
session_start();
#include "include/db.php";
 
if (isset($_SESSION['name'])) {
   echo 'welcome ' .$_SESSION['name']; 
} else {
echo 'Sorry, You are not logged in.';
}

$sql ="SELECT * FROM department ORDER BY dept_name";

$result=mysqli_query($conn,$sql);

if(!$result)
	echo 'No results';
else{
	echo 'Reached';
	while($row = mysqli_fetch_row($result)) {	    		
		echo $row['dept_name'];
	}
}
?>

    <!DOCTYPE html>
    <html>
            <head>
                    <title>Question Pool</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link href = "css/bootstrap.min.css" rel = "stylesheet">
                    <link href = "css/styles.css" rel = "stylesheet">
            </head>
            <body>
                   
                    
 
            <div class = "container">
		    <h2>Departments</h2>
            <div class="list-group">
                    <a href="./department.php?DP_ID=GN" class="list-group-item">
                        <h4 class="list-group-item-heading">Common Courses</h4>
                            <p class="list-group-item-text"></p>
                    </a>
                    <a href="./department.php?DP_ID=AR" class="list-group-item">
                        <h4 class="list-group-item-heading">Architecture</h4>
                            <p class="list-group-item-text">
</p>
                    </a>
                    <a href="./department.php?DP_ID=BT" class="list-group-item">
                        <h4 class="list-group-item-heading">Biotechnology</h4>
                            
                    </a>
                    <a href="./department.php?DP_ID=CE" class="list-group-item">
                        <h4 class="list-group-item-heading">Civil Engineering</h4>
                          
                    </a>
                    <a href="./department.php?DP_ID=CH" class="list-group-item">
                        <h4 class="list-group-item-heading">Chemical Engineering</h4>
                            
                    </a>
                    <a href="./department.php?DP_ID=CS" class="list-group-item">
                        <h4 class="list-group-item-heading">Computer Science and Engineering</h4>
                            
                    </a>
                    <a href="./department.php?DP_ID=EC" class="list-group-item">
                        <h4 class="list-group-item-heading">Electronics & Communication Engineering</h4>
                            
                    </a>
                    <a href="./department.php?DP_ID=EE" class="list-group-item">
                        <h4 class="list-group-item-heading">Electrical & Electronics Engineering</h4>
                           
                    </a>
                    <a href="./department.php?DP_ID=EP" class="list-group-item">
                        <h4 class="list-group-item-heading">Engineering Physics</h4>
                            
                    </a>
                    <a href="./department.php?DP_ID=ME" class="list-group-item">
                        <h4 class="list-group-item-heading">Mechanical Engineering</h4>
                            
                    </a>
                    <a href="./department.php?DP_ID=PE" class="list-group-item">
                        <h4 class="list-group-item-heading">Production Engineering</h4>
                           
                    </a></div>            </div>

            </body>
    </html>
