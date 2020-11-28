<div class="hero">
  <div class="hero__inner">
    <div class="container">
      <div class="hero__row">
        <h1 class="hero__header">Login</h1>
        <div class="hero__breadcrumbs">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="container">
  <div class="row">
    <div class="col-md-8">
      <form class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data">
        <div class="form-group">
          <label class="control-label col-sm-3">Email ID</label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Enter your Email ID" value="">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3">Password</label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="password" id="password" placeholder="Choose password (5-15 chars)" value="">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-xs-offset-3 col-md-8 col-sm-9">
            <span class="text-muted">
              <span class="label label-warning">Note:-</span>
              <a href="<?php echo base_url(); ?>member/access/register">Saya belum memiliki akun?</a>
            </span>
          </div>
        </div>

        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-10">
            <input name="Submit" type="submit" value="Login" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
  </div>
</div> -->

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <?php echo $this->session->flashdata('verify_msg'); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel">
        <div class="panel-body">
          <?php $attributes = array("name" => "loginform");
          echo form_open("member/access/login", $attributes); ?>

          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" />
            <span class="text-danger"><?php echo form_error('email'); ?></span>
          </div>

          <div class="form-group">
            <label for="subject">Password</label>
            <input class="form-control" name="password" placeholder="Password" type="password" />
            <span class="text-danger"><?php echo form_error('password'); ?></span>
          </div>

          <div class="form-group">
            <button name="submit" type="submit" class="btn btn-danger">Login</button>
            <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
            <p>Belum mempunyai akun, daftar ke koni terdekat.</p>
            <!-- <a href="<?php echo site_url(); ?>member/access/register">saya belum mempunyai akun!</a> -->
          </div>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>

        </div>
      </div>
    </div>
  </div>
</div>