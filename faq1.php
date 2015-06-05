<?php
/**
 * Created by PhpStorm.
 * User: AlexisKD
 * Date: 03/06/15
 * Time: 11:37
 */



?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>


    <title>FAQ</title>

</head>

<header>

    <?php
    include('header.php');
    ?>
</header>
<body>

<div class="principal">

    <h1>FAQ</h1>

<dl>
    <dt><h3>Problème de connexion</h3></dt>
    <dd>Pour tout problème de connexion, vérifier que vous vous êtes munis des bons identifiants.<br>
        Sinon formuler une demande de récupération de mot de passe à
        <a href="mailto:alexis.ung@isep.fr?Subject= Mot de passe oublié"> mot de passe oublié?</a></dd>
    <dt><h3>Est-il dangereux de consommer des produits périmés? </h3></dt>
    <dd>Quand la date limite de consommation est dépassée, on jette sans hésitation.<br>
        En revanche, s'il est indiqué « A consommer de préférence avant le... »,<br>
        le produit pourra simplement avoir perdu de ses qualités gustatives et nutritionnelles.</dd>
    <dt><h3>Qu'est ce qu'une intoxication alimentaire?</h3></dt>
    <dd>Se traduisant par des troubles digestifs, voire de la fièvre et des troubles nerveux,<br>
        les intoxications alimentaires sont provoquées par la consommation d'un aliment contenant<br>
        une quantité trop importante de microbes pathogènes ou d'une toxine qu'ils fabriquent. <br>
        Les salmonelles, par exemple, se développent essentiellement dans les œufs, les volailles, <br>
        les produits laitiers, les viandes et les coquillages. <br>
        Une cuisson à cœur de la viande et de la volaille est le meilleur moyen de les détruire.</dd>

</dl>


</div>
</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">

    // Execution de cette fonction lorsque le DOM sera entièrement chargé
    $(document).ready(function() {

        // Masquage des réponses
        $("dd").hide();

        // CSS : curseur pointeur
        $("dt").css("cursor", "pointer");

        // Clic sur la question
        $("dt").click(function () {

            // Actions uniquement si la réponse n'est pas déjà visible
            if($(this).next().is(":visible") == false) {

                // Masquage des réponses
                $("dd").slideUp();

                // Affichage de la réponse placée juste après dans le code HTML
                $(this).next().slideDown();

            }
        });
    });

</script>
</html>