<?php
//check user
if (!isset($_POST['isadmin'])) {
    exit('You have no permission.');
}
if ($_POST['isadmin'] != md5('utehn')) {
    exit('you may be dolly.');
}
?>
<meta charset="UTF-8">
<style>
    .btn-xlarge {
        padding: 18px 28px;
        font-size: 22px; //change this to your desired size
        line-height: normal;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
        cursor: pointer
    }
</style>
<script src="jquery.js"></script>
<script>
    $(function () {
        //alert();
    });

</script>

<table border="0">

    <tr style="background: green; color: white">
        <td>Current Version</td>
        <td>
            <?php
            echo file_get_contents("../version/version.ini");
            ?>
        </td>
    </tr>
    <tr style="background: blue; color: white">
        <td>Last Version</td>
        <td>
            <?php
            echo file_get_contents("http://utehn.plkhealth.go.th/dhdc2/version/version.txt");
            ?>
        </td>
    </tr>
</table> 

<hr>
<button id="update" class="btn-xlarge">
    Update
</button>
<hr>
Update File:
<?php
echo file_get_contents("http://utehn.plkhealth.go.th/dhdc2/version/filename.txt");
?>.zip
<div id="res" style="display: none">
    <img src="updating.gif">
</div>
<hr>
<div>
    <?php
    echo file_get_contents("http://utehn.plkhealth.go.th/dhdc2/version/log.txt");
    ?>
</div>
<script>
    function update() {
        $.ajax({
            url: "update.php",
            success: function () {
                $('#res').toggle();
                alert(' สำเร็จ');
            }
        });
    }
    $('#update').on('click', function () {
        $('#res').toggle();
        $.ajax({
            url: "download.php",
            success: function (data) {
                update();
            }
        });
    });
</script>





