เยี่ยมมากครับ! ✅🚀  
**ถ้ามี README.md ดี ๆ** → ทั้งตัวคุณและทีมในอนาคตจะทำงานเร็วขึ้นเยอะมาก  
เพราะทุกอย่าง **รู้เลยว่าต้องทำอะไร** ไม่ต้องเดา

งั้นฉันจัดให้แบบ **Professional + ใช้ได้จริง** เลยนะครับ ✨

---

# 📋 ตัวอย่าง `README.md` สำหรับโปรเจกต์ Laravel + Docker (Professional)

```markdown
# 🚀 Laravel API Project with Docker

โปรเจกต์นี้คือ Laravel 11 แบบ API Only ที่รันใน Docker พร้อม PHP-FPM + Nginx + MySQL + Redis  
โครงสร้างไฟล์จัดเต็ม พร้อมรองรับการพัฒนาแบบมืออาชีพ
```
## 📦 โครงสร้างโปรเจกต์

```
project-root/
│
├── app/                 # Laravel source code
├── docker/
│   ├── php/Dockerfile    # PHP-FPM Dockerfile
│   ├── nginx/default.conf # Nginx config
│   ├── mysql/my.cnf      # MySQL config (optional)
│   └── redis/redis.conf  # Redis config (optional)
│
├── docker-compose.yml    # Docker Compose configuration
└── README.md             # คู่มือการใช้งานนี้
```

---

## 🚀 ขั้นตอนการใช้งาน

### 1. Clone โปรเจกต์

```bash
git clone your-repo-url.git
cd project-root/
```

---

### 2. สร้างไฟล์ `.env` ของ Laravel

เข้าไปในโฟลเดอร์ `app/`

```bash
cd app
cp .env.example .env
```

**ตรวจสอบในไฟล์ `.env` ว่าตั้ง Database ถูกต้องแล้ว:**

```dotenv
DB_CONNECTION=mysql
DB_HOST=laravel_mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=secret
```

จากนั้นกลับมาที่ project-root (ออกจาก `app`)

```bash
cd ..
```

---

### 3. Build และรัน Docker

```bash
docker compose up -d --build
```

**ตรวจสอบ container ว่าขึ้นครบ:**

```bash
docker ps
```

✅ จะต้องเห็น container เช่น
- laravel_app
- laravel_nginx
- laravel_mysql
- laravel_redis
- laravel_composer

---

### 4. ติดตั้ง Laravel Package

```bash
docker compose run --rm composer install
```

---

### 5. สร้าง Key ให้ Laravel

```bash
docker compose exec app php artisan key:generate
```

---

### 6. ตั้งค่า Permission (สำคัญมาก!)

ให้ Laravel เขียนไฟล์ได้:

```bash
docker compose exec app chmod -R 775 storage bootstrap/cache
docker compose exec app chown -R www:www storage bootstrap/cache
```

---

### 7. รัน Migration

```bash
docker compose exec app php artisan migrate
```

---

### 8. เริ่มพัฒนา API

- เปิด browser → [http://localhost:8080/api/](http://localhost:8080/api/)
- ทดสอบ API ผ่าน Postman เช่น
  - `GET /api/members`
  - `POST /api/members`
  - ฯลฯ

---

## 🛠 คำสั่งที่น่าจำ

| สิ่งที่ทำ | คำสั่ง |
|:----------|:-------|
| รัน Laravel Artisan | `docker compose exec app php artisan` |
| ติดตั้ง Composer package | `docker compose run --rm composer install` |
| สร้าง Controller | `docker compose exec app php artisan make:controller YourController --api` |
| สร้าง Model | `docker compose exec app php artisan make:model YourModel` |
| Clear Cache | `docker compose exec app php artisan config:clear` |
| Rebuild container | `docker compose up -d --build` |
| Stop container | `docker compose down` |

---
