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
<body class="bg-secondary">
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
                            <a class="nav-link" href="faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="kontak.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


<main class="container">
        <h1 class="pb-4 pt-4 text-center text-light">Please Contact Me!</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = htmlspecialchars($_POST['nama']);
            $email = htmlspecialchars($_POST['email']);
            $subjek = htmlspecialchars($_POST['subjek']);
            $pesan = htmlspecialchars($_POST['pesan']);

            $servername = "localhost";
            $username = "root";
            $password = "sempak123";
            $dbname = "php";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO kontak (nama, email, subjek, pesan) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $nama, $email, $subjek, $pesan);

            if ($stmt->execute()) {
                echo "<div class='alert alert-success' role='alert'>";
                echo "<h4 class='alert-heading'>Contact Form Submission</h4>";
                echo "<p>Your message has been sent successfully.</p>";
                echo "</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>";
                echo "<h4 class='alert-heading'>Error</h4>";
                echo "<p>There was an error submitting your message. Please try again later.</p>";
                echo "</div>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>
        <form action="kontak.php" method="post" class="p-4 border rounded shadow-sm bg-light">
            <div class="mb-3">
                <label for="nama" class="form-label fw-bold">Name</label>
                <input type="text" class="form-control border-0 shadow-sm" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="email" class="form-control border-0 shadow-sm" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="subjek" class="form-label fw-bold">Subject</label>
                <input type="text" class="form-control border-0 shadow-sm" id="subjek" name="subjek" required>
            </div>
            <div class="mb-3">
                <label for="pesan" class="form-label fw-bold">Message</label>
                <textarea class="form-control border-0 shadow-sm" id="pesan" name="pesan" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-dark w-100 shadow-sm">Submit</button>
        </form>
    </main>

</body>
</html>