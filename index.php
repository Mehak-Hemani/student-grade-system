<?php
    $tempreture = 10;

    if($tempreture >=50 && $tempreture <=100){
        echo'Weather is hot today, hydrate yourself';

    }
    elseif ($tempreture <=10 && $tempreture <=15) {
        echo'weather is cold today, wear jacket';
    }else{
        echo'Weather is pleasent today';
    }    


   
?>