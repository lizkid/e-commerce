<!--footer-->
<div class="footer mt-5">
    <div id="top-footer" class="row py-5">

        <div>
            <h4>Quick Links</h4>
            <a href="{{url('account/register')}}">Register</a>
            <a href="#">Sell</a>
            <a href="#">Buy</a>

        </div>
        <div>
            <h4>Informations</h4>
            <a href="#">Contact us</a>
            <a href="#">Who are we</a>
            <a href="#">Buyers info</a>

        </div>

        <div>
            <h4>About Us</h4>
            <a href="#">Privacy & policy</a>
            <a href="#">Terms & Conditions</a>

        </div>

    </div>

    <div id="lower-footer">
        <div id="connect">
            <p class="text-center">Connect with us</p>
            <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></i></a>
            </div>
        </div>
        <div class="copy pt-3">
            <?php
            $today = date("Y");
            ?>
            <p>copyright &copy <?php echo $today;?> E-COM</p>
        </div>
    </div>

</div>
