@extends('coreui::master')

@section('body')

<div class="formTests">
    <form method="POST" action={{ url("/tests") }} >

        @CSRF
        <div class="row">
            <div class="form-group col-sm">
                <label for="testType">test type<span class="text-danger">*</span></label>
                <input type="number" class="form-control bg-dark" id="testType" name='testType' required style="border: 0px solid;color:white"> 
            </div>

            <div class="form-group col-sm">
                <label for="attempt">Attempt<span class="text-danger">*</span></label>
                <input type="number" class="form-control bg-dark" id="attempt" name='attempt' required style="border: 0px solid;color:white">
            </div>

            <div class="form-group col-sm">
                <label for="week">Week<span class="text-danger">*</span></label>
                <input type="number" class="form-control bg-dark" id="week" name='week' required style="border: 0px solid;color:white">
            </div>

            <button type="submit" class="form-control btn btn-success">Add</button>
        </form> 
    </div>
</div>

@endsection('body')