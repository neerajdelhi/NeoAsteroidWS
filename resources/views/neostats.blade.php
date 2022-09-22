<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Asteroid - Neo Stats</title>
</head>

<body>

    <div id="app">
        <div>
            <div >
                <input type="date" value="start date">
                <input type="date" value="end date">
            </div>

            <button>Submit</button>
            <graphic-component></graphic-component>

        </div>
        <script src="{{asset('js/app.js')}}"></script>
</body>

</html>