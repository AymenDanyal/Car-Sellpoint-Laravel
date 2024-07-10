<!DOCTYPE html>
<html lang="zxx">
<head>
	@include('layouts.head')	
</head>
<body class="js">
	
	
	 <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
	 <div class="preloader"></div>
			

	<!-- Header -->
	@include('layouts.header')
	<!--/ End Header -->
	@yield('main-content')
	
	@include('layouts.footer')
	@stack('scripts')

</body>
</html>	