<h2>Create Task</h2>

<?php $attributes = array('id'=>'create_form', 'class'=>'form_horizontal') ?>

<?php
if(validation_errors()):
    echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
endif;
?>
<?php echo form_open('tasks/create/' .$this->uri->segment(3). '', $attributes); ?>
<div class="form-group">
    <?php echo form_label('Task Name'); ?>
    <?php
    $data = array(
        'class' => 'form-control',
        'name' => 'task_name',
        'placeholder' => 'Enter your task name'
    );
    ?>
    <?php echo form_input($data) ?>
</div>

<div class="form-group">
    <?php echo form_label('Task Detail'); ?>
    <?php
    $data = array(
        'class' => 'form-control',
        'name' => 'task_body',
        'placeholder' => 'Enter your task detail'
    );
    ?>
    <?php echo form_textarea($data) ?>
</div>

<div class="form-group">
    <?php echo form_label('Task Due Date'); ?>
    <?php
    $data = array(
        'class' => 'form-control date',
        'name' => 'due_date',
        'type' => 'date'
    );
    ?>
    <?php echo form_input($data) ?>
</div>

<div class="form-group">
    <?php
    $data = array(
        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'Create'
    );
    ?>
    <?php echo form_submit($data) ?>
</div>
<?php echo form_close(); ?>
