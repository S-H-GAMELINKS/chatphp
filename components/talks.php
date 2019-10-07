<style>
    .balloon-left {
        position: relative;
        display: inline-block;
        margin: 1.5em 0 1.5em 15px;
        padding: 7px 10px;
        min-width: 120px;
        max-width: 100%;
        color: #555;
        font-size: 16px;
        background: #83F0A6;
        border-radius: 10px;
    }

    .balloon-left p {
        margin: 0;
        padding: 0;
    }
</style>

<div class="row">
    <?php
    $all_talk = file_get_contents('data/' . $_REQUEST['id'] . '.json');
    $array = json_decode($all_talk);
    foreach ($array as $key => $value) {
        echo "
            <div class=\"col-12 mt-0 mb-0\">
                <p class=\"balloon-left w-100\">$value->Content</p>
            </div>        
        ";
    }
    ?>
</div>