<div class="col-xs-9">
    <h1>Project Name: <?php echo $project->project_name ?></h1>
    <p>Date Created: <?php echo $project->date_created ?></p>
    <h3>Description</h3>
    <p><?php echo $project->project_body ?></p>

    <?php if($this->session->flashdata('mark_done')): ?>
        <p class="alert alert-success">
            <?php echo $this->session->flashdata('mark_done'); ?>
        </p>
    <?php endif; ?>

    <?php if($this->session->flashdata('mark_undone')): ?>
        <p class="alert alert-success">
            <?php echo $this->session->flashdata('mark_undone'); ?>
        </p>
    <?php endif; ?>

    <h3>Active Tasks:</h3>
    <ul>
        <?php if($not_completed_tasks) : ?>
            <?php foreach ($not_completed_tasks as $task): ?>
                <li class="alert alert-warning list-unstyled">
                    <a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->task_id ?>">
                        <?php echo $task->task_name ?>
                    </a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p>You have no tasks pending</p>
        <?php endif; ?>
    </ul>
    <h3>Completed Tasks:</h3>
    <ul>
        <?php if($completed_tasks) : ?>
            <?php foreach ($completed_tasks as $task): ?>
                <li class="alert alert-success list-unstyled">
                    <a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->task_id ?>">
                        <?php echo $task->task_name ?>
                    </a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p>You have no tasks pending</p>
        <?php endif; ?>
    </ul>
</div>

<div class="col-xs-3">
    <ul class="list-group">
        <h3>Project Actions</h3>
        <li class="list-group-item">
            <a href="<?php echo base_url() ?>tasks/create/<?php echo $project->id ?>">Create Task</a>
        </li>
        <li class="list-group-item">
            <a href="<?php echo base_url(); ?>projects/edit/<?php echo $project->id ?>">Edit Project</a>
        </li>
        <li class="list-group-item">
            <a class="delete_project"
               onclick="return confirm('Are you sure you want to delete this project?')"
               href="<?php echo base_url(); ?>projects/delete/<?php echo $project->id ?>">Delete Project</a>
        </li>
    </ul>
</div>