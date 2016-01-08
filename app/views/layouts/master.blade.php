{{--  everything you want on every page: footer, copyright, footer, etc --}}

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel Blog</title>
	{{--link tag for bootstrap--}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
{{-- notice yield is at the bottom of the head so that 'top-script' has priority --}}
	@yield('top-script')
</head>
<body>
	@yield('content')
	{{--script tags for JQuery and Bootstrap--}}

{{-- loads javascript last, after jquery and bootstrap --}}
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="/js/bootstrap.js"></script>
	@yield('bottom-script')
</body>
</html>

