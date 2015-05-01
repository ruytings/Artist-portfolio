<?php if(ISSET($errors['title']) && $errors['title'] != NULL) { ?>
    <div class="alert alert-danger alert-error">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <span class="glyphicon glyphicon-remove" aria-hidden="true"> </span><?php echo ' '.$errors['title']; ?>
    </div>
<?php } ?>

<?php if(ISSET($errors['description']) && $errors['description'] != NULL) { ?>
    <div class="alert alert-danger alert-error">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <span class="glyphicon glyphicon-remove" aria-hidden="true"> </span><?php echo ' '.$errors['description']; ?>
    </div>
<?php } ?>

<?php if(ISSET($errors['price']) && $errors['price'] != NULL) { ?>
    <div class="alert alert-danger alert-error">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <span class="glyphicon glyphicon-remove" aria-hidden="true"> </span><?php echo ' '.$errors['price']; ?>
    </div>
<?php } ?>

<?php if(ISSET($errors['image']) && $errors['image'] != NULL) { ?>
    <div class="alert alert-danger alert-error">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <span class="glyphicon glyphicon-remove" aria-hidden="true"> </span><?php echo ' '.$errors['image']; ?>
    </div>
<?php } ?>


<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url().'art/'.$to; ?>">

    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Title:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="title" id="title"
                   placeholder="Title" value="<?php if(ISSET($title)) { echo $title; } ?>">
            <span class="help-block">Enter the name of your artwork.</span>
        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-sm-2 control-label">Description:</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="3" name="description" id="description"><?php if(ISSET($description)) { echo $description; } ?></textarea>
            <span class="help-block">Enter a description of your artwork.</span>
        </div>
    </div>

    <div class="form-group">
        <label for="price" class="col-sm-2 control-label">Price:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="price" id="price"
                   placeholder="Price" value="<?php if(ISSET($price)) { echo $price; } ?>">
            <span class="help-block">Add a price (in EUR) to your artwork. Examples are: 20.0 | 19.99 | 0.95</span>
        </div>
    </div>

    <div class="form-group">
        <label for="image" class="col-sm-2 control-label">Image:<?php if(ISSET($image) && $image != '') { ?> (<a target="_blank" href="<?php echo site_url().'uploads/'.$image; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>) <?php } ?></label>
        <div class="col-sm-10">
            <input type="file" name="image" value="Upload image" id="image">
            <span class="help-block">Select an image file to add to the gallery.</span>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input type="hidden" name="current" id="current" value="<?php if(ISSET($image)) { echo $image; } ?>">
            <input type="hidden" name="id" id="id" value="<?php if(ISSET($id)) { echo $id; } ?>">
            <button type="submit" name="submit" class="btn btn-info">
                <span class="glyphicon glyphicon-floppy-disk"></span> Save artwork</button>
        </div>
    </div>

</form>