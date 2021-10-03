<html>

<head>
    <title>Add Records in Database</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>






    
	<form action="" method="post">
        <label>
            <input type="text" class="input" name="name" placeholder="ENTER YOUR NAME">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>

            <input type="text" class="input" name="rollNumber" placeholder="ENTER YOUR ROLL NUMBER">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>

            <input type="text" class="input" name="section" placeholder="ENTER YOUR SECTION">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <button type="submit" name="submit" value="submit">SUBMIT YOUR DATA</button>
    </form>
	
    <?php
	   include "connectivity.php";
	
		if(isset($_POST['submit'])){
     
			$fullname = $_POST['name'];
			$rollNumber = $_POST['rollNumber'];
			$section= $_POST['section'];
			
			
			$insert = mysqli_query($db,"INSERT INTO student_information (std_name, std_roll_number ,std_section) VALUES ('$fullname','$rollNumber','$section')");

			if(!$insert){
				echo mysqli_error();
			}else{
				echo "Records added successfully.";
			}
        }
	   mysqli_close($db); // Close connection
    ?>

    <script src="js/Task_1.js"></script>
</body>

</html>