
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow" />
  <title>Qazi SMS Bomber</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      background: linear-gradient(135deg, #000000, #1a1a1a);
      color: #00fff7;
      font-family: 'Orbitron', sans-serif;
      text-align: center;
      padding: 60px 20px;
      background-attachment: fixed;
      background-size: cover;
      overflow-x: hidden;
    }

    h1 {
      font-size: 36px;
      margin-bottom: 30px;
      text-shadow: 0 0 10px #00fff7;
      animation: glow 2s infinite;
    }

    @keyframes glow {
      0% { text-shadow: 0 0 10px #00fff7; }
      50% { text-shadow: 0 0 20px #00fff7, 0 0 30px #00ffee; }
      100% { text-shadow: 0 0 10px #00fff7; }
    }

    input[type="text"] {
      padding: 12px;
      width: 300px;
      border: none;
      border-radius: 8px;
      outline: none;
      margin-bottom: 20px;
      background-color: #1f1f1f;
      color: #00fff7;
      font-size: 16px;
      box-shadow: 0 0 10px #00fff766;
      transition: 0.3s;
    }

    input[type="text"]:focus {
      box-shadow: 0 0 15px #00ffee;
    }

    button {
      padding: 12px 30px;
      background-color: #00fff7;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
      color: #000;
      box-shadow: 0 0 10px #00fff7;
    }

    button:hover {
      background-color: #0ff;
      transform: scale(1.05);
      box-shadow: 0 0 20px #00ffee;
    }

    button:disabled {
      background-color: #666;
      cursor: not-allowed;
      box-shadow: none;
    }

    .log {
      margin-top: 30px;
      font-size: 16px;
      text-shadow: 0 0 5px #00fff7;
    }

    .channel-btn {
      margin-top: 20px;
      display: inline-block;
      background: #0ff;
      padding: 12px 20px;
      color: #000;
      font-weight: bold;
      text-decoration: none;
      border-radius: 10px;
      transition: 0.3s;
      box-shadow: 0 0 10px #00fff7;
    }

    .channel-btn:hover {
      background-color: #00ffee;
      transform: scale(1.05);
      box-shadow: 0 0 20px #00ffee;
    }

    .footer {
      margin-top: 50px;
      font-size: 16px;
      color: #ccc;
      background: #0b0f2c;
      padding: 30px 20px;
      border-top: 2px solid #00ffee;
      box-shadow: 0 -3px 20px #00ffee66;
      animation: pulse 3s infinite;
      border-radius: 20px 20px 0 0;
    }

    @keyframes pulse {
      0% { box-shadow: 0 0 10px #00ffee; }
      50% { box-shadow: 0 0 30px #00ffee; }
      100% { box-shadow: 0 0 10px #00ffee; }
    }

    @media (max-width: 768px) {
      body {
        padding: 30px 10px;
      }

      h1 {
        font-size: 28px;
      }

      input[type="text"], button {
        width: 90%;
        font-size: 14px;
      }

      .log {
        font-size: 14px;
        padding: 10px;
      }

      .footer {
        padding: 20px 10px;
      }

      .channel-btn {
        display: block;
        margin: 10px auto;
        width: 80%;
        font-size: 14px;
      }
    }

    .spinner-overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.8);
      z-index: 9999;
      justify-content: center;
      align-items: center;
    }

    .spinner {
      font-size: 50px;
      color: #00fff7;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
  </style>
</head>
<body>

  <div class="spinner-overlay" id="spinnerOverlay">
    <i class="fas fa-spinner spinner"></i>
  </div>

  <h1>Qazi SMS Bomber</h1>

  <form id="bombingForm" method="get" onsubmit="startBombing(event)">
    <input type="text" name="num" id="numInput" placeholder="Enter Phone Number" required /><br>
    <button type="submit" id="bombButton">Start Bombing</button>
  </form>

  <div class="log">
    Developed by <strong>Qazi </strong>
  </div>

  <a class="channel-btn" href="https://wa.me/+923319198321" target="_blank">Join Our WhatsApp Channel</a>
  <a class="channel-btn" href="https://t.me/" target="_blank">Join Our Telegram Channel</a>

  <div class="footer">
    © 2025 All Rights Reserved — <strong>Qazi</strong>
  </div>

  <script>
    function startBombing(event) {
      event.preventDefault();
      const form = document.getElementById('bombingForm');
      const bombButton = document.getElementById('bombButton');
      const spinnerOverlay = document.getElementById('spinnerOverlay');
      const numInput = document.getElementById('numInput').value;

      if (!/^\d+$/.test(numInput)) {
        Swal.fire({title: 'Invalid Input!', text: 'Please enter a valid phone number (digits only).', icon: 'error', confirmButtonColor: '#00fff7'});
        return;
      }

      bombButton.disabled = true;
      spinnerOverlay.style.display = 'flex';

      // Submit form and reload
      form.submit();
    }

          document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('spinnerOverlay').style.display = 'none';
        document.getElementById('bombButton').disabled = false;
        Swal.fire({
                title: 'Bombing Successful! 🎉🔥',
                html: '<div style="color: #00fff7; text-shadow: 0 0 10px #00ffee;">Successfully sent <b>100 OTPs</b> to <b>03319198321</b>! 🚀<br><i>Powered by Qazi</i></div>',
                icon: 'success',
                confirmButtonColor: '#00fff7',
                showConfirmButton: true,
                timer: 5000,
                backdrop: 'rgba(0, 0, 0, 0.8)',
                customClass: { popup: 'animated bounceIn' }
            });      });
      </script>
</body>
</html>
