<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamStay_CONTACT</title>
    <?php require('inc/links.php'); ?>
 </head>
<body class= "bg-light">
    <?php require('inc/header.php');?>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet 
            consectetur adipisicing elit. <br> Illo, dicta accusamus! 
            Ipsum earum aliquid suscipit neque nihil atque nulla ab.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
              <div class="bg-white rounded shadow p-4">
                <iframe height="320px" class="w-100 rounded mb-4" src="https://www.google.com/maps/d/embed?mid=1DfFcv3jAM8NAeioBjW_CHwtKL3A&hl=en_US&ehbc=2E312F"></iframe>
                <h5>Address</h5>
                <a href="https://maps.app.goo.gl/UEAYa7n3ULuGFbw99" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                <i class="bi bi-geo-alt-fill"></i> XYZ Mumbai, Maharashatra 
                </a>
                
                <h5 class="mt-4">Call Us</h5>
                <a href="Tel: +917778889991" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone"></i> +917778889991
                </a>
                <br>
                <a href="Tel: +917778889991" class="d-inline-block text-decoration-none text-dark">
                <i class="bi bi-telephone"></i> +917778889991
                </a>
                
                <h5 class="mt-4">Email</h5>
                <a href="mailto: hlom3691@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                  <i class="bi bi-envelope-fill"></i> hlom3691@gmail.com
                </a>
                
                <h5 class="mt-4">Follow Us</h5>
                <a href="#" class="d-inline-block text-dark fs-5 me-2">
                <i class="bi bi-twitter me-1"></i>
                </a>
                <a href="#" class="d-inline-block text-dark fs-5 me-2">
                <i class="bi bi-facebook me-1"></i> 
                </a>
                <a href="#" class="d-inline-block text-dark fs-5">
                <i class="bi bi-instagram me-1"></i> 
                </a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
              <div class="bg-white rounded shadow p-4">
               <form>
                <h5>Send a message</h5>
                <div class="mt-3">
                  <label class="form-label" style="font-weight: 500;">Name</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="mt-3">
                  <label class="form-label" style="font-weight: 500;">Email</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="mt-3">
                  <label class="form-label" style="font-weight: 500;">Subject</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="mt-3">
                  <label class="form-label" style="font-weight: 500;">Message</label>
                  <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                </div>
                <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
               </form>
              </div>
            </div>
        </div>
    </div>

   <?php require('inc/footer.php'); ?>


</body>
</html>


