<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UnivFoods | {{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('storage/icons/food-delivery.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@400;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body>
   @include('partials.navbar')

    <div class=" min-vh-100">

          <div class="container-fluid">
            <div class="row">
              <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">
                        <i class="bi bi-house-dash"></i>
                        Dashboard
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/merchreg-approve">
                        <i class="bi bi-archive"></i>
                        Merchants Registration Request
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/area">
                        <i class="bi bi-geo-alt-fill"></i>
                        Areas
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/products">
                        <i class="bi bi-cart"></i>
                        Products
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/customers">
                        <i class="bi bi-people"></i>
                        Customers
                      </a>
                    </li>
                  </ul>

                  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                      <span data-feather="plus-circle"></span>
                    </a>
                  </h6>
                  <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Current month
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Last quarter
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Social engagement
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Year-end sale
                      </a>
                    </li>
                  </ul>
                </div>
              </nav>

              <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                  <h1 class="h2">Dashboard</h1>
                  <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                      <span data-feather="calendar"></span>
                      This week
                    </button>
                  </div>
                </div>

                <div class="container mt-5">
                    <h2>User Feedback</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Feedback</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>Great app! Really enjoyed using it.</td>
                                <td>2023-08-10</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane Smith</td>
                                <td>Some suggestions for improvement:...</td>
                                <td>2023-08-11</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2>Orders</h2>
                <div class="table-responsive">
                  <table class="table table-striped table-sm">
                    <thead>

                      <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">User</th>
                        <th scope="col">Product</th>
                        <th scope="col">Merchant</th>
                        <th scope="col">Amount(RM)</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user->username }}(#{{ $order->user->id }})</td>
                            <td>{{ $order->product->name }}(#{{ $order->product->id }})</td>
                            <td>{{ $order->merchant->name}}(#{{ $order->merchant->id }})</td>
                            <td>{{ $order->product->price }}</td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </main>
            </div>
          </div>


    </div>
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

