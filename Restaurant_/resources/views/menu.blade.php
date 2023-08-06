@extends('layout', ['title'=> 'Home'])

@section('page-content')

<br><br><br><br>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        crossorigin="anonymous">
    <script src="script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<table class="table table-striped table-bordered" style="margin:10%; max-width:80%;">
        @foreach($plat as $Plats)
            <tr>
                <td>
                    <img src="{{asset('assets/images/plats/'.$Plats->plat_img)}}" height=150px width=180px></td>
                    <td><h2>{{$Plats->plat_name}}</h2>
                    <h4>${{$Plats->plat_price}}</h4>
                    <p>{{$Plats->plat_descr}}</p>
                    <form method="post" >
                        @csrf                   
                        <span class="product_rating">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <span class="rating_avg">({{ $Plats->rating}})</span>
                       </span>
                        <br>
                        <br>
                    </form>
                </td>
            </tr>
        @endforeach
</table>
@endsection
