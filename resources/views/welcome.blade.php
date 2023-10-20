<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
     
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f5f5f5;
                margin: 0;
                padding: 0;
            }
    
            header {
                background-color: #324a63;
                color: #fff;
                text-align: center;
                padding: 20px;
            }
            a{
                color: white;
            }
            img{
                margin: 0 auto;
                padding: 20px;
                align-self: center;
            }
    
            h1 {
                font-size: 36px;
            }
    
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 20px;
            }
    
            h2 {
                font-size: 24px;
            }
    
            p {
                font-size: 16px;
            }
    
            footer {
                background-color: #324a63;
                color: #fff;
                text-align: center;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>K&K Vet Clinic</h1>
            <nav>
                <a href="http://www.hackathon.test/animals">Our patients</a>
                <a href="http://www.hackathon.test/animals/create">Create a new patient</a>
            </nav>
        </header>
        <div class="container">
            <img src="{{ asset('images/istockphoto-1303362255-1024x1024.jpg') }}" alt="KK Vet clinic">
            {{-- <h2>About Us</h2>
            <p>We are a dedicated team of veterinarians and animal lovers, providing top-quality care for your pets. With years of experience, we offer a wide range of services to keep your furry friends healthy and happy.</p>
    
            <h2>Our Services</h2>
            <ul>
                <li>Preventive Care</li>
                <li>Emergency Care</li>
                <li>Surgery</li>
                <li>Dental Care</li>
                <li>Boarding</li>
            </ul>
    
            <h2>Contact Us</h2>
            <p>If you have any questions or need to schedule an appointment, please don't hesitate to contact us.</p>
            <p>Phone: 776 987 432</p>
            <p>Email: info@kkvetclinic.com</p>
        </div> --}}
        <footer>
            &copy; 2023 K&K Web development
        </footer>
    </body>
        
    </body>
</html>
