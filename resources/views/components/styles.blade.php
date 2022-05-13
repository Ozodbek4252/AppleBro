<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }}</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<link rel="shortcut icon" href="/assets/images/favicon.ico">
<link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
@livewireStyles
