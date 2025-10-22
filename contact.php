<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="src/assets/style.css">
    <script src="src/assets/app.js"></script>
</head>

<body>
    <?php include 'src/components/nav.php' ?>

    <main class="contact-section">
        <div class="contact-container">
            <!-- Scanline Overlay -->
            <div class="scanline"></div>

            <h1 class="contact-title">Contact Me</h1>
            <p class="contact-subtitle">Got a project or question? Let’s connect ⚡</p>

            <form class="contact-form" id="contactForm">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>

                <button type="submit" class="send-btn">Send Message</button>
            </form>
        </div>

        <!-- Success Popup -->
        <div class="success-popup" id="successPopup">
            <div class="popup-content">
                <h2>Message Sent!</h2>
                <p>Thanks for reaching out — I’ll get back to you soon.</p>
                <button id="closePopup">Close</button>
            </div>
        </div>
    </main>


    <?php include 'src/components/footer.php' ?>
</body>

</html>