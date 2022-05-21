<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Agency - Projektet</title>
    <link type="text/css" rel="stylesheet" href="css/common_styling.css">
    <link type="text/css" rel="stylesheet" href="css/projects_styling.css">
</head>

<body>
<?php
    include("common/header.php");
    ?>
    <main>
        <div class="app1">
            <div class="app_description1">
                <h1>Rindle</h1>
                <h2>Nj&euml; m&euml;nyr&euml; e re p&euml;r menaxhimin e detyrave brenda biznesit tuaj.</h2>
                <p>Me Rindle, menaxhimi i detyrave tuaja nuk ka qen&euml; kurr&euml; m&euml; i leht&euml;. <br> Ky
                    aplikacion ju mund&euml;son
                    q&euml; ju t&euml; shtoni, t&euml; largoni, apo t&euml; p&euml;rfundoni detyrat me vet&euml;m
                    nj&euml; klikim.
                </p>
                 <div class="button">
                    <button onclick="window.open('application.html','_blank')" class="read">Lexo më shumë</button>
                </div>
            </div>
            <div class="img1">
                <img src="images/app1_Rindle.png" width="300" height="350" alt="Foto e aplikacionit Rindle">
            </div>
        </div>
        <div class="app2">
            <div class="img2">
                <img src="images/app2_PalateWizards.png" width="300" height="350"
                    alt="Foto e aplikacionit Palate Wizards">
            </div>
            <div class="app_description2">
                <h1>Palate Wizards</h1>
                <h2>P&euml;rdorni telefonin tuaj për t&euml; skanuar nj&euml; ver&euml;, birr&euml; ose ndonj&euml; pije
                    tjet&euml;r alkoolike dhe p&euml;r ta gjetur at&euml; tek shit&euml;si juaj i preferuar. </h2>
                <p>Ky aplikacion ju mund&euml;son shit&euml;sve t&euml; kuptojn&euml; m&euml; mir&euml; k&euml;rkesat
                    dhe preferencat e konsumator&euml;ve si dhe leht&euml;son gjetjen e pijeve t&euml; tyre t&euml;
                    preferuara p&euml;r bler&euml;sit. Palate Wizards p&euml;rfshin t&euml; gjitha bizneset q&euml;
                    ofrojn&euml; pije alkoolike brenda Kosov&euml;s.</p>
                 <div class="button">
                    <button onclick="window.open('application.html','_blank')" class="read">Lexo më shumë</button>
                </div>
            </div>
        </div>
        <div class="app3">
            <div class="app_description1">
                <h1>Dine Market</h1>
                <h2>Sigurimi i ushqimit n&euml; m&euml;nyr&euml; t&euml; leht&euml; dhe t&euml; duhur. Kontrolloni
                    kalorit&euml; e ushqimit tuaj dhe porosisni me vet&euml;m nj&euml; klikim. </h2>
                <p>Tregu n&euml; celularin tuaj, p&euml;r ushqim e pije t&euml; ndryshme. P&euml;rdorni filterat e
                    personalizuar p&euml;r navigim t&euml; shpejt&euml;. Karta e blerjes &euml;sht&euml; e leht&euml;
                    p&euml;r p&euml;rdorim dhe Dine Market ju ofron sh&euml;rbim n&euml; &ccedil;do koh&euml;, 24/7.</p>
                 <div class="button">
                    <button onclick="window.open('application.html','_blank')" class="read">Lexo më shumë</button>
                </div>
            </div>
            <div class="img3">
                <img src="images/app3_DineMarket.png" width="300" height="350" alt="">
            </div>
        </div>
        <div class="globload" id="loading">
            <p class="text">More projects to come... </p>
            <svg width="40" height="40" viewBox="0 0 40 40">

                <polygon points="0 0 0 40 40 40 40 0" class="rect"></polygon>
            </svg>
        </div>
        <section class="table_video">
            <div class="table">
                <table id="statistics" >
                    <thead>
                        <tr>
                            <th colspan="4">
                                Statistikat e p&euml;rdorimit t&euml; disa aplikacioneve tona
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Aplikacioni</th>
                            <th>Kategoria</th>
                            <th>P&euml;rdorimi gjat&euml; vikendit</th>
                            <th>P&euml;rdorimi gjat&euml; dit&euml;ve t&euml; jav&euml;s</th>
                        </tr>
                        <tr>
                            <td>Rindle</td>
                            <td>Produktivitet</td>
                            <td>12&#37;</td>
                            <td>35&#37;</td>
                        </tr>
                        <tr class="row">
                            <td>Palate Wizards</td>
                            <td>Ushqim &#38; Pije</td>
                            <td>45&#37;</td>
                            <td>19&#37;</td>
                        </tr>
                        <tr>
                            <td>Dine Market</td>
                            <td>Blerje</td>
                            <td>38&#37;</td>
                            <td>27&#37;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <?php
    include("common/footer.php");
    ?>
    <script type="text/javascript" src="js/changeBackgrund.js"></script>
</body>

</html>
