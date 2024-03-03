<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['accept-cookies'])) {
        $expiryDate = strtotime("+1 month", time());
        setcookie("cookieAccepted", "true", $expiryDate);
        header("Location: ".$_SERVER['REQUEST_URI']);
        exit();
    }

    if(isset($_POST['decline-cookies'])) {
        header("Location: ".$_SERVER['REQUEST_URI']);
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .cookies{
            font-size: 15px;
            font-family: 'Rubik', sans-serif;
            min-height: 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .cookies a{
            color: var(--primary-green);
            font-weight: 500;
            text-decoration: none;
        }
        
        .cookie-button {
            border-radius: 5px;
            padding: 12px 20px;
            font-size: 15px; 
            font-family: inherit;
            cursor: pointer;
            border: 3px solid white;
            color: white;
            gap: 20px;
        }

        .accept-button {
            background-color: #333;
            margin-right: 10px;
        }

        .decline-button {
            background-color: #333;
        }

        .cookie-button:hover {
            background-color: var(--primary-green);
            filter: brightness(85%);
        }
        
        .container{
            width: 1600px;
            margin: auto;
        }
        
        .subcontainer{
            width: 85%;
            margin: auto;
        }
        
        #cookies{
            width: 100%;
            position: fixed;
            bottom: 0;
            color: white;
            background-color: #333;
            z-index: 1;
        }
        
        @media(max-width: 1600px){
            .container{
                width: 100%;
            }
        }
        
        @media(max-width:1024px){
            .cookies{
                padding:10px 0;
            }
        }
        #cookies[data-cookie-accepted="true"] {
            display: none;
        }
    </style>
</head>
<body>
    <?php
    if (!isset($_COOKIE['cookieAccepted']) || $_COOKIE['cookieAccepted'] !== 'true'): ?>
        <div id="cookies">
            <div class="container">
                <div class="subcontainer">
                    <div class="cookies">
                        <p>By using our site, you consent to the use of cookies for an improved browsing experience. For more information, check out our <a href="#">Privacy Policy</a>.</p>
                        <form method="post">
                            <div class="cookie-buttons">
                                <button type="submit" class="cookie-button accept-button" name="accept-cookies">Accept</button>
                                <button type="submit" class="cookie-button decline-button" name="decline-cookies">Decline</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</body>
</html>