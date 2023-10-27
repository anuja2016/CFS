<footer data-aos="fade-up">
  <div class="main-Wrapper">
    <div class="row">
      <div class="col-lg-2 col-md-4">
        <h4>Features</h4>
        <ul class="footer-menu">
          <li><a href="#">Job Scheduling</a></li>
          <li><a href="#">Task Scheduling</a></li>
          <li><a href="#">AMC Management</a></li>
          <li><a href="#">Real time Tracking</a></li>
          <li><a href="#">Quotation / Invoice</a></li>
          <li><a href="#">Asset Management</a></li>
          <li><a href="#">Service Management</a></li>
          <li><a href="#">Passbook Management</a></li>
          <li><a href="#">Inventory Management</a></li>
          <li><a href="#">All Features<span class="ps-2"><img src="assets/images/whitearrow.svg" /></span></a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-4">
        <h4>Industries</h4>
        <ul class="footer-menu">
          <li><a href="#">HVAC </a></li>
          <li><a href="#">Plumbing </a></li>
          <li><a href="#">Garage door</a></li>
          <li><a href="#">Electrical contractor </a></li>
          <li><a href="#">Appliance Repair</a></li>
          <li><a href="#">Carpet Cleaning</a></li>
          <li><a href="#">Landscaping and lawa </a></li>
          <li><a href="#">Pest Control </a></li>
          <li><a href="#">Home Cleaning </a></li>
          <li><a href="#">All Industries<span class="ps-2"><img src="assets/images/whitearrow.svg" /></span></a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-4">
        <h4>Resource</h4>
        <ul class="footer-menu">
          <li><a href="#">Pricing</a></li>
          <li><a href="press-media.php">Press & Media</a></li>
          <li><a href="customer-app.php">Customer App</a></li>
          <li><a href="blog.php">Blogs</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-4">
        <h4>Company</h4>
        <ul class="footer-menu">
          <li><a href="#">About</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Refer a friend</a></li>
          <li><a href="#">Partners</a></li>
          <li><a href="#">Contact us</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-4 ps-4">
        <img class="footlogo" src="assets/images/footer-logo.svg" />
        <div>
          <div class="getintouch">
            <p>GET IN TOUCH:</p>
            <h5><a href="tel:+919315228028">+91 93152 28028</a></h5>
            <p class="email-text mt-2"><a href="mailto: info@fieldweb.co.in">info@fieldweb.co.in</a></p>
          </div>

          <h4 class="mt-3">FOLLOW US</h4>
          <ul class="social-links">
            <li><a href="https://www.youtube.com/" target="_blank"><img src="assets/images/youtubewhiteicon.svg" /></a></li>
            <li><a href="https://www.facebook.com/" target="_blank"><img src="assets/images/facebookwhiteicon.svg" /></a></li>
            <li><a href="https://www.instagram.com/" target="_blank"><img src="assets/images/instagramwhiteicon.svg" /></a></li>
            <li><a href="https://www.linkedin.com/" target="_blank"><img src="assets/images/linkedinwhiteicon.svg" /></a></li>
          </ul>

          <h4 class="mt-3">Available On</h4>
          <ul class="store-links">
            <li><a href="https://www.apple.com/in/app-store/" target="_blank"><img src="assets/images/appstorelogo.svg" /></a></li>
            <li><a href="https://play.google.com/store/games?device=windows&utm_source=apac_med&hl=en-IN&utm_medium=hasem&utm_content=Jun1223&utm_campaign=Evergreen&pcampaignid=MKT-EDR-apac-in-1003227-med-hasem-py-Evergreen-Jun1223-Text_Search_BKWS-BKWS%7CONSEM_kwid_43700076784774234_creativeid_480977734961_device_c&gclid=EAIaIQobChMI9YLJ8aS5gQMVGiRgCh24HwCGEAAYASAAEgJTufD_BwE&gclsrc=aw.ds" target="_blank"><img src="assets/images/googlestore.svg" /></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>


<!--scripts--->
<script type="text/javascript" src="assets/js/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/aos.js"></script>
<script type="text/javascript" src="assets/js/slick.min.js"></script>
<!--tooltip--->
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>
<script>
  /**
   * Animation on scroll function and init
   */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });
</script>
<!--get demo popup--->
<script>
  $(document).ready(function() {
    $("#btn-SelectIndustry").click(function() {
      $("#gd-form").hide();
      $("#gd-industries").show();
    });
    $(".btn-back").click(function() {
      $("#gd-form").show();
      $("#gd-industries").hide();
      $("#gd-technician").hide();
    });
    $("#btn-otherIndustry").click(function() {
      $("#sect-otherindustry").toggle();
    });
    $("#btn-SelectTechnician").click(function() {
      $("#gd-form").hide();
      $("#gd-technician").show();
    });
  });
</script>

<!--slick slider--->
<script>
  $('.preview-carousel').slick({
    arrows: false,
    arrows: true,
    variableWidth: true,
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 4
  });

  $('.industries-slider').slick({
    arrows: false,
    infinite: true,
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true
  });
  $('.trusted-industries-slider').slick({
    arrows: false,
    infinite: true,
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true
  });
  $('.trusted-companies').slick({
    arrows: false,
    infinite: true,
    autoplay: true,
    slidesToShow: 4,
    slidesToScroll: 1
  });
  $('.features-slider').slick({
    arrows: false,
    infinite: true,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true
  });
  $('.blog-slider').slick({
    arrows: false,
    infinite: true,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true
  });
  $('.rpost-slider').slick({
    arrows: false,
    infinite: true,
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true
  });
  $('.custapp-slider').slick({
    infinite: true,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true
  });
  $('.cust-feedback-slider').slick({
    arrows: false,
    infinite: true,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true
  });
  $('.cust-feedback-slider2').slick({
    arrows: false,
    infinite: true,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true
  });

  $('.client-review').slick({
    arrows: false,
    infinite: true,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true
  });
</script>

<!--counter--->
<script>
  $('.count').each(function() {
    $(this).prop('Counter', 0).animate({
      Counter: $(this).text()
    }, {
      duration: 4000,
      easing: 'swing',
      step: function(now) {
        $(this).text(Math.ceil(now));
      }
    });
  });
</script>