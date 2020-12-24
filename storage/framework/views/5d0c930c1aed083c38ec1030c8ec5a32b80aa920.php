<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/public/assets/app-assets/css/sweetalert2.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main_section'); ?>
<style type="text/css">
    #media_img{
        height: 300px;
    }

    #subject_img{
        height: 300px;
    }

    .team-item .team-img-box:after{
        background: none !important;
    }

    @media(max-width: 768px){
       #media_img{
        height: auto;
    } 

    #subject_img{
        height: auto;
    }
    }
</style>

<section class="slider-area">
<div class="hero-slide owl-dot-and-nav">
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="single-slide-item" style="background-image: url('<?php echo e(url('/')); ?>/public/banner/<?php echo e($row->Image); ?>');">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-heading">
<h2 class="section__title text-white">बढ़ाएं  कदम <span style="color:yellow;">एक बेहतर </span>  <br> भविष्य की ओर</h2>
<p class="section__desc">आपके उज्जवल भविष्य को नई दिशा देने वाला विश्वसनीय  कोचिंग संस्थान ..  </p>
</div>
	
<div class="btn-box d-flex align-items-center">
<a href="https://play.google.com/store/apps/details?id=com.rajput.tutorials.app" target="_blank"> <img src="<?php echo e(url('/')); ?>/public/frontend/assets/images/google_play.png" alt="Rajput Mobile App" ></a>

</div>
</div>


</div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

</section>

<section class="feature-area text-left padding-bottom-90px">
<div class="container">
<div class="feature-content-wrap">
<div class="row">



<div class="col-lg-4 column-td-half" style="padding-bottom: 0px">

<div class="info-box info-box-color-3" style="padding-left:10px;  padding-right: 10px; padding-bottom: 0px">

<h3 class="info__title" >Classroom Programs</h3>
<p class="info__text" >राजपूत ट्यूटोरियल्स द्वारा संचालित क्लासरूम प्रोग्राम में छत्तीसगढ़  राज्य लोक सेवा आयोग की परीक्षाओं की  प्रारंभिक, मुख्य एवं प्रारंभिक+मुख्य परीक्षाओं की तैयारी के साथ छात्रों को पढ़ाई का एक अच्छा परिवेश मिलता है। यहाँ के अनुभवी शिक्षकों की देख-रेख में बेहतर शिक्षा प्रदान की जाती है एवं छात्रों पर विशेष ध्यान दिया जाता है। इसके साथ-साथ विषय संबंधित चर्चाएं, विचार विमर्श किए जाते हैं, जिससे छात्रों की बौद्धिक क्षमता का विकास सही ढंग से होता है और  वे विषय को स्पष्ट रूप से समझ सकते हैं। </p>
<div class="faq-body" >
                    <div class="accordion accordion-shared accordion-shared-2" id="accordionExample" style="padding-bottom: 0px">
                        <div class="card" style="padding-bottom: 0px">
                            <div class="card-header" id="headingOne" style="padding-bottom: 0px">
                                <h2 class="mb-0">
                                    <button class="theme-btn1" type="button" data-toggle="collapse" data-target="#collapseOne" style="width: 100%;padding-bottom:5px;">
                                     <!-- style="width: 100%; text-align: center; background: white; color:#29376E; border-top:1px solid #e6e6e6; height: 50px; padding-top: 15px; padding-bottom: 20px;"  -->   
                                  read more..
                                    </button>
                                </h2>
                            </div><!-- end card-header -->
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
								<h4>      क्लासरूम प्रोग्राम की विशेषताएँ -  </h4>
								<ul>
								<li>● साप्ताहिक क्लास टेस्ट एवं आंसर की प्रदान की जाती है </li>
								<li>● कैंटीन की सुविधा  </li>
								<li>● कम्पलीट स्टडी मैटेरियल </li>
								<li>● मासिक पत्रिका - करंट अफेयर्स</li>
								<li>● लाइब्रेरी की सुविधा </li>
								<li>● योजनाबद्ध समय-सारणी  </li>
								</ul>
								<br />
								
                                    <p>समय (Timing) - हमारे क्लासरूम प्रोग्राम्स के अंतर्गत तीन अलग - अलग समय पर क्लासेस लगती हैं, जिसका समय क्रमशः प्रातः 7:00-9:30, 10:30-12:00 एवं सायं 6:00-8:30 तक होती हैं।</p>
                                </div><!-- end card-body -->
                            </div><!-- end collapse -->
                        </div><!-- end card -->
                      
                        </div><!-- end card -->
                    </div><!-- end accordion -->
                   
                </div><!-- end faq-body -->
