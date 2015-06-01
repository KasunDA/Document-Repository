<div class="container" id = 'auth_box_signup'>
  <script type="text/javascript">
  var baseurl = "<?php print base_url(); ?>";
  </script>

  <?php $attributes = array("class" => "signup", "id" => "signup_form", "name" => "signup_form", "onsubmit" => "return validateForm()");
  echo form_open("auth/signup", $attributes);?>
  <fieldset>
    
    <legend class="legend">Sign Up</legend>
    <a id = "error_msg"></a>

    <div class="input">
      <input style = "width:100%;" type="text" name="txt_name" id = "txt_name" placeholder="Display Name" required />
      <span><i class="fa fa-envelope-o"></i></span>
    </div>
    <div class="input">
      <input style = "width:100%" type="text" name="txt_usr" placeholder="Username" required />
      <span><i class="fa fa-envelope-o"></i></span>
    </div>
    
    <div class="input">
      <input type="password" placeholder="Password" name="txt_password" id = "txt_password" required />
      <input style = "float: right" type="password" placeholder="Retype Password" name="txt_repassword" id= "txt_repassword" required />
      <span><i class="fa fa-envelope-o"></i></span>
    </div>
    <div class="input">
      <input style = "width:100%" type="email" name="txt_email" placeholder="Email" required />
      <span><i class="fa fa-envelope-o"></i></span>
    </div>
    <div class="input">
      <select class = 'form-control' name = 'txt_lang'>
        <option value="" disabled selected>Select Default Language</option>
        <option value="lang_en">English</option>
        <option value="lang_vi">Tiếng Việt</option>
        <option value="lang_de">Deutsch</option>
      </select>
      <span><i class="fa fa-lock"></i></span>
    </div>
    <div class="input">
      <?php echo $captcha['image'];
      ?>
      <input type="text" placeholder="Enter captcha here" name="txt_captcha" required />
    </div>
    <div align = "center" style="margin-bottom: 40px;">
      <input type="submit" class="btn btn-info" value="Submit">
    </div>
  </fieldset>
  
  <?php echo $this->session->flashdata('msg'); ?>
  <?php echo form_close(); ?>
</div>