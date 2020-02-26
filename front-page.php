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
                
                <div class="members_count p-20 bg-white flex justify-between">                                        
                    <div class="p-10 rounded-b-full flex flex-col justify-center bg-secondary">
                        <i class="text-6xl text-white fa fa-user"></i>
                    </div>                    
                    <h2 class="text-5xl flex flex-col ml-40"> 
                        Members 
                        <span><?php echo $statistics['user_count'];?>+</span>
                    </h2>
                </div>                                
                
                <div class="replies_count p-20 bg-white flex justify-between">                                        
                    <div class="p-10 rounded-b-full flex flex-col justify-center bg-secondary">
                        <i class="text-6xl text-white fa fa-reply"></i>
                    </div>                    
                    <h2 class="text-5xl flex flex-col ml-40"> 
                        Replies 
                        <span><?php echo $statistics['reply_count'];?></span>
                    </h2>
                </div>                                
                
                <div class="topics_count p-20 bg-white flex justify-between">
                    <div class="p-10 rounded-b-full flex flex-col justify-center bg-secondary">
                        <i class="text-6xl text-white fa fa-thumb-tack"></i>
                    </div>
                    <h2 class="text-5xl flex flex-col ml-40"> 
                        Topics 
                        <span><?php echo $statistics['topic_count'];?></span>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!--Main-->
    <main class="container bg-gray-100 h-screen shadow-lg -mt-40" id="Main">     
        
        <!--Register now-->   
        <div class="register_now bg-primary border-white border-2 bg-gray-900 text-center">
            <h1 class="text-black pt-20 text-white text-6xl capitalize">Join our community</h1>
            <div class="py-20">
                <a href="#" class="text-4xl bg-secondary text-white px-20 py-6 border-pink-200 border-2">
                    Register Now
                </a>
            </div>
        </div>

        <!--Forums-->        
        <div class="mt-64">
            <h2 class="text-6xl">Forums</h2>
            <?php
                echo do_shortcode( '[bbp-forum-index]' ); 
            ?>
        </div>


    </main>


<?php get_footer(); ?>