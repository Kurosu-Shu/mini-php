<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

 </head>
 <body>

    <div class="container">
        <div class="row justify-content-center mt-4">
        <div class="col-8">
          <?php if($students): ?>

            <table class="table table-striped">

             <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Gender</th>
               <th>Action</th>
             </tr>

            <?php foreach($students as $student): ?>
              <tr>
                <td>
                  <?= $student->name ?>
                </td>
                <td>
                  <?= $student->email ?>
                </td>
                <td>
                  <?= ucfirst($student->gender) ?>
                </td>
                <td>
                  <a href="/student/<?= $student->id?>" class="btn btn-primary">view</a>
                  <a href="/students/destroy/<?= $student->id?>" class="btn btn-outline-danger">delete</a>
                </td>
              </tr>
             <?php endforeach ?>
            </table>
          <?php else: ?>
            <p>Student not found!</p>
          <?php endif; ?>

          <div>
            <a href="/students/create" class="btn btn-primary">Create New Student</a>
          </div>
        </div>
        
        </div>
    </div>
    
 </body>
 </html>