</div><!-- end info-box -->


<div class="col-lg-4 column-td-half" style="padding-bottom: 0px">
<div class="info-box info-box-color-3" style="padding-left:10px; padding-right: 10px; padding-bottom: 0px">


<h3 class="info__title" >Mobile / Tablet Course </h3>
<p class="info__text" >ऑनलाइन कोर्स - राजपूत ट्यूटोरियल्स द्वारा उपलब्ध ऑनलाइन कोर्स के अंतर्गत छत्तीसगढ़ राज्य लोक सेवा आयोग की प्रारंभिक, मुख्य एवं प्रारंभिक+मुख्य परीक्षा के मोबाइल एवं टेबलेट कॉर्स प्रदान किये जाते हैं। इसके अलावा आपको इसमें सभी अपडेटेड स्टडी मैटेरियल पीडीएफ फॉर्म में उपलब्ध कराया जाता है। <br /><br /><br /><br /><br /></p>
<div class="faq-body" >
                    <div class="accordion accordion-shared accordion-shared-2" id="accordionExample" style="padding-bottom: 0px">
                        <div class="card" style="padding-bottom: 0px">
                            <div class="card-header" id="headingOne" style="padding-bottom: 0px">
                                <h2 class="mb-0">
                                   <button class="theme-btn1" type="button" data-toggle="collapse" data-target="#collapseOne1" style="width: 100%;padding-bottom:5px;">
                                      
                                  read more..
                                    </button>
                                </h2>
                            </div><!-- end card-header -->
                            <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
								<h4>      ऑनलाइन कोर्सेज की विशेषताएं -</h4>
									<ul>
								<li>● प्रारंभिक परीक्षा हेतु 500 से अधिक घंटों की कक्षाएं उपलब्ध हैं।</li>
								<li>● प्रारंभिक+मुख्य (Pre +Mains) हेतु 750 से अधिक घंटों की कक्षाएं उपलब्ध हैं।  </li>
								<li>● सभी अपडेटेड स्टडी मटेरियल सरल भाषा में पीडीएफ फॉर्म में उपलब्ध हैं।</li>
								<li>● सभी विषयों की वीडियो एवं करंट अफेयर्स की विशेष कक्षाएं उपलब्ध हैं।</li>
								<li>● मुख्य परीक्षा हेतु उत्तर लेखन शैली का विशेष ध्यान रखा गया है।</li>
								<li>● प्रश्न-उत्तर सेशन होते हैं। </li>
								<li>● स्टडी मटेरियल एवं टेस्ट सीरीज़ हिंदी एवं अंग्रेजी दोनों भाषाओं में उपलब्ध हैं। </li>
								</ul>
								<br />
								
                                    <p>राजपूत ट्यूटोरियल्स के एंड्रॉइड मोबाइल ऐप पर प्रीलिम्स का वीडियो कोर्स उपलब्ध है। जिसे आप अपनी सुविधा के अनुसार जब चाहें, जहां से चाहें और जितने बार चाहें देख सकते हैं। साथ ही  Live Doubt Clearing Session के दौरान आप शिक्षकों के साथ आमने सामने इंटरैक्ट भी कर सकते हैं।</p>
                                </div><!-- end card-body -->
                            </div><!-- end collapse -->
                        </div><!-- end card -->
                      
                        </div><!-- end card -->
                    </div><!-- end accordion -->
                   
                </div><!-- end faq-body -->
</div><!-- end info-box -->


<div class="col-lg-4 column-td-half" style="padding-bottom: 0px">
<div class="info-box info-box-color-3" style="padding-left:10px;  padding-right: 10px; padding-bottom: 0px">

<h3 class="info__title" >Pendrive  &  Desktop Course</h3>
<p class="info__text" >अब बिना इंटरनेट के घर बैठे करें  तैयारी
<br /><br />
Coming Soon...
<br /><br /><br /><br /><br /><br /><br />
</p>
<div class="faq-body" style="padding-bottom: 0px">
                    <div class="accordion accordion-shared accordion-shared-2" id="accordionExample" style="padding-bottom: 0px">
                        <div class="card" style="padding-bottom: 0px">
                            <div class="card-header" id="headingOne" style="padding-bottom: 0px">
                                <h2 class="mb-0">
                                    <button class="theme-btn1" type="button" data-toggle="collapse" data-target="#collapseOne2" style="width: 100%;padding-bottom:5px;">
                                        
                                        Coming Soon
                                    </button>
                                </h2>
                            </div><!-- end card-header -->
                            <div id="collapseOne2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                   <p>Coming Soon </p>
								   </div><!-- end card-body -->
                            </div><!-- end collapse -->
                        </div><!-- end card -->
                      
                        </div><!-- end card -->
                    </div><!-- end accordion -->
                   
                </div><!-- end faq-body -->
</div><!-- end info-box -->

<!--
<div class="col-lg-3 column-td-half" style="padding-bottom: 0px">
<div class="info-box info-box-color-3" style="padding-left:10px; padding-right: 10px; padding-bottom: 0px">


<h3 class="info__title" >Desktop Course</h3>
<p class="info__text" >अब बिना इंटरनेट के घर बैठे करें तैयारी 
<br /><br /><br /><br /><br /><br /><br /><br /><br />
</p>
<div class="faq-body" style="padding-bottom: 0px">
                    <div class="accordion accordion-shared accordion-shared-2" id="accordionExample" style="padding-bottom: 0px">
                        <div class="card" style="padding-bottom: 0px">
                            <div class="card-header" id="headingOne" style="padding-bottom: 0px">
                                <h2 class="mb-0">
                                    <button class="theme-btn1" type="button" data-toggle="collapse" data-target="#collapseOne3" style="width: 100%;padding-bottom:5px;">
                                        
                                        Coming Soon
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                       <p>Coming Soon </p>
									</div>
                            </div>
                        </div>
                      
                        </div>
                    </div>
                   
                </div>
</div>
</div><!-- end col-lg-3 -->



</div><!-- end row -->
</div>
</div><!-- end container -->
</section><!-- end feature-area -->
<!--======================================
END FEATURE AREA
======================================-->

<div class="container" style="margin-bottom: 80px">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12 col-12">
            <div style="padding:0px; padding-top:8px; background: white">
            <marquee onMouseOver="this.stop()" onMouseOut="this.start()">
                <div class="row">
                    
                        <div class="col-sm-12 col-md-12 col-xl-12 col-xs-12 col-12">
                        <?php $__currentLoopData = $notification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($row->PDF!=''): ?>
                        <a href="<?php echo e(url('/')); ?>/public/notification/<?php echo e($row->PDF); ?>" target="_blank" style="color:#29376E; font-size: 20px !important">
                            <i class="fa fa-check-circle"></i> 
                            <?php echo e($row->Title); ?></a>

                        <?php else: ?>
                        <a href="<?php echo e($row->URL); ?>" target="_blank" style="color:#29376E; font-size: 20px !important">
                            <i class="fa fa-check-circle"></i> 
                            <?php echo e($row->Title); ?>

                        </a>
                        <?php endif; ?> 
                            &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    
                </div>
            </marquee>
        </div>
        </div>
    </div>
</div>

<section class="blog-area padding-top-120px" style="padding-top: 40px">
<div class="container">

