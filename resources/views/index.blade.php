@extends('layouts.tema.layouts')
@section('content')
    <div class="col-6">
        <h4> Share yours ideas </h4>
        <div class="row">
            <div class="mb-3">
                <textarea class="form-control" id="idea" rows="3"></textarea>
            </div>
            <div class="">
                <button class="btn btn-dark"> Share </button>
            </div>
        </div>
        <hr>
        <div class="mt-3">
            <div class="card">
                <div class="px-3 pt-4 pb-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                 src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                            <div>
                                <h5 class="card-title mb-0"><a href="#"> Mario
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="fs-6 fw-light text-muted">
                        comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
                        of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
                        ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum
                        dolor sit amet..", comes from a line in section 1.10.32.
                    </p>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                                        </span> 100 </a>
                        </div>
                        <div>
                                    <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                                        3-5-2023 </span>
                        </div>
                    </div>
                    <div>
                        <div class="mb-3">
                            <textarea class="fs-6 form-control" rows="1"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-sm"> Post Comment </button>
                        </div>

                        <hr>
                        <div class="d-flex align-items-start">
                            <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                                 src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi"
                                 alt="Luigi Avatar">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="">Luigi
                                    </h6>
                                    <small class="fs-6 fw-light text-muted"> 3 hour
                                        ago</small>
                                </div>
                                <p class="fs-6 mt-3 fw-light">
                                    and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                                    Evil)
                                    by
                                    Cicero, written in 45 BC. This book is a treatise on the theory of ethics,
                                    very
                                    popular during the Renaissan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
