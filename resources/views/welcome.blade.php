<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Find Me A Pint</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
    </head>
    <body>
        <div class="content">
            <h1>Find Me A Pint</h1>
            <form action="/results" method="POST" id='form'>
                {{ csrf_field() }}

                <input id='postcode' type="text" name="postcode" required>
                <input  name="coordinates" placeholder="latitude" id='coordiantes' type="text" hidden>
                <button type="button">Find Me a Pint</button>
                <p>Please enter a valid postcode</p>
            </form>
              
        </div>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script>

        const button = document.querySelector('button');
        let postCodeInput = document.getElementById('postcode');
        let postCode = postCodeInput.value;
        button.addEventListener('click', function() {
            console.log(postCodeInput.value);
            const url='https://api.postcodes.io/postcodes/' + postCodeInput.value;

            axios.get(url)
            .then(function (response){
               
                let lat = response.data.result.latitude;
                let long = response.data.result.longitude;
                let coordinates = lat +','+long;
                document.getElementById('coordiantes').value = coordinates;
                document.getElementById("form").submit();

                
            })
            .cath(err=>console.log(err))      
        })
    

        </script>
    </body>
</html>
