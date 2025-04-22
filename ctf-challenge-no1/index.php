<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ShadowCorp Admin Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #121212;
      color: #ffffff;
    }
    .card {
      margin-top: 100px;
      background-color: #1e1e1e;
      border: 1px solid #444;
    }
    .form-control {
      background-color: #333;
      color: #fff;
      border: none;
    }
    .form-control::placeholder {
      color: #888;
    }
    .btn-primary {
      background-color: #0f0;
      color: #000;
      border: none;
    }
    /* Set header text color to white */
    h3 {
      color: white;
    }
    .white {
      color: white;
    }
    .red {
      color: red;
    }


  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card p-4 shadow">
          <h3 class="text-center white">🔐 ShadowCorp Admin Portal</h3>
          
          <p class="text-center red">Access Restricted. Admin Login Required.</p>

                    <?php
          session_start();
          if (isset($_SESSION['error_message'])) {
              echo '<div class="alert alert-danger">' . $_SESSION['error_message'] . '</div>';
              unset($_SESSION['error_message']); // Clear the message after displaying it
          }
          if (isset($_SESSION['success_message'])) {
              echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
              unset($_SESSION['success_message']); // Clear the message after displaying it
          }
          ?>


          <form action="login.php" method="POST">

            <div class="mb-3">
              <label class="form-label white">Username</label>
              <input type="text" class="form-control" name="username" required>
            </div>
            <div class="mb-3">
              <label class="form-label white">Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="d-grid">
              <button class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
        <p class="text-center mt-3 red">Only authorized users can access the system.</p>
      </div>
    </div>
  </div>
</body>
</html>
