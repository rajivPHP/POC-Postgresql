<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="css/devices.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>Omni</title>
</head>
<body class="page-404" data-theme="theme-1">

    <!-- LOADER -->
    <div id="loader-wrapper">
        <div class="bubbles">
            <div class="title">loading</div>
            <span></span>
            <span id="bubble2"></span>
            <span id="bubble3"></span>
        </div>
    </div>

    <div class="canvas-overflow" style="background-image: url(img/clouds.jpg);">
        <canvas class="canvas-background"></canvas>
        <div class="teaser-container table-view">
            <div class="row-view">
                <div class="cell-view">
                    <div class="teaser-logo">
                        <a href="index.php" class="logo"><img src="img/theme-1/logo-big.png" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="row-view">
                <div class="cell-view">
                    <div class="content-404">
                        <div class="title">404</div>
                        <div class="description">The page you are looking for is missing or currently unavailable. Please use the correct link or visit <a href="index.php">homepage</a>.</div>
                    </div>
                </div>
            </div>
            <div class="row-view">
                <div class="cell-view">
                    <div class="teaser-copyright">
                        <div class="copyright">&copy; 2015 All rights reserved. <a href="#">O.MNI</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="theme-config">
        <div class="title">Select Color:</div>
        <div class="colours-wrapper">
            <div data-theme="theme-1" style="color: #fbc011;" class="entry active"></div>
            <div data-theme="theme-2" style="color: #00bbd2;" class="entry"></div>
            <div data-theme="theme-3" style="color: #4caf50;" class="entry"></div>
            <div data-theme="theme-4" style="color: #ba68c8;" class="entry"></div> 
            <div data-theme="theme-5" style="color: #d80d0d;" class="entry"></div>
            <div data-theme="theme-6" style="color: #0045ad;" class="entry"></div>
            <div data-theme="theme-7" style="color: #dd137b;" class="entry"></div>
            <div data-theme="theme-8" style="color: #482d1d;" class="entry"></div>            
        </div>
        <div class="open"><img src="img/gear-icon.png" alt=""><img src="img/gear-icon.png" alt=""><img src="img/gear-icon.png" alt=""></div>
    </div>

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/global.js"></script>
    <script>

      $(function() {


        var canvas = document.querySelector('canvas'),
            ctx = canvas.getContext('2d'),
            color = 'white';
            redraw();
            

        function redraw(){
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            canvas.style.display = 'block';
            ctx.fillStyle = color;
            ctx.lineWidth = 0.3;
            ctx.strokeStyle = color;
        }


        $(window).resize(function(){
            redraw();
        });
        window.addEventListener("orientationchange", function() {
            redraw();
        }, false);


      var mousePosition = {
        x: 30 * canvas.width / 100,
        y: 30 * canvas.height / 100
      };

      var dots = {
        nb: 150,
        distance: 80,
        d_radius: 150,
        array: []
      };

      function Dot() {
        this.x = Math.random() * canvas.width;
        this.y = Math.random() * canvas.height;

        this.vx = -.5 + Math.random();
        this.vy = -.5 + Math.random();

        this.radius = Math.random();
      }

      Dot.prototype = {
        create: function() {
          ctx.beginPath();
          ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
          ctx.fill();
        },

        animate: function() {
          for (i = 0; i < dots.nb; i++) {

            var dot = dots.array[i];

            if (dot.y < 0 || dot.y > canvas.height) {
              dot.vx = dot.vx;
              dot.vy = -dot.vy;
            } else if (dot.x < 0 || dot.x > canvas.width) {
              dot.vx = -dot.vx;
              dot.vy = dot.vy;
            }
            dot.x += dot.vx;
            dot.y += dot.vy;
          }
        },

        line: function() {
          for (i = 0; i < dots.nb; i++) {
            for (j = 0; j < dots.nb; j++) {
              i_dot = dots.array[i];
              j_dot = dots.array[j];

              if ((i_dot.x - j_dot.x) < dots.distance && (i_dot.y - j_dot.y) < dots.distance && (i_dot.x - j_dot.x) > -dots.distance && (i_dot.y - j_dot.y) > -dots.distance) {
                if ((i_dot.x - mousePosition.x) < dots.d_radius && (i_dot.y - mousePosition.y) < dots.d_radius && (i_dot.x - mousePosition.x) > -dots.d_radius && (i_dot.y - mousePosition.y) > -dots.d_radius) {
                  ctx.beginPath();
                  ctx.moveTo(i_dot.x, i_dot.y);
                  ctx.lineTo(j_dot.x, j_dot.y);
                  ctx.stroke();
                  ctx.closePath();
                }
              }
            }
          }
        }
      };

      function createDots() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        for (i = 0; i < dots.nb; i++) {
          dots.array.push(new Dot());
          dot = dots.array[i];

          dot.create();
        }

        dot.line();
        dot.animate();
      }

      $('body').on('mousemove mouseleave', function(e) {
        if (e.type == 'mousemove') {
          mousePosition.x = e.pageX;
          mousePosition.y = e.pageY;
        }
        if (e.type == 'mouseleave') {
          mousePosition.x = canvas.width / 2;
          mousePosition.y = canvas.height / 2;
        }
      });
      setInterval(createDots, 1000 / 30);
});
    </script>
    
</body>
</html>
