<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-title" content="Hash Me!">
    <title>Hash Me!</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        body {
            background-color: #263238;
        }
        
        .text-center {
            text-align: center;
        }
        
        .space-bot {
            margin-bottom: 35px;
        }
        
        .space-top {
            margin-top: 35px;
        }
        /* Title */
        
        h1 {
            color: white;
            font-family: 'Roboto';
            text-transform: uppercase;
            font-weight: 900;
            font-size: 25px;
            text-align: center;
        }
        /* Sign Up */
        
        .container {
            max-width: 400px;
            max-height: 100px;
            margin-top: 10px;
        }
        
        .alert-danger {
            text-align: center;
        }
        
        .signup-screen {
            padding: 20px;
            padding-bottom: 40px;
            border-radius: 5px;
            background-color: #2c3940;
            box-shadow: 0 1px 6px rgba(0, 0, 0, .3);
            color: white;
        }
        
        .btn {
            border-radius: 2px;
        }
        
        .cancel {
            background-color: #df405a;
        }
        
        .done {
            background-color: #5CAB7D;
        }
        
        .done:hover {
            background-color: #6dc793;
        }
        
        .done:focus {
            background-color: #6dc793;
        }
        
        .cancel:hover {
            background-color: #f0435f;
        }
        
        .cancel:focus {
            background-color: #f0435f;
        }
        
        .input-group {
            width: 100%;
        }
        
        .input-group .ng-invalid {
            border: 2px solid #e74c3c;
            border-radius: 3px;
        }
        /* Error Box */
        
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 2px;
            border-color: #e85a71;
            background-color: #e85a71;
            color: white;
        }
        
        .help-block {
            font-size: 12px;
            color: white
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }
        ng\:form {
            display: block;
        }
        .ng-animate-shim {
            visibility: hidden;
        }
        .ng-anchor {
            position: absolute;
        }
    </style>
    <script src="md4.js"></script>
    <script src="md5.js"></script>
    <script src="sha1.js"></script>
    <script src="sha256.js"></script>
</head>
<body>
    <div class="container">
        <div id="signup">
            <div class="signup-screen">
                <div class="space-bot text-center">
                    <h1>Hash Me!</h1>
                    <div class="divider"></div>
                </div>
                <form class="form-register ng-pristine ng-valid-email ng-invalid ng-invalid-required ng-valid-minlength" method="post" name="register" novalidate="">
                    <div class="input-field col s6">
                        <input id="input" type="text" class="validate" required onkeyup="copyText();">
                        <label for="first-name">Your Text</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="result1" type="text">
                        <label for="result1">Result MD4</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="result2" type="text">
                        <label for="result2">Result MD5</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="result3" type="text">
                        <label for="result3">Result SHA1</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="result4" type="text">
                        <label for="result4">Result SHA256</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="result5" type="text">
                        <label for="result5">Result Password Hash</label>
                    </div>
                    <div class="space-top text-center">
                        <button type="reset" class="waves-effect waves-light btn cancel">
                            <i class="material-icons left">clear</i>Clear
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script>
        function copyText(){
            var input = document.getElementById('input');
            var result1 = document.getElementById('result1');
            var result2 = document.getElementById('result2');
            var result3 = document.getElementById('result3');
            var result4 = document.getElementById('result4');
            var result5 = document.getElementById('result5');
            result1.value = calcMD4(input.value);
            result2.value = calcMD5(input.value);
            result3.value = calcSHA1(input.value);
            result4.value = sha256(input.value);
            result5.value = password_hash(input.value, 1);
        }
    </script>
</body>
</html>