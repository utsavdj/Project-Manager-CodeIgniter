<h2>Edit Task</h2>

<?php $attributes = array('id'=>'edit_task_form', 'class'=>'form_horizontal') ?>

<?php
if(validation_errors()):
    echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
endif;
?>
<?php echo form_open('tasks/edit/' .$this->uri->segment(3). '', $attributes); ?>
<div class="form-group">
    <?php echo form_label('Task Name'); ?>
    <?php
    $data = array(
        'class' => 'form-control',
        'name' => 'task_name',
        'placeholder' => 'Enter your task name',
        'value' => $task->task_name
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
        'placeholder' => 'Enter your task detail',
        'value' => $task->task_body
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
        'type' => 'date',
        'value' => substr($task->due_date, 0, 10)
    );
    ?>
    <?php echo form_input($data) ?>
</div>

<div class="form-group">
    <?php
    $data = array(
        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'Update'
    );
    ?>
    <?php echo form_submit($data) ?>
</div>
<?php echo form_close(); ?>
