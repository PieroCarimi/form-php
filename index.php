<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet" type="text/css">
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
                    <input type="text" name="companyName" placeholder="Company name">
                </div>
                <div>
                    <input type="text" name="fullName" placeholder="Full name">
                </div>
                <div>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div>
                    <input type="text" name="phone" placeholder="Phone">
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
</body>
</html>