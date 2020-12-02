<div class="col-xs-9">

    <h1><?php echo $task->task_name ?></h1>
    <p>Project: <?php echo $project_name ?></p>
    <p>Date Created: <?php echo substr($task->date_created, 0, 10) ?></p>
    <p>Due Created: <?php echo substr($task->due_date, 0, 10) ?></p>
    <h3>Description</h3>
    <p><?php echo $task->task_body ?></p>
</div>

<div class="col-xs-3">
    <ul class="list-group">
        <h3>Task Actions</h3>
        <li class="list-group-item">
            <a href="<?php echo base_url(); ?>tasks/edit/<?php echo $task->id ?>">
                Edit
            </a>
        </li>
        <li class="list-group-item">
            <a onclick="return confirm('Are you sure you want to delete this project?')"
               href="<?php echo base_url(); ?>tasks/delete/<?php echo $task->project_id ?>/<?php echo $task->id ?>">Delete</a>
        </li>
        <li class="list-group-item">
            <a href="<?php echo base_url(); ?>/tasks/mark_complete/<?php echo $task->id ?>">
                Mark Complete
            </a>
        </li>
        <li class="list-group-item">
            <a href="<?php echo base_url(); ?>/tasks/mark_incomplete/<?php echo $task->id ?>">
                Mark Incomplete
            </a>
        </li>
    </ul>
</div>
