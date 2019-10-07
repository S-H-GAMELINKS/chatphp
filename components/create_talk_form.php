<div class="container">
    <form method="post" action="php/create_talk.php">
        <div class="form-group">
            <input value="<?php echo $_REQUEST['id'] ?>" name="id" type="hidden">
            <input value="<?php echo $_REQUEST['name'] ?>" name="name" type="hidden">
            <input class="form-control" name="talk">
        </div>
        <button type="submit" class="btn btn-primary">作成</button>
    </form>
</div>