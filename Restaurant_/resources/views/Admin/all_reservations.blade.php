@extends('Admin/layout')
@section('container')
<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Reservation Details</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>      
                            <th> Date </th>
                            <th> Time </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Phone</th>                 
                            <th> No of Guests </th>                        
                            <th> Message </th>
                          </tr>

                        </thead>
                        <tbody>
                        @foreach($reservations as $reservation)
                          <tr>
                            <td>
                              <span class="ps-2">{{ $reservation->reserv_date }}</span>
                            </td>
                            <td> {{ $reservation->reserv_time }} </td>
                            <td> {{ $reservation->reserv_name }} </td>
                            <td> {{ $reservation->reserv_email }} </td>
                            <td> {{  $reservation->reserv_phone }} </td>
                            <td> {{ $reservation->no_guest }} </td>
                            <td> {{ $reservation->reserv_msg }} </td>
                          </tr>
                        @endforeach    
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection()