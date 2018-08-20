@extends('layouts.app')
@section('content')
    <h5>Edit {{$booking->booking_code}}</h5>
    <div class="row">
        <div class="col-md-6">

        
    <div id="card-advance" class="card card-default">
            <div class="card-body">
            <form action="{{route('booking.update', ['id' => $booking->id])}}" method="POST">
                @csrf
                @include('component.layouts.warning')
                            <div class="form-group">
                                <label>Booking Code</label>
                                <span class="help">e.g. "Mas Joko"</span>
                            <input type="text" name="booking_code" class="form-control" required="" value="{{$booking->booking_code}}">
                            </div>
                            <div class="form-group">
                                <label>Order Date</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="date" name="order_date" class="form-control" required="" value="{{$booking->order_date}}">
                            </div>
                            <div class="form-group">
                                <label>Rental Date</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="date" name="rental_date" class="form-control" required="" value="{{$booking->rental_date}}">
                            </div>
                            <div class="form-group">
                                <label>Return Date</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="date" name="return_date" class="form-control" required="" value="{{$booking->return_date}}">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="number" name="price"  class="form-control" required="" value="{{$booking->price}}">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" name="status"  class="form-control" required="" value="{{$booking->status}}">
                            </div>
                            <div class="form-group">
                                <label>Fine</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="number" name="fine"  class="form-control" required="" value="{{$booking->fine}}">
                            </div>
                            <div class="form-group">
                                <label>Employee ID</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" name="employee_id"  class="form-control" required="" value="{{$booking->employee_id}}">
                            </div>
                            <div class="form-group">
                                <label>Car ID</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" name="car_id"  class="form-control" required="" value="{{$booking->car_id}}">
                            </div>
                            <div class="form-group">
                                <label>Client ID</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" name="client_id"  class="form-control" required="" value="{{$booking->client_id}}">
                            </div>

                            <button class="btn btn-success btn-con" type="submit">Submit</button>
                            <button class="btn btn-default btn-con" type="reset">Cancel</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection