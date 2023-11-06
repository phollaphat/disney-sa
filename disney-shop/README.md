# Disney-kloves
โดยโปรเจคนี้เป็น web application สำหรับระบบแคชเชียร์และการจัดการสต็อคสินค้าที่มีพัฒนาเพื่อช่วยลดภาระของพนักงานในการทำงาน 

### โดยมี Feature ดังนี้
1. ระบบแคชเชียร์
- เป็นระบบที่ช่วยการรับออเดอร์ของพนักงาน มีการตัดสต็อคสินค้า ออกใบเสร็จ และใบรับประกันสินค้า
2. ระบบจัดการคลังสินค้า
- เป็นระบบในการจัดการสินค้า ไม่ว่าจะเป็นการเพิ่มสินค้าใหม่ลงในระบบ และการแก้ไขข้อมูลสินค้า
3. ระบบจัดการการเคลม
-  เป็นระบบช่วยบริหารจัดการสินค้าเพื่อไม่ให้มีจำนวนสินค้าในคลังมากกว่าสินค้าจริง

### คำแนะนำในการ Install และ run project
1. รันคำสั่ง `git clone https://github.com/phollaphat/disney-sa.git`  เพื่อ clone file
2. เข้า directory "disney-front-end" และรันคำสั่ง 
```
npm install nuxt
```
3. ใช้คำสั่ง install pinia 
```
npm install pinia
```

4.ใส่คำสั่ง install tailwindcss
```
npm install -D tailwindcss
npx tailwindcss init
```
5. ใส่ ในไฟล์ "nuxt.config.ts"
```
 modules: [
    '@pinia/nuxt',
		'@pinia-plugin-persistedstate/nuxt',
  ],` ในไฟล์ "nuxt.config.ts"
```
6.ใส่ ในไฟล์ "nuxt.config.ts"
```
devtools: { enabled: true },
  css: ['~/assets/css/main.css'],
  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    },
  },
  ```
7.ใช้คำสั่ง install mosha 
```
npm install mosha-vue-toastify
```
8. `npm run dev` และเข้า "http://localhost:3000"
9. เข้า directory "disney-back-end" ใช้คำสั่ง 
```
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```
10 สร้าง .env ด้วยคำสั่ง 
```
    cp .env.example .env
```
11.แก้ไข .env ดังนี้
```
  11.1 APP_NAME="Disney Shop" (บรรทัด 1)
  11.2 DB_HOST=mysql (บรรทัด 12)
  11.3 DB_USERNAME=sail (บรรทัด 15)
  11.4 DB_PASSWORD=password (บรรทัด 16)
  11.5 REDIS_HOST=redis (บรรทัด 27)
```
12. รันคำสั่ง `composer require tymon/jwt-auth`
13. รันคำสั่ง `php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"`
14. รันคำสั่ง `php artisan jwt:secret`
15. รันคำสั่ง `sail up -d` และ `sail artisan migrate:fresh --seed`