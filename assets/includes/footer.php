</main>
<footer>
    <div class="footer-contact">
        <div id="Kapcsolat">
            <div class="subtitle">
                <h2>Kapcsolat</h2>
                <div></div>
            </div>
        </div>
        <form action="post">
            <div class="footer-wrapper">
                <div class="footer-contact-info">
             
                    <div class="footer-contact-info-logo">
 
                    </div>
                    <div class="footer-contact-info-sub">
 
                        <a href="https://goo.gl/maps/ejHaeBc1WAH2"><i class="fas fa-map-marker-alt"></i></a>
                        <a href="https://goo.gl/maps/ejHaeBc1WAH2">1137 Budapest, <br> Szent István park 25.</a>
                    </div>
                    <div class="footer-contact-info-sub">
                        <a href="mailto:info@olim.hu"><i class="fas fa-envelope"></i></a><a href="mailto:info@olim.hu">info@olim.hu</a>
                    </div>
                    <div class="footer-contact-info-sub">
                        <a href="tel:+3616999124"><i class="fas fa-phone"></i></a><a href="tel:++3616999124">+36-1-699-9124</a>
                    </div>
                </div>
                <div class="form">
                    <input type="text" placeholder="Név">
                    <input type="email" name="email" id="email" placeholder="E-mail">
                    <textarea name="textarea" id="texterea" cols="30" rows="4"></textarea>
                    <div class="checkbox-container">
                        <input type="checkbox" name="privacy-statement" id="privacy-statement" value="privacy-statement">
                        <label for="privacy-statement">
                                        Megismertem és elfogadom az <a href="#">adatvédalmi nyilatkozatot.</a>
                                    </label>
                    </div>
                    <div class="checkbox-container">
                        <input type="checkbox" name="news" id="news" value="news">
                        <label for="news">
                                        Hozzájárulok, hogy számomra az Olim Centrál Zrt. a jövőben hírlevelet küldjön.
                                    </label>
                    </div>
                </div>
            </div>
            <div class="form-button">
                <input type="button" value="Elküld">
            </div>
        </form>

    </div>
    <div class="footer-rights">
        <div>
            <a href="#">Adatvédelmi nyilatkozat</a>
        </div>
        <div>
            <p>© Copyright 2018 Olim Central Zrt.</p>
        </div>
    </div>
</footer>
<div id="return-to-top">
    <div class="return-to-top-inner">
        <a href="javascript:" id=""><i class="fas fa-angle-up"></i></a>
    </div>
</div>



<script src="assets/script.js"></script>
<script src="assets/counter.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    // TOTOP //
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200); // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200); // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function() { // When arrow is clicked
        $('body,html').animate({
            scrollTop: 0 // Scroll to top of body
        }, 500);
    });

</script>


</body>

</html>