<div class="row">
<div class="col-lg-12">
<div class="section-heading text-center">
<h5 class="section__meta section__metalight">OUR TOPPERS</h5>
<h2 class="section__title text-white">राजपूत के होनहार</h2>
<span class="section-divider section-divider-light"></span>
</div><!-- end section-heading -->
</div><!-- end col-md-12 -->
</div><!-- end row -->
<div class="row margin-top-30px">
<div class="col-lg-12">
<div class="blog-post-carousel owl-dot-and-nav">

<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card-item blog-card">
<div class="card-image" >
<a href="#" class="card__img"><img src="<?php echo e(url('/')); ?>/public/result/<?php echo e($row->Image); ?>" id="media_img" alt=""></a>
<!-- <div class="card-badge">
<span class="badge-label">24 Jan</span>
</div> -->
</div><!-- end card-image -->
<div class="card-content">
<h3 class="card__title mt-0">
<a ><?php echo e($row->Name); ?></a><br>
<a style="color:gray; font-size: 15px"><?php echo e($row->Subject); ?></a>
</h3>
<div class="card-action">
<ul class="card-duration d-flex align-items-center">
    <li><a href="#" class="blog-admin-name" style="color:#29376E; margin-left: -2px"><?php echo e($row->TitleandYear); ?></a>
</li>
<!-- <li><a href="#" class="blog-admin-name" style="color:#29376E; font-weight: bold;">Rank : <?php echo e($row->Rank); ?></a>
</li> -->
</ul>
</div><!-- end card-action -->
</div><!-- end card-content -->
</div><!-- end card-item -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div><!-- end blog-post-carousel -->
</div><!-- end col-lg-12 -->


</div><!-- end row -->
<div class="row" style="margin-bottom: 50px">
<div class="col-sm-12">
        <center><a href="<?php echo e(route('Result')); ?>"  class="theme-btn"> <b> View More </b></a></center>
</div>
</div>

</div><!-- end container -->
</section><!-- end blog-area -->


<section class="category-area padding-bottom-90px">
<div class="container">
<div class="row">
<div class="col-lg-9">
<div class="section-heading">
<h5 class="section__meta">Student Corner</h5>
<h2 class="section__title">Popular Categories</h2>
<span class="section-divider"></span>
</div><!-- end section-heading -->
</div><!-- end col-lg-9 -->
<div class="col-lg-3">
<div class="btn-box h-100 d-flex align-items-center justify-content-end">


<a href="#" class="theme-btn">View All</a>
</div><!-- end btn-box-->
</div><!-- end col-lg-3 -->
</div><!-- end row -->
<div class="category-wrapper margin-top-28px">
<div class="row">
    <div class="col-lg-4 column-td-half">
<div class="category-item">
<img src="<?php echo e(url('/')); ?>/public/frontend/assets/images/Video-Lectures.jpg" alt="" id="subject_img">
<div class="category-content">
<div class="category-inner">
<h3 class="cat__title"><a href="#">Demo Videos</a></h3>


<a href="<?php echo e(url('Videos/DemoVideos')); ?>" class="theme-btn">explore now</a>
</div>
</div><!-- end category-content -->
</div><!-- end category-item -->
</div><!-- end col-lg-4 -->
<?php $__currentLoopData = $subject_student_corner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-4 column-td-half">
<div class="category-item">
<img src="<?php echo e(url('/')); ?>/public/subject/<?php echo e($row->Image); ?>" alt="" id="subject_img">
<div class="category-content">
<div class="category-inner">
<h3 class="cat__title"><a href="#"><?php echo e($row->Name); ?></a></h3>


<a href="<?php echo e(url('/')); ?>/StudentCorner/<?php echo e($row->Name); ?>" class="theme-btn">explore now</a>
</div>
</div><!-- end category-content -->
</div><!-- end category-item -->
</div><!-- end col-lg-4 -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><!-- end row -->
</div><!-- end category-wrapper -->
</div><!-- end container -->
</section><!-- end category-area -->


