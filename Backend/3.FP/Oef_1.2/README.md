## OEF 1.2 
Bootstrap – Afbeeldingen Steden

Aan de hand van een Bootstrap template maken we een responsieve webpagina index.php met een hoofding en 3 kolommen. Sla het script op in de map php1cursus/oef1.2 .
# STAP 1
•	Kopieer de Bootstrap template van onderaan deze oefening.

•	Plak de code in je script index.php en pas de inhoud aan zodat je onderstaande pagina krijgt, zuiver in HTML (en CSS); op dit moment nog zonder afbeeldingen; bekijk het resultaat in je browser (Chrome)

•	Zoek en download 3 afbeeldingen van Londen, Parijs en Berlijn (of 3 andere)

•	Sla die afbeeldingen op in een submap img die je aanmaakt in je map oef1.2 met een naam zonder hoofdletters, speciale tekens of spaties.

•	Gebruik nu een eenvoudige PHP array met 3 elementen: de bestandsnamen van de afbeeldingen

•	Gebruik een lus om de 3 Bootstrap kolommen te genereren; in elke kolom voeg je één van de afbeeldingen toe; het cijfertje in de titel van de kolom bereken je
Je bekomt dan zoiets:

Oplossing: zie index.php

# STAP 2

•	Sla het resultaat tot hier toe – index.php – op onder een andere naam: index2.php

•	Gebruik een PHP associatieve array met als sleutels de bestandsnamen van de afbeeldingen en als values het titeltje dat erbij hoort; bv. “Berlijn”, “Parijs” en “Londen”

•	Gebruik een foreach loop om de Bootstrap kolommen te genereren




Oplossing: zie index2.php

Bootstrap template

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mijn eerste webpagina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

<div class="jumbotron text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

</body>
</html>
