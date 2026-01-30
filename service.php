<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: 
                linear-gradient(rgba(255,255,255,0.85), rgba(255,255,255,0.85)),
                url("asset/image/dronradar.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            color: #333;
        }

        /* ================= NAVBAR ================= */
        .navbar {
            background-color: rgba(255,255,255,0.9);
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .navbar-brand {
            font-weight: 600;
            letter-spacing: 1px;
        }

        .nav-link {
            font-weight: 500;
        }

        /* ================= SECTION ================= */
        section {
            background-color: #f4f6f3;
            border-radius: 12px;
            margin: 40px auto;
            padding: 60px 20px;
        }

        /* ================= HERO ================= */
        #home h1 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        #home p {
            color: #555;
            margin-bottom: 40px;
        }

        /* ================= SLIDER ================= */
        .slider-container {
            width: 100%;
            overflow: hidden;
            padding: 20px 0;
        }

        .slider {
            display: flex;
            width: max-content;
            animation: slide 40s linear infinite;
        }

        .slider img {
            width: 280px;
            height: 200px;
            object-fit: cover;
            margin-right: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: transform 0.3s ease;
        }

        .slider img:hover {
            transform: scale(1.05);
        }

        /* ================= TEXT CONTENT ================= */
        h2 {
            font-weight: 600;
            margin-bottom: 15px;
        }

        p {
            line-height: 1.7;
        }

        /* ================= BUTTON ================= */
        .btn-primary {
            background-color: #5a6f5b;
            border: none;
        }

        .btn-primary:hover {
            background-color: #475a48;
        }

        /* ================= FOOTER ================= */
        footer {
            background-color: #e6e9e4;
            font-size: 14px;
        }

        /* ================= RESPONSIVE NAVBAR ================= */
        @media (max-width: 991px) {
            .navbar {
                background-color: #222;
            }

            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255,255,255,1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            }

            .nav-link {
                color: #fff !important;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <img src="asset/image/letilica_remove.png" alt="">
            <a class="navbar-brand" href="#" style="color: #515451;">LETILICA Sdn Bhd</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php" style="color: #515451;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="aboutus.php" style="color: #515451;">About</a></li>
                <li class="nav-item"><a class="nav-link" href="service.php" style="color: #515451;">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php" style="color: #515451;">Contact</a></li>
            </ul>
            </div>
        </div>
    </nav>
    <section id="services" class="py-5" style="background-color: #A4ABA2;">
        <div class="container">
            <h2 class="text-center mb-4">Our Services</h2>
            <div class="row">
				<div class="col-md-4">
					<div class="card" style="background-color: #A4ABA2;">
						<div class="card-body text-center">
							<h5 class="card-title">Web Development</h5>
							<p class="card-text">Professional website & system development.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card" style="background-color: #A4ABA2;">
					<div class="card-body text-center">
						<h5 class="card-title">Networking</h5>
						<p class="card-text">Network & server solutions.</p>
					</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card" style="background-color: #A4ABA2;">
					<div class="card-body text-center">
						<h5 class="card-title">IoT Solutions</h5>
						<p class="card-text">ESP32, automation & smart systems.</p>
					</div>
					</div>
				</div>
            </div>
        </div>
    </section>
    <footer class="text-center py-3" style="color: #515451; background-color: #A4ABA2;">
        © 2026 Letilica. All Rights Reserved.
    </footer>
<!-- Bootstrap Bundle (include Popper.js) -->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>