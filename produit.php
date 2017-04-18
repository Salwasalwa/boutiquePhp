<?php require 'header.php'; ?>
        <main>
            <!-- Slider -->
            <div class="row">
                <div class="col-md-7" id="slider">
                    <div class="" id="carousel-bounding-box">
                        <div class="carousel slide" id="myCarousel">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <img src='./static/img/DSCF2007_1.jpg' alt='image1' width='100%' height='auro' class='active item'>
                                <img src='./static/img/DSCF2007_1.jpg' alt='image1' width='100%' height='auro' class='item'>
                                <img src='./static/img/DSCF2007_1.jpg' alt='image1' width='100%' height='auro' class='item'>
                                <img src='./static/img/DSCF2007_1.jpg' alt='image1' width='100%' height='auro' class='item'>
                            </div>
                            <!-- Carousel nav -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                    <!--/Slider-->
                </div>
                <div class="col-md-4 slider">
                    <div>


                        </form>
                        <?php
                            define('MYSQL_SERVEUR', 'localhost');
                            define('MYSQL_UTILISATEUR', 'salwa');
                            define('MYSQL_MOTDEPASSE', 'salwa');
                            define('MYSQL_BASE', 'miniproj_onlinSho');

                            $id = $_GET["id_produitt"];

                            $mysql = new MySQLi(MYSQL_SERVEUR,
                                                MYSQL_UTILISATEUR,
                                                MYSQL_MOTDEPASSE,
                                                MYSQL_BASE);

                            $mysql->set_charset("utf8");
                            $sql = "select * from produitt where id_produitt='$id' ;";
                            $result = $mysql->query($sql);

                            $row = $result->fetch_assoc ();
                                // echo '<h2>'.$row['name_produit'].'</h2>'.'</h4>'.'<h4>'.$row["price_produit"]."€".'</h4> <button type="button" name="button">Acheter</button>';
                                echo '<form class="" action="/miniproj_onlineSho_solo/cart.php" method="post">';
                                echo "<h2>".$row["name_produit"]."</h2>";
                                echo "<h4>".$row["price_produit"]."€</h4>";
                                echo '<input type="hidden" name="id_produitt" value="'.$id.'">';
                                echo '<button type="submit" name="button">Acheter</button></form>';


                            $result->free();

                            $mysql->close();
                        ?>

                    </div>
                </div>


            </div>

            <div class="row hidden-xs" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets"></ul>
            </div>

            <div class="row">
                <div class="col-md-11 descIngredients">
                    <div>
                        <h2>Description</h2>
                        <?php
                            define('MYSQL_SERVEUR', 'localhost');
                            define('MYSQL_UTILISATEUR', 'salwa');
                            define('MYSQL_MOTDEPASSE', 'salwa');
                            define('MYSQL_BASE', 'miniproj_onlinSho');

                            $id = $_GET["id_produitt"];

                            $mysql = new MySQLi(MYSQL_SERVEUR,
                                                MYSQL_UTILISATEUR,
                                                MYSQL_MOTDEPASSE,
                                                MYSQL_BASE);

                            $mysql->set_charset("utf8");
                            $sql = "select * from produitt where id_produitt='$id' ;";
                            $result = $mysql->query($sql);

                            $row = $result->fetch_assoc ();
                                echo '</p>'.$row['description_produit'].'</p>';

                            $result->free();

                            $mysql->close();
                        ?>

                    </div>
                </div>
            </div>



        </main>

<?php require 'footer.php'; ?>
