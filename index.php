<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form</title>
</head>
<body>
    <div class="containerDisplay">
        <div class="container">
            <h1>Fill the form below</h1>
            <p>Complete the below form to get instant access.</p>
            <div id="message" class="hide"></div>
            <form id="contact-form" action="submit.php" method="post">
                <div>
                    <input type="text" id="companyName" name="companyName" placeholder="Company name">
                </div>
                <div>
                    <input type="text" id="fullName" name="fullName" placeholder="Full name">
                </div>
                <div>
                    <input type="email" id="email" name="email" placeholder="Email">
                </div>
                <div>
                    <input type="text" id="phone" name="phone" placeholder="Phone" pattern="[0-9]{}">
                </div>
                <div>
                    <select id="service" name="service" placeholder="Choose service">
                        <option value="" disabled selected hidden>Choose service</option>
                        <option value="amazon">Amazon</option>
                        <option value="fedex">FedEx</option>
                        <option value="tnt">TNT Express</option>
                        <option value="ups">UPS</option>
                    </select><br>
                </div>
                <button type="submit" id="submitButton" disabled>Send request</button>
            </form>
        </div>
        <div>
                <img src="immagine.png" alt="Delivery">
            </div>
    </div>
    <script src="script.js"></script>
</body>
</html>