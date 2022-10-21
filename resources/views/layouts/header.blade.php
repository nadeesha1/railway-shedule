<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Railway System">
    <meta name="author" content="Pasindu Priyashan By ARIES.LK">

    <title>{{ isset($title) ? $title : env('APP_NAME') }}</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <style>
        .seathorizontal {
            display: flex;
            flex-flow: row;
        }

        .inputSeat {
            display: none;
        }

        .inputSeatLabel {
            border-radius: 5px;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 10px;
            padding-right: 10px;
            text-align: center;
            width:50px;
            border: black solid 1px;
            color: white;
        }

        .windowedseat{
            border: red solid 3px;
        }

        .infoseat{
            padding: 5px;
            color: white;
        }

        .class1 {
            background-color: #4A148C;
        }

        .class2 {
            background-color: #E65100;
        }

        .class3 {
            background-color: #0D47A1;
        }

        .inputSeat:checked+label {
            background-color: #388E3C;
            color: white;
        }

        .inputSeat:disabled+label {
            background-color: #424242;
            color: gray;
        }

    </style>
</head>
