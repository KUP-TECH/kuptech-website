<x-basecomponent>
    

    <nav class="navbar navbar-expand-lg bg-gray-300 text-dark rounded mt-1 position-sticky top-0">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">{{ config('app.name') }}</a>
        </div>
    </nav>
    <section>
        <div class="row">
            <div class="col">
                <div class="containermt-7 px-5 text-justify">
                    <p class="fs-2 text-white opacity-7 text-center">KUPTECH IT SOLUTIONS</p>
                    <p class="fs-5 text-white opacity-6">We are a team of developers, designers, and marketers who are dedicated to creating the best digital products for our clients. We specialize in web and mobile app development. Our goal is to help you grow your business and reach your target audience. Contact us today to learn more about our services and how we can help you achieve your goals.</p>
                </div>
            </div>
            <div class="col d-none d-md-block ">
              <img src="{{asset('assets/img/KT.png')}}" class="img-fluid">
            </div>
                </div>
        <div class="containermt-7 p-3 px-5 text-justify bg-secondary bg">
        <div class="container-fluid sm-lg px-5 text-center text-white opacity-9">
            <div class="row gx-10">
            <div class="col">
            <div class="p-5 fs-2 fw-bold opacity-7 ">RECENT PROJECT</div>
                 <div class="col d-none d-md-block">
                 <img src="{{asset('assets/img/laundry.png')}}" class="img img-fluid">  
                 </div>
                <p class="f-2 p-4 text-white opacity-6 text-justify text-center">This our Project for Laravel and Bootstrap5.</p>
            </div>
            <div class="col">
            <div class="p-5 fs-2 fw-bold opacity-7">ABOUT OUR COMPANY</div>
                <p class="fs-2 text-white opacity-6 text-justify"> KupTech IT Solution management system designed to streamline operations for laundry businesses. Built using Laravel with Blade and Bootstrap 5, it offers features such as order tracking, SMS updates, inventory management, and an intuitive POS system. The system enhances efficiency by automating tasks like customer notifications and payment processing, ensuring a seamless experience for both business owners and customers. With a user-friendly interface and robust functionality, KupTech aims to modernize the laundry service industry by integrating technology-driven solutions.</p>
            </div>
            </div>
        </div>
         </div>
     <footer>
        <div class="container-fluid bg-gray-300 text-dark text-center py-3 fixed-bottom">
        
        <div class="social-icon">
            <div class="social-item ">
                <a href="https://www.facebook.com/profile.php?id=61574451669781">
                <img class="custom-img" src="{{asset('assets/img/fb.png')}}">
                </a>
            </div>
        </div>
            <p>
               <br> &copy; <script>document.write(new Date().getFullYear())</script> KupTech IT Solutions. All rights reserved.
                
            </p>
        </div>
    </footer>
    

</x-basecomponent>