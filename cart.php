<?php
if(empty(session_id()))
    session_start();

if(!isset($_SESSION['login'])){
    header('Location: ./login.php');
    exit();

}
?>

<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <table>
            <caption>Your cart cookie :)</caption>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
           </tr>
           <?php
                foreach($_SESSION['cookies'] as $cookie){                                        
            ?>
                <tr>
                    <td><?= $cookie['name']; ?></td>
                    <td><?= $cookie['description']; ?></td>
                    <td><?= $cookie['quantity']; ?></td>

                </tr>
           <?php } ?>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
