@extends('layouts.pagelayout')

@section('content')
    <section class="header_text sub">
        <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
        <h4><span>Check Out</span></h4>
    </section>
    <div class="row">
        <div class="span12">

            <div class="accordion" id="accordion2">
            <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Account &amp; Billing Details</a>
            </div>
            </div>
            </div>
            {!! Form::open(array('route' => 'address.store', 'class' => 'form','method'=>'post')) !!}



            <div class="accordion-inner">
                            <div class="row-fluid">
                                <div class="span6">
                                    <h4>Your Personal Details</h4>
                                    <div class="control-group">
                                        <label class="control-label">First Name</label>
                                        <div class="controls">

                                            {!! Form::text('name', null,
                array('class'=>'input-xlarge',
                      'placeholder'=>'')) !!}
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Last Name</label>
                                        <div class="controls">
                                            {!! Form::text('surname', null,
          array('class'=>'input-xlarge',
                'placeholder'=>'')) !!}
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Email Address</label>
                                        <div class="controls">
                                            {!! Form::text('email', null,
          array('class'=>'input-xlarge',
                'placeholder'=>'')) !!}
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Telephone</label>
                                        <div class="controls">
                                            {!! Form::text('tel', null,
          array('class'=>'input-xlarge',
                'placeholder'=>'')) !!}
                                        </div>
                                    </div>

                                </div>
                                <div class="span6">
                                    <h4>Your Address</h4>

                                    <div class="control-group">
                                        <label class="control-label"><span class="required">*</span> Address 1:</label>
                                        <div class="controls">
                                            {!! Form::text('adress', null,
          array('class'=>'input-xlarge',
                'placeholder'=>'')) !!}
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label"><span class="required">*</span> City:</label>
                                        <div class="controls">
                                            {!! Form::text('city', null,
           array('class'=>'input-xlarge',
                 'placeholder'=>'')) !!}
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label"><span class="required">*</span> Post Code:</label>
                                        <div class="controls">
                                            {!! Form::text('postcode', null,
            array('class'=>'input-xlarge',
                  'placeholder'=>'')) !!}
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label"><span class="required">*</span> Country:</label>
                                        {!! Form::text('country', null,
            array('class'=>'input-xlarge',
                  'placeholder'=>'')) !!}
                                    </div>

                                </div>
                            </div>
                        </div>

            {!! Form::submit('Confirm order',
                 array('class'=>'btn btn-inverse pull-left')) !!}
                    </div>

        {!! Form::close() !!}

        </div>


    @endsection

