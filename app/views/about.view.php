<?php 
$title = 'About Us';
include BASE_PATH . 'app/views/common/header.php';
?>
<article class="about-section py-5">
    <div class="container">
        <h2 class="title mb-3">About Me</h2>
        
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </p>
        <figure><img class="img-fluid" src="assets/images/about-me.jpg" alt="image"></figure>
        <h5 class="mt-5">About The Blog</h5>
        <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus.</p>
        <h5 class="mt-5">My Skills and Experiences</h5>
        <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
        <h5 class="mt-5">Side Projects</h5>
        <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
        
        <figure><a href="https://made4dev.com"><img class="img-fluid" src="assets/images/promo-banner.jpg" alt="image"></a></figure>
    </div>
</article><!--//about-section-->

<section class="cta-section theme-bg-light py-5">
    <div class="container text-center">
        <h2 class="heading">Newsletter</h2>
        <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
        <form class="signup-form form-inline justify-content-center pt-3">
            <div class="form-group">
                <label class="sr-only" for="semail">Your email</label>
                <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
    </div><!--//container-->
</section>
<?php include BASE_PATH . 'app/views/common/footer.php' ?>