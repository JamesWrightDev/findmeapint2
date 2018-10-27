<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
    </head>
    <body>
        <div class="content">
              <input id='postcode' type="text" required>
                <button type="submit">Find Me a Pint</button>
                
                <input placeholder="latitude"id='lat' type="text">
                <p>Please enter a valid postcode</p>
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
            .then(data=>console.log(data))
            .cath(err=>console.log(err))
        })
    

        </script>
    </body>
</html>
