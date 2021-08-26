<?php 
$title = $artical->title;
include BASE_PATH . 'app/views/common/header.php';
?>   
<article class="blog-post px-3 py-5 p-md-5">
    <div class="container">
        <header class="blog-post-header">
            <h2 class="title mb-2"><?= $artical->title ?></h2>
            <div class="meta mb-3"><span class="date"><?= time_elapsed_string($artical->created_at) ?></span><span class="time"><?= $artical->read_count ?> read</span></div>
        </header>
        
        <div class="blog-post-body">
        <?= $artical->details ?>
        </div>
        
    </div><!--//container-->
</article>

<section class="promo-section theme-bg-light py-5 text-center">
    <div class="container">
        <h2 class="title">Promo Section Heading</h2>
        <p>You can use this section to promote your side projects etc. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
        <figure class="promo-figure">
            <a href="https://made4dev.com" target="_blank"><img class="img-fluid" src="public/assets/images/promo-banner.jpg" alt="image"></a>
        </figure>
    </div><!--//container-->
</section><!--//promo-section-->
	    
<?php include BASE_PATH . 'app/views/common/footer.php' ?>