@extends('admin.layouts.master')

@section('title')
    Tournaments
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"
        type="text/css">
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="favorite-icon">
                        <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                    </div>
                    <h5 class="fs-17 mb-2">Tournament #1</h5>
                    <ul class="list-inline mb-0">
                        <li>
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-account-multiple"></i> 32</p>
                        </li>
                        <li>
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-seal"></i> $350</p>
                        </li>
                    </ul>
                    <div class="mt-3 hstack gap-2">
                        <span class="badge rounded-1 badge-soft-success">Completed</span>
                    </div>
                    <div class="mt-4 hstack gap-2">
                        <a href="tournament-details" class="btn btn-soft-success w-100">View</a>
                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Enroll</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="favorite-icon">
                        <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                    </div>
                    <h5 class="fs-17 mb-2">Tournament #2</h5>
                    <ul class="list-inline mb-0">
                        <li>
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-account-multiple"></i> 64</p>
                        </li>
                        <li>
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-seal"></i> $350</p>
                        </li>
                    </ul>
                    <div class="mt-3 hstack gap-2">
                        <span class="badge rounded-1 badge-soft-success">Completed</span>
                    </div>
                    <div class="mt-4 hstack gap-2">
                        <a href="tournament-details" class="btn btn-soft-success w-100">View</a>
                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Enroll</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="favorite-icon">
                        <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                    </div>
                    <h5 class="fs-17 mb-2">Tournament #3</h5>
                    <ul class="list-inline mb-0">
                        <li>
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-account-multiple"></i> 128</p>
                        </li>
                        <li>
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-seal"></i> $350</p>
                        </li>
                    </ul>
                    <div class="mt-3 hstack gap-2">
                        <span class="badge rounded-1 badge-soft-success">Completed</span>
                    </div>
                    <div class="mt-4 hstack gap-2">
                        <a href="tournament-details" class="btn btn-soft-success w-100">View</a>
                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Enroll</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="favorite-icon">
                        <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                    </div>
                    <h5 class="fs-17 mb-2">Tournament #4</h5>
                    <ul class="list-inline mb-0">
                        <li>
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-account-multiple"></i> 256</p>
                        </li>
                        <li>
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-seal"></i> $350</p>
                        </li>
                    </ul>
                    <div class="mt-3 hstack gap-2">
                        <span class="badge rounded-1 badge-soft-success">Completed</span>
                    </div>
                    <div class="mt-4 hstack gap-2">
                        <a href="tournament-details" class="btn btn-soft-success w-100">View</a>
                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Enroll</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="favorite-icon">
                        <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                    </div>
                    <h5 class="fs-17 mb-2">Tournament #5</h5>
                    <ul class="list-inline mb-0">
                        <li>
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-account-multiple"></i> 512</p>
                        </li>
                        <li>
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-seal"></i> $350</p>
                        </li>
                    </ul>
                    <div class="mt-3 hstack gap-2">
                        <span class="badge rounded-1 badge-soft-success">Completed</span>
                    </div>
                    <div class="mt-4 hstack gap-2">
                        <a href="tournament-details" class="btn btn-soft-success w-100">View</a>
                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Enroll</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="favorite-icon">
                        <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                    </div>
                    <h5 class="fs-17 mb-2">Tournament #6</h5>
                    <ul class="list-inline mb-0">
                        <li>
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-account-multiple"></i> 1024</p>
                        </li>
                        <li>
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-seal"></i> $350</p>
                        </li>
                    </ul>
                    <div class="mt-3 hstack gap-2">
                        <span class="badge rounded-1 badge-soft-warning">Upcoming</span>
                    </div>
                    <div class="mt-4 hstack gap-2">
                        <a href="tournament-details" class="btn btn-soft-success w-100">View</a>
                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Enroll</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="favorite-icon">
                        <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                    </div>
                    <h5 class="fs-17 mb-2">Tournament #7</h5>
                    <ul class="list-inline mb-0">
                        <li>
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-account-multiple"></i> 2048</p>
                        </li>
                        <li>
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-seal"></i> $350</p>
                        </li>
                    </ul>
                    <div class="mt-3 hstack gap-2">
                        <span class="badge rounded-1 badge-soft-danger">Cancelled</span>
                    </div>
                    <div class="mt-4 hstack gap-2">
                        <a href="tournament-details" class="btn btn-soft-success w-100">View</a>
                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Enroll</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="favorite-icon">
                        <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                    </div>
                    <h5 class="fs-17 mb-2">Tournament #8</h5>
                    <ul class="list-inline mb-0">
                        <li>
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-account-multiple"></i> 4096</p>
                        </li>
                        <li>
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-seal"></i> $350</p>
                        </li>
                    </ul>
                    <div class="mt-3 hstack gap-2">
                        <span class="badge rounded-1 badge-soft-warning">Upcoming</span>
                    </div>
                    <div class="mt-4 hstack gap-2">
                        <a href="tournament-details" class="btn btn-soft-success w-100">View</a>
                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Enroll</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->

    </div>
    <!--end row-->

    <div class="row justify-content-between align-items-center mb-3">
        <div class="col-auto me-auto">
            <p class="text-muted mb-0">Showing <b>1</b> to <b>12</b> of <b>45</b> entries</p>
        </div>
        <div class="col-auto">
            <div class="card d-inline-block ms-auto mb-0">
                <div class="card-body p-2">
                    <nav aria-label="Page navigation example" class="mb-0">
                        <ul class="pagination mb-0">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">...</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">12</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <!-- Modal -->
    <div class="modal fade" id="applyJobs" tabindex="-1" aria-labelledby="applyJobsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="applyJobsLabel">Enroll in the tournament</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#!">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="designation-input" class="form-label">Player 1</label>
                                    <select class="form-select" id="designation-input">
                                        <option>Select</option>
                                        <option value="2">Player 1 [USER ID: #AB12]</option>
                                        <option value="2">Player 2 [USER ID: #AB12]</option>
                                        <option value="2">Player 3 [USER ID: #AB12]</option>
                                        <option value="2">Player 4 [USER ID: #AB12]</option>
                                        <option value="2">Player 5 [USER ID: #AB12]</option>

                                    </select>
                                    <div class="invalid-feedback">Please select designation.</div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="designation-input" class="form-label">Player 2</label>
                                    <select class="form-select" id="designation-input">
                                        <option>Select</option>
                                        <option value="2">Player 1 [USER ID: #AB12]</option>
                                        <option value="2">Player 2 [USER ID: #AB12]</option>
                                        <option value="2">Player 3 [USER ID: #AB12]</option>
                                        <option value="2">Player 4 [USER ID: #AB12]</option>
                                        <option value="2">Player 5 [USER ID: #AB12]</option>

                                    </select>
                                    <div class="invalid-feedback">Please select designation.</div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="designation-input" class="form-label">Player 3</label>
                                    <select class="form-select" id="designation-input">
                                        <option>Select</option>
                                        <option value="2">Player 1 [USER ID: #AB12]</option>
                                        <option value="2">Player 2 [USER ID: #AB12]</option>
                                        <option value="2">Player 3 [USER ID: #AB12]</option>
                                        <option value="2">Player 4 [USER ID: #AB12]</option>
                                        <option value="2">Player 5 [USER ID: #AB12]</option>

                                    </select>
                                    <div class="invalid-feedback">Please select designation.</div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="designation-input" class="form-label">Player 4</label>
                                    <select class="form-select" id="designation-input">
                                        <option>Select</option>
                                        <option value="2">Player 1 [USER ID: #AB12]</option>
                                        <option value="2">Player 2 [USER ID: #AB12]</option>
                                        <option value="2">Player 3 [USER ID: #AB12]</option>
                                        <option value="2">Player 4 [USER ID: #AB12]</option>
                                        <option value="2">Player 5 [USER ID: #AB12]</option>

                                    </select>
                                    <div class="invalid-feedback">Please select designation.</div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="designation-input" class="form-label">Player 5</label>
                                    <select class="form-select" id="designation-input">
                                        <option>Select</option>
                                        <option value="2">Player 1 [USER ID: #AB12]</option>
                                        <option value="2">Player 2 [USER ID: #AB12]</option>
                                        <option value="2">Player 3 [USER ID: #AB12]</option>
                                        <option value="2">Player 4 [USER ID: #AB12]</option>
                                        <option value="2">Player 5 [USER ID: #AB12]</option>

                                    </select>
                                    <div class="invalid-feedback">Please select designation.</div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button class="btn btn-success">Submit <i
                                            class="bx bx-send align-middle"></i></button>
                                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.js') }}"></script>
@endsection