<!-- <section class="course-area">
<div class="course-wrapper">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-heading text-center">
<h5 class="section__meta">अपने मनपसंद कोर्स का चयन करें</h5>
<h2 class="section__title">कोर्सेस</h2>
<span class="section-divider"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="section-tab margin-top-28px margin-bottom-55px">
<ul class="nav nav-tabs justify-content-center text-center" role="tablist" id="review">
<?php $i = 1; ?>
<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li role="presentation">
<a href="#tab1" role="tab" data-toggle="tab" class="theme-btn <?php if($i++=='1'): ?> active <?php endif; ?>" aria-selected="true">
<?php echo e($row->Name); ?>

</a>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>
</div>
</div>
</div>
</div>
</div>
<div class="card-content-wrapper section-bg padding-top-60px padding-bottom-110px">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="tab-content">
<div role="tabpanel" class="tab-pane fade show active" id="tab1">
<div class="row">

<?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-4 column-td-half">
<div class="card-item card-preview">
    <div class="card-image">
        <a href="#" class="card__img"><img src="<?php echo e(url('/')); ?>/public/frontend/assets/images/img8.jpg" alt=""></a>
        <div class="card-badge">
            <span class="badge-label"><?php echo e($row->Category); ?></span>
        </div>
    </div>
    <div class="card-content">
        
        <h3 class="card__title">
            <a href="#"><?php echo e($row->ProductName); ?></a>
        </h3>
        <p class="card__author">
            <a href="#"><?php echo e($row->SubDescription); ?></a>
        </p>
       
        <div class="card-action">
            <ul class="card-duration d-flex justify-content-between align-items-center">
                <li>
                    <span class="meta__date"><?php echo e($row->SubCategory); ?>

                    </span>
                </li>
                <li>
                    <span class="meta__date"><?php echo e($row->Language); ?>

                    </span>
                </li>
            </ul>
        </div>
        <div class="card-price-wrap d-flex justify-content-between align-items-center">
            <?php if($row->DiscountPrice!=''): ?>
            <span  style="text-decoration:line-through; margin-right: -70px">Rs <?php echo e($row->Price); ?></span>
            <?php endif; ?>

             <?php if($row->DiscountPrice!=''): ?>
             <span  style="font-weight: bold; font-size: 25px" class="card__price">Rs.<?php echo e($row->DiscountPrice); ?></span>
             <?php else: ?>
             <span class="card__price" style="font-weight: bold; font-size: 25px">Rs.<?php echo e($row->Price); ?></span>
             <?php endif; ?>
            <a href="#" class="text-btn" style="color:red; border:1px solid red; padding:5px; border-radius: 5px; padding-left: 15px; padding-right: 15px">Add to cart</a>
        </div>
    </div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
</div>


</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="btn-box mt-4 text-center">
<a href="#" class="theme-btn">सभी कोर्सेज की जानकारी</a>
</div>
</div>
</div>
</div>
</div>
</section>
 -->

<section class="funfact-area text-center overflow-hidden padding-top-85px padding-bottom-85px">
<div class="container">
<div class="row">

<div class="col-lg-3 column-td-half">
<div class="counter-item">
<span class="la la-globe count__icon"></span>
<h4 class="count__title counter text-color">10000 </h4>
<p class="count__meta">Total Enrollments</p>
</div><!-- end counter-item -->
</div><!-- end col-lg-3 -->
<div class="col-lg-3 column-td-half">
<div class="counter-item">
<span class="la la-users count__icon"></span>
<h4 class="count__title counter text-color-2">750</h4>
<p class="count__meta">Hours/Lectures</p>
</div><!-- end counter-item -->
</div><!-- end col-lg-3 -->
<div class="col-lg-3 column-td-half">
<div class="counter-item">
<span class="la la-certificate count__icon"></span>
<h4 class="count__title counter text-color-3">100</h4>
<p class="count__meta">Selected Candidates</p>
</div><!-- end counter-item -->
</div><!-- end col-lg-3 -->
<div class="col-lg-3 column-td-half">
<div class="counter-item">
<span class="la la-bullhorn count__icon"></span>
<h4 class="count__title counter">23</h4>
<p class="count__meta">Total Courses</p>
</div><!-- end counter-item -->
</div><!-- end col-lg-3 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end funfact-area -->
<!-- ================================
START FUNFACT AREA
================================= -->

