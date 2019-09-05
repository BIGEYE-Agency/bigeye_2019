<?php /* Template Name: Careers */ ?>
<?php get_header(); ?>

<div class="content-area">
  <section class="heroSectionImage heroSection" hero-full="https://creativeis.us/bigeye/wp-content/uploads/2018/04/careers1.jpg" hero-large="https://creativeis.us/bigeye/wp-content/uploads/2018/04/careers1.jpg" hero-med="https://creativeis.us/bigeye/wp-content/uploads/2018/04/careers1.jpg" style="">
  </section>

<div class="collage-container">
  <?php if( have_rows('image_collage') ): ?>
  <?php while ( have_rows('image_collage') ) : the_row();  ?>
  <div class="over-sbs">
    <div id="go-kart" style="background-image:url('<?php the_sub_field("image") ?>');"></div>
    <div class="copy">
      <div class="quote"><span style="background-color: #f9e647">Do what you love</span> & tomorrow will pay the rent.
        <div class="signature">-Felix Sockwell</div>
      </div>
    </div>
    <div class="image-waterfall">
      <div id="cr-img-2" style="background-image:url('<?php the_sub_field("image_2") ?>');"></div>
      <div class="cr-left">
        <div id="cr-img-3" style="background-image:url('<?php the_sub_field("image_3") ?>');"></div>
        <div id="cr-img-4" style="background-image:url('<?php the_sub_field("image_5") ?>');"></div>
        <div id="cr-img-8" style="background-image:url('<?php the_sub_field("image_8") ?>');"></div>
      </div>
      <div class="cr-right">
        <div id="cr-img-5" style="background-image:url('<?php the_sub_field("image_4") ?>');"></div>
        <div id="cr-img-6" style="background-image:url('<?php the_sub_field("image_6") ?>');"></div>
        <div id="cr-img-7" style="background-image:url('<?php the_sub_field("image_7") ?>');"></div>
      </div>
    </div>
    <?php endwhile;  ?>
    <?php endif; ?>
  </div>
</div>


<div class="small-container">


  <div class="awards-container">
    <img src="<?php echo get_home_url(); ?>/wp-content/themes/BIGEYE/resources/img/trophy.svg">
    <div class="headline-wrap">
      <div class="red-line"></div>
      <h3 class="headline">Awarded Coolest Office Space</h3>
      <h4 class="subheadline">2017 Orlando Business Journal Regional Ranking</h4>
    </div>
  </div>

  <div class="body-content">
    <input type="button" class="circle" value="DO NOT PRESS"/>
    <button class="circle">DO NOT<br><span style="margin-left: -0.80rem;">PRESS</span></button>
    <div class="width-container">
      <?php if( have_rows('perks') ): ?>
      <?php while( have_rows('perks') ): the_row(); ?>
      <h1 class="headline"><?php the_sub_field('headline'); ?></h1>
      <div class="left">
        <?php if( have_rows('left_perks') ): ?>
        <?php while( have_rows('left_perks') ): the_row(); ?>
        <div class="careers-cpy p1">
          <h3><?php the_sub_field('headline'); ?></h3>
          <div class="c1"><?php the_sub_field('copy'); ?></div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="right">
        <div class="unicorn">
          <img src="<?php echo get_home_url(); ?>/wp-content/themes/BIGEYE/resources/careers/Unicorn.gif?<?php echo time();?>">
        </div>
        <?php if( have_rows('right_perks') ): ?>
        <?php while( have_rows('right_perks') ): the_row(); ?>
        <div class="careers-cpy p1">
          <h3><?php the_sub_field('headline'); ?></h3>
          <div class="c1"><?php the_sub_field('copy'); ?></div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>

  </div>
</div>


<div class="job-listings">
  <?php if( have_rows('department') ): ?>
  <?php while( have_rows('department') ): the_row(); ?>


  <div class="single-job">
    <div class="depart-wrap">
      <h2><?php the_sub_field('department_name'); ?></h2>
    </div>

    <div class="list-wrap">
      <ul>
      <?php if( have_rows('positions') ): ?>
      <?php while( have_rows('positions') ): the_row(); ?>
        <?php if( get_sub_field('active')): ?>
          <li><a href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('title'); ?></a></li>
        <?php else : ?>
          <li class="inactive"><?php the_sub_field('title'); ?></li>

        <?php endif; ?>

      <?php endwhile; ?>
      <?php endif; ?>
      </ul>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
</div>
</div>


 <script>

var length = $('.list-wrap ul li').length;
console.log(length);

$(".circle").on("click", function(){

$(".unicorn").css("display", "block");
$(".confetti").css("display", "block");
$('.confetti').animate({"top": "150px"}, 5000).fadeToggle();
$('.unicorn').delay(7000).hide(0);
   var audioElement = document.createElement('audio');
      audioElement.setAttribute('src', '<?php echo get_home_url(); ?>/wp-content/themes/BIGEYE/resources/careers/mlg-airhorn.mp3');
      audioElement.setAttribute('autoplay', 'autoplay');
      //audioElement.load()
      $.get();
      audioElement.addEventListener("load", function() {
      audioElement.play();
      }, true);

return false;

});

</script>
<script type="text/javascript">
_linkedin_partner_id = "617458";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=617458&fmt=gif" />
</noscript>

<?php get_footer(); ?>
