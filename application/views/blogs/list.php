
<div class="container table-responsive">
<div class="row">
    <div class="col-lg-12">
        <h2>Blogs</h2>
    </div>
</div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $d){?>
                <tr>
                    <td><?php echo $d->title;?></td>
                    <td><?php echo $d->description;?></td>
                    <td>
                        <form action="<?php echo base_url('blogs/delete/.$d->id'); ?>" methode="DELETE">
                            <a href="<?php echo base_url('blogs/edit/.$d->id'); ?>"><i class="glyphicon glyphicon-pencil"></i></a>
                            <button class="btn btn-danger btn-xs" type="submit"><i class="glyphicon glyphicon-remove"></i></button>
                        </form>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
    <div class="pull-right">
            <a href="<?php echo base_url('blogs/create'); ?>" class="btn btn-primary">Create</a>
    </div>
</div>