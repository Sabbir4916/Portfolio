<!-- Font Awesome CDN (Add in <head> of your layout for icons) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<style>
  .footer {
    background: linear-gradient(135deg, #1f3b57, #2c4a6f);
    color: #e0e0e0;
    text-align: center;
    padding: 20px 10px;
    font-size: 15px;
    position: relative;
    z-index: 10;
  }

  .footer p {
    margin-bottom: 10px;
    font-weight: 400;
  }

  .footer .social-links {
    margin-top: 5px;
  }

  .footer .social-links a {
    color: #00bcd4;
    margin: 0 10px;
    text-decoration: none;
    transition: color 0.3s, transform 0.3s;
    font-size: 18px;
    display: inline-block;
  }

  .footer .social-links a:hover {
    color: #ffffff;
    transform: scale(1.2);
  }

  .footer .social-links i {
    margin-right: 5px;
  }
</style>

<footer class="footer">
  <div class="container">
    <p>&copy; {{ date('Y') }} Sabbir Ahmed. All rights reserved.</p>
    <div class="social-links">
      <a href="https://www.facebook.com/Sabbir.290/" target="_blank">
        <i class="fab fa-facebook-f"></i> Facebook
      </a>
      <a href="https://www.linkedin.com/in/sabbir-ahmed-65b817237/" target="_blank">
        <i class="fab fa-linkedin-in"></i> LinkedIn
      </a>
      <a href="http://Wa.me/+8801797978935" target="_blank">
        <i class="fab fa-whatsapp"></i> WhatsApp
      </a>
      <a href="https://github.com/Sabbir4916" target="_blank">
        <i class="fab fa-github"></i> GitHub
      </a>
    </div>
  </div>
</footer>
