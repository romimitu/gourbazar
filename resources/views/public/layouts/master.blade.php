<!DOCTYPE html>
<html lang="en">
@include('public.layouts.header')
<body> 
	@include('public.layouts.menu')
    @yield('content')
	@include('public.layouts.footer')
	@yield('script')
</body>
</html>
