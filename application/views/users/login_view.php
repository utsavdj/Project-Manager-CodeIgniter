<?php if($this->session->userdata('logged_in')): ?>

    <h2>Logout</h2>

    <?php
        if($this->session->userdata('username')):
            echo "<p>You are logged in as " . $this->session->userdata('username') . "</p>";
        endif;

        echo form_open('users/logout');
        $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Logout'
        );
        echo form_submit($data);
        echo form_close();
    ?>

<?php else: ?>

    <h2>Login form</h2>

    <?php $attributes = array('id'=>'login_form', 'class'=>'form_horizontal') ?>

    <?php
    if($this->session->flashdata('errors')):
        echo "<div class='alert alert-danger'>" . $this->session->flashdata('errors') . "</div>";
    endif;
    ?>
    <?php echo form_open('users/login', $attributes); ?>
    <div class="form-group">
        <?php echo form_label('Username'); ?>
        <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'username',
            'placeholder' => 'Enter Username'
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
        <?php
        $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Login'
        );
        ?>
        <?php echo form_submit($data) ?>
    </div>
    <?php echo form_close(); ?>

<?php endif; ?>