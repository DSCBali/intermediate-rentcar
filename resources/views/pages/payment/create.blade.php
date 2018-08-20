@extends('layouts.app')
@section('content')
    <h5>Add Payment</h5>
    <div class="row">
        <div class="col-md-6">

        
    <div id="card-advance" class="card card-default">
            
            <div class="card-body">
            <form action="{{route('payment.store')}}" method="POST">
                @csrf
                @include('component.layouts.warning')
                            <div class="form-group">
                                <label>Type</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <select class="form-control" required="" name="type">
                                    <option>DP</option>
                                    <option>Repayment</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="number" class="form-control" name="amount" required="">
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="date" class="form-control" required="" name="date">
                            </div>
                            <div class="form-group">
                                <label>Client ID</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="password" class="form-control" required="" name="client_id">
                            </div>
                            <div class="form-group">
                                <label>Employee ID</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="password" class="form-control" required="" name="employee_id">
                            </div>
                            <div class="form-group">
                                <label>Booking ID</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="password" class="form-control" required="" name="booking_id">
                            </div>
                            <button class="btn btn-success btn-con" type="submit">Save</button>
                            <button class="btn btn-default btn-con" type="reset">Cancel</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection