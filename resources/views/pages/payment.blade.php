@extends('main')
@section('title','Payment')

     <style>
        .alert.parsley {
            margin-top: 5px;
            margin-bottom: 0px;
            padding: 10px 15px 10px 15px;
        }
        .check .alert {
            margin-top: 20px;
        }
        .credit-card-box .panel-title {
            display: inline;
            font-weight: bold;
        }
        .credit-card-box .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 100%;
        }
        .credit-card-box .display-tr {
            display: table-row;
        }
    </style>
{{--
<body id="app-layout"> --}}
  @section('breadcrumb')
    <br/>
    <br/>
    <br/>
    <div class="row-fluid">
        <div class="span8 col-md-offset-2">
            <h1 class="text-primary text-center">
              <strong>DodoWorld With Stripe Payment</strong>
            </h1>
        </div>
    </div>
  @endsection

  @section('maininfo')
    <div class="container">
      <br/>
      <br/>
      <div class="row-fluid" id="payform">
        <div class="span6 span-offset-2">
          <div class="panel panel-default credit-card-box">
              <div class="panel-heading display-table" >
                  <div class="row-fluid display-tr" >
                      <h3 class="panel-title display-td" >Payment Details Form</h3>
                      <div class="display-td" >
                          <img class="img-responsive pull-right" src="img/accepted_c22e0.png">
                      </div>
                  </div>
              </div>
              <div class="panel-body">
                  <div class="span12">
                    {!! Form::open(['url' => route('order-post'), 'data-parsley-validate', 'id' => 'payment-form']) !!}
                      @if ($message = Session::get('success'))
                      <div class="status alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                              <strong>{{ $message }}</strong>
                      </div>
                      @endif
                      <div class="form-group" id="product-group">
                          {!! Form::label('plane', 'Select Plan:') !!}
                          {!! Form::select('plane', ['Safari Package A' => 'Package A ($1000)', 'Safari Package B' => 'Package B ($2000)',
                            'Safari Package C' => 'Package C ($1500)','Safari Package D' => 'Package D ($1500)','Safari Package E' => 'Package E ($1500)','Safari Package F' => 'Package F ($1500)'], 'Book', [
                              'class'                       => 'input-block-level form-control',
                              'required'                    => 'required',
                              'data-parsley-class-handler'  => '#product-group'
                              ]) !!}
                      </div>

                      <div class="form-group" id="cc-group">
                          {!! Form::label(null, 'Card Holder Name:') !!}
                          {!! Form::text(null, null, [
                              'class'                         => 'input-block-level form-control',
                              'required'                      => 'required',
                              'data-stripe'                   => 'name',
                              'data-parsley-type'             => 'name',
                              'maxlength'                     => '255',
                              'data-parsley-trigger'          => 'change focusout',
                              'data-parsley-class-handler'    => '#cc-group'
                              ]) !!}
                      </div>

                      <div class="form-group" id="cc-group">
                          {!! Form::label(null, 'Credit card number:') !!}
                          {!! Form::text(null, null, [
                              'class'                         => 'input-block-level form-control',
                              'required'                      => 'required',
                              'data-stripe'                   => 'number',
                              'data-parsley-type'             => 'number',
                              'maxlength'                     => '16',
                              'data-parsley-trigger'          => 'change focusout',
                              'data-parsley-class-handler'    => '#cc-group'
                              ]) !!}
                      </div>
                      <div class="form-group" id="ccv-group">
                          {!! Form::label(null, 'CVC (3 or 4 digit number):') !!}
                          {!! Form::text(null, null, [
                              'class'                         => 'input-block-level form-control',
                              'required'                      => 'required',
                              'data-stripe'                   => 'cvc',
                              'data-parsley-type'             => 'number',
                              'data-parsley-trigger'          => 'change focusout',
                              'maxlength'                     => '4',
                              'data-parsley-class-handler'    => '#ccv-group'
                              ]) !!}
                      </div>
                      <div class="row-fluid">
                        <div class="span6">
                          <div class="form-group" id="exp-m-group">
                              {!! Form::label(null, 'Ex. Month') !!}
                              {!! Form::selectMonth(null, null, [
                                  'class'                 => 'input-block-level form-control',
                                  'required'              => 'required',
                                  'data-stripe'           => 'exp-month'
                              ], '%m') !!}
                          </div>
                        </div>
                        <div class="span6">
                          <div class="form-group" id="exp-y-group">
                              {!! Form::label(null, 'Ex. Year') !!}
                              {!! Form::selectYear(null, date('Y'), date('Y') + 10, null, [
                                  'class'             => 'input-block-level form-control',
                                  'required'          => 'required',
                                  'data-stripe'       => 'exp-year'
                                  ]) !!}
                          </div>
                        </div>
                      </div>
                        <div class="form-group">
                            {!! Form::submit('Place order!', ['class' => 'btn btn-lg btn-block  btn-primary btn-order', 'id' => 'submitBtn', 'style' => 'margin-bottom: 10px;']) !!}
                        </div>
                        <div class="row-fluid">
                          <div class="span12">
                              <span class="payment-errors" style="color: red;margin-top:10px;"></span>
                          </div>
                        </div>
                    {!! Form::close() !!}
                  </div>
              </div>
          </div>

        </div>
      </div>
    </div>
  @endsection
