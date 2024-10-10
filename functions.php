<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //functie om score uit te halen voor elke vraag
        function score($antwoord) {
            switch($antwoord) {
                case "ja":
                    return 5;
                case "neutraal":
                    return 2;
                case "nee":
                    return 0;
                default:
                    return 0;
            }
        }
    
        // instantie van de score aanmaken voor alle genres
        $rts = 0;
        $adventure = 0;
        $racing = 0;
        $sandbox = 0;
        $fps = 0;
        $action = 0;
        $platform = 0;
        
        //score tellen bij genres
        $rts+= score($_POST['vraag1']);
        $action += score($_POST['vraag1']);
        $rts += score($_POST['vraag2']);
        $adventure += score($_POST['vraag3']);
        $sandbox += score($_POST['vraag3']);
        $action += score($_POST['vraag4']);
        $action += score($_POST['vraag5']);
        $racing += score($_POST['vraag6']);
        $fps += score($_POST['vraag7']);
        $fps += score($_POST['vraag8']);
        $platform += score($_POST['vraag9']);
        $action += score($_POST['vraag10']);
        $sandbox += score($_POST['vraag11']);
        $action += score($_POST['vraag12']);
        $adventure += score($_POST['vraag13']);
        $adventure += score($_POST['vraag14']);
        $sandbox += score($_POST['vraag15']);

        function result($scores) {
            //functie om de hoogste score uit te halen
            $max_genre = array_keys($scores, max($scores));
        }
        
        //Array van de scores
        $genre_scores = [
            'RTS' => $rts,
            'Adventure' => $adventure,
            'Racing' => $racing,
            'Sandbox' => $sandbox,
            'FPS' => $fps,
            'Action' => $action,
            'Platform' => $platform
        ];
        
        //haalde genre eruit met de hoogste score
        $highest_genres = result($genre_scores);
        
        //print functie met hoogste score
        echo "The genre(s) with the highest score: " . implode(", ", $highest_genres) . "<br>";
        
        //print de volledige uitkomst met de andere genres
        foreach ($genre_scores as $genre => $score) {
            echo $genre . ": " . $score . "<br>";
        }
    }