<div class="row">
    <div class="section">
        <div class="col-1-3">
            <div class="feed-card">
                <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/351224114&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
            </div>
        </div>
        <?php
            $totalPublishedPosts = $dbPosts->numberPost(true);
            $posts = buildPostsForPage(0, $totalPublishedPosts, true, false);
            foreach ($posts as $Post):
        ?>
        <div class="col-1-3">
            <div class="feed-card">
                <img src="<?php echo $Post->coverImage() ?>">
                <a href="<?php echo $Post->permalink() ?>">
                    <h4>
                        <?php echo $Post->title() ?>
                    </h4>
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



