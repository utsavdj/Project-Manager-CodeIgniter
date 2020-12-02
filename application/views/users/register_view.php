 <h2>Register</h2>

    <?php $attributes = array('id'=>'register_form', 'class'=>'form_horizontal') ?>

    <?php
    if(validation_errors()):
        echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
    endif;
    ?>
    <?php echo form_open('users/register', $attributes); ?>
     <div class="form-group">
         <?php echo form_label('First Name'); ?>
         <?php
         $data = array(
             'class' => 'form-control',
             'name' => 'first_name',
             'placeholder' => 'Enter your first name',
             'value' => set_value('first_name')
         );
         ?>
         <?php echo form_input($data) ?>
     </div>

     <div class="form-group">
         <?php echo form_label('Last Name'); ?>
         <?php
         $data = array(
             'class' => 'form-control',
             'name' => 'last_name',
             'placeholder' => 'Enter your last name',
             'value' => set_value('last_name')
         );
         ?>
         <?php echo form_input($data) ?>
     </div>

     <div class="form-group">
         <?php echo form_label('Email'); ?>
         <?php
         $data = array(
             'class' => 'form-control',
             'name' => 'email',
             'placeholder' => 'Enter your email',
             'value' => set_value('email')
         );
         ?>
         <?php echo form_input($data) ?>
     </div>

    <div class="form-group">
        <?php echo form_label('Username'); ?>
        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'username',
            'placeholder' => 'Enter Username',
            'value' => set_value('username')
        );
        ?>
        <?php echo form_input($data) ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Password'); ?>
        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'password',
            'placeholder' => 'Enter Password'
        );
        ?>
        <?php echo form_password($data) ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Confirm Password'); ?>
        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'confirm_password',
            'placeholder' => 'Confirm Password'
        );
        ?>
        <?php echo form_password($data) ?>
    </div>

    <div class="form-group">
        <?php
        $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Register'
        );
        ?>
        <?php echo form_submit($data) ?>
    </div>
    <?php echo form_close(); ?>
