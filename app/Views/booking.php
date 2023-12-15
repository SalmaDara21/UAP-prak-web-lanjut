<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?= base_url('/assets/css/style_booking.css') ?>" rel="stylesheet">
    <title><?= $title ?></title>
  </head>
  <body>
    <div class="movie-container">
      <label style="color : #fea116"> Pilih Jam :</label>
      <select id="movie">
        <option value="220000">10 - 12 am</option>
        <option value="320000">1 - 3 pm</option>
        <option value="250000">4 - 6 pm</option>
        <option value="360000">8 - 10 pm</option>
      </select>
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small style="color : #fea116">Available</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small style="color : #fea116">Selected</small>
      </li>
      <li>
        <div class="seat sold"></div>
        <small style="color : #fea116">Sold</small>
      </li>
    </ul>
    <div class="container">
    <label style="color : #fea116 ; font-size: 13px ; margin:15px 0">Teras cafe disini :</label>
      <div class="screen"></div>

      <div class="row">

        <div class="seat pelayan">kasir</div>
        <div class="seat pelayan">kasir</div>
        <div class="seat plant"></div>
        <div class="seat plant"></div>
        <div class="seat <?= ($inventaris[0]['Booked']==0)? '' : 'sold';?>" id="<?= $inventaris[0]['id']?>"></div>
        <div class="seat <?= ($inventaris[1]['Booked']==0)? '' : 'sold';?>" id="<?= $inventaris[1]['id']?>"></div>
      </div>
      <div class="row">

        <div class="seat pelayan">kitchen</div>
        <div class="seat notSeat">Sanara </div>
        <div class="seat notSeat"> Cafe</div>
        <div class="seat <?= ($inventaris[2]['Booked']==0)? '' : 'sold';?>" id="<?= $inventaris[2]['id']?>"></div>
        <div class="seat <?= ($inventaris[3]['Booked']==0)? '' : 'sold';?>" id="<?= $inventaris[3]['id']?>"></div>
        <div class="seat <?= ($inventaris[4]['Booked']==0)? '' : 'sold';?>" id="<?= $inventaris[4]['id']?>"></div>
      </div>
     
      <div class="row">
        <div class="seat pelayan">kitchen</div>
        <div class="seat notSeat">Hall</div>
        <div class="seat notSeat"></div>
        <div class="seat <?= ($inventaris[5]['Booked']==0)? '' : 'sold';?>" id="<?= $inventaris[5]['id']?>"></div>
        <div class="seat <?= ($inventaris[6]['Booked']==0)? '' : 'sold';?>" id="<?= $inventaris[6]['id']?>"></div>
        <div class="seat <?= ($inventaris[7]['Booked']==0)? '' : 'sold';?>" id="<?= $inventaris[7]['id']?>"></div>
      </div>
      <div class="row">

        <div class="seat <?= ($inventaris[8]['Booked']==0)? '' : 'sold';?>" id="<?= $inventaris[8]['id']?>"></div>
        <div class="seat <?= ($inventaris[9]['Booked']==0)? '' : 'sold';?>" id="<?= $inventaris[9]['id']?>"></div>
        <div class="seat pelayan">Toilet</div>
        <div class="seat pelayan">Toilet</div>
        <div class="seat <?= ($inventaris[10]['Booked']==0)? '' : 'sold';?>" id="<?= $inventaris[10]['id']?>"></div>
        <div class="seat <?= ($inventaris[11]['Booked']==0)? '' : 'sold';?>" id="<?= $inventaris[11]['id']?>"></div>
      </div>
    </div>

    <p class="text">
      Telah memilih <span id="count">0</span> meja dengan harga Rp.<span
        id="total"
        >0</span
      >
    </p>
    <form id="saveBooking" action="<?= base_url('/app/Controllers/User.php')?>" method="POST">
    <input type="submit" class="button" value="Save">
    </form>
</form>
 
<script>
document.getElementById('saveBooking').addEventListener('submit', function(event) {
  event.preventDefault(); // Menghentikan event submission default

  const selectedSeats = document.querySelectorAll(".row .seat.selected");
  let seatNumbers = [];

  selectedSeats.forEach((seat) => {
    seatNumbers.push(seat.id);
  });

  let xhr = new XMLHttpRequest();
  let data = JSON.stringify({ selectedSeats: seatNumbers });

  xhr.open("POST", "../../app/Controllers/User.php", true);
  xhr.setRequestHeader("Content-Type", "application/json");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Proses respons dari controller PHP
      console.log(xhr.responseText);

      window.location.href = "/";
    }
  };

  xhr.send(data);
  // document.getElementById('saveBooking').submit();
});

</script>
 
<script src="<?= base_url('/assets/js/script.js') ?>"></script>
  </body>
</html>
