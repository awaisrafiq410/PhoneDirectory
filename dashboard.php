<?php require 'inc/header.php';?>

<div class="container" style="max-width: 500px;">
    <h1 align="center">Contacts</h1><br>
    <table class="table table-striped">
        <tbody>
            <?php 
             require 'php/loadcontacts.php';
            ?>
        </tbody>
    </table>
</div>

<?php require 'inc/footer.php';?>