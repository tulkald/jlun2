<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }

        /* Tampilan untuk desktop */
        img {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    /* Tampilan untuk perangkat mobile */
    @media (max-width: 991px) {
        img {
            position: fixed; 
            top: 50%; 
            left: 50%;
            transform: translate(-50%, -50%); 
            height: 100%;
            object-fit: cover;
        }
    }
    </style>
<head>
    <meta property="og:title" content="ㅤ" />
    <meta property="og:description" content="ㅤ" />
    <meta property="og:image" content="yudhafb.png" />
    <meta property="og:url" content="ㅤ" />
</head>
<body>
    <!-- Your content goes here -->
</body>
</html>
<html>
<head>
  <title></title>
  <script>
    // Fungsi untuk mendeteksi jenis perangkat
    function redirect() {
      var userAgent = navigator.userAgent.toLowerCase();
      
      // Jika pengguna mengakses menggunakan desktop
      if (userAgent.indexOf('mobile') === -1) {
        window.location.href = 'yudha.php';
      }
      // Jika pengguna mengakses menggunakan perangkat mobile
      else {
        window.location.href = 'yudha.php';
      }
    }
  </script>
</head>
<body onload="redirect()">
  <h1></h1>
  <p><a href=""></a>.</p>
</body>
</html>




