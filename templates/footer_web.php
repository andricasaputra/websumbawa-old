<style>
    #calendar {
        max-width: auto;
        background-color: #fff;
        color: #000
    }

    .col-centered {
        float: none;
        margin: 0 auto;
    }

    .grecaptcha-badge {
        display: none !important;
    }

    .visitors {
        padding: 0px 0px;
        margin-top: -50px;
    }

    .visitors h4 {
        color: #fff;
        padding-bottom: 10px;
        font-size: 11pt;
    }

    .visitors .fa {
        color: #fcbe03;
    }

    @media (max-width: 800px) {
        iframe {
            display: none !important;
        }
    }
</style>
<section class="section-cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center medsos">
                <h1>Media Sosial</h1>
                <div class="team-socials"><a href="https://www.facebook.com/karantinapertaniansumbawa/" target="_blank"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/SKP_Sumbawa?lang=id" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/karantinapertaniansumbawa/" target="_blank"><i class="fa fa-instagram"></i></a><a href="https://www.youtube.com/channel/UCavSN4-PUiPqA3GnejTpKFQ/videos" target="_blank"><i class="fa fa-youtube"></i></a><a href="https://mail.google.com" target="_blank"><i class="fa fa-google-plus"></i></a></div>
            </div>
        </div>
        <div class="col-md-12 text-center" id="youtube-container"> </div>
    </div>
</section>
<section id="contact" class="dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Kontak Kami</h2>
                    <p>Jika Anda Mempunyai Keluhan, Kritik Atau Saran Terhadap Pelayanan Kami <br>Silahkan Hubungi Line Center Dibawah Ini</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="section-text">
                    <h4>Kantor Induk</h4>
                    <p>Jln. Pelabuhan Badas No. 01 Sumbawa Besar - NTB</p>
                    <p><i class="fa fa-envelope-open"></i> 84351</p>
                    <p><i class="fa fa-phone"></i> (0371) 2629152</p>
                    <p><i class="fa fa-whatsapp"></i> 0813 3990 1664</p>
                    <p><i class="fa fa-envelope"></i> stakabadas@gmail.com</p>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-6" style="margin-top: -20px">
                <h4 style="color: #fff">Kirim Pesan Kepada Kami Melalui Form Berikut</h4>
                <form action="" method="post" id="contactForm"> <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response"> <input type="hidden" name="action" value="validate_captcha">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"> <input type="text" class="form-control" placeholder="Nama *" name="nama" id="name" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> <input type="email" class="form-control" placeholder="Alamat Email *" name="email" id="email" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group"> <input type="number" class="form-control" placeholder="No Telepon *" name="notelp" id="notelp" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group"> <textarea class="form-control" placeholder="Pesan/Saran/Kritik *" id="message" name="pesan" required></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div id="success"></div><button type="submit" class="btn" name="kirim_pengaduan">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="dark-bg visitors">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="inline">
                    <div id="visit">
                        <h4><i class="fa fa-group fa-fw"></i> Pengunjung Hari Ini : - &nbsp;&nbsp;|&nbsp;&nbsp; <i class="fa fa-line-chart fa-fw"></i> Total Pengunjung : -</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<p id="back-top"><a href="#top"><i class="fa fa-angle-up"></i></a></p>
<footer>
    <div class="container text-center">
        <p style="color: #fff">&copy; 2018 | Stasiun Karantina Pertanian Kelas I Sumbawa Besar</p>
    </div>
