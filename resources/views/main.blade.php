@extends('layouts.app')

@section('content')

<!-- Section bosh sahifa -->

<section class="section-testimonials" id="home">
    <div class="container mx-auto">
        <x-logo/>
        <x-navbar/>
        
        <form action="" class="search-bar">
            <input type="search" name="search" pattern=".*\S.*" required>
            <button class="search-btn" type="submit">
                <span>Search</span>
            </button>
        </form>
        


        <!-- <div class="slider">
            
        <div class="slider__slides">
            <div class="slider__slide slider__slide--1">
                <figure class="testimonial slider__slide-content">
                    <div class="testimonial__img">
                    <img class="testimonial__photo" src="../images/img1.png" alt="Tanya Sinclair">
                    </div>
                    <blockquote class="testimonial__text">
                        <h1>Muhammad Ali Eshonqulov</h1>
                    <p class="">
                        I’ve been interested in coding for a while but never taken the jump, until now.
                        I couldn’t recommend this course enough. I’m now in the job of my dreams and so
                        excited about the future.
                    </p>
                    
                    </blockquote>
                </figure>
            </div>

            <div class="slider__slide slider__slide--2">
            <figure class="testimonial slider__slide-content">
                <div class="testimonial__img">
                <img class="testimonial__photo" src="../images/img1.png" alt="John Tarkpor">
                </div>
                <blockquote class="testimonial__text">
                    <h1>Muhammad Ali Eshonqulov</h1>
                
                <p class="">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                </p>
                
                </blockquote>
                
            </figure>
            </div>
        </div>

        <div class="slider__buttons">
            <div class="slider__button slider__button--prev">
            <svg class="slider__button-icon" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                <path d="M8.16529 21.0249C8.50587 21.3774 9.07272 21.3774 9.42521 21.0249C9.7658 20.6844 9.7658 20.1175 9.42521 19.7777L3.03668 13.3892L24.118 13.3892C24.6094 13.3884 25 12.9978 25 12.5064C25 12.0149 24.6094 11.6116 24.118 11.6116L3.03668 11.6116L9.42522 5.235C9.7658 4.88251 9.7658 4.31487 9.42522 3.97508C9.07272 3.62258 8.50508 3.62258 8.16529 3.97508L0.264371 11.876C-0.0881225 12.2166 -0.0881226 12.7834 0.264371 13.1232L8.16529 21.0249Z" fill="#252733"/>
                </g>
                <defs>
                <clipPath id="clip0">
                <rect width="25" height="25" fill="white" transform="translate(25 25) rotate(-180)"/>
                </clipPath>
                </defs>
            </svg>

            </div>
            <div class="slider__button slider__button--next">
            <svg  class="slider__button-icon" width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.8347 0.975063C16.4941 0.62257 15.9273 0.62257 15.5748 0.975063C15.2342 1.31565 15.2342 1.88249 15.5748 2.22228L21.9633 8.61082H0.882026C0.3906 8.61162 0 9.00222 0 9.49364C0 9.98507 0.3906 10.3884 0.882026 10.3884H21.9633L15.5748 16.765C15.2342 17.1175 15.2342 17.6851 15.5748 18.0249C15.9273 18.3774 16.4949 18.3774 16.8347 18.0249L24.7356 10.124C25.0881 9.78341 25.0881 9.21657 24.7356 8.87678L16.8347 0.975063Z" fill="#252733"/>
            </svg>

            </div>
        </div>

     </div> -->

        <div id="section-1">
            <div class="content-slider">
            <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
            <input type="radio" id="banner2" class="sec-1-input" name="banner">
            <input type="radio" id="banner3" class="sec-1-input" name="banner">
            <input type="radio" id="banner4" class="sec-1-input" name="banner">
                <div class="slider">
                    <div id="top-banner-1" class="banner">
                        <div class="banner-inner-wrapper">
                            <div class="testimonial__img">
                                <img class="testimonial__photo" src="../images/img1.png" alt="Tanya Sinclair">
                            </div>
                            <blockquote class="testimonial__text">
                                <h1>Muhammad Ali Eshonqulov</h1>
                                <p class="">
                                    I’ve been interested in coding for a while but never taken the jump, until now.
                                    I couldn’t recommend this course enough. I’m now in the job of my dreams and so
                                    excited about the future.
                                </p>
                                
                            </blockquote>
                        </div>
                    </div>
                    <div id="top-banner-2" class="banner">
                        <div class="banner-inner-wrapper">
                            <div class="testimonial__img">
                                <img class="testimonial__photo" src="../images/img1.png" alt="Tanya Sinclair">
                            </div>
                            <blockquote class="testimonial__text">
                                <h1>Muhammad Ali Eshonqulov</h1>
                                <p class="">
                                     There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                
                                </p>
                                
                            </blockquote>
                        </div>
                    </div>
                    <div id="top-banner-3" class="banner">
                        <div class="banner-inner-wrapper">
                            <div class="testimonial__img">
                                <img class="testimonial__photo" src="../images/img1.png" alt="Tanya Sinclair">
                            </div>
                            <blockquote class="testimonial__text">
                                <h1>Muhammad Ali Eshonqulov</h1>
                                <p class="">
                                    I’ve been interested in coding for a while but never taken the jump, until now.
                                    I couldn’t recommend this course enough. I’m now in the job of my dreams and so
                                    excited about the future.
                                </p>
                                
                            </blockquote>
                        </div>
                    </div>
                    <div id="top-banner-4" class="banner">
                        <div class="banner-inner-wrapper">
                            <div class="testimonial__img">
                                <img class="testimonial__photo" src="../images/img1.png" alt="Tanya Sinclair">
                            </div>
                            <blockquote class="testimonial__text">
                                <h1>Muhammad Ali Eshonqulov</h1>
                                <p class="">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                
                                </p>
                                
                            </blockquote>
                        </div>
                    </div>
                </div>
                <nav>
                    <div class="controls">
                        <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="num-prog">01</span> Muhammad Ali Eshonqulov</label>
                        <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="num-prog">02</span> Muhammad Ali Eshonqulov</label>
                        <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="num-prog">03</span> Muhammad Ali Eshonqulov</label>
                        <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="num-prog">04</span> Muhammad Ali Eshonqulov</label>
                    </div>
                </nav>
            </div>
        </div>
    
    </div>
  </section>

