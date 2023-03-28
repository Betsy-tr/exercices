<?php

// Exercice I
function helloWorld(){
    return " Hello World ! " . '<br><br>' ; 
}

// Exercice II
function quiEstLeMeilleurProf(){
    return " Le prof de programmation web " . '<br><br>' ; 
}

// Exercice III
function jeRetourneMonArgument( $Arg = 'abc' ){
    return $Arg . '<br><br>' ;
}

// Exercice IV
function concatenation( $nom = "Griezman" , $prenom = "Antoine" ){
    return $prenom . $nom . '<br><br>' ;
}

// Exercice V
function concatenationAvecEspace( $nom = "Ngolo" , $prenom = "Kante" ){
    return $nom . " " . $prenom . '<br><br>' ;
}

// Exercice VI
function somme( $a = 5 , $b = 5 ){
    return $a + $b . '<br><br>' ;
}

// Exercice VII
function soustration( $a = 5 , $b = 5 ){
    return $a - $b . '<br><br>' ;
}

// Exercice VIII
function multiplication( $a = 5 , $b = 5 ){
    return $a * $b . '<br><br>' ;
}

// Exercice IX
function estIlMajeur( $a = 34 ){
    if( $a >= 18 ){
        return true . '<br><br>' ;
    } else {
        return false . '<br><br>' ;
    }
}


// Exercice X
function plusGrand( $a = 10 , $b = 8 ){
    if ($a > $b){
        return $a . '<br><br>' ; 
    }else {
        return $b . '<br><br>' ;
    }
}

// Exercice XI
function plusPetit( $a = 10 , $b = 8 ){
    if ($a < $b){
        return $a . '<br><br>' ; 
    }else {
        return $b . '<br><br>' ;
    }
}

// Exercice XII
function vraimentPlusPetit( $a = 10 , $b = 8 , $c = 12 ){
    if ($a < $b && $a < $c ){
        return $a . '<br><br>' ; 
    }elseif ($b < $a && $b < $c) {
        return $b . '<br><br>' ;
    }else {
        return $c . '<br><br>' ;
    }
}

// Exercice XIII
function premierElementTableau( $monTableau ){
    if( count($monTableau) > 0 ){
        return $monTableau[0] . '<br><br>' ; 
    }else {
        return "null" . '<br><br>' ; 
    }
}

// Exercice XIV
function dernierElementTableau( $monTableau ){
    if( count($monTableau) - 1 > 0 ){
        return count($monTableau)-1 . '<br><br>' ; 
    }else {
        return "null" . '<br><br>' ; 
    }
}

// Exercice XV
function vraimentPlusGrand( $monTableau ){
    if( count($monTableau) < 0 ){
        return null . '<br><br>' ;
    }elseif( $monTableau[0] > $monTableau[1] && $monTableau[0] > $monTableau[2]){
        return $monTableau[0] . '<br><br>' ;
    }elseif( $monTableau[1] > $monTableau[0] && $monTableau[1] > $monTableau[2] ){
        return $monTableau[1] . '<br><br>' ;
    }else{
        return $monTableau[2] . '<br><br>' ;
    }
}
// Exercice XVI
function carrémentPlusPetit( $monTableau ){
    if( count($monTableau) < 0 ){
        return null . '<br><br>' ;
    }elseif( $monTableau[0] < $monTableau[1] && $monTableau[0] < $monTableau[2]){
        return $monTableau[0] . '<br><br>' ;
    }elseif( $monTableau[1] < $monTableau[0] && $monTableau[1] < $monTableau[2] ){
        return $monTableau[1] . '<br><br>' ;
    }else{
        return $monTableau[2] . '<br><br>' ;
    }
}
// Exercice XVII
function verificationPassword( $password = "digitalisation" ){
    if( strlen($password) >= 8){
        return true . '<br><br>' ;
    }else{
        return false . '<br><br>' ;
    }
}

// Exercice XVIII
function doubleVerificationPassword( $password = "digitalisation" ){
    
    $majuscule = preg_match('@ [A-Z] @', $password) ;
    $minuscule = preg_match('@ [a-z] @', $password) ;
    $chiffre = preg_match('@ [0-9] @', $password) ;

    if( $majuscule || $minuscule || $chiffre || strlen($password) >= 8 ){
        return true . '<br><br>' ;
    }else{
        return false . '<br><br>' ;
    }
}
// Exercice XIX
function capital( $pays ){
    switch ( $pays ) {
        case 'France':
            return "Paris" . '<br><br>' ;
            break ;
        case 'Allemagne':
            return "Berlin" . '<br><br>' ;
            break ;
        case 'Italie':
            return "Rome" . '<br><br>' ;
            break ;
        case 'Maroc':
            return "Rabat" . '<br><br>' ;
            break ; 
        case 'Espagne':
            return "Madrid" . '<br><br>' ;
            break ;  
        case 'Portugal':
            return "Lisbonne" . '<br><br>' ;
            break ;
        case 'Angleterre':
            return "Londres" . '<br><br>' ;
            break ; 
        default:
            return "Inconnu" . '<br><br>' ;
            break ;
    }
}
// Exercice XX
function listHTML( $nomListe , $monTableau ){
    $i = 0 ;

    echo "<h3>" . $nomListe . "</h3>" . "<ul>" ;

    while($i < count($monTableau)){
        echo "<li>" . $monTableau[$i] . "</li>" . "</ul>" ;
        $i++ ; 
    }
}


?>