<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="all" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>

<body>

  <header>
    <nav class="navbar bg-[#F5F5F5]">
      <div class="container mx-auto">
        <div class="navbar-start">
          <a class="cursor-pointer">
            <figure class="rounded-none">
              <img class="w-48 h-8" src="<?php echo get_template_directory_uri(); ?>/templates/assets/home/lawyersnote3x.png" alt="logo" />
            </figure>
          </a>
        </div>


        <div class="navbar-center hidden lg:flex">
          <ul class="text-lg font-serif menu menu-horizontal p-0 pr-32">
            <li><a class="hover:text-yellow-accent hover:bg-[#F5F5F5] hover:underline underline-offset-8 decoration-2">Home</a></li>
            <li><a class="hover:text-yellow-accent hover:bg-[#F5F5F5] hover:underline underline-offset-8 decoration-2">Legal News</a></li>
            <li><a class="hover:text-yellow-accent hover:bg-[#F5F5F5] hover:underline underline-offset-8 decoration-2">Legal Guides</a></li>
            <li><a class="hover:text-yellow-accent hover:bg-[#F5F5F5] hover:underline underline-offset-8 decoration-2">Categories</a></li>
            <li><a class="hover:text-yellow-accent hover:bg-[#F5F5F5] hover:underline underline-offset-8 decoration-2">Write For Us</a></li>
            <li><a class="hover:text-yellow-accent hover:bg-[#F5F5F5] hover:underline underline-offset-8 decoration-2">Contact Us</a></li>
          </ul>
        </div>

        <div class="navbar-end lg:w-8 flex justify-end items-center  hover:text-yellow-accent">
          <a href="" id="myBtn">
            <i class="text-lg fa-solid fa-magnifying-glass"></i>
          </a>
          <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
              </svg>
            </label>
            <ul tabindex="0" class="text-lg font-serif menu menu-compact dropdown-content  right-0 mt-3 p-2 shadow bg-base-100 rounded-box w-52">
            <li><a class="hover:text-yellow-accent hover:bg-[#F5F5F5] hover:underline underline-offset-8 decoration-2">Home</a></li>
            <li><a class="hover:text-yellow-accent hover:bg-[#F5F5F5] hover:underline underline-offset-8 decoration-2">Legal News</a></li>
            <li><a class="hover:text-yellow-accent hover:bg-[#F5F5F5] hover:underline underline-offset-8 decoration-2">Legal Guides</a></li>
            <li><a class="hover:text-yellow-accent hover:bg-[#F5F5F5] hover:underline underline-offset-8 decoration-2">Categories</a></li>
            <li><a class="hover:text-yellow-accent hover:bg-[#F5F5F5] hover:underline underline-offset-8 decoration-2">Write For Us</a></li>
            <li><a class="hover:text-yellow-accent hover:bg-[#F5F5F5] hover:underline underline-offset-8 decoration-2">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- Modal start -->
  <div id="myModal" class="c-modal h-full bg-[#F5F5F5]" style="width:100% !important">

    <div class="modal-content w-full lg:h-screen flex flex-col items-center justify-center">
      <div class="w-[90%] md:w-[70%] flex justify-end mb-8 md:mb-20">
        <span class="close"><i class="fa-solid fa-x cursor-pointer text-sm md:text-2xl"></i></span>
      </div>

      <div class="w-full md:w-[50%] relative px-2 md-px-0">
        <div class="absolute inset-y-0 left-0 flex items-center pl-7 pointer-events-none">
          <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border rounded-lg bg-[#FFFFFF] outline-none font-plus_jakarta" placeholder="Search here...." required>
      </div>

      <div class="modal-body grid grid-cols-1 md:grid-cols-2 gap-4 lg:w-6/12 my-4 px-4 md:px-0">

        <div class="display-adds flex bg-white rounded-2xl justify-between p-4 shadow-sm">
          <figure><img class="w-[100px] h-[80px] rounded-2xl" src="<?php echo get_template_directory_uri(); ?>/templates/assets/home/card-img.png" /></figure>
          <div>
            <p class="text-[14px] md:text-[17px] font-[500] text-[#1A1A1A] px-2">How A Personal Injury Lawyer Can Help You In 2022 </p>
            <data class="text-[#868686] flex text-center text-[10px] font-plus_jakarta px-2">By Aritra
              <span class="w-1 h-1 flex rounded-full bg-yellow-600 self-center mx-1"></span>23 July, 2022
            </data>
          </div>
        </div>

        <div class="display-adds flex bg-white rounded-2xl justify-between p-4 shadow-sm">
          <figure><img class="w-[100px] h-[80px] rounded-2xl" src="<?php echo get_template_directory_uri(); ?>/templates/assets/home/card-img.png" /></figure>
          <div>
            <p class="text-[14px] md:text-[17px] font-[500] text-[#1A1A1A] px-2">How A Personal Injury Lawyer Can Help You In 2022 </p>
            <data class="text-[#868686] flex text-center text-[10px] font-plus_jakarta px-2">By Aritra
              <span class="w-1 h-1 flex rounded-full bg-yellow-600 self-center mx-1"></span>23 July, 2022
            </data>
          </div>
        </div>

        <div class="display-adds flex bg-white rounded-2xl justify-between p-4 shadow-sm">
          <figure><img class="w-[100px] h-[80px] rounded-2xl" src="<?php echo get_template_directory_uri(); ?>/templates/assets/home/card-img.png" /></figure>
          <div>
            <p class="text-[14px] md:text-[17px] font-[500] text-[#1A1A1A] px-2">How A Personal Injury Lawyer Can Help You In 2022 </p>
            <data class="text-[#868686] flex text-center text-[10px] font-plus_jakarta px-2">By Aritra
              <span class="w-1 h-1 flex rounded-full bg-yellow-600 self-center mx-1"></span>23 July, 2022
            </data>
          </div>
        </div>

        <div class="display-adds flex bg-white rounded-2xl justify-between p-4 shadow-sm">
          <figure><img class="w-[100px] h-[80px] rounded-2xl" src="<?php echo get_template_directory_uri(); ?>/templates/assets/home/card-img.png" /></figure>
          <div>
            <p class="text-[14px] md:text-[17px] font-[500] text-[#1A1A1A] px-2">How A Personal Injury Lawyer Can Help You In 2022 </p>
            <data class="text-[#868686] flex text-center text-[10px] font-plus_jakarta px-2">By Aritra
              <span class="w-1 h-1 flex rounded-full bg-yellow-600 self-center mx-1"></span>23 July, 2022
            </data>
          </div>
        </div>

        <div class="display-adds flex bg-white rounded-2xl justify-between p-4 shadow-sm">
          <figure><img class="w-[100px] h-[80px] rounded-2xl" src="<?php echo get_template_directory_uri(); ?>/templates/assets/home/card-img.png" /></figure>
          <div>
            <p class="text-[14px] md:text-[17px] font-[500] text-[#1A1A1A] px-2">How A Personal Injury Lawyer Can Help You In 2022 </p>
            <data class="text-[#868686] flex text-center text-[10px] font-plus_jakarta px-2">By Aritra
              <span class="w-1 h-1 flex rounded-full bg-yellow-600 self-center mx-1"></span>23 July, 2022
            </data>
          </div>
        </div>

        <div class="display-adds flex bg-white rounded-2xl justify-between p-4 shadow-sm">
          <figure><img class="w-[100px] h-[80px] rounded-2xl" src="<?php echo get_template_directory_uri(); ?>/templates/assets/home/card-img.png" /></figure>
          <div>
            <p class="text-[14px] md:text-[17px] font-[500] text-[#1A1A1A] px-2">How A Personal Injury Lawyer Can Help You In 2022 </p>
            <data class="text-[#868686] flex text-center text-[10px] font-plus_jakarta px-2">By Aritra
              <span class="w-1 h-1 flex rounded-full bg-yellow-600 self-center mx-1"></span>23 July, 2022
            </data>
          </div>
        </div>

        <div class="display-adds flex bg-white rounded-2xl justify-between p-4 shadow-sm">
          <figure><img class="w-[100px] h-[80px] rounded-2xl" src="<?php echo get_template_directory_uri(); ?>/templates/assets/home/card-img.png" /></figure>
          <div>
            <p class="text-[14px] md:text-[17px] font-[500] text-[#1A1A1A] px-2">How A Personal Injury Lawyer Can Help You In 2022 </p>
            <data class="text-[#868686] flex text-center text-[10px] font-plus_jakarta px-2">By Aritra
              <span class="w-1 h-1 flex rounded-full bg-yellow-600 self-center mx-1"></span>23 July, 2022
            </data>
          </div>
        </div>

        <div class="display-adds flex bg-white rounded-2xl justify-between p-4 shadow-sm">
          <figure><img class="w-[100px] h-[80px] rounded-2xl" src="<?php echo get_template_directory_uri(); ?>/templates/assets/home/card-img.png" /></figure>
          <div>
            <p class="text-[14px] md:text-[17px] font-[500] text-[#1A1A1A] px-2">How A Personal Injury Lawyer Can Help You In 2022 </p>
            <data class="text-[#868686] flex text-center text-[10px] font-plus_jakarta px-2">By Aritra
              <span class="w-1 h-1 flex rounded-full bg-yellow-600 self-center mx-1"></span>23 July, 2022
            </data>
          </div>
        </div>

        <div class="display-adds flex bg-white rounded-2xl justify-between p-4 shadow-sm">
          <figure><img class="w-[100px] h-[80px] rounded-2xl" src="<?php echo get_template_directory_uri(); ?>/templates/assets/home/card-img.png" /></figure>
          <div>
            <p class="text-[14px] md:text-[17px] font-[500] text-[#1A1A1A] px-2">How A Personal Injury Lawyer Can Help You In 2022 </p>
            <data class="text-[#868686] flex text-center text-[10px] font-plus_jakarta px-2">By Aritra
              <span class="w-1 h-1 flex rounded-full bg-yellow-600 self-center mx-1"></span>23 July, 2022
            </data>
          </div>
        </div>

        <div class="display-adds flex bg-white rounded-2xl justify-between p-4 shadow-sm">
          <figure><img class="w-[100px] h-[80px] rounded-2xl" src="<?php echo get_template_directory_uri(); ?>/templates/assets/home/card-img.png" /></figure>
          <div>
            <p class="text-[14px] md:text-[17px] font-[500] text-[#1A1A1A] px-2">How A Personal Injury Lawyer Can Help You In 2022 </p>
            <data class="text-[#868686] flex text-center text-[10px] font-plus_jakarta px-2">By Aritra
              <span class="w-1 h-1 flex rounded-full bg-yellow-600 self-center mx-1"></span>23 July, 2022
            </data>
          </div>
        </div>

      </div>
    </div>

  </div>
  <!-- Modal End -->

  <main>