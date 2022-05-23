<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Agency - Kontakt</title>
    <link type="text/css" rel="stylesheet" href="css/common_styling.css">
    <link type="text/css" rel="stylesheet" href="css/contact_styling.css">

    <style>
        .user-location-container {
            padding: 1em;
            display: flex;
            gap: 1em;
            flex-direction: column;
            align-items: center;
        }
        
        #find-location-button {
            top: 5%;
            padding: 0.5em;
            background-color: lightgray;
            border-radius: 10%;
        }

        .contact-form {
            position: relative;
        }

        .radio_butonat {
            padding: 0.5em;
            border-bottom: 1px solid black;
        }

        .checkbox {
            padding-top: 0.5em;
        }
    </style>
    <script src="js/jquery.js"></script>
</head>

<body>
<?php
    include("common/header.php");
    ?>
    <main>
        <div class="contact">
            <h1>
                <canvas id="canvas">
                    Kontakti
                </canvas>
            </h1>
            <p id="intro">
               <?php
                $text2 = "Nwse keni ndonjw pyetje, njw anwtar i stafit do tw jetw gjithmonw i gatshwm tw ju ndihmojw. Mos ngurroni tw na kontaktoni me telefon ose email dhe ne do tw sigurohemi qw t'ju kontaktojmw sa mw shpejtw tw jetw e mundur.";
                    echo str_replace("w","ë",$text2);
               ?>
            </p>
        </div>
        <div class="contact-us">
            <div class="info-form">
                <div class="contact-Info">
                    <div class="email1">
                        <img src="images/mail.jpg" alt="" style="width:2em; height: 2em;">
                        <div>
                            <h2>Email:</h2>
                            <p>
                                <a class="mailTO" href="mailto:someone@example.com"> someone@example.com </a>
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="tel">
                        <p>
                            <img src="images/phonelogo.jpg" alt="" style="width: 2em; height: 2em;">
                        </p>
                        <h2>
                            Numri i telefonit:
                        </h2>
                        <p>
                            0113 288 6000
                        </p>
                    </div>
                    <div class="location">
                        <img src="images/location.png" alt="" style="width:2em; height: 2em;">
                        <div>
                            <h2>Lokacioni:</h2>
                            <p><a href="https://www.google.com/maps/place/Statue+of+Bill+Clinton/@42.6629138,21.1655028,13z/data=!4m13!1m7!3m6!1s0x13549ee605110927:0x9365bfdf385eb95a!2sPristina!3b1!8m2!3d42.6629138!4d21.1655028!3m4!1s0x0:0x9f9ca7c7ab182591!8m2!3d42.6540046!4d21.1532146">Prishtine</a>
                            </p>
                            <p>E hene - e premte : 08:00-20:00</p>
                        </div>
                    </div>
                    <div class="user-location-container">
                        <button id="find-location-button" type="button" onclick="showLocation();"><b>Shfaq lokacionin
                                tim:</b></button>
                        <div id="user-location" style="width: 500px; height: 350px; padding: 1em"></div>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="myform" onsubmit="return validate()">
                        <div class="firstname-lastname">
                            <div class="firstname">
                                <label>Emri</label>
                                <input type="text" required placeholder="Emri juaj.." id="name">
                            </div>
                            <div class="last-name">
                                <label>Mbiemri</label>
                                <input type="text" required id="lastname" name="lastname" placeholder="Mbiemri juaj..">
                            </div>
                        </div>
                        <label>Email</label>
                       <input type="text" id="contact_email" required name="email" placeholder="someone@example.com">
                        <!--ose email-->
                        <div class="phone-time">
                            <div class="phone">
                                <label>Tel:</label>
                                <input type="text" required id="phone" name="phone" placeholder="xxxxxxxxx" pattern="[0-9]{9}">
                            </div>
                            <div class="time">
                                <label>Koha per zhvillim te produktit:</label>
                                <select required id="times">
                                    <option value="1-2 javë">1 jave</option>
                                    <option value="3-4 javë">2 jave</option>
                                    <option value="1-2 muaj">1-2 muaj</option>
                                    <option value="Më shumë se 2 muaj">Me shume se 2 muaj</option>
                                </select>
                            </div>
                        </div>
                        <label for="link"> <abbr title="Uniform Resource Locator">URL</abbr> i LinkedIn personal
                            (opsional) :
                        </label>
                        <input id="link" type="text" placeholder="https://" name>

                        <label for="message">Përshkrimi i idesë suaj:</label>
                        <textarea required placeholder="Ideja juaj këtu.." id="message" rows="7"></textarea>
                        <div class="radio_butonat">
                            <p>
                                Zgjidhni atë që ju përshtatet më mirë:</p>
                            <input type="radio" required name="profesioni" value="Unë jam një biznes i vogël">
                            <label>Unë jam një biznes i vogël </label><br>
                            <input type="radio" name="profesioni" value="Unë jam një biznes i mesëm">
                            <label>Unë jam një biznes i mesëm</label><br>
                            <input type="radio" name="profesioni" value="Unë jam një kompani sipërmarrjeje">
                            <label>Unë jam një kompani sipërmarrjeje</label>
                        </div>
                        <div class="radio_butonat">
                            <p>Cili është buxheti juaj aktual në dispozicion?</p>
                            <input type="radio" required name="cost" value="1000-5000">
                            <label>1000-5000</label><br>
                            <input type="radio" name="cost" value="5000-10000">
                            <label>5000-10000</label><br>
                            <input type="radio" name="cost" value="me shume se 10000">
                            <label> me shume se 10000</label>
                        </div>
                        <div class="radio_butonat">
                            <p>Si financohet produkti juaj?</p>
                            <input type="radio" required name="finance" value="Vetë-financuar">
                            <label>Vetë-financuar</label><br>
                            <input type="radio" name="finance" value="Në proces të mbledhjes së fondeve">
                            <label>Në proces të mbledhjes së fondeve</label><br>
                            <input type="radio" name="finance" value="Financimi tashmë është siguruar nëpërmjet investitorëve">
                            <label> Financimi tashmë është siguruar nëpërmjet investitorëve
                            </label><br>
                            <input type="radio" name="finance" value="Nuk jam i sigurt për momentin">
                            <label> Nuk jam i sigurt për momentin</label>
                        </div>
                        <div class="checkbox">
                            <label class="privacy-policy">
                                <input type="checkbox" 
                                       name="privacy-policy-agreement" 
                                       value="check" required>
                                Pajtohem me kushtet e privatësisë.
                          </label>
                        </div>
                        <div class="submitButton">
                            <input type="submit" id="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php
    include("common/footer.php");
    ?>
    <script>
        var g = document.getElementById("canvas");
        var kontakt = g.getContext("2d");
        var gradient = kontakt.createLinearGradient(1, 1, g.width, 1);
        gradient.addColorStop("0", "black");
        gradient.addColorStop("0.5", "blue");
        gradient.addColorStop("1.0", "black");
        kontakt.font = "1em sans-serif";
        kontakt.strokeStyle = gradient;
        kontakt.strokeText("Kontakti", 10, 50);

        var text = document.getElementById('intro');
         text2 = "Nwse keni ndonjw pyetje, njw anwtar i stafit do tw jetw gjithmonw i gatshwm tw ju ndihmojw. Mos ngurroni tw na kontaktoni me telefon ose email dhe ne do tw sigurohemi qw t'ju kontaktojmw sa mw shpejtw tw jetw e mundur."
       // var result = text.innerHTML.replace(/w/gi, 'ë');
        //text.innerHTML = result;

        function validate() {
            const emailValid = (email) => {
                const emailRegex = /^([A-Za-z0-9-.])+@([A-Za-z0-9-.])+.([A-Za-z]{2,4})$/;
                return emailRegex.test(email);
            }
            const urlValid = (link) => {
                const URLRegex = (/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
                return URLRegex.test(link);
            }
            const nameValid = (name) => {
                const nameRegex = /[A-Za-z]/;
                return nameRegex.test(name);
            }
            const lastnameValid = (lastname) => {
                const lastnameRegex = /[A-Za-z]/;
                return lastnameRegex.test(lastname);
            }

            const messageValid = (message) => {
                const messageRegex = /\s/g;
                const result = message.trim().match(messageRegex);
                return result === null || result.length < 50;
            }

            var name = document.getElementById('name');
            var lastname = document.getElementById('lastname');
            var email = document.getElementById('contact_email');
            var message = document.getElementById("message");
            console.log(!nameValid(name.value));
            if (!nameValid(name.value)) {
                alert("Ju lutem shkruani nje emer valid.");
                name.focus();
                return false;
            }
            if (!lastnameValid(lastname.value)) {
                alert("Ju lutem shkruani nje mbiemer valid.");
                lastname.focus();
                return false;
            }
            if (!emailValid(email.value)) {
                console.log(email);                console.log(email.value);
                alert("Ju lutem shkruani email-in valid.");
                email.focus();
                return false;
            }
            if (!urlValid(link.value)) {
                alert("Ju lutem shkruani nje URL valide");
                link.focus();
                return false;
            }
            if (!messageValid(message.value)) {
                alert("Ju lutem shkruani te pakten 50 fjale. Ju keni shkruar " + (message.innerHTML.match(messageRegex)).length) + " fjale";
                message.focus();
                return false;
            }

            alert("Forma juaj eshte pranuar");
            return true;
        }
    </script>

    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script>
        function showLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showMap, showError);
            } else {
                alert("Na vjen keq, shfletuesi juaj nuk e mbështet HTML5 Geolocation.");
                throw new Error("Na vjen keq, shfletuesi juaj nuk e mbështet HTML5 Geolocation.");
            }
        }

        //Definimi i funksionit callback për tentim të suksesshëm
        function showMap(position) {
            latitude = position.coords.latitude;
            longitude = position.coords.longitude;
            var latitudeLongitude = new google.maps.LatLng(latitude, longitude);

            var myOptions = {
                center: latitudeLongitude,
                zoom: 16,
                mapTypeControl: true,
                navigationControlOptions: {
                    style: google.maps.NavigationControlStyle.SMALL
                }
            }

            var map = new google.maps.Map(document.getElementById("user-location"), myOptions);
            var marker = new google.maps.Marker({
                position: latitudeLongitude,
                map: map,
                title: "Ju jeni këtu!"
            });
        }

        //Definimi i funksionit callback për tentim të dështuar
        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    alert("Kërkesa për Geolocation është refuzuar nga përdoruesi.");
                    break;
                case error.POSITION_UNAVAILABLE:
                    alert("Informata për lokacionin nuk është e qasshme.");
                    break;
                case error.TIMEOUT:
                    alert("Kërkesa për të gjetur lokacionin dështoi sepse u kalua koha e paraparë për procedurë.")
                    break;
                case error.UNKNOWN_ERROR:
                    alert(x.innerHTML = "Procedura dështoi nga një error i panjohur.")
                    break;
            }
        }
    </script>
</body>

</html>
