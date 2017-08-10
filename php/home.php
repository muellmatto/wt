<?php
    $totalPublishedPosts = $dbPosts->numberPost(true);
    $posts = buildPostsForPage(0, $totalPublishedPosts, true, false);
    foreach ($posts as $Post):
?>


<a href="<?php echo $Post->permalink() ?>">
    <div class="col-1-3">
        <div class="feed-card">
            <img src="https://unsplash.it/1000/800/?image=731" alt="?image=731">
                <h3>
                    <?php echo $Post->title() ?>
                </h3>
                <p>
                    <?php echo $Post->content(false) ?>
                </p>
        </div>
    </div>
</a>


<?php
    endforeach; 
?>



