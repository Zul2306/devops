<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Welcome</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .dashboard-container {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      border-radius: 24px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
      padding: 40px;
      max-width: 500px;
      width: 100%;
      text-align: center;
      position: relative;
      overflow: hidden;
      animation: slideUp 0.8s ease-out;
    }

    .dashboard-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #667eea, #764ba2, #f093fb, #f5576c);
      background-size: 400% 400%;
      animation: gradientShift 3s ease infinite;
    }

    .welcome-icon {
      width: 80px;
      height: 80px;
      background: linear-gradient(135deg, #667eea, #764ba2);
      border-radius: 50%;
      margin: 0 auto 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 32px;
      color: white;
      animation: pulse 2s infinite;
    }

    h1 {
      color: #2d3748;
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 8px;
      background: linear-gradient(135deg, #667eea, #764ba2);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .user-info {
      background: linear-gradient(135deg, #f8f9ff, #e8f0fe);
      border-radius: 16px;
      padding: 24px;
      margin: 24px 0;
      border: 1px solid rgba(102, 126, 234, 0.1);
    }

    .info-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 16px;
      last-child: margin-bottom: 0;
    }

    .info-item:last-child {
      margin-bottom: 0;
    }

    .info-label {
      font-weight: 600;
      color: #4a5568;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .info-value {
      color: #2d3748;
      font-weight: 500;
      background: white;
      padding: 6px 12px;
      border-radius: 8px;
      border: 1px solid rgba(102, 126, 234, 0.1);
    }

    .logout-form {
      margin-top: 32px;
    }

    .logout-btn {
      background: linear-gradient(135deg, #f5576c, #f093fb);
      color: white;
      border: none;
      padding: 14px 32px;
      border-radius: 12px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(245, 87, 108, 0.3);
      position: relative;
      overflow: hidden;
    }

    .logout-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
      transition: left 0.5s;
    }

    .logout-btn:hover::before {
      left: 100%;
    }

    .logout-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(245, 87, 108, 0.4);
    }

    .logout-btn:active {
      transform: translateY(0);
    }

    .stats-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin: 24px 0;
    }

    .stat-card {
      background: white;
      padding: 20px;
      border-radius: 12px;
      border: 1px solid rgba(102, 126, 234, 0.1);
      text-align: center;
      transition: transform 0.3s ease;
    }

    .stat-card:hover {
      transform: translateY(-4px);
    }

    .stat-number {
      font-size: 24px;
      font-weight: 700;
      color: #667eea;
      margin-bottom: 4px;
    }

    .stat-label {
      font-size: 14px;
      color: #718096;
      font-weight: 500;
    }

    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes pulse {

      0%,
      100% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.05);
      }
    }

    @keyframes gradientShift {

      0%,
      100% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }
    }

    @media (max-width: 480px) {
      .dashboard-container {
        padding: 24px;
        margin: 10px;
      }

      h1 {
        font-size: 24px;
      }

      .stats-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>
  <div class="dashboard-container">
    <div class="welcome-icon">
      👋
    </div>

    <h1>Selamat Datang, {{ Auth::user()->name }}</h1>

    <div class="user-info">
      <div class="info-item">
        <div class="info-label">
          📧 Email
        </div>
        <div class="info-value">{{ Auth::user()->email }}</div>
      </div>

      <div class="info-item">
        <div class="info-label">
          📅 Bergabung sejak
        </div>
        <div class="info-value">{{ Auth::user()->created_at->format('d M Y') }}</div>
      </div>
    </div>

    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-number">127</div>
        <div class="stat-label">Hari Aktif</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">24</div>
        <div class="stat-label">Login Bulan Ini</div>
      </div>
    </div>

    <form class="logout-form" method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="logout-btn">
        🚪 Logout
      </button>
    </form>
  </div>
</body>

</html>