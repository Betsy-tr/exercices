<?php

include 'fonction.php' ; 

// On fait appel à la founction helloWorld de I
echo helloWorld() ; 

// On fait appel à la founction quiEstLeMeilleurProf de II
echo quiEstLeMeilleurProf() ; 

// On fait appel à la founction jeRetourneMonArgument de III
echo jeRetourneMonArgument() ; 

// On fait appel à  la founction concatenation de IV
echo concatenation() ; 

// On fait appel à la founction concatenationAvecEspace de V
echo concatenationAvecEspace() ;

// On fait appel à la founction somme de VI
echo somme() ; 

// On fait appel à la founction soustration de VII
echo soustration() ;

// On fait appel à la founction multiplication de VIII
echo multiplication() ;

// On fait appel à la founction estIlMajeur de IX
echo estIlMajeur() ; 

// On fait appel à la founction plusGrand de X
echo plusGrand() ; 

// On fait appel à la founction plusPetit de XI
echo plusPetit() ;

// On fait appel à la founction vraimentPlusPetit de XII
echo vraimentPlusPetit() ; 

// On fait appel à la founction premierElementTableau de XIII
$monTableau = [] ;
echo premierElementTableau( $monTableau ) ;

// On fait appel à la founction dernierElementTableau de XIV
$monTableau = [] ;
echo dernierElementTableau( $monTableau ) ;

// On fait appel à la founction vraimentPlusGrand de XV
$monTableau = [ 5 , 14 , 8 ] ;
echo vraimentPlusGrand( $monTableau ) ;

// On fait appel à la founction carrémentPlusPetit de XVI
$monTableau = [ 5 , 14 , 8 ] ;
echo carrémentPlusPetit( $monTableau ) ;

// On fait appel à la founction verificationPassword de XVII
echo verificationPassword() ;
// On fait appel à la founction doubleVerificationPassword de XVIII
echo doubleVerificationPassword() ;

// On fait appel à la founction capital de XIX
$pays = "Allemagne" ;
echo capital( $pays ) ;

// On fait appel à la founction listHTML de XX
$nomListe = "Capitale" ;
$monTableau = ["Madrid" , "Lisbonne" , "Londre"] ;
echo listHTML( $nomListe , $monTableau ) ;

?>