<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>


<section class="contact-main px-2 md:px-0 my-4 md:my-10 flex">
    <!-- contact Form  -->
    <div class="container mx-auto">
        <div class="wraped-sec md:w-[90%]">
            <header class="title flex justify-start items-center">
                <p class="text-2xl md:text-5xl font-bold text-[#1A1A1A]">Contact Us</p>
                <div class="w-16 md:w-[120px] h-0.5 bg-[#1A1A1A] mt-3 mx-4 self-start md:self-center"></div>
            </header>
            <p class="text-base md:text-[20px] text-[#272727] my-8 font-plus_jakarta leading-8">We are always at your service. If there are any queries regarding blogs, advertisements, and guest posts, you can contact us with the contact form or simply email us at <strong class="text-yellow-accent underline">media@redhatmedia.net.</strong> We will try to get back to you with a solution ASAP.</p>
            <form action="" class="flex flex-col">
                <label for="name" class="text-sm md:text-lg font-plus_jakarta text-[#1A1A1A] font-normal">Your Name</label>
                <input type="text" class="border bg-[#F5F5F5] border-[#BCBCBC] mb-2 md:mb-4 px-4 py-3 font-plus_jakarta outline-none">
                <label for="email" class="text-sm md:text-lg font-plus_jakarta text-[#1A1A1A]">Your E-mail</label>
                <input type="email" class="border bg-[#F5F5F5] border-[#BCBCBC] mb-2 md:mb-4 px-4 py-3 font-plus_jakarta outline-none">
                <label for="subject" class="text-sm md:text-lg font-plus_jakarta text-[#1A1A1A]">Subject</label>
                <input type="text" class="border bg-[#F5F5F5] border-[#BCBCBC] mb-2 md:mb-4 px-4 py-3 font-plus_jakarta outline-none">
                <label for="msg" class="text-sm md:text-lg font-plus_jakarta text-[#1A1A1A]">Your message (optional)</label>
                <textarea id="" cols="30" rows="7" class="border bg-[#F5F5F5] border-[#BCBCBC] mb-2 md:mb-4 p-4 font-plus_jakarta outline-none"></textarea>
            </form>
            <div class="flex justify-center md:justify-start">
            <button class="text-[14px] md:text-[22px] rounded-md text-base-100 bg-yellow-accent my-4 md:my-12 px-4 md:px-12 py-3 font-plus_jakarta font-normal">Submit</button>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>