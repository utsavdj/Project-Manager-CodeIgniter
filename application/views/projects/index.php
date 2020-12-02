<h1>Projects</h1>
<?php if($this->session->flashdata('project_created')): ?>
    <p class="alert alert-success">
        <?php echo $this->session->flashdata('project_created'); ?>
    </p>
<?php endif; ?>

<?php if($this->session->flashdata('project_updated')): ?>
    <p class="alert alert-success">
        <?php echo $this->session->flashdata('project_updated'); ?>
    </p>
<?php endif; ?>

<?php if($this->session->flashdata('project_deleted')): ?>
    <p class="alert alert-success">
        <?php echo $this->session->flashdata('project_deleted'); ?>
    </p>
<?php endif; ?>

<?php if($this->session->flashdata('task_created')): ?>
    <p class="alert alert-success">
        <?php echo $this->session->flashdata('task_created'); ?>
    </p>
<?php endif; ?>

<?php if($this->session->flashdata('task_updated')): ?>
    <p class="alert alert-success">
        <?php echo $this->session->flashdata('task_updated'); ?>
    </p>
<?php endif; ?>

<?php if($this->session->flashdata('task_deleted')): ?>
    <p class="alert alert-success">
        <?php echo $this->session->flashdata('task_deleted'); ?>
    </p>
<?php endif; ?>

<div class="table-responsive">
    <a href="<?php echo base_url() ?>projects/create" class="btn btn-primary pull-right">Create Project</a>
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
                    <a href="<?php echo base_url() ?>projects/display/<?php echo $project->id ?>">
                        <?php echo $project->project_name ?>
                    </a>
                </td>
                <td><?php echo $project->project_body ?></td>
                <td class="text-center">
                    <a class="delete_project btn btn-danger"
                       onclick="return confirm('Are you sure you want to delete this project?')"
                       href="<?php echo base_url(); ?>projects/delete/<?php echo $project->id ?>">
                        <span class="glyphicon glyphicon-remove"></span>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
