<?php get_header(); ?>
    
    <!--hERO-->
    <div class="bg-primary pb-64" id="Hero">        
        <div class="container">
            <h1 class="text-6xl text-white text-center pt-64">Welcome to the <?php echo bloginfo('title'); ?>!</h1>
            <p class="text-3xl text-white text-center pt-10"> <?php bloginfo('description'); ?></p>        
            <div class="search-form text-center my-20">
                <?php get_search_form();?>                
            </div>
            <div class="search-form my-24 flex justify-between">                                
                
                <?php $statistics = bbp_get_statistics();?>                  
                
                <div class="flex flex-row w-full">
                    <div class="register_now bg-primary border-white border-2 bg-gray-900 text-center flex-grow flex flex-col justify-center">
                        <h1 class="text-black text-white text-6xl capitalize">Join our community</h1>
                        <div class="py-20">
                            <a href="#" class="text-4xl bg-secondary text-white px-20 py-6 border-pink-200 border-2">
                                Register Now
                            </a>
                        </div>
                    </div>
                    <div class="stats flex flex-col">
                        
                        <div class="members_count p-20 bg-white flex-grow flex justify-between">
                            <div class="p-10 rounded-b-full flex flex-col justify-center bg-secondary">
                                <i class="text-6xl text-white fa fa-user"></i>
                            </div>                    
                            <h2 class="text-5xl flex flex-col w-64 text-right ml-10"> 
                                <span class="font-bold uppercase">Members</span>
                                <span class="text-6xl text-gray-200"><?php echo $statistics['user_count'];?></span>
                            </h2>
                        </div>                                
                        
                        <div class="replies_count p-20 bg-white flex-grow flex justify-between">
                            <div class="p-10 rounded-b-full flex flex-col justify-center bg-secondary">
                                <i class="text-6xl text-white fa fa-reply"></i>
                            </div>                    
                            <h2 class="text-5xl flex flex-col w-64 text-right"> 
                                <span class="font-bold uppercase">Replies</span>
                                <span class="text-6xl text-gray-200"><?php echo $statistics['reply_count'];?></span>
                            </h2>
                        </div>                                
                        
                        <div class="topics_count p-20 bg-white flex-grow flex justify-between">
                            <div class="p-10 rounded-b-full flex flex-col justify-center bg-secondary">
                                <i class="text-6xl text-white fa fa-thumb-tack"></i>
                            </div>
                            <h2 class="text-5xl flex flex-col w-64 text-right ml-10"> 
                                <span class="font-bold uppercase">Topics</span>
                                <span class="text-6xl text-gray-200"><?php echo $statistics['topic_count'];?></span>
                            </h2>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>

    <!--Main-->
    <main class="container bg-gray-100 shadow-lg -mt-20" id="Main">                      

        <!--Forums-->        
        <div class="mt-20">
            <h2 class="text-6xl pl-10 pt-10">Forums</h2>
            <?php
                echo do_shortcode( '[bbp-forum-index]' ); 
            ?>
        </div>

        <!--Topics-->        
        <div class="mt-20">
            <h2 class="text-6xl pl-10 pt-10">Latest Topics</h2>
            <?php echo do_shortcode('[bbp-topic-index]');?>              
        </div>


        <!--Blog Posts-->      
        <hr>  
        <h2 class="text-6xl pl-10 pt-10">From Our Blog</h2>
        <div class="blog mt-20 flex">
            
            <div class="blog-posts w-3/4 flex justify-start flex-wrap">                
                <?php 
                $posts = new WP_Query(array(
                    'posts_per_page' => 6
                ));            
                while($posts->have_posts()){ 
                    $posts->the_post(); ?>                    
                        <div class="blog-single-post w-1/3 border-1 p-5">                            
                            <div class="blog-single-post-thumbnai relative">
                                <?php the_post_thumbnail('medium',['class'=> 'w-full h-auto']);?>
                                <p class="absolute bottom-0 right-0 text-2xl text-white bg-primary p-2 rounded">
                                    <i class="fa fa-clock"></i>
                                    <?php the_time('F j,Y'); ?>
                                </p>
                            </div>                            
                            <h3 class="title pt-10 bg-white text-4xl overflow-hidden flex flex-col justify-center">
                                <a href="#" class="w-screen block"><?php the_title(); ?></a>
                                <p class="text-2xl pb-10"><a href="<?php the_permalink(); ?>">Read More &raquo;</p>
                            <h3>
                            <div class="meta bg-primary text-white flex justify-between py-5">                                
                                <a href="#" class="capitalize text-3xl w-1/2 pl-2 flex flex flex-col justify-center">
                                    <img class="w-10 h-10 rounded-full" src="<?php echo get_avatar_url(get_the_author_meta('ID'),'100') ?>">
                                    <?php the_author(); ?>
                                </a>
                                <div class="w-1/2 pr-2 flex self-center text-right">                                    
                                    <p class="text-right w-full">
                                        <i class="fa fa-comment"></i>
                                        <?php echo get_comments_number();?>  
                                    </p>                                                                      
                                </div>
                            </div>                                                                                                                    
                        </div>                    
                <?php } ?>                    
            </div>                        

            <!--Categories-->
            <div class="bg-white w-1/4">
                <div class="cat border-2 border-gray-100 p-5 my-5 pb-10">
                    <h2 class="text-gray-200 text-5xl py-5 pl-2 underline">Categories</h2>
                    <ul class="list-none flex flex-wrap justify-between">
                    <?php
                        $categories = get_categories( array(
                            'orderby' => 'name',
                            'parent'  => 0
                        ) );                    
                        foreach ( $categories as $category ) {?>
                            <li class="border-2 text-left border-gray-100 p-10 w-1/2">
                                <a class="text-4xl" href="<?php echo esc_url( get_category_link( $category->term_id )) ?>">
                                    <?php echo esc_html( $category->name); ?>
                                </a>
                            </li>                        
                            <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>                      

        </div>


    </main>


<?php get_footer(); ?>