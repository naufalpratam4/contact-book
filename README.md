# 📒 Contact Book Web Application

A simple Contact Book web application that allows users to manage (create, read, update, delete) personal or professional contact information easily.

## 🧰 Features

- ✅ Add new contacts with name, phone, email, and address
- ✏️ Edit existing contact details
- 🗑️ Delete contacts
- 📄 Paginated list of contacts
- 📱 Mobile responsive layout using Tailwind CSS

---

## 🚀 Tech Stack

- **Backend**: Laravel 12
- **Frontend**: Blade Template with Tailwind CSS
- **Database**: MySQL
- **Authentication**: Laravel Breeze (optional)
- **Icons**: Heroicons

---

## 📦 Installation

1. **Clone this repo**
   ```bash
   git clone https://github.com/yourusername/contact-book.git
   cd contact-book
   composer install
   npm install && npm run dev
   cp .env.example .env
   php artisan key:generate
   Update .env file with your DB credentials
   Run migrations: php artisan migrate
   Run the application: php artisan serve
🖼️ Screenshots
![Screenshot](image/Screenshot.png)
