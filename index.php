<?php
/*Template Name: Home*/
get_header(); ?>

<div class="container-fluid slidercontainer">

    <?php
        $rows = get_field('homeslider');
        if ($rows) {
            echo '<div class="owl-carousel owl-theme home-slider">';

            foreach ($rows as $row) {
                echo    '<div class="item">
                            <div class="slider-overlay"></div>
                            <img src="' . $row['sliderimage'] . '" alt="">
                            <h2>' . $row['slidertext'] . ' </h2>
                        </div>';
            }

            echo '</div>';
        }
    ?>
</div>

<div class="container my-5">
    <div class="row">
        <?php
        $about = get_field("about");
        ?>
        <div class="col-md-6">
            <img src="<?php echo $about["aboutimage"]; ?>" alt="">
        </div>
        <div class="col-md-6">
            <h2>About Us</h2>
            <p>
                <?php echo $about["abouttext"]; ?>
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
    <?php
        $rows = get_field('services');
        if ($rows) {
            
            foreach ($rows as $row) {
                echo '<div class="col-md-4 my-4">';
                echo    '<div class="card mx-2">
                            <img src="' . $row['serviceimage'] . '" class="card-img-top" alt="./images/image.png">
                            <div class="card-body">
                                <h5 class="card-title">' . $row['servicename'] . '</h5>
                                <p class="card-text">' . $row['servicetext'] . '</p>
                                <a href="' . $row['servicepage'] . '" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>';
                echo '</div>';
            }

        }
    ?>
    </div>
</div>

<?php get_footer(); ?>