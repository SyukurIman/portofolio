@extends('layouts.app')

@section('content')
<body class="home bg-gray-100 text-gray-800">
    <nav class="navbar navbar-expand-lg bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand flex gap-2" href="#">
                <img src="images/icon.jpeg" alt="" srcset="" width="32rem"> Portofolio
            </a>
            <button class="navbar-toggler " style="border: none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="#about">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#gallery">Activity</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-cover h-screen bg-center text-white py-20 header flex align-middle">
        <div class="stars"></div>
        <div class="container text-center">
            <img src="images/image_me.jpg" alt="Profile Picture" class="mx-auto rounded-full shadow-lg w-40 h-40 object-cover">
            <h1 class="text-4xl font-bold">Hi, I'm Syukur Iman Attaqwa</h1>
            <p class="text-xl ">A Web Developer who loves building amazing websites</p>
            
            <div class="mt-3 flex flex-col items-center lg:items-start lg:flex-row lg:justify-center sm:gap-6">
                <p class="text-lg font-semibold "><i class="fa-solid fa-phone"></i> +6282132658861</p>
                <p class="text-lg font-semibold "><i class="fa-solid fa-envelope"></i> ataiman30@gmail.com</p>
                <p class="text-lg font-semibold "><i class="fa-brands fa-linkedin"></i> <a href="https://linkedin.com/in/syukuriman" class="text-white hover:underline">syukuriman</a></p>
                <p class="text-lg font-semibold "><i class="fa-brands fa-github"></i> <a href="https://github.com/SyukurIman" class="text-white hover:underline">SyukurIman</a></p>    
            </div>
            <a href="#projects" class="btn btn-light w-52">See My Work</a>
        </div>
        {{-- <div class=" text-center">
            
            
        </div> --}}
    </section>

    <!-- About Me Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-20">
            
          <div class="flex flex-col lg:flex-row lg:gap-10 items-center text-left">
            <div class="w-full lg:w-1/2">
              <h2 class="text-4xl font-bold text-gray-800">About Me</h2>
              <p class="mt-4 text-lg font-semibold text-gray-600 leading-relaxed">
                I am a Bachelor of Informatics graduate from Universitas Pembangunan Nasional ‘Veteran’ East Java with a GPA of 3.87, and have a strong interest in Full Stack Development and Machine Learning. During college, I was active in the robot community and participated in independent internship activities at PT Aksamedia and PKL at PT Telkom Java.
              </p>
            </div>
            <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
              <p class="text-lg font-semibold text-gray-600 leading-relaxed">
                My thesis, entitled <span class="font-bold italic">‘Facial Emotion Detection Using Deep Generative Adversarial Network (DGAN) Algorithm on Video Call Consultation Feature’</span>, is the result of applying artificial intelligence to web-based applications. The project combines Full Stack Development and Machine Learning to provide a real-time analysis of user emotions during video calls.
              </p>
            </div>
          </div>
        </div>
      </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-100">
        <div class="container">
            <h2 class="text-3xl font-bold text-center">Best Projects</h2>
            <div class="row mt-5 project_body">
                <div class="col-md-4">
                    <div class="bg-white p-4 shadow-md rounded-lg text-justify" >
                        <h5 class="font-bold">Project E-Learning PG/TK Agripina</h5>
                        <p class="mt-2">E-Learning system to effectively monitor and accurately track children's daily activities at PG-TK Agripina</p>

                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#project1Modal">
                            Show Result
                        </button>
                    </div>

                    <div class="modal fade" id="project1Modal" tabindex="-1" aria-labelledby="project1ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="project1ModalLabel">Project Agripina</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Full view image or background -->
                                    <div class="bg-contain bg-no-repeat bg-center h-96 w-full rounded-lg" style="background-image: url('images/image_agripina.png');"></div>
                                    <!-- Alternatively, use an <img> tag -->
                                    <!-- <img src="image1.jpg" class="img-fluid rounded-lg" alt="Project 1 Full View"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="bg-white p-4 shadow-md rounded-lg text-justify" >
                        <h5 class="font-bold">Project Web Konsultasi </h5>
                        <p class="mt-2">A consultation system that facilitates remote consultation activities between psychologists and patients</p>

                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#project2Modal">
                            Show Result
                        </button>
                    </div>

                    <div class="modal fade" id="project2Modal" tabindex="-1" aria-labelledby="project3ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="project1ModalLabel">Project Sistem Konsultasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="bg-contain bg-no-repeat bg-center h-96 w-full rounded-lg" style="background-image: url('images/image_agripina.png');"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="bg-white p-4 shadow-md rounded-lg text-justify" >
                        <h5 class="font-bold">Project Akses Barang Pergudangan</h5>
                        <p class="mt-2">Data processing system for the entry and exit of goods based on qrcodes both on the shelf and on the goods.</p>

                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#project3Modal">
                            Show Result
                        </button>
                    </div>

                    <div class="modal fade" id="project3Modal" tabindex="-1" aria-labelledby="project3ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="project1ModalLabel">Project Pergudangan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="bg-contain bg-no-repeat bg-center h-96 w-full rounded-lg" style="background-image: url('images/image_agripina.png');"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="py-20 bg-white">
        <div class="container mx-auto px-6 lg:px-20">
          <h2 class="text-4xl font-bold text-center text-gray-800 mb-10">Gallery Activity</h2>
          
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="relative group">
              <img src="images/image_hero_1.jpeg" alt="Project 1" class="w-full h-64 object-cover rounded-lg shadow-md transition-transform transform group-hover:scale-105">
              <div class="p-4 absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center group-hover:opacity-100 transition-opacity">
                <p class="text-white text-lg font-bold">KKCTBN 2022 | Komunitas Robot UPN "Veteran" Surabaya</p>
              </div>
            </div>
            <div class="relative group">
              <img src="images/image_aktivity_2.jpg" alt="Project 2" class="w-full h-64 object-cover rounded-lg shadow-md transition-transform transform group-hover:scale-105">
              <div class="p-4 absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center group-hover:opacity-100 transition-opacity">
                <p class="text-white text-lg font-bold">PKM 2023 | Presentasi Progress PKM</p>
              </div>
            </div>
            <div class="relative group">
              <img src="images/image_aktivity_3.jpeg" alt="Project 4" class="w-full h-64 object-cover rounded-lg shadow-md transition-transform transform group-hover:scale-105">
              <div class="p-4 absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center  group-hover:opacity-100 transition-opacity">
                <p class="text-white text-lg font-bold">KRI 2023 | Komunitas Robot UPN "Veteran" Surabaya</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container text-center">
            <p>&copy; 2024 Syukur Iman Attaqwa. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

<style>
    .navbar-toggler:focus{
        box-shadow: none;
    }
    .header {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        /* background-image: url('images/image_hero_1.jpeg'); */
        position: relative;
        background-color: #000000; /* Gray background */
    }

    @media only screen and (max-width: 600px) {
        .project_body {
            gap: 20px;
        }
    }

    @keyframes twinkling {
        0%  { opacity: 0.7; transform: translateY(0); }
        50% { opacity: 1; transform: translateY(-155px); }
        100%  { opacity: 0.7; transform: translateY(0); }
    }

    /* Starry effect using a pseudo-element */
    .stars::before, .stars::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: radial-gradient(1px 1px at 5% 5%, white, transparent),
            radial-gradient(1px 1px at 10% 20%, white, transparent), 
            radial-gradient(1px 1px at 15% 40%, white, transparent), 
            radial-gradient(2px 2px at 20% 60%, white, transparent), 
            radial-gradient(1px 1px at 25% 80%, white, transparent), 
            radial-gradient(1px 1px at 30% 30%, white, transparent), 
            radial-gradient(2px 2px at 35% 50%, white, transparent), 
            radial-gradient(1px 1px at 40% 70%, white, transparent), 
            radial-gradient(1px 1px at 45% 10%, white, transparent), 
            radial-gradient(2px 2px at 50% 40%, white, transparent), 
            radial-gradient(1px 1px at 55% 90%, white, transparent), 
            radial-gradient(2px 2px at 60% 20%, white, transparent),
            radial-gradient(1px 1px at 65% 50%, white, transparent),
            radial-gradient(1px 1px at 70% 10%, white, transparent),
            radial-gradient(2px 2px at 75% 30%, white, transparent),
            radial-gradient(1px 1px at 80% 60%, white, transparent),
            radial-gradient(2px 2px at 85% 80%, white, transparent),
            radial-gradient(1px 1px at 90% 50%, white, transparent),
            radial-gradient(1px 1px at 95% 40%, white, transparent),
            radial-gradient(2px 2px at 50% 80%, white, transparent);
        z-index: 1;
        pointer-events: none;
        animation: twinkling 10s infinite;
    }

    /* Slight variation for the second layer of stars */
    .stars::after {
        opacity: 0.6;
        background-image: radial-gradient(1px 1px at 5% 90%, white, transparent), 
            radial-gradient(1px 1px at 15% 30%, white, transparent), 
            radial-gradient(1px 1px at 25% 60%, white, transparent), 
            radial-gradient(2px 2px at 35% 20%, white, transparent), 
            radial-gradient(1px 1px at 45% 70%, white, transparent), 
            radial-gradient(1px 1px at 55% 90%, white, transparent),
            radial-gradient(2px 2px at 65% 40%, white, transparent), 
            radial-gradient(1px 1px at 75% 50%, white, transparent), 
            radial-gradient(1px 1px at 85% 20%, white, transparent), 
            radial-gradient(2px 2px at 95% 80%, white, transparent), 
            radial-gradient(1px 1px at 20% 80%, white, transparent),
            radial-gradient(1px 1px at 30% 10%, white, transparent),
            radial-gradient(2px 2px at 40% 50%, white, transparent),
            radial-gradient(1px 1px at 50% 30%, white, transparent),
            radial-gradient(2px 2px at 60% 70%, white, transparent),
            radial-gradient(1px 1px at 70% 40%, white, transparent),
            radial-gradient(1px 1px at 80% 50%, white, transparent),
            radial-gradient(2px 2px at 90% 60%, white, transparent),
            radial-gradient(1px 1px at 95% 10%, white, transparent),
            radial-gradient(1px 1px at 20% 90%, white, transparent);
        opacity: 0.8;
        animation: twinkling 12s infinite;
    }

    /* Animation for the twinkling effect */
    
</style>
@endsection