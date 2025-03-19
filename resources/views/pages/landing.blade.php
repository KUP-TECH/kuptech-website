<x-basecomponent>


    <nav class="navbar navbar-expand-lg bg-gray-400 text-dark rounded mt-1 position-sticky top-0">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">{{ config('app.name') }}</a>
        </div>
    </nav>
    <section>
        <div class="row">
            <div class="col">
                <div class="container mt-7 px-5 text-justify">
                    <p class="fs-2 text-white opacity-7">KupTech IT Solutions</p>
                    <p class="fs-5 text-white opacity-6">We are a team of developers, designers, and marketers who are dedicated to creating the best digital products for our clients. We specialize in web and mobile app development. Our goal is to help you grow your business and reach your target audience. Contact us today to learn more about our services and how we can help you achieve your goals.</p>
                </div>
            </div>
            <div class="col d-none d-md-block">
                <img src="https://learn.g2.com/hubfs/iStock-1130210581.jpg" class="img-fluid">
            </div>
        </div>
    </section>
    <footer>
        <div class="container-fluid bg-gray-400 text-dark text-center py-3 fixed-bottom">
            <p>
                &copy; <script>document.write(new Date().getFullYear())</script> KupTech IT Solutions. All rights reserved.
            </p>
        </div>
    </footer>
    

</x-basecomponent>