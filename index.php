<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipa na M-Pesa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@200&display=swap");

      body {
        background-color: #eaedf4;
        font-family: "Rubik", sans-serif;
      }
      img {
        border-radius: 15px;
      }

    </style>
</head>
<body class="snippet-body">
  <div class="container d-flex justify-content-center">
    <div class="card mt-5 px-3 py-4 col-lg-3 col-12 border-0">
      <div class="d-flex flex-row justify-content-center">
        <img src="./images/1200px-M-PESA_LOGO-01.svg.png" class="mr-3" height="75" alt="M-Pesa Logo">
      </div>
      
      <form class="row g-3 mt-4" action="./stk_initiate.php" method="POST">
        <!-- Floating label for Amount -->
        <div class="form-floating mb-3">
          <input type="text" class="form-control border-success" id="amount" name="amount" placeholder="Enter Amount" required>
          <label for="amount">Amount</label>
        </div>

        <!-- Floating label for Phone Number -->
        <div class="form-floating mb-3">
          <input type="text" class="form-control border-success" id="phone" name="phone" placeholder="Enter Phone Number" required>
          <label for="phone">Phone Number</label>
        </div>

        <!-- Submit Button -->
        <div class="d-grid">
          <button type="submit" class="btn btn-success" name="submit" value="submit">Donate</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
