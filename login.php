<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="login.css" />
    </head>
  <body>
    <div id="bg">
    <img src="https://wallpapercave.com/wp/hx8Fel1.jpg" alt="">
    </div>

    <header>

      <input type="checkbox" name="" id="toggler">
      <label for="toggler" class="fas fa-bars"></label>
  
      <a href="#" class="logo">Highletics<span>.</span></a>
  
      <nav class="navbar">
          <a href="index.php">home</a>
          <a href="#about">about</a>
          <a href="#products">events</a>
          <a href="#review">review</a>
          <a href="#contact">contact</a>
      </nav>
  
      <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-shopping-cart"></a>
          <a href="login.html" class="fas fa-user"></a>
      </div>
  
  </header>
            
    <div class="intro">
      <section class="intro-child" id="overlay1">
            <div class="colour"></div>
            <div class="colour"></div>
            <div class="colour"></div>
            <div class="box">
                <div class="square" style="--i: 0"></div>
                <div class="square" style="--i: 1"></div>
                <div class="square" style="--i: 2"></div>
                <div class="square" style="--i: 3"></div>
                <div class="square" style="--i: 4"></div>
                <div class="container">
                    <div class="form">
                      <form action="login_con.php" method="post">
                        <h2>Login</h2>
                          <?php if(isset($_GET['error'])) { ?>
                          <p class="error"> <?php echo $_GET['error']; ?></p>
                          <?php } ?>
                            <div class="input__box">
                                <input type="text" name="uname" placeholder="User Name" />
                            </div>
                            <div class="input__box">
                                <input type="password" name="password" placeholder="Password" />
                            </div>
                            <div class="input__box">
                                <input type="submit" value="Login" />
                            </div>
                            <p class="forget">
                                Don't have an account? <a href="signup.php">Sign Up</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        
      </section>
    </div>

    <script>
      var scrollAnimElements = document.querySelectorAll("[data-animate-on-scroll]");
      var observer = new IntersectionObserver(
        (entries) => {
          for (const entry of entries) {
            if (entry.isIntersecting || entry.intersectionRatio > 0) {
              const targetElement = entry.target;
              targetElement.classList.add("animate");
              observer.unobserve(targetElement);
            }
          }
        },
        {
          threshold: 0.15,
        }
      );
      
      for (let i = 0; i < scrollAnimElements.length(); i++) {
        observer.observe(scrollAnimElements[i]);
      }
      </script>
  </body>
</html>