# LiconDev | Thư viện cho trang quản trị
[Package](đường dẫn phiên bản của sau)

## Giới thiệu

Đây là thư viện do nhóm LionDev xây dưng và phát triển vì mục đích thuận tiện trong quá trình xây dựng và phát triển website cho khách hàng
Với các phần chính là cấu hình cài đặt và cấu hình trang quản trị chung cho các loại website thuộc nhóm website bán hàng

## Phiên bản
Phù hợp với phiên bản * [Laravel 8](https://laravel.com/docs/8.x/installation#main-content)

## Cài đặt

1. Từ thư mục gốc của dự án của bạn chạy terminal:

```bash
    composer require rachidlaasri/laravel-installer
```
2. Copy các thư mục cần thiết từ vendor:

```bash
    php artisan vendor:publish --tag=liondevsettingadmin
```

3. Đăng ký thư viện

* Thêm câu lệnh sau vào thư mục `config/app.php` (Chỉ thêm khi bước 2 báo lỗi)
```php
	'providers' => [
	    liondev\setting_admin\Providers\LaravelInstallerServiceProvider::class,
	];
```


## Chạy cấu hình lần đầu tiên
* Cấu hình lần đầu dùng url sau
    * `/install`
* Cập nhật chỉnh sửa database
    * `/update`

## Lưu ý

* **Install Routes**
	* Dể cài đặt ứng dụng càn truy cập đường dẫn `/install`.
	* Khi cấu hình xong sẽ xuất hiện file `installed` trong file `/storage` Nếu như file này còn tồn tại thì khi truy cập vào `/install` sẽ luôn trả về trang lỗi 404 vì thế nếu như đưa cho khách hàng cần phải xóa file này đi.

* **Update Route Notes**
	* Để truy cập phần cập nhaatjcaanf truy cập đường dẫn `/update`.
	* Đường dẫn `/update` chỉ chạy khi cơ sở dữ hiệu trong thư mục `/database/migrations`nhỏ hơn database hiện tại thì đường dẫn `/update` mới hoạt động nếu không sẽ trả về trang lỗi 404.


|File|Giải thích|
|:------------|:------------|
|`config/installer.php`|Tại đây, bạn có thể đặt các yêu cầu cùng với các quyền thư mục để ứng dụng của bạn chạy, theo mặc định, mảng chứa các yêu cầu mặc định cho một ứng dụng Laravel cơ bản.|
|`public/installer/assets`|Thư mục này chứa một thư mục css và bên trong nó, bạn sẽ tìm thấy tệp `main.css`, tệp này chịu trách nhiệm tạo kiểu cho trình cài đặt của bạn, bạn có thể ghi đè kiểu mặc định và thêm tệp của riêng bạn.|
|`resources/views/vendor/installer`|Chứa các file giao diện của cấu hình web sau khi đã copy.|
|`resources/lang/en/installer_messages.php`|Chứa thôn tin về ngôn ngữ khi cấu hình web.|

## Các giao diện cơ bản

###### Cài đặt
![Laravel web installer | Step 1](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/1-welcome.jpg)
![Laravel web installer | Step 2](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/2-requirements.jpg)
![Laravel web installer | Step 3](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/3-permissions.jpg)
![Laravel web installer | Step 4 Menu](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/4-environment.jpg)
![Laravel web installer | Step 4 Classic](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/4a-environment-classic.jpg)
![Laravel web installer | Step 4 Wizard 1](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/4b-environment-wizard-1.jpg)
![Laravel web installer | Step 4 Wizard 2](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/4b-environment-wizard-2.jpg)
![Laravel web installer | Step 4 Wizard 3](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/4b-environment-wizard-3.jpg)
![Laravel web installer | Step 5](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/install/5-final.jpg)

###### Updater
![Laravel web updater | Step 1](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/update/1-welcome.jpg)
![Laravel web updater | Step 2](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/update/2-updates.jpg)
![Laravel web updater | Step 3](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-installer/update/3-finished.jpg)


"# setting_admin"  
"# setting_admin" 
"# setting_admin" 
