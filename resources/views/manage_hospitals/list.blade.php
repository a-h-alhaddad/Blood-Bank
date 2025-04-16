{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

        <div class="container mt-2">

        <div class="row">

        <div class="col-lg-12 margin-tb">

        <div class="pull-left">

        <h2>ادارة المستشفيات</h2>

        </div>

        <div class="pull-right mb-2">

        <a class="btn btn-success" href="{{ route('manage_hospital.create') }}"> اضافة مستشفى</a>

        </div>

        </div>

        </div>

        @if ($message = Session::get('success'))

        <div class="alert alert-success">

        <p>{{ $message }}</p>

        </div>

        @endif

        <table class="table table-bordered">

        <tr>

        <th>الرقم</th>

        <th>الإسم</th>

        <th>العنوان</th>

        <th>الرقم</th>

        <th width="280px">Action</th>

        </tr>

        @foreach ($Hospital as $h)

        <tr>

        <td>{{ $h->id }}</td>

        <td>{{ $h->name }}</td>

        <td>{{ $h->address }}</td>

        <td>{{ $h->number }}</td>

        <td>

        <form action="{{ route('manage_hospital.destroy',$h->id) }}" method="Post">

        <a class="btn btn-primary" href="{{ route('manage_hospital.edit',$h->id) }}">تعديل</a>

                @csrf

                 @method('DELETE')

                 <button type="submit" class="btn btn-danger">حذف</button>

        </form>

        </td>

        </tr>

        @endforeach

        </table>

        {{-- {!! $h->links() !!} 

</body>
</html> --}}


<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show rtl bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute start-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        {{-- <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> --}}
        <span class="me-1 font-weight-bold text-white">لوحة تحكم بنك الدم</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse px-0 w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('blood_bank_request.index') }}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text me-1">ادارة الطلبات</span>
          </a>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="{{ route('blood_stock.index') }}">
                  <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                  </div>
                  <span class="nav-link-text me-1">ادارة المخزون</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('donor_request.create') }}">
                  <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                  </div>
                  <span class="nav-link-text me-1">طلب دم</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('manage_hospital.index') }}">
                  <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                  </div>
                  <span class="nav-link-text me-1">ادارة المستشفيات</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('manage_donor.index') }}">
                  <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                  </div>
                  <span class="nav-link-text me-1">ادارة المتبرعين</span>
                </a>
              </li>
       
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav me-auto ms-0 justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <form method="POST" action="{{ route('logout-test') }}">
                @csrf  <button type="submit" class="btn btn-outline-primary btn-sm mb-0 ms-3">تسجيل خروج</button>
              </form>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container mt-2">

        <div class="row">

        <div class="col-lg-12 margin-tb">

        <div class="pull-left">

        <h2>ادارة المستشفيات</h2>

        </div>

        <div class="pull-right mb-2">

        </div>

        </div>

        </div>

        @if ($message = Session::get('success'))

        <div class="alert alert-success">

        <p>{{ $message }}</p>

        </div>

        @endif

        <table class="table table-bordered">

        <tr>

        <th>الرقم</th>

        <th>الإسم</th>

        <th>العنوان</th>

        <th>الرقم</th>

        <th width="280px"></th>

        </tr>

        @foreach ($Hospital as $h)

        <tr>

        <td>{{ $h->id }}</td>

        <td>{{ $h->name }}</td>

        <td>{{ $h->address }}</td>

        <td>{{ $h->number }}</td>

        <td>

        <form action="{{ route('manage_hospital.destroy',$h->id) }}" method="Post">

        <a class="btn btn-primary" href="{{ route('manage_hospital.edit',$h->id) }}">تعديل</a>

                @csrf

                 @method('DELETE')

        </form>

        </td>

        </tr>

        @endforeach

        </table>
  </main>
  
  <!--   Core JS Files   -->
  <script src="/js/core/popper.min.js"></script>
  <script src="/js/core/bootstrap.min.js"></script>
  <script src="/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="/js/plugins/chartjs.min.js"></script>
  <script>
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>