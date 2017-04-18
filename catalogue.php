<?php require 'header.php'; ?>
<div class="row" id="mainside">
    <div id="wrapper" data-spy="scroll" data-target="#spy" class="col-md-3">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="">
            <nav id="spy">

                <ul class="sidebar-nav nav">

                    <li class=""><a href="#anch1" data-scroll="" class="" id="chocoNoirs">Chocolats Noirs</a></li>
                    <li class=""><a href="#anch2" data-scroll="" class="" id="chocoLait">Chocolots au lait</a></li>
                    <li class=""><a href="#anch3" data-scroll="" class="" id="chocoBlanc">Chocolats blancs</a></li>
                    <li class=""><a href="#anch4" data-scroll="" id="nougats">Nougats</a></li>
                    <li class=""><a href="#anch5" data-scroll="" class="" id="offrets">Offrets</a></li>
                    <li class=""><a href="#anch6" data-scroll="" class="" id="paques">Chocolats de Pâques</a></li>
                </ul>
            </nav>
        </div>
        <!-- Page content -->
    </div>
            <div class="col-md-9">
                <main class="mainArticles">
                    <section  class="cache">
                        <!-- <article class="">
                            <img src='./static/img/DSCF2007_1.jpg' alt='image1' width='150px' height='150px'>
                            <p>Chocolate Negro</p>
                            <p>25.99€</p>
                            <button type="button" name="button">Acheter</button>
                        </article> -->
                    </section>
                    <section id="anch">
                        <?php
                            define('MYSQL_SERVEUR', 'localhost');
                            define('MYSQL_UTILISATEUR', 'salwa');
                            define('MYSQL_MOTDEPASSE', 'salwa');
                            define('MYSQL_BASE', 'miniproj_onlinSho');


                            $mysql = new MySQLi(MYSQL_SERVEUR,
                                                MYSQL_UTILISATEUR,
                                                MYSQL_MOTDEPASSE,
                                                MYSQL_BASE);

                            $mysql->set_charset("utf8");
                            $sql = "select * from produitt;";
                            $result = $mysql->query($sql);

                            while ($row = $result->fetch_assoc()){
                                echo "<article class='col-md-2' id='sectionartic'><img src='./static/img/DSCF2007_1.jpg' alt='image1' width='100px' height='150px'>".'<h3>'.$row['name_produit'].'</h3>'.'<p>'.$row['description_produit'].'</p>'.'<p>'.$row["price_produit"]."€".'</p>'.'<a class="btn" href= "http://codi4:8080//miniproj_onlineSho_solo/produit.php?id_produitt='.$row["id_produitt"].'">Acheter</a></article>';
                            }

                            $result->free();

                            $mysql->close();
                        ?>
                    </section>
                </main>
            </div>
        </div>

<?php require 'footer.php'; ?>
