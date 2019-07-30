<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
  @include('backpack::inc.head')

</head>

<body class="{{ config('backpack.base.body_class') }}">

  @include('backpack::inc.main_header')

  <div class="app-body">

    @include('backpack::inc.sidebar')

    <main class="main">

       @includeWhen(isset($breadcrumbs), 'backpack::inc.breadcrumbs')

       @yield('header')

        <div class="container-fluid animated fadeIn">
          
          @includeWhen(isset($widgets), 'backpack::inc.widgets', ['section' => 'before_content'])
          
          @yield('content')
          
          @includeWhen(isset($widgets), 'backpack::inc.widgets', ['section' => 'after_content'])

        </div>

    </main>

  </div><!-- ./app-body -->

  <footer class="app-footer">
    @include('backpack::inc.footer')
  </footer>

  @yield('before_scripts')
  @stack('before_scripts')

  @include('backpack::inc.scripts')

  @yield('after_scripts')
  @stack('after_scripts')
</body>
</html>
