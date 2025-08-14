<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Welcome Back</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      overflow: hidden;
    }

    /* Animated background particles */
    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background:
        radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0px) rotate(0deg);
      }

      50% {
        transform: translateY(-20px) rotate(180deg);
      }
    }

    .login-container {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      padding: 40px;
      border-radius: 20px;
      box-shadow:
        0 25px 45px rgba(0, 0, 0, 0.1),
        0 0 0 1px rgba(255, 255, 255, 0.05) inset;
      width: 420px;
      max-width: 90vw;
      position: relative;
      animation: slideUp 0.8s ease-out;
    }

    @keyframes slideUp {
      0% {
        opacity: 0;
        transform: translateY(50px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .logo {
      text-align: center;
      margin-bottom: 30px;
    }

    .logo-icon {
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, #667eea, #764ba2);
      border-radius: 15px;
      margin: 0 auto 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 24px;
      font-weight: bold;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% {
        box-shadow: 0 0 0 0 rgba(102, 126, 234, 0.4);
      }

      70% {
        box-shadow: 0 0 0 20px rgba(102, 126, 234, 0);
      }

      100% {
        box-shadow: 0 0 0 0 rgba(102, 126, 234, 0);
      }
    }

    h2 {
      text-align: center;
      color: #333;
      font-weight: 600;
      font-size: 28px;
      margin-bottom: 10px;
    }

    .subtitle {
      text-align: center;
      color: #666;
      font-size: 16px;
      margin-bottom: 30px;
    }

    .error-message {
      background: linear-gradient(135deg, #ff6b6b, #ee5a52);
      color: white;
      padding: 12px 20px;
      border-radius: 10px;
      margin-bottom: 20px;
      text-align: center;
      font-size: 14px;
      animation: shake 0.5s ease-in-out;
    }

    @keyframes shake {

      0%,
      100% {
        transform: translateX(0);
      }

      25% {
        transform: translateX(-5px);
      }

      75% {
        transform: translateX(5px);
      }
    }

    .form-group {
      position: relative;
      margin-bottom: 25px;
    }

    .form-group i {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #666;
      font-size: 18px;
      z-index: 2;
    }

    input {
      width: 100%;
      padding: 15px 15px 15px 50px;
      border: 2px solid #e1e5e9;
      border-radius: 12px;
      font-size: 16px;
      transition: all 0.3s ease;
      background: rgba(255, 255, 255, 0.8);
      position: relative;
    }

    input:focus {
      outline: none;
      border-color: #667eea;
      background: white;
      box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
      transform: translateY(-2px);
    }

    input::placeholder {
      color: #999;
      font-weight: 400;
    }

    .login-btn {
      width: 100%;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border: none;
      padding: 16px;
      margin-top: 10px;
      border-radius: 12px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .login-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s;
    }

    .login-btn:hover::before {
      left: 100%;
    }

    .login-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
    }

    .login-btn:active {
      transform: translateY(0);
    }

    .forgot-password {
      text-align: center;
      margin-top: 20px;
    }

    .forgot-password a {
      color: #667eea;
      text-decoration: none;
      font-size: 14px;
      transition: color 0.3s ease;
    }

    .forgot-password a:hover {
      color: #764ba2;
      text-decoration: underline;
    }

    .divider {
      text-align: center;
      margin: 25px 0;
      position: relative;
      color: #666;
      font-size: 14px;
    }

    .divider::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      height: 1px;
      background: #e1e5e9;
      z-index: 1;
    }

    .divider span {
      background: rgba(255, 255, 255, 0.95);
      padding: 0 20px;
      position: relative;
      z-index: 2;
    }

    .social-login {
      display: flex;
      gap: 15px;
    }

    .social-btn {
      flex: 1;
      padding: 12px;
      border: 2px solid #e1e5e9;
      border-radius: 10px;
      background: white;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      font-weight: 500;
    }

    .social-btn:hover {
      border-color: #667eea;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .signup-link {
      text-align: center;
      margin-top: 30px;
      padding-top: 25px;
      border-top: 1px solid #e1e5e9;
      color: #666;
      font-size: 14px;
    }

    .signup-link a {
      color: #667eea;
      text-decoration: none;
      font-weight: 600;
    }

    .signup-link a:hover {
      text-decoration: underline;
    }

    /* Responsive design */
    @media (max-width: 480px) {
      .login-container {
        padding: 30px 20px;
        margin: 20px;
      }

      h2 {
        font-size: 24px;
      }
    }
  </style>
</head>

<body>
  <div class="login-container">
    <div class="logo">
      <div class="logo-icon">L</div>
      <h2>Welcome Back</h2>
      <p class="subtitle">Sign in to your account</p>
    </div>

    @if(session('error'))
    <div class="error-message">
      {{ session('error') }}
    </div>
    @endif

    <form method="POST" action="{{ route('login.post') }}">
      @csrf

      <div class="form-group">
        <i>📧</i>
        <input type="email" name="email" placeholder="Enter your email address" required>
      </div>

      <div class="form-group">
        <i>🔒</i>
        <input type="password" name="password" placeholder="Enter your password" required>
      </div>

      <button type="submit" class="login-btn">Sign In</button>

      <div class="forgot-password">
        <a href="#">Forgot your password?</a>
      </div>
    </form>

    <div class="divider">
      <span>or continue with</span>
    </div>

    <div class="social-login">
      <button class="social-btn">
        🔍 Google
      </button>
      <button class="social-btn">
        👤 Facebook
      </button>
    </div>

    <div class="signup-link">
      Don't have an account? <a href="#">Create one here</a>
    </div>
  </div>

  <script>
    // Add some interactive functionality
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('input');
            
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'scale(1.02)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'scale(1)';
                });
            });

            // Add loading animation to login button
            const loginBtn = document.querySelector('.login-btn');
            loginBtn.addEventListener('click', function() {
                this.style.background = '#999';
                this.innerHTML = 'Signing In...';
            });
        });
  </script>
</body>

</html>