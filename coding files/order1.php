
  <html>

  <head>
    <title>Order</title>
    <link rel="stylesheet" href="order.css" rel="stylesheet" />

  </head>

  <body>
    <header>
      <div class="head">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="viewproducts.php">View Products</a></li>
          <li><a href="payment1.php">Payment</a></li>
          <li><a href="workshop.php">Workshop</a></li>

        </ul>


        <div class="logout">
          <ul>

            <li>  <form method="POST" action="logout.php" >
               <button id="logout" >Logout</button>
                 </form></li>
          </ul>
        </div>
    </header>
    <hr>

    <form action="confirmorder.php" method="post">
      <div class="order-box">

        <div id="ob">
          <input type="submit" value="Order" name="order" id="cb" style="visibility: hidden;" />



          <input type="button" value="Order History" name="orderh" id="oh" onclick="history()" style="visibility: visibile;" />




        </div>




        <br>
        <input type="checkbox" id="d" name="door" value="Door" onclick="confirm()">
        <label for="doors">Doors</label>

        <input type="checkbox" id="w" name="window" value="Window" onclick="confirm()">
        <label for="windows">Windows</label>

        <input type="checkbox" id="c" name="closet" value="Closet" onclick="confirm()">
        <label for="closets">Closets</label>

        <input type="checkbox" id="k" name="kitchen" value="Kitchen" onclick="confirm()">
        <label for="kitchens">Kitchens</label>

      </div>




      <div id="all">


        <div id="doors" style="visibility: hidden;">

          <h1>Doors</h1>
          <hr id="hr">
          <h2>Design</h2>

          <input type="radio" id="fd" name="designd" value="French">
          <label for="fd">French</label><br>

          <input type="radio" id="cd" name="designd" value="Colonial">
          <label for="cd">Colonial</label><br>

          <input type="radio" id="pd" name="designd" value="Pocket">
          <label for="pd">Pocket</label>
          <br>

          <h2>Color</h2>

          <input type="radio" id="wd" name="colord" value="White">
          <label for="wd">White</label><br>

          <input type="radio" id="bld" name="colord" value="Black">
          <label for="bld">Black</label><br>

          <input type="radio" id="brd" name="colord" value="Brown">
          <label for="brd">Brown</label>
          <br>




        </div>



        <div id="windows" style="visibility: hidden;">

          <h1>Windows</h1>
          <hr id="hr">
          <h2>Type</h2>

          <input type="radio" id="tew" name="typew" value="Technal">
          <label for="tew">Technal</label><br>

          <input type="radio" id="taw" name="typew" value="Taiseer">
          <label for="taw">Taiseer</label><br>

          <input type="radio" id="cw" name="typew" value="Gulf">
          <label for="cw">Gulf</label>
          <br>

          <h2>Color</h2>

          <input type="radio" id="ww" name="colorw" value="White">
          <label for="ww">White</label><br>

          <input type="radio" id="blw" name="colorw" value="Black">
          <label for="blw">Black</label><br>

          <input type="radio" id="brw" name="colorw" value="Bronze">
          <label for="brw">Bronze</label>
          <br>


        </div>



        <div id="closets" style="visibility: hidden;">

          <h1>Closets</h1>
          <hr id="hr">
          <h2>Design</h2>

          <input type="radio" id="sc" name="designc" value="Single">
          <label for="sc">Single</label><br>

          <input type="radio" id="dc" name="designc" value="Double">
          <label for="dc">Double</label><br>
          <br>

          <h2>Color</h2>

          <input type="radio" id="wc" name="colorc" value="White">
          <label for="wc">White</label><br>

          <input type="radio" id="blc" name="colorc" value="Black">
          <label for="blc">Black</label><br>

          <input type="radio" id="brc" name="colorc" value="Brown">
          <label for="brc">Brown</label>
          <br>


        </div>



        <div id="kitchens" style="visibility: hidden;">

          <h1>Kitchens</h1>
          <hr id="hr">
          <h2>Design</h2>

          <input type="radio" id="lk" name="designk" value="LShaped">
          <label for="lk">L-Shaped</label><br>

          <input type="radio" id="uk" name="designk" value="UShaped">
          <label for="uk">U-Shaped</label><br>

          <input type="radio" id="gk" name="designk" value="Galley">
          <label for="gk">Galley</label><br>
          <br>

          <h2>Color</h2>

          <input type="radio" id="wk" name="colork" value="White">
          <label for="wk">White</label><br>

          <input type="radio" id="blk" name="colork" value="Black">
          <label for="blk">Black</label><br>

          <input type="radio" id="brk" name="colork" value="Brown">
          <label for="brk">Brown</label><br>

          <input type="radio" id="gk" name="colork" value="Grey">
          <label for="gk">Grey</label>
          <br>


        </div>

      </div>
    </form>






    <script>
      let cbD = document.getElementById("d");
      let cbW = document.getElementById("w");
      let cbC = document.getElementById("c");
      let cbK = document.getElementById("k");




      function confirm() {
        let door = document.getElementById("doors");
        let window = document.getElementById("windows");
        let closet = document.getElementById("closets");
        let kitchen = document.getElementById("kitchens");
        let cb = document.getElementById("cb");




        if (cbD.checked == true) {

          door.style.visibility = 'visible';
          cb.style.visibility = 'visible';

        } else {
          door.style.visibility = 'hidden';

        }



        if (cbW.checked) {
          window.style.visibility = 'visible';
          cb.style.visibility = 'visible';
        } else {
          window.style.visibility = 'hidden';

        }


        if (cbC.checked) {
          closet.style.visibility = 'visible';
          cb.style.visibility = 'visible';

        } else {
          closet.style.visibility = 'hidden';

        }


        if (cbK.checked) {
          kitchen.style.visibility = 'visible';
          cb.style.visibility = 'visible';
        } else {
          kitchen.style.visibility = 'hidden';


        }
        if ((cbD.checked == false) && (cbW.checked == false) && (cbC.checked == false) && (cbK.checked == false)) {
          cb.style.visibility = 'hidden';
        }

      }

      function history() {
        window.location.href = "orderhistory.php";

      }
    </script>
  </body>


  </html>