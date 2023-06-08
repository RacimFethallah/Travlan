<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>User Profile</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <!-- Profile Picture -->
        <div class="card">
          <img src="profile_picture.jpg" class="card-img-top" alt="Profile Picture">
          <div class="card-body">
            <h5 class="card-title">John Doe</h5>
            <p class="card-text">Bio: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-primary">Edit Profile</a>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <!-- Upload Photos -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Upload Photos</h5>
            <form method="post" action="upload.php" enctype="multipart/form-data">
              <div class="form-group">
                <label for="photos">Select Photos</label>
                <input type="file" class="form-control-file" id="photos" name="photos[]" multiple>
              </div>
              <button type="submit" class="btn btn-primary">Upload</button>
            </form>
          </div>
        </div>
        <!-- Travel History -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Travel History</h5>
            <ul class="list-group">
              <li class="list-group-item">Trip 1 - Paris</li>
              <li class="list-group-item">Trip 2 - New York</li>
              <li class="list-group-item">Trip 3 - Tokyo</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
