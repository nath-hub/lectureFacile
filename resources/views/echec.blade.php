<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.cinetpay.com/seamless/main.js"></script>
   
   
</head>

<body id="bod">
    <div id="fore">
        <div id="container" Align="center">

                <img src="image/logo_sans_texte.png" alt="" class="logo">

            <h1 class="title">Une erreur s'est produite</h1>

            <div class="message">
                <p>
                    Il semble que votre solde soit insuffisant! <br/>
                    Rechargez votre compte et réessayez
                </p>
                
                <div class='buttons'>
                    <input type="button" onclick="sendDataToReactNativeApp()" value="Retour" class='button1'>
                    <input type="button" onclick="sendDataToReactNativeApp()" value="Okay" class='button2'>
                </div>
                
               <script>
                    const sendDataToReactNativeApp = async() => {
                        window.ReactNativeWebView.postMessage('echec');
                    }
                </script>
            </div>

        </div>
    </div>
  
    <style>
        body{
            margin-top: 90px;
            display: flex;
            justify-content: center;
        }
        .logo{
            border: 2px solid silver;
            border-radius: 100%;
            width: 150px;
            height: 150px;
        }
        .title{
            font-size: 30px;
            color: red;
        }
        .message{
            font-size: 20px;
            margin-top: 50px
        }
        .buttons{
            display: 'flex';
            justify-content: 'space-between';
            margin-top: 60px;
        }
        .button1{
            padding: 10px;
            color: #fff;
            background-color: #0475FD;
            border-radius: 5px;
            padding-left: 30px;
            padding-right: 30px;
            font-size: 18px;
            border: 0px
        }
        .button2{
            padding: 10px;
            color: #fff;
            background-color: #37B27D;
            border-radius: 5px;
            padding-left: 30px;
            padding-right: 30px;
            font-size: 18px;
            border: 0px
        }
    </style>
</body>

</html> 