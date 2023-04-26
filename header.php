<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en">

<head>
meta charset="<?php bloginfo('charset'); ?> ">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>
</head>

<body>
  <!-- header/navbar -->
  <header class="d-lg-block d-none">
    <nav class="navbar navbar-expand-lg navigation_bar bg-white fixed-top">
      <div class="container">
        <a href="index.html" class="navbar-brand"><img src="<?php echo get_template_directory_uri (); ?>/Images/ICCEF LOGO 1.png" alt=""></a>
        <button class="navbar-toggler hover-none" id="navbar_toggle"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item navbar_dropdown">
              <a class="nav-link" aria-current="page" href="#">About <span><i class="fa fa-angle-down ms-2"></i></span></a>
              <ul class="dropdowns" id="About_Iccef">
                <a href="html files/about.html" class="nav">About ICCEF</a>
                <hr>
                <a href="html files/The man.html" class="">The Man Innocent Chukwuemeka Chukwuma</a>
                <hr>
                <a href="html files/Team.html"> Our Team</a>
              </ul>
            </li>
            <li class="nav-item navbar_dropdown nav-items">
              <a class="nav-link" href="#">Programme <span><i class="fa fa-angle-down ms-2"></i></span></a>
              <ul class="dropdowns" id="Programme_Iccef">
                <a href="html files/youth.html">
                  Youth Innovation and Technological Startups
                </a>
                <hr>
                <a href="html files/Intergeneral.html">
                  Mentoring & Intergenerational Dialogues (Big Brothers & Sisters Project)
                </a>
                <hr>
                <a href="html files/community_youth.html">
                  Community Youth Empowerment & Education
                </a>
                <hr>
                <a href="html files/daughter_project.html">
                  Our Daughters Project
                </a>
                <hr>
                <a href="html files/legacy_project.html">Legacy Projects</a>
              </ul>
            </li>
            <li class="nav-item navbar_dropdown nav-items">
              <a class="nav-link" href="#">Blog <span><i class="fa fa-angle-down ms-2"></i></span></a>
              <ul class="dropdowns" id="Blog_Iccef">
                <a href="html files/stories.html">News/Stories</a>
                <hr>
                <a href="html files/Events.html">Events</a>
                <hr>
                <a href="html files/opportunity.html">Opportunity</a>
                <hr>
                <a href="html files/writings by innocent.html">Writings by <br> Innocent Chukwuemeka Chukwuma</a>
              </ul>
            </li>
            <li class="nav-item navbar_dropdown">
              <a class="nav-link me-2" href="#">Get Involved <span><i class="fa fa-angle-down ms-2"></i></span></a>
              <ul class="dropdowns" id="Get-Involved_Iccef">
                <a href="html files/mentorship.html">As a Mentor</a>
                <hr>
                <a href="#">As a Partner</a>
                <hr>
                <a href="#">Volunteer</a>
              </ul>
            </li>
            <li class="nav-item ">
              <a class=" nav-bt btn" href="#">Apply for Grant</a>
            </li>
            <li class="nav-item">
              <a class="text-white nav_bt btn" href="#">Donate</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <header class="d-block d-lg-none">
    <nav class="navbar navbar-expand-lg nav_navigation bg-white fixed-top">
      <div class="container">
        <a href="index.html" class="navbar-brand"><img src="<?php echo get_template_directory_uri (); ?>/Images/ICCEF LOGO 1.png" alt=""></a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> -->
          <span class="fa fa-bars navbar-toggler" onclick="changeIcon(this)" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></span>
        <!-- </button> -->
        <div class="collapse navbar-collapse accordion" id="navbarNav">
          <div class="navbar-nav text-center accordion_content">
            <div class="accordion_title">
              <a class="nav-link" aria-current="page" href="#" style="color: #21428C;">About</a>
            </div>
            <div class="text-center" id="about_accordion">
              <a href="html files/about.html" class="nav-content-link fw-bold">About ICCEF</a>
              <a href="html files/The man.html" class="nav-content-link fw-bold">The Man Chukwuemeka Chukwuma</a>
              <a href="html files/Team.html" class="nav-content-link fw-bold">Our Team</a>
            </div>
          </div>
          <div class="navbar-nav text-center accordion_content">
            <div class="accordion_title">
              <a class="nav-link" aria-current="page" href="#" style="color: #21428C;">Programme</a>
            </div>
            <div class="text-center" id="programme_accordion">
              <a href="html files/youth.html" class="nav-content-link fw-bold pt-0">Youth Innovation and Technological Startups</a>
              <a href="html files/Intergeneral.html" class="nav-content-link fw-bold">
                Mentoring & Intergenerational Dialogues <br> (Big Brothers & Sisters Project)
              </a>
              <a href="html files/community_youth.html" class="nav-content-link fw-bold">Community Youth Empowerment & Education</a>
              <a href="html files/daughter_project.html" class="nav-content-link fw-bold">Our Daughters Project</a>
              <a href="html files/legacy_project.html" class="nav-content-link fw-bold">Legacy Projects</a>
            </div>
          </div>
          <div class="navbar-nav text-center accordion_content">
            <div class="accordion_title">
              <a class="nav-link" aria-current="page" href="#" style="color: #21428C;">Blog</a>
            </div>
            <div class="text-center" id="blog_accordion">
              <a href="html files/stories.html" class="nav-content-link fw-bold">News/Stories</a>
              <a href="html files/Events.html" class="nav-content-link fw-bold">Events</a>
              <a href="html files/opportunity.html" class="nav-content-link fw-bold">Opportunity</a>
              <a href="html files/writings by innocent.html" class="nav-content-link fw-bold"> Writings by Innocent  ChukwuemekaChukwuma</a>
            </div>
          </div>
          <div class="navbar-nav text-center accordion_content">
            <div class="accordion_title">
              <a class="nav-link" aria-current="page" href="#" style="color: #21428C;">Get Involved</a>
            </div>
            <div class="text-center" id="getInvolved_accordion">
              <a href="html files/mentorship.html" class="nav-content-link fw-bold">As a Mentor</a>
              <a href="#" class="nav-content-link fw-bold">As a Partner</a>
              <a href="#" class="nav-content-link fw-bold">Volunteer</a>
            </div>
          </div>
          <div>
              <a class="nav-link nav-btn btn" href="#">Apply for Grant</a>
          </div>
          <div>
            <a class="nav-link text-white nav_btn btn" href="#">Donate</a>

      
          </div>
        </div>
      </div>
    </nav>
  </header>