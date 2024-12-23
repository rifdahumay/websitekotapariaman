<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Pariamankota Landing Page')</title>

  <link rel="icon" href="/logos/Lambang Kota Pariaman.png" type="image/x-icon">
    <link rel="shortcut icon" href="/logos/Lambang_Kota_Pariaman.png" type="image/x-icon">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">
  @stack('styles')
  <script src="https://cdn.jsdelivr.net/npm/typewriter-effect@2.18.0/dist/core.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <style>
    

    body {
        font-family: 'Bricolage Grotesque', sans-serif;
    }
    body.dark-mode {
    background-color: #121212;
    color: #e0e0e0;
}

    
    .gradient-text {
        background: linear-gradient(90deg, #ff0000, #0000ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .btn-gradient-border {
        border: 2px solid;
        border-image-slice: 1;
        border-image-source: linear-gradient(90deg, #ff0000, #0000ff);
        background-color: transparent;
        color: #ff0000;
        font-weight: bold;
        transition: all 0.3s ease-in-out;
    }

    .btn-gradient-border:hover {
        background: linear-gradient(90deg, #ff0000, #0000ff);
        color: #ffffff;
    }

    .breadcrumb a {
        text-decoration: none;
        transition: color 0.2s ease;
        display: flex;
        align-items: center;
    }

    .breadcrumb a:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    .card {
        border: none;
        border-radius: 10px;
    }

    .card img {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        height: 200px;
        object-fit: cover;
    }

body.dark-mode .navbar {
    background-color: #1f1f1f;
}

body.dark-mode .nav-link {
    color: #e0e0e0 !important;
}

body.dark-mode .nav-link:hover,
body.dark-mode .nav-link.active {
    color: #ffcc00 !important;
}

body.dark-mode .dropdown-menu {
    background-color: #333;
    border: none;
}

body.dark-mode .dropdown-item {
    color: #e0e0e0;
}

body.dark-mode .dropdown-item:hover {
    background-color: #444;
}

body.dark-mode header {
    background-color: #1f1f1f;
    color: #e0e0e0;
}

body.dark-mode .section-header {
    color: #ffcc00;
}

body.dark-mode .headline-news {
    background-color: #1f1f1f;
}

body.dark-mode .news-item img {
    filter: brightness(70%);
}

body.dark-mode .news-content {
    color: #e0e0e0;
}

body.dark-mode .news-content .badge {
    background-color: #444;
    color: #e0e0e0;
}

body.dark-mode .news-content h4 {
    color: #ffcc00;
}

body.dark-mode footer {
    background-color: #1f1f1f;
    color: #e0e0e0;
}

body.dark-mode footer a {
    color: #e0e0e0;
}

body.dark-mode footer a:hover {
    color: #ffcc00;
}

body.dark-mode .card {
    background-color: #222;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    color: #e0e0e0;
}

body.dark-mode .card img {
    filter: brightness(80%);
}

body.dark-mode .card:hover {
    background-color: #333;
}

body.dark-mode .carousel-caption {
    background-color: rgba(0, 0, 0, 0.7);
    color: #e0e0e0;
}

body.dark-mode .carousel-indicators .active {
    background-color: #ffcc00;
}

body.dark-mode .carousel-indicators button {
    background-color: rgba(255, 255, 255, 0.4);
}

body.dark-mode .btn-outline-primary {
    color: #ffcc00;
    border-color: #ffcc00;
}

body.dark-mode .btn-outline-primary:hover {
    background-color: #ffcc00;
    color: #000;
}

body.dark-mode .agenda-container {
    background-color: rgba(18, 18, 18, 0.8);
}

body.dark-mode .agenda-item button {
    background-color: #222;
    color: #e0e0e0;
}

body.dark-mode .custom-bg {
    background: radial-gradient(circle, #1f1f1f, #121212);
}

body.dark-mode .navbar .nav-link {
    background: linear-gradient(to right, yellow, red);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: bold;
    transition: all 0.3s ease-in-out;
}

body.dark-mode .navbar .navbar-brand h1,
body.dark-mode .navbar .navbar-brand span {
    background: linear-gradient(to right, yellow, red);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

body.dark-mode .navbar-toggler-icon {
    background: linear-gradient(to right, yellow, red);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.gradient-text {
    background: linear-gradient(90deg, #ff0000, #0000ff); 
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent; 
  }
  .btn-gradient {
    background-color: #ffffff;
    border: 2px solid transparent;
    border-image: linear-gradient(90deg, #ff0000, #0000ff); 
    border-image-slice: 1;
    padding: 0.5rem 1rem;
    transition: 0.3s ease-in-out;
    position: relative;
    overflow: hidden;
  }

  .btn-gradient:hover {
    background: linear-gradient(90deg, #ff0000, #0000ff); 
    color: white;
    border-color: transparent;
  }

  .btn-gradient:active {
    background-color: white;
    color: black;
    border: 2px solid #ccc;
  }


    
    ::-webkit-scrollbar {
        display: none;
    }
    .navbar {
        font-family: 'Bricolage Grotesque', sans-serif;
    }
    .nav-link {
      margin-left: 20px;
      text-transform: uppercase;
      font-weight: bold;
    }
    .navbar .navbar-nav .nav-link {
      color: white !important;
    }
    .navbar .navbar-nav .nav-link:hover {
      color: #f8f9fa !important;
    }

    .nav-link.active {
        border-bottom: 3px solid #ffcc00; 
    }

    .navbar-nav .nav-item .dropdown-toggle::after {
        content: '\25BC'; 
        font-size: 0.5em;       
        padding-left: 5px;
        transition: transform 0.3s ease-in-out; 
    }

    .nav-item.dropdown.show .dropdown-toggle::after {
        transform: rotate(180deg); 
    }
    
    @media (max-width: 991px) {
        .navbar-nav {
            text-align: center;
    }
    
    .navbar-nav .dropdown-menu {
        background-color: #3b3b3b; 
        border-radius: 5px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        width: 100%; 
    }

    .navbar-nav .dropdown-menu .dropdown-item {
        color: white;
        padding: 10px;
    }

    .navbar-nav .dropdown-menu .dropdown-item:hover {
        background-color: #a51212; 
    }


    .navbar-toggler {
        border-color: #a51212;
    }

    .navbar-toggler-icon {
        background-color: white;
    }

    .nav-item.dropdown .nav-link {
        display: block;
    }
}

    header {
      background: url('https://www.pariamankota.com/images/hero-bg.svg') no-repeat center center fixed;
      background-size: cover;
      color: white;
      text-align: center;
      padding: 100px 0;
    }
    header {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        text-align: center;
    }

    header img {
        height: 150px;
        transition: transform 0.3s ease;
    }

    header img:hover {
        transform: scale(1.1); 
    }

    header h1 {
        margin: 0;
    }
    .section-header {
      font-size: 36px;
      font-weight: 600;
      color: #333;
      margin-bottom: 30px;
    }
    .headline-news {
    background-color: #fff; 
    padding: 40px 0; 
}

    .headline-title {
        background: linear-gradient(to right, red, blue); 
        color: white;
        padding: 10px 30px;
        border-radius: 5px;
        display: inline-block;
    }

    .news-item {
        margin-bottom: 30px; 
    }

    .news-item img {
        object-fit: cover;
        width: 100%;
        height: 250px; 
    }

    .news-content {
        padding: 15px;
    }

    .news-content .badge {
        font-size: 0.875rem;
    }

    .news-content h4 {
        font-size: 1.125rem;
    }

    .news-content p {
        font-size: 1rem;
        line-height: 1.6;
    }


    #typewriter {
    position: relative;
    display: inline-block;
    }

    #typewriter:after {
        content: '|';  
        position: absolute;
        right: 0;
        animation: blink 1s step-end infinite;
    }

    @keyframes blink {
        50% {
            opacity: 0;
        }
    }

    footer {
      background: #000;
      color: white;
      text-align: center;
      padding: 20px;
    }
    footer {
        font-size: 0.9rem;
        line-height: 1.6;
    }

    .menu-info h5 {
        margin-bottom: 1rem;
    }

    .menu-info ul {
        padding-left: 0;
        margin-bottom: 1.5rem;
    }

    .menu-info ul li {
        list-style: none;
    }

    .menu-info a {
        display: block;
        text-align: left;
        color: #f8f9fa;
    }

    footer h5 {
        color: #f8f9fa;
        margin-bottom: 1rem;
        text-align: left;
    }

    footer a {
        transition: color 0.3s ease;
    }

    footer a:hover {
        color: #ffc107;
    }

    footer .border-light {
        border-color: rgba(255, 255, 255, 0.2);
    }

    footer iframe {
        border-radius: 8px;
    }

    .gradient-footer {
        background: linear-gradient(to right, red, blue);
        color: white;
        padding: 10px 0;
        width: 100%;
        position: relative;
        left: 0;
    }

    .gradient-footer p {
        margin: 0;
        font-size: 1rem;
        font-weight: light;
    }

    .col-md-4 ul {
        text-align: left;
        padding-left: 0;
    }

    .col-md-4 ul li i {
        color: #ffc107;
    }
    html {
      scroll-behavior: smooth;
    }
    .card img {
    height: 200px;
    object-fit: cover;
    }
    .card-title {
        font-size: 1.25rem;
        font-weight: 600;
    }
    .card-text {
        font-size: 0.9rem;
        color: #6c757d;
    }
    .card {
    width: 90%; 
    max-width: 300px; 
    margin: 0 auto; 
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .card img {
        height: 150px;
        object-fit: cover; 
        transition: transform 0.3s ease, filter 0.3s ease;
    }

    .card:hover img {
        transform: scale(1.05);
        filter: brightness(0.9);
    }

    .card-body {
        transition: background-color 0.3s ease;
    }

    .card:hover .card-body {
        background-color: #f8f9fa;
    }

    

    .carousel-inner img {
    border-radius: 20px;
    filter: brightness(0.8);
    transition: filter 0.5s ease-in-out;
    }

    .carousel-inner img:hover {
        filter: brightness(1);
    }

    .carousel-caption {
        background: rgba(0, 0, 0, 0.5);
        padding: 20px;
        border-radius: 10px;
        animation: fadeIn 1s ease-in-out;
    }

    .carousel-thumbnails button {
        margin: 0 5px;
        border: none;
        transition: transform 0.3s ease;
    }

    .carousel-thumbnails button img {
        border: 2px solid transparent;
        width: 80px;
        height: auto;
    }

    .carousel-thumbnails button.active img,
    .carousel-thumbnails button:hover img {
        border: 2px solid #007bff;
        transform: scale(1.1);
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(1);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    @media (max-width: 768px) {
    .carousel-caption {
        font-size: 14px;
        padding: 10px;
    }

    .carousel-thumbnails button img {
        width: 60px;
    }
}
    .carousel-image {
        height: 100vh;
        object-fit: cover;
        filter: brightness(70%);
        transition: transform 0.8s ease-in-out, filter 0.8s ease-in-out;
    }

    .carousel-item.active .carousel-image {
        transform: scale(1.05);
        filter: brightness(100%);
        transition: transform 0.8s ease-in-out, filter 0.8s ease-in-out;
    }

    .carousel-caption {
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8);
    }

    .overlay {
        position: relative;
    }

    .overlay::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8));
        z-index: 1;
    }

    .carousel-caption {
        position: absolute;
        z-index: 2;
        bottom: 10%;
        left: 5%;
        right: 5%;
    }

    .carousel-caption h2 {
        animation: fadeInUp 1s ease-in-out;
    }

    .carousel-caption p {
        animation: fadeInUp 1.5s ease-in-out;
    }

    .carousel-caption .btn {
        animation: fadeInUp 2s ease-in-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .carousel-indicators button {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.7);
    }

    .carousel-indicators .active {
        background-color: rgba(255, 255, 255, 1);
        width: 16px;
        height: 16px;
        transition: all 0.3s ease;
    }

    .carousel-indicators button:hover {
        background-color: rgba(255, 255, 255, 0.9);
        transform: scale(1.1);
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        opacity: 0.8;
    }

    .hover-news {
        transition: all 0.3s ease-in-out;
        padding: 10px;
        border-radius: 8px;
        position: relative;
        cursor: pointer;
    }

    .hover-news:hover {
        background-color: #f8f9fa;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
    }

    .hover-news img {
        transition: transform 0.3s ease-in-out;
    }

    .hover-news:hover img {
        transform: scale(1.2);
    }

    .hover-news small {
        transition: color 0.3s ease-in-out;
    }

    .hover-news:hover small {
        color: #007bff;
    }

    .hover-news p {
        font-weight: bold;
        transition: color 0.3s ease-in-out;
    }

    .hover-news:hover p {
        color: #333;
    }

    .hover-news:hover {
        background-color: #f0f0f0;
        transform: scale(1.05);
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .agenda-container {
        min-height: 400px; 
        width: 100%;  
    }
    .agenda-item {
        margin-bottom: 20px; 
    }
    .agenda-item button {
        width: 100%; 
    }
    .collapse {
        margin-top: 10px;
    }
    .card {
        max-width: 100%;  
        width: 100%;
    }
    .agenda-item:nth-child(1) {
        animation-delay: 0.2s;
    }

    .agenda-item:nth-child(2) {
        animation-delay: 0.4s;
    }

    .agenda-item:nth-child(3) {
        animation-delay: 0.6s;
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    .agenda-container {
        background: rgba(255, 255, 255, 0.2);  
        backdrop-filter: blur(10px); 
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: rgba(0, 0, 0, 0.6); 
    }
    .custom-bg {
        background: radial-gradient(circle, #d0f4f9, #f9faff, #fffceb, #fde7c5);
        height: 100vh;
        padding: 50px 0; 
    }


    .custom-bg {
        background: radial-gradient(circle, #d0f4f9, #f9faff, #fffceb, #fde7c5);
        height: auto; 
        padding: 50px 0; 
        position: relative; 
    }


    .custom-border, .custom-border-bottom {
        position: absolute;
        left: 0;
        width: 100%; 
        height: 10px; 
        background: linear-gradient(90deg, #007bff, #ffff00); 
        border-radius: 0px; 
    }


    .custom-border {
        top: 0;
    }

    .custom-border-bottom {
        bottom: 0;
    }
    
    #agenda-pengumuman h2 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 40px;
        background: linear-gradient(70deg, red, black);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        text-align: center;
    }

    .hover-news {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-news:hover {
        transform: translateY(-10px); 
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); 
    }

    .card-header {
        color: #fff;
    }

    .card {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-body p,
    .card-body small {
        color: #333;
    }
    .bg-warning {
    background-color: #fdfd96 !important; 
    position: relative;
    overflow: visible;
    }

    .container.bg-warning img {
    transition: transform 0.3s ease-in-out;
    }

    .container.bg-warning img:hover {
    transform: scale(1.05); 
    }

    .btn-danger {
    transition: all 0.3s ease-in-out;
    }

    .btn-danger:hover {
    background-color: #d63c3c;
    transform: scale(1.05);
    }

    img {
    max-width: 100%;
    height: auto;
    }

    .icon-container {
        display: inline-block;
        padding: 10px;
        background: #f8f9fa;
        border-radius: 50%;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .vertical-line {
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        width: 2px;
        background-color: #ddd;
        margin: auto;
    }

    .vertical-line:last-child {
        display: none;
    }

    h5 {
        margin-bottom: 15px;
    }

    .custom-modal-animation .modal-dialog {
        transform: translateY(-100px);
        opacity: 0;
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    .custom-modal-animation.show .modal-dialog {
        transform: translateY(0);
        opacity: 1;
    }
    .carousel-container {
            position: relative;
            margin: 30px auto;
            padding: 30px;
            background: linear-gradient(to bottom, #f0f8ff, #ffffff);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

    .carousel-title {
        margin-top: 20px;
        font-size: 2.5rem;
        font-weight: bold;
        color: #007bff;
        text-align: center;
        margin-bottom: 20px;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    }

    .carousel-inner {
        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;
        gap: 15px;
    }

    .card {
        min-width: 280px;
        max-width: 280px;
        margin: 10px;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .card img {
        height: 180px;
        object-fit: cover;
        border-radius: 15px 15px 0 0;
    }

    .card-body {
        padding: 15px;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 8px;
    }

    .card-text {
        font-size: 1rem;
        color: #555;
        margin-bottom: 12px;
    }

    .btn-outline-primary {
        border-radius: 25px;
        font-size: 0.875rem;
        color: #007bff;
        border: 1px solid #007bff;
        transition: all 0.3s ease-in-out;
    }

    .btn-outline-primary:hover {
        background-color: #007bff;
        color: #fff;
        box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 123, 255, 0.7);
        border-radius: 50%;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    .carousel-control-prev-icon:hover,
    .carousel-control-next-icon:hover {
        background-color: #007bff;
    }

    .custom-border {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 20px;
        background: linear-gradient(90deg, #007bff, #ffff00);
        border-radius: 0;
    }
    #features .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: none;
    border-radius: 8px;
    overflow: hidden;
  }

    #features .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    #features .card-title {
        font-size: 1.2rem;
        font-weight: bold;
        color: #343a40;
    }

    #features .card-text {
        font-size: 0.95rem;
        color: #6c757d;
    }

    #features .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-weight: 500;
        font-size: 0.95rem;
        text-transform: uppercase;
        padding: 0.5rem 1rem;
        transition: background-color 0.3s ease;
    }

    #features .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    #features img {
        height: 200px;
        object-fit: cover;
        border-radius: 8px 8px 0 0;
    }
    .infografis-card {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
    }

    .infografis-card img {
        width: 100%;
        height: auto;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .infografis-card:hover img {
        transform: scale(1.1);
    }

    .infografis-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7));
        color: #ffffff;
        opacity: 0;
        transition: opacity 0.3s ease;
        text-align: center;
        padding: 20px;
    }

    .infografis-card:hover .infografis-overlay {
        opacity: 1;
    }

    .infografis-overlay h5 {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .infografis-overlay p {
        font-size: 0.9rem;
        margin-bottom: 15px;
    }

    .infografis-overlay a {
        text-decoration: none;
        border: 1px solid #ffffff;
        padding: 5px 10px;
        border-radius: 5px;
        transition: background 0.3s, color 0.3s;
    }

    .infografis-overlay a:hover {
        background: #ffffff;
        color: #000000;
    }
    .list-group-item {
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    color: #555;
    transition: all 0.3s ease;
    }
    .list-group-item:hover {
        background-color: #f5f5f5;
        color: #a51212;
    }
    .list-group-item.active {
        background-color: #a51212;
        color: white !important;
        font-weight: bold;
    }
    .horizontal-layout {
        display: flex; 
        flex-wrap: wrap; 
        justify-content: center; 
        gap: 40px;
        padding: 16px;
    }

    .service-card {
        flex: 0 1 calc(25% - 16px); 
        max-width: 250px; 
    }

    .service-card .card {
        height: 100%; 
    }

    .service-card img {
        object-fit: cover;
        height: 150px; 
        width: 100%; 
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between; 
        height: 100%; 
    }

    @media (max-width: 768px) {
        .service-card {
            flex: 0 1 calc(50% - 16px); 
        }
    }

    @media (max-width: 480px) {
        .service-card {
            flex: 0 1 calc(100% - 16px); 
        }
    }
    
    
    

  </style>
</head>
<body>
  @include('partials.navbar')
  @yield('content')
  @include('partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    const modernCarousel = document.getElementById('modernCarousel');
  $(document).ready(function () {
      var path = window.location.pathname;
      $('.navbar-nav .nav-item a').each(function () {
          if ($(this).attr('href') === path) {
              $(this).addClass('active');
          }
      });
  });
  if (localStorage.getItem('dark-mode') === 'enabled') {
        document.body.classList.add('dark-mode');
    }
  
  
  </script>
</body>
</html>
