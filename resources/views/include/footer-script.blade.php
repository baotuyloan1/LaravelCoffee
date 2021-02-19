  <!-- jquery plugins here-->
  <!-- jquery -->
  <script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
  <!-- popper js -->
  <script src="{{asset('js/popper.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- easing js -->
  <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
  <!-- swiper js -->
  <script src="{{asset('js/lightslider.min.js')}}"></script>
  <!-- swiper js -->
  <script src="{{asset('js/masonry.pkgd.js')}}"></script>
  <!-- particles js -->
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
  <!-- slick js -->
  <script src="{{asset('js/slick.min.js')}}"></script>
  <script src="{{asset('js/swiper.jquery.js')}}"></script>
  <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('js/waypoints.min.js')}}"></script>
  <script src="{{asset('js/contact.js')}}"></script>
  <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('js/jquery.form.js')}}"></script>
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('js/mail-script.js')}}"></script>
  <script src="{{asset('js/stellar.js')}}"></script>
  <!-- custom js -->
  <script src="{{asset('js/theme.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <script>
        $(document).ready(function(){
        
        $("#changePassword").change(function(){

            if($(this).is(":checked")) {
          
                $(".password").removeAttr('disabled');
            }
            else {
                var text = document.getElementById("text");
                
                $(".password").attr('disabled','');
                
            }
        })
    });
    
    (function(){
 
 $("#cart").on("click", function() {
   $(".shopping-cart").fadeToggle( "fast");
 });
 
})();
    </script>

<script>    function xacnhanxoa(msg) {
        if (window.confirm(msg)) {
            return true ;
        }
        return false ;
    }</script>
