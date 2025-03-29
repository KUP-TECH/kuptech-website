<x-basecomponent>
    {{-- Custom CSS --}}
     <script>
        function onSubmit(token) {
            document.getElementById("msg-form").submit();
        }

        function showMsgStatus() {


            console.log('show modal');
            let msgStatus = document.getElementById('msgStatus');
            console.log(msgStatus);
            let modal = new bootstrap.Modal(msgStatus);
            modal.show();
        }

        document.addEventListener('DOMContentLoaded', function () {
            


            
            
            @if(session('success') !== null)
                console.log('success');
                showMsgStatus();
            @endif
        });
        
    </script>

    <style> 



        .hero-img {
            background-image: linear-gradient(to right, rgba(255,255,255, 0.3) 0 100%), url("{{ asset('assets/img/office.jpg')}}");
            background-size: cover;
            background-clip: border-box;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }



        .hero-img-kups {
            background-image: url("{{ asset('assets/img/laundry.png')}}");
            background-size: contain;
            background-clip: border-box;
            background-position: center center;
            background-repeat: no-repeat;
            opacity: 0.8;
            height: 100vh;
        }
        
        .hero-img-banner {
            width: 750px;
            height: 750px;
        }

        

    </style>

        


    <div class="container position-sticky top-0">
        <nav class="position-absolute bg-opacity-4 rounded start-0 end-0 bg-gray-300 mt-2 px-3">
            <div class="row align-items-center">
                <div class="col">
                    <a class="navbar-brand fw-bold text-dark opacity-8" href="{{ route('home') }}"> <span> <img src="{{asset('assets/img/KUPTECH_BANNER.png')}}" alt="" class="custom-img-icon"> </span>  {{ config('app.name') }} </a>
                </div>
                
                <div class="col d-flex flex-row justify-content-end align-items-center py-2">
                    <button type="button" class="btn btn-outline-dark fw-bold m-0" data-bs-toggle="modal" data-bs-target="#requestForm">CONTACT US
                    </button> 
                </div>
            </div>
        </nav>
    </div>
    
    


    <div class="row hero-img align-items-center">
            
        <div class="col py-5 text-dark ">
            <div class="px-5">
                <div class="d-block">
                    <p class="fs-2 fw-bold text-center">K-TECH DEV TEAM</p>
                    <p class="fs-4 fw-bold text-justify">We are a team of developers and designers who are dedicated to creating the best digital products for our clients. We specialize in web and mobile app development. Our goal is to help you grow your business and reach your target audience. Contact us today to learn more about our services and how we can help you achieve your goals.</p>
                </div>
            </div>
        </div>

        <div class=" col d-none d-md-flex flex-column justify-content-center align-items-center">
            <img src="{{asset('assets/img/KUPTECH_BANNER.png')}}" class="hero-img-banner">
        </div>

    </div>



    <div class="container-fluid bg-gray-100 py-5">

        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="fs-1 fw-bold text-dark text-center">App Development</p>
                </div>
                <div class="col">
                    <p class="fs-1 fw-bold text-dark text-center">Web Development</p>
                </div>
            </div>
            
            <div class="row">
            


                <div class="col">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-android2" viewBox="0 0 16 16" style="color: green;">
                            <path d="m10.213 1.471.691-1.26q.069-.124-.048-.192-.128-.057-.195.058l-.7 1.27A4.8 4.8 0 0 0 8.005.941q-1.032 0-1.956.404l-.7-1.27Q5.281-.037 5.154.02q-.117.069-.049.193l.691 1.259a4.25 4.25 0 0 0-1.673 1.476A3.7 3.7 0 0 0 3.5 5.02h9q0-1.125-.623-2.072a4.27 4.27 0 0 0-1.664-1.476ZM6.22 3.303a.37.37 0 0 1-.267.11.35.35 0 0 1-.263-.11.37.37 0 0 1-.107-.264.37.37 0 0 1 .107-.265.35.35 0 0 1 .263-.11q.155 0 .267.11a.36.36 0 0 1 .112.265.36.36 0 0 1-.112.264m4.101 0a.35.35 0 0 1-.262.11.37.37 0 0 1-.268-.11.36.36 0 0 1-.112-.264q0-.154.112-.265a.37.37 0 0 1 .268-.11q.155 0 .262.11a.37.37 0 0 1 .107.265q0 .153-.107.264M3.5 11.77q0 .441.311.75.311.306.76.307h.758l.01 2.182q0 .414.292.703a.96.96 0 0 0 .7.288.97.97 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h1.343v2.182q0 .414.292.703a.97.97 0 0 0 .71.288.97.97 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h.76q.436 0 .749-.308.31-.307.311-.75V5.365h-9zm10.495-6.587a.98.98 0 0 0-.702.278.9.9 0 0 0-.293.685v4.063q0 .406.293.69a.97.97 0 0 0 .702.284q.42 0 .712-.284a.92.92 0 0 0 .293-.69V6.146a.9.9 0 0 0-.293-.685 1 1 0 0 0-.712-.278m-12.702.283a1 1 0 0 1 .712-.283q.41 0 .702.283a.9.9 0 0 1 .293.68v4.063a.93.93 0 0 1-.288.69.97.97 0 0 1-.707.284 1 1 0 0 1-.712-.284.92.92 0 0 1-.293-.69V6.146q0-.396.293-.68"/>
                        </svg>
                    </div>                    
                </div>
                <div class="col">
                    <p class="text-wrap text-dark text-justify">
                        We transform ideas into powerful digital experiences, creating seamless, intuitive, and efficient solutions that help businesses thrive. Whether it’s custom websites, mobile apps, business management systems, or real-time tracking tools, we build technology that drives success. With a strong focus on innovation, user experience, and reliability, we ensure that every project meets the highest standards.                 
                    </p>
                </div>

                <div class="col">
                    <div class="d-flex flex-row justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-globe2 text-dark opacity-8" viewBox="0 0 16 16">
                            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855q-.215.403-.395.872c.705.157 1.472.257 2.282.287zM4.249 3.539q.214-.577.481-1.078a7 7 0 0 1 .597-.933A7 7 0 0 0 3.051 3.05q.544.277 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9 9 0 0 1-1.565-.667A6.96 6.96 0 0 0 1.018 7.5zm1.4-2.741a12.3 12.3 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332M8.5 5.09V7.5h2.99a12.3 12.3 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.6 13.6 0 0 1 7.5 10.91V8.5zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741zm-3.282 3.696q.18.469.395.872c.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a7 7 0 0 1-.598-.933 9 9 0 0 1-.481-1.079 8.4 8.4 0 0 0-1.198.49 7 7 0 0 0 2.276 1.522zm-1.383-2.964A13.4 13.4 0 0 1 3.508 8.5h-2.49a6.96 6.96 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667m6.728 2.964a7 7 0 0 0 2.275-1.521 8.4 8.4 0 0 0-1.197-.49 9 9 0 0 1-.481 1.078 7 7 0 0 1-.597.933M8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855q.216-.403.395-.872A12.6 12.6 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.96 6.96 0 0 0 14.982 8.5h-2.49a13.4 13.4 0 0 1-.437 3.008M14.982 7.5a6.96 6.96 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zM11.27 2.461q.266.502.482 1.078a8.4 8.4 0 0 0 1.196-.49 7 7 0 0 0-2.275-1.52c.218.283.418.597.597.932m-.488 1.343a8 8 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                        </svg>
                    </div>     
                </div>

                <div class="col">
                    <p class="text-wrap text-justify text-dark">
                        At K-TECH, we are a team of creative and skilled web developers committed to building high-quality, user-friendly, and efficient websites. We specialize in crafting custom web solutions that enhance business operations, from POS systems and E-wallet integrations to inventory tracking and real-time updates. With a strong focus on design, functionality, and seamless user experience, we turn ideas into powerful digital solutions that help businesses grow.
                    </p>
                </div>
               
            </div>
            
        </div>

        

    </div>

    
    {{-- 
    <section class="my-5 py-5">

    


        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">

                    <div class="rotating-card-container">
                        <div class="card card-rotate card-background card-background-mask-primary shadow-dark mt-md-0 mt-5">

                            <div class="front front-background" style="background-image: url(assets/img/KUPTECH_BANNER.png); background-size: cover;">
                                <div class="card-body py-7 text-center">
                                    <i class="material-symbols-rounded text-white text-4xl my-3">touch_app</i>
                                    <h3 class="text-white">Feel the <br> Material Kit</h3>
                                    <p class="text-white opacity-8">All the Bootstrap components that you need in a development have been re-design with the new look.</p>
                                </div>
                            </div>

                            <div class="back back-background" style="background-image: url(https://uploads-ssl.webflow.com/64380d1f2275c122f55d7d8a/646a02bbe56849aa8a899e4f_0_3.png); background-size: cover;">
                                <div class="card-body pt-7 text-center">
                                    <h3 class="text-white">Discover More</h3>
                                    <p class="text-white opacity-8"> You will save a lot of time going from prototyping to full-functional code because all elements are implemented.</p>
                                    <a href="//sections/page-sections/hero-sections.html" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">
                                    Start with Headers</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-6 ms-auto">

                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-symbols-rounded text-gradient text-success text-3xl">content_copy</i>
                                <h5 class="font-weight-bolder mt-3">Full Documentation</h5>
                                <p class="pe-5">Built by developers for developers. Check the foundation and you will find everything inside our documentation.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-symbols-rounded text-gradient text-success text-3xl">flip_to_front</i>
                                <h5 class="font-weight-bolder mt-3">Bootstrap 5 Ready</h5>
                                <p class="pe-3">The worlds most popular front-end open source toolkit, featuring Sass variables and mixins.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-start mt-5">

                        <div class="col-md-6 mt-3">
                            <i class="material-symbols-rounded text-gradient text-success text-3xl">price_change</i>
                            <h5 class="font-weight-bolder mt-3">Save Time &amp; Money</h5>
                            <p class="pe-5">Creating your design from scratch with dedicated designers can be very expensive. Start with our Design System.</p>
                        </div>

                        <div class="col-md-6 mt-3">

                            <div class="info">
                                <i class="material-symbols-rounded text-gradient text-success text-3xl">devices</i>
                                <h5 class="font-weight-bolder mt-3">Fully Responsive</h5>
                                <p class="pe-3">Regardless of the screen size, the website content will naturally fit the given resolution.</p>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
     
    </section>
         --}}
    

    <div class="modal fade" id="msgStatus" tabindex="-1" aria-labelledby="msgStatusLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title text-capitalize text-success fs-4">
                        Message Status
                    </h6>
                    <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p class="fs-4 text-dark fs-7 opacity-5 fw-bold">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    </div>
        
    
    
    <div class="modal fade" id="requestForm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title text-capitalize">
                        EMAIL US
                    </h6>
                    <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('send') }}" method="POST" id="msg-form">
                    @csrf
                    <div class="modal-body p-5 my-0">


                        <div class="input-group border rounded my-3">
                            <input type="text" class="form-control px-2" name="name" placeholder="Full name or Company name">
                        </div>

                        <div class="input-group border rounded align-items-center justify-content-center my-3">
                            <p class="position-absolute start-0 my-0 px-2 text-center fs-7">+63</p>
                            <input type="number" class="form-control px-1 ms-5 border-start" name="contactno" placeholder="9123456789">
                        </div>


                        <div class="input-group border rounded my-3">
                            <input type="email" class="form-control px-2" name="email" placeholder="Email address">
                        </div>
                        
                        <div class="input-group border rounded my-3">
                            <input type="text" class="form-control px-2" name="address" placeholder="Address">
                        </div>

                        <div class="input-group border rounded my-3">
                            <textarea type="text" class="form-control px-2" name="msg" placeholder="Message" rows="10" ></textarea>
                        </div>

                        <button class="g-recaptcha btn btn-primary" 
                            data-sitekey="{{ config('keys')['RECAPCHA_SITE_KEY'] }}" 
                            data-callback='onSubmit' 
                            data-action='submit'>Submit
                        </button>


                    </div>

                </form>

            </div>
        </div>
    </div>



     <footer>
        <div class="container-fluid bg-gray-300 text-dark text-center py-1 ">

            <div class="d-block">
            
                <div class="container">
                    <a href="https://www.facebook.com/profile.php?id=61574451669781">
                        <img class="custom-img" src="{{asset('assets/img/fb.png')}}">
                    </a>
                    <p class="fs-7 py-0 my-0 text-center">
                        <br> &copy; <script>document.write(new Date().getFullYear())</script> K-Tech Dev Team. All Rights Reserved.
                    </p>
                </div>

            </div>

        </div>
    </footer>
    

</x-basecomponent>