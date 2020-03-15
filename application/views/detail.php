 <?php $this->load->view('header');  ?>
 <!-- Page Header -->
  <?php 
  if (empty($blogs['cover'])) {
  $cover = base_url().'assets/img/home-bg.jpg';
  }else{
  $cover = base_url().'./uploads/'.$blogs['cover'];
  }
?>
<header class="masthead" style="background-image: url('<?php echo $cover;?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php echo $blogs['title'];?></h1>
            <h2 class="subheading"></h2>
            <span class="meta">Posted on
              <?php echo $blogs['date'];?></span>
          </div>
        </div>
      </div>
  </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p><?php echo $blogs['content'];   ?></p>
        </div>
      </div>
    </div>
  </article>
  <hr>
  <?php $this->load->view('footer');  ?>