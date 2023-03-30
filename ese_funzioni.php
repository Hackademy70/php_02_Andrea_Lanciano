<?php
//Ripetere l’esercizio del controllo password visto a lezione (provate da soli e poi rivedendo il video)

$password = readline("Inserisci una password:");

$firstCheck = false;
$secondCheck = false;
$thirdCheck = false;
$forthCheck = false;

// lunghezza password
function firstCheck($pass){
    if( strlen($pass) > 8 ){
        return true;
    }
    echo "La password è troppo corta \n";
}
$firstCheck = firstCheck($password);

// c'è un numero?
function secondCheck($pass){
    for( $i = 0; $i < strlen($pass); $i++){
        if ( is_numeric($pass[$i]) ){
            return true;
        }
    }
    echo "numero non trovato \n";
    return false;
}
$secondCheck = secondCheck($password);



//codice che controlla la quarta regola: deve contenere almeno un carattere SPECIALI
function thirdCheck($pass){
    $caratteriSpeciali = ['*', '$','?','!','.','/'];
    
    for( $i = 0; $i < strlen($pass); $i++ ){
        if( in_array($pass[$i], $caratteriSpeciali) ){
            return true;
        }
    }
    echo "Carattere speciale non trovato \n";
    return false;
}
$thirdCheck = thirdCheck($password);

// Controllo carattere UPPER
function forthCheck($pass){
    for( $i = 0; $i < strlen($pass); $i++ ){
        if( ctype_upper($pass[$i]) ){
            return true;
        }
    }
    echo "Carattere maiuscolo non trovato \n";
    return false;
}
$forthCheck = forthCheck($password);


// fino a 5 volte
if( $firstCheck && $secondCheck && $thirdCheck && $forthCheck){
    echo"La Password rispetta tutti i criteri \n";
} else {
    echo "La password non rispetta i precedenti criteri \n";
}
$i = 0;
while($i < 5){
    if($firstCheck == false || $secondCheck == false || $thirdCheck == false || $forthCheck == false){
        echo "La password non rispetta i precedenti criteri, Riprova \n";
        $password = readline("Inserisci una password: \n");
        $firstCheck = firstCheck($password);
        $secondCheck = secondCheck($password);
        $thirdCheck = thirdCheck($password);
        $forthCheck = forthCheck($password);
        $i++;
    } else{
        echo"La Password rispetta tutti i criteri";
        break;
    }
}




?>