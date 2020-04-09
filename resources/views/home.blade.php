@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1 style="color:white">Today's Appointment :</h1>
            <div class="card">
                <div class="card-header">Patient Name : Manan Rasool</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <li> He need an Appointment urgently today because of his psychological disorder .</li>
                <li> Time : 12 : 00 PM - 1 : 00 PM .  </li>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Patient Name : Tarun Kumar</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <li> His Appointment is regarding the heart surgery.</li>
                <li> Time : 1 : 00 PM - 2 : 00 PM .  </li>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Patient Name : Yudhvir</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <li> He want to remove his excessive body hair with the help of Laser Treatment .</li>
                <li> Time : 2 : 00 PM - 3 : 00 PM .  </li>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Patient Name : Ansh Bansal</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <li> He want an Hair Transplantation Surgery .</li>
                <li> Time : 12 : 00 AM - 1 : 00 AM .  </li>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
