<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
   <div class="contaier">
      <div class=" row justify-content-center">
        <div class="col-8">
          <?php if($student):?>
            <h3>Edit Student</h3>
            <form action="/students/update" method="POST">
                <input type="hidden" name="id" value="<?= $student->id; ?>" />
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name"  name="name" value="<?=$student->name; ?>" class="form-control" placeholder="Name"/>
                </div>

                <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="<?=$student->email; ?>" class="form-control" placeholder="Email Address"/>
                </div>
                
                <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="" disabled>Choose your gender</option>
                    <option value="male" <?php if($student->gender == 'male') { echo 'selected';} ?>>Male</option>
                    <option value="female" <?php if($student->gender == 'female') { echo 'selected';} ?>>Female</option>
                </select>
                </div>
                
                <div class="form-group">
                <label for="date">Date of Birth</label>
                <input type="date" id="date" name="dob" value="<?=$student->dob; ?>" class="form-control"/>
                </div>

                <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="email" name="age" value="<?=$student->age; ?>" class="form-control"/>
                </div>
                
                <div class="mt-3">
                 <a href="/students" class="btn btn-outline-primary">Cancel</a>
                 <button class="btn btn-primary">Update Student</button>
                </div>
            </form>
          <?php else:?>
            <p>Student not found!</p>
          <?php endif; ?>
        </div>
      </div>
   </div>
</body>
</html>