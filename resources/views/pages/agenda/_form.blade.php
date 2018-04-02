        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header text-white bg-primary">
                        Add New Agenda
                    </div>
                    <div class="card-body">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            {!! Form::label('title', 'Perihal') !!}
                            {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required', 'autofocus']) !!}
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            {!! Form::label('description', 'Uraian') !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 5, 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('description') }}</small>
                        </div>

                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            {!! Form::label('location', 'Lokasi') !!}
                            {!! Form::text('location', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('location') }}</small>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            {!! Form::label('address', 'Alamat') !!}
                            {!! Form::textarea('address', null, ['class' => 'form-control', 'rows' => 5, 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('address') }}</small>
                        </div>
                        
                        <div class="form-group{{ $errors->has('disposition') ? ' has-error' : '' }}">
                            {!! Form::label('disposition', 'Disposisi') !!}
                            {!! Form::text('disposition', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('disposition') }}</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-white bg-primary">
                        Publish
                    </div>
                    <div class="card-body">
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            {!! Form::label('status', 'Status') !!}
                            {!! Form::select('status',[0 => 'Jadwal', 1 => 'Selesai'], null, ['id' => 'status', 'class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('status') }}</small>
                        </div>
                        <div class="form-row">
                            <div class="form-group{{ $errors->has('date_start') ? ' has-error' : '' }} col-md-6">
                                <label>Dari</label>
                                <div class="input-group">
                                    {!! Form::text('date_start', null, ['class' => 'form-control datepicker', 'required' => 'required']) !!}
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar-o"></i></span>
                                    </div>
                                </div><!-- input-group -->
                                <small class="text-danger">{{ $errors->first('date_start') }}</small>
                            </div>
                            <div class="form-group{{ $errors->has('clock_start') ? ' has-error' : '' }} col-md-6">
                                <label>Jam</label>
                                <div class="input-group clockpicker m-b-20" data-placement="left" data-align="left" data-autoclose="true">
                                    {!! Form::text('clock_start', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                </div><!-- input-group -->
                                <small class="text-danger">{{ $errors->first('clock_start') }}</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group{{ $errors->has('date_end') ? ' has-error' : '' }} col-md-6">
                                <label>Sampai</label>
                                <div class="input-group">
                                    {!! Form::text('date_end', null, ['class' => 'form-control datepicker', 'required' => 'required']) !!}
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar-o"></i></span>
                                    </div>
                                </div><!-- input-group -->
                                <small class="text-danger">{{ $errors->first('date_end') }}</small>
                            </div>
                            <div class="form-group{{ $errors->has('clock_end') ? ' has-error' : '' }} col-md-6">
                                <label>Jam</label>
                                <div class="input-group clockpicker m-b-20" data-placement="left" data-align="left" data-autoclose="true">
                                    {!! Form::text('clock_end', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                </div><!-- input-group -->
                                <small class="text-danger">{{ $errors->first('clock_end') }}</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-primary pull-right">
                            Simpan
                        </button>
                    </div>
                </div>
                <br>
            </div>
        </div>
