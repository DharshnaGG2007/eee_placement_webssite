
<?php
$magazines = [
    [
        "title" => "Batch 2022–2026",
        "file" => "EEE Magazine, Batch 2022-2026.pdf"
    ],
    [
        "title" => "Class of 2025",
        "file" => "Magazine_Class_of_2025-1.pdf"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EEE Department Magazines</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f6fb;
            margin: 0;
            padding: 30px;
        }
        h1 { color: #17365d; }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-top: 25px;
        }
        .card {
            background: white;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 3px 12px #0001;
        }
        .card h2 { color: #17365d; font-size: 20px; }
        .card a, .upload {
            display: inline-block;
            background: #244b80;
            color: white;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            border: 0;
            cursor: pointer;
        }
        .upload { margin-top: 20px; }
        .navbar .logo {
    width: 50px;
    height: 50px;
    object-fit: contain;
    border-radius: 50%;
    margin-bottom: 0;
}
    /* Original EEE navbar styling */
.navbar {
    background-color: #2c3e50;
    color: white;
    padding: 15px 30px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 100;
    margin: -30px -30px 25px -30px;
}

.logo-container {
    display: flex;
    align-items: center;
    gap: 10px;
}

.navbar .logo {
    width: 50px;
    height: 50px;
    object-fit: contain;
    margin-bottom: 0;
}

.nav-title {
    font-size: 22px;
    font-weight: bold;
}

.nav-links {
    display: flex;
    gap: 10px;
}

.nav-links a {
    color: white;
    background-color: transparent;
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 5px;
    font-weight: normal;
}

.nav-links a:hover {
    background-color: #34495e;
    color: white;
}


.creator-footer {
    text-align: center;
    padding: 18px 10px;
    margin-top: 30px;
    color: #34495e;
    font-size: 14px;
    border-top: 1px solid #ddd;
    background: #f8f9fa;
}

.creator-footer p {
    margin: 0;
}

    </style>
</head>
<body>

<nav class="navbar">
    <div class="logo-container">
        <img src="images/itechlogo.png" alt="PSG iTech Logo" class="logo">
        <span class="nav-title">EEE Department</span>
    </div>

    <div class="nav-content">
        <div class="nav-links">
            <a href="dashboard.php">
                <i class="fas fa-home"></i> HOME
            </a>
            <a href="placement_experience.php">
                <i class="fas fa-book"></i> PLACED EXPERIENCE
            </a>

<a href="chatbot.php">
    <i class="fas fa-pencil-alt"></i> PREP WITH AI
</a>

            <a href="magazine.php">
                <i class="fas fa-book-open"></i> MAGAZINE
            </a>
        </div>
    </div>
</nav>

    <a href="dashboard.php"
       style="color:white; text-decoration:none; margin-right:25px;">
        <i class="fas fa-home"></i> HOME
    </a>

    <a href="placement_experience.php"
       style="color:white; text-decoration:none; margin-right:25px;">
        PLACED EXPERIENCE
    </a>

    <a href="magazine.php"
       style="color:white; text-decoration:none;">
        MAGAZINE
    </a>
</div>
    <h1>EEE Department Magazines</h1>
    <p>Select a batch to view its magazine.</p>

    <div class="grid">
        <?php foreach ($magazines as $magazine): ?>
            <div class="card">
                <h2><?= htmlspecialchars($magazine["title"]) ?></h2>
                <p>EEE Department Magazine</p>
                <a href="<?= rawurlencode($magazine["file"]) ?>"
                   target="_blank">View Magazine</a>
            </div>
        <?php endforeach; ?>

        <div class="card">
            <h2>Upcoming Batches</h2>
            <p>New batch magazines can be added here.</p>
        </div>
    </div>

<footer class="creator-footer">
    <p>Created by <strong>Ashaf M</strong> and <strong>Dharshna G G</strong></p>
</footer>

</body>
</html>
