<!DOCTYPE html>
<html>
@include('admin.includes.head')
<body>
@include('admin.includes.preloader')
@include('admin.includes.rightSidebar')
@include('admin.includes.navbar')
@include('admin.includes.leftSidebar')
<div class="mobile-menu-overlay"></div>
	<div class="main-container">
		<div class="pd-ltr-20">
            @yield('content')
            @include('admin.includes.footer')
		</div>
	</div>
@include('admin.includes.script')
</body>
</html>