<div class="section-block"></div>

<!--======================================
START TEAM AREA
======================================-->
<section class="team-area padding-top-120px padding-bottom-110px">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-heading text-center">
<h5 class="section__meta">Our Team</h5>
<h2 class="section__title">Team Rajput Tutorials   </h2>
<span class="section-divider"></span>
</div><!-- end section-heading -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
<div class="row margin-top-28px">

<?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-4 column-td-half">
<div class="team-item" style="border-radius: 5px">
<div class="team-img-box" style="border-radius: 5px">
<img src="<?php echo e(url('/')); ?>/public/team/<?php echo e($row->Image); ?>" style="border-radius: 5px">
<ul class="social-profile">
<?php if($row->Twitter!=''): ?>
<li><a href="<?php echo e($row->Twitter); ?>"><i class="fa fa-twitter"></i></a></li>
<?php endif; ?>
<?php if($row->Facebook!=''): ?>
<li><a href="<?php echo e($row->Facebook); ?>"><i class="fa fa-facebook"></i></a></li>
<?php endif; ?>
<?php if($row->LinkedIn!=''): ?>
<li><a href="<?php echo e($row->LinkedIn); ?>"><i class="fa fa-linkedin"></i></a></li>
<?php endif; ?>

<?php if($row->Instagram!=''): ?>
<li><a href="<?php echo e($row->Instagram); ?>"><i class="fa fa-instagram"></i></a></li>
<?php endif; ?>
</ul>
</div>
<div class="team-detail">
<h3 class="team__title"><a href="#"><?php echo e($row->Name); ?></a></h3>
<p class="team__meta"><?php echo e($row->Designation); ?></p>
</div>
</div><!-- end team-item -->
</div><!-- end col-lg-4 -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div><!-- end row -->
<div class="row">
<div class="col-lg-12">
<div class="btn-box text-center">
<a href="<?php echo e(route('About')); ?>" class="theme-btn"> <b> View More  </b></a>
</div><!-- end btn-box -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end team-area -->
<!--======================================
END TEAM AREA
======================================-->

<!--================================
START TESTIMONIAL AREA
=================================-->
<section class="testimonial-area section-bg padding-top-120px padding-bottom-110px">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-heading text-center">
<h5 class="section__meta">See What Our Lovely Students Said</h5>
<h2 class="section__title">Testimonials</h2>
<span class="section-divider"></span>
</div><!-- end section-heading -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end container -->
<div class="container-fluid">
<div class="row margin-top-28px">
<div class="col-lg-12">
<div class="testimonial-carousel">


<?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<div class="testimonial-item" style="height: auto;">
<div class="testimonial-header">
<img src="<?php echo e(url('/')); ?>/public/testimonial/<?php echo e($row->Image); ?>" alt="small-avatar">
<div class="testimonial__name">
<h3 class="testimonial__name-title"><?php echo e($row->Name); ?></h3>
<span class="testimonial__name-meta"><?php echo e($row->Designation); ?></span>

</div>
</div><!-- end testimonial-header -->
<div class="testimonial__desc">
<p class="testimonial__desc-desc" data-toggle="collapse" data-target="#collapseOne1">
<?php echo e(str_limit($row->Message,300)); ?>

</p>
</div><!-- end testimonial__desc -->

</div><!-- end testimonial-item -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><!-- end testimonial-wrap -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- container-fluid -->
</section><!-- end testimonial-area -->

