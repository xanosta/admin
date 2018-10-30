<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>  
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Pick Tittle</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($picks as $pick) : ?>
                <tr>
                    <th scope="row"> <?php echo $pick->id ?> </th>
                    <td> <?php echo $pick->giftDescription ?> </td>
                    <td> <img src="<?php echo $pick->image?>" alt="" title='<?php echo $pick->image?>' class="rounded" width="100" height="100"> </td>
                    <td><a class="btn btn-sm btn-primary" href="#">Edit</a> &nbsp; 
                    <a class="btn btn-sm btn-danger" href="#">Delete</a></td>  
                </tr>
            <?php endforeach; ?>
            
        </tbody>    
    </table>
   
</body>
</html>