
<?php
    
    require('functions.php');

    $titles = changeTitles($_SERVER['REQUEST_URI']);
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class='jumbotron'>
                <a href='create.php' class='float-right btn btn-success'> <?= $titles[0] ?> </a>

                <h4 class='mb-4'> <?= $titles[1] ?> </h4>

                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> <?= $titles[2] ?> </th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>