</footer>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/theme-scripts.js"></script>
<script src="js/jquery.marquee.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="dataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
<script src="dataTables/DataTables-1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src='js/moment.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
<script src='js/tarif.js'></script>
<script src='js/searching.js'></script>
<script src='js/rupiah.js'></script>
<script src='js/accordion.js'></script>
<script src='js/visitor.js'></script>
<script>

    /*Add loader when page reload*/
    $(window).on('load', function() {
        $(document).ready(function() {
            setTimeout(function() {
                $(".loader").fadeOut("slow");
            }, 500);
        });
    });

    $(document).ready(function() {

        /*Visitors counter*/
        visit();

        /*Searching default*/
        load_data();

        /*Navbar brand handler*/
        if ($(window).width() > 800) {

            $('#cssmenu').prepend('<a class="navbar-brand page-scroll" href="home"><img src="images/logo web.png" class="logo"></a>');

        } else {

            $('.navbar-brand img').remove();
        }

        $('#info_berkala2').DataTable({
            "ordering": false,
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false,
            "oLanguage": {
                "sSearch": "Cari"
            }
        });

        $('#info_berkala').DataTable({
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false,
            "searching": false,
            "ordering": false
        });

        $(document).on("click", '.survey', function() {

            $(this).animate({
                'marginLeft': "-350px"
            }, 400);

            $(this).addClass('balik');

            $(this).removeClass('survey');

            showModalSurvey();
        });

        $(document).on("click", '#survey2', function() {

            showModalSurvey();
        });

        function showModalSurvey()
        {
            setTimeout(function(){
                $('#survey-container').modal('show'); 
            },2000);
        }

        $(document).on("click", ".balik", function() {

            $(this).animate({
                'marginLeft': "0px"
            }, 400);

            $('#survey').removeClass('balik');

            $(this).addClass('survey');
        });

    }); /*End Ready*/

    (function($) {

        $(document).ready(function() {
            $('#cssmenu').prepend('<div id="menu-button">Menu</div>');
            $('#cssmenu #menu-button').on('click', function() {
                let menu = $(this).next('ul');
                if (menu.hasClass('open')) {
                    menu.removeClass('open');
                } else {
                    menu.addClass('open');
                }
            });
        });

    })(jQuery);

</script>

<?php 
if (strpos($_SERVER['REQUEST_URI'], 'home' ) !==false || strlen($_SERVER['REQUEST_URI'])===1){
?>

 <script async defer>

    $(document).ready(function() {

        /*add loader first*/
        loader();

        /*Data Operasional*/
        let url = dashboardApi;

        let bulanarray = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

        let bulan = new Date().getMonth();

        bulan = bulanarray[bulan];

        dataOperasionalCounter(url);

        /*data operasional counter*/
        function dataOperasionalCounter(url)
        {
            $.ajax({

                url : url

            }).done(function(response){

                let domas = parseInt(response.kh.frekuensi.domas || 0) + parseInt(response.kt.frekuensi.domas || 0);

                let dokel = parseInt(response.kh.frekuensi.dokel || 0) + parseInt(response.kt.frekuensi.dokel || 0);

                let ekspor = parseInt(response.kh.frekuensi.ekspor || 0) + parseInt(response.kt.frekuensi.ekspor || 0);

                let impor = parseInt(response.kh.frekuensi.impor || 0) + parseInt(response.kt.frekuensi.impor || 0);

                let pnbp = (response.kh.pnbp || 0)  + (response.kt.pnbp || 0);

                $('#data_operasional_container').empty();

                $('#data_operasional_container').html(`

                    <div class="col-md-12">

                        <h2 style="color: #fff">Data Operasional Sampai Dengan 01 ${bulan} ${response.kh.tahun} </h2>

                    </div>

                    <div class="col-md-2 mb-sm-30">

                        <div class="counter-item">

                            <h2 class="stat-number" data-n="${ekspor}">0</h2>

                            <h6>Ekspor</h6>

                        </div>

                    </div>

                    <div class="col-md-2 mb-sm-30">

                        <div class="counter-item">

                            <h2 class="stat-number" data-n="${impor}">0</h2>

                            <h6>Impor</h6>

                        </div>

                    </div>

                    <div class="col-md-2 mb-sm-30">

                        <div class="counter-item">

                            <h2 class="stat-number" data-n="${dokel}">0</h2>

                            <h6>Domestik Keluar</h6>

                        </div>

                    </div>

                    <div class="col-md-2 mb-sm-30">

                        <div class="counter-item">

                            <h2 class="stat-number" data-n="${domas}">0</h2>

                            <h6>Domestik Masuk</h6>

                        </div>

                    </div>

                    <div class="col-md-4 mb-sm-30">

                        <div class="counter-item">

                            <h2 class="stat-number" data-n="${pnbp}">0</h2>

                            <h6>Penerimaan Negara Bukan Pajak</h6>

                        </div>

                    </div>

                `);

            });/*end table ajax*/
        }
        /*End Data Operasional*/

        /*Chart Data Operasional*/
        $.getJSON(dashboardApi, function(response){

            /*KH*/
            Highcharts.setOptions({
                colors: ['#bf80ff', '#ffcc00', '#33cc33', '#24CBE5']
            });

            pieChart('#khchart', response.kh, 'Sertifikasi Karantina Hewan Tahun');

            /*KT*/
            Highcharts.setOptions({
                colors: ['#00e600', '#ffcc00', '#bf80ff', '#24CBE5']
            });

            pieChart('#ktchart', response.kt, 'Sertifikasi Karantina Tumbuhan Tahun');

        });

        /*Init pie chart data operasional*/
        function pieChart(container, data, title)
        {
            $(container).highcharts({
                credits: false,
                chart: {
                    backgroundColor: null,
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: title + ' ' + data.tahun
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                tooltip: {
                    pointFormat: 'Total: <b>{point.y}</b><br/>',
                    valueSuffix: ' Sertifikat',
                },
                series: [{
                    type: 'pie',
                    allowPointSelect: true,
                    keys: ['name', 'y', 'selected', 'sliced'],
                    data: [
                        ['<b>' + 'Domas' + '</b>', parseInt(data.frekuensi.domas || 0)],
                        ['<b>' + 'Dokel' + '</b>', parseInt(data.frekuensi.dokel || 0)],
                        ['<b>' + 'Ekspor' + '</b>', parseInt(data.frekuensi.ekspor || 0)],
                        ['<b>' + 'Impor' + '</b>',  parseInt(data.frekuensi.impor || 0)]
                    ],
                    showInLegend: true
                }]
            });

        }

        /*Keuangan*/
        let thn2018 = [ <?php echo(json_encode($jsonKeu[0][1])) ?> ];

        thn2018 = thn2018.map(Number);

        let gaugeOptions = {

            chart: {
                type: 'solidgauge',
                backgroundColor: null
            },
            title: null,
            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },
            tooltip: {
                enabled: false
            },
            yAxis: {
                stops: [
                    [0.1, '#DF5353'],
                    [0.5, '#DDDF0D'],
                    [0.9, '#55BF3B']
                ],
                lineWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },
            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        var chartSpeed = Highcharts.chart('keuchart', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: '<b>' + 'Realisasi Anggaran Tahun' + ' ' + <?php echo(json_encode($jsonKeu[0][0])) ?> +'</b>'
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Speed',
                data: thn2018,
                dataLabels: {
                    format: '<div style="text-align:center"><span style="font-size:25px;color:' + ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' + '<span style="font-size:12px;color:silver">%</span></div>'
                },
                tooltip: {
                    valueSuffix: '%'
                }
            }]
        }));

        function loader()
        {
            $('#khchart').html(`
                <div>
                    <img src='images/loader-2.gif'>
                    <p>Loading chart</p>
                </div>
            `);

            $('#ktchart').html(`
                <div>
                    <img src='images/loader-2.gif'>
                    <p>Loading chart</p>
                </div>
            `);
        }

        $('#timeline-container').html(`
            <div class="col-md-4" style="margin-bottom: 10px">
                <div class="fb-page" data-href="https://www.facebook.com/Humas-Karantina-Sumbawa-1880606578875838/" data-tabs="timeline" data-width="400" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                </div>
            </div>

            <div class="col-md-4" style="margin-bottom: 10px">
                <a class="twitter-timeline" data-width="400" data-height="600" href="https://twitter.com/SKP_Sumbawa?ref_src=twsrc%5Etfw">Tweets by SKP_Sumbawa</a>
            </div>
            <div class="col-md-4" style="margin-bottom: 10px">
                <div id="gpr-kominfo-widget-container"></div>
            </div>
        `);

        $('#youtube-container').html(`
            <iframe width="426" height="240" src="https://www.youtube.com/embed/GpoE0v0Wxws?list=PLBL9YmrcMdlqvYX5PZThj4426b5LfnKgw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        `)

    });/*End Ready*/

</script>

<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<?php }if (strpos($_SERVER['REQUEST_URI'], 'berita')){?> 
    <script async src="js/share_button.js"></script>
<?php }?>

<!-- Google Translate -->
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: "id",
        includedLanguages: "en,es,id,pt,zh-CN,fr,ar,ru,ko,ja",
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, "google_translate_element")
}

function changeLanguageByFlag(lang) {
    var frame = $('.goog-te-menu-frame:first');
    if (!frame.length) {
        alert("Error: Could not find Google translate frame.");
        return false;
    }
    frame.contents().find('.goog-te-menu2-item span.text').each(function() {
        if ($(this).html() == lang) {
            if (lang == 'Indonesian') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/ID.png" alt="ID" class="img-responsive">');
            else if (lang == 'English') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/flagsicon/uk-32.png" style="width: 70%" alt="EN" class="img-responsive">');
            else if (lang == 'Spanish') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/flagsicon/spain-32.png" style="width: 70%" alt="SP" class="img-responsive">');
            else if (lang == 'Portuguese') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/flagsicon/portugal-32.png" style="width: 70%" alt="PT" class="img-responsive">');
            else if (lang == 'Chinese (Simplified)') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/flagsicon/china-32.png" style="width: 70%" alt="CH" class="img-responsive">');
            else if (lang == 'French') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/flagsicon/france-32.png" style="width: 70%" alt="FR" class="img-responsive">');
            else if (lang == 'Japanese') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/flagsicon/japan-32.png" style="width: 70%" alt="JP" class="img-responsive">');
            else if (lang == 'Korean') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/flagsicon/south-korea-32.png" style="width: 70%" alt="KR" class="img-responsive">');
            else if (lang == 'Arabic') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/flagsicon/saudi-arabia-32.png" style="width: 70%" alt="SA" class="img-responsive">');
            $(this).click();
        }
    });
}
</script>

<!-- Google Reacaptcha -->
<script src="https://www.google.com/recaptcha/api.js?render=6Lf3BK0UAAAAAEmCYjyPahKepPifbiv78atGbCdQ"></script>

<script async defer>
    grecaptcha.ready(function() {
        grecaptcha.execute('6Lf3BK0UAAAAAEmCYjyPahKepPifbiv78atGbCdQ', {
            action: 'validate_captcha'
        }).then(function(token) {
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script> 

<?php
if (isset($_POST['kirim_pengaduan'])) {
    $captcha = $_POST['g-recaptcha-response'];
    $nama    = htmlspecialchars($connect->real_escape_string($_POST['nama']));
    $email   = htmlspecialchars($connect->real_escape_string($_POST['email']));
    $notelp  = htmlspecialchars($connect->real_escape_string($_POST['notelp']));
    $pesan   = htmlspecialchars($connect->real_escape_string($_POST['pesan']));
    if (!$captcha) {
        echo '<script>alert("captcha tidak cocok"); window.location="index.php "; </script>';
        return false;
    } else {
        if (!empty($nama) && !empty($email) && !empty($notelp) && !empty($pesan)) {
            $masuk = $conn->insertKeluhan($nama, $email, $notelp, $pesan, $captcha);
        }
        if ($masuk == 'masuk') {
            echo '<script>alert("Terimakasih Atas Pesan Yang Anda Kirimkan, Pesan Anda Akan Segera Kami Tindak Lanjuti Dan Mohon Menunggu Email Balasan Dari Customer Services Kami"); </script>';
        } else {
            echo '<script>alert("Semua Isian Wajib Diisi"); </script>';
        }
    }
}
?>
</body>

</html>