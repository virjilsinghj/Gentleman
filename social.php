<!DOCTYPE html>
<html lang="en">
<title>Social media marketing</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="Social Media Marketing">
<meta name="description" content="This explains the working of social media marketing">
<link rel="stylesheet" href="css/T1.css">

<head>
<style>
        #table2{
                border-spacing: 20px 20px;
                color:gray;
        }
        ol{
                list-style-type: none;
                margin: 0;
                padding:0;
                font-size: 15px;
                color:gray;
                
                line-height: 130%;
            }
        ul{
                list-style-type: square;
                margin: 0;
                padding: 100;
                font-size: 15px;          
                line-height: 150%;
                color:gray;
        }
 </style>
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
            <div>
                <h1 class="vj-center vj-wide vj-text-grey ">SOCIAL MEDIA MARKETING</h1>
            </div>
            <?php { include('social_text1.html');} ?>
        </header>

        <!-- Product grid -->
        <!-- Footer -->
        <?php { include('footer.php');} ?>
        <!-- End page content -->
    </div>
    <script src="js/Home.js">
    </script>
</body>

</html>