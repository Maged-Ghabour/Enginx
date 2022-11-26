@include('Front.includes.head')
@include('Front.includes.header-top')
@include('Front.includes.header-center')
@include('Front.includes.header-bottom')
@include('Front.includes.header-sticky')
@include('Front.includes.display-top')


@yield('aside')
@yield('display-top')
@yield('content')

@include('Front.includes.footer')
@include('Front.includes.downbar')
@include('Front.includes.scripts')
