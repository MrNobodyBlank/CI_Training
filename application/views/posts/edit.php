<h2><?= $title ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('posts/update'); ?>
  <div class="form-group">
    <input type="hidden" value="<?php echo $post['id']; ?>" name="id">
    <label >Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add title.." value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label >Body</label>
    <textarea id="editor1" name="body" placeholder="Add Body" class="form-control"><?php echo $post['body']; ?></textarea>
  </div>

    <div class="form-group">
    <label >Category</label>
    <select name="category" class="form-control ">
      <?php foreach($categories as $category): ?>
      <option value="<?php echo $category['id']; ?>" ><?php echo $category['name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
