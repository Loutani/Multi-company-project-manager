@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="iq-edit-list-data">
                <div class="tab-content">

                    <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                        <div class="card">

                            <div class="card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Personal Information</h4>
                                </div>
                            </div>

                            <div class="card-body">
                                <form action="{{route('profile.update')}}">

                                    @method('PUT')
                                    @csrf
                                    
                                    <div class=" row align-items-center">

                                        <input type="hidden" name="" value="{{$userId}}">

                                        <div class="form-group col-sm-6">
                                            <label for="address">Address:</label>
                                            <input type="text" class="form-control" id="address" value="{{$profile->address}}">
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="job">Job:</label>
                                            <input type="text" class="form-control" id="job" value="{{$profile->job}}">
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="bio">Bio:</label>
                                            <textarea class="form-control" name="bio" rows="5" style="line-height: 22px;">{{$profile->bio}}</textarea>
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="phone">Phone:</label>
                                            <input type="text" class="form-control" id="phone" value="{{$profile->phone}}">
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="birthdate">Date Of Birth:</label>
                                            <input class="form-control" id="birthdate" value="{{$profile->birthdate->format('d-m-Y')}}">
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2">update</button>

                                    <button type="reset" class="btn iq-bg-danger">Cancel</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
