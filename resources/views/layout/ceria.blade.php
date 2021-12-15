<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @include('include.head')
</head>
<body class="container-fluid m-4">
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
        </button>
    </div>
        <div class="img bg-wrap text-center py-4" >
            <img src="{{URL::asset('/images/foto.jpg')}}" class="img-fluid rounded-circle mt-1" alt="profile Pic" width="50%">
            <h5 class="text-light mt-3">Liefran Satrio Sim</h5>
            <h6 class="text-light">5026201134</h6>
            </div>
    <ul class="list-unstyled components mb-5">
      <li  @yield('pegawaiactive')>
          <a href="/pegawai">Pegawai</a>
      </li>
      <li @yield('absenactive')>
        <a href="/absen">Absen</a>
      </li>
      <li @yield('tugasactive')>
        <a href="/tugas">Tugas</a>
      </li>
      <li @yield('bedakactive')>
        <a href="/bedak">Bedak</a>
      </li>
      <li @yield('karyawanactive')>
        <a href="/karyawan">Karyawan1</a>
      </li>
    </ul>

    </nav>

    <!-- Page Content  -->
  <div id="content" class="p-4 p-md-5 pt-5">
    <h1>@yield('judulhalaman')</h1>

    <div class="my-3">@yield('isikonten')</div>

    @include('include.footer')
  </div>
    </div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
<script>
    $(function () {
        $.extend(true, $.fn.datetimepicker.defaults, {
            icons: {
                time: 'far fa-clock',
                date: 'far fa-calendar',
                up: 'fas fa-arrow-up',
                down: 'fas fa-arrow-down',
                previous: 'fas fa-chevron-left',
                next: 'fas fa-chevron-right',
                today: 'far fa-calendar-check-o',
                clear: 'far fa-trash',
                close: 'far fa-times'
            }
        });
    });
    </script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
    });
</script>
</body>
</html>
