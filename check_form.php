<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = strtolower($_POST['nom']);
    $prenom = strtolower($_POST['prenom']);
    $message = strtolower($_POST['message']);

    if (strpos($prenom, 'cryptographie') !== false && strpos($nom, 'malware') !== false && strpos($message, 'authentification à deux facteurs') !== false ) {
        echo "<script>alert('{FLAG II-B : Browsing_Champ}');</script>";
    }
    else 
    echo "<script>alert('Not working');</script>";
}
?>
