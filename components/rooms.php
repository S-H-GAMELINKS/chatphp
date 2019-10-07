<?php
    $all_room = file_get_contents('data/room.json');
    $array = json_decode($all_room);
    foreach ($array as $key => $value) {
        echo "
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-12\">
                    <div class=\"card border border-danger\" style=\"width: 18rem;\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$value->Content</h5>
                            <a href=\"room.php?id=$key&name=$value->Content\" name=\"id\" value=\"$key\">入室する</a>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }
?>