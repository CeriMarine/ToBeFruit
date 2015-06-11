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

            i0.src = 'http://www.google.fr/url?source=imglanding&ct=img&q=http://i01.i.aliimg.com/photo/v0/110871385/Mangosteen_Fresh_Fruit_from_Thailand_100_.jpg&sa=X&ved=0CAkQ8wc4QWoVChMIpsSVouWExgIVylUUCh0pXgD3&usg=AFQjCNFFLtaf95w_yUCXJDANl6AYIjd-cA';

            SiClickGoTo[0] = "Profil.php";

            imgPath[0] = i0.src;

            i1 = new Image;


            i1.src = 'http://www.google.fr/url?source=imglanding&ct=img&q=http://www.funactu.fr/wp-content/uploads/2014/10/banane1-fruit.png&sa=X&ved=0CAkQ8wdqFQoTCIDCk5PkhMYCFUG-FAodygIASA&usg=AFQjCNHO_NU13gVG-vcjjx7uYY7hsrlZBw';

            SiClickGoTo[1] = "Profil.php";

            imgPath[1] = i1.src;

            i2 = new Image;

            i2.src = 'http://www.google.fr/url?source=imglanding&ct=img&q=http://sciences.blogs.liberation.fr/.a/6a00e5500b4a648833016767e98d24970b-pi&sa=X&ved=0CAkQ8wdqFQoTCMDxitHlhMYCFQQ9FAodobcAFw&usg=AFQjCNHHi4RMakcBNtioiEP-PzPkkb6LVQ';

            SiClickGoTo[2] = "Profil.php";

            imgPath[2] = i2.src;

        }

        a = 0;

        function StartAnim()

        {

            if (version >= 3)

            {

                document.write('<a href="#" onclick="ImgDest();return(false)"><img class="photoaccueil" src="http://44.lepanierdesfamilles.com/2655-large_default/poireaux-lot-de-3-kg.jpg" border="0" alt="Menu" name="defil" /></a>');

                defilimg()

            }

            else

            {

                document.write('<a href="Profil.php"><img class="photoaccueil" src="http://44.lepanierdesfamilles.com/2655-large_default/poireaux-lot-de-3-kg.jpg" border="0" /></a>')

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
<p> Amoureux du potager vous trouverez ici votre bonheur au Paradis des Fruits et Légumes!! </p>
</div>

</body>
<footer>


</footer>
</html>