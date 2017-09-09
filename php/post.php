<!-- Plugins Page Begin -->
<?php Theme::plugins('postBegin') ?>
<!-- insert cover image if available -->
<?php
    if($Post->coverImage()) {
        echo '<div class="row">'
            .'<div class="section">'
            .'<h1>'
            .$Post->title()
            .'</h1>'
            .'</div>'
            .'</div>';
    }
?>
<!-- insert content -->
<div class="row">
    <div class="section">
        <div id="main_content">
            <?php echo $Post->content() ?>
        </div>
    </div>
</div>
<!-- Plugins Page Ends -->
<?php Theme::plugins('postEnd') ?>
