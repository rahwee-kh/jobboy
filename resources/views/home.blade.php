@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ __('My Profile') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-left">
                            <a href="/jobs/create" class="btn btn-primary btn-sm float-right ">
                                <i class="fa-solid fa-circle-plus"></i>
                                Create Job
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="profile">
                                <h2>{{ auth()->user()->name }}</h2>
                                <p>{{ auth()->user()->about ?? '' }}</p>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 pt-3">
                            <ul class="list-group">
                                @foreach ($jobs as $job)
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                      <div class="fw-bold">
                                          <a href="/job_detail/{{ $job->id }}" class="job-title">{{ $job->name }}</a>
                                      </div>
                                      <a href="" class="company-name">{{ $job->user->name }}</a>
                                      <p>Full Time | Phnom Penh <span style="color: red;">Negotiable</span></p>
                                     
                                    </div>
                                    <div class="salary">
                                        Mar-24-2022
                                        <div class="btn btn-outline-info ml-3">Apply Now</div>
                                    </div>
                                  </li>
                                @endforeach
                                
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
