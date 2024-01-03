<?php

@include 'config.php';

session_start();
if (!isset($_SESSION['user_name'])) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iNote</title>
    <link rel="stylesheet" href="csss.css">
</head>

<body>
    <div class="banner">
        <div class="navbar">
            
        <h1><a style="text-decoration: none; color: black;" href="user.php">I<span style="color:red;">NOTE</span></a></h1>
            <!-- <h2 class="logo">iNotes</h2> -->
            <ul>

                <li><a>Welcome <span><?php echo $_SESSION['user_name'] ?></a></span></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="notes.php">iNotes</a></li>
                <li><a href="logout.php">|| Log Out</a></li>
            </ul>
        </div>
    </div>

    <div class="bc">
        <h1>The simplest way to keep notes.</h1>
        <p>Organize your mind or scale your business the right way, every time. Become focused, organized, and calm with iNotes.</p>
    </div>

    <div class="content">
        <div class="image-container">
            <img src="images/Download Woman working with computer_ Bright colorful vector illustration (1).  for free" alt="Placeholder Image">
        </div>
        <div class="text-container">
            <h3>WORK ANYWHERE</h3>
            <p>Keep important info handy—your notes sync automatically to all your devices.</p>
            <pre>

         </pre>
            <h3>TURN TO-DO INTO DONE</h3>
            <p>Bring your notes, tasks, and schedules together to get things done more easily.</p>
            <pre>

        </pre>
            <h3>FIND THINGS FAST</h3>
            <p>Get what you need, when you need it with powerful, flexible search capabilities.</p>
        </div>
    </div>

    <div class="midpart">
        <h1>Find your productivity happy place</h1>
        <pre>

    </pre>
        <p>See whats possible with iNote</p>
        <pre>


        </pre>
        <video width="100%" height="80%" controls>
            <source src="images/Home Page - Personal - Microsoft​ Edge 2023-08-28 08-16-23.mp4" type="video/mp4">
        </video>
    </div>
    <pre>




</pre>

    <div class="comp">
        <h1>Comprehensive underneath, simple on the surface</h1>
        <div class="row">
            <div class="column">
                <img src="images/icons8-large-blue-diamond-48.png" alt="Logo">
                <h3>Stay organized</h3>
                <pre>

      </pre>
                <p>Add tags to find notes quickly with instant searching.</p>
            </div>
            <div class="column">
                <img src="images/icons8-fast-up-button-48.png" alt="Logo">
                <h3>Go back in time</h3>
                <pre>

      </pre>
                <p>Notes are backed up with every change, so you can see what you noted last week or last month.</p>
            </div>
            <div class="column">
                <img src="images/icons8-customs-48.png" alt="Logo">
                <h3>It is free</h3>
                <pre>

      </pre>
                <p>Apps, backups, syncing, sharing it is all completely free.</p>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <img src="images/icons8-antenna-bars-48.png" alt="Logo">
                <h3>Use it everywhere</h3>
                <pre>

      </pre>
                <p>Notes stay updated across all your devices, automatically and in real time. Theres no “sync” button: It just works.</p>
            </div>
            <div class="column">
                <img src="images/icons8-pause-button-48.png" alt="Logo">
                <h3>Work together</h3>
                <pre>

      </pre>
                <p>Share a to-do list, post some instructions, or publish your notes online.</p>
            </div>
            <div class="column">
                <img src="images/icons8-shuffle-tracks-button-48.png" alt="Logo">
                <h3>Support</h3>
                <pre>

      </pre>
                <p>Write, preview, and publish your notes </p>
            </div>
        </div>
    </div>

    <section>
        <h1>What people are saying</h1>
        <div class="container1">
            <div class="reviews-row">
                <div class="review">
                    <p>"If you are not using iNote, you are missing out."<br>- TechCrunch</p>
                </div>
                <div class="review">
                    <p>"If you are looking for a cross-platform note-taking tool with just enough frills, it is hard to look beyond Inote."<br>- MacWorld</p>
                </div>
                <div class="review">
                    <p>"If you want a truly distraction-free environment then you cant do better than Inote for your note-taking needs."<br>- Zapier</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer11">
        <div id="footer">
            <div id="company-name">iNote</div>
            <p id="copyright">&copy; 2023 Inote-Corp. All rights reserved.</p>
        </div>


    </footer>

</body>

</html>