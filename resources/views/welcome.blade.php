<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Find Me A Pint</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
    </head>
    <body>
      
        <section class="secton">
            <div class="container">
                    <div class="is-flex is-horizontal-center">
                    <img src="{{ secure_asset('img/logo.svg')}}" alt="Logo" class="logo">
                    
                    </div>
                    
                    @yield('content')
            
                
            </div>
        </section>
        <footer class="footer">
            <p class="has-text-centered margin-medium">Made by James Wright</p>
        </footer>
        
        

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="/js/app.js"></script>
        <script>
        
        const showLoader = () =>{
            document.querySelector('.search-container').style.display = "none";
            document.getElementById('loader').style.display = "block";

        }

        const locationButton = document.getElementById('geoButton');
        locationButton.addEventListener('click' ,function(){
            showLoader();
            navigator.geolocation.getCurrentPosition(showPosition);
                function showPosition(position) {
                    
                    findPint(position.coords.latitude, position.coords.longitude);
                }

                
        })
        const button = document.getElementById('postcodeButton');
        let postCodeInput = document.getElementById('postcode');
        let postCode = postCodeInput.value;

        const findPint = (lat,long) =>{
            
            const coordiantes = lat + "," + long;
            document.getElementById('coordiantes').value = coordiantes;
            document.getElementById("form").submit();
            console.log('hello')
        }

        button.addEventListener('click', function() {
            
            console.log(postCodeInput.value);
            const url='https://api.postcodes.io/postcodes/' + postCodeInput.value;

            axios.get(url)
                .then(function (response){
                    let lat = response.data.result.latitude;
                    let long = response.data.result.longitude;
                    showLoader();
                    findPint(lat, long);
                    
                })
            .catch(function(response){
                document.getElementById('error').style.display ="block";
                
            })
                

        })
    

        </script>
    </body>
</html>
