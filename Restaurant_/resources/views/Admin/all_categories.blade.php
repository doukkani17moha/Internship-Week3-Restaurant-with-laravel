@extends('Admin/layout')
@section('container')
    <a href="/add/categorie" type="button" class="btn btn-success" style="width:170px;height:35px;padding-top:9px;">+ Add
        Categorie</a>
    <br>
    <br>
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Categorie Details</h4>
                    @if (Session::has('wrong'))
                        <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong>Opps !</strong> {{ Session::get('wrong') }}
                        </div>
                        <br>
                    @endif
                    @if (Session::has('success'))
                        <div class="success">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong>Congrats !</strong> {{ Session::get('success') }}
                        </div>
                        <br>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Date Creation</th>
                                    @php
                                        $usertype = Auth::user()->usertype;
                                    @endphp
                                    @if ($usertype != 'Sub Admin')
                                        <th> Action </th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $categorie)
                                    <tr>
                                        <td>
                                            <span>{{ $categorie->id }}</span>
                                        </td>
                                        <td> {{ $categorie->category_name }} </td>
                                        <td> {{ $categorie->category_descr }}</td>
                                        <td> {{ $categorie->created_at }} </td>
                                        @if ($usertype != 'Sub Admin')
                                        <td>
                                            <a href="{{ asset('/categorie/edit/' . $categorie->id) }}"
                                                class="badge badge-outline-primary">Edit</a>
                                            <a href="{{ asset('/categorie/delete/' . $categorie->id) }}"
                                                class="badge badge-outline-danger" style="margin-left:10px;">Delete</a>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection()
    <style>
        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
        }

        .success {
            padding: 20px;
            background-color: #4BB543;
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>
