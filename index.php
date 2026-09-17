<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/felix-2" rel="stylesheet">
                
    <title>Open dag site</title>
</head>
<body>
    <header> 
        <h1 class="title">Software Developer</h1>
    </header>
    <div class="navbar">
        <nav>
            <a href="#levels">Levels</a>
            <a href="#versnellen">Versnellen</a>
            <a href="#rooster">Rooster</a>
        </nav> 
    </div>
        <?php

        $dir = __DIR__ . "/Fotos_locaties/*.jpg";
        $images = glob($dir);

        ?>

    <div>
    <?php 
        
        foreach ($images as $index => $image): ?>
        <?php $filename = basename($image); ?>
        
        <img 
            class="slide"
            src="Fotos_locaties/<?php echo $filename; ?>"
            style="display: <?php echo $index === 0 ? 'block' : 'none'; ?>;"
            width="500"
        >
                
    <?php 


    endforeach; ?>
    </div>

    <script>
        let slides = document.querySelectorAll(".slide");
        let huidigeFoto = 0;

        setInterval(function () {

            
            slides[huidigeFoto].style.opacity = 0;
        setTimeout(function () {
            slides[huidigeFoto].style.display = "none";
            huidigeFoto++;

            if (huidigeFoto >= slides.length) {
                huidigeFoto = 0;
            }
            slides[huidigeFoto].style.display = "block";
            slides[huidigeFoto].style.opacity = 1;
        }, 3000);
            
            

        

            

        }, 6000);
    </script>
    <main id="opleiding">
        <div class="container">
            <div class="box">
                <h2>Fundamentals</h2>
                <p>
                    In Level 1 begin je met de basis van software development.
                    Je leert onder andere websites bouwen met HTML en CSS.
                    Level 1 duurt 24 weken en bestaat uit zes units van vier weken.
                </p>
            </div>

            <div class="box">
                <h2>Modules</h2>
                <p>
                    Tijdens modules verdiep je je vier weken lang in een specifiek onderwerp.
                    Je kunt bijvoorbeeld werken met JavaScript, databases, API's,
                    mobile apps of het online zetten van een webomgeving.
                </p>
            </div>

            <div class="box">
                <h2>Challenges</h2>
                <p>
                    Tijdens challenges werk je drie weken aan een praktijkopdracht.
                    Dit doe je individueel of samen met andere studenten.
                    Je werkt projectmatig in sprints en gebruikt je werk als bewijs
                    voor de leeruitkomsten die je moet aantonen.
                </p>
            </div>

            <div class="box">
                <h2>Professionele Ontwikkeling</h2>
                <p>
                    Tijdens de opleiding ontwikkel je niet alleen je programmeerskills.
                    Je leert ook samenwerken, plannen, communiceren en zelfstandig werken.
                    Daarnaast leer je veilig en verantwoord ontwikkelen en AI op een
                    slimme manier inzetten tijdens je werk.
                </p>
            </div>

            <div class="box" id="levels">
                <h2>De drie levels</h2>

                <p>
                    <strong>Level 1 Fundamentals:</strong>
                    Je leert de basis van software development. De leeruitkomsten
                    en de manier waarop je deze moet aantonen worden voor je bepaald.
                </p>

                <p>
                    <strong>Level 2 Professionaliseren:</strong>
                    Je krijgt steeds meer vrijheid. Je kiest zelf modules en leeruitkomsten
                    en bepaalt hoe je kunt bewijzen dat je deze beheerst.
                    Ook worden de challenges complexer en kun je meer op je eigen tempo werken.
                </p>

                <p>
                    <strong>Level 3 Beroepsgericht:</strong>
                    Je gaat richting het echte werkveld. Je loopt stage, werkt aan echte
                    opdrachten en communiceert met externe partijen. In dit level rond je
                    de opleiding ook af met je examinering.
                </p>
            </div>

            <div class="box" id="versnellen">
                <h2>Versnellen</h2>

                <p>
                    De opleiding duurt normaal vier jaar, maar het is mogelijk om
                    de opleiding sneller af te ronden.
                </p>

                <p>
                    Als je in Level 1 al vroeg zelfstandig kunt aantonen dat je
                    leeruitkomsten beheerst en hiervoor goede bewijslast kunt aanleveren,
                    kun je sneller doorstromen. Hierdoor kan de opleiding in sommige
                    gevallen binnen drie jaar worden afgerond.
                </p>
            </div>
        </div>
        <div class="sfeer">
            <section class="realm-section" id="rooster">
                <h2>De sfeer</h2>

                <p>
                    In de klas hangt een gezellige en fijne sfeer.
                    Iedereen kan over het algemeen goed met elkaar opschieten en helpt elkaar bij opdrachten.
                    Er wordt natuurlijk serieus gewerkt, maar er is ook genoeg ruimte voor een grapje.
                    Daardoor is het een prettige klas om in te werken en samen te leren.
                </p>
 
            </section>
        </div>
        <div class="rooster">
            <section class="schedule-section" id="rooster">
                <h2>Hoe ziet een schoolweek eruit?</h2>

                <p>
                    Tijdens een schoolweek wissel je lessen en praktijk af.
                    Je werkt aan programmeren en tools, challenges en professionele
                    ontwikkeling. Daarnaast krijg je vakken zoals Nederlands,
                    Engels, rekenen, burgerschap en loopbaan.
                </p>

                <p>
                    Bij challenges krijg je tijd om projectmatig aan een opdracht
                    te werken. Hierbij krijg je begeleiding en coaching van docenten.
                    Iedere unit eindigt met een reflectieweek waarin je je portfolio
                    voorbereidt, je leeruitkomsten verzamelt en nieuwe leerdoelen opstelt.
                </p>

                <img src="Rooster.png" alt="Voorbeeld van een weekrooster van de opleiding Software Developer">
            </section>
        </div>


       
    </main>
     <footer>
            <div class="copyrightfooter">
                <p>© Software Developer</p>
            </div>
        </footer>
</body>
</html>