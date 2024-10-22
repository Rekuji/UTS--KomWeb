<?php
$servername = "localhost";
$username = "root";
$password = "sempak123";
$dbname = "php";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM ingfo";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en" style="width: 100%; height: 100%; margin: 0px; padding: 0px; overflow-x: hidden;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Designer & Coder Homepage</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body style="width:100%; overflow-x: hidden;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sertifikat.php">Certificates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontak.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container-fluid vh-100 d-flex">
        <div class="row w-99">
            <!-- Designer Section -->
            <div class="col-md-5 d-flex align-items-center justify-content-center bg-dark text-white text-center">
                <div>
                    <h1><?php echo $row["nama"];?></h1>
                    <p class="lead"><?php echo $row["lead"];?></p>
                </div>
            </div>

            <!-- Image Section -->
            <div class="col-md-2 d-flex align-items-center justify-content-center bg-secondary middle-image">
            <?php echo '<img src="data:image/png;base64,' . base64_encode($row['foto']) . '" width="300" height="300" style="border-radius: 50%;" />'; ?>
            </div>

            <!-- Coder Section -->
            <div class="col-md-5 d-flex align-items-center justify-content-center text-center">
                <div>
                    <h4><?php echo $row["deskripsi"];?></h4>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

