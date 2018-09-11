<h2><?= $title ?></h2>
<small class="post_date">Posted on: <?php echo $post['created_at']; ?></small><br>
<img class="post-thumb" src="<?php echo site_url(); ?>asset/images/posts/<?php echo $post['post_image'] ?>">

<div class="post-body">
    <?php echo $post['body']; ?>

</div>

<hr>

<a class="btn btn-default pull-left" href="/posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']);?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>

