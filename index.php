<!DOCTYPE html>
<html lang="de">
<head>
    <title>Bilder hochladen</title>
    <!-- hier wird der angezeigte Name der Website festgelegt
    er wird außerdem als Titelleiste des Tabs, als Standardname beim Lesezeichen (außer man nennt ihn um),
    im Verlauf des Browsers und als Überschrift von Einträgen in Suchmaschinen
    in " " steht der besagte angezeigte Text
    sollte nicht so lang sein (70 höchstens (bei Anzeige bei Google)) -->
    <meta charset="utf-8">
    <!-- meta enthält zusätzliche Informationen von anderen Daten
    sollen das verwalten des Dateiinhalts erleichtern
    setzt sich zumindest aus Attributen zu Eigenschaft und Inhalt zusammen
    charset legt die Zeichenkodierung für die Dateien fest
    utf-8 ist ein Unicode, der besonders für westliche Sprachen genutzt wird. Enthält deutsche Umlaute (ä, ü, ö ect.) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <!-- meta enthält zusätzliche Informationen von anderen Daten
    viewport bezeichnet den Anzeigenbereich (für mobile Geräte wichtig)
    content beschreibt Metadaten
    initial-scale gibt den Zoom Wert an, 1.0 werden 1:1 dargestellt
    user-scalable=yes zeigt an ob zoomen möglich ist -->
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <!-- link verweist auf eine Seite oder Datei, bzw verknüpft sich damit
    href gibt die url der Seite an, auf die verwiesen wird
    rel wird nur verwendet wenn href vorhanden ist
    gibt Beziehungen zwischen dem aktuellen und einem anderen Dokument an -->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <!-- link verweist auf eine Seite oder Datei, bzw verknüpft sich damit
    href gibt die url der Seite an, auf die verwiesen wird
    rel wird nur verwendet wenn href vorhanden ist
    gibt Beziehungen zwischen dem aktuellen und einem anderen Dokument an -->
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <!-- link verweist auf eine Seite oder Datei, bzw verknüpft sich damit
    rel wird nur verwendet wenn href vorhanden ist
    type bezeichnet den Inhaltstyp
    text wird in einem lesbaren Textzeichenformat angezeigt
    href gibt die url der Seite an, auf die verwiesen wird
    gibt Beziehungen zwischen dem aktuellen und einem anderen Dokument an -->
</head>
<body>
<div id="scrollbereich">
<!-- schließt mehrere Elemte in einem gemeinsamen Bereich ein
es sorgt dafür das der Inhalt in einer neuen Zeile erscheint
div bedeutet division, Abteilung oder Bereich
id bedeutet identity
gibt eine eindeutige ID, mithilfe CSS und JavaScript verwendet werden kann
in CSS muss damit die ID ausgewählt wird, ein # vor, Beispiel #scrollbereich
bei der ID wird zwischen Groß und Kleinschreibung unterschieden
es muss mindestens ein Zeichen und darf keine Leerzeichen, Tabulatoren ect enthalten -->
        <section id="demo">
        <!-- beinhaltet den sichtbaren Kopfteil einer Website oder eines Teils einer Seite
        wird für einleitende Inhalte oder Navigationslink verwendet
        kann mehrmals im Dokument genutzt werden
        enthält meistens mehrere Überschriftelemte (h1- h6), Logo oder Symbol und Autoreniformationen
        kann nicht innerhalb eines footer, adresse oder eines anderen header plaziert werden -->
            <h2>Speicher hier die Bilder deiner Lieblinge</h2>
            <!-- h2 definiert eine Überschrift
            es gibt 6 verschiedene die sich durch die Zahl hinter dem h unterscheiden (Beispiel h2)
            h1 definiert die wichtigste Überschrift
            mit / wird der tag geschloßen (Beispiel /strong) -->

        <!-- beinhaltet den sichtbaren Kopfteil einer Website oder eines Teils einer Seite
        wird für einleitende Inhalte oder Navigationslink verwendet
        kann mehrmals im Dokument genutzt werden
        enthält meistens mehrere Überschriftelemte (h1- h6), Logo oder Symbol und Autoreniformationen
        kann nicht innerhalb eines footer, adresse oder eines anderen header plaziert werden
        das / beschreibt das Ende und ist zwingend erforderlich (Beispiel /header) -->
        <p> Lorem ipsum dolor sit amet, aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Duis autem vel eum  </p>
        <!-- p dient zur Gliederung des Textes
        sorgt für einen Absatz, da Browser Umbrüche in Dokumente ignorieren
        es umfasst einen Textblock, welcher auf der Seite angezeigt wird
        in diesem Falle ist es ein generierter Text namens Lorem Ipsum
        das / beschreibt das Ende (Beispiel /p) -->
    <img id="rechts" src="https://i.imgur.com/X4KPi3Y.png" alt="Hier soll eigentlich ein Hund sein"/>
    <!-- img verknüfpt ein Bild in einer Html Seite
    es benötigt die Attribute src und alt
    id bedeutet identity
    gibt eine eindeutige ID, mithilfe CSS und JavaScript verwendet werden kann
    in CSS muss damit die ID ausgewählt wird, ein # vor, Beispiel #scrollbereich
    bei der ID wird zwischen Groß und Kleinschreibung unterschieden
    es muss mindestens ein Zeichen und darf keine Leerzeichen, Tabulatoren ect enthalten
    src (englisch source für Quelle)
    wird nur durch eine URL identifiziert
    gibt drei verschiedene Möglichkeiten
    alt gibt den alternativen Text an, wenn das Bild nicht angezeigt werden kann -->
        <img id="links" src="http://ekladata.com/-WzPJzH8EGmgAJKt4VJ4mQp7boI.png" alt="Hier soll eigentlich eine Katze sein">
        <!-- img verknüfpt ein Bild in einer Html Seite
        es benötigt die Attribute src und alt
        id bedeutet identity
        gibt eine eindeutige ID, mithilfe CSS und JavaScript verwendet werden kann
        in CSS muss damit die ID ausgewählt wird, ein # vor, Beispiel #scrollbereich
        bei der ID wird zwischen Groß und Kleinschreibung unterschieden
        es muss mindestens ein Zeichen und darf keine Leerzeichen, Tabulatoren ect enthalten
        src (englisch source für Quelle)
        wird nur durch eine URL identifiziert
        gibt drei verschiedene Möglichkeiten
        alt gibt den alternativen Text an, wenn das Bild nicht angezeigt werden kann -->
        <img id="mitte" src="http://pluspng.com/img-png/hamster-png-hd-mouse-animal-free-png-image-1250.png" alt="Hier soll eigentlich ein Hamster sein">
        <!-- img verknüfpt ein Bild in einer Html Seite
        es benötigt die Attribute src und alt
        id bedeutet identity
        gibt eine eindeutige ID, mithilfe CSS und JavaScript verwendet werden kann
        in CSS muss damit die ID ausgewählt wird, ein # vor, Beispiel #scrollbereich
        bei der ID wird zwischen Groß und Kleinschreibung unterschieden
        es muss mindestens ein Zeichen und darf keine Leerzeichen, Tabulatoren ect enthalten
        src (englisch source für Quelle)
        wird nur durch eine URL identifiziert
        es gibt drei verschiedene Möglichkeiten
        alt gibt den alternativen Text an, wenn das Bild nicht angezeigt werden kann -->
        </section>
        <!-- section bedeutet sowas wie Abschnitt
        sorgt für eine Seitenstruktur
        definiert bestimmte Abschnitte des Dokuemntes
        id bedeutet identity
        gibt eine eindeutige ID, mithilfe CSS und JavaScript verwendet werden kann
        in CSS muss damit die ID ausgewählt wird, ein # vor, Beispiel #scrollbereich
        bei der ID wird zwischen Groß und Kleinschreibung unterschieden
        es muss mindestens ein Zeichen und darf keine Leerzeichen, Tabulatoren ect enthalten
        das / beschreibt das Ende (Beispiel /section) -->
    <section>
    <form action="save.php" method="post" name="datei" enctype="multipart/form-data">
    <!-- wird verwendet um Benutzereingaben zu sammeln
    action definiert die Aktion die beim Übermitteln des Formulars ausgeführt werden soll
    sendet normalerweise die Formulardaten an eine Webseite auf dem Server (die man selber angeben muss),
    sobald der Benutzer auf die Schaltfläche klickt
    wenn das action Attribut nicht angegeben wird, wird die Aktion auf die aktuelle Seite gesetzt
    method definiert die Aktion, die beim übermitteln des Formulars ausgeführt werden soll
    wird benutzt um vertrauliche oder persönliche Informationen zu enthalten
    hat keine Größenbeschränkung und kann daher große Datenmengen versenden
    die Formulareinreichungen können nicht als Lesezeichen gespeichert werden
    anforderungen können zwischengespeichert werden
    anfragen verbleiben im Browserverlauf
    anfragen können mit einem Lesezeichen versehen werden
    anfragen sollten niemals im Umgang mit sensiblen Daten verwendet werden
    anfragen haben Längenbeschränkungen
    requests werden nur zum Anfordern von Daten verwendet
    für jedes Eingabefeld muss ein name Attribut gesetzt werden, ansonsten werden diese Daten des Eingabefelds nicht versendet
    es muss mindestens ein Zeichen und darf keine Leerzeichen, Tabulatoren ect enthalten
    enctype gibt an wie die Formulardaten beim Versenden an den Server codiert wird
    kann nur bei der Methode POST verwendet werden
    multipart/form-data = überträgt den Namen und die Datei selbst -->
            <label>Titel des Bildes:</label>
            <!-- label definiert eine Bezeichnung für input
            wird für den Benutzer als nichts besonderes dargestellt
            das / beschreibt das Ende (Beispiel /label)-->
        <label>
        <!-- label definiert eine Bezeichnung für input
        wird für den Benutzer als nichts besonderes dargestellt -->
            <input type="text" name="beschreibung" maxlength="100">
            <!-- input gibt ein Eingabefeld an, in das der Benutzer Daten eingeben kann
            wird in form verwendet um Eingabesteuerelemte zu erklären, mit denen Benutzer Angaben machen oder eingeben können
            type bezeichnet den Inhaltstyp
            text wird in einem lesbaren Textzeichenformat angezeigt
            name gibt einen Namen für das Element an
            kann verwendet werden um mit Java darauf zu verweisen
            maxlength gibt die maximale Anzahl an Zeichen an, die im input zulässig sind -->
        </label>
        <!-- label definiert eine Bezeichnung für input
        wird für den Benutzer als nichts besonderes dargestellt
        type gibt den Typ des anzuzeigenden Elements an
        der Standard Typ ist Text
        file bedeutet zu deutsch Datei
        das / beschreibt das Ende (Beispiel /type)
        das / beschreibt das Ende (Beispiel /label) -->
        <input type="file" name="bild"><br>
        <!-- input gibt ein Eingabefeld an, in das der Benutzer Daten auswählen kann
        wird in form verwendet um Eingabesteuerelemte zu erklären, mit denen Benutzer angaben oder eingeben können
        type bezeichnet den Inhaltstyp
        file definiert den Typ als eine Datei -->
        <button type="submit" value="Submit">Bild abschicken</button>
        <!-- mit diesem Element werden anklickbare Schaltflächen erzeugt, die durch aktionen ausgelöst werden können.
        type bezeichnet den Inhaltstyp
        submit sorgt dafür das etwas gesendet werden soll
        wird verwendet um Benutzereingaben zu sammeln
        value (heißt auf deutsch sowas wie Wert) gibt den Anfangswert des Elements an
        mit a wird ein Abschnitt abgegrenzt welchen man in der css oder php bearbeiten kann, wie in diesem Falle
        das / beschreibt das Ende (Beispiel /button) -->
    </form>
    <!-- wird verwendet um Benutzereingaben zu sammeln
    das / beschreibt das Ende (Beispiel /form) und schließt damit das Dokument -->
    </section>
    <section>
        <p>Es sind nur Formate wie .jpg, .jpeg und .png gültig</p>
        <!-- p sorgen für Textstrukturierungen
        sind Absätze, da Zeilenumbrüche vom Browser nicht unterstützt werden
        die Zeichen innerhalb der > < sind der angezeigte Text -->
    <ul id="galerie">
    <!-- ul ist eine ungeordnete liste
    id bedeutet identity
    gibt eine eindeutige ID, mithilfe CSS und JavaScript verwendet werden kann
    in CSS muss damit die ID ausgewählt wird, ein # vor, Beispiel #scrollbereich
    bei der ID wird zwischen Groß und Kleinschreibung unterschieden
    es muss mindestens ein Zeichen und darf keine Leerzeichen, Tabulatoren ect enthalten -->
    <?php
    $ordner = "uploads";
    $allebilder = scandir($ordner);
    /* Listet Dateien und Verzeichnisse sortiert auf
    scandir gibt ein Array von Dateien und Verzeichnissen des angebgen Verzeichnisses zurück
    Einzeldateien werden dabei in der Variabel abgelegt */
    foreach ($allebilder as $bild) {
    /* foreach funktionieren nur bei Arrays
    werden verwendet um jeden Schlüssel/Wert Paar in einem Array zu durchlaufen */
        $bildinfo = pathinfo($ordner . "/" . $bild);
        /* gibt ein Array zurück, das Informationen über einen Pfad enthält
        Folgende Variablen stehen dann zur Verfügung
        filename = Dateinamen ohne Dateiendung
        dirname = Verzeichnisname
        extension = Dateityp -/endung
        basename = voller Dateiname mit Dateiendung */
        $size = ceil(filesize($ordner . "/" . $bild) / 1024);
        /* ceil rundet auf
        filesize Gibt die Größe der angegebgen Datei zurück
        diese Funktion gibt die Dateigröße in Bytes bei Erfolg oder false bei Fehler zurück
        das  Ergebnis dieser Funktion wird zwischen gespeichert
        Pfad zu der Datei
        / ist ein Verzeichnistrennzeichnen
        . ist ein Verknüpfungsoperator, der Zeichenketten miteinander verbindet
        1024 = Kb , 1048576 = Mb , 1073741824 = Gb */
        if ($bild != "." && $bild != ".." && $bild && $bildinfo['basename'] ){
        /* if führt einen Code aus, wenn eine Bedingung wahr ist
        es wird verhindert das ordner und unterordner angezeigt werden
        != bedeutet ungleich */
            ?>
            <li>
            <!-- li erzeugt eine geordnetete Liste -->
                <a href="<?php echo $bildinfo['dirname'] . "/" . $bildinfo['basename']; ?>">
                <!-- a definiert einen Hyperlink, mit dem von einer zur anderen verlinkt wird
                href gibt das Ziel der Verknüpfung an
                echo gibt etwas wieder
                dirname ist der Verzeichnisname
                / ist ein Verzeichnistrennzeichnen
                . ist ein Verknüpfungsoperator, der Zeichenketten miteinander verbindet
                basename ist der volle Dateiname mit Dateiendung -->
                    <img src="<?php echo $bildinfo['dirname'] . "/" . $bildinfo['basename']; ?>" width="300" alt="Vorschau"/></a>
                    <!-- img src markiert ein Bild
                    damit kann man die URL angeben
                    echo gibt etwas wieder
                    dirname ist der Verzeichnisname
                    / ist ein Verzeichnistrennzeichnen
                    . ist ein Verknüpfungsoperator, der Zeichenketten miteinander verbindet
                    basename ist der volle Dateiname mit Dateiendung
                    width gibt die Höhe an
                    alt gibt eine Alternative an -->
                <span><?php echo $bildinfo['filename']; ?> (<?php echo $size; ?>kb)</span>
                <!-- span (überspannen) kann Texte und andere Inline Elemente enthalten
                 ist dafür das man es mit css formatieren kann -->
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