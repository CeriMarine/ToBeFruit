<?php
/**
 * Created by PhpStorm.
 * User: Marine
 * Date: 14/05/15
 * Time: 21:26
 */

?>

<!DOCTYPE html>
    <html>
<head>


    <title>To Be Fruit</title>
    <?php
    include('header.php');

    ?>

    <script language="javascript">

        imgPath = new Array;

        SiClickGoTo = new Array;

        version = navigator.appVersion.substring(0,1);

        if (version >= 3)

        {

            i0 = new Image;

            i0.src = 'http://44.lepanierdesfamilles.com/2655-large_default/poireaux-lot-de-3-kg.jpg';

            SiClickGoTo[0] = "Profil.php";

            imgPath[0] = i0.src;

            i1 = new Image;


            i1.src = 'http://www.wallpaper-gratuit.eu/images/1786/bigth_1786.jpg';

            SiClickGoTo[1] = "Profil.php";

            imgPath[1] = i1.src;

            i2 = new Image;

            i2.src = 'http://www.lesfoodies.com/_recipeimage/86055/le-gers-ou-les-tourins-le-tourin-tomate-fraiche-si-possible.jpg';

            SiClickGoTo[2] = "Profil.php";

            imgPath[2] = i2.src;

        }

        a = 0;

        function StartAnim()

        {

            if (version >= 3)

            {

                document.write('<a href="#" onclick="ImgDest();return(false)"><img src="http://44.lepanierdesfamilles.com/2655-large_default/poireaux-lot-de-3-kg.jpg" border="0" alt="Menu" name="defil" /></a>');

                defilimg()

            }

            else

            {

                document.write('<a href="Profil.php"><img src="http://44.lepanierdesfamilles.com/2655-large_default/poireaux-lot-de-3-kg.jpg" border="0" /></a>')

            }

        }

        function ImgDest()

        {

            document.location.href = SiClickGoTo[a-1];

        }

        function defilimg()

        {

            if (a == 3)

            {

                a = 0;

            }

            if (version >= 3)

            {

                document.defil.src = imgPath[a];

                tempo3 = setTimeout("defilimg()",3000);

                a++;

            }

        }
    </script>
<body>
<div class="principal">
    <br>
    <p>Nos annonces du moment :</p>


    <div class="annoncedefile">
    <script language="javascript">

        StartAnim();

    </script>
    </div>

</div>

</body>
<footer>


</footer>
</html>