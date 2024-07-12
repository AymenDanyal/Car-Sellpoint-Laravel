<!DOCTYPE html>
<html lang="eng" >
<head>
	@include('layouts.head')	
</head>
<body class="js">
	<!-- Header -->
	@include('layouts.header')
	<!--/ End Header -->
	@yield('main-content')
	
	@include('layouts.footer')
	@stack('scripts')

</body>
</html>	










	 {{-- <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
	 <div class="preloader"></div> --}}
			