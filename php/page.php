<!-- Plugins Page Begin -->
<?php Theme::plugins('pageBegin') ?>
<!-- insert cover image if available -->
<?php
    if($Page->coverImage()) {
        echo '<div class="row">'
            .'<div class="section">'
            .'<h1>'
            .$Page->title()
            .'</h1>'
            .'<img class="banner" src=\''
            .$Page->coverImage()
            .'\');">'
            .'</div>'
            .'</div>';
    }
?>
<!-- insert content -->
<div class="row">
    <div class="section">
        <div id="main_content">
            <?php echo $Page->content() ?>
        </div>
    </div>
</div>
<!-- Plugins Page Ends -->
<?php Theme::plugins('pageEnd') ?>
