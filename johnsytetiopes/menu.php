<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<style>
    body {
        background-color: #122529;
        font-family: Consolas, "Andale Mono WT", "Andale Mono", "Lucida Console",
        "Lucida Sans Typewriter", "DejaVu Sans Mono", "Bitstream Vera Sans Mono",
        "Liberation Mono", "Nimbus Mono L", Monaco, "Courier New", Courier,
        monospace;
    }

    h2 {
        color: #90EE90;
    }

    .button-28 {
        outline: none;
        padding: 16px 24px;
        appearance: none;
        background-color: transparent;
        border: 2px solid #1A1A1A;
        border-radius: 15px;
        box-sizing: border-box;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        text-decoration: none;
        text-align: center;
        transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        width: 100%;
        will-change: transform;
    }

    .button-28:disabled {
        pointer-events: none;
    }
    
    .button-28:hover {
        color: #90EE90;
        background-color: #1A1A1A;
        box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
        transform: translateY(-2px);
    }
    
    .button-28:active {
        box-shadow: none;
        transform: translateY(0);
    }
    
    .wrapper {
        /*This part is important for centering*/
        display: grid;
        place-items: center;
    }
    
    .typing {
        width: 4ch;
        animation: typing 2s steps(4), blink .5s step-end infinite alternate;
        white-space: nowrap;
        overflow: hidden;
        font-size: 20px;
        font-family: Consolas, "Andale Mono WT", "Andale Mono", "Lucida Console",
        "Lucida Sans Typewriter", "DejaVu Sans Mono", "Bitstream Vera Sans Mono",
        "Liberation Mono", "Nimbus Mono L", Monaco, "Courier New", Courier,
        monospace;
    }
    
    @keyframes typing {
        from {
            width: 0
        }
    }
    
    @keyframes blink {
        50% {
            border-color: transparent
        }
    }

</style>
<body>
    <div class="wrapper">
        <h2 class="typing" style="text-align: center;">MENU</h2>
    </div>
    <a href="user_page.php" class="button-28 fa fa-dashboard" target="main"> Dashboard</a>
    <br><br>
    <a href="calling_card.php" class="button-28 fa fa-credit-card" target="main"> Calling Card</a>
    <br><br>
    <a href="resume.php" class="button-28 fa fa-file" target="main"> Resume</a>
    <br><br>
    <a href="view.php" class="button-28 fa fa-user" target="main"> Users</a>
    <br><br>
    <a href="logout.php" class="button-28 fa fa-sign-out" target="_top"> Log out</a>
</body>
</html>