@extends('layout.main')

@section('container')
    <div class="container-fluid d-flex my-4">
        <div class="container-fluid mt-4">
            <div class="text-center mt-1">
                <h1 class="badge bg-danger" style="font-size: 1.2rem"><b>Welcome to UnivFoods!</b></h1>
                <p class="display-5 mt-4">Order Delicious Food from Your Favourite Restaurants</p>
            </div>
            <div class="text-center mt-5">
                <p style="font-family: 'Poppins';font-size:1.2rem;">Craving something delicious?Look no further!UnivFoods brings you the best dining experience with a wide selection of the great restaurants/cafes for university students </p>
               @auth
                <a href="/eatery" class="btn btn-danger" style="font-family:Poppins">Start Here!</a>
                @else
                <a href="/signup" class="btn btn-danger" style="font-family:Poppins">Start Here!</a>
               @endauth
            </div>
        </div>
        <img class="d-none d-lg-block w-50 img-fluid" src="bg-img\lily-banse--YHSwy6uqvk-unsplash.jpg" alt="">
    </div>
    <div class="container-fluid mt-5">
        <div class="display-6 text-center" style="font-family: 'Montserrat';text-decoration:overline;"><b>Our Special Service</b></div>
        <p class="text-center my-4" style="font-family: Poppins;">By using our web application the users can get a lot of advantages such as :</p>
        <div class="row m-5" style="font-family:Poppins;">
            <div class="col-md-4 col-12 d-flex flex-column align-items-center gap-3">
                <span class="text-light rounded px-2 py-1" style="background-color:#ff7b5f;font-size:1.5rem;"><i class='bx bx-money-withdraw'></i></span>
                <b>Affordable Price</b>
                <p class="text-center">This platform provide students to make purchase without any additional fees.</p>
            </div>
            <div class="col-md-4 col-12 d-flex flex-column align-items-center gap-3">
                <span class="text-light rounded px-2 py-1" style="background-color:#ff7b5f;font-size:1.5rem;"><i class='bx bxs-truck' ></i></span>
                <b>Free Delivery</b>
                <p>We offer free delivery for all types of orders, with no delivery fees involved.</p>
            </div>
            <div class="col-md-4 col-12 d-flex flex-column align-items-center gap-3">
                <span class="text-light rounded px-2 py-1" style="background-color:#ff7b5f;font-size:1.5rem;"><i class='bx bx-devices' ></i></span>
                <b>Easy to Order</b>
                <p>Ordering is a breeze with our user-friendly platform, making it simple and convenient for you to place your orders hassle-free.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid m-5">
        <div class="row">
            <div class="col-md-6 col-12">
                <h4 style="font-family: Poppins">How It Works</h4>
                <ol class="d-flex flex-column gap-4" style="font-family: Montserrat">
                    <li><b>Browse Our Menu:</b>Explore a diverse menu featuring a variety of cuisines and dishes.
                        From appetizers to desserts, we have something to satisfy every craving.</li>
                    <li><b>Easy Ordering:</b> Place your order in just a few clicks. Customize your meal
                        according to your preferences, add special instructions, and choose your preferred payment method.</li>
                    <li><b>Scheduled Delivery:</b>Our efficient delivery team works tirelessly to ensure your food reaches you
                        hot and fresh, Track your order in real-time and know exactly when it will arrive.</li>
                </ol>
            </div>
            <div class="col-md-6 col-12">
                <h4 style="font-family: Poppins">Why Choose UnivFoods</h4>
                <ul class="d-flex flex-column gap-4" style="font-family: Montserrat">
                    <li><b>Vast Selection:</b>Enjoy a diverse selection cuisines,restaurants and dishes to suit every taste</li>
                    <li><b>Contactless Delivery:</b>Your safety is our priority.Opt for contactless delivery and enjoy your meal with peace of mind.</li>
                    <li><b>Real-time tracking:</b>Ensuring that customers are always up to date about the status and whereabouts of their food orders, guaranteeing a seamless and delightful dining experience.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
