//hier wird festgelegt, um was für eine Datei Art es sich handelt in dem Dokument. da immer die höchste Datei angebegen wird und php über html steht, wird trotzdem php angegeben
<!DOCTYPE html>
//
<html lang="de">
<head>
    <title>Bilder hochladen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">

</head>

<body>

<div id="scrollbereich">

        <header>
            <h2><strong>Speicher hier die Bilder deiner Lieblinge</strong></h2>
        </header>

        <p> Lorem ipsum dolor sit amet, aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

            Duis autem vel eum  </p>

    <img id="rechts" src="https://cdn.pixabay.com/photo/2017/08/12/16/14/cat-2634641_960_720.png"/>

        <img id="links" src="http://ekladata.com/-WzPJzH8EGmgAJKt4VJ4mQp7boI.png">

        <img id="mitte" src="http://pluspng.com/img-png/hamster-png-hd-mouse-animal-free-png-image-1250.png">

        <section id="demo"></section>

    <form action="/uploads" method="get" id="form1">
            <label>Titel des Bildes:</label>
            <input type="text" name="titel" maxlength="35">

            <label for="file"><type="file"></type></label>
            <input type="file" id="file" style="border: 1px solid black;
					background: #ccccff">

        <button type="submit" form="form1" value="Submit"><a>Bild abschicken</a></button>
        </form>

        <p>Es sind nur Formate wie .jpg .gif und .png gültig</p>

    <?php
    echo "<pre>";
print_r ( $file );
?>
</body>

</html>