<?php include "inc.php" ?>

<h2>Mostrar a Thumbnail de um video do Youtube com PHP</h2>


<div class="frm-video-image-thumbnail">
    <form method="post" action="">
        <input  type="text" name="url" placeholder="Enter URL">
        <br /> <br /> 
        <input type="submit" name="submit" value="Submit">
    </form>
    <div class="thumbnail">
        <?php
if (! empty($videoId)) {
    ?>
        <h3>Thumbnail Image:</h3>
        <img
            src="https://img.youtube.com/vi/<?php echo $videoId; ?>/hqdefault.jpg"
            width="250" />
        <?php
	}
?>
    </div>
</div>

