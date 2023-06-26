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
          <h3>Create New Student</h3>

          <form action="/students/store" method="POST">
             <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Name"/>
             </div>

             <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Email Address"/>
             </div>
             
             <div class="form-group">
              <label for="gender">Gender</label>
              <select name="gender" id="gender" class="form-control">
                <option value="" disabled selected>Choose your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
             </div>
             
             <div class="form-group">
              <label for="date">Date of Birth</label>
              <input type="date" id="date" name="dob" class="form-control"/>
             </div>

             <div class="form-group">
              <label for="age">Age</label>
              <input type="number" id="email" name="age" class="form-control"/>
             </div>
             
             <button class="btn btn-primary mt-2">Create New Student</button>
          </form>
        </div>
      </div>
   </div>
</body>
</html>