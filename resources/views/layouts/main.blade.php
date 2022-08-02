<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ url('image/logo.png') }}" type="image" sizes="20x20">
  <title>BAKTI UNAND 2022</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ url('css/uikit.min.css') }}" />
  <link rel="stylesheet" href="{{ url('style/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/ddc2e77247.js" crossorigin="anonymous"></script>
  <script src="{{ url('js/uikit.min.js') }}"></script>
  <script src="{{ url('js/uikit-icons.min.js') }}"></script>
</head>

<body>


  {{-- Landing Page --}}

  <div id="nav-page">
    <div class="container-fluid">
      <nav class="uk-navbar uk-navbar-container uk-navbar-transparent uk-margin" uk-navbar>
        <a href="#">
          <img class="navbar-brand" src="{{ url('image/logobc.png') }}" alt="logo">
        </a>
        <div class="uk-navbar-right">

          <ul class="uk-navbar-nav">
            <li><a href="{{ route("index") }}">Beranda</a></li>
            <li><a href="{{ route("sambutan") }}">Sambutan</a></li>
            <li><a href="{{ route("logo") }}">Logo</a></li>
            <li><a href="{{ route("maskot") }}">Maskot</a></li>
            <li><a href="{{ route("peta") }}">Peta</a></li>
          </ul>


          <a class="uk-navbar-toggle uk-navbar-toggle-animate" uk-navbar-toggle-icon href="#"></a>
          <div class="uk-navbar-dropdown nav-backs">
            <ul class="uk-nav uk-navbar-dropdown-nav">
              <li><a href="{{ route("fakultas") }}">Fakultas dan Jurusan</a></li>
              <li><a href="{{ route("ukm") }}">Unit Kegiatan Mahasiswa</a></li>
              <li><a href="{{ route("anthem") }}">Bakti Anthem Player</a></li>
              <li><a href="{{ route("merch") }}">Merchendise</a></li>
              <li><a href="{{ route("tugas1pra") }}">Tugas</a></li>
              <li><a href="{{ route("gallery") }}">Gallery</a></li>
              {{-- <a href="#" class="uk-button chat-btn d-flex justify-content-center">Chat</a>--}}
            </ul>
          </div>
        </div>
      </nav>

    </div>

  </div>


  @yield('landing-page')

  @yield('about')

  @yield('timeline')

  @yield('tugas')

  @yield('maskot')

  @yield('peta')

  @yield('sambutan')

  @yield('fakultas')

  @yield('ukm')

  @yield('anthem')

  @yield('gallery')

  @yield('logo')

  @yield('merch')

  @yield('challenge')

  @yield('footer')

  @yield('countdown')



  {{-- End Of landing Page --}}


  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>

</html>