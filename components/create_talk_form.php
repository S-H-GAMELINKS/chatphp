<form method="post" action="php/create_talk.php">
    <div class="form-group">
        <input value="<?php echo $_REQUEST['id'] ?>" name="id" type="hidden">
        <input value="<?php echo $_REQUEST['name'] ?>" name="name" type="hidden">
        <textarea class="form-control" name="talk"></textarea>
    </div>
    <button type="submit" class="btn btn-outline-danger">作成</button>
</form>
