<div class="row">
    <div class="section">
        <div class="col-1-3">
            <div class="feed-card">
                <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/351224114&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
            </div>
        </div>
        <?php
            // $totalPublishedPosts = $dbPosts->numberPost(true);
            // $posts = buildPostsForPage(0, $totalPublishedPosts, true, false);
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

<div class="row">
    <div class="section">
        <!-- Pagination -->
        <div class="pagination">
            <?php
                if( Paginator::get('showNewer') ) {
                    // echo '<li><a href="'.Paginator::urlFirstPage().'" class="btn small">'.$Language->get('First page').'</a></li>';
                    echo '<a href="'.Paginator::urlPrevPage().'" class="previous_page" style="float: left;">← '.$Language->get('Prev page').'</a>';
                }

                if( Paginator::get('showOlder') ) {
                    echo '<a href="'.Paginator::urlNextPage().'" class="next_page" style="float: right;">'.$Language->get('Next page').' →</a>';
                    // echo '<li><a href="'.Paginator::urlLastPage().'" class="btn small">'.$Language->get('Last page').'</a></li>';
                }
            ?>
        </div>
    </div>
</div>


