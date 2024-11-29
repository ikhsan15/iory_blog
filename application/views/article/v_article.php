<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view("admin/_partials/header.php") ?>
  </head>
  
  <body>
    <!-- Header Section Start -->
    <header id="slider-area">  
      <?php $this->load->view("admin/_partials/navbar.php") ?>
    </header>
    <!-- Header Section End --> 

    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Services</h2>
          <span>Services</span>
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
        </div>        
        <div class="row article-more">
          <!-- partial:index.partial.html -->
          <div class="grid gap-6 grid-cols-3">
            <div class="grid__item item w-56 text-black relative">
              <div class="item__content h-full w-full p-4 relative border-2 flex flex-col">
                <div class="font-bold mb-2">Microservices Orchestration</div>
                <p class="flex-grow mb-2">Temporal is a perfect fit for orchestrating microservices.</p><a href="#">Learn More</a>
              </div>
            </div>
            <div class="grid__item item w-56 text-black relative">
              <div class="item__content h-full w-full p-4 relative border-2 flex flex-col">
                <div class="font-bold mb-2">Financial Transactions</div>
                <p class="flex-grow mb-2">For software that interacts with money (especially someone else's), reliability and consistency are top priorities.</p><a href="#">Learn More</a>
              </div>
            </div>
            <div class="grid__item item w-56 text-black relative">
              <div class="item__content h-full w-full p-4 relative border-2 flex flex-col">
                <div class="font-bold mb-2">Resource Provisioning</div>
                <p class="flex-grow mb-2">Provisioning resources depends on a series of potentially long-running operations with many possibilities for intermittent failures.</p><a href="#">Learn More</a>
              </div>
            </div>
            <div class="grid__item item w-56 text-black relative">
              <div class="item__content h-full w-full p-4 relative border-2 flex flex-col">
                <div class="font-bold mb-2">Monitoring</div>
                <p class="flex-grow mb-2">Temporal provides guaranteed execution with exactly-once semantics with automatic retries.</p><a href="#">Learn More</a>
              </div>
            </div>
            <div class="grid__item item w-56 text-black relative">
              <div class="item__content h-full w-full p-4 relative border-2 flex flex-col">
                <div class="font-bold mb-2">Resource Provisioning</div>
                <p class="flex-grow mb-2">Provisioning resources depends on a series of potentially long-running operations with many possibilities for intermittent failures.</p><a href="#">Learn More</a>
              </div>
            </div>
            <div class="grid__item item w-56 text-black relative">
              <div class="item__content h-full w-full p-4 relative border-2 flex flex-col">
                <div class="font-bold mb-2">Monitoring</div>
                <p class="flex-grow mb-2">Temporal provides guaranteed execution with exactly-once semantics with automatic retries.</p><a href="#">Learn More</a>
              </div>
            </div>
          </div>
          <!-- partial -->
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Footer Section Start -->
    <?php $this->load->view("admin/_partials/footer.php") ?>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>

    <!-- <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>     -->

    <?php $this->load->view("admin/_partials/js.php") ?>
    
  </body>
</html>