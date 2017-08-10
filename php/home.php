<div class="row">
    <div class="section">
        <?php
            $totalPublishedPosts = $dbPosts->numberPost(true);
            $posts = buildPostsForPage(0, $totalPublishedPosts, true, false);
            foreach ($posts as $Post):
        ?>
        <div class="col-1-3">
            <div class="feed-card">
                <img src="<?php echo $Post->coverImage() ?>">
                <a href="<?php echo $Post->permalink() ?>">
                    <h3>
                        <?php echo $Post->title() ?>
                    </h3>
                </a>
                    <p>
                        <?php echo $Post->description(); ?>
                    </p>
            </div>
        </div>
        <?php
            endforeach; 
        ?>
    </div>
</div>



