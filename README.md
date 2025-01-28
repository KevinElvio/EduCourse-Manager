# 🌟 EduCourse Manager

**EduCourse Manager** is a course management application designed to facilitate the management of student data, courses, and the course enrollment process. This application uses **PHP** for the backend with **Blade** as the *templating engine*.  

## ✨ Features
- 📘 **Course Management**  
  Add, edit, or delete course data.  
- 🧑‍🎓 **Student Management**  
  Manage student data, including personal information.  
- 📝 **Enrollment Management**  
  Structured student enrollment into courses.  
- 🔒 **Authentication and Authorization**  
  Login system and access control for data security.
  

## ⚙️ Technology Used
- 🖥️ **Backend**: PHP 10  
- 🗄️ **Database**: MySQL/MariaDB  
- 🎨 **Frontend**: Blade (PHP Templating Engine) & Tailwind CSS  
- 📦 **Dependency Manager**: Composer  
- 🚀 **Deployment**: Laravel artisan  

## 🛠️ Installation

Follow the steps below to run the application on your local host:

### ✅ Requirements
Make sure your system meets the following requirements:
- PHP 8.0 or later
- Composer
- MySQL/MariaDB Database
- Web server (Apache/Nginx)
- Node.js and npm (optional, for front-end development)

### 📋 Installation Steps

1. **Clone the Repository**  
   ```bash
   git clone https://github.com/KevinElvio/EduCourse-Manager.git
   cd EduCourse-Manager
   ```

2. **Install Backend Dependencies**  
   Run the following command to install all dependencies:
   ```bash
   composer install
   ```

3. **Configure the `.env` File**  
   Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```
   Set up your database configuration in the `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```

4. **Create a Database**  
   Create a database in MySQL according to the configuration in the `.env` file.

5. **Run Database Migrations**  
   Run migrations to create tables in the database:
   ```bash
   php artisan migrate
   ```

6. **Seed Initial Data** (optional)  
   Add dummy data for testing:
   ```bash
   php artisan db:seed --class=Admin
   php artisan db:seed --class=Course
   php artisan db:seed --class=Student
   php artisan db:seed --class=Registration
   ```

7. **Install Frontend Dependencies**  
   ```bash
   npm install
   ```

8. **Compile Assets**  
   For development mode:
   ```bash
   npm run dev
   ```
   For production mode:
   ```bash
   npm run prod
   ```

9. **Start the Server**  
   Enable the local Laravel server:
   ```bash
   php artisan serve
   ```
   The application will run at `http://127.0.0.1:8000`.

---

## 🔑 Default Admin Account
Use the following credentials to log in to the application:  
- **Email**: `admin@example.com`  
- **Password**: `admin12345`  

---

## 👨‍💻 Developer Contact  
**Name**: Kevin Elvio  
**Email**: kevinelvio18@gmail.com
