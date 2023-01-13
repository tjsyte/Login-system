<?php
?>
<html>

    <head>
        <title>Dashboard</title>
        <frameset rows="10, 70, 0" border="5" framespacing="50">
            <frame src="header.php">
                <frameset cols="20%, 100%" border="5" framespacing="50">
                    <frame src="menu.php">
                        <frame src="user_page.php" name="main" marginheight="100" marginwidth="100" noresize="noresize">

                        </frame>
                    </frame>
                </frameset>
            </frame>
        </frameset>

    </head>

    <body> 
        <!-- frameset is working only in head tag NOT in body tag  -->

    </body>

</html>