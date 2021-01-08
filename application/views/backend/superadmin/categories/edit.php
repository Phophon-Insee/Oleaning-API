<?php $class_rooms = $this->db->get_where('class_rooms', array('id' => $param1))->result_array(); ?>
<?php foreach($class_rooms as $class_room){ ?>
<form method="POST" class="d-block ajaxForm" action="<?php echo route('categories/update/'.$param1); ?>">
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="name"><?php echo get_phrase('categories_name'); ?></label>
            <input type="text" class="form-control" value="<?php echo $class_rooms['name']; ?>" id="name" name = "name" required>
            <small id="name_help" class="form-text text-muted"><?php echo get_phrase('provide_categories_name'); ?></small>
        </div>

        <div class="form-group  col-md-12">
            <button class="btn btn-block btn-primary" type="submit"><?php echo get_phrase('update_categories'); ?></button>
        </div>
    </div>
</form>
<?php } ?>

<script>
$(".ajaxForm").validate({}); // Jquery form validation initialization
$(".ajaxForm").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, showAllClassRooms);
});
</script>
