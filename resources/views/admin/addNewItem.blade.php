@php
    $versity = DB::table('versity')->get();
@endphp
<!DOCTYPE html>
<html>

<head>
    {{ View::make('head') }}
</head>

<body>
  <!-- Sidenav -->
  {{ View::make('admin.sideNav') }}

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    {{ View::make('admin.topNav') }}

    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Add New Item</a></li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->

        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-6">
          <div class="card">
            <div class="card-header text-center border-bottom-0 p-0 pt-2">
              <h4 class="card-title">Add New Food Item</h4>
            </div>
            <div class="card-body pt-0">
              <form role="form" method="post" action="{{ url('/addNewProduct') }}" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                  <label for="exampleFormControlFile1">Set Food Image - Supported Formats: jpg/jpeg </label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="productImage" required>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Product Name" type="text" name="productName" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-planet"></i></span>
                    </div>
                    <input class="form-control" placeholder="Item Quantity" type="number" name="quantity" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                    </div>
                    <input class="form-control" placeholder="Item Price" type="number" name="price" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-planet "></i></span>
                    </div>
                    <select class="form-control" id="" name="category" required>
                      <option value="">Select Item Category ...</option>
                      <option value="breakfast">Breakfast</option>
                      <option value="lunch">Lunch</option>
                      <option value="dryfood">Dry Food</option>
                      <option value="drinks">Drinks</option>
                      <option value="others">Others</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-planet "></i></span>
                    </div>
                    <select class="form-control" id="" name="canteenName" required>
                      <option value="">Select Canteen ...</option>
                      @foreach ($versity as $row )
                            <option value="{{ $row->code  }}">{{ $row->instituteName }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                    </div>
                  <input class="form-control" placeholder="Item Details" type="text" name="details" required>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4">Save New Food</button>
                </div>
              </form>


            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      {{ View::make('admin.footer') }}

    </div>
  </div>
  <!-- uFood Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

  <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- uFood JS -->
  <script src="{{ asset('js/ufood.js?v=1.2.0') }}"></script>
</body>

</html>
