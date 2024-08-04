@extends('en.layouts.main')

@section('content')
<script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e304e',
                        secondary: '#efc02e',
                        accent: '#4E1E48',
                    }
                }
            }
        }
    </script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @include('en.sections.header')
<section class="bg-gray-100 font-sans h-[auto] w-[100vw] flex items-center justify-center">

<div class="container mx-auto xl:my-[10rem] my-[6rem] px-4 py-8 flex-col justify-center items-center">
        <h1 class="text-4xl font-bold text-primary mb-8">Contact Us</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-primary mb-4">Get in Touch</h2>
                <form>
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-secondary"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-secondary text-primary font-bold py-2 px-4 rounded-md hover:bg-opacity-90 transition duration-300">Send Message</button>
                </form>
            </div>
            
            <div class="bg-primary text-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Contact Information</h2>
                <div class="space-y-4">
                    <p><i class="fas fa-map-marker-alt mr-2"></i> 123 Construction Ave, Building City, 12345</p>
                    <p><i class="fas fa-phone mr-2"></i> (555) 123-4567</p>
                    <p><i class="fas fa-envelope mr-2"></i> info@constructionco.com</p>
                </div>
                <div class="mt-8">
                    <h3 class="text-xl font-semibold mb-2">Business Hours</h3>
                    <p>Monday - Friday: 8:00 AM - 5:00 PM</p>
                    <p>Saturday: 9:00 AM - 1:00 PM</p>
                    <p>Sunday: Closed</p>
                </div>
                <div class="mt-8">
                    <h3 class="text-xl font-semibold mb-2">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-secondary transition duration-300"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="text-white hover:text-secondary transition duration-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white hover:text-secondary transition duration-300"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white hover:text-secondary transition duration-300"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-12 bg-accent text-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Our Locations</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <h3 class="text-lg font-semibold mb-2">Main Office</h3>
                    <p>123 Construction Ave, Building City, 12345</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-2">Project Site A</h3>
                    <p>456 Development Rd, New Town, 67890</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-2">Project Site B</h3>
                    <p>789 Innovation St, Tech Valley, 13579</p>
                </div>
            </div>
        </div>
    </div>
</section>  

    


@endsection