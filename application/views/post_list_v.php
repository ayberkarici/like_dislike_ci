<!DOCTYPE html>
<html lang="tr">
<head>

    <?php $this->load->view('inc/head') ?>

    <title>Posts</title>
</head>
<body>
    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo $user->username ?></a>
    </div>

    <div id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('cikis'); ?>">Çıkış yap</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
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
    </div>
</div>

<script src="<?php echo base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>


</body>
</html>