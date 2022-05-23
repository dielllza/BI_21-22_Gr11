<!DOCTYPE html>
<html lang="en" manifest="about.appcache">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Agency - Për Ne</title>
    <link type="text/css" rel="stylesheet" href="css/common_styling.css">
    <link type="text/css" rel="stylesheet" href="css/about_styling.css">
</head>

<body>
<?php
    include("common/header.php");
    ?>

    <main>
        <div class="motto" id="motto">
            <h1 style="text-align: center;">Ne dizajnojmë aplikacione bashkëkohore, që u ndihmojnë përdoruesve dhe zgjerojnë biznesin tuaj.</h1>
        </div>

        <div class="company-intro">
            <div class="svg-triangle">
                <svg>
                    <polygon points="200, 10, 200, 130, 70, 65"/>
                </svg>
            </div>
            <div class="company-desc">
                <p><?php printf("Që nga viti %u, agjencisë sonë i është besuar për të ndihmuar në konceptimin, krijimin dhe prodhimin e produkteve të 
                    ndryshme dixhitale për disa nga markat, agjencitë dhe kompanitë kryesore vendore. Ne kemi %u vite përvojë në krijimin e
                    aplikacioneve tërheqëse për përdoruesve dhe që njëkohësisht rrisin biznesin tuaj në një nivel të ri.", 2010, 8) ?> Agjencia jonë
                    përmes <a href="#learn-more"><u>metodave më të njohura</u></a> siguron zhvillim të produkteve që janë në hap me teknologjitë e fundit.</p>
            </div>
        </div>

        <div class="responsibilities">
            <div class="grid-header"><h2><?php echo preg_replace("/zhvillimit/i", 'punës','Procesi i ZHVILLIMIT'); ?></h2></div>
            <div class="grid-content">
                <p>Zbulo</p>
                <p>Vërtetimi për vlerën e produktit para se të fillohet zhvillimi.</p>
                <ul>
                    <li>Digital Strategy</li>
                    <li>Industry Analysis</li>
                    <li>User Research</li>
                    <li>Journey Mapping</li>
                    <li>Discovery Workshop</li>
                </ul>
            </div>
            <div class="grid-content">
                <p>Planifiko</p>
                <p>Evoluimi për të përmbushur kërkesat që ndryshojnë.</p>
                <ul>
                    <li>Product Roadmap</li>
                    <li>Prioritised Product Backlog</li>
                    <li>Sprint Backlog</li>
                    <li>Sprint Planning</li>
                    <li>Risk Mitigation</li>
                </ul>
            </div>
            <div class="grid-content">
                <p>Dizajno</p>
                <p>UX dhe UI dizajn që ka në qendër përdoruesin.</p>
                <ul>
                    <li>Design System</li>
                    <li>Wireframing</li>
                    <li>User Experience Design</li>
                    <li>User Interface Design</li>
                    <li>User Testing</li>
                </ul>
            </div>
            <div class="grid-content">
                <p>Zhvillo</p>
                <p>Krijo aplikacione të teknologjisë më të re.</p>
                <ul>
                    <li>iOS
                        <ul>
                            <li>iOS 13</li>
                            <li>iOS 14</li>
                            <li>iOS 15</li>
                        </ul>
                    </li>
                    <li>Android
                        <ul>
                            <li>Android 10</li>
                            <li>Android 11</li>
                            <li>Android 12</li>
                        </ul>
                    </li>
                    <li>Web</li>
                    <li>Quality Assurance</li>
                </ul>
            </div>
            <div class="grid-content">
                <p>Rishiko</p>
                <p>Evaluimi i suksesit të produktit dhe dokumentimi i të gjeturave</p>
                <ul>
                    <li>Agile Retroperspectives</li>
                    <li>User Feedback Loop</li>
                    <li>Product Analysis
                        <ol>
                            <li>Learn the Competition</li>
                            <li>Conduct Research</li>
                            <li>Analyze Product Information</li>
                            <li>Create a Competitive Strategy</li>
                            <li>Continuous Research</li>
                        </ol>
                    </li>
                </ul>
            </div>
            <div class="grid-content">
                <p>Rritu</p>
                <p>Nxjerrja e vlerës nga të dhënat.</p>
                <ul>
                    <li>Product Insights</li>
                    <li>Digital Strategy</li>
                    <li>Prioritised Product Backlog</li>
                    <li>Sprint Backlog</li>
                    <li>Sprint Planning</li>
                </ul>
            </div>
        </div>

        <div class="learn-more" id="learn-more">
            <p><?php
                $array = preg_split('/-/', 'Më-shumë-rreth-qasjes-sonë-për-zhvillim-të-aplikacioneve...');
                echo implode(" ", $array);?>
            </p>
            <div class="videos">
                <div class="agile-video">
                    <video width="560" height="315" controls>
                        <source src="videos/Design Systems and Their Benefits.mp4" type="video/mp4">
                        Shfletuesi juaj nuk e mbështet elementin video.
                    </video>
                </div>
                <div class="design-system-video">
                    <video width="560" height="315" controls>
                        <source src="videos/What is Agile Methodology.mp4" type="video/mp4">
                        Shfletuesi juaj nuk e mbështet elementin video.
                    </video>
                </div>
            </div>
        </div>

        <div class="freelancer-vs-agency">
            <table>
                <caption><em>Avantazhet e agjencisë së aplikacioneve ndaj një freelancer</em></caption>
                <thead>
                    <tr>
                        <th>Freelancer</th>
                        <th>Agjenci</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <ul>
                                <li>Efektiv për nga kosto por përfshin rreziqe.</li>
                                <li>Cmimi i ulët për orë nuk nënkupton se cmimi i përgjithshëm do të jetë i ulët.</li>
                                <li>Ka ekspertizë në një fushë specifike dhe ka njohuri të limituara.</li>
                                <li>Mungesa e eksperiencës dhe udhëheqjes.</li>
                                <li>Stil monoton i të punuarit.</li>
                                <li>Mund të mos kuptojë kompleksitetin e produktit tuaj</li>
                                <li>Jo gjithmonë mund të ju ofrojë përditësime me kohë.</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Ju ofron produktin më të mirë për paratë tuaja.</li>
                                <li>Më mirë është të paguani një agjenci sesa qindra freelancers.</li>
                                <li>Ka një ekip të tërë me ekspertë të fushave të ndryshme duke punuar në projektin tuaj.</li>
                                <li>Udhëheqësit teknik me eksperiencë janë gjithmonë prezent për të ofruar udhëzime.</li>
                                <li>Gjithmonë sjell dicka unike.</li>
                                <li>Menaxherët/udhëheqësit e produkteve kuptojnë nevojat tuaja dhe punojnë sipas procesit tuaj të mendimit.</li>
                                <li>Ju mbajnë të përditësuar.</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <?php
    include("common/footer.php");
    ?>
</body>

</html>