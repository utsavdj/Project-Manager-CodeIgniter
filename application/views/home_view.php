<?php if($this->session->flashdata('login_failed')): ?>
    <p class="alert alert-danger">
        <?php echo $this->session->flashdata('login_failed'); ?>
    </p>
<?php endif; ?>
<?php if($this->session->flashdata('user_registered')): ?>
    <p class="alert alert-success">
        <?php echo $this->session->flashdata('user_registered'); ?>
    </p>
<?php endif; ?>
<?php if($this->session->flashdata('no_access')): ?>
    <p class="alert alert-danger">
        <?php echo $this->session->flashdata('no_access'); ?>
    </p>
<?php endif; ?>

<?php if(isset($projects)): ?>
<h1>Your Projects</h1>

<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th >Project Name</th>
            <th>Project Details</th>
            <td></td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($projects as $project): ?>
            <tr>
                <td>
                    <?php echo $project->project_name ?>
                </td>
                <td><?php echo $project->project_body ?></td>
                <td class="text-center">
                    <a class="btn btn-primary"
                       href="<?php echo base_url(); ?>projects/display/<?php echo $project->id ?>">
                        View
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
    endif;
    if(isset($tasks)):
?>

<h1>Your Tasks</h1>

<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th >Task Name</th>
            <th>Task Details</th>
            <td></td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tasks as $task): ?>
            <?php if($task->status == 1): ?>
            <tr class="alert alert-success">
            <?php else : ?>
            <tr class="alert alert-danger">
            <?php endif; ?>
                <td>
                    <?php echo $task->task_name ?>
                </td>
                <td><?php echo $task->task_body ?></td>
                <td class="text-center">
                    <a class="btn btn-primary"
                       href="<?php echo base_url(); ?>tasks/display/<?php echo $task->id ?>">
                        View
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
    endif;
    if(!isset($projects) && !isset($tasks)) :
?>
    <div class="jumbotron">
        <h2 class="text-center">Welcome! Please Login to View Your Projects</h2>
    </div>
<?php endif; ?>