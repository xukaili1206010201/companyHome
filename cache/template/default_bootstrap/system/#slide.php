<?php defined('ROOT') or exit('Can\'t Access !'); ?>

<!-- Bootstrap bootstrap-touch-slider Slider Main Style Sheet -->
      <link href="<?php echo $skin_path;?>/js/slide/bootstrap-touch-slider.css" rel="stylesheet" media="all">

<div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000">

<!-- Indicators -->
<ol class="carousel-indicators">
<?php if(get('slide_number')=='1') { ?>
<li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
<?php } elseif (get('slide_number')=='2') { ?>
<li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
        <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
<?php } elseif (get('slide_number')=='3') { ?>
<li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
        <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
        <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
<?php } elseif (get('slide_number')=='4') { ?>
<li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
        <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
        <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
<li data-target="#bootstrap-touch-slider" data-slide-to="3"></li>
<?php } else { ?>
<li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
        <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
        <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
<li data-target="#bootstrap-touch-slider" data-slide-to="3"></li>
<li data-target="#bootstrap-touch-slider" data-slide-to="4"></li>
 <?php } ?>


</ol>

<!-- Wrapper For Slides -->
<div class="carousel-inner" role="listbox">


 <?php if(get('slide_number')=='1') { ?>

<!-- Second Slide -->
<div class="item  active">
<!-- Slide Background -->
<img  src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>" class="slide-image">

<!-- Slide Text Layer -->
<div class="slide-text slide_style_center">
<?php if(get('slide_pic1_title')) { ?><h1 data-animation="animated flipInX"><?php echo get(slide_pic1_title);?></h1><?php } ?>
<?php if(get('slide_pic1_info')) { ?><p data-animation="animated lightSpeedIn"><?php echo get(slide_pic1_info);?></p><?php } ?>
</div>
</div>
<!-- End of Slide -->

<?php } elseif (get('slide_number')=='2') { ?>

<!-- Second Slide -->
<div class="item  active">
<!-- Slide Background -->
<img  src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>" class="slide-image">

<!-- Slide Text Layer -->
<div class="slide-text slide_style_center">
<?php if(get('slide_pic1_title')) { ?><h1 data-animation="animated flipInX"><?php echo get(slide_pic1_title);?></h1><?php } ?>
<?php if(get('slide_pic1_info')) { ?><p data-animation="animated lightSpeedIn"><?php echo get(slide_pic1_info);?></p><?php } ?>
</div>
</div>
<!-- End of Slide -->

<!-- Second Slide -->
<div class="item">
<!-- Slide Background -->
<img  src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>" class="slide-image">

<!-- Slide Text Layer -->
<div class="slide-text slide_style_center">
<?php if(get('slide_pic2_title')) { ?><h1 data-animation="animated flipInX"><?php echo get(slide_pic2_title);?></h1><?php } ?>
<?php if(get('slide_pic2_info')) { ?><p data-animation="animated lightSpeedIn"><?php echo get(slide_pic2_info);?></p><?php } ?>
</div>
</div>
<!-- End of Slide -->

<?php } elseif (get('slide_number')=='3') { ?>

<!-- Second Slide -->
<div class="item  active">
<!-- Slide Background -->
<img  src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>" class="slide-image">

<!-- Slide Text Layer -->
<div class="slide-text slide_style_center">
<?php if(get('slide_pic1_title')) { ?><h1 data-animation="animated flipInX"><?php echo get(slide_pic1_title);?></h1><?php } ?>
<?php if(get('slide_pic1_info')) { ?><p data-animation="animated lightSpeedIn"><?php echo get(slide_pic1_info);?></p><?php } ?>
</div>
</div>
<!-- End of Slide -->

<!-- Second Slide -->
<div class="item">
<!-- Slide Background -->
<img  src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>" class="slide-image">

<!-- Slide Text Layer -->
<div class="slide-text slide_style_center">
<?php if(get('slide_pic2_title')) { ?><h1 data-animation="animated flipInX"><?php echo get(slide_pic2_title);?></h1><?php } ?>
<?php if(get('slide_pic2_info')) { ?><p data-animation="animated lightSpeedIn"><?php echo get(slide_pic2_info);?></p><?php } ?>
</div>
</div>
<!-- End of Slide -->


<!-- Second Slide -->
<div class="item">
<!-- Slide Background -->
<img  src="<?php echo get(slide_pic3);?>" alt="<?php echo get(slide_pic3_title);?>" class="slide-image">

<!-- Slide Text Layer -->
<div class="slide-text slide_style_center">
<?php if(get('slide_pic3_title')) { ?><h1 data-animation="animated flipInX"><?php echo get(slide_pic3_title);?></h1><?php } ?>
<?php if(get('slide_pic3_info')) { ?><p data-animation="animated lightSpeedIn"><?php echo get(slide_pic3_info);?></p><?php } ?>
</div>
</div>
<!-- End of Slide -->

<?php } elseif (get('slide_number')=='4') { ?>

<!-- Second Slide -->
<div class="item  active">
<!-- Slide Background -->
<img  src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>" class="slide-image">

<!-- Slide Text Layer -->
<div class="slide-text slide_style_center">
<?php if(get('slide_pic1_title')) { ?><h1 data-animation="animated flipInX"><?php echo get(slide_pic1_title);?></h1><?php } ?>
<?php if(get('slide_pic1_info')) { ?><p data-animation="animated lightSpeedIn"><?php echo get(slide_pic1_info);?></p><?php } ?>
</div>
</div>
<!-- End of Slide -->

<!-- Second Slide -->
<div class="item">
<!-- Slide Background -->
<img  src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>" class="slide-image">

<!-- Slide Text Layer -->
<div class="slide-text slide_style_center">
<?php if(get('slide_pic2_title')) { ?><h1 data-animation="animated flipInX"><?php echo get(slide_pic2_title);?></h1><?php } ?>
<?php if(get('slide_pic2_info')) { ?><p data-animation="animated lightSpeedIn"><?php echo get(slide_pic2_info);?></p><?php } ?>
</div>
</div>
<!-- End of Slide -->


<!-- Second Slide -->
<div class="item">
<!-- Slide Background -->
<img  src="<?php echo get(slide_pic3);?>" alt="<?php echo get(slide_pic3_title);?>" class="slide-image">

<!-- Slide Text Layer -->
<div class="slide-text slide_style_center">
<?php if(get('slide_pic3_title')) { ?><h1 data-animation="animated flipInX"><?php echo get(slide_pic3_title);?></h1><?php } ?>
<?php if(get('slide_pic3_info')) { ?><p data-animation="animated lightSpeedIn"><?php echo get(slide_pic3_info);?></p><?php } ?>
</div>
</div>
<!-- End of Slide -->

<!-- Second Slide -->
<div class="item">
<!-- Slide Background -->
<img  src="<?php echo get(slide_pic4);?>" alt="<?php echo get(slide_pic4_title);?>" class="slide-image">

<!-- Slide Text Layer -->
<div class="slide-text slide_style_center">
<?php if(get('slide_pic4_title')) { ?><h1 data-animation="animated flipInX"><?php echo get(slide_pic4_title);?></h1><?php } ?>
<?php if(get('slide_pic4_info')) { ?><p data-animation="animated lightSpeedIn"><?php echo get(slide_pic4_info);?></p><?php } ?>
</div>
</div>
<!-- End of Slide -->

<?php } else { ?>

<!-- Second Slide -->
<div class="item  active">
<!-- Slide Background -->
<img  src="<?php echo get(slide_pic1);?>" alt="<?php echo get(slide_pic1_title);?>" class="slide-image">

<!-- Slide Text Layer -->
<div class="slide-text slide_style_center">
<?php if(get('slide_pic1_title')) { ?><h1 data-animation="animated flipInX"><?php echo get(slide_pic1_title);?></h1><?php } ?>
<?php if(get('slide_pic1_info')) { ?><p data-animation="animated lightSpeedIn"><?php echo get(slide_pic1_info);?></p><?php } ?>
</div>
</div>
<!-- End of Slide -->

<!-- Second Slide -->
<div class="item">
<!-- Slide Background -->
<img  src="<?php echo get(slide_pic2);?>" alt="<?php echo get(slide_pic2_title);?>" class="slide-image">

<!-- Slide Text Layer -->
<div class="slide-text slide_style_center">
<?php if(get('slide_pic2_title')) { ?><h1 data-animation="animated flipInX"><?php echo get(slide_pic2_title);?></h1><?php } ?>
<?php if(get('slide_pic2_info')) { ?><p data-animation="animated lightSpeedIn"><?php echo get(slide_pic2_info);?></p><?php } ?>
</div>
</div>
<!-- End of Slide -->


<!-- Second Slide -->
<div class="item">
<!-- Slide Background -->
<img  src="<?php echo get(slide_pic3);?>" alt="<?php echo get(slide_pic3_title);?>" class="slide-image">

<!-- Slide Text Layer -->
<div class="slide-text slide_style_center">
<?php if(get('slide_pic3_title')) { ?><h1 data-animation="animated flipInX"><?php echo get(slide_pic3_title);?></h1><?php } ?>
<?php if(get('slide_pic3_info')) { ?><p data-animation="animated lightSpeedIn"><?php echo get(slide_pic3_info);?></p><?php } ?>
</div>
</div>
<!-- End of Slide -->

<!-- Second Slide -->
<div class="item">
<!-- Slide Background -->
<img  src="<?php echo get(slide_pic4);?>" alt="<?php echo get(slide_pic4_title);?>" class="slide-image">

<!-- Slide Text Layer -->
<div class="slide-text slide_style_center">
<?php if(get('slide_pic4_title')) { ?><h1 data-animation="animated flipInX"><?php echo get(slide_pic4_title);?></h1><?php } ?>
<?php if(get('slide_pic4_info')) { ?><p data-animation="animated lightSpeedIn"><?php echo get(slide_pic4_info);?></p><?php } ?>
</div>
</div>
<!-- End of Slide -->

<!-- Second Slide -->
<div class="item">
<!-- Slide Background -->
<img  src="<?php echo get(slide_pic5);?>" alt="<?php echo get(slide_pic5_title);?>" class="slide-image">

<!-- Slide Text Layer -->
<div class="slide-text slide_style_center">
<?php if(get('slide_pic5_title')) { ?><h1 data-animation="animated flipInX"><?php echo get(slide_pic5_title);?></h1><?php } ?>
<?php if(get('slide_pic5_info')) { ?><p data-animation="animated lightSpeedIn"><?php echo get(slide_pic5_info);?></p><?php } ?>
</div>
</div>
<!-- End of Slide -->

 <?php } ?>

</div><!-- End of Wrapper For Slides -->

<!-- Left Control -->
<a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
<span class="fa fa-angle-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>

<!-- Right Control -->
<a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
<span class="fa fa-angle-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>

</div>
      


<script src="<?php echo $skin_path;?>/js/slide/jquery.touchSwipe.min.js"></script>
       <script src="<?php echo $skin_path;?>/js/slide/bootstrap-touch-slider.js"></script>


