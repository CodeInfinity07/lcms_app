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
        @foreach ($tournaments as $tournament)
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="favorite-icon">
                            <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                        </div>
                        <h5 class="fs-17 mb-2">Tournament #{{ $tournament->id }}</h5>
                        <ul class="list-inline mb-0">
                            <li>
                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-account-multiple"></i>
                                    {{ $tournament->participants }}</p>
                            </li>
                            <li>
                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-seal"></i> ${{ $tournament->prize }}</p>
                            </li>
                        </ul>
                        <div class="mt-3 hstack gap-2">
                            <span class="badge rounded-1 badge-soft-warning">Upcoming</span>
                        </div>
                        <div class="mt-4 hstack gap-2">
                            <a href="#viewDetails{{ $tournament->id }}" data-bs-toggle="modal"
                                class="btn btn-soft-success w-100">View</a>
                            <a href="#applyTournament{{ $tournament->id }}" data-bs-toggle="modal"
                                class="btn btn-soft-primary w-100">Enroll</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="viewDetails{{ $tournament->id }}" tabindex="-1" style="position: fixed;"
                aria-labelledby="viewDetailsLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="viewDetailsLabel">Tournament Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#!">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <span>Prize: {{ $tournament->prize }}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <span>Participants: {{ $tournament->participants }}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <span>Mode:
                                                @if ($tournament->mode == 1)
                                                    1 v 1
                                                @else
                                                    Team Up
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <span>Format:
                                                @if ($tournament->format == 1)
                                                    Single Elimination
                                                @else
                                                    Double Elimination
                                                @endif
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <span>Fee: {{ $tournament->fee }}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <span>Start Date: {{ $tournament->starting_date }}</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="applyTournament{{ $tournament->id }}" tabindex="-1"
                aria-labelledby="applyTournamentLabel" style="position: fixed;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="applyTournamentLabel">Enroll in the tournament</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#!">
                                <input type="hidden" name="tournament_id" value="{{ $tournament->id }}">

                                <div class="row">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="player-select-{{ $i }}" class="form-label">Player
                                                    {{ $i }}</label>
                                                <select class="form-select player-select"
                                                    id="player-select-{{ $i }}" name="player_ids[]" required>
                                                    <option value="" selected disabled>Select</option>
                                                    @foreach ($players as $player)
                                                        <option value="{{ $player->id }}">{{ $player->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">Please select a player.</div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </div>
            </div>
            <!--end col-->
        @endforeach
    </div>
    <!--end row-->

    <div class="row justify-content-between align-items-center mb-3">
        <div class="col-auto me-auto">
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
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.js') }}"></script>
    <script>
        // JavaScript to prevent duplicate player selections
        document.addEventListener('DOMContentLoaded', function() {
            const selects = document.querySelectorAll('.player-select');

            selects.forEach(select => {
                select.addEventListener('change', function() {
                    const selectedValues = Array.from(selects).map(s => s.value);
                    selects.forEach(s => {
                        Array.from(s.options).forEach(option => {
                            if (option.value && selectedValues.includes(option
                                    .value)) {
                                if (s !== select || option.value !== select.value) {
                                    option.disabled = true;
                                } else {
                                    option.disabled = false;
                                }
                            } else {
                                option.disabled = false;
                            }
                        });
                    });
                });
            });
        });
    </script>
@endsection