<section class="get-start-area text-center padding-top-120px padding-bottom-110px overflow-hidden">
<div id="perticles-js"></div>
<div class="box-icons">
<div class="box-one"></div>
<div class="box-two"></div>
<div class="box-three"></div>
<div class="box-four"></div>
</div><!-- end box-icons -->
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="get-start-content">
<div class="section-heading">
<h5 class="section__meta section__metalight">Rajput Tutorials</h5>
<h2 class="section__title text-white" style="font-size:44px!important;">" अनुशासन  परिश्रम   सफलता  "   </h2>   <h4 class="section__title text-white" style="font-size:24px !important;">छ. ग  लोकसेवा आयोग  एवं अन्य प्रतियोगी परीक्षाओं में  सफलता  पाने के लिए आज ही शुरुवात  करें</h4>
<span class="section-divider section-divider-light"></span>
</div><!-- end section-heading -->
<div class="btn-box margin-top-20px">
<a href="#" class="theme-btn theme-btn-hover-light"> <b >Register Now</b></a>
</div>
</div><!-- end get-start-content -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end container -->
<div class="box-icons2">
<div class="box-one"></div>
<div class="box-two"></div>
<div class="box-three"></div>
<div class="box-four"></div>
<div class="box-five"></div>
</div><!-- end box-icons2 -->
</section><!-- end get-start-area -->
<!--======================================
END GET-START AREA
======================================-->

<!--======================================
START BENEFIT AREA
======================================-->
<section class="benefit-area padding-bottom-180px overflow-hidden">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="benefit-heading padding-top-120px">
<div class="section-heading">
<h5 class="section__meta">Director's Message</h5>
<h2 class="section__title">C.S Rajput</h2>
<h4 class="widget-title">Founder / Managing Director</h4>
<span class="section-divider"></span>
<p class="section__desc">
<iframe width="450" height="315" src="https://www.youtube.com/embed/kR_0I8QXNU4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</p>
</div><!-- end section-heading -->

<div class="btn-box">
<a href="<?php echo e(route('Contact')); ?>" class="theme-btn">Contact Us</a>
</div>
</div><!-- end benefit-heading -->
</div><!-- end col-lg-6 -->
<div class="col-lg-6">
<div class="img-box">

<img src="<?php echo e(url('/')); ?>/public/frontend/assets/images/RT.png" alt="Rajput Tutorials">
</div>
</div>
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end benefit-area -->
<!--======================================
END BENEFIT AREA
======================================-->

<div class="section-block"></div>

<!--======================================
START REGISTER AREA
======================================-->
<section class="register-area section-padding">
<div class="container">
<div class="row">
<div class="col-lg-5">
<div class="register-form">
<div class="contact-form-action">
<h3 class="widget-title">Admission Now</h3>
<form method="post" action="<?php echo e(route('Contact/Store')); ?>">
    <input type="hidden" name="home" value="home">
    <?php echo e(csrf_field()); ?>

<div class="input-box">
<label class="label-text">Name<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
<input class="form-control" required type="text" name="Name" placeholder="Your Name">
<span class="la la-user input-icon"></span>
</div>
</div><!-- end input-box -->
<div class="input-box">
<label class="label-text">Email<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
<input class="form-control" type="email" name="Email" placeholder="Email Address">
<span class="la la-envelope input-icon"></span>
</div>
</div><!-- end input-box -->
<div class="input-box">
<label class="label-text">Phone Number<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
<input class="form-control" type="number" required name="Mobile" placeholder="Phone Number">
<span class="la la-phone input-icon"></span>
</div>
</div><!-- end input-box -->
<div class="input-box">
<label class="label-text">Course<span class="primary-color-2 ml-1">*</span></label>
<div class="form-group">
<input class="form-control" type="text" name="Message" placeholder="Course">
<span class="la la-book input-icon"></span>
</div>
</div><!-- end input-box -->
<div class="btn-box">
<button class="theme-btn" type="submit">Submit Now</button>
</div><!-- end btn-box -->
</form>
</div><!-- end contact-form-action -->
</div>
</div><!-- end col-lg-5 -->
<div class="col-lg-7">
<div class="register-heading">
<div class="section-heading">
<img src="<?php echo e(url('/')); ?>/public/frontend/assets/images/mobile.png" alt="Rajput Mobile App" >
<br>
<h2 class="section__title">राजपूत ट्यूटोरियल्स  मोबाइल एप आज ही डाउनलोड करें</h2>
<p><a href="https://play.google.com/store/apps/details?id=com.rajput.tutorials.app" target="_blank"> <img src="<?php echo e(url('/')); ?>/public/frontend/assets/images/google_play.png" alt="Rajput Mobile App" ></a></p>
</div><!-- end section-heading -->
<div class="btn-box">

