
<?php get_header(); ?>

  <!-- section/home -->
  <section id="home">
    <h1 class="pb-3">Lorem ipsum dolor sit amet Eget etiam arcu viverra. </h1>
    <p>
      Lorem ipsum dolor sit amet consectetur. Ultricies blandit et ut varius massa. In penatibus id bibendum at volutpat
      netus viverra elit. Maecenas pharetra id massa fames vitae.
    </p>
    <div class="btn_div_content">
      <a href="#" class="btn_div text-white" style="border: 2px solid #fff; box-sizing: border-box;">Apply For Grant</a>
      <a href="#" class="btn_di text-white">Donate</a>
    </div>
  </section>



  <!-- section/about -->
  <section id="feature_sction">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class=" d-lg-flex justify-content-center features_img">
            <h5 class="">Featured On </h5>
            <img src="<?php echo get_template_directory_uri (); ?>/Images/image 5.png" id="bbc" alt="">
            <img src="<?php echo get_template_directory_uri (); ?>/Images/image 6.png" id="nta" alt="">
            <img src="<?php echo get_template_directory_uri (); ?>/Images/image 7.png" id="forbe" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="about">
    <h1 class="p-lg-4 about-2 d-lg-none d-block">About ICCEF</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-block d-none">
          <img src="<?php echo get_template_directory_uri (); ?>/Images/Innocent-Chukwuma-3 1.png" alt="" class="img-fluid chukwuma">
        </div>
        <div class="col-lg-6 pt-1 mt-0">
          <h1 class="p-lg-4 about-2 d-lg-block d-none">About ICCEF</h1>
          <p class="pt-2">
            Innocent Chukwuemeka Chukwuma Empowerment Foundation – ICCEF is a family foundation set up in honor of
            Innocent Chukwuma to drive his vision of an empowered young generation and an inclusive society where women
            and young people thrive. Innocent dedicated more than three decades of his life to fighting for marginalized
            voices, creating new ideas for social justice and building platforms for creative support to the civic space
            and civic voices. He was resolute and consistent about amplifying new voices and promoting intergenerational
            mentoring. Innocent strongly believed in women’s rights and had as his sign off on his email a pledge that
            “I will not serve as a panelist at a public conference when there are no women on the panel”
          </p>
        </div>
      </div>
    </div>
  </section>


  <!-- section/blog -->
  <section id="blog">
    <div class="container">
      <div class="row justify-content-center gy-3">
        <div class="col-lg-4 blog_card">
          <div class="card shadow-lg-none card-blog" id="card">
           <div class="card-img">
            <img src="<?php echo get_template_directory_uri (); ?>/Images/blog 1.png" class="card-img-top" alt="...">
            <div class="empty_empty_content"></div>
           </div>
            <div class="card-body card-text_title">
              <h5 class="card-title">Our Vision</h5>
              <p class="card-text pt-3 mb-3">
                An inclusive society where young people and women are positively impacting their communities and driving
                positive change.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 blog_card">
          <div class="card shadow-lg-none card-blog" id="card">
           <div class="card-img">
            <img src="<?php echo get_template_directory_uri (); ?>/Images/blog 2.png" class="card-img-top" alt="...">
            <div class="empty_empty_content"></div>
           </div>
            <div class="card-body p-4">
              <h5 class="card-title">Our Mission</h5>
              <p class="card-text pt-lg-2">
                To support initiatives that provide Nigerian youth and women with the opportunities to discover and
                develop themselves to become self-reliant and credible leaders who drive positive impact in their
                communities.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 blog_card">
          <div class="card shadow-lg-none card-blog" id="card">
           <div class="card-img">
            <img src="<?php echo get_template_directory_uri (); ?>/Images/blog 3.png" class="card-img-top" alt="...">
            <div class="empty_empty_content"></div>
           </div>
            <div class="card-body p-3">
              <h5 class="card-title">Core Value</h5>
              <ul class="pt-3">
                <li>Multigenerational partnerships (mentoring)</li>
                <li> Innovation</li>
                <li>Non-discrimination</li>
                <li>Gender Equity</li>
                <li>Accountability</li>
                <li>Respect</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="btn_div_content btn_contain text-center" id="medium_blog">
        <a href="#" class="btn_div fw-bold" style="border: 2px solid #21428C; color: #21428C;">Apply For Grant</a>
        <a href="#" class="btn_di text-white fw-bold">Donate</a>
      </div>
    </div>
  </section>

  
  <!-- section/bio -->
  <section id="bio">
    <h1>Biography of THE MAN, Innocent Chukwuemeka Chukwuma</h1>
    <div class="container">
      <div class="row bio-row">
        <div class="col-lg-12 bio_bg">
          <a href="#"><img src="<?php echo get_template_directory_uri (); ?>/Images/Vector.png" alt=""></a>
        </div>
      </div>
    </div>
  </section>


  <?php 
//load template post-content.php in index.php
   get_template_part('temp_parts/featured_programme', 'content');
   get_template_part('temp_parts/featured_news', 'content');

?>


 

  
  

<?php get_footer(); ?>
  