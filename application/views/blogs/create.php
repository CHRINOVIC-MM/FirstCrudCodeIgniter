<div class="container col-md-8 col-md-offset-2">
    <h2>Create form</h2>
    <form action="<?php echo base_url('blogs/Create'); ?>" method="post">
        <div class="form-group">
            <label for="title">Title :</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description :</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>