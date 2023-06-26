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
        <div class="row justify-content-center">
            <div class="col-8 mt-4">
                <?php if($student): ?>

                    <p>ID: <?= $student->id; ?></p>
                    <p>Name: <?= $student->name; ?></p>
                    <p>Email: <?= $student->email; ?></p>
                    <p>Gender: <?= $student->gender; ?></p>
                    <p>Date of birth: <?= $student->dob; ?></p>
                    <p>Age: <?= $student->age; ?></p>

                <?php else: ?>
                    <p>Student Not Found!</p>
                <?php endif; ?>

                <div class="mb-2">
                   <?php if($student):?>
                    <a href="/students/edit/<?= $student->id; ?>" class="btn btn-outline-primary">Edit</a>
                    <a href="/students/destroy/<?= $student->id; ?>" class="btn btn-outline-primary">Delete</a>
                   <?php endif; ?>
                   <a href="/students" class="btn btn-primary">Go to Home</a>
                </div>
            </div>
        </div>
    </div>
 </body>
 </html>