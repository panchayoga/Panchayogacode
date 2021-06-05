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
                    <h2 class="text-center">Sandeep’s Transformational Journey<!--<span class="darktarquice">Panchayoga</span>--></h2>
                    <div class="mt-5">
                    <img src="../img/blog/Sandeep-blog.jpg" alt="" class="img-fluid">
                    </div>


                    <p>Every teacher would love to see the transformation in their students. Transformation simply means that our own past looks like someone else’s past. This month, we’re celebrating the transformational journey of Sandeep @acrowithsandy</p>
                    <p>Sandeep’s wife sandhya, a yoga instructor has been my student at Panchayoga for over 2 years now. She has been regularly attending the advanced classes and deepening her practice. Eight months ago, in Oct 2019, Sandeep had come to drop Sandhya to the class and asked if he could stay back as they both had to go to a movie post the class. I asked if he’d like to join, to which he responded saying that his body is very stiff, and he isn’t a yoga person. He stayed back and observed the class mostly admiring how gracefully Sandhya and the other students were practicing.</p>
                    <p>
                        Two weeks later in Nov 2019, I had a workshop on headstand which didn’t need much flexibility and Sandeep enrolled for that. Ever since he has been extremely consistent with his practice doing to the best of his abilities. While due to his stiff hips he found it a little difficult to sit down for longer durations earlier, he can easily do a Padmasana also called the lotus pose easily in his headstand without any external support now seven months later.</p>

                    <p>Today Sandeep has completely transformed his practice through his consistency. Everybody in the batch will recognize that he has grown leaps and bounds.</p>
                    <p>Apart from his consistency and the support of his wife Sandhya, another outstanding quality he possesses is that he thoroughly enjoys his practice. I have never seen any desperation for any posture in him. He is detached from the results and attached passionately to the process through his consistency and surrender. He simply comes and does what is necessary in his capacity. As a result, he has been accomplishing one advanced asana after another with ease and inspiring through his progress.</p>

                        <p>Sandeep like many other students has shown that Consistent practice * surrender to the process = Peaceful Progress
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

<?php include('../footer.php');?>