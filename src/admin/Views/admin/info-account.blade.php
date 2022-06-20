@extends('vendor.admin.layout.admin')

@section('content')
<div class="d-flex flex-column">
    <h2>Tài khoản cá nhân</h1>
    <div class="w-100 d-flex row justify-content-center">
        <div class="bg-light rounded-1 shadow d-flex  flex-column" style="width: 20rem; height: 20rem;">
            <div class="d-flex mt-3">
                <div class="m-auto" style="width: 10rem; height: 10rem; position: relative;">
                    <div></div>
                    <img class="border border-dark rounded-circle m-auto w-100 h-100"  style="object-fit: cover;" src="{{ asset('') }}img/showimg/{{ Auth::user()->img }}" alt="">
                    <div class="rounded-circle hover-gray d-flex" style="position: absolute;
                    width: 10rem; height: 10rem; 
                    bottom: 0;
                    
                    ">
                        <i class="fas fa-camera fa-3x m-auto" style="color: #04040496;"></i>
                    </div>
                    <div class="rounded-circle hover-gray d-flex" style="position: absolute;
                    width: 10rem; height: 10rem; 
                    bottom: 0;">
                        <form  method="POST" action="{{ route('admin_updateImgae') }}" enctype="multipart/form-data" class="w-100 h-100">
                            @csrf
                            <input class="w-100 h-100" type="file" id="img_info" style="opacity: 0;" name="img">
                            <input id="btn_upload_img" style="opacity: 0;" type="submit" value="Submit">
                        </form>
                        <script>
                            $( "#img_info" ).change(function() {
                                $("#btn_upload_img").click();
                            });
                        </script>
                    </div>
                </div>

            </div>
            <h4 class="text-center pb-2 mb-0 pt-3">{{ Auth::user()->name }}</h4>
            {{-- <h5 class="text-center">Giám đốc</h5> --}}
            <p class="text-center">{{ Auth::user()->email }}</p>
        </div>

        <div class="bg-light rounded-1 shadow d-flex flex-column col-12 ml-3 col-md mt-md-0 mt-3" >
            <div class="col-12  d-flex">
                <div class="tabs w-100">  
                    <input type="radio" id="radio-1" name="tabs" checked  />
                    <label class="tab border-right" for="radio-1">Thông tin cá nhân</label>
                    <input type="radio" id="radio-2" name="tabs"/>
                    <label class="tab border-left" for="radio-2">Đổi mật khẩu</label>
                    
                
                    <div class="tab-panels">
                        <section id="" class="tab-panel">
                            <div>
                                <form action="{{ route('admin_updateInfo') }}" method="POST" class="w-100 d-flex row">
                                    @csrf
                                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-12 col-xl-6">
                                        <label for="inputText3" class="col-form-label">Tên tài khoản</label>
                                        <input id="inputText3" name="name" type="text" value="{{ Auth::user()->name }}" class="form-control">
                                        @if ($errors->has('name'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-12 col-xl-6">
                                        <label for="inputText3" class="col-form-label">Gmail</label>
                                        <input id="inputText3" type="text" name="email" value="{{ Auth::user()->email }}" class="form-control">
                                        @if ($errors->has('email'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                    </div>
                                </form>
                            </div>
                        </section>
                        <section id="rauchbier" class="tab-panel">
                            <form action="{{ route('admin_updatePass') }}" method="post" class="w-100 d-flex row">
                                @csrf
                                <div class="form-group col-7">
                                    <label for="inputText3" class="col-form-label">Mật khẩu hiện tại</label>
                                    <input id="inputText3" name="current-password" type="password" class="form-control">
                                    @if(session()->has('error'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6 col-lg-12 col-xl-6">
                                    <label for="inputText3" class="col-form-label">Mật khẩu mới</label>
                                    <input id="inputText3" name="new-password" type="password" class="form-control">
                                    @if(session()->has('error-new'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('error-new') }}
                                        </div>
                                    @endif
                                    @if ($errors->has('new-password'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('new-password') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6 col-lg-12 col-xl-6">
                                    <label for="inputText3" class="col-form-label">Nhập lại mật khẩu</label>
                                    <input id="inputText3" name="retype-password" type="password" class="form-control">
                                    @if(session()->has('error-retype'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('error-retype') }}
                                        </div>
                                    @endif
                                    @if ($errors->has('retype-password'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('retype-password') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                </div>
                            </form>
                        </section>
                    </div>                               
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection