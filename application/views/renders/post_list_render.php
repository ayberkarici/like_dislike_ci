<?php foreach($posts as $post): ?>
        
        <div class="well">
            <div><?php echo $post->title ?></div>
            <br>
            <div>
                <button class="btn <?php echo ($post->vote_status == 1) ? "btn-success" : "btn-default"  ?> likeBtn" data-id="<?php echo $post->id ?>">
                    <span class="like-count"><?php echo $post->like_count ?></span>
                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                </button>
                <button class="btn <?php echo ($post->vote_status == -1) ? "btn-danger" : "btn-default"  ?> dislikeBtn" data-id="<?php echo $post->id ?>">
                    <span class="like-count"><?php echo $post->dislike_count ?></span>
                    <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        
<?php endforeach; ?>