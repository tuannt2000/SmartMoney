<p> 
   Bước 1: Mở Terminal và thực hiện clone project và vào thư mục bằng câu lệnh sau:
git clone https://github.com/tuannt2000/SmartMoney.git
cd SmartMoney

Bước 2: Chạy composer và npm để cài đặt các gói cần thiết 
composer install
npm install 

Bước 3: Tạo database và config database
Vào mysql workbech  tạo ra database mới
Tạo database có tên là :SmartMoney_db

Sau đó ta thực hiện lệnh sau để copy ra file env:

cp .env.example .env

Cập nhật file env của bạn như sau:

DB_CONNECTION=mysql          
DB_HOST=127.0.0.1            
DB_PORT=3306                 
DB_DATABASE=SmartMoney_db    
DB_USERNAME=root             
DB_PASSWORD=   

Bước 4: Tạo ra key cho dự án
php artisan key:generate

Bước 5: Tạo ra các bảng và dữ liệu mẫu cho database
php artisan migrate
php artisan db:seed
</p>

