<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Agency - Rindle</title>
    <link type="text/css" rel="stylesheet" href="css/common_styling.css">
    <link type="text/css" rel="stylesheet" href="css/application.css">

</head>

<body>
<?php
    include("common/header.php");
    ?>
    <main>
        <div class="intro">
            <h1>rindle</h1>
            <h2>Një mënyrë e re per menaxhimin e detyrave në biznesin tuaj.</h2>
        </div>
        <section class="description">
            <div class="challenge">
                <div class="text">
                    <h1>Sfida</h1>
                    <p>
                        Misioni ynë: të rindërtojmë një produkt web shumë të dobishëm e kompleks, në një
                        produkt celular të pastër, interaktiv dhe po aq të dobishëm. Me aplikacionin Rindle ju keni
                        tabela, lista dhe karta, të gjitha të destinuara për të ndihmuar me menaxhimin e detyrave në një
                        mënyrë shumë <mark>'user-friendly'</mark> për përdoruesit dhe duke kursyer kohë. Ishte një sfidë
                        që ne e
                        pranuam me
                        kënaqësi: përshtatja e veçorive të aplikacionit në ueb me një aplikacion celular. Dizajni UI/UX
                        i përshtatshëm për markën Rindle: i pastër, por me ngjyra dhe i gjallë.
                    </p>
                </div>
                <div class="image">
                    <figure>
                        <img src="images/web-to-mobile.jpg" width="400" height="250" alt="Web to mobile application">
                        <figcaption>Fig.1. Kalimi nga web në një user-friendly aplikacion mobil.</figcaption>
                    </figure>
                </div>
            </div>
            <div class="solution">
                <div class="image">
                    <figure>
                        <img src="images/app_solution.png" width="300" height="300" alt="Pamje nga aplikacioni">
                        <figcaption>Fig.2. Lidhja e aplikacionit me aplikacione të tjera.</figcaption>
                    </figure>
                </div>
                <div class="text">
                    <h1>Zgjidhja</h1>
                    <p>
                        Rindle është një aplikacion celular i menaxhimit të detyrave në mënyrë të shpejtë. Duke ofruar
                        mundësinë
                        për t'u lidhur me Gmail, Google Drive, Google Calendar dhe Slack, ai u mundëson përdoruesve të
                        tij të mbajnë gjurmët e detyrave që presin kujdesin brenda një fronti të unifikuar, të
                        organizuar shumë qartë në celular.
                    </p>
                </div>
            </div>
            <div class="link">
                <span>Keni hasur në probleme gjatë instalimit të këtij aplikacioni?<a
                        href="https://www.librariesni.org.uk/media/gawhske4/apps-using-and-downloading-apps.pdf"> Kliko
                        këtu</a> për ndihmë</span>
            </div>
        </section>
        <section class="user">
            <div class="table">
                <h1>Më shumë informata rreth aplikacionit:</h1>
                <table id="app-info">
                    <thead>
                        <tr>
                            <th>
                                &nbsp;
                            </th>
                            <th colspan="2">
                                App info
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="8">
                                <img src="images/rindle_logo.png" alt="Rindle app logo" width="180" height="100">
                            </td>
                        </tr>
                        <tr>
                            <th>Version</th>
                            <td>3.2</td>
                        </tr>
                        <tr>
                            <th>Updated on</th>
                            <td>30 December 2021</td>
                        </tr>
                        <tr>
                            <th>Downloads</th>
                            <td>500,000</td>
                        </tr>
                        <tr>
                            <th>Download size</th>
                            <td>60.51 MB</td>
                        </tr>
                        <tr>
                            <th rowspan="2">Required software version</th>
                            <td>Android version: 10.0+</td>
                        </tr>
                        <tr>
                            <td>iOS version: 14.0+</td>
                        </tr>
                        <tr>
                            <th>Ratings</th>
                            <td>4.5/5</td>
                        </tr>
                    </tbody>
                </table>
                <h1>This is just an example:</h1>
                <table id="example" border="1px" width="80%"  cellspacing="4" cellpadding="4">
                    
                    <thead>
                      <tr>
                          <th rowspan="2">Heading</th>
                          <th>Students</th>
                          <th colspan="3">Details</th>
                      </tr>
                      <tr>
                         <th>Id</th>
                         <th>Name</th>
                         <th>Department</th>
                         <th>Roll Number</th>
                      <tr>
                    </thead>
                      <tbody>
                        <tr>
                          <td rowspan="4">Student List</td>
                          <td>1</td>
                          <td>Victor</td>
                          <td>Computer Science</td>
                          <td>12345</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Williams</td>
                          <td>Electronics</td>
                          <td>23456</td>
                        </tr>			
                        <tr>
                          <td>3</td>
                          <td>Harry</td>
                          <td>Electrical</td>
                          <td>34567</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Rick</td>
                          <td>Civil</td>
                          <td>45678</td>
                        </tr>			
                      </tbody>
                  </table>

            </div>
            <div class="form">
                <form action="" id="survey">
                    <h1>Anketë rreth përshtypjeve të klientit</h1>
                    <p>Këto të dhëna do të përdoren me qëllimin e përmirësimit të shërbimit tonë.</p>
                    <div>
                        <h4>Sa kohë ka që e përdorni aplikacionin tonë?</h4>
                        <div class="question-answer">
                            <label><input type="radio" value="none" name="using" />Më pak se një javë</label>
                            <label><input type="radio" value="none" name="using" />2-4 javë</label>
                            <label><input type="radio" value="none" name="using" />1-3 muaj</label>
                            <label><input type="radio" value="none" name="using" />Më shumë se 3 muaj</label>
                            <label><input type="radio" value="none" name="using" />Nuk e kam përdor</label>
                        </div>
                    </div>
                    <div>
                        <h4>Sa jeni të kënaqur me shërbimin tonë?</h4>
                        <div class="question-answer">
                            <label><input type="radio" value="none" name="satisfied" />Shumë i kënaqur</label>
                            <label><input type="radio" value="none" name="satisfied" />I kënaqur</label>
                            <label><input type="radio" value="none" name="satisfied" />Neutral</label>
                            <label><input type="radio" value="none" name="satisfied" />I pa kënaqur</label>
                            <label><input type="radio" value="none" name="satisfied" />Shumë i pakënaqur</label>
                        </div>
                    </div>
                    <div>
                        <h4>Cka ju ka lënë më shumë përshtypje rreth produktit?</h4>
                        <div class="question-answer">
                            <label><input type="radio" value="none" name="impressed" />Pamja</label>
                            <label><input type="radio" value="none" name="impressed" />Përdorimi i lehtë</label>
                            <label><input type="radio" value="none" name="impressed" />Mundësitë e ofruara</label>
                            <label><input type="radio" value="none" name="impressed" />Shërbimi ndaj klientit</label>
                        </div>
                    </div>

                    <div>
                        <h4>Cka do të ndryshonit rreth aplikacionit?</h4>
                        <textarea rows="5"></textarea>
                    </div>
                    <div>
                        <h4>Si mund të ndihmoni ju në përmirësimin e këtij aplikaiconi?</h4>
                        <textarea rows="5"></textarea>
                    </div>
                    <div>
                        <h4>Si qëndron produkti ynë në krahasim me produktet tjera të llojit të njëjtë?</h4>
                        <div class="question-answer">
                            <label><input type="radio" value="none" name="offered" />Shumë më mirë</label>
                            <label><input type="radio" value="none" name="offered" />Pak më mirë</label>
                            <label><input type="radio" value="none" name="offered" />Përafërsisht njëjtë</label>
                            <label><input type="radio" value="none" name="offered" />Më keq</label>
                            <label><input type="radio" value="none" name="offered" />Shumë më keq</label>
                        </div>
                    </div>

                    <div>
                        <h4>A do ta rekomandonit aplikacionin tonë tek shoqëria juaj?</h4>
                        <div class="question-answer">
                            <label><input type="radio" value="none" name="recommend" />Definitivisht po</label>
                            <label><input type="radio" value="none" name="recommend" />Ndoshta po</label>
                            <label><input type="radio" value="none" name="recommend" />Nuk jam i sigurtë</label>
                            <label><input type="radio" value="none" name="recommend" />Ndoshta jo</label>
                            <label><input type="radio" value="none" name="recommend" />Definitivisht jo</label>
                        </div>
                    </div>
                    <div class="btn-block">
                        <button type="submit" href="/">Dërgo</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php
    include("common/footer.php");
    ?>
</body>

</html>
