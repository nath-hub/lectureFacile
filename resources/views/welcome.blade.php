<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.cinetpay.com/seamless/main.js"></script>
    <style>
        .sdk {
            display: block;
            position: absolute;
            background-position: center;
            text-align: center;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <script>
        function checkout() {
            CinetPay.setConfig({
                apikey: '132818851663726cf5873ff5.18180792',//   YOUR APIKEY
                site_id: '760074',//YOUR_SITE_ID
                notify_url: 'http://mondomaine.com/notify/',
                mode: 'PRODUCTION'
            });
            CinetPay.getCheckout({
                transaction_id: Math.floor(Math.random() * 100000000).toString(),
                amount: 3500,
                currency: 'XAF',
                channels: 'ALL',
                description: 'Test de paiement',   
                 //Fournir ces variables pour le paiements par carte bancaire
                customer_name:"Joe",//Le nom du client
                customer_surname:"Down",//Le prenom du client
                customer_email: "down@test.com",//l'email du client
                customer_phone_number: "088767611",//l'email du client
                customer_address : "BP 0024",//addresse du client
                customer_city: "Antananarivo",// La ville du client
                customer_country : "CM",// le code ISO du pays
                customer_state : "CM",// le code ISO l'état
                customer_zip_code : "06510", // code postal

            });
            CinetPay.waitResponse(function(data) {
                if (data.status == "REFUSED") {
                         window.location.href="https://lecturefacile.ubix-group.com/public/index.php/api/echec";
                         
                } else if (data.status == "ACCEPTED") {
                    window.location.href="https://lecturefacile.ubix-group.com/public/index.php/api/reussite";
                }
            });
            CinetPay.onError(function(data) {
                console.log(data);
            });
        }
    </script>
</head>

<body id="bod">
    <div id="fore">
        <div id="container" Align="center">

            <img src="image/logo_sans_texte.png" alt="" class="logo"/>

            <h1 class="title">Page de pré-paiement</h1>

            <div class="message">
                <p>
                    En cliquant sur le boutton ci-dessous, vous serez redirigé vers une page dans laquelle
                    vous devrez choisir le mode de paiement (<span style='font-weight: bold;'>Orange money</span> ou
                    <span style='font-weight: bold;'>MTN mobile money</span>) afin de payer le 
                    montant exclusif de <span style='font-weight: bold; color: #FD8C04;'>3500 FCFA</span>.
                </p>
                

                <input type="submit" onclick="checkout()" value="Procéder au paiement" class='button'>
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
            font-size: 28px;
            color: #0475FD;
        }
        .message{
            font-size: 18px;
            margin-top: 60px
        }
        .button{
            padding: 10px;
            color: #fff;
            background-color: #0475FD;
            border-radius: 5px;
            padding-left: 30px;
            padding-right: 30px;
            font-size: 16px;
            margin-top: 25px;
            border: 0px
        }
    </style>
</body>

</html> 