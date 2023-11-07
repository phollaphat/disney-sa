<<<<<<< HEAD
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
=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> 2ba6b8e (push main finished)
