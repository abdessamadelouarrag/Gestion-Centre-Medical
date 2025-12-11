<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Rendezvous</title>
    <link rel="stylesheet" href="/styles/style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="form-container">
        <header class="form-header">
            <h2>Book a New Rendezvous</h2>
            <p>Please fill in the details for the new appointment.</p>
        </header>

        <form action="#" method="POST" class="rendezvous-form">
            
            <div class="form-group">
                <label for="title">Appointment Title:</label>
                <input type="text" id="title" name="title" placeholder="e.g., Client Meeting, Doctor Visit" required>
            </div>

            <div class="form-group">
                <label for="contact">Contact/Guest Name:</label>
                <input type="text" id="contact" name="contact" placeholder="Name of the person/organization" required>
            </div>
            
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required>
            </div>
            
            <div class="form-group">
                <label for="location">Location/Platform:</label>
                <input type="text" id="location" name="location" placeholder="e.g., Office, Zoom, Google Meet">
            </div>

            <div class="form-group">
                <label for="notes">Notes/Details:</label>
                <textarea id="notes" name="notes" rows="4" placeholder="Brief description or specific instructions"></textarea>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="submit-btn">
                    Confirm Rendezvous
                </button>
                <button type="button" class="cancel-btn" onclick="window.history.back()">
                    Cancel
                </button>
            </div>

        </form>
    </div>

</body>
</html>