<?php
$projectName = "PHP Dynamic Web App";
$status = "Online";
$skills = ["PHP 8.x", "Composer", "PDO / MySQL", "REST APIs"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $projectName; ?></title>
    <style>
        :root {
            --bg: #0d1117;
            --card: #161b22;
            --accent: #777bb4; /* PHP Purple */
            --text: #c9d1d9;
            --success: #2ea44f;
        }
        body {
            font-family: system-ui, -apple-system, sans-serif;
            background: var(--bg);
            color: var(--text);
            margin: 0;
            padding: 2rem;
            display: flex;
            justify-content: center;
        }
        .container {
            max-width: 700px;
            width: 100%;
        }
        .card {
            background: var(--card);
            padding: 2rem;
            border-radius: 10px;
            border: 1px solid #30363d;
        }
        h1 { color: var(--accent); margin-top: 0; }
        .badge {
            background: var(--success);
            color: #fff;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.85rem;
        }
        ul { line-height: 1.8; }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>🐘 <?php echo $projectName; ?></h1>
            <p>Status: <span class="badge"><?php echo $status; ?></span></p>
            <p>Server Time: <strong><?php echo date('Y-m-d H:i:s'); ?></strong></p>
            
            <h2>Tech Stack</h2>
            <ul>
                <?php foreach ($skills as $skill): ?>
                    <li><?php echo htmlspecialchars($skill); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>
</html>
