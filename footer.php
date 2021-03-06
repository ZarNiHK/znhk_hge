<footer class="bg-dark text-center text-lg-start bg-light text-muted py-3">
  
  <section class="section-3">
    <div class="container text-center text-md-start mt-5">
     
      <div class="row mt-3">
        
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          
          <h6 class="text-uppercase fw-bold mb-4">
          Home Gym Company
          </h6>
          <p>
          The mission of HomeGym is to help the people live better lives, which it accomplishes by providing best gym equipment, services, content, and programs, all of which use technologies to access with others so that customers can feel Wellness no matter where they are.
          On every HomeGym equipment, anyone may discover their own material and training programs.
          </p>
        </div>
       
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="treadmill.php" class="text-reset">Treadmills</a>
          </p>
          <p>
            <a href="plates.php" class="text-reset">Plates</a>
          </p>
          <p>
            <a href="dumbbells.php" class="text-reset">Dumbbells</a>
          </p>
          <p>
            <a href="bars.php" class="text-reset">Olympic Bars</a>
          </p>
        </div>
        
        
       
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p>Artturintie 10, 36220 Kangasala, Finland</p>
          <p>
            homegymcompany@gmail.com
          </p>
          <p>044 120 0783</p>
          <p>050 646 6767</p>
          <a class="fs-5 px-2 link-white" href="https://www.facebook.com/"><i class="bi-facebook"></i></a>
          <a class="fs-5 px-2 link-white" href="https://www.twitter.com/"><i class="bi-twitter"></i></a>
          <a class="fs-5 px-2 link-white" href="https://www.instagram.com/"><i class="bi-instagram"></i></a>

        </div>
        
      </div>
      
    </div>
  </section>
 

  
  <section class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-white">
                    &copy; Copyright all rights reserved.2022 By ZN.
                </div>
            </div>
        </div>
    </section>
  
      <button type="button" class="btn btn-warning position-relative">
        View Count
        <span class="position-absolute top-0 start-100 translate-middle-badge rounded-pill bg-danger">
          <div class="website-counter badge"></div>
        </span>
      </button>
   
</footer>
<script type="text/javascript" id="cookieinfo"
src="//cookieinfoscript.com/js/cookieinfo.min.js" data-bg="#645862" data-fg="#FFFFFF" data-link="#F1D600" data-cookie="My Cookies Information" data-text-align="left" data-close-text="Got it">

</script>
<script>
  var counterContainer = document.querySelector(".website-counter");
  var resetButton = document.querySelector("#reset");
  var visitCount = localStorage.getItem("page_view");
  if(visitCount) {
    visitCount = Number(visitCount) + 1;
    localStorage.setItem("page_view", visitCount);
  } else{
    visitCount = 1
    localStorage.setItem("page_view", 1);
  }
  counterContainer.innerHTML = visitCount;
  resetButton.addEventListener("click", () => {
    visitCount = 1;
    localStorage.setItem("page_view", 1);
    counterContainer.innerHTML = visitCount;
  });
</script>
  </body>
</html>