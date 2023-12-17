@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Perfil</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Perfil</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <!-- /Page Header -->
            <div class="card mb-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#">
                                            <img alt="" src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0">{{ Auth::user()->name }}</h3>
                                                <h6 class="text-muted">{{ Auth::user()->department }}</h6>
                                                <small class="text-muted">{{ Auth::user()->position }}</small>
                                                <div class="staff-id">ID Usuario: {{ Auth::user()->rec_id }}</div>
                                                <div class="small doj text-muted">Fecha de creaciòn : {{ Auth::user()->join_date }}</div>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <div class="title">Telefono:</div>
                                                    <div class="text"><a href="">{{ Auth::user()->phone_number }}</a></div>
                                                </li>
                                                <li>
                                                    <div class="title">Correo:</div>
                                                    <div class="text"><a href="">{{ Auth::user()->email }}</a></div>
                                                </li>
                                                @if(!empty($information))
                                                    <li>
                                                        @if(Auth::user()->rec_id == $information->rec_id)
                                                        <div class="title">Cumpleaños:</div>
                                                        <div class="text">{{date('d F, Y',strtotime($information->birth_date)) }}</div>
                                                        @else
                                                        <div class="title">Cumpleaños:</div>
                                                        <div class="text">N/A</div>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        @if(Auth::user()->rec_id == $information->rec_id)
                                                        <div class="title">Direccion:</div>
                                                        <div class="text">{{ $information->address }}</div>
                                                        @else
                                                        <div class="title">Direccion:</div>
                                                        <div class="text">N/A</div>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        @if(Auth::user()->rec_id == $information->rec_id)
                                                        <div class="title">Genero:</div>
                                                        <div class="text">{{ $information->gender }}</div>
                                                        @else
                                                        <div class="title">Genero:</div>
                                                        <div class="text">N/A</div>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        <div class="title">Reporte a:</div>
                                                        <div class="text">
                                                            <div class="avatar-box">
                                                                <div class="avatar avatar-xs">
                                                                    <img src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
                                                                </div>
                                                            </div>
                                                            <a href="profile.html">
                                                                {{ Auth::user()->name }}
                                                            </a>
                                                        </div>
                                                    </li>
                                                    @else
                                                    <li>
                                                        <div class="title">Bisrthday:</div>
                                                        <div class="text">N/A</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Address:</div>
                                                        <div class="text">N/A</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Gender:</div>
                                                        <div class="text">N/A</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Reports to:</div>
                                                        <div class="text">
                                                            <div class="avatar-box">
                                                                <div class="avatar avatar-xs">
                                                                    <img src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
                                                                </div>
                                                            </div>
                                                            <a href="profile.html">
                                                                {{ Auth::user()->name }}
                                                            </a>
                                                        </div>
                                                    </li>
                                                @endif    
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
					
      
            
           
        </div>
        <!-- /Page Content -->
        @if(!empty($information))
        <!-- Profile Modal -->
        <div id="profile_info" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Informacion del perfil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('profile/information/save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="profile-img-wrap edit-img">
                                        <img class="inline-block" src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
                                        <div class="fileupload btn">
                                            <span class="btn-text">editar</span>
                                            <input class="upload" type="file" id="image" name="images">
                                            <input type="hidden" name="hidden_image" id="e_image" value="{{ Auth::user()->avatar }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nombre completo</label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                                                <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->user_id }}">
                                                <input type="hidden" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Cumpleaños</label>
                                                <div class="cal-icon">
                                                    <input class="form-control datetimepicker" type="text" id="birthDate" name="birthDate" value="{{ $information->birth_date }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Genero</label>
                                                <select class="select form-control" id="gender" name="gender">
                                                    <option value="{{ $information->gender }}" {{ ( $information->gender == $information->gender) ? 'selected' : '' }}>{{ $information->gender }} </option>
                                                    <option value="Male">Hombre</option>
                                                    <option value="Female">Mujer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Direccion</label>
                                        <input type="text" class="form-control" id="address" name="address" value="{{ $information->address }}">
                                    </div>
                                </div>
                                
                               
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Numero de telefono</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $information->phone_number }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reporte a <span class="text-danger">*</span></label>
                                        <select class="select" id="" name="reports_to">
                                            <option value="{{ $information->reports_to }}" {{ ( $information->reports_to == $information->reports_to) ? 'selected' : '' }}>{{ $information->reports_to }} </option>
                                            @foreach ($user as $users )
                                            <option value="{{ $users->name }}">{{ $users->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Profile Modal -->
        @else
        <!-- Profile Modal -->
        <div id="profile_info" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Informacion Personal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('profile/information/save') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="profile-img-wrap edit-img">
                                        <img class="inline-block" src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
                                        <div class="fileupload btn">
                                            <span class="btn-text">editar</span>
                                            <input class="upload" type="file" id="upload" name="upload">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nombre completo</label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                                                <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->user_id }}">
                                                <input type="hidden" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Cumpleaños</label>
                                                <div class="cal-icon">
                                                    <input class="form-control datetimepicker" type="text" id="birthDate" name="birthDate">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Genero</label>
                                                <select class="select form-control" id="gender" name="gender">
                                                    <option value="Male">Hombre</option>
                                                    <option value="Female">Mujer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Direccion</label>
                                        <input type="text" class="form-control" id="address" name="address">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Numero de Telefono</label>
                                        <input type="text" class="form-control" id="phoneNumber" name="phone_number">
                                    </div>
                                </div>

                               
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reports a <span class="text-danger">*</span></label>
                                        <select class="select" id="" name="reports_to">
                                            <option selected disabled>-- select --</option>
                                            @foreach ($user as $users )
                                            <option value="{{ $users->name }}">{{ $users->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Profile Modal -->
        @endif
    
        @if (!empty($userInformation))
        <!-- Personal Info Modal -->
        <div id="personal_info_modal" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Informacion personal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('user/information/save') }}" method="POST">
                            @csrf
                            <input type="hidden" class="form-control" name="user_id" value="{{ Session::get('user_id') }}" readonly>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cedula Numero</label>
                                        <input type="text" class="form-control @error('passport_no') is-invalid @enderror" name="passport_no" value="{{ $userInformation->passport_no }}">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tel</label>
                                        <input class="form-control @error('tel') is-invalid @enderror" type="text" name="tel" value="{{ $userInformation->tel }}">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Personal Info Modal -->
        @else
         <!-- Personal Info Modal -->
        <div id="personal_info_modal" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Personal Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('user/information/save') }}" method="POST">
                            @csrf
                            <input type="hidden" class="form-control" name="user_id" value="{{ Session::get('user_id') }}" readonly>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cedula No</label>
                                        <input type="text" class="form-control @error('passport_no') is-invalid @enderror" name="passport_no">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Expiracion Cedula</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker @error('passport_expiry_date') is-invalid @enderror" type="text" name="passport_expiry_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tel</label>
                                        <input class="form-control @error('tel') is-invalid @enderror" type="text" name="tel">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">ACTUALIZAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Personal Info Modal -->
        @endif
        
        <!-- Family Info Modal -->
        
        <!-- /Family Info Modal -->
        
        <!-- Emergency Contact Modal -->
        <div id="emergency_contact_modal" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Informacion personal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="validation" action="{{ route('user/profile/emergency/contact/save') }}" method="POST">
                            @csrf
                            <input type="hidden" class="form-control" name="user_id" value="{{  Session::get('user_id') }}">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Primer contacto</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombre <span class="text-danger">*</span></label>
                                                @if (!empty($emergencyContact->name_primary))
                                                <input type="text" class="form-control" name="name_primary" value="{{ $emergencyContact->name_primary }}">
                                                @else
                                                <input type="text" class="form-control" name="name_primary">
                                                @endif
                                            </li>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Parentesco <span class="text-danger">*</span></label>
                                                @if (!empty($emergencyContact->relationship_primary))
                                                <input type="text" class="form-control" name="relationship_primary" value="{{ $emergencyContact->relationship_primary }}">
                                                @else
                                                <input type="text" class="form-control" name="relationship_primary">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telefono <span class="text-danger">*</span></label>
                                                @if (!empty($emergencyContact->phone_primary))
                                                <input type="text" class="form-control" name="phone_primary" value="{{ $emergencyContact->phone_primary }}">
                                                @else
                                                <input type="text" class="form-control" name="phone_primary">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telefono 2</label>
                                                @if (!empty($emergencyContact->phone_2_primary))
                                                <input type="text" class="form-control" name="phone_2_primary" value="{{ $emergencyContact->phone_2_primary }}">
                                                @else
                                                <input type="text" class="form-control" name="phone_2_primary">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Segundo contacto</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombre <span class="text-danger">*</span></label>
                                                @if (!empty($emergencyContact->name_secondary))
                                                <input type="text" class="form-control" name="name_secondary" value="{{ $emergencyContact->name_secondary }}">
                                                @else
                                                <input type="text" class="form-control" name="name_secondary">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Parentesco <span class="text-danger">*</span></label>
                                                @if (!empty($emergencyContact->relationship_secondary))
                                                <input type="text" class="form-control" name="relationship_secondary" value="{{ $emergencyContact->relationship_secondary }}">
                                                @else
                                                <input type="text" class="form-control" name="relationship_secondary">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telefono <span class="text-danger">*</span></label>
                                                @if (!empty($emergencyContact->phone_secondary))
                                                <input type="text" class="form-control" name="phone_secondary" value="{{ $emergencyContact->phone_secondary }}">
                                                @else
                                                <input type="text" class="form-control" name="phone_secondary">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telefono 2</label>
                                                @if (!empty($emergencyContact->phone_2_secondary))
                                                <input type="text" class="form-control" name="phone_2_secondary" value="{{ $emergencyContact->phone_2_secondary }}">
                                                @else
                                                <input type="text" class="form-control" name="phone_2_secondary">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Emergency Contact Modal -->
        
       
        <!-- /Experience Modal -->

        <!-- /Page Content -->
    </div>
    @section('script')
    <script>
        $('#validation').validate({  
            rules: {  
                name_primary: 'required',  
                relationship_primary: 'required',  
                phone_primary: 'required',  
                phone_2_primary: 'required',  
                name_secondary: 'required',  
                relationship_secondary: 'required',  
                phone_secondary: 'required',  
                phone_2_secondary: 'required',  
            },  
            messages: {
                name_primary: 'Please input name primary',  
                relationship_primary: 'Please input relationship primary',  
                phone_primary: 'Please input phone primary',  
                phone_2_primary: 'Please input phone 2 primary',  
                name_secondary: 'Please input name secondary',  
                relationship_secondary: 'Please input relationship secondary',  
                phone_secondaryr: 'Please input phone secondary',  
                phone_2_secondary: 'Please input phone 2 secondary',  
            },  
            submitHandler: function(form) {  
                form.submit();
            }  
        });  
    </script>
    @endsection
@endsection