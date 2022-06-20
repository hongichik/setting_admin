@extends('vendor.admin.layout.admin')

@section('content')
<div class="" style="min-height: 100vh;">
    <h2>Tổng quan</h1>
    <div class="row ">
        <div class="d-flex col-12 mt-3 col-lg-3 col-md-6 col-sm-6">
            <div class="bg-light w-100 d-flex rounded-1 shadow">
                <div class="p-2">
                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="8" r="3" stroke="#36B37E" stroke-width="2" stroke-linecap="round"/>
                        <path d="M15.2679 8C15.5332 7.54063 15.97 7.20543 16.4824 7.06815C16.9947 6.93086 17.5406 7.00273 18 7.26795C18.4594 7.53317 18.7946 7.97 18.9319 8.48236C19.0691 8.99472 18.9973 9.54063 18.7321 10C18.4668 10.4594 18.03 10.7946 17.5176 10.9319C17.0053 11.0691 16.4594 10.9973 16 10.7321C15.5406 10.4668 15.2054 10.03 15.0681 9.51764C14.9309 9.00528 15.0027 8.45937 15.2679 8L15.2679 8Z" stroke="#36B37E" stroke-width="2"/>
                        <path d="M5.26795 8C5.53317 7.54063 5.97 7.20543 6.48236 7.06815C6.99472 6.93086 7.54063 7.00273 8 7.26795C8.45937 7.53317 8.79457 7.97 8.93185 8.48236C9.06914 8.99472 8.99727 9.54063 8.73205 10C8.46683 10.4594 8.03 10.7946 7.51764 10.9319C7.00528 11.0691 6.45937 10.9973 6 10.7321C5.54063 10.4668 5.20543 10.03 5.06815 9.51764C4.93086 9.00528 5.00273 8.45937 5.26795 8L5.26795 8Z" stroke="#36B37E" stroke-width="2"/>
                        <path d="M16.8816 18L15.9013 18.1974L16.0629 19H16.8816V18ZM20.7202 16.9042L21.6627 16.5699L20.7202 16.9042ZM14.7808 14.7105L14.176 13.9142L13.0194 14.7927L14.2527 15.5597L14.7808 14.7105ZM19.8672 17H16.8816V19H19.8672V17ZM19.7777 17.2384C19.7707 17.2186 19.7642 17.181 19.7725 17.1354C19.7804 17.0921 19.7982 17.0593 19.8151 17.0383C19.8474 16.9982 19.874 17 19.8672 17V19C21.0132 19 22.1414 17.9194 21.6627 16.5699L19.7777 17.2384ZM17 15C18.6416 15 19.4027 16.1811 19.7777 17.2384L21.6627 16.5699C21.1976 15.2588 19.9485 13 17 13V15ZM15.3857 15.5069C15.7702 15.2148 16.282 15 17 15V13C15.8381 13 14.9028 13.3622 14.176 13.9142L15.3857 15.5069ZM14.2527 15.5597C15.2918 16.206 15.7271 17.3324 15.9013 18.1974L17.8619 17.8026C17.644 16.7204 17.0374 14.9364 15.309 13.8614L14.2527 15.5597Z" fill="#36B37E"/>
                        <path d="M9.21918 14.7105L9.7473 15.5597L10.9806 14.7927L9.82403 13.9142L9.21918 14.7105ZM3.2798 16.9041L4.22227 17.2384L4.22227 17.2384L3.2798 16.9041ZM7.11835 18V19H7.93703L8.09867 18.1974L7.11835 18ZM7.00001 15C7.71803 15 8.22986 15.2148 8.61433 15.5069L9.82403 13.9142C9.09723 13.3621 8.1619 13 7.00001 13V15ZM4.22227 17.2384C4.59732 16.1811 5.35842 15 7.00001 15V13C4.0515 13 2.80238 15.2587 2.33733 16.5699L4.22227 17.2384ZM4.13278 17C4.126 17 4.15264 16.9982 4.18486 17.0383C4.20176 17.0593 4.21961 17.0921 4.22748 17.1354C4.2358 17.181 4.22931 17.2186 4.22227 17.2384L2.33733 16.5699C1.85864 17.9194 2.98677 19 4.13278 19V17ZM7.11835 17H4.13278V19H7.11835V17ZM8.09867 18.1974C8.27289 17.3324 8.70814 16.206 9.7473 15.5597L8.69106 13.8614C6.96257 14.9363 6.356 16.7203 6.13804 17.8026L8.09867 18.1974Z" fill="#36B37E"/>
                        <path d="M12 14C15.5715 14 16.5919 16.5512 16.8834 18.0089C16.9917 18.5504 16.5523 19 16 19H8C7.44772 19 7.00829 18.5504 7.11659 18.0089C7.4081 16.5512 8.42846 14 12 14Z" stroke="#36B37E" stroke-width="2" stroke-linecap="round"/>
                        </svg>     
                </div>
                <div class="flex-column pr-3 d-flex pt-2">
                    <h5 class="p-0 m-0">Tổng số khách hàng</h5>
                    <h2 class="p-2 m-0">888</h2>
                </div>
            </div>
        </div>


        <div class="d-flex col-12 mt-3 col-lg-3 col-md-6 col-sm-6">
            <div class="bg-light w-100 d-flex rounded-1 shadow">
                <div class="p-2">
                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none" >
                        <path d="M12 4L5 7L12 10L19 7L12 4Z" stroke="#FFAB00" stroke-width="2" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.02545 10.044L4.60608 11.0809C4.2384 11.2385 4 11.6 4 12C4 12.4001 4.2384 12.7616 4.60608 12.9192L11.6061 15.9192C11.8576 16.027 12.1424 16.027 12.3939 15.9192L19.3939 12.9192C19.7616 12.7616 20 12.4001 20 12C20 11.6 19.7616 11.2385 19.3939 11.0809L16.9746 10.044L14.436 11.132L16.4614 12L12 13.9121L7.53859 12L9.56404 11.132L7.02545 10.044Z" fill="#FFAB00"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.02545 15.044L4.60608 16.0809C4.2384 16.2385 4 16.6 4 17C4 17.4001 4.2384 17.7616 4.60608 17.9192L11.6061 20.9192C11.8576 21.027 12.1424 21.027 12.3939 20.9192L19.3939 17.9192C19.7616 17.7616 20 17.4001 20 17C20 16.6 19.7616 16.2385 19.3939 16.0809L16.9746 15.044L14.436 16.132L16.4614 17L12 18.9121L7.53859 17L9.56404 16.132L7.02545 15.044Z" fill="#FFAB00"/>
                        </svg>
                          
                </div>
                <div class="flex-column pr-3 d-flex pt-2">
                    <h5 class="p-0 m-0">Tổng hóa đơn chờ</h5>
                    <h2 class="p-2 m-0">888</h2>
                </div>
            </div>
        </div>

        <div class="d-flex col-12 mt-3 col-lg-3 col-md-6 col-sm-6">
            <div class="bg-light w-100 d-flex rounded-1 shadow">
                <div class="p-2">
                    <!-- <svg width="35" height="35" viewBox="0 0 24 24" fill="none">
                        <path d="M4 7.65686C4 6.83935 4 6.4306 4.15224 6.06306C4.30448 5.69552 4.59351 5.40649 5.17157 4.82843L5.82843 4.17157C6.40649 3.59351 6.69552 3.30448 7.06306 3.15224C7.4306 3 7.83935 3 8.65685 3H15.3431C16.1606 3 16.5694 3 16.9369 3.15224C17.3045 3.30448 17.5935 3.59351 18.1716 4.17157L18.8284 4.82843C19.4065 5.40649 19.6955 5.69552 19.8478 6.06306C20 6.4306 20 6.83935 20 7.65685V17C20 18.8856 20 19.8284 19.4142 20.4142C18.8284 21 17.8856 21 16 21H8C6.11438 21 5.17157 21 4.58579 20.4142C4 19.8284 4 18.8856 4 17V7.65686Z" stroke="#33363F" stroke-width="2"/>
                        <path d="M4 7H20" stroke="#33363F" stroke-width="2" stroke-linecap="round"/>
                        <path d="M9 11C9 11.7956 9.31607 12.5587 9.87868 13.1213C10.4413 13.6839 11.2044 14 12 14C12.7956 14 13.5587 13.6839 14.1213 13.1213C14.6839 12.5587 15 11.7957 15 11" stroke="#33363F" stroke-width="2" stroke-linecap="round"/>
                        </svg> -->
                        <i class="fa fa-2x fas fa-credit-card" style="color: black;"></i>

                </div>
                <div class="flex-column pr-3 d-flex pt-2">
                    <h5 class="p-0 m-0">Tổng hóa đơn bán</h5>
                    <h2 class="p-2 m-0">888</h2>
                </div>
            </div>
        </div>

        <div class="d-flex col-12 mt-3 col-lg-3 col-md-6 col-sm-6">
            <div class="bg-light w-100 d-flex rounded-1 shadow">
                <div class="p-2">
                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none">
                        <ellipse cx="12" cy="7" rx="7" ry="3" stroke="#115ff7" stroke-width="2"/>
                        <path d="M5 13C5 13 5 15.3431 5 17C5 18.6569 8.13401 20 12 20C15.866 20 19 18.6569 19 17C19 16.173 19 13 19 13" stroke="#115ff7" stroke-width="2" stroke-linecap="square"/>
                        <path d="M5 7C5 7 5 10.3431 5 12C5 13.6569 8.13401 15 12 15C15.866 15 19 13.6569 19 12C19 11.173 19 7 19 7" stroke="#115ff7" stroke-width="2"/>
                        </svg>                                               
                </div>
                <div class="flex-column pr-3 d-flex pt-2">
                    <h5 class="p-0 m-0">Tổng hóa đơn mua</h5>
                    <h2 class="p-2 m-0">888</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <h3>Đơn hàng</h3>
        <div>
            biểu đồ
        </div>
    </div>

    <div class="mt-4">
        <div class="d-flex row">
            <div class="col-12 col-md-4 py-2">
                <h3>Thu nhập và chi phí</h3>
                <div class="rounded-1 shadow bg-light px-2">
                    <div class="d-flex border-bottom py-2 flex-wrap">
                        <div class="p-2">
                            <h5 class="font-bold pb-0 mb-0 text-nowrap">Thu nhập</h5>
                            <h6 class="pt-0 font-bold mb-0 c-gray text-nowrap">Theo ngày</h6>
                        </div>
                        <div class="col d-flex">
                            <p class="h6 mr-0 ml-auto my-auto c-blue-1 font-bold text-nowrap">5.000.000.000 <span>đ</span></p>
                        </div>
                    </div>
                    <div class="d-flex border-bottom py-2 flex-wrap">
                        <div class="p-2">
                            <h5 class="font-bold pb-0 mb-0 text-nowrap">Chi phí</h5>
                            <h6 class="pt-0 font-bold mb-0 c-gray text-nowrap">Theo ngày</h6>
                        </div>
                        <div class="col d-flex">
                            <p class="h6 mr-0 ml-auto my-auto c-red-1 font-bold text-nowrap">5.000.000.000 <span>đ</span></p>
                        </div>
                    </div>
                    <div class="d-flex border-bottom py-2 flex-wrap">
                        <div class="p-2">
                            <h5 class="font-bold pb-0 mb-0 text-nowrap">Thu nhập</h5>
                            <h6 class="pt-0 font-bold mb-0 c-gray text-nowrap">Theo tháng</h6>
                        </div>
                        <div class="col d-flex">
                            <p class="h6 mr-0 ml-auto my-auto c-blue-1 font-bold text-nowrap">5.000.000.000 <span>đ</span></p>
                        </div>
                    </div>
                    <div class="d-flex border-bottom py-2 flex-wrap">
                        <div class="p-2">
                            <h5 class="font-bold pb-0 mb-0 text-nowrap">Chi phí</h5>
                            <h6 class="pt-0 font-bold mb-0 c-gray text-nowrap">Theo tháng</h6>
                        </div>
                        <div class="col d-flex">
                            <p class="h6 mr-0 ml-auto my-auto c-red-1 font-bold text-nowrap">5.000.000.000 <span>đ</span></p>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-8 col-12 d-flex flex-column mt-md-0 mt-4 py-2">
                <h3>Số dư tài khoản</h3>
                <div class="rounded-1 shadow bg-light flex-grow-1 px-2" style="max-height: 100%;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Ngân hàng</th>
                                <th scope="col">Chủ sở hữu</th>
                                <th class="col-5">Số dư</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Chủ sở hữu</td>
                                <td>Phạm nguyên hồng</td>
                                <td>1.000.000.000.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
    
    <div class="mt-4">
        <h3>Thu nhập và chi phí</h3>
        <p>Biểu đồ</p>
    </div>
</div>
@endsection