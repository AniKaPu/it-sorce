<?php get_header(); ?>


<section class="hero">
    <article class="hero__content">
        <h1 class="title">We develop mobile and web software</h1>
        <p class="text">
        We turn ideas into solutions tailored to the unique needs of your business
        </p>
        <a href="" class="button">See our services</a>
    </article>
    <figure class="hero__img">
         <img src="<?php echo get_template_directory_uri(); ?>/dist/img/hero.png" alt="hero image">
    </figure>
</section>
<ul class="numbers">
    <li class="numbers__item">
        <figure class="numbers__img">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/User.png" alt="person">
        </figure>
        <article class="numbers__content">
            <div class="numbers__number">
                <span class="title-small">
                    90
                </span>
                <span class="title-small"> k+ </span>
            </div>
            <div class="text__big">
            Clients
            </div>
        </article>
    </li>
      <li class="numbers__item">
        <figure class="numbers__img">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/location.png" alt="office">
        </figure>
        <article class="numbers__content">
            <div class="numbers__number">
                <span class="title-small">
                    30
                </span>
                <span class="title-small"> + </span>
            </div>
            <div class="text__big">
            Offices
            </div>
        </article>
    </li>
      <li class="numbers__item">
        <figure class="numbers__img">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/server.png" alt="services">
        </figure>
        <article class="numbers__content">
            <div class="numbers__number">
                <span class="title-small">
                    50
                </span>
                <span class="title-small"> + </span>
            </div>
            <div class="text__big">
            Services
            </div>
        </article>
    </li>
</ul>

<section class="content">
    <figure class="content__img">
         <img src="<?php echo get_template_directory_uri(); ?>/dist/img/foto-cropped.png" alt="hero image">
    </figure>
    <article class="content__content">
        <h2 class="title__secondary">In this we are great</h2>
        <p class="text">
        We are delivering beautiful mobile apps for Android and iOS as well as advanced websites and web apps
        </p>
        <ul class="list">
            <li>Native Mobile Apps</li>
            <li>Responsive Web Pages</li>
            <li>UX/UI Design</li>
            <li>System Integrations</li>
        </ul>
    </article>
   
</section>


    
</div> <!--end of page content- must have-->
<?php get_footer(); ?>