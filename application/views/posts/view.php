<h2><?= $title ?></h2>
<small class="post_date">Posted on: <?php echo $post['created_at']; ?></small><br>
<img class="post-thumb" src="<?php echo site_url(); ?>asset/images/posts/<?php echo $post['post_image'] ?>">

<div class="post-body">
    <?php echo $post['body']; ?>

</div>


<?php if($this->session->userdata('user_id') == $post['user_id']) : ?>
<hr>

<a class="btn btn-default pull-left" href="/posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']);?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>

<?php endif; ?>

<hr>
<h3>Comments</h3>
<div class="well">
    <?php if($comments) : ?>
        <?php foreach($comments as $comment) : ?>
            <h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h5><br><br>

        <?php endforeach; ?>
    <?php else : ?>
        <p>No comments to display</p>
    <?php endif; ?>
</div>

<hr>
<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']);?>
    <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="form-group">
        <label>Body</label>
        <textarea name="body" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>


</form>
