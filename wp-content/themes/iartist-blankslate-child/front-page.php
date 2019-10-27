<?php get_header(); ?>
<?php get_sidebar(); ?>

    <section id="showcase">
        <div class="container">
            <h1>Hire Artist</h1>
            <p>TO DRAW ANYTHING YOU WANT</p>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h1>About Us</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos totam saepe pariatur quibusdam laudantium, beatae molestiae dolorem ab magni facere, architecto est tempore veritatis! Dicta consectetur cum quis libero praesentium. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, dolores est magni dolorum aperiam assumenda error non tempora eaque natus eos fugiat omnis quam ullam magnam, ea unde modi repudiandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, ipsam minus perspiciatis enim corporis delectus aliquid nisi reprehenderit voluptates. Ex, vel nobis accusamus voluptate aliquid provident obcaecati ad corrupti ea.</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum debitis quos, qui, sequi iure facilis ipsum sint ex aliquam nam obcaecati velit a natus? Atque, ea minima. Et, maiores quisquam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta eum facilis, exercitationem asperiores impedit, consequatur nesciunt nemo reiciendis ipsa excepturi eaque? Quam facere amet quia asperiores libero accusantium itaque vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente obcaecati corrupti ipsum est voluptates autem tenetur eos quis iste necessitatibus molestias doloribus, perspiciatis, cumque sit nemo debitis fugit ut possimus.</p>
        </div>
    </section>

    <section id="artists">
        <div class="container">
            <h1>Meet Our Artists</h1>
        <div class="boxes">
            <?php $query = new WP_Query(['post_type' => 'post']); 
            $loopCount = 0;
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                $loopCount++;
                if ($loopCount >= 5) break;
                ?>
                <div class="box">
                    <div class="image-holder">
                        <img src="<?php echo get_field('avatar'); ?>" alt="avatar">
                    </div>
                    
                    <h2><?php the_field('name') ?></h2>
                    <p>Joined date:</p>
                    <h5><?php the_field('joined_date'); ?></h5>
                    
                    <?php $link = str_replace(' ', '-', strtolower(get_field('name'))) ?>
                    <a href="<?php echo $link; ?>"><button class="btn">Detail</button></a>
                </div>
            <?php endwhile; endif; ?>

        </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h1>Contact Us</h1>
            <?php echo do_shortcode('[contact-form-7 id="36" title="Contact form 1"]'); ?>
        </div>
    </section>
<?php get_footer(); ?>