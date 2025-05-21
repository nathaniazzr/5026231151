<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kosaku Linktree</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #e5dece;
      font-family: 'DM Sans', sans-serif;
      color: #5c3921;
      text-align: center;
      font-size: 10px;
      font-weight: 300;
    }
    .logo img {
      width: 100px;
      margin-top: 40px;
    }
    .username {
      font-weight: bold;
      font-size: 1.5rem;
      margin-top: 15px;
      margin-bottom: 25px;
    }
    .link-box {
    position: relative;
    background-color: #e5dece;
    border: 2px solid #5c3921;
    border-radius: 50px;
    padding: 14px 20px;
    margin: 15px auto;
    max-width: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    color: #714528;
    transition: background 0.3s, color 0.3s;
    font-size: 1rem;
    }
    .link-box img {
    position: absolute;
    left: 25px; /* jarak dari kiri */
    width: 30px;
    height: auto;
    }
.link-box div {
  flex: 1;
  text-align: center;
    }

    .link-box:hover {
      background-color: #5c3a21;
      color: #e5dece;
    }
    .link-box i {
      font-size: 1.5rem;
    }
    .section-title {
      margin-top: 40px;
      font-weight: bold;
      font-size: 1rem;
    }

    .linktree-wrapper {
  display: flex;
  justify-content: center;
  margin-top: 30px;
  margin-bottom: 40px;
    }

.linktree-button {
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 18px 32px;
  background-color: #ffffff;
  border-radius: 999px;
  box-shadow: 0 6px 15px rgba(0,0,0,0.1);
  font-weight: bold;
  font-size: 1rem; /* ukuran teks diperbesar */
  text-decoration: none;
  color: #000;
  transition: transform 0.2s ease;
    }

.linktree-button:hover {
  transform: scale(1.05);
    }

.linktree-button img {
    position: relative;
  width: 24px;
  height: 24px;
  margin-left: 0;
  margin-top: -10px;
    }


  </style>
</head>
<body>

  <div class="logo">
    <img src="img/logok.png" alt="Kosaku Logo">
  </div>

  <div class="username">@kosakucoffeelab</div>

  <a href="https://heyzine.com/flip-book/cef01f0b65.html" target="_blank" class="link-box">
    <div>
      <img src="img/LOL.png" alt="Menu Logo"> Kosaku CL Menu
    </div>
    <i class="bi bi-three-dots-vertical"></i>
  </a>


  <a href="https://www.google.com/maps/place/Kosaku+Coffee+Lab/@-7.2784189,112.7649477,15z/data=!4m5!3m4!1s0x0:0x6ba31702694d3eaf!8m2!3d-7.2784189!4d112.7649477?sa=X&ved=2ahUKEwiI39fFhsb7AhXR5nMBHVM3ApkQ_BJ6BAhpEAg&shorturl=1" target="_blank" class="link-box">
    <div>
      <img src="img/lokasi.png" alt="Menu Logo"> Location
    </div>
    <i class="bi bi-three-dots-vertical"></i>
  </a>


  <div class="section-title">SHOP NOW</div>


  <a href="https://www.tokopedia.com/kosakucoffee" target="_blank" class="link-box">
    <div><img src="img/toki.png" width="20"> Tokopedia</div>
    <i class="bi bi-three-dots-vertical"></i>
  </a>

  <a href="https://shopee.co.id/kosakucoffee" target="_blank" class="link-box">
    <div><img src="img/sopi.png" width="20"> Shopee</div>
    <i class="bi bi-three-dots-vertical"></i>
  </a>

  <div class="section-title">FOLLOW US</div>


  <a href="https://www.tiktok.com/@kosakucoffee" target="_blank" class="link-box">
    <div><img src="img/tt.png" width="20"> TikTok</div>
    <i class="bi bi-three-dots-vertical"></i>
  </a>


  <a href="https://www.instagram.com/kosakucoffee/" target="_blank" class="link-box">
    <div><img src="img/ig.png" width="20"> Instagram</div>
    <i class="bi bi-three-dots-vertical"></i>
  </a>


  <a href="https://www.facebook.com/kosakuindonesia" target="_blank" class="link-box">
    <div><img src="img/fb.png" width="20"> Facebook</div>
    <i class="bi bi-three-dots-vertical"></i>
  </a>


  <a href="https://api.whatsapp.com/send/?phone=6281234460168&text&type=phone_number&app_absent=0" target="_blank" class="link-box">
    <div><img src="img/wa.png" width="20"> WhatsApp</div>
    <i class="bi bi-three-dots-vertical"></i>
  </a>

  <div class="linktree-wrapper">
    <a href="https://linktr.ee/kosakucoffeelab" target="_blank" class="linktree-button">
      <img src="img/linktree.png" alt="Linktree" />
      <span>Join kosakucoffeelab on Linktree</span>
    </a>
  </div>



</body>
</html>
