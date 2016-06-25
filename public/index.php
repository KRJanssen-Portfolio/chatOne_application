<?php
/**
 * Created by PhpStorm.
 * User: KeanuenSabine
 * Date: 25-6-2016
 * Time: 18:11
 */
?>

<?php require 'header.php'; ?>

<div class="">
    <div class="movielist col-md-4 col-md-offset-4">
        <h1>ChatOne ; )</h1>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Message</th>
            </tr>
            </thead>
            <tbody>



            <?php
            require_once '../app/app-manager.php';
            $messageItems = getAllItems($db);
            foreach($messageItems as $item) {
                echo "<tr>";
                echo"<td>". $item['name'] ."</td>";
                echo"<td>". $item['message'] ."</td>";
                echo"<td>";
                echo'<a class="btn btn-info glyphicon glyphicon-pencil" href="../app/edit.php?id='. $item['id'] .'"></a>';
                echo"</td>";
                echo"<td>";
                echo'<form action="../app/app.php" method="post">';
                echo '<input type="hidden"  name="id" value="'. $item['id'] .'">';
//                echo '<input type="submit" name="delete" class="btn btn-danger" value="x">';
                echo '</form>';
                echo"</td>";
                echo"</tr>";
            }

            ?>
            </tbody>
        </table>

        <h2>add a message</h2>
        <form action="../app/app.php" method="POST">

            <div class="form-group">
                <label for="">Name:</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Message:</label>
                <input type="text" name="message" class="form-control">
            </div>


            <input type="submit" name="insert" value="Send" class="btn btn-warning">

        </form>



    </div>
</div>

<?php require 'header.php'; ?>


<!--<td><a href='app/edit.php?id=". $item['id'] ." class='btn btn-info glyphicon glyphicon-pencil'></a></td>-->
