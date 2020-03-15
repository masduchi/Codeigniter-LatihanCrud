  <?php $this->load->view('header');  ?>
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Selamat Datang</h1>
            <span class="subheading">Website ini berisi daftar artikel terbaru</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      	<?php echo $this->session->flashdata('message');  ?>
      	<form>
		<input type="text" name="find">
		<button type="submit">Cari</button>
		</form>
      	<?php foreach ($blogs as $key => $blog):?>
        <div class="post-preview">
          <a href="<?php echo site_url('blog/detail/'.$blog['url']);?>">
            <h2 class="post-title">
              <?php echo $blog['title'];?>
            </h2>
          </a>
          <p class="post-meta">Posted on <?php echo $blog['date'];?>
          <?php if (isset($_SESSION['username'])) {
          ?>
          <a href="<?php echo site_url('blog/edit/'.$blog['id']);?>">Edit</a>
		  <a href="<?php echo site_url('blog/delete/'.$blog['id']);?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Delete</a>
		  <?php 
		  }
		  ?>
		  </p>
          <p><?php echo $blog['content']; ?></p>
        </div>
        <hr>
    <?php endforeach; ?>
    <?php echo $this->pagination->create_links();  ?>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>
  <hr>
<?php $this->load->view('footer');?>

 