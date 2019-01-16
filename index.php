<?php $page_title = "Rólunk"; include('assets/includes/header.php'); ?>
<div class="container">
    <div id="Üzletágaink">
        <div class="subtitle">
            <h2>Üzletágaink</h2>
            <div></div>
        </div>
    </div>
    <div class="content-box">
        <div id="vueCounter" class="branches-wrapper">
            <div class="content-box-row">
                <div class="content-box-img1">
                    <div class="boxtextupper">
                        <h3 v-on:click="count">Médiaszolgálat</h3>
                        <p>Adáslebonyolítás, Makeup, Művészeti terv</p>
                    </div>


                </div>

                <div class="content-box-img2">
                    <div class="boxtextupper">
                        <h3>Art-rent</h3>
                        <p>Díszlet, kellék</p>
                    </div>
                </div>
            </div>

            <div class="content-box-row">
                <div class="content-box-img3">
                    <div class="boxtext">
                        <h3>E-rent Autókölcsönző</h3>
                        <p>Béreljen és parkoljon díjmentesen</p>
                    </div>
                </div>
                <div class="content-box-img4">
                    <div class="boxtext">
                        <h3>Brooklyn Barber</h3>
                        <p>Fodrászat, szépségszalon</p>
                    </div>
                </div>
            </div>
            <div class="content-box-counterbox">
                <div class="counter">
                    <i class="fas fa-bolt"></i>
                    <div class="counter-inner-wrapper">
                        <div id="chargingstation" class="number"> {{ display.chargingstation }} </div>
                        <div class="counter-title">Töltőállomás</div>
                    </div>
                </div>
                <div class="counter">
                    <i class="fas fa-desktop"></i>
                    <div class="counter-inner-wrapper">
                        <div id="broadcasting" class="number"> {{ display.broadcasting }} </div>
                        <div class="counter-title">Adáslebonyolítás</div>
                    </div>
                </div>
                <div class="counter">
                    <i class="far fa-smile"></i>
                    <div class="counter-inner-wrapper">
                        <div id="happyClient" class="number"> {{ display.happyClient }} </div>
                        <div class="counter-title">Boldog ügyfél</div>
                    </div>
                </div>
                <div class="counter counter-last">
                    <i class="fas fa-award"></i>
                    <div class="counter-inner-wrapper">
                        <div id="artAccessories" class="number"> {{ display.artAccessories }} </div>
                        <div class="counter-title">Art-kellék</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="Rólunk">
        <div class="subtitle">
            <h2>Miért válasszon minket?</h2>
            <div></div>
        </div>
    </div>
    <div class="choose-wrapper">
        <div class="choose-row">
            <div class="choose-box mt0">
                <div class="choose-title">
                    <h3>Csapatunk</h3>
                    <i class="fas fa-arrow-up"></i>
                </div>
                <div class="text-wrapper">
                    <p>Az elmúlt 3 évben folyamatosan növelni tudta árbevételét, amely a 2014. évi nettó 80 millió Ft-ról, az utolsó lezárt működési évre. 2016-ra 260 millió Ft-ra emelkedett, ezzel 225%-os árbevétel.</p>
                </div>
            </div>
            <div class="choose-box mt0">
                <div class="choose-title">
                    <h3>7 éve önökért</h3>
                    <i class="fas fa-users"></i>
                </div>
                <div class="text-wrapper">
                    <p>Vevői elégedettség: A meglévő vevők egyre több munkával bízzák meg a vállalkozást és egyre hosszabb időtávokra kötnek új szerződéseket.</p>
                </div>
            </div>
        </div>
        <div class="choose-row">
            <div class="choose-box mb0">
                <div class="choose-title">
                    <h3>Ügyfélszolgálat</h3>
                    <i class="fas fa-phone-square"></i>
                </div>
                <div class="text-wrapper">
                    <p>Kérdéseivel forduljon nyugodtan munkatársainkhoz, készséggel állunk az ön rendelkezésére! Hívjon minket, vagy írjon nekünk üzenetet és kollégáink válaszolnak kérdéseire.</p>
                </div>
            </div>
            <div class="choose-box mb0">
                <div class="choose-title">
                    <h3>Tanusítvány</h3>
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="text-wrapper">
                    <p>CrefoZert Bonitási tanusítvány: Egy nemzetközileg is elismert minősítéssel büszkélkedhetünk. Érvényes 2018 július.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="reference-wrapper">
        <div class="subtitle">
            <h2>Referenciáink</h2>
            <div></div>
        </div>
        <div class="reference-row">
            <div class="glider-contain">
                <div class="glider">
                    <div><img src="assets/images/logo-1.jpg" alt=""></div>
                    <div><img src="assets/images/logo-2.jpg" alt=""></div>
                    <div><img src="assets/images/logo-3.jpg" alt=""></div>
                    <div><img src="assets/images/logo-4.jpg" alt=""></div>
                    <div><img src="assets/images/logo-5.jpg" alt=""></div>
                </div>
                <button role="button" aria-label="Previous" class="glider-prev">
                    <i class="fas fa-angle-left"></i>
                </button>
                <button role="button" aria-label="Next" class="glider-next">
                    <i class="fas fa-angle-right"></i>
                </button>
            </div>
        </div>
    </div>
    <div id="Hírek">
        <div class="subtitle">
            <h2>Legfrissebb híreink</h2>
            <div></div>
        </div>
    </div>
    <div class="news-wrapper">
        <div class="news-row">
            <div class="news-box">
                <div class="news-img1">
                     
                </div>
                <div class="news-content">
                    <div class="news-date">
                        2018.06.21
                    </div>
                    <div class="news-title">
                        <h3>Kényelem biztonság és környezettudatosség!</h3>
                    </div>
                    <div class="news-taster">
                        E-RENT autókölcsönző szolgáltatásunkkal a tiszta, fenntartható és gazdaságos közlekedés mellett állunk.
                    </div>
                    <div class="news-forward">
                        <a href="hirek.php">
                            Tovább<i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news-box">
                <div class="news-img2">
                </div>
                <div class="news-content">
                    <div class="news-date">
                        2018.05.25
                    </div>
                    <div class="news-title">
                        <h3>Nincs lehetetlen! Egy kreatív csapat mindent megold!</h3>
                    </div>
                    <div class="news-taster">
                        Egy jó műsor elkészítésének titka egy jól megválasztott csapat. Több éves műsorgyártás, make up, stúdiótechnika...
                    </div>
                    <div class="news-forward">
                        <a href="hirek.php">
                            Tovább<i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-row">
            <a href="hirek.php">
                <div class="news-button-wrapper">
                    <button>
                        Korábbi híreink<i class="fas fa-arrow-right"></i>
                    </button>
                </div>

            </a>
        </div>
    </div>
</div>

<?php include('assets/includes/footer.php'); ?>
