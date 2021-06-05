<?php // $base_url = 'http://'.$_SERVER['HTTP_HOST'].'/panchayoga/';?>
<?php  $base_url = 'https://www.panchayoga.com/';?>

<?php include('../header.php');?>

<main id="main">




    <section class="inner-page position-relative d-none">
        <div class="row">
            <div class="col-md-12">
                <picture>
                    <source srcset="../img/banner-img/blog-page-400.jpg" media="(max-width: 360px)">
                    <source srcset="../img/banner-img/blog-page-500.jpg" media="(max-width: 480px)">
                    <source srcset="../img/banner-img/blog-page-800.jpg" media="(max-width: 767px)">
                    <source srcset="../img/banner-img/blog-page.jpg" media="(min-width: 768px)">
                    <img srcset="../img/banner-img/blog-page.jpg" max-width="1920" max-height="815" class="img-fluid">
                </picture>
                <!--<img src="img/banner-img/blog-page.jpg" class="img-fluid">-->
            </div>
        </div>
    </section>


    <section class="why py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-left">
                    <h2 class="text-center">How do you start your day? <!--<span class="darktarquice">Panchayoga</span>--></h2>
                    <!--<h5 class="font-18 text-center">Inspiring Holistic Living, Through Yoga.</h5>-->
                    <div class="mt-5">
                        <img src="../img/blog/blog1-images-01.jpg" class="img-fluid">
                    </div>



                    <p>
                        Few years ago, I had been to address adolescent children in a school and asked then what irritates them the most on a daily basis.</p>
                    <p>
                        My mother waking me up every morning and not allowing me to sleep for 5-10 mins more was the common answer from the majority.

                    </p>
                    <p>
                        After empathizing with them I said, not everyone is guaranteed another sunrise. The very fact you are able to hear her voice means you are alive and you should celebrate it.
                    </p>
                    <p>
                        I also said this means she is also alive and don't you think you should feel grateful for it. Not everyone can handle such an emotional loss.
                    </p>
                    <p>

                        Suddenly there was a paradigm shift. Looking at the children I added, it is extremely important to get our first thought, action and feeling right in a day.

                    </p>
                    <p>
                        For me my start is that of an enthusiastic gratitude through a prayer!!
                    </p>
                    <div class="text-right mt-4">
                    <button class="btn-secondary" onclick="window.location.href='<?php echo $base_url;?>blog.php';">
                            Back to Blog
                        </button>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include('footer.php');?>