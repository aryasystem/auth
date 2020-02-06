<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div> 

<?php echo form_open("auth/login");?>
  <div class="form-group">
      <label><?php echo  lang('login_identity_label', 'identity'); ?></label>
      <?php echo form_input($identity);?>
  </div>
  <div class="form-group">
          <label><?php echo lang('login_password_label', 'password');?></label>
          <?php echo form_input($password);?>
  </div>
  <div class="checkbox">
    <label>
      <?php echo lang('login_remember_label', 'remember');?>
      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
    </label>
      <label class="pull-right">
      <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
    </label>
  </div>
  <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30"><?php echo lang('login_submit_btn') ?></button>      
<?php echo form_close();?>