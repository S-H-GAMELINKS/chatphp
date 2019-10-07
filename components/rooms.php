<div class="row">
    <?php
        $all_room = file_get_contents('data/room.json');
        $array = json_decode($all_room);
        foreach ($array as $key => $value) {
            echo "
                <div class=\"col-md-4 col-sm-12 mt-3 mb-3 d-flex justify-content-center\">
                    <div class=\"card border border-dark\" style=\"width: 18rem;\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$value->Content</h5>
                            <a class=\" btn btn-outline-danger\" href=\"room.php?id=$key&name=$value->Content\" name=\"id\" value=\"$key\">入室する</a>
                        </div>
                    </div>
                </div>
            ";
        }
    ?>
</div>