<!DOCTYPE html>
<html lang="de">
<head>
    <!-- gibt den Namen der Website an -->
    <title>Bilder hochladen</title>
    <!-- dadurch wird die westliche Sprache angezeigt und enthält deutsche Umlaute -->
    <meta charset="utf-8">
    <!-- es wird auf mobilen Geräten zoomen erlaubt, der Größe des Geräts angepasst und legt die Zoomstufe (beim ersten laden) fest -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <!-- gibt die angezeigte Schriftart an -->
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <!-- gibt die andere angezeigte Schriftart an -->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <!-- damit wird die css eingebunden und in der Website auch dargestellt -->
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
</head>
<body>
<!-- schließt den scollbereich ein, welcher in css definiert wurde -->
<div id="scrollbereich">
    <header>
        <!-- gibt den sichtbaren Text als Überschrift aus -->
        <h2>Speicher hier die Bilder deiner Lieblinge</h2>
    </header>
    <section>
        <!-- soll nur ein Platzhalter -->
        <p> Lorem ipsum dolor sit amet, aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
            ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
            dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita
            kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Duis autem vel eum </p>
        <!-- zeigt auf der rechten Seite der Website, durch der definition in css, das Bild an -->
        <img id="rechts" src="https://i.imgur.com/X4KPi3Y.png" alt="Hier soll eigentlich ein Hund sein"/>
        <!-- zeigt auf der linken Seite der Website, durch der Definition in css, das Bild an -->
        <img id="links" src="http://ekladata.com/-WzPJzH8EGmgAJKt4VJ4mQp7boI.png" alt="Hier soll eigentlich eine Katze sein">
        <!-- zeigt unterhalb des Platzhalters auf der Website in der Mitte, durch der Definition in css, das Bild an -->
        <img id="mitte" src="http://pluspng.com/img-png/hamster-png-hd-mouse-animal-free-png-image-1250.png"
             alt="Hier soll eigentlich ein Hamster sein">
    </section>
<!-- ein neuer Abschnitt für das Formular -->
    <section>
        <!-- das Formular und die Daten werden an die save.php datei versendet und dort weiter verarbeitet -->
        <form action="save.php" method="post" name="datei" enctype="multipart/form-data">
            <!-- dieser Text steht vor dem Eingabefeld -->
            <label>Titel des Bildes:</label>
            <label>
                <!-- das Eingabefeld was ausgefüllt werden muss und maximal nur 100 Zeichen erlaubt -->
                <input type="text" name="beschreibung" maxlength="100" required>
            </label>
            <!-- erstellt ein Button indem der Benutzer eine Datei auswählen muss -->
            <input type="file" accept="image/*" name="bild" required><br>
            <!-- erstellt einen Button mit dem das Formular abgesendet wird -->
            <button type="submit" value="Submit">Bild abschicken</button>
        </form>

    </section>
    <section>
        <p>Es sind nur Formate wie .jpg, .jpeg .gif und .png gültig</p>
        <!-- das was innerhalb vom p tag steht, wird nur angezeigt, wenn im Array der String gefunden wurde und gleichzeitig wird der $_GET Parameter ausgewertet -->
        <?php if (array_key_exists('wrongExtension', $_GET)) { ?>
            <p>Datei wurde nicht gespeichert, weil die Endung falsch ist</p>
        <?php } ?>
        <!-- das was innerhalb vom p tag steht, wird nur angezeigt, wenn im Array der String gefunden wurde und gleichzeitig wird der $_GET Parameter ausgewertet -->
        <?php if (array_key_exists('saveError', $_GET)) { ?>
            <p>Datei konnte nicht gespeichert werden!</p>
        <?php } ?>
        <!-- das was innerhalb vom p tag steht, wird nur angezeigt, wenn im Array der String gefunden wurde und gleichzeitig wird der $_GET Parameter ausgewertet -->
        <?php if (array_key_exists('saveOK', $_GET)) { ?>
            <p>Datei erfolgreich gespeichert</p>
        <?php } ?>
        <!-- hier werden die Bilder in einer ungeordneten Liste angezeigt -->
        <ul id="galerie">

            <?php
            $ordner = "uploads";
            /* liest den Ordner uploads aus und sortiert diesen */
            $allebilder = scandir($ordner);
            /* dürchläuft eine Schleife */
            foreach ($allebilder as $bild) {
                /* gibt die nötige Information (Name und Dateipfad) über die Dateien im Ordner */
                $bildinfo = pathinfo($ordner . "/" . $bild);
                /* gibt die Größe des Bildes */
                $size = ceil(filesize($ordner . "/" . $bild) / 1024);
                /* es wird verhindert das ordner und unterordner angezeigt werden */
                if ($bild != "." && $bild != ".." && $bild && $bildinfo['basename']) {

                    ?>
                    <!-- erzeugt eine geordnetete Liste -->
                    <li>
                        <!-- beim klicken auf das Bild, öffnet sich ein Link wo das Bild (mit Name und Größe des Bildes in der Taskleiste) angezeigt wird  -->
                        <a href="<?php echo $bildinfo['dirname'] . "/" . $bildinfo['basename']; ?>">
                            <!-- zeigt das Bild in der angegebenen Größe an -->
                            <img src="<?php echo $bildinfo['dirname'] . "/" . $bildinfo['basename']; ?>" width="400"
                                 alt="Vorschau"/></a>
                        <!-- zeigt den Dateinamen und die Größe (zum Beispiel in kb) an -->
                        <span><?php echo $bildinfo['filename']; ?> (<?php echo $size; ?>kb)</span>

                    </li>

                    <?php
                };
            };
            ?>

        </ul>
    </section>
</div>
</body>

</html>