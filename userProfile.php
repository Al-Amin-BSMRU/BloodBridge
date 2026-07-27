<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link rel="stylesheet" href="userProfile.css">
</head>
<body>
  <div class="hero">
    <nav>
      <img src="lionPic.jpg" class="logo">
      <ul>
        <!-- <li><a class="active" href="userProfile.php"></a></li> -->
        <li><a href="home.php" class="navbar" >Home</a></li>
        <!-- <li><a class="active" href="userProfile.php"></a></li> -->
        <li><a href="branchh.php" class="navbar">Branch</a></li>
        <!-- <li><a class="active" href="userProfile.php"></a></li> -->
        <li><a href="about.php" class="navbar">About & Contact</a></li>
        <!-- <li><a class="active" href="userProfile.php"></a></li> -->
        <li><a href="feedback.php" class="navbar">Feedback</a></li>
        <!-- <li><a class="active" href="userProfile.php"></a></li> -->
        <li><a href="bloodUsage.php" class="navbar">Blood Usage</a></li>
        <!-- <li><a class="active" href="userProfile.php"></a></li> -->
        <li><a href="donationCamp.php" class="navbar">Donation Camp</a></li>
        <!-- <li><a class="active" href="userProfile.php"></a></li> -->
        <li><a href="testReport.php" class="navbar">Test Report</a></li>    
      </ul>
      <img src="myPic.jpg" class="user_pic" onclick="toggleMenu()">
      <div class="sub-menu-wrap" id="subMenu" >
        <div class="sub-menu">
          <div class="user-info">
            <img src="myPic.jpg" class="second_user_pic">
            <h3>Saifur Rahman</h3>
          </div>
          <hr>

          <a href="#" class="sub-menu-link">
            
            <p>Edit Profile</p>
            <span>></span>
          </a>
          <a href="donationForm.php" class="sub-menu-link">
            
            <p>Donation</p>
            
            <span>></span>
          </a>
          <a href="donationHistory.php" class="sub-menu-link">
            
            <p>Donation History</p>
            <span>></span>
          </a>
          <a href="requestForm.php" class="sub-menu-link">
            
            <p>Request</p>
            <span>></span>
          </a>
          <a href="requestHistory.php" class="sub-menu-link">
            
            <p>Request History</p>
            <span>></span>
          </a>
          <a href="userFeedback.php" class="sub-menu-link">
            
            <p>Feedback</p>
            <span>></span>
          </a>
          <a href="#" class="sub-menu-link">
            
            <p>Logout</p>
            <span>></span>
          </a>
        </div>
      </div>

    </nav>
  </div>

  <script>
    let subMenu = document.getElementById("subMenu");
    function toggleMenu()
    {
      subMenu.classList.toggle("open-menu");
    }


    // Add this JavaScript to your existing script

document.addEventListener('DOMContentLoaded', function() {
  const navLinks = document.querySelectorAll('nav ul li a');

  navLinks.forEach(link => {
    link.addEventListener('click', function() {
      // Remove active class from all links
      navLinks.forEach(lnk => {
        lnk.classList.remove('active');
        lnk.style.transform = 'translateY(0)'; // Reset transform
      });
      // Add active class to the clicked link
      this.classList.add('active');
      this.style.transform = 'translateY(-3px)'; // Apply transform effect
    });
  });
});
  </script>

</body>
</html>