@extends('admin.layouts.master-super-admin')

@section('title')
    Clubs
@endsection
@section('css')
    <!-- select2 css -->
    <link href="{{ URL::asset('/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <div class="search-box me-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="searchTableList" placeholder="Search...">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#newContactModal"
                                    class="btn btn-success btn-rounded waves-effect waves-light addContact-modal mb-2"><i
                                        class="mdi mdi-plus me-1"></i> Add</button>
                            </div>
                        </div><!-- end col-->
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <!-- end row -->
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-hover dt-responsive nowrap w-100"
                            id="userList-table">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 40px;">#</th>
                                    <th scope="col">Prize</th>
                                    <th scope="col">Participants</th>
                                    <th scope="col">Mode</th>
                                    <th scope="col">Fee</th>
                                    <th scope="col">Format</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col" style="width: 200px;">Registered</th>
                                </tr>
                            </thead>
                        </table>
                        <!-- end table -->
                    </div>
                    <!-- end table responsive -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="newContactModal" tabindex="-1" aria-labelledby="newContactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newContactModalLabel">Add Tournament</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" class="createOwner-form" id="createTournament" method="POST"
                        action="{{ route('super-admin.tournament.create') }}" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="hidden" class="form-control" id="userid-input">
                                <div class="mb-3">
                                    <label for="prize-input" class="form-label">Prize</label>
                                    <input type="number" id="prize-input" name="prize" class="form-control"
                                        placeholder="Enter Prize" required />
                                    <div class="invalid-feedback">Please enter prize.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="participants-input" class="form-label">Participants</label>
                                    <input type="number" id="participants-input" name="participants" class="form-control"
                                        placeholder="Enter Participants" required />
                                    <div class="invalid-feedback">Please enter Participants.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="fee-input" class="form-label">Entry Fee</label>
                                    <input type="number" id="fee-input" name="fee" class="form-control"
                                        placeholder="Enter Entry Fee" required />
                                    <div class="invalid-feedback">Please enter Entry fee.</div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="starting-date-input" class="form-label">Date</label>
                                    <div class="">
                                        <input class="form-control" type="date" id="starting-date-input"
                                            name="starting_date">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="format-input" class="form-label">Format</label>
                                    <select class="form-select" name="format" id="format-input">
                                        <option value="">Select</option>
                                        <option value="1">1 v 1</option>
                                        <option value="2">Team up</option>
                                    </select>
                                    <div class="invalid-feedback">Please select designation.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="mode-input" class="form-label">Mode</label>
                                    <select class="form-select" name="mode" id="mode-input">
                                        <option value="">Select</option>
                                        <option value="1">Single Elimination</option>
                                        <option value="2">Double Elimination</option>
                                    </select>
                                    <div class="invalid-feedback">Please select designation.</div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" id="addContact-btn" class="btn btn-success">Add
                                        Tournament</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end modal body -->
            </div>
            <!-- end modal-content -->
        </div>
        <!-- end modal-dialog -->
    </div>
    <!-- end newContactModal -->

    <!-- removeItemModal -->
    <div class="modal fade" id="removeItemModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body px-4 py-5 text-center">
                    <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="avatar-sm mb-4 mx-auto">
                        <div class="avatar-title bg-primary text-primary bg-opacity-10 font-size-20 rounded-3">
                            <i class="mdi mdi-trash-can-outline"></i>
                        </div>
                    </div>
                    <p class="text-muted font-size-16 mb-4">Are you Sure You want to Remove this User ?</p>

                    <div class="hstack gap-2 justify-content-center mb-0">
                        <button type="button" class="btn btn-danger" id="remove-item">Remove Now</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end removeItemModal -->
@endsection
@section('script')
    <!-- select2 js -->
    <script src="{{ URL::asset('/assets/libs/select2/js/select2.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ URL::asset('/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- ecommerce-customer-list init -->
    <script src="{{ URL::asset('/assets/js/pages/tournament.js') }}"></script>
@endsection
