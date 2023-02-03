<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.cinetpay.com/seamless/main.js"></script>
   
   
</head>

<body>
    <div>
        <div id="container" Align="center">

               <img src="image/logo_sans_texte.png" alt="" class="logo"/>

            <h1 class="title">Paiement éffectué avec succèss !</h1>

            <div class="message">
                <p>
                    Vous venez de payer une somme de 3500FCFA pour avoir un abonnement d'un an
                    afin d'utiliser l'application <span style='color: #FD8C04; font-weight: bold'>Lecture Facile</span>.
                    Veuillez confirmer votre abonnement.
                </p>
                
                <input type="button" onclick="sendDataToReactNativeApp()" value="Confirmer l'abonnement" class='button'>
            </div>

                 <script>
                    const sendDataToReactNativeApp = async() => {
                        window.ReactNativeWebView.postMessage('success');
                    }
                </script>
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
            font-size: 26px;
            color: #37B27D;
        }
        .message{
            font-size: 20px;
            margin-top: 50px
        }
        .button{
            padding: 10px;
            color: #fff;
            background-color: #0475FD;
            border-radius: 5px;
            padding-left: 30px;
            padding-right: 30px;
            font-size: 17px;
            border: 0px;
            margin-top: 40px;
        }
    </style>
</body>

</html> 