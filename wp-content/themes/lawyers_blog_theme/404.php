<?php /* Template Name: 404 page */ ?>
<?php get_header(); ?>
<section class="bg-base-100 flex flex-col justify-start items-center h-screen">
        <figure class="rounded-none">
            <img class="md:w-[502px] md:h-[331px]" src="<?php echo get_template_directory_uri(); ?>/templates/assets/home/errorpage.png" />
        </figure>
        <p class="text-[40px] my-4 md:my-0 md:text-[64px] text-yellow-accent font-plus_jakarta font-bold">404 Error</p>
        <p class="text-[36px] md:text-[60px] my-4 md:my-0 text-[#65676B] font-medium font-plus_jakarta">Page Not Found</p>
        <button class="text-sm md:text-lg rounded-lg text-base-100 bg-yellow-accent my-8 px-4 py-2 font-plus_jakarta">Go To Homepage</button>
</section>