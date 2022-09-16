<?php 
include("vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UserTable;
$table = new UserTable(new MySQL());
$users = $table->getAll();
// echo '<pre>';
// print_r($users);
// echo '</pre>';
// exit;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class="container">
     <div class="row">
      <div class="col-lg-8">
       <div class="card">
        <div class="card-body">
         <table class="table table-bordered">
          <thead>
           <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Created</th>
           </tr>
          </thead>
          <tbody>
           <?php foreach($users as $user): ?>
           <tr>
            <td><?php echo $user->id; ?></td>

            <td><?php echo $user->first_name; ?></td>
            <td><?php echo $user->last_name; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo $user->created; ?></td>
           </tr>
           <?php endforeach; ?>
          </tbody>
         </table>
        </div>
       </div>
      </div>
     </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
