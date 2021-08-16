<br><br>
<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>

<?php if("nema" == $post['post_video']): ?>
    <div class="d-flex"><img class="col-6 mx-auto" src="<?php echo site_url(); ?>edit/images/PostImg/<?php echo $post['post_image']; ?>"></div>
<?php endif;?>
<?php if(!"nema" == $post['post_video']): ?>
    <video src="<?php echo site_url(); ?>edit/videos/<?php echo $post['post_video']; ?>">
        Your browser does not support the video tag.
    </video>
<?php endif;?>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<?php if($this->session->userdata('user_id') == $post['user_id'] || $this->session->userdata('user_id')==1): ?>
    <hr>
    <a class="btn btn-light pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
    <?php echo form_open('/posts/delete/'.$post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    <hr>
    <?php if("nema" == $post['post_video']): ?>
        <?php echo form_open_multipart('posts/createVideo'); ?>
        <div class="form-group">
            <label>Upload Video </label>
            <input type="file" name="userfile" size="20">
        </div><button type="submit" class="btn btn-light">Submit</button>
        </form>
    <?php endif; ?>
<?php endif; ?>
<hr>
<h3>Comments</h3>
<?php if($comments) : ?>
    <?php foreach($comments as $comment) : ?>
        <div class="well">
            <h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h5>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <p>No Comments To Display</p>
<?php endif; ?>
<hr>
<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
</div>
<div class="form-group">
    <label>Body</label>
    <textarea name="body" class="form-control"></textarea>
</div>
<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>"><br>
<button class="btn btn-primary" type="submit">Submit</button>
</form>

<br><br>