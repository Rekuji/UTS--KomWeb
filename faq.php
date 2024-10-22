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

$sql = "SELECT * FROM faq";
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
<body class="bg-dark">
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
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sertifikat.php">Certificates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontak.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="p-5 container bg-secondary rounded border-radius-50%">
        <!-- FAQ Header -->
        <div class="mb-5 mt-4">
            <h1 class ="text-light">Frequently Asked Questions</h1>
            <p class ="text-light">As a university student, here are my answers for common questions that you might have!</p>
        </div>

        <!-- FAQ Sections -->
        <div class="pb-4">
            <h5 class ="text-light"><?php echo $row["tanya"];?></h5>
            <p class ="text-light"><?php echo $row["jawab"];?></p>
        </div>

        <div class="pb-4">
            <?php $row = $result->fetch_assoc();?>
            <h5 class ="text-light"><?php echo $row["tanya"];?></h5>
            <p class ="text-light"><?php echo $row["jawab"];?></p>
        </div>

        <div class="pb-4">
            <?php $row = $result->fetch_assoc();?>
            <h5 class ="text-light"><?php echo $row["tanya"];?></h5>
            <p class ="text-light"><?php echo $row["jawab"];?></p>
         </div>

        <div class="pb-4">
            <?php $row = $result->fetch_assoc();?>
            <h5 class ="text-light"><?php echo $row["tanya"];?></h5>
            <p class ="text-light"><?php echo $row["jawab"];?></p>
        </div>

        <div class="pb-4">
            <?php $row = $result->fetch_assoc();?>
            <h5 class ="text-light"><?php echo $row["tanya"];?></h5>
            <p class ="text-light"><?php echo $row["jawab"];?></p>
        </div>

    </div>

</body>
</html>