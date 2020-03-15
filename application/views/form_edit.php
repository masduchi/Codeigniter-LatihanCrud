<?php $this->load->view('header');?>
<header class="masthead" style="background-image: url('<?php echo base_url();?>assets/img/about-bg.jpg')">
 <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Edit Artikel</h1>
        </div>
      </div>
    </div>
  </div>
</header>   
<div class="container">
  <div class="row justify-content-center">
    <div class="com-md-8">
<h1>Edit Artikel</h1>
<div class="alert alert-warning">
        <?php echo validation_errors();  ?>
</div>
<?php echo $this->session->flashdata('message');  ?>
<?php echo form_open_multipart();?>
            <div class="form-group">
                <label>Judul</label>
                <?php echo form_input('title', set_value('title', $blog['title']), 'class="form-control"'); ?>
            </div>
            <div class="form-group">
                <label>Url</label>
                <?php echo form_input('url', set_value('url', $blog['url']), 'class="form-control"'); ?>
            </div>
            <div class="form-group">
                <label>Konten</label>
                <?php echo form_textarea('content', set_value('content', $blog['content']), 'class="form-control"');?>
            </div>
            <div class="form-group">
                <label>Cover</label>
                <?php echo form_upload('cover', $blog['cover'], 'class="form-control"'); ?>
            </div>  
            <button type="submit" class="btn btn-primary">Simpan Artikel</butto 
</div>
</div>
</div>
<?php $this->load->view('footer');?>