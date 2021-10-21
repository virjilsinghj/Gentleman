<!DOCTYPE html>
<html lang="en">
<title>Log in</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="Log in">
<meta name="description" content="This is the customer Log in">
<link rel="stylesheet" href="css/T1.css">

<head>
</head>

<body class="vj-content" style="max-width:1200px">
    <!-- Sidebar/menu -->
    <!-- Top menu on small screens -->
    <!-- Overlay effect when opening sidebar on small screens -->
    <?php { include('scroll.html');
    include('gentleman.html'); } 
    ?>
    <!-- !PAGE CONTENT! -->
    <div class="vj-main" style="margin-left:250px">
        <!-- Push down content on small screens -->
        <div class="vj-hide-large" style="margin-top:83px"></div>
        <!-- Top header -->
        <header class="vj-container vj-padding vj-xlarge ">
            <?php { include('button.html');} ?>

            <div class="vj-container vj-white vj-padding-32">
                <form action="Log in.php" method="POST">
                    <h1 class="vj-center vj-wide vj-text-black " id="Log in"><strong>LOG IN</strong></h1>
                    <p>Email:<input class="vj-input vj-border" type="email" placeholder="Email" name="Email" required
                            style="width:66%"></p>
                    <p>Password:<input class="vj-input vj-border" type="password" placeholder="Password" name="Password"
                            required style="width:60%"></p>
                    <button type="submit" class="vj-button vj-margin-bottom vj-Blackie" style="width:25%">Log
                        in</button>
                    <button type="button" class="vj-button vj-red vj-center vj-margin-bottom" style="width:25%"><a
                            href="#Log in">Cancel</a></button>
                    <br>
                    <?php
                    if($_POST){                   
                   include('project_con.php');
                   $Email=$_POST['Email'];
                   $Password=$_POST['Password'];
                   $query="SELECT * FROM signin where Email='$Email' and Password='$Password';";
                   $result=mysqli_query($connection,$query);
                   if($result->num_rows){
                       echo '<a href="order.php"> Logged in </a> ';
                       include('log.php'); 
                               
                    }
                    else
                    {
                    echo "E-mail or password is wrong";
                    
                   }
                   }
                   
                   ?>

                </form>
                <p class="vj-pink"><a href="forget.php"> Forgot password<a>
                </p>
            </div>

            <div>

                <H3 class=" vj-wide vj-center  "><b>
                        <p class="vj-black">
                            NEW MEMBER
                        </p>
                        <button type="button" class="vj-button   vj-Blackie" style="width:25%"><a href="sign in.php">
                                Create Account </a></button>
                    </b></H3>

            </div>
            <!-- Product grid -->
            <!-- Footer -->
            <?php { include('footer.php');} ?>
            <!-- End page content -->
    </div>
    <script src="js/Home.js">
    </script>
</body>

</html>