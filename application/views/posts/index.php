<h2><?= $title ?></h2>
<?php foreach($posts as $post): ?>
    <h3><?php echo $post['title']; ?></h3>
    <div class="row">
        <div class="col-md-3">
            <img class="post-thumb" src="<?php echo site_url(); ?>asset/images/posts/<?php echo $post['post_image'] ?>">
        </div>

        <div class="col-md-9">
            <small class="post_date">Posted on: <?php echo $post['created_at']; ?> in <?php echo $post['name'] ?></small><br>
            <?php echo word_limiter($post['body'],50); ?>
            <br><br>
            <p><a href="<?php echo site_url('/posts/'.$post['slug']);?>">Read more...</a></p>
        </div>
    </div>
    

<?php endforeach; ?>