<section class="section-two container mx-auto" id="students">    
    <div class="section-two-content">
        <div class="section-two-content-one">



        <div id="groupcontainer">

            <div class="swiper-container groupswiper">
                <!-- Additional required wrapper -->
                <div id="swiper-wrapper" class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide ">
                        <div class="group-btn">
                            <a href="#">
                                <div class="back-line"></div>
                                1-guruh
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="group-btn">
                            <a href="#">
                                <div class="back-line"></div>
                                1-guruh
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="group-btn">
                            <a href="#">
                                <div class="back-line"></div>
                                1-guruh
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="group-btn">
                            <a href="#">
                                <div class="back-line"></div>
                                1-guruh
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="group-btn">
                            <a href="#">
                                <div class="back-line"></div>
                                1-guruh
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="group-btn">
                            <a href="#">
                                <div class="back-line"></div>
                                1-guruh
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="group-btn">
                            <a href="#">
                                <div class="back-line"></div>
                                1-guruh
                            </a>
                        </div>
                    </div>
                                                
                </div>
            </div>               
                <!-- If we need navigation buttons -->
            <div class="swiper-button-prev3">
                <span class="iconify" data-icon="bi:arrow-up" data-inline="false"></span>
            </div>
            <div class="swiper-button-next3">
                <span class="iconify" data-icon="bi:arrow-down" data-inline="false"></span>
            </div>  
        </div>





            <!-- <div class="group-btn">
                <a href="#">
                    <div class="back-line"></div>
                    1-guruh
                </a>
            </div>
            <div class="group-btn">
                <a href="#">
                    <div class="back-line"></div>
                    2-guruh
                </a>
            </div>
            <div class="group-btn">
                <a href="#">
                    <div class="back-line"></div>
                    3-guruh
                </a>
            </div>
            <div class="group-btn">
                <a href="#">
                    <div class="back-line"></div>
                    4-guruh
                </a>
            </div>
            <div class="group-btn">
                <a href="#">
                    <div class="back-line"></div>
                    5-guruh
                </a>
            </div>
            <div class="group-btn">
                <a href="#">
                    <div class="back-line"></div>
                    6-guruh
                </a>
            </div> -->
        </div>
        <div class="section-two-content-two">
            <div class="slider_1">
                <div class="slider__inner">
                    <div class="slider__item">
                        <div class="slider__item-container">
                            <img src="../images/layer1.png" class="slider__item-img"/>
                            
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__item-container">
                            <img src="../images/layer2.png" class="slider__item-img"/>
                            
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__item-container">
                            <img src="../images/img2.png" class="slider__item-img"/>
                            
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__item-container">
                            <img src="https://picsum.photos/id/104/300/300" class="slider__item-img"/>
                            
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__item-container">
                            <img src="https://picsum.photos/id/106/300/300" class="slider__item-img"/>
                            
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__item-container">
                            <img src="https://picsum.photos/id/121/300/300" class="slider__item-img"/>
                            
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__item-container">
                            <img src="https://picsum.photos/id/108/300/300" class="slider__item-img"/>
                            
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__item-container">
                            <img src="https://picsum.photos/id/109/300/300" class="slider__item-img"/>
                        </div>
                    </div>
                    <div class="slider__controls"></div>
                </div>
            </div>
            
        </div>
    </div>    
</section>



<!-- Section g'oyalar -->
<section class="section-idea" id="idea">
    <div class="container mx-auto idea-content">
        <h1 class="header-text-all-section">G'oyalar</h1>
        
        <div class="idea-main-content">
            <div class="idea-main-content-first">
                <div class="filter-content 1">
                    <div class="filter-content-head">
                        Sovun ishlab chiqarish1
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="filter-content-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    </div>
                </div>

                <div class="filter-content 2">
                    <div class="filter-content-head">
                        Sovun ishlab chiqarish2
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="filter-content-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    </div>
                </div>

                <div class="filter-content 3">
                    <div class="filter-content-head">
                        Sovun ishlab chiqarish3
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="filter-content-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    </div>
                </div>

                <div class="filter-content 4">
                    <div class="filter-content-head">
                        Sovun ishlab chiqarish4
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="filter-content-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    </div>
                </div>

                <div class="filter-content 5">
                    <div class="filter-content-head">
                        Sovun ishlab chiqarish5
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="filter-content-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    </div>
                </div>

                <div class="filter-content 6">
                    <div class="filter-content-head">
                        Sovun ishlab chiqarish6
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="filter-content-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    </div>
                </div>

            </div>
            <div class="idea-main-content-second">
                <div id="myBtnContainer">

                    <div class="swiper-container ideaslide">
                        <!-- Additional required wrapper -->
                        <div id="swiper-wrapper" class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide active">
                                <button class="filter-btn  " onclick="filterSelection('1')"> 
                                    Sovun ishlab chiqarish1
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="swiper-slide">
                                <button class="filter-btn" onclick="filterSelection('2')">
                                    Sovun ishlab chiqarish2
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="swiper-slide">
                                <button class="filter-btn" onclick="filterSelection('3')">
                                    Sovun ishlab chiqarish3
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="swiper-slide">
                                <button class="filter-btn" onclick="filterSelection('4')">
                                    Sovun ishlab chiqarish4
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="swiper-slide">
                                <button class="filter-btn" onclick="filterSelection('5')">
                                    Sovun ishlab chiqarish5
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div> 
                            <div class="swiper-slide">
                                <button class="filter-btn" onclick="filterSelection('6')">
                                    Sovun ishlab chiqarish6
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>                             
                        </div>
                    </div>               
                           <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev2">
                        <span class="iconify" data-icon="bi:arrow-up" data-inline="false"></span>
                    </div>
                    <div class="swiper-button-next2">
                        <span class="iconify" data-icon="bi:arrow-down" data-inline="false"></span>
                    </div>  
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Section vakansiyalar -->
<section class="section-vacancy" id="vacancy">
    <div class="container mx-auto idea-content">
        <h1 class="header-text-all-section">VAKANSIYA</h1>
        
        <div class="idea-main-content">
            <div class="idea-main-content-first">
                <div class="filter-content-vacancy 1">
                    <div class="filter-content-head">
                            ish boshqaruvchi 1
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="filter-content-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    </div>
                </div>

                <div class="filter-content-vacancy 2">
                    <div class="filter-content-head">
                        ish boshqaruvchi 2
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="filter-content-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    </div>
                </div>

                <div class="filter-content-vacancy 3">
                    <div class="filter-content-head">
                        ish boshqaruvchi 3
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="filter-content-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    </div>
                </div>

                <div class="filter-content-vacancy 4">
                    <div class="filter-content-head">
                        ish boshqaruvchi 4
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="filter-content-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    </div>
                </div>

                <div class="filter-content-vacancy 5">
                    <div class="filter-content-head">
                        ish boshqaruvchi 5
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="filter-content-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    </div>
                </div>

                <div class="filter-content-vacancy 6">
                    <div class="filter-content-head">
                        ish boshqaruvchi 6
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="filter-content-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    </div>
                </div>

            </div>
            <div class="idea-main-content-second">
                <div id="myBtnContainer">

                    <div class="swiper-container vacancyslide">
                        <!-- Additional required wrapper -->
                        <div id="swiper-wrapper" class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide active">
                                <button class="filter-btn  " onclick="vacancyfilter('1')"> 
                                     ish boshqaruvchi 1
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="swiper-slide">
                                <button class="filter-btn" onclick="vacancyfilter('2')">
                                    ish boshqaruvchi 2
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="swiper-slide">
                                <button class="filter-btn" onclick="vacancyfilter('3')">
                                ish boshqaruvchi 3
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="swiper-slide">
                                <button class="filter-btn" onclick="vacancyfilter('4')">
                                ish boshqaruvchi 4
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="swiper-slide">
                                <button class="filter-btn" onclick="vacancyfilter('5')">
                                    ish boshqaruvchi 5
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div> 
                            <div class="swiper-slide">
                                <button class="filter-btn" onclick="vacancyfilter('6')">
                                ish boshqaruvchi 6
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 11L12 17L18 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 6L12 12L18 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>                             
                        </div>
                    </div>               
                           <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev2">
                        <span class="iconify" data-icon="bi:arrow-up" data-inline="false"></span>
                    </div>
                    <div class="swiper-button-next2">
                        <span class="iconify" data-icon="bi:arrow-down" data-inline="false"></span>
                    </div>  
                </div>
            </div>

        </div>
    </div>
