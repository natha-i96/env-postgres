## 📄 `CONTRIBUTING.md`

```markdown
# 🧑‍💻 Contributing Guide for This Project

ขอบคุณที่สนใจร่วมพัฒนาโปรเจกต์นี้!  
เราอยากให้การทำงานร่วมกันมีประสิทธิภาพ และมีมาตรฐานเดียวกันในทีม โปรดอ่านแนวทางนี้ก่อนเริ่มทำงาน
```
---

## 🚀 ขั้นตอนเริ่มต้น

1. Fork หรือ Clone โปรเจกต์นี้
2. สร้าง `.env` จาก `.env.example`
3. สั่งติดตั้ง Laravel ด้วย Docker:

```bash
docker compose run --rm composer install
docker compose run --rm composer require barryvdh/laravel-dompdf
docker compose up -d --build
docker compose exec app php artisan migrate
```

---

## 🌿 Git Workflow

เราใช้ระบบ Branching ดังนี้:

| Branch        | หน้าที่                           |
|---------------|------------------------------------|
| `main`        | Production เท่านั้น (ห้าม push ตรง) |
| `develop`     | รวมฟีเจอร์ที่พัฒนาเสร็จแล้ว        |
| `feature/*`   | พัฒนาแต่ละฟีเจอร์ย่อย              |
| `bugfix/*`    | แก้บั๊กย่อย                         |

### 🧩 ตัวอย่างการสร้าง Branch

```bash
git checkout master
git merge develop
git tag -a v1.0.0 -m "Release version 1.0.0"
git push origin master
git push origin v1.0.0



git checkout develop
git pull origin develop
git checkout -b bugfix/documents
```

---

## 📦 Coding Standard

- ใช้ `Laravel Pint` จัด format:  
  ```bash
  docker compose exec app ./vendor/bin/pint
  ```

- ใช้ `PSR-12` เป็นมาตรฐานหลัก

---

## ✅ Commit Message Convention

โปรดใช้รูปแบบ commit ที่ชัดเจน เช่น:

```
feat(auth): add login endpoint
fix(user): fix email validation bug
refactor(api): rename controller methods
docs(readme): update getting started
```

---

## 🧪 การทดสอบก่อนส่ง PR

- รันคำสั่ง:
```bash
docker compose exec app php artisan test
```

- ทดสอบ Migration:
```bash
docker compose exec app php artisan migrate:fresh
```

- ตรวจสอบ API ผ่าน Postman หรือ Swagger (ถ้ามี)

---

## 📥 การส่ง Pull Request (PR)

1. ตรวจสอบว่า branch ปัจจุบันเป็น `feature/*` หรือ `bugfix/*`
2. Push code และเปิด PR มาที่ `develop`
3. ใส่คำอธิบายใน PR: ฟีเจอร์อะไร, แก้บั๊กอะไร
4. Tag reviewer (หรือหัวหน้าทีม)

✅ PR จะได้รับ review ภายใน 1-2 วัน

---

## 🧼 อย่าลืม

- ห้าม push เข้าสู่ `main` ตรง ๆ
- หลีกเลี่ยงการ commit `.env`, `.idea/`, `node_modules/`
- ทุกฟีเจอร์ใหม่ควรมี test หรือ endpoint ที่ทดสอบได้

---

## 🧼 ผมใช้บ่อย @app
- docker compose run --rm app php artisan install api
- docker compose run --rm composer create-project --prefer-dist laravel/laravel . 
- docker compose exec app php artisan down
- docker compose exec app php artisan up
- docker compose exec app php artisan config:show cors
- docker compose exec app php artisan install:api
- docker compose exec app php artisan --version
- docker compose exec app php artisan make:model Invoice --all
- docker compose exec app php artisan make:model AdminUser
- docker compose exec app php artisan make:controller \v1\admins\Admins --api
- docker compose exec app php artisan route:list -v
- docker compose exec app php artisan cache:clear
- docker compose exec app php artisan db:seed --class="Database\Seeders\Admin\v1\AdminDocumentSeeder"
- docker compose exec app php artisan vendor:publish --tag=sanctum-migrations
- docker compose exec app php artisan migrate
- 
- docker compose exec app php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
- docker compose exec app php artisan migrate
- docker compose exec app php artisan make:command MakeRestResource
- docker compose exec app php artisan make:rest Post





---

## 🧼 ผมใช้บ่อย @composer
- docker compose run --rm composer

- docker compose run --rm composer require laravel/sanctum
- docker compose run --rm composer require laravel/sanctum --no-cache
- docker compose run --rm composer require spatie/laravel-permission

---

## ❤️ ขอบคุณที่ช่วยพัฒนา!

การทำงานเป็นทีมที่ดี เริ่มจากความเข้าใจและความใส่ใจในมาตรฐาน  
ขอบคุณที่ร่วมเป็นส่วนหนึ่งในโปรเจกต์นี้ 🚀