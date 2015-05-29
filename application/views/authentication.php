    <div class="container" id = 'auth_box'>
    <script src="<?php echo base_url('static/js/custom.js'); ?>"></script>
      <?php $attributes = array("class" => "login", "id" => "loginform", "name" => "loginform");
      echo form_open("auth/login", $attributes);?>
      <fieldset>
        
        <legend class="legend">Login</legend>
        
        <div class="input">
          <input type="text" name="txt_username" placeholder="Username" required />
          <span><i class="fa fa-envelope-o"></i></span>
        </div>
        
        <div class="input">
          <input type="password" placeholder="Password" name="txt_password" required />
          <span><i class="fa fa-lock"></i></span>
        </div>
        
        <button  id="btn_login" name="btn_login"  type="submit" class="submit" value = "Login"><i class="fa fa-long-arrow-right"></i></button>
        
      </fieldset>
      
      <?php echo $this->session->flashdata('msg'); ?>
      <?php echo form_close(); ?>
</div>     