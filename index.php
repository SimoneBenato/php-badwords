<!-- Creare una variabile con un paragrafo di testo a vostra scelta. -->
<?php
    $message = 'Lorem ipsum, but dolor sit amet consectetur adipisicing elit. Similique vero ipsum exercitationem enim vel quo facilis but incidunt cum odit labore nemo, but quisquam but sapiente dignissimos nihil qui ipsam alias quam quos!';
    //Una parola da censurare viene passata dall'utente tramite parametro GET.
    $badWord = $_GET['word'];
    $len_p = strlen($message)
?>

<!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
<p> 
    <?php 
        echo str_replace($badWord, '***', $message) 
    ?> 
</p>
<p> Il paragrafo contiene 
    <?php
        echo ($len_p)
    ?>
     caratteri
</p>
<!-- Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

