<?php require 'header.php'; ?>
<main>
    <h3>Shopping Cart</h3>
    <?php
        define('MYSQL_SERVEUR', 'localhost');
        define('MYSQL_UTILISATEUR', 'salwa');
        define('MYSQL_MOTDEPASSE', 'salwa');
        define('MYSQL_BASE', 'miniproj_onlinSho');

        if(isset($_POST["id_produitt"])){
            $id = $_POST["id_produitt"];
            $mysql = new MySQLi(MYSQL_SERVEUR,
            MYSQL_UTILISATEUR,
            MYSQL_MOTDEPASSE,
            MYSQL_BASE);

            $mysql->set_charset("utf8");
            $sql =  "INSERT INTO contient_cart (id_produitt, quantity_contient) VALUES ($id, 1);";
            $mysql->query($sql);
        }

    ?>
    <table class="table table-striped table-hover table-bordered">
        <tbody id="lePanier">
            <tr>

                <th>Item</th>
                <th>QTY</th>
                <th>Unit Price</th>
                <th>Total Price</th>
            </tr>

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
                $sql = 'SELECT  * FROM produitt INNER JOIN contient_cart ON produitt.id_produitt = contient_cart.id_produitt;';


                $result = $mysql->query($sql);

                while ($row = $result->fetch_assoc()){

                    // $id_pro = $row["id_produitt"];

                    echo  '<tr id='.$row["id_produitt"].'>';
                    echo '<td>'.$row["name_produit"]. '</td>';
                    echo "<td class='text-right'>";
                    echo "<button type='button' id='less'>-</button>";
                    echo "<span class='quantity' id='qty".$row['id_produitt']."'>".$row["quantity_contient"]."</span>";
                    echo "<button type='button' id='more'>+</button>";
                    echo "<input type='button' name='button' class='delete_button' id='delete_row".$row['id_produitt']."' value='sup' onclick='delete_row(".$row['id_produitt'].")'></button></td>";

                    echo  '<td class="text-right">'.$row["price_produit"] . '€</td>';

                     $uprice = $row["quantity_contient"]*$row["price_produit"] ;
                    echo "<th colspan='3'><span class='pull-right'>".$uprice."€</span></th></tr>";
                    //
                    $total = $uprice + $total;
                }

                echo "<tr><th colspan='3'><span class='pull-right'>TOTAL</span></th><td class='text-right'>".$total." €</td></tr>";

                $result->free();

                $mysql->close();
            ?>
        </tbody>
    </table>
    <script src="./modifs_cart.js" charset="utf-8"></script>
</main>


<?php require 'footer.php'; ?>
