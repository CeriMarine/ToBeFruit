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

    <h1>Foire Aux Questions</h1>

<dl>
    <dt><h3>Problème de connexion</h3></dt>
    <dd><p>Pour tout problème de connexion, vérifier que vous vous êtes munis des bons identifiants.<br>
        Sinon formuler une demande de récupération de mot de passe à
        <a href="mailto:alexis.ung@isep.fr?Subject= Mot de passe oublié"> <i><b><font color="red" >mot de passe oublié?</font></b></i></a></p></dd>
    <dt><h3>Est-il dangereux de consommer des produits périmés? </h3></dt>
    <dd><p>Quand la date limite de consommation est dépassée, on jette sans hésitation.<br>
        En revanche, s'il est indiqué « A consommer de préférence avant le... »,<br>
        le produit pourra simplement avoir perdu de ses qualités gustatives et nutritionnelles.</p></dd>
    <dt><h3>Qu'est ce qu'une intoxication alimentaire?</h3></dt>
    <dd><p>Se traduisant par des troubles digestifs, voire de la fièvre et des troubles nerveux,<br>
        les intoxications alimentaires sont provoquées par la consommation d'un aliment contenant<br>
        une quantité trop importante de microbes pathogènes ou d'une toxine qu'ils fabriquent. <br>
        Les salmonelles, par exemple, se développent essentiellement dans les œufs, les volailles, <br>
        les produits laitiers, les viandes et les coquillages. <br>
        Une cuisson à cœur de la viande et de la volaille est le meilleur moyen de les détruire.</p></dd>
    <dt><h3>Qu'est ce que le commerce équitable?</h3></dt>
    <dd><p>Le commerce équitable naît à la fin des années 60 : c'est une relation différente entre<br>
        les producteurs des pays en voie de développement et nous, consommateurs des pays développés.<br>
        Plutôt que d'assister ces pays en développement, il s'agit de les accompagner en rémunérant leur <br>
        travail à sa juste valeur : on leur assure ainsi de meilleures conditions de vie et de travail</p></dd>

    <dt><h3>Je suis allergique à certains produits, comment les détecter?</h3></dt>
    <dd><p>Certaines personnes, peu nombreuses, sont allergiques à l'arachide, aux œufs, au lait... <br>
        Des ingrédients potentiellement « allergènes » qu'il est facile de repérer, <br>
        à condition qu'ils soient indiqués sur la liste des ingrédients. <br>
        L'indication de la présence d'allergènes n'est pas obligatoire aujourd'hui,<br>
        mais une évolution de la législation imposera bientôt la mention des allergènes majeurs,<br>
        quelle que soit leur quantité à la mise en œuvre.<br>
        Dans certain cas, un produit peut donc contenir un allergène potentiel sans que cela soit mentionné :<br>
        par exemple dans une sauce ou un fourrage représentant moins de 25 % du produit; ou encore, <br>
        sous la forme de « traces », que l'on peut trouver par exemple dans un produit ne contenant normalement pas d'allergènes,<br>
        mais fabriqué dans un atelier où d'autres produits en contiennent.</dd>

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