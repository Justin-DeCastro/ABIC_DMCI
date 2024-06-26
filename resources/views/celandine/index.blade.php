@extends('layouts.dynamicabout')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">

          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('admin/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('admin/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

 @extends('layouts.sidebar.sidebar')
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{ asset('admin/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('admin/plugins/moment/moment.min.js')}}"></script>
    <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin/dist/js/pages/dashboard.js')}}"></script>
    <script src="{{ asset('sweetalert2/src/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Page specific script -->


{{--
</body>
</html> --}}



<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Details</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCelandineModal">
                                Add Properties
                            </button>
                        </div>
                        <div class="card-body">
                            <table id="celandineTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Development Type</th>
                                        <th>Units</th>
                                        <th>Location</th>
                                        <th>General Features</th>
                                        <th>Building Features</th>
                                        <th>Link</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($celandines as $celandine)
                                    <tr>
                                        <td><img src="{{ asset($celandine->image) }}" alt="mid Image" width="100"></td>
                                        {{-- <td><img src="{{ asset('images/' . $alder->image) }}" alt="alder Image" width="100"></td> --}}
                                        <td>{{ $celandine->name }}</td>
                                        <td>{{ $celandine->price }}</td>
                                        <td>{{ $celandine->status }}</td>
                                        <td>{{ $celandine->development }}</td>
                                        <td>{{ $celandine->units }}</td>
                                        <td>{{ $celandine->location }}</td>
                                        <td>{{ $celandine->general }}</td>
                                        <td>{{ $celandine->building }}</td>
                                        <td>{{ $celandine->link }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary update-btn" data-celandine-id="{{ $celandine->id }}" data-toggle="modal" data-target="#updateCelandineModal{{ $celandine->id }}">
                                                Update
                                            </button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteCelandineModal{{ $celandine->id }}">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

            <div class="modal fade" id="addCelandineModal" tabindex="-1" role="dialog" aria-labelledby="addCelandineModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addCelandineModalLabel">Add New </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="addCelandineForm" action="{{ route('celandine.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" id="image" name="image"  accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" id="status" name="status">
                                </div>
                                <div class="form-group">
                                    <label for="development">Development</label>
                                    <input type="text" class="form-control" id="development" name="development">
                                </div>
                                <div class="form-group">
                                    <label for="units">Units</label>
                                    <input type="text" class="form-control" id="units" name="units">
                                </div>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" name="location">
                                </div>
                                <div class="form-group">
                                    <label for="general">General</label>
                                    <input type="text" class="form-control" id="general" name="general">
                                </div>
                                <div class="form-group">
                                    <label for="building">Building</label>
                                    <input type="text" class="form-control" id="building" name="building">
                                </div>
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="text" class="form-control" id="link" name="link">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            {{-- @foreach($alders as $alder) --}}
            <!-- Update Alder Modal -->
           <!-- Update Alder Modal -->
{{-- <div class="modal fade" id="updateAlderModal{{ $alder->id }}" tabindex="-1" role="dialog" aria-labelledby="updateAlderModalLabel{{ $alder->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateAlderModalLabel{{ $alder->id }}">Update Alder</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateAlderForm{{ $alder->id }}" action="{{ route('alder.update', ['id' => $alder->id]) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    <input type="hidden" name="alder_id" value="{{ $alder->id }}">
                    <!-- Image Upload -->
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image{{ $alder->id }}" name="image" multiple accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name{{ $alder->id }}" name="name" value="{{ $alder->name }}">
                    </div>
                    <!-- Other fields for updating Alder details -->
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price{{ $alder->id }}" name="price" value="{{ $alder->price }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" id="status{{ $alder->id }}" name="status" value="{{ $alder->status }}">
                    </div>
                    <div class="form-group">
                        <label for="development">Development</label>
                        <input type="text" class="form-control" id="development{{ $alder->id }}" name="development" value="{{ $alder->development }}">
                    </div>
                    <div class="form-group">
                        <label for="units">Units</label>
                        <input type="text" class="form-control" id="units{{ $alder->id }}" name="units" value="{{ $alder->units }}">
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location{{ $alder->id }}" name="location" value="{{ $alder->location }}">
                    </div>
                    <div class="form-group">
                        <label for="general">General</label>
                        <input type="text" class="form-control" id="general{{ $alder->id }}" name="general" value="{{ $alder->general }}">
                    </div>
                    <div class="form-group">
                        <label for="building">Building</label>
                        <input type="text" class="form-control" id="building{{ $alder->id }}" name="building" value="{{ $alder->building }}">
                    </div>
                    <!-- Add other fields here -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

            {{-- @endforeach --}}

        <!-- Delete Card Modal -->
        @foreach($celandines as $celandine)
            <!-- Delete Button -->

            <!-- Delete Modal -->
            <div class="modal fade" id="deleteCelandineModal{{ $celandine->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $celandine->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel{{ $celandine->id }}">Confirm Deletion</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <!-- Delete Form -->
                            <form id="deleteForm{{ $celandine->id }}" action="{{ route('celandine.delete', ['celandine' => $celandine->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button> <!-- Change button type to submit -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

        <!-- JavaScript for handling delete via AJAX -->
        {{-- <script>
            function deleteCelandine(celandineId) {
                $.ajax({
                    url: "{{ route('celandine.delete', ['celandines' => $celandine->id]) }}",

                    method: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        console.log('alder deleted successfully');
                        $('#deleteModal' + celandineId).modal('hide'); // Close modal after successful delete
                        location.reload(); // Reload the page
                    },
                    error: function(xhr, status, error) {
                        console.error('Error deleting card:', error);
                    }
                });
            }
        </script> --}}
{{-- <script>
    function updateAlder(alderId) {
        var formData = new FormData($('#updateAlderForm' + alderId)[0]);
        var url = "{{ route('alder.update', ['id' => ':alderId']) }}".replace(':alderId', alderId);

        $.ajax({
            url: url,
            method: 'PUT', // Change to PUT
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log('Alder updated successfully');
                $('#updateAlderModal' + alderId).modal('hide');
                location.reload();
            },
            error: function(xhr, status, error) {
                console.error('Error updating Alder:', error);
            }
        });
    }
</script> --}}



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

        <!-- Initialize DataTable -->
        <script>
            $(document).ready(function() {
                $('#celandineTable').DataTable();
            });
        </script>
        <style>
            .dataTables_wrapper .dataTables_paginate .paginate_button {
                padding: 0.5rem;
                margin: 0 0.2rem;
                border-radius: 0.25rem;
                cursor: pointer;
                background-color: #007bff;
                color: #fff;
                border: none;
            }

            .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
                background-color: #0056b3;
            }

            .dataTables_wrapper .dataTables_paginate .paginate_button.disabled {
                background-color: #ced4da;
                color: #6c757d;
                cursor: default;
            }
        </style>
