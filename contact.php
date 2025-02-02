<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <header>
        <img src="Images/jis-logo.png" alt="Logo">
        <h1>Contact and Support</h1>
    </header>

    <div class="container">
        <h2>Get in Touch</h2>
        <form action="process.php" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            
            <label for="email">Your Email</label>
            <input type="text" id="email" name="email" placeholder="Your Email" required>
            
            <label for="phone">Your Phone</label>
            <input type="text" id="phone" name="phone" placeholder="Your Phone" required>

            <label for="college">Choose Your College</label>
            <select id="college" name="college" required>
                <option value="">-- Select --</option>
                <option value="college1">Institution 1</option>
                <option value="college2">Institution 2</option>
            </select>
            
            <label for="course">Select Course</label>
            <select id="course" name="course" required>
                <option value="">-- Select --</option>
                <option value="course1">Course 1</option>
                <option value="course2">Course 2</option>
            </select>
            
            <label for="stream">Select Stream</label>
            <select id="stream" name="stream" required>
                <option value="">-- Select --</option>
                <option value="stream1">Stream 1</option>
                <option value="stream2">Stream 2</option>
            </select>

            <textarea name="comments" placeholder="Your comments here." rows="4"></textarea>
            <button type="submit">Submit</button>
        </form>
        <div class="contact-info">
        <h3>Contact Us</h3><br>
        <div><img src="Add_icon.png" alt="Address Icon"><strong>Address:</strong> 157/F, Nilgunj Rd, Sahid Colony, Panihati, Khardaha, West Bengal 700114</div><br>
        <div><img src="phone_logo.png"Phone Icon"><strong>General Enquiry:</strong> +91 83 2289 9853 / 3944 / 5323 (Mon-Sat 10:00am - 7:00pm)</div><br>
        <div><img src="phone_logo.png" alt="Admission Icon"><strong>Admission Enquiry:</strong> +91 95124 78527 / 98531 32153</div><br>
        <div><img src="mail_logo.png" alt="Mail Icon"><strong>Mail:</strong> <a href="mailto:info@jisgroup.org">info@xyz.org</a> (24 x 7 online support)</div><br>
        <div><img src="mail_logo.png" alt="Career Icon"><strong>Career:</strong> <a href="mailto:career@jisgroup.org">career@xyz.org</a> (Send your resume)</div><br>
    </div>


    </div>
</body>
</html>
