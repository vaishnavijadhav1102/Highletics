<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Highletics</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="#" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="#" href="event.php">Events</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                </li>
                
                
            </ul>
            <div class="d-flex">
                <button type="button" href = "login.php"class="btn btn-outline-dark text-white shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            </div>
            <div class="d-flex">
                <button type="button" href="signup.php" class="btn btn-outline-dark text-white shadow-none me-lg-3 me-4" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
            </div>
        </div>
    </div>
</nav>  


<!-- modals login and register -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="background-color: black;">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                    <h5 class = "modal-title d-flex align-items-center">
                    <i class="bi bi-person fs-3 me-2"></i>User Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="javascript: void(0)" class = "text-secondary" >Forgot Password</a>

                    </div>
                </form>
                </div>

            </form>
    
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="background-color: black;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                    <h5 class = "modal-title d-flex align-items-center">
                    <i class="bi bi-person-add fs-3 me-2"></i>User Registeration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <span class="badge bg-light text-dark mb-3 text-wrap lh-base ">Note: Your details must match your ID(Aadhar Card, Driving Licence,etc.) </span>
                <div class="container-fluid">
                    <div class = "row">
                        <div class="col-md-6 ">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="col-md-6 ">
                            <label class="form-label">Contact</label>
                            <input type="number" class="form-control">
                        </div>
                        <!-- dropdown lagana -->
                        <div class="col-md-6">
                            <label class="form-label">Sport Type</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 ">
                            <label class="form-label">Registeration Number</label>
                            <input type="text" class="form-control">
                        </div>
                        <!-- <div class="col-md-6">
                            <label class="form-label">Vehicle Document</label>
                            <input type="file" class="form-control">
                        </div> -->
                        <div class="col-md-6 ">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control">
                        </div>
                    </div>
                    <div class="text-center my-1">
                    <button type="submit" class="btn btn-dark shadow-none">Register</button>
                            
                    </div>
                <!-- <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="javascript: void(0)" class = "text-secondary" >Forgot Password</a>

                    </div>
                </form> -->
                </div>

            </form>
    
        </div>
    </div>
</div>
</div>