</div>
</div><!-- end register-heading -->
</div><!-- end col-lg-7 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end register-area -->
<!--======================================
END REGISTER AREA
======================================-->

<div class="section-block"></div>


<section class="blog-area padding-top-120px">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-heading text-center">
<h5 class="section__meta section__metalight">News Feed</h5>
<h2 class="section__title text-white">News & Media Coverage</h2>
<span class="section-divider section-divider-light"></span>
</div><!-- end section-heading -->
</div><!-- end col-md-12 -->
</div><!-- end row -->
<div class="row margin-top-30px">
<div class="col-lg-12">
<div class="blog-post-carousel owl-dot-and-nav">

<?php $__currentLoopData = $media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card-item blog-card">
<div class="card-image" >
<a href="#" class="card__img">
<img src="<?php echo e(url('/')); ?>/public/gallery/<?php echo e($row->Image); ?>" id="media_img" alt=""></a>
<!-- <div class="card-badge">
<span class="badge-label">24 Jan</span>
</div> -->
</div><!-- end card-image -->
<div class="card-content">
<h3 class="card__title mt-0">
<a><?php echo e($row->Title); ?>...</a>
<a href="<?php echo e(url('/')); ?>/public/gallery/<?php echo e($row->PDF); ?>" style="float: right;" target="_blank"><i class="fa fa-download "></i></a>
</h3>
<div class="card-action">
<ul class="card-duration d-flex align-items-center">
<li><a href="#" class="blog-admin-name"><?php echo e(str_limit($row->Description)); ?>...</a>
</ul>
</div><!-- end card-action -->
</div><!-- end card-content -->
</div><!-- end card-item -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div><!-- end blog-post-carousel -->
</div><!-- end col-lg-12 -->
</div><!-- end row -->
</div><!-- end container -->
</section><!-- end blog-area -->


<!-- <section class="subscriber-area padding-top-80px padding-bottom-75px">
<div class="container">
<div class="row">
<div class="col-lg-5">
<div class="section-heading">
<h5 class="section__meta section__metalight">एंड्राइड  एप</h5>
<h2 class="section__title text-white">राजपूत ट्यूटोरियल्स  मोबाइल एप आज ही डाउनलोड करें</h2>
<span class="section-divider section-divider-light"></span>

<p><a href="https://play.google.com/store/apps/details?id=com.rajput.tutorials.app" target="_blank"> <img src="<?php echo e(url('/')); ?>/public/frontend/assets/images/google_play.png" alt="Rajput Mobile App" ></a></p>
</div>
</div>
<div class="col-lg-6 ml-auto">




<div class="subscriber-form">
<div class="contact-form-action">
<form method="post">
<div class="input-box">

<img src="<?php echo e(url('/')); ?>/public/frontend/assets/images/mobile.png" alt="Rajput Mobile App" >

</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section> -->


<!--======================================
END SUBSCRIBER AREA
======================================-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript" src="<?php echo e(url('/')); ?>/public/assets/app-assets/js/sweetalert2.all.min.js"></script>
<?php if(session()->has('success')): ?>
<script type="text/javascript">

swal(
'Success',
'Form Submitted <b style="color:green;">Successfully </b>!',
'success'
)

</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.layouts.Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rajput_backup_original\resources\views/Frontend/Index.blade.php ENDPATH**/ ?>