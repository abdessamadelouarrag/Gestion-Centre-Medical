<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendezvous Dashboard</title>
    <link rel="stylesheet" href="/styles/rendezvous.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="dashboard-container">

        <aside class="sidebar">
            <div class="logo">Rendezvous App</div>
            <nav>
                <ul>
                    <li><a href="#" class="active">Dashboard</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            <header class="header">
                <h1>Welcome, User!</h1>
                <div class="header-actions">
                    <a href="/form.php">
                        <button class="add-rendezvous-btn">
                            + Add New Rendezvous
                        </button>
                    </a>
                </div>
            </header>

            <section class="stats-cards">
                <div class="card">
                    <h3>Total Appointments</h3>
                    <p class="number">0</p>
                </div>
                <div class="card">
                    <h3>Upcoming Today</h3>
                    <p class="number">0</p>
                </div>
                <div class="card">
                    <h3>Pending Requests</h3>
                    <p class="number">0</p>
                </div>
            </section>

            <section class="appointment-list">
                <h2>Upcoming Rendezvous</h2>
                <div class="list-item">
                    <p><strong>Dr. Smith (Consultation)</strong></p>
                    <p class="time">10:00 AM - Dec 12</p>
                </div>
            </section>
        </main>
    </div>

</body>

</html>