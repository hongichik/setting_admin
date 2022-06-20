@extends('vendor.admin.layout.admin')

@section('content')

<div class="d-flex flex-column">
    <h2>Cấu hình cơ bản</h1>
    <div class="w-100 d-flex row justify-content-center">
        <div class="bg-light rounded-1 shadow d-flex flex-column col-12" >
            <div class="col-12  d-flex">
                <div class="tabs w-100">  
                    <section id="" class="py-4">
                        <div>
                            <form action="/a" method="get" class="w-100 d-flex row">
                                <div class="form-group col-12">
                                    <label for="inputText3" class="col-form-label">Đường dẫn trang admin</label>
                                    <input id="inputText3" pattern="[A-Za-z]{5}" value="{{ env('ADMIN_NAME') }}"
                                    title="Thông tin nhập vào cần phải là chữ viết liền không dấu và lớn hơn 4 ký tự"
                                    style="width: 23rem; max-width: 100%;" type="text" class="form-control">
                                </div>
                                <div class="w-100 d-flex pt-0 px-3 pb-3 ">
                                    <div class="" >
                                        <p class="col-form-label">Icon trang web</p>
                                        <div class="m-auto" style="width: 10rem; height: 10rem; position: relative;">
                                            <img class="border border-dark m-auto w-100 h-100"  style="object-fit: cover;" src="{{ asset('installer/img/lion-5.ico') }}" alt="">
                                            <div class=" hover-gray d-flex" style="position: absolute;
                                            width: 10rem; height: 10rem; 
                                            max-width: 100%; max-height: 100%;
                                            bottom: 0;
                                            ">
                                                <i class="fas fa-camera fa-3x m-auto" style="color: #04040496;"></i>
                                            </div>
                                            <div class=" hover-gray d-flex" style="position: absolute;
                                            width: 10rem; height: 10rem; 
                                            bottom: 0;">
                                                <input type="file" accept=".ico" id="myFile" style="opacity: 0;" name="filename">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6 col-lg-12 col-xl-6">
                                    <label for="inputText3" class="col-form-label">Tên website</label>
                                    <input id="inputText3" style="width: 23rem; max-width: 100%;" type="text" class="form-control">
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6 col-lg-12 col-xl-6">
                                    <label for="inputText3" class="col-form-label">Địa chỉ</label>
                                    <input id="inputText3" style="width: 23rem; max-width: 100%;" type="text" class="form-control">
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6 col-lg-12 col-xl-6">
                                    <label for="inputText3" class="col-form-label">Số đện thoại</label>
                                    <input id="inputText3" style="width: 23rem; max-width: 100%;" type="text" class="form-control">
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6 col-lg-12 col-xl-6">
                                    <label for="inputText3" class="col-form-label">Hòm thư</label>
                                    <input id="inputText3" style="width: 23rem; max-width: 100%;" type="text" class="form-control">
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                </div>
                            </form>
                        </div>
                    </section>                        
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection