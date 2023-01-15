<?php
    ob_start();
    session_start();

    $pageTitle = 'Clients';

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

                vertical_menu.getElementsByClassName('reservations_link')[0].className += " active_link";

            </script>

        <?php


            $do = 'Manage';

            if($do == "Manage")
            {
                $stmt = $con->prepare("SELECT * FROM reservations");
                $stmt->execute();
                $reservations = $stmt->fetchAll();

                ?>
                <div class="card">
                    <div class="card-header">
                        <?php echo $pageTitle; ?>
                    </div>
                    <div class="card-body">

                        <!-- RESERVATIONS TABLE -->

                        <table class="table table-bordered reservations-table">
                            <thead>
                            <tr>
                                <th scope="col">Client ID</th>
                                <th scope="col">Seleccted Time</th>
                                <th scope="col">Number of guests</th>
                                <th scope="col">Table ID</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($reservations as $reservation)
                                    {
                                        echo "<tr>";
                                            echo "<td>";
                                            echo $reservation['client_id'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $reservation['selected_time'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $reservation['nbr_guests'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $reservation['table_id'];
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