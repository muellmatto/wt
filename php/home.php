<div class="row">
    <div class="section" style="overflow: hidden;">
        <?php echo $treadmill->get(); ?>
    </div>
</div>
<div class="row">
    <div class="section">
        <div class="col-1-3">
            <div class="feed-card">
                <?php echo $customFields->get('soundcloud'); ?>
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