</section>




<!-- Yangiliklar -->
<section class="section-news" id="news">
    <div class="container mx-auto news-content">
        <h1 class="header-text-all-section">Yangiliklar</h1>
        <div class="news-content-main">
            <a href="#" data-modal="#1" class="news-content-card modal__trigger">
                <div class="img-content-card">
                    <img src="../images/img4.png" alt="">
                </div>
                <span class="shown">
                    <span class="iconify" data-icon="emojione-monotone:eye-in-speech-bubble" data-inline="false"></span>
                    23
                </span>
                
                <p>“OAV ishiga aralashib, u noto‘g‘ri, bu to‘g‘ri deyish davlatning ishi emas” </p>
            </a>


            <!-- Modal oyina -->
            <div id="1" class="modal modal--align-top modal__bg" role="dialog" aria-hidden="true">
                    <div class="modal__dialog">
                        <div class="modal__content">
                            <h1>“OAV ishiga aralashib, u noto‘g‘ri, bu to‘g‘ri deyish davlatning ishi emas”</h1>
                            <div class="modal-content">
                                <div class="modal-content-img">
                                    <img src="../images/img4.png" alt="">
                                </div>
                                    <h3>ikkinchi sarlavha uchun</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>                            
                                    
                            </div>
                            <div class="modal-icons">
                                <div class="icon-modal">
                                    <span class="iconify" data-icon="emojione-monotone:eye-in-speech-bubble" data-inline="false"></span>
                                    23
                                </div>
                                <div class="icon-modal">
                                    26 Fevral 2021
                                </div>
                                <a class="icon-modal">
                                <span class="iconify" data-icon="bi:hand-thumbs-up" data-inline="false"></span>
                                    500
                                </a>
                            </div>
                            
                            <!-- modal close button -->
                            <a href="" class="modal__close demo-close">
                                <svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"/><path d="M0 0h24v24h-24z" fill="none"/></svg>
                            </a>
                        </div>
                    </div>
                </div>





            <a href="#" class="news-content-card">
                <div class="img-content-card">
                    <img src="../images/img4.png" alt="">
                </div>
                <span class="shown">
                    <span class="iconify" data-icon="emojione-monotone:eye-in-speech-bubble" data-inline="false"></span>
                    23
                </span>
                
                <p>“OAV ishiga aralashib, u noto‘g‘ri, bu to‘g‘ri deyish davlatning ishi emas” </p>
            </a>
            <a href="#" class="news-content-card">
                <div class="img-content-card">
                    <img src="../images/img4.png" alt="">
                </div>
                <span class="shown">
                    <span class="iconify" data-icon="emojione-monotone:eye-in-speech-bubble" data-inline="false"></span>
                    23
                </span>
                
                <p>“OAV ishiga aralashib, u noto‘g‘ri, bu to‘g‘ri deyish davlatning ishi emas” </p>
            </a>
            <a href="#" class="news-content-card">
                <div class="img-content-card">
                    <img src="../images/layer3.png" alt="">
                </div>
                <span class="shown">
                    <span class="iconify" data-icon="emojione-monotone:eye-in-speech-bubble" data-inline="false"></span>
                    23
                </span>
                
                <p>“OAV ishiga aralashib, u noto‘g‘ri, bu to‘g‘ri deyish davlatning ishi emas” </p>
            </a>
            <a href="#"  class="news-content-card ">
                <div class="img-content-card">
                    <img src="../images/img3.png" alt="">
                </div>
                <span class="shown">
                    <span class="iconify" data-icon="emojione-monotone:eye-in-speech-bubble" data-inline="false"></span>
                    23
                </span>
                
                <p>“OAV ishiga aralashib, u noto‘g‘ri, bu to‘g‘ri deyish davlatning ishi emas” </p>
            </a>
            <a href="#"   class="news-content-card">
                <div class="img-content-card">
                    <img src="../images/img2.png" alt="">
                </div>
                <span class="shown">
                    <span class="iconify" data-icon="emojione-monotone:eye-in-speech-bubble" data-inline="false"></span>
                    23
                </span>
                
                <p>“OAV ishiga aralashib, u noto‘g‘ri, bu to‘g‘ri deyish davlatning ishi emas” </p>
            </a>
            

        </div>
        <ul class="pagination">
            <a href="#"><li><span class="iconify" data-icon="bx:bxs-arrow-to-left" data-inline="false"></span></li></a>
            <a href="#" class="active-pagination"><li>1</li></a>
            <a href="#"><li>2</li></a>
            <a href="#"><li>3</li></a>
            <a href="#"><li>4</li></a>
            <a class="dot"><li>...</li></a>
            <a href="#"><li>14</li></a>
            <a href="#"><li><span class="iconify" data-icon="bx:bxs-arrow-to-right" data-inline="false"></span></li></a>

        </ul>
    

    </div>

</section>




<!-- Footer -->

<section class="section-three" id="">
    <div class="container mx-auto">
        <div class="section-three-content">
            <div class="section-three-content-one">
                <div class="section-three-logo">
                    <img src="../images/logo.png" alt="">
                </div>
                <div class="section-three-text">
                    
                    
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    <div class="back-line-two"></div>
                </div>
                <div class="section-three-social">
                    <p>Follow us on social media</p>
                    <div class="social-media-flex">
                        <!-- Facebook -->
                        <a href="#">
                            <span class="iconify" data-icon="bi:facebook" data-inline="false"></span>
                        </a>
                        <!-- Instagram -->
                        <a href="#">
                            <span class="iconify" data-icon="akar-icons:instagram-fill" data-inline="false"></span>
                        </a>
                        <!-- Youtube -->
                        <a href="#">
                            <span class="iconify" data-icon="akar-icons:youtube-fill" data-inline="false"></span>
                        </a>
                        <!-- Tik tok -->
                        <a href="#">
                            <span class="iconify" data-icon="cib:tiktok" data-inline="false"></span>
                        </a>
                        <!-- TELEGRAM -->
                        <a href="#">
                            <span class="iconify" data-icon="akar-icons:telegram-fill" data-inline="false"></span>
                        </a>
                    </div>
                </div>

            </div>
            <div class="section-three-vertical-line"></div>
            <div class="section-three-content-two">
                <h1>ADMINGA MUROJAAT</h1>
                <form action="">
                    <input type="text" class="input-section-three" placeholder="Ism , Familiya">
                    <input type="text" class="input-section-three" placeholder="Tel raqamingiz">
                    <textarea name="" id="" placeholder="Izoh :"></textarea>
                    <input type="submit" class="btn-section-three" value="YUBORISH">
                </form>                
            </div>
        </div>

        

    </div>

</section>

<script>
    const myCarousel = new Carousel({
    container: document.querySelector('.slider_1'),
    items: document.querySelectorAll('.slider__item'),
    displayControls: true,
    autoplay: true,
    autoplayTime: 3500,
    controlsContainer: document.querySelector('.slider__controls'),
    textControls: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"]
});
</script>

@endsection