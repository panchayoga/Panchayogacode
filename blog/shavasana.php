<?php //$base_url = 'http://'.$_SERVER['HTTP_HOST'].'/panchayoga/';?>
<?php  $base_url = 'https://www.panchayoga.com/';?>

<?php include('headerblog.php');?>


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
                    <h2 class="text-center">Shavasana <!--<span class="darktarquice">Panchayoga</span>--></h2>
                    <div class="mt-5">
                    <img src="../img/blog/Savasana.jpg" class="img-fluid">
                    </div>
                    <p>One day, a student walked into the class,<br>
                        About 6 feet tall, he wore a cooling glass.</p>

                    <p>He said, I am 40 years old and Anand is my name,<br>
                        I want to lose some weight, and that’s why I came.</p>

                    <p>In the corner of the yoga shaala, he put his red mat,<br>
                        For the prayer, with his eyes closed, he sat.</p>

                    <p>I said, with consistency weakness is no more a barrier,<br>
                        He got up to do the Suryanamaskars and the warrior.</p>

                    <p>After a while, he started sweating from his crown,<br>
                        At the end, for the Shavasana, he just lied down.</p>

                    <p>In his shavasana, he stayed still for a while,<br>
                        He rolled his mat, and left with a big smile.</p>

                    <p>Through the shavasana, one can completely rejuvenate,<br>
                        That’s why on earth, Shavasana is called the heavenly gate.
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
<?php include('../footer.php');?>