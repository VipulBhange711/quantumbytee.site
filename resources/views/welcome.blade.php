<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuantumBytee Technologies - IT Solutions Since 2005</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        scroll-behavior: smooth;
    }

    .hero-gradient {
        background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #3b82f6 100%);
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: -38px;
        top: 0;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #2563eb;
        border: 4px solid #bfdbfe;
    }

    .floating {
        animation: floating 3s ease-in-out infinite;
    }

    @keyframes floating {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
        100% { transform: translateY(0px); }
    }

    .pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }

        .mobile-menu {
            display: none;
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        
        .mobile-menu.active {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }
        
        .gradient-btn {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            color: white;
            padding: 10px 28px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(79, 70, 229, 0.3);
            display: inline-block;
            position: relative;
            overflow: hidden;
        }
        
        .gradient-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(79, 70, 229, 0.4);
        }
        
        .gradient-btn:active {
            background: linear-gradient(135deg, #4338ca 0%, #6d28d9 100%);
        }
        
        .hamburger-active span:first-child {
            transform: rotate(45deg) translate(6px, 6px);
        }
        
        .hamburger-active span:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger-active span:last-child {
            transform: rotate(-45deg) translate(5px, -5px);
        }
    </style>

</head>

<body class="bg-gray-50">

    <!-- Navigation -->
<nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-12 w-auto" src="{{asset('images/logo.png')}}" alt="QuantumByte Technologies">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-6">
                            <a href="#home" class="text-blue-600 hover:text-blue-800 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Home</a>
                            <a href="#about" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300">About</a>
                            <a href="#services" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Services</a>
                            <a href="#history" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Our Journey</a>
                            <a href="#contact" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Contact</a>
                        </div>
                    </div>
                </div>
                
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <a href="#contact" class="gradient-btn">Sign in / Sign up</a>
                    </div>
                </div>
                
                <div class="md:hidden">
                    <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-gray-100 focus:outline-none transition duration-300">
                        <span class="sr-only">Open main menu</span>
                        <span class="block w-6 h-0.5 bg-gray-700 mb-1 transition-all duration-300"></span>
                        <span class="block w-6 h-0.5 bg-gray-700 mb-1 transition-all duration-300"></span>
                        <span class="block w-6 h-0.5 bg-gray-700 transition-all duration-300"></span>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="mobile-menu md:hidden bg-white border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home" class="text-blue-600 block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="#about" class="text-gray-700 hover:bg-gray-100 block px-3 py-2 rounded-md text-base font-medium">About</a>
                <a href="#services" class="text-gray-700 hover:bg-gray-100 block px-3 py-2 rounded-md text-base font-medium">Services</a>
                <a href="#history" class="text-gray-700 hover:bg-gray-100 block px-3 py-2 rounded-md text-base font-medium">Our Journey</a>
                <a href="#contact" class="text-gray-700 hover:bg-gray-100 block px-3 py-2 rounded-md text-base font-medium">Contact</a>
                <div class="pt-4">
                    <a href="#contact" class="gradient-btn w-full text-center block">Sign in / Sign up</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section id="home" class="hero-gradient text-white py-20 md:py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate__animated animate__fadeInLeft">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">Innovative IT Solutions
                        <span class="text-blue-200">Since 2005</span></h1>
                    <p class="text-lg md:text-xl text-blue-100 mb-8">QuantumByte Technologies delivers cutting-edge IT
                        services to help your business thrive in the digital age.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#services"
                            class="bg-white text-blue-600 hover:bg-blue-50 px-6 py-3 rounded-lg font-medium text-center transition duration-300">Our
                            Services</a>
                        <a href="#contact"
                            class="border-2 border-white text-white hover:bg-blue-700 px-6 py-3 rounded-lg font-medium text-center transition duration-300">Contact
                            Us</a>
                    </div>
                </div>
                <div class="animate__animated animate__fadeInRight">
                    <img src="{{asset('images/wallpaper.png')}}" alt="IT Solutions" class="rounded-lg shadow-2xl floating">
                </div>
            </div>
        </div>
    </section>



    <!-- Stats Section -->

    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                    <div class="text-4xl font-bold text-blue-600 mb-2">18+</div>
                    <div class="text-gray-600">Years Experience</div>
                </div>
                <div class="animate__animated animate__fadeInUp" data-wow-delay="0.2s">

                    <div class="text-4xl font-bold text-blue-600 mb-2">500+</div>

                    <div class="text-gray-600">Clients Worldwide</div>

                </div>

                <div class="animate__animated animate__fadeInUp" data-wow-delay="0.3s">

                    <div class="text-4xl font-bold text-blue-600 mb-2">120+</div>

                    <div class="text-gray-600">Projects Completed</div>

                </div>

                <div class="animate__animated animate__fadeInUp" data-wow-delay="0.4s">

                    <div class="text-4xl font-bold text-blue-600 mb-2">50+</div>

                    <div class="text-gray-600">Expert Team Members</div>

                </div>

            </div>

        </div>

    </section>



    <!-- About Section -->

    <section id="about" class="py-20 bg-gray-50">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-16">

                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">About <span
                        class="text-blue-600">QuantumByte</span></h2>

                <div class="w-20 h-1 bg-blue-600 mx-auto"></div>

            </div>



            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="animate__animated animate__fadeInLeft">

                    <!--<img src="https://via.placeholder.com/600x400?text=Our+Team" alt="Our Team" class="rounded-lg shadow-xl">-->

                </div>

                <div class="animate__animated animate__fadeInRight">

                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Leading IT Service Provider Since 2005</h3>

                    <p class="text-gray-600 mb-6">QuantumByte Technologies Private Limited is a premier IT service
                        provider with a strong presence in Gurugram and Nagpur. Since our inception in 2005, we've been
                        delivering innovative technology solutions to businesses across various industries.</p>

                    <p class="text-gray-600 mb-6">Our team of certified professionals combines technical expertise with
                        business acumen to provide customized solutions that drive growth and efficiency for our
                        clients.</p>

                    <div class="space-y-4">

                        <div class="flex items-start">

                            <div class="flex-shrink-0 mt-1">

                                <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>

                                </svg>

                            </div>

                            <p class="ml-3 text-gray-700">Certified professionals with industry expertise</p>

                        </div>

                        <div class="flex items-start">

                            <div class="flex-shrink-0 mt-1">

                                <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>

                                </svg>

                            </div>

                            <p class="ml-3 text-gray-700">Customized solutions tailored to your business needs</p>

                        </div>

                        <div class="flex items-start">

                            <div class="flex-shrink-0 mt-1">

                                <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>

                                </svg>

                            </div>

                            <p class="ml-3 text-gray-700">Proven track record with 500+ satisfied clients</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- Services Section -->

    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our <span
                        class="text-blue-600">Services</span></h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Comprehensive IT solutions designed to propel your
                    business forward in the digital landscape.</p>
                <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="service-card bg-white rounded-xl shadow-md overflow-hidden transition duration-500 ease-in-out hover:shadow-xl animate__animated animate__fadeInUp"
                    data-wow-delay="0.1s">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Software Development</h3>
                        </div>
                        <p class="text-gray-600">Custom software solutions tailored to your business requirements, from
                            enterprise applications to mobile apps.</p>
                    </div>
                </div>
                <div class="service-card bg-white rounded-xl shadow-md overflow-hidden transition duration-500 ease-in-out hover:shadow-xl animate__animated animate__fadeInUp"
                    data-wow-delay="0.2s">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Cloud Solutions</h3>
                        </div>
                        <p class="text-gray-600">Comprehensive cloud services including migration, management, and
                            optimization across all major platforms.</p>
                    </div>
                </div>
                <div class="service-card bg-white rounded-xl shadow-md overflow-hidden transition duration-500 ease-in-out hover:shadow-xl animate__animated animate__fadeInUp"
                    data-wow-delay="0.3s">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Cybersecurity</h3>
                        </div>
                        <p class="text-gray-600">End-to-end security solutions including risk assessment, penetration
                            testing, and managed security services.</p>
                    </div>
                </div>
                <div class="service-card bg-white rounded-xl shadow-md overflow-hidden transition duration-500 ease-in-out hover:shadow-xl animate__animated animate__fadeInUp"
                    data-wow-delay="0.4s">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>

                                </svg>

                            </div>

                            <h3 class="text-xl font-semibold text-gray-800">Data Analytics</h3>

                        </div>

                        <p class="text-gray-600">Transform your data into actionable insights with our advanced
                            analytics and business intelligence solutions.</p>

                    </div>

                </div>



                <div class="service-card bg-white rounded-xl shadow-md overflow-hidden transition duration-500 ease-in-out hover:shadow-xl animate__animated animate__fadeInUp"
                    data-wow-delay="0.5s">

                    <div class="p-6">

                        <div class="flex items-center mb-4">

                            <div class="bg-blue-100 p-3 rounded-full mr-4">

                                <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z">
                                    </path>

                                </svg>

                            </div>

                            <h3 class="text-xl font-semibold text-gray-800">Mobile Development</h3>

                        </div>

                        <p class="text-gray-600">Cross-platform and native mobile applications that deliver seamless
                            user experiences across all devices.</p>

                    </div>

                </div>



                <div class="service-card bg-white rounded-xl shadow-md overflow-hidden transition duration-500 ease-in-out hover:shadow-xl animate__animated animate__fadeInUp"
                    data-wow-delay="0.6s">

                    <div class="p-6">

                        <div class="flex items-center mb-4">

                            <div class="bg-blue-100 p-3 rounded-full mr-4">

                                <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z">
                                    </path>

                                </svg>

                            </div>

                            <h3 class="text-xl font-semibold text-gray-800">IT Consulting</h3>

                        </div>

                        <p class="text-gray-600">Strategic IT consulting services to align your technology with business
                            goals and drive digital transformation.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- Our Journey Section -->
<section id="history" class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
        Our <span class="text-blue-600">Journey</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        From humble beginnings to becoming a trusted IT partner for businesses across India.
      </p>
      <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
    </div>

    <div class="relative">
      <!-- Timeline line -->
      <div class="border-l-2 border-blue-200 absolute h-full left-4 md:left-1/2 transform md:-translate-x-1/2"></div>

      <!-- Timeline items -->
      <div class="space-y-12">
        <!-- Item 1 -->
        <div class="relative pl-12 md:pl-0 md:flex justify-between items-center">
          <div class="md:w-5/12 md:pr-8 md:text-right mb-6 md:mb-0 animate__animated animate__fadeInLeft">
            <h3 class="text-xl font-semibold text-gray-800">Company Founded</h3>
            <p class="text-blue-600 font-medium">2005</p>
            <p class="text-gray-600 mt-2">QuantumByte Technologies was founded in Gurugram with a small team of 5 IT enthusiasts.</p>
          </div>
          <div class="hidden md:block md:w-2/12 flex justify-center">
            <div class="h-4 w-4 bg-blue-600 rounded-full border-4 border-blue-100"></div>
          </div>
          <div class="md:w-5/12 animate__animated animate__fadeInRight">
            <!--<img src="https://via.placeholder.com/300x200?text=2005" alt="2005" class="rounded-lg shadow-md">-->
          </div>
        </div>

        <!-- Item 2 -->
        <div class="relative pl-12 md:pl-0 md:flex justify-between items-center">
          <div class="md:w-5/12 md:order-last md:pl-8 animate__animated animate__fadeInRight">
            <h3 class="text-xl font-semibold text-gray-800">First Major Client</h3>
            <p class="text-blue-600 font-medium">2008</p>
            <p class="text-gray-600 mt-2">Secured our first enterprise client, marking our transition from small projects to large-scale implementations.</p>
          </div>
          <div class="hidden md:block md:w-2/12 flex justify-center">
            <div class="h-4 w-4 bg-blue-600 rounded-full border-4 border-blue-100"></div>
          </div>
          <div class="md:w-5/12 md:order-first animate__animated animate__fadeInLeft">
            <!--<img src="https://via.placeholder.com/300x200?text=2008" alt="2008" class="rounded-lg shadow-md">-->
          </div>
        </div>

        <!-- Item 3 -->
        <div class="relative pl-12 md:pl-0 md:flex justify-between items-center">
          <div class="md:w-5/12 md:pr-8 md:text-right mb-6 md:mb-0 animate__animated animate__fadeInLeft">
            <h3 class="text-xl font-semibold text-gray-800">Nagpur Expansion</h3>
            <p class="text-blue-600 font-medium">2012</p>
            <p class="text-gray-600 mt-2">Opened our second office in Nagpur IT Park to serve clients in Central India more effectively.</p>
          </div>
          <div class="hidden md:block md:w-2/12 flex justify-center">
            <div class="h-4 w-4 bg-blue-600 rounded-full border-4 border-blue-100"></div>
          </div>
          <div class="md:w-5/12 animate__animated animate__fadeInRight">
            <!--<img src="https://via.placeholder.com/300x200?text=2012" alt="2012" class="rounded-lg shadow-md">-->
          </div>
        </div>

        <!-- Item 4 -->
        <div class="relative pl-12 md:pl-0 md:flex justify-between items-center">
          <div class="md:w-5/12 md:order-last md:pl-8 animate__animated animate__fadeInRight">
            <h3 class="text-xl font-semibold text-gray-800">Cloud Specialization</h3>
            <p class="text-blue-600 font-medium">2016</p>
            <p class="text-gray-600 mt-2">Launched our cloud services division, becoming one of the early adopters of cloud technologies in India.</p>
          </div>
          <div class="hidden md:block md:w-2/12 flex justify-center">
            <div class="h-4 w-4 bg-blue-600 rounded-full border-4 border-blue-100"></div>
          </div>
          <div class="md:w-5/12 md:order-first animate__animated animate__fadeInLeft">
            <!--<img src="https://via.placeholder.com/300x200?text=2016" alt="2016" class="rounded-lg shadow-md">-->
          </div>
        </div>

        <!-- Item 5 -->
        <div class="relative pl-12 md:pl-0 md:flex justify-between items-center">
          <div class="md:w-5/12 md:pr-8 md:text-right mb-6 md:mb-0 animate__animated animate__fadeInLeft">
            <h3 class="text-xl font-semibold text-gray-800">100+ Employees</h3>
            <p class="text-blue-600 font-medium">2020</p>
            <p class="text-gray-600 mt-2">Crossed the milestone of 100 employees, with teams now serving clients across 12 countries.</p>
          </div>
          <div class="hidden md:block md:w-2/12 flex justify-center">
            <div class="h-4 w-4 bg-blue-600 rounded-full border-4 border-blue-100"></div>
          </div>
          <div class="md:w-5/12 animate__animated animate__fadeInRight">
            <!--<img src="https://via.placeholder.com/300x200?text=2020" alt="2020" class="rounded-lg shadow-md">-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Testimonials Section -->
<section class="py-20 bg-blue-600 text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        Client <span class="text-blue-200">Testimonials</span>
      </h2>
      <p class="text-lg text-blue-100 max-w-3xl mx-auto">
        Hear what our clients say about working with QuantumByte Technologies.
      </p>
      <div class="w-20 h-1 bg-blue-300 mx-auto mt-4"></div>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-white bg-opacity-10 rounded-xl p-8 backdrop-filter backdrop-blur-sm animate__animated animate__fadeInUp" data-wow-delay="0.1s">
        <div class="flex items-center mb-4">
          <div class="text-yellow-400 text-2xl">★★★★★</div>
        </div>
        <p class="text-blue-50 mb-6">
          "QuantumByte transformed our legacy systems into modern cloud-based solutions, improving our operational efficiency by 40%. Their team was professional and delivered beyond our expectations."
        </p>
        <div class="flex items-center">
          <img class="h-12 w-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client">
          <div>
            <h4 class="font-semibold">Rahul Sharma</h4>
            <p class="text-blue-200 text-sm">CTO, FinTech Solutions</p>
          </div>
        </div>
      </div>

      <div class="bg-white bg-opacity-10 rounded-xl p-8 backdrop-filter backdrop-blur-sm animate__animated animate__fadeInUp" data-wow-delay="0.2s">
        <div class="flex items-center mb-4">
          <div class="text-yellow-400 text-2xl">★★★★★</div>
        </div>
        <p class="text-blue-50 mb-6">
          "Their cybersecurity team helped us identify vulnerabilities we didn't even know existed. The implementation was smooth and their ongoing support has been exceptional."
        </p>
        <div class="flex items-center">
          <img class="h-12 w-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client">
          <div>
            <h4 class="font-semibold">Priya Patel</h4>
            <p class="text-blue-200 text-sm">Director, HealthCare Plus</p>
          </div>
        </div>
      </div>

      <div class="bg-white bg-opacity-10 rounded-xl p-8 backdrop-filter backdrop-blur-sm animate__animated animate__fadeInUp" data-wow-delay="0.3s">
        <div class="flex items-center mb-4">
          <div class="text-yellow-400 text-2xl">★★★★★</div>
        </div>
        <p class="text-blue-50 mb-6">
          "We've been working with QuantumByte since 2010 and they've consistently delivered innovative solutions that give us a competitive edge in our industry."
        </p>
        <div class="flex items-center">
          <img class="h-12 w-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/men/75.jpg" alt="Client">
          <div>
            <h4 class="font-semibold">Amit Desai</h4>
            <p class="text-blue-200 text-sm">CEO, RetailChain India</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Contact Section -->

  <section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Get In <span class="text-blue-600">Touch</span></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Have a project in mind or want to learn more about our services? Contact us today.</p>
            <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
        </div>
        <div class="grid md:grid-cols-2 gap-12">
            <div class="animate__animated animate__fadeInLeft">
                <div class="bg-gray-50 rounded-xl p-8 shadow-md">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Contact Information</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-gray-800">Corporate Office</h4>
                                <p class="text-gray-600 mt-1">122018, Badshahpur Sohna Rd Hwy, Parsvnath Greenville, Tatvam Villas, Sector 48, Gurugram, Haryana 122018</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-gray-800">Phone</h4>
                                <p class="text-gray-600 mt-1">+91 8080123020 (Gurugram)</p>
                                <p class="text-gray-600 mt-1">+91 75880 75905 (Nagpur)</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-gray-800">Email</h4>
                                <p class="text-gray-600 mt-1">info@quantumbyte.com</p>
                                <p class="text-gray-600 mt-1">sales@quantumbyte.com</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-gray-800">Working Hours</h4>
                                <p class="text-gray-600 mt-1">Monday - Friday: 9:00 AM - 6:00 PM</p>
                                <p class="text-gray-600 mt-1">Saturday: 10:00 AM - 2:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-gray-50 rounded-xl p-8 shadow-md">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Nagpur Office</h3>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                            <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-600">IT Park, 5th Floor, TechZone Building, Hingna Road, Nagpur, Maharashtra 440016</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="animate__animated animate__fadeInRight">
                <div class="bg-gray-50 rounded-xl p-8 shadow-md">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Send Us a Message</h3>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="John Doe">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="john@example.com">
                            </div>
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="+91 98765 43210">
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="How can we help?">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Tell us about your project..."></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition duration-300">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Map Section -->

    <div class="h-96 w-full">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.715635623628!2d77.0903723150789!3d28.45744498248345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1858d9a9c663%3A0x3a9d1d9b3e8a7f8a!2sParsvnath%20Greenville%2C%20Sector%2048%2C%20Gurugram%2C%20Haryana%20122018!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>

    <!-- Footer -->

    <footer class="bg-gray-900 text-white pt-16 pb-8">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid md:grid-cols-4 gap-12">

                <div>

                    <img src="{{asset('images/logo.png')}}" alt="QuantumByte Technologies Logo" class="h-12 mb-6">

                    <p class="text-gray-400 mb-6">Innovative IT solutions provider since 2005, helping businesses
                        transform through technology.</p>

                    <div class="flex space-x-4">

                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">

                            <i class="fab fa-facebook-f"></i>

                        </a>

                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">

                            <i class="fab fa-twitter"></i>

                        </a>

                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">

                            <i class="fab fa-linkedin-in"></i>

                        </a>

                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">

                            <i class="fab fa-instagram"></i>

                        </a>

                    </div>

                </div>



                <div>

                    <h3 class="text-lg font-semibold mb-6">Quick Links</h3>

                    <ul class="space-y-3">

                        <li><a href="#home" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>

                        <li><a href="#about" class="text-gray-400 hover:text-white transition duration-300">About Us</a>
                        </li>

                        <li><a href="#services"
                                class="text-gray-400 hover:text-white transition duration-300">Services</a></li>

                        <li><a href="#history" class="text-gray-400 hover:text-white transition duration-300">Our
                                Journey</a></li>

                        <li><a href="#contact"
                                class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>

                    </ul>

                </div>



                <div>

                    <h3 class="text-lg font-semibold mb-6">Our Services</h3>

                    <ul class="space-y-3">

                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Software
                                Development</a></li>

                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Cloud
                                Solutions</a></li>

                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Cybersecurity</a>
                        </li>

                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Data
                                Analytics</a></li>

                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">IT Consulting</a>
                        </li>

                    </ul>

                </div>



                <div>

                    <h3 class="text-lg font-semibold mb-6">Contact Info</h3>

                    <ul class="space-y-3">

                        <li class="flex items-start">

                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-blue-500"></i>

                            <span class="text-gray-400">122018, Badshahpur Sohna Rd Hwy, Parsvnath Greenville, Sector
                                48, Gurugram, Haryana</span>

                        </li>

                        <li class="flex items-center">

                            <i class="fas fa-phone-alt mr-3 text-blue-500"></i>

                            <span class="text-gray-400">+91 8787565000</span>

                        </li>

                        <li class="flex items-center">

                            <i class="fas fa-envelope mr-3 text-blue-500"></i>

                            <span class="text-gray-400">info@quantumbyte.com</span>

                        </li>

                    </ul>

                </div>

            </div>



            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">

                <p class="text-gray-500 text-sm mb-4 md:mb-0">© 2023 QuantumByte Technologies Private Limited. All
                    rights reserved.</p>

                <div class="flex space-x-6">

                    <a href="#" class="text-gray-500 hover:text-white text-sm transition duration-300">Privacy
                        Policy</a>

                    <a href="#" class="text-gray-500 hover:text-white text-sm transition duration-300">Terms of
                        Service</a>

                    <a href="#" class="text-gray-500 hover:text-white text-sm transition duration-300">Sitemap</a>

                </div>

            </div>

        </div>

    </footer>



     <script>
        // Mobile menu functionality
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
            mobileMenuButton.classList.toggle('hamburger-active');
        });
        
        // Close mobile menu when clicking on a link
        const mobileLinks = document.querySelectorAll('#mobile-menu a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                mobileMenuButton.classList.remove('hamburger-active');
            });
        });
        
        // Simple animation trigger on scroll
        document.addEventListener('DOMContentLoaded', function () {
            const animateElements = document.querySelectorAll('.animate__animated');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const animation = entry.target.getAttribute('data-wow-delay') || '';
                        entry.target.style.animationDelay = animation;
                        entry.target.classList.add('animate__fadeInUp');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });
            
            animateElements.forEach(element => {
                observer.observe(element);
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>

</body>

</html>