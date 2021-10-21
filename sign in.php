<!DOCTYPE html>
<html lang="en">
<title>Sign in</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="Mens Grooming||Beard Grooming|| Hair care">
<meta name="description" content="This store is exclusively for men">
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

            <!-- s -->

            <div class="vj-container vj-white vj-padding-32" id="sign in">
                <form action="sign in1.php" method="POST">
                    <h1 class="vj-center vj-wide vj-blackie" style="color: black; font-style:unset;font-weight: bold ;">
                        SIGN IN</h1>
                    <p>Name:<input class="vj-input vj-border" type="text" placeholder="Name" name="fName" required
                            style="width:65%"></p>
                    <p>Age:<input class="vj-input vj-border" type="number" placeholder="Age" name="Age"
                            style="width:68%" required></p>
                    <p>Email:<input class="vj-input vj-border" type="text" placeholder="Email" name="Email" required
                            style="width:66%"></p>
                    <p>Location:<input class="vj-input vj-border" type="text" placeholder="Location" name="Location"
                            required style="width:62%"></p>
                    <p>Phone Number:<input class="vj-input vj-border" type="number" placeholder="Number"
                            name="Phone_Number" required style="width:53%"></p>
                    <p>Password:<input class="vj-input vj-border" type="text" placeholder="Password" name="Password"
                            required style="width:60%"></p>
                    <p>Password:<input class="vj-input vj-border" type="text" placeholder="Password" name="Password1"
                            required style="width:60%"></p>

                    <button type="submit" class="vj-button vj-Blackie vj-margin-bottom" style="width:25%">Sign
                        in</button>

                    <button type="button" class="vj-button vj-red vj-center vj-margin-bottom" style="width:25%"><a
                            href="#sign in">Cancel</a></button>

                    <br>

                </form>
            </div>
            <div>

                <H3 class=" vj-wide vj-center  "><b>
                        <p class="vj-black">
                            Already have an account
                        </p>
                        <button type="button" class="vj-button   vj-Blackie" style="width:25%"><a href="Log in.php">Log
                                in</a></button>
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