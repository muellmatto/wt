<!-- Plugins Page Begin -->
<?php Theme::plugins('pageBegin') ?>
<!-- insert cover image if available -->
<?php
    if($Page->coverImage()) {
        echo '<div class="row">'
            .'<div class="section">'
            .'<div class="banner" style="background-image: url(\''
            .$Page->coverImage()
            .'\');">'
            .'<h1>'
            .$Page->title()
            .'</h1>'
            .'</div>'
            .'</div>'
            .'</div>';
    }
?>
<!-- insert content -->
<div class="row">
    <div class="section">
        <hr>
        <div id="main_content">
            <?php echo $Page->content() ?>
        </div>
    </div>
</div>
<!-- Plugins Page Ends -->
<?php Theme::plugins('pageEnd') ?>
