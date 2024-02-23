<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Absentee & Latecomers Registration</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Student Absentee & Latecomers Registration</h1>
    <!-- Form to register absenteeism or lateness -->
    <form action="process.php" method="POST">
      <div class="form-group">
        <label for="student_name">Name:</label>
        <input type="text" class="form-control" id="student_name" name="name" required>
      </div>
      <div class="form-group">
        <label for="reason">Reason:</label>
        <textarea class="form-control" id="reason" name="reason" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>
