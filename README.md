
# Book'insat

**Supporting your dreams.**  
A web application specifically designed for INSAT students, giving them access to all available DS, exam materials (for all years and fields), as well as a curated collection of scientific books.

---

## Features

### Admin Panel

- Admin login (`admin@gmail.com`, password: `adminadmin`)
- Dashboard access with revenue tracking
- Create / delete categories
- Create / delete books
- View user list
- Delete users ( *User addition is currently bugged*)
- View orders

### Normal User

- View and edit profile (update email)
- Search books by title or author
- View book details
- Apply book filters
- Add books to cart
- View and manage cart (remove items / clear)
- Checkout via Stripe

---

##  Tech Stack

- **Backend:** PHP, Symfony
- **Frontend:** HTML, CSS, JavaScript, Twig
- **Database:** MySQL (via Doctrine ORM)
- **Payments:** Stripe

---

##  Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/Oudess/Book-Insat
   cd bookinsat
   ```

2. **Create a database**  
   Use [phpMyAdmin](https://www.phpmyadmin.net/) or another tool to create an empty MySQL database.

3. **Configure `.env`**  
   Update your `.env` file with your database URL:
   ```
   DATABASE_URL="mysql://username:password@127.0.0.1:3306/your_database_name"
   ```

4. **Install dependencies**
   ```bash
   composer install
   ```

5. **Initialize database**
   ```bash
   php bin/console doctrine:migration:sync-metadata-storage
   php bin/console doctrine:schema:create
   ```

6. **Run the app**
   ```bash
   symfony server:start
   ```

## Authors

Made with love by **INSAT students**  
GitHub: [Youssef Belabed](https://github.com/Oudess)
GitHub: [Nour Mahmoud](https://github.com/NourMahmoud151515)
GitHub: [Zakaria Lahrizi](https://github.com/zakaria-lahrizi)
GitHub: [Eya Belkhodja](https://github.com/eyabelkhodja)

---

## Contributions

Feel free to fork this repo, submit issues, or propose pull requests. Contributions are welcome!

---

## License

This project is licensed under the [MIT License](LICENSE).

---
