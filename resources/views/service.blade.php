<!DOCTYPE html>
<html lang="id">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Layanan Arsitek</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>
      /* Custom Style for Google Translate Widget */

      .card {
         border: none;
         border-radius: 15px;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
         transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .card:hover {
         transform: translateY(-10px);
         box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
      }

      .card-title {
         font-size: 1.25rem;
         font-weight: 600;
         color: #333;
      }

      .card-text {
         font-size: 1rem;
         color: #555;
      }

      .price {
         font-weight: 700;
         font-size: 1.1rem;
         color: #007BFF;
      }

      .container {
         padding-top: 50px;
         padding-bottom: 50px;
      }

      .header {
         margin-bottom: 40px;
      }

      .card-body {
         padding: 25px;
      }

      /* Style for Google Translate widget */
      .goog-te-banner-frame.skiptranslate {
         display: none !important;
      }

      .goog-te-gadget {
         padding: 5px 15px;
         font-size: 14px;
      }

      #google_translate_element {
         position: absolute;
         top: 20px;
         right: 20px;
         z-index: 999;
      }

      #google_translate_element {
         position: absolute;
         top: 20px;
         right: 20px;
         z-index: 999;
         font-size: 14px;
      }

      /* Basic structure for the gadget */
      .goog-te-gadget {
         background-color: #007bff !important;
         /* Blue background */
         border-radius: 8px !important;
         padding: 8px 15px !important;
         display: flex !important;
         justify-content: space-between !important;
         align-items: center !important;
         color: #fff !important;
         font-size: 14px !important;
         cursor: pointer !important;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1) !important;
         transition: background-color 0.3s ease, transform 0.3s ease !important;
      }

      /* Hover effect on gadget */
      .goog-te-gadget:hover {
         background-color: #0056b3 !important;
         /* Darker blue on hover */
         transform: translateY(-2px) !important;
      }

      /* Icon styles */
      .goog-te-gadget-icon {
         width: 20px !important;
         height: 20px !important;
         background-image: url("https://translate.googleapis.com/translate_static/img/te_ctrl3.gif") !important;
         background-position: -65px 0px !important;
         margin-right: 10px !important;
      }

      /* Text styles inside the gadget */
      .goog-te-gadget-simple span {
         vertical-align: middle !important;
      }

      /* Dropdown indicator (arrow) */
      .goog-te-gadget-simple span[aria-hidden="true"] {
         font-size: 16px !important;
         margin-left: 10px !important;
         color: rgba(255, 255, 255, 0.7) !important;
      }

      /* Language dropdown background and hover effects */
      .goog-te-menu2 {
         background-color: #007bff !important;
         border-radius: 8px !important;
         border: none !important;
         box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1) !important;
      }

      /* Menu items */
      .goog-te-menu2-item {
         color: white !important;
         padding: 10px 15px !important;
         font-size: 14px !important;
         text-align: center !important;
         border-bottom: 1px solid #ddd !important;
      }

      /* Hover effect on menu items */
      .goog-te-menu2-item:hover {
         background-color: #0056b3 !important;
         cursor: pointer !important;
      }

      .goog-te-menu2-item:last-child {
         border-bottom: none !important;
      }
   </style>
</head>

<body>
   <!-- Google Translate Widget -->
   <div id="google_translate_element"></div>

   <div class="container">
      <div class="header text-center">
         <h1 class="display-4 text-primary">Layanan Arsitek</h1>
         <p class="lead text-muted">Pilihan layanan terbaik untuk kebutuhan desain dan konstruksi Anda.</p>
      </div>

      <div class="row g-4">
         @foreach ($services as $service)
            <div class="col-md-4">
               <div class="card">
                  <img src="https://via.placeholder.com/350x250" class="card-img-top"
                     alt="Image for {{ $service->name }}">
                  <div class="card-body">
                     <h5 class="card-title">{{ $service->name }}</h5>
                     <p class="card-text">{{ Str::limit($service->description, 100) }}</p>
                     <p class="price">Harga: Rp {{ number_format($service->price, 2, ',', '.') }}</p>
                     <a href="#" class="btn btn-primary mt-3">Lihat Detail</a>
                  </div>
               </div>
            </div>
         @endforeach
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

   <!-- Google Translate API Script -->
   <script type="text/javascript">
      function googleTranslateElementInit() {
         new google.translate.TranslateElement({
            pageLanguage: 'id',
            includedLanguages: 'en,id', // Add other languages as needed
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
         }, 'google_translate_element');
      }

      window.addEventListener('load', function() {
         setTimeout(function() {
            // Apply custom styles once the Google Translate widget has loaded
            var translateElement = document.getElementById('google_translate_element');
            if (translateElement) {
               translateElement.style.backgroundColor = '#007bff'; // Apply your styles
            }
         }, 1000); // Wait for 1 second to ensure the widget has loaded
      });
   </script>

   <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
   </script>
</body>

</html>
