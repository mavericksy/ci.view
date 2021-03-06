<?php 
  $this->view->partial('common/_sub_nav', array(
    'sub_nav' => array(
      array('title' => 'Email Us', 'href' => 'contact/index', 'nav_selected' => 'Email Us'),
      array('title' => 'Guestbook', 'href' => 'contact/gusetbook', 'nav_selected' => 'Email Us')
  )));
?>

<div id="main">
  <div id="email" class="clearfix">
    <h2><?php echo $heading; ?></h2>
    <div class="spliter spacer40"></div>
    <div id="info" class="float-l">
      <div class="row">
        <span>Email</span>
        hello@dreamerslab.com
      </div>
      <div class="row">
        <span>Tel</span>
        +886-2-22250013
      </div>
      <div class="row">
        <span>Address</span>
        No. 17, Alley 222, Lian Cheng rd., Chung Ho Taipei 23574, Taiwan
      </div>
      <div class="row">
        <span>Twitter</span>
        http://twitter.com/dreamerslab
      </div>
    </div>
    <div id="form" class="float-r">
      <?php echo form_open('contact/send', array('id' => 'email-form')); ?>
      <div class="row">
        <label for="contact-name">Name:</label>
        <?php echo form_input(array('id' => 'contact-name', 'name' => 'name', 'value' => $name, 'class' => 'text')); ?>
        <?php echo form_error('name', '<label class="error">', '</label>'); ?>
      </div>
      <div class="row">
        <label for="contact-email">Email:</label>
        <?php echo form_input(array('id' => 'contact-email', 'name' => 'email', 'value' => $email, 'class' => 'text')); ?>
        <?php echo form_error('email', '<label class="error">', '</label>'); ?>
      </div>
      <div class="row">
        <label for="contact-comments">Comments:</label>
        <?php echo form_textarea(array('id' => 'contact-comments', 'name' => 'comments', 'value' => $comments, 'cols' => 24, 'rows' => 6 )); ?>
        <?php echo form_error('comments', '<label class="error">', '</label>'); ?>
      </div>
      <?php echo form_submit(array('class' => 'btn', 'name' => 'submit', 'value' => 'Send')); ?>
      <?php echo form_close(); ?>
    </div>
  </div>

  <div class="spliter"></div>
</div>