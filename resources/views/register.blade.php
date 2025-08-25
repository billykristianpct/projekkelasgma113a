<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User - 17 Agustus</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ff6b6b 0%, #ffffff 50%, #ff6b6b 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }
        
        /* Animated Background Elements */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        
        .flag-stripe {
            position: absolute;
            width: 100%;
            height: 50%;
            animation: wave 3s ease-in-out infinite;
        }
        
        .red-stripe {
            top: 0;
            background: linear-gradient(45deg, #ff4757, #ff6b7a);
            clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
        }
        
        .white-stripe {
            bottom: 0;
            background: linear-gradient(45deg, #ffffff, #f8f9fa);
            clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);
        }
        
        @keyframes wave {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(0.5deg); }
        }
        
        /* Floating Elements */
        .floating-element {
            position: absolute;
            animation: float 6s ease-in-out infinite;
            opacity: 0.1;
        }
        
        .star {
            color: #ffd700;
            font-size: 2rem;
        }
        
        .star:nth-child(1) { top: 10%; left: 10%; animation-delay: 0s; }
        .star:nth-child(2) { top: 20%; right: 15%; animation-delay: 1s; }
        .star:nth-child(3) { bottom: 30%; left: 20%; animation-delay: 2s; }
        .star:nth-child(4) { bottom: 10%; right: 10%; animation-delay: 3s; }
        .star:nth-child(5) { top: 50%; left: 5%; animation-delay: 4s; }
        .star:nth-child(6) { top: 70%; right: 5%; animation-delay: 5s; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-20px) rotate(120deg); }
            66% { transform: translateY(-10px) rotate(240deg); }
        }
        
        /* Main Container */
        .main-container {
            position: relative;
            z-index: 10;
            padding-top: 50px;
        }
        
        .form-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 
                0 20px 40px rgba(255, 71, 87, 0.3),
                0 10px 20px rgba(0, 0, 0, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 40px;
            margin: 20px 0;
            animation: slideInUp 1s ease-out;
        }
        
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .form-title {
            color: #ff4757;
            font-weight: 700;
            text-align: center;
            margin-bottom: 10px;
            font-size: 2rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
            animation: titlePulse 2s ease-in-out infinite;
        }
        
        .independence-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-weight: 300;
            font-size: 1rem;
        }
        
        @keyframes titlePulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .form-group {
            margin-bottom: 25px;
            animation: fadeInLeft 1s ease-out;
            animation-fill-mode: both;
        }
        
        .form-group:nth-child(1) { animation-delay: 0.2s; }
        .form-group:nth-child(2) { animation-delay: 0.4s; }
        .form-group:nth-child(3) { animation-delay: 0.6s; }
        .form-group:nth-child(4) { animation-delay: 0.8s; }
        
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 12px 15px;
            transition: all 0.3s ease;
            font-size: 14px;
            background: rgba(255, 255, 255, 0.9);
        }
        
        .form-control:focus {
            border-color: #ff4757;
            box-shadow: 0 0 15px rgba(255, 71, 87, 0.3);
            transform: translateY(-2px);
        }
        
        label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }
        
        label i {
            margin-right: 8px;
            color: #ff4757;
            width: 20px;
        }
        
        .btn-register {
            background: linear-gradient(135deg, #ff4757, #ff6b7a);
            border: none;
            border-radius: 12px;
            padding: 15px;
            font-size: 16px;
            font-weight: 600;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }
        
        .btn-register:hover {
            background: linear-gradient(135deg, #ff3742, #ff4757);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255, 71, 87, 0.4);
        }
        
        .btn-register::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }
        
        .btn-register:hover::before {
            left: 100%;
        }
        
        .alert-success {
            background: linear-gradient(135deg, #2ecc71, #27ae60);
            border: none;
            border-radius: 12px;
            color: white;
            animation: slideInDown 0.5s ease-out;
        }
        
        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .login-link {
            text-align: center;
            margin-top: 25px;
            animation: fadeIn 2s ease-out;
        }
        
        .login-link a {
            color: #ff4757;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .login-link a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #ff4757;
            transition: width 0.3s ease;
        }
        
        .login-link a:hover::after {
            width: 100%;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        hr {
            border: none;
            height: 2px;
            background: linear-gradient(to right, #ff4757, rgba(255, 71, 87, 0.3), #ff4757);
            margin: 30px 0;
            border-radius: 2px;
        }
        
        /* Indonesia Flag Animation */
        .flag-animation {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 60px;
            height: 40px;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            animation: flagWave 4s ease-in-out infinite;
        }
        
        .flag-red {
            width: 100%;
            height: 50%;
            background: #ff4757;
        }
        
        .flag-white {
            width: 100%;
            height: 50%;
            background: #ffffff;
        }
        
        @keyframes flagWave {
            0%, 100% { transform: rotate(-2deg); }
            50% { transform: rotate(2deg); }
        }
        
        /* Fireworks Effect */
        .firework {
            position: absolute;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            animation: firework 3s ease-out infinite;
        }
        
        .firework:nth-child(1) { background: #ff4757; top: 15%; left: 15%; animation-delay: 0s; }
        .firework:nth-child(2) { background: #ffd700; top: 25%; right: 20%; animation-delay: 0.5s; }
        .firework:nth-child(3) { background: #ff4757; bottom: 35%; left: 25%; animation-delay: 1s; }
        .firework:nth-child(4) { background: #ffffff; bottom: 15%; right: 15%; animation-delay: 1.5s; }
        
        @keyframes firework {
            0% {
                transform: scale(0) rotate(0deg);
                opacity: 1;
            }
            20% {
                transform: scale(1) rotate(90deg);
                opacity: 1;
            }
            100% {
                transform: scale(2) rotate(360deg);
                opacity: 0;
            }
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .form-container {
                margin: 10px;
                padding: 25px;
            }
            
            .form-title {
                font-size: 1.5rem;
            }
            
            .flag-animation {
                width: 40px;
                height: 26px;
                top: 10px;
                right: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Background Animation -->
    <div class="bg-animation">
        <div class="flag-stripe red-stripe"></div>
        <div class="flag-stripe white-stripe"></div>
        
        <!-- Floating Stars -->
        <div class="floating-element star">⭐</div>
        <div class="floating-element star">⭐</div>
        <div class="floating-element star">⭐</div>
        <div class="floating-element star">⭐</div>
        <div class="floating-element star">⭐</div>
        <div class="floating-element star">⭐</div>
        
        <!-- Fireworks -->
        <div class="firework"></div>
        <div class="firework"></div>
        <div class="firework"></div>
        <div class="firework"></div>
    </div>
    
    <!-- Indonesia Flag -->
    <div class="flag-animation">
        <div class="flag-red"></div>
        <div class="flag-white"></div>
    </div>
    
    <div class="container main-container">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-container">
                <h2 class="form-title">🇮🇩 FORM REGISTER USER 🇮🇩</h2>
                <p class="independence-subtitle">Selamat Hari Kemerdekaan Indonesia ke-80!</p>
                <hr>
                  @if
                <div class="alert alert-success" style="display: none;" id="successAlert">
                    <i class="fa fa-check-circle"></i> Registrasi berhasil! Merdeka! 🎉
                </div>
                @endif
                   <form action="{{ route('registerproses') }}" method="post">
                         @csrf
                <form id="registerForm">
                    <div class="form-group">
                        <label><i class="fa fa-envelope"></i> Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email Anda" required>
                    </div>
                    
                    <div class="form-group">
                        <label><i class="fa fa-user"></i> Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username Anda" required>
                    </div>
                    
                    <div class="form-group">
                        <label><i class="fa fa-key"></i> Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password yang Kuat" required>
                    </div>
                    
                    <div class="form-group">
                        <label><i class="fa fa-address-book"></i> Role</label>
                        <input type="text" name="role" class="form-control" placeholder="Role (Opsional)">
                    </div>
                    
                    <button type="submit" class="btn btn-register">
                        <i class="fa fa-user"></i> DAFTAR SEKARANG - MERDEKA!
                    </button>
                    
                    <hr>
                    
                    <div class="login-link">
                        <p>🎌 Sudah punya akun? <a href="/login">Login Di Sini!</a> 🎌</p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Form submission animation
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const button = document.querySelector('.btn-register');
            const originalText = button.innerHTML;
            
            button.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Mendaftarkan...';
            button.disabled = true;
            
            setTimeout(() => {
                document.getElementById('successAlert').style.display = 'block';
                button.innerHTML = '<i class="fa fa-check"></i> BERHASIL TERDAFTAR! 🎉';
                
                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.disabled = false;
                    document.getElementById('successAlert').style.display = 'none';
                    document.getElementById('registerForm').reset();
                }, 3000);
            }, 2000);
        });
        
        // Add input focus effects
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });
        
        // Dynamic background color change
        let colorPhase = 0;
        setInterval(() => {
            colorPhase += 0.01;
            const red = Math.sin(colorPhase) * 20 + 255;
            const white = Math.sin(colorPhase + Math.PI) * 10 + 245;
            
            document.querySelector('.red-stripe').style.background = 
                `linear-gradient(45deg, rgb(${Math.max(200, red - 50)}, 71, 87), rgb(${Math.max(200, red)}, 107, 122))`;
        }, 100);
        
        // Create floating particles
        function createParticle() {
            const particle = document.createElement('div');
            particle.style.position = 'absolute';
            particle.style.width = '3px';
            particle.style.height = '3px';
            particle.style.background = Math.random() > 0.5 ? '#ff4757' : '#ffffff';
            particle.style.borderRadius = '50%';
            particle.style.left = Math.random() * window.innerWidth + 'px';
            particle.style.top = window.innerHeight + 'px';
            particle.style.pointerEvents = 'none';
            particle.style.zIndex = '1';
            particle.style.opacity = '0.7';
            
            document.body.appendChild(particle);
            
            const animation = particle.animate([
                { transform: 'translateY(0px) rotate(0deg)', opacity: 0.7 },
                { transform: `translateY(-${window.innerHeight + 100}px) rotate(360deg)`, opacity: 0 }
            ], {
                duration: 3000 + Math.random() * 2000,
                easing: 'ease-out'
            });
            
            animation.onfinish = () => particle.remove();
        }
        
        // Create particles periodically
        setInterval(createParticle, 500);
    </script>
</body>
</html>