{{--  everything you want on every page: footer, copyright, footer, etc --}}

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Laravel Blog</title>
	{{--link tag for bootstrap--}}
	<link rel="stylesheet" href="/css/bootstrap.min.css">
{{-- notice yield is at the bottom of the head so that 'top-script' has priority --}}
	@yield('top-script')
</head>
<body>
	@yield('content')
	{{--script tags for JQuery and Bootstrap--}}

{{-- loads javascript last, after jquery and bootstrap --}}
	@yield('bottom-script')
</body>
</html>

