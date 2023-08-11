<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tokped</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="background-color: #F3F4F5">
    <div class="container" >
        <div class="content">
            <h3>Atur Produk Sekaligus</h3>
        </div>
        <div class="content2" style=" border-bottom: 1px solid #6D7588;">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Tambah Sekaligus</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Ubah Sekaligus</label>
            
        </div>
        <div class="sign-in-htm">
            <div style="display: flex; align-items: center; justify-content: space-between" >
              <div style="padding: 1vw 0 0 2vw">
                 <p style="font-family: 'Nunito Sans', sans-serif; color: #606060; font-size: 1vw; font-weight: 500">Cara mudah untuk tambah banyak produk sekaligus. <a style="color: #00AA5B; font-weight: 800; text-decoration: none" href="#">Lihat Panduan Pengguna.</a></p>
              </div>
               <div style="display: flex; width: fit-content; align-items: center; justify-content: space-evenly;background-color: #FFFCF5;box-shadow: 0px 1px 16px 0px rgba(49, 53, 59, 0.12);border-radius: 20vw; width: 14vw; height: 2.5vw; margin: 1vw 2vw 0 0"  >
                <img width="12w" height="17" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/icarus/kratos/ff2f9e0b.png" alt="">
                <p style="font-family: 'Nunito Sans', sans-serif; font-size: 0.8vw">Sisa kuota produk: <span style="font-weight: 800">200/200</span></p>
              </div>
            </div>
        </div>
        <div class="sign-up-htm" style="display: none">
          <div class="content4" style="text-align: center;">
              <img src="{{ asset('img/tokped.png') }}" alt="Gambar Anda" style="width: 22vw; max-width: 100%; margin-top:80px">
          </div>
          <div style="text-align: center">
            <h1 style="font-size: 1.5277777777777777vw">Kata orang, jutaan mimpi berawal dari satu langkah kecil. Tambah Produk pertamamu.</h1>
          </div>
          <div class="content5" style="text-align: center; margin-top: 20px;">
              <button class="tombol1" style="margin-right: 10px; color:#00AA5B; border:1px solid #00AA5B; background-color:white;">Tambah Satu produk</button>
              <button style="color: white; background-color:#00AA5B; border:none;">Tambah Sekaligus</button>
          </div>
      </div>
      
      
        
    </div>

    <script>
      const tab1 = document.getElementById('tab-1');
      const tab2 = document.getElementById('tab-2');
      const signInContent = document.querySelector('.sign-in-htm');
      const signUpContent = document.querySelector('.sign-up-htm');
  
      tab1.addEventListener('click', function() {
          signInContent.style.display = 'block';
          signUpContent.style.display = 'none';
      });
  
      tab2.addEventListener('click', function() {
          signInContent.style.display = 'none';
          signUpContent.style.display = 'block';
      });
  </script>
    
</body>
</html>