@extends('Admin/layout')
@section('container')
<div class="row">
        </div>
        <div class="row">
            <div class="col-sm-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5 >Total Reservations</h5>
                  <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0">{{ $reservations }}</h2>
                        <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                      </div>
                      <h6 class="text-muted font-weight-normal"></h6>
                    </div>
                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-calendar-check text-primary ms-auto"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5>Total Plats</h5>
                  <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0">{{ $plats }}</h2>
                        <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                      </div>
                      <h6 class="text-muted font-weight-normal"></h6>
                    </div>
                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-food text-danger ms-auto"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5>Total Admins</h5>
                  <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0">{{$admin}}</h2>
                        <p class="text-danger ms-2 mb-0 font-weight-medium"></p>
                      </div>
                      <h6 class="text-muted font-weight-normal"></h6>
                    </div>
                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-account-circle text-success ms-auto"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
              <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title mb-4">TO DO LIST</h4>
                        <ul class="todo-list">
                          <li class="checklist-item mb-3">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              <span class="task-title">Create Plate Categories</span>
                            </label>
                          </li>
                          <li class="checklist-item mb-3">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              <span class="task-title">Add New Plates</span>
                            </label>
                          </li>
                          <li class="checklist-item mb-3">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              <span class="task-title">Manage Chefs</span>
                            </label>
                          </li>
                          <li class="checklist-item mb-3">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              <span class="task-title">Update Plate Details</span>
                            </label>
                          </li>
                          <li class="checklist-item mb-3">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              <span class="task-title">Admin Access Management</span>
                            </label>
                          </li>
                          <li class="checklist-item mb-3">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              <span class="task-title">Reservation System</span>
                            </label>
                          </li>
                          <li class="checklist-item mb-3">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              <span class="task-title">View and Manage Reservations</span>
                            </label>
                          </li>
                          <li class="checklist-item mb-3">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              <span class="task-title">Plate Availability Tracking</span>
                            </label>
                          </li>
                          <li class="checklist-item mb-3">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              <span class="task-title">Reports and Analytics</span>
                            </label>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>



                <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Best Products</h4>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="preview-list">
                            @foreach($platsdisplay as $plat)
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-primary">
                                <img class="img-xs" src="{{asset('assets/images/plats/'.$plat->plat_img)}}" alt="">
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">{{  $plat->plat_name }}</h6>
                                  <p class="text-muted mb-0">Rating : {{  $plat->rating }}</p>
                                </div>
                              </div>
                            </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Latest Reservations</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th style="text-align:center;"> Reservation ID </th>
                              <th style="text-align:center;"> Reservation Name </th>
                              <th  style="text-align:center;"> Number of Guests </th>
                              <th   style="text-align:center;"> Date </th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($reservation as $reserv)
                            <tr>
                              <td style="text-align:center;"> {{    $reserv->id      }} </td>
                              <td style="text-align:center;"> {{   $reserv->reserv_name  }} </td>
                              <td  style="text-align:center;"> {{    $reserv->no_guest      }} </td>
                              <td    style="text-align:center;"> {{    $reserv->reserv_date.' '.$reserv->reserv_time    }} </td>
                            </tr>
                          @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
@endsection()

