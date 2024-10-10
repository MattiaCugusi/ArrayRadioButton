<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array radio button</title>
</head>
<body>
    <?php
    $domanda = "Qual'e' il pianeta piu' vicino al Sole?";
    $risposte = ["Venere", "Terra", "Marte", "Mercurio", "Giove"];

    echo "<p style= 'font-style: italic'><b>" . $domanda . "<b></p>";
    for ($i=0; $i<count($risposte); $i++){
        echo "<input name= 'risposta' type='radio'>";
        echo "<label>" . $risposte[$i] . "</label>";
        echo "<p></p>";
        
    }
    
    
    ?>
    
</body>
</html>