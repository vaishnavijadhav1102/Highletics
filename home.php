<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive Ease</title>
    <link rel="stylesheet" href="commoncss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    

</head>
<body style="background-color: black;" >
        <?php require("header.php");?>
    
    <!-- swiper -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swipper-c">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="public/football.jpg" class = "w-100 d-block" height="500px"/>
                    
                </div>
                <div class="swiper-slide">
                    <img src="public/hockey.webp" class = "w-100 d-block" height="500px"/>
                </div>
                <div class="swiper-slide">
                    <img src="pubic/kabaddi.jpg" class = "w-100 d-block" height="500px"/>
                </div>
                <div class="swiper-slide">
                    <img src="public/basketball.webp" class = "w-100 d-block" height="500px"/>
                </div>
                
            </div>
            
        </div>
    </div>
    </div>
    <!-- check availability -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Events Near You</h5>
                <form>
                    <div class="row align-items-end" >
                        <div class="col-lg-3" style="left:20px;position:relative">
                            <label class="form-label" >Date</label>
                            <input type="date" class="form-control shadow-none">

                        </div>
                        <div class="col-lg-3" style="left:20px;position:relative">
                            <label class="form-label" >Time</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3" style="left:20px;position:relative">
                            <label class="form-label" >Event Type</label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">basketball</option>
                                <option value="2">kabaddi</option>
                                <option value="3">hockey</option>
                                <option value="2">football</option>
                                <option value="3">chess</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <button style="background-color:#008B8B;left:30px;position:relative" type="submit" class="btn custom-bg text-white ">
                                <a href=""></a> Choose Location</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- </div> -->
    <!-- service -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold text-white">Our Facilities</h2>
    <div class="container">
        <div class="row justify-content-between align-items-center" style="left: -3px;">
            <div class="col-lg-2">
                <img src="public/cloud.png" width="200px" height="200px" class="bg-light">
            </div>
            <div class="col-lg-2">
                <img src="public/community.png" width="200px" height="200px" class="bg-light">
            </div>
            <div class="col-lg-2">
                <img src="public/verify.png" width="200px" height="200px" class="bg-light">
            </div>
            <div class="col-lg-2">
                <img src="public/support.png" width="200px" height="200px" class="bg-light">
            </div>
        </div>
    </div>
        <!-- about us col -->
        <div class="container mt-6 align-items-center mt-4">
        <div class="row align-items-center">
        <div class="col-lg-12 bg-white shadow p-4 rounded ">
            <h3 class="text-center">About Us</h3>
                <div class="row align-items-center">
                    <div class="col-lg-3 mx-auto mt-4">
                        <div class="card" style="width: 18rem;">
                            <img src="public/aboutus_vaishi.png" width="">
                            <div class="card-body">
                                <h5 class="card-title">Vaishnavi Jadhav</h5>
                                <p class="card-text">HI! I am the developer</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mx-auto mt-4">
                        <div class="card" style="width: 18rem;">
                            <img src="public/raj.png" style="height: 300px;">
                            <div class="card-body">
                                <h5 class="card-title">Raj Laxmi Singh</h5>
                                <p class="card-text">HI! I am the developer</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mx-auto mt-4">
                        <div class="card" style="width: 18rem;">
                            <img src="public/aboutus_mahak.png">
                            <div class="card-body">
                                <h5 class="card-title">Mahak Chamria</h5>
                                <p class="card-text">HI! I am the developer</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>

    <!-- footer -->
    <?php require("footer.php");?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swipper-c", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        
        });
    </script>
</body>
</html>