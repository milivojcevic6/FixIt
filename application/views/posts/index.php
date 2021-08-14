<br>

<h2><?= $title; ?></h2>
<hr>

<?php foreach ($posts as $post) : ?>

<h3><?php echo $post['title']; ?></h3>

<div class="row">
    <div class="col-md-3">
        <img class="post-thumb" src="<?php echo site_url(); ?>edit/images/PostImg/<?php echo $post['post_image']; ?>">
    </div>
    <div class="col-md-9"><small class="post-date">Posted on: <?php echo $post['created_at']; ?>
        in <strong><?php echo $post['name']; ?></strong>
    </small><br>
            <?php echo word_limiter($post['body'], 50); ?>
    <br><br>
    <p><a class="btn btn-light" href="<?php echo site_url('posts/' . $post['slug']); ?>" target="_blank">Check it
            out</a></p>
    </div>
    <?php endforeach; ?>
    <div class="pagination-links">
        <?php echo $this->pagination->create_links(); ?>
    </div>