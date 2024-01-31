<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>Laravel</title>
    </head>
    <body class="body1">
        <center>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                          Obtain Access Token
                        </div>
                        <h4 id="access_token"></h4>
                        <div class="card-body">
                          <button id="getAccessToken" class="btn btn-primary">Request Access Token</button>
                        </div>

                    </div>
                    <div class="card mt-5">
                        <div class="card-header">Register URLs</div>
                        <div class="card-body">
                            <button class="btn btn-primary">Register URLs</button>
                        </div>
                    </div>
                    <div class="card mt-5">
                        <div class="card-header">Simulate Transaction</div>
                        <div class="card-body">
                            <form action="">
                                @csrf
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="number" name="amount" class="form-control" id="amount">
                                </div>
                                <div class="form-group">
                                    <label for="amount">Account</label>
                                    <input type="text" name="account" class="form-control" id="account">
                                </div>
                                <button class="btn btn-primary">Simulate Payment</button>
                            </form>
                            
                        </div>
                    </div>
                
                </div>

            </div>

        </div>
    </center>
   
    <script>
        document.getElementById('getAccessToken').addEventListener('click', (event) => {
            event.preventDefault()

            axios.post('/get-token', {})
            .then((response) => {
                console.log(response.data);
                document.getElementById('access_token').innerHTML = response.data.access_token
            })
            .catch((error) => {
                console.log(error);
            })
        })
    </script>
    </body>
</html>
