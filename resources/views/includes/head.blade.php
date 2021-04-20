<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .container{
            margin:0px;
        }
        .navbar{
            border-radius: 0;
        }
        footer {
        min-height: 200px;
        background: black;
        }
        h1 , h2, h4{
            color: black;
            font-weight: bold;
        }
        form .form-group button{
            border-radius: 0;
            background:green;
        }
        .modal-footer button a{
            color:white;
        }  
        body {
        overflow-x: hidden;
        }
        #sidebar-wrapper {
        min-height: 100vh;
        margin-left: -15rem;
        -webkit-transition: margin .25s ease-out;
        -moz-transition: margin .25s ease-out;
        -o-transition: margin .25s ease-out;
        transition: margin .25s ease-out;
        }
        #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
        }
        #sidebar-wrapper .list-group {
        width: 15rem;
        }
        #page-content-wrapper {
        min-width: 100vw;
        }
        #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
        }
        @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }
        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }
        #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
        }
        }
      </style>
    