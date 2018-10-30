
    <!-- head -->
    <?php require 'partials/head.php' ?>

    <!-- navegation var -->
    <?php require 'partials/nav.php' ?>

    <!-- table header -->
    <?php require 'partials/table.head.php' ?>

        <tbody>

            <?php foreach ($blogs as $blog) : ?>
                <tr>
                    <th scope="row"> <?php echo $blog->id ?> </th>
                    <td> <?php echo $blog->title ?> </td>
                    <td> <img src="<?php echo $blog->image?>" alt="" title='<?php echo $blog->image?>' class="rounded" width="100" height="100"> </td>
                    <td><a class="btn btn-sm btn-primary" href="#">Edit</a> &nbsp; 
                    <a class="btn btn-sm btn-danger" href="#">Delete</a></td>  
                </tr>
            <?php endforeach; ?>
            
        </tbody>    
    
    <!-- table footer -->
    <?php require 'partials/table.footer.php' ?>

    <!-- footer -->
    <?php require 'partials/footer.php' ?>
