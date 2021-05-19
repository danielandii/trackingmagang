<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="RcqJx4hM6gtp8Ul0jnptoJNFhgKqcBsww8CvCicI">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <!-- <title>Laravel</title> -->
            <title>Login</title>
            <!-- Scripts -->
            <!-- <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/f-bnnOuahiYKuei7dmAd3kgv/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-flviDSD9v4jk/5R8dfmwuv/TjjtrqG71QqiMHXEdc2uJSKVKau85FnvYQXVXEpRR"></script> -->
            <script src="https://dumas.kominfo.go.id/js/app.js" defer=""></script>
            <!-- Fonts -->
            <link rel="dns-prefetch" href="//fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
            <!-- Styles -->
            <link href="https://dumas.kominfo.go.id/css/app.css" rel="stylesheet">
                                            
    </head>
    <body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8"><br><br><br><br> <div class="card">
                        <div class="card-header">
                            <center>
                                <img src="https://dumas.kominfo.go.id/assets/login/img/backgrounds/kominfo.png" style="width: 80px; height: 80px;"> 
                                    <br> 
                                        <h4>Login Pengaduan Masyarakat</h4> <h4>KEMENTERIAN KOMUNIKASI DAN INFORMATIKA</h4>
                            </center>
                        </div> 
                        <div class="card-body">
                            <form method="POST" action="https://dumas.kominfo.go.id/login" onsubmit="return validateRecaptcha();">
                                <input type="hidden" name="_token" value="RcqJx4hM6gtp8Ul0jnptoJNFhgKqcBsww8CvCicI">
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-right">Username</label> 
                                        <div class="col-md-6">
                                            <input type="text" name="username" value="" required="required" autocomplete="username" autofocus="autofocus" class="form-control ">
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label> 
                                            <div class="col-md-6">
                                                <input id="password" type="password" name="password" required="required" autocomplete="current-password" class="form-control ">
                                            </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">Capctha</label> 
                                            <div class="col-md-6">
                                                <div data-sitekey="6Lc9IrYUAAAAAF6xPElzyyOzxqcdFTMbaF2TknPZ" class="g-recaptcha">
                                                    <div style="width: 304px; height: 78px;">
                                                        <div>
                                                            <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lc9IrYUAAAAAF6xPElzyyOzxqcdFTMbaF2TknPZ&amp;co=aHR0cHM6Ly9kdW1hcy5rb21pbmZvLmdvLmlkOjQ0Mw..&amp;hl=en&amp;v=f-bnnOuahiYKuei7dmAd3kgv&amp;size=normal&amp;cb=qko4cvofcbvy" width="304" height="78" role="presentation" name="a-lwioxqtjt6vl" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox">
                                                            </iframe>
                                                        </div>
                                                        <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                    </div>
                                                    <iframe style="display: none;"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">  
                                                <button type="submit" class="btn btn-primary">
                                                    Login
                                                </button> 
                                                <a href="https://dumas.kominfo.go.id/register" class="btn btn-link">
                                                    Belum punya akun? Silahkan daftar di sini!
                                                </a>
                                            </div>
                                        </div>
                            </form>
                            <br> 
                                <center>
                                    <a href="https://dumas.kominfo.go.id/lupa_password" class="btn btn-link">
                                        <i class="glyphicon glyphicon-hand-up"></i>
                                            Lupa password ?  
                                    </a>
                                </center> 
                            <br>
                                <hr> 
                                    <center>
                                        <b>2021 © NORE</b>
                                    </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
        <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;">
        </div>
        <div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div>
        <div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div>
        <div style="z-index: 2000000000; position: relative;">
            <iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=f-bnnOuahiYKuei7dmAd3kgv&amp;k=6Lc9IrYUAAAAAF6xPElzyyOzxqcdFTMbaF2TknPZ&amp;cb=r8zz8mmo74hr" name="c-lwioxqtjt6vl" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe>
    </div>
    </div>
</body>
</html>