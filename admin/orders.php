<?php
    ob_start();
    session_start();

    $pageTitle = 'Orders';

    if(isset($_SESSION['username_restaurant_qRewacvAqzA']) && isset($_SESSION['password_restaurant_qRewacvAqzA']))
    {
        include 'connect.php';
        include 'Includes/functions/functions.php';
        include 'Includes/templates/header.php';
        include 'Includes/templates/navbar.php';

        ?>

            <script type="text/javascript">

                var vertical_menu = document.getElementById("vertical-menu");


                var current = vertical_menu.getElementsByClassName("active_link");

                if(current.length > 0)
                {
                    current[0].classList.remove("active_link");
                }

                vertical_menu.getElementsByClassName('orders_link')[0].className += " active_link";

            </script>

        <?php


        $do = 'Manage';

        if($do == "Manage")
        {
            $stmt = $con->prepare("SELECT * FROM placed_orders");
            $stmt->execute();
            $orders = $stmt->fetchAll();

            ?>
                <div class="card">
                    <div class="card-header">
                        <?php echo $pageTitle; ?>
                    </div>
                    <div class="card-body">

                        <!-- RESERVATIONS TABLE -->

                        <table class="table table-bordered orders-table">
                            <thead>
                            <tr>
                                <th scope="col">Client ID</th>
                                <th scope="col">Order time</th>
                                <th scope="col">Delivery address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach($orders as $order)
                                {
                                    echo "<tr>";
                                        echo "<td>";
                                            echo $order['client_id'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $order['order_time'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $order['delivery_address'];
                                        echo "</td>";
                                    echo "</tr>";
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
        }


        /* FOOTER BOTTOM */

        include 'Includes/templates/footer.php';

    }
    else
    {
        header('Location: index.php');
        exit();
    }
?>