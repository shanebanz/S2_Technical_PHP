<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Resume</title>
    <link rel="stylesheet" href="resume-style.css">
</head>
<body>
<?php
$name = "Norwood Shane Banzuela";
$email = "202312390@fit.edu.ph";
$phone = "+63 912 345 6789";
$address = "Pasig City, Metro Manila";
?>

<table class="resume-table">
    <tr>
        <td class="photo-cell">
            <img src="https://media.licdn.com/dms/image/v2/D5603AQEP8xEL1BcYQw/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1732372103712?e=1754524800&v=beta&t=Rlj0Uhq-Y5fBdJqMq_Qnr1FhjtxEr-o44X1Gam-y6yU"
             alt="Profile Photo">
        </td>
        <td class="info-cell">
            <h2>Personal Information</h2>
            <p>Name: <?php echo $name; ?></p>
            <p>Email: <?php echo $email; ?></p>
            <p>Phone: <?php echo $phone; ?></p>
            <p>Address: <?php echo $address; ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="section-cell">
            <h3>Career Objective</h3>
            <p>To obtain a position as a Web Developer where I can utilize my programming skills in HTML, CSS, JavaScript, PHP, and database management to contribute to innovative web solutions while gaining practical experience in the IT industry.</p>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="section-cell">
            <h3>Educational Attainment</h3>
            <p><strong>College:</strong> Bachelor of Science in Information Technology - Web and Mobile Application Development<br>
            FEU Institute of Technology (2023-Present)</p>
            <p><strong>Senior High School:</strong> ICT Strand<br>
            Rizal Highchool (2020-2022)</p>
            <p><strong>Junior High School:</strong><br>
            Rizal High School (2016-2020)</p>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="section-cell">
            <h3>Skills</h3>
            <p>HTML, CSS, JavaScript, PHP, Python, Java, C++, SQL, Visual Basic .NET, Bootstrap</p>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="section-cell">
            <h3>Certifications</h3>
            <p>CCNA: Switching, Routing, and Wireless Essentials<br>
            CCNA: Introduction to Networks<br>
            Cisco Certified Support Technician Networking (CCST Networking)</p>
        </td>
    </tr>
</table>

</body>
</html>