# 🕐 WatchStore - Premium Luxury Watch E-Commerce

A fully responsive premium watch e-commerce platform built with **Bootstrap 5**, **CSS3**, **JavaScript**, and **PHP**.

🔗 **Live Repo:** https://github.com/Qasimalikhan-coder/WatchStore-Ecommerce

---

## ✨ Features

### 🛍️ Customer-Facing Pages
| Page | Description |
|------|-------------|
| `index.php` | Luxury landing page with hero section, featured products, animations |
| `shop.php` | Full product catalog with filtering |
| `product-detail.php` | Detailed product specifications page |
| `cart.php` | Dynamic shopping cart with quantity management |
| `checkout.php` | Secure payment gateway interface |
| `about.php` | Brand heritage & story page |
| `contact.php` | Contact form & inquiry page |

### 🔐 Admin Panel
| Page | Description |
|------|-------------|
| `admin.php` | Admin dashboard with login authentication, inventory monitor & live messenger board |

### 💬 Live Messenger System
- Floating chat widget on all pages
- Real-time customer-to-admin messaging
- Auto-reply system for FAQ responses
- Secure CSRF-protected message handling

---

## 🛡️ Security Features

- **XSS Prevention:** All dynamic content passed through `htmlspecialchars()` with `ENT_QUOTES`
- **CSRF Protection:** Token-based form validation on all POST requests
- **Security Headers:** X-Frame-Options, X-XSS-Protection, X-Content-Type-Options, CSP
- **Input Sanitization:** All user inputs filtered before processing
- **Secure Sessions:** HTTP-only, secure cookies with SameSite=Strict

---

## 🎨 Tech Stack

- **Frontend:** HTML5, CSS3, Bootstrap 5, JavaScript (Vanilla)
- **Backend:** PHP (Procedural)
- **Icons:** Font Awesome 6, Bootstrap Icons
- **Animations:** Animate.css, Custom CSS Keyframes
- **Fonts:** Montserrat, Poppins, Playfair Display

---

## 🚀 Quick Start

1. Clone the repository:
```bash
git clone https://github.com/Qasimalikhan-coder/WatchStore-Ecommerce.git
```

2. Move to a PHP server (XAMPP/Laragon/WAMP):

3. Start Apache & MySQL

4. Open in browser:
```
http://localhost/WatchStore-Ecommerce/index.php
```

---

## 🔑 Admin Access

| Field | Value |
|------|-------|
| **URL** | `/admin.php` |
| **Username** | `admin` |
| **Password** | `admin123` |

🦠️ **Important:** Change default credentials before deploying to production!

---

## 📁 Project Structure

```
WatchStore-Ecommerce/
├── index.php              # Homepage
✜── shop.php               # Product Catalog
✜── product-detail.php     # Product Details
✜── cart.php               # Shopping Cart
├── checkout.php           # Checkout Page
✜── process_checkout.php   # Payment Processing
✜── about.php              # About Us
├── contact.php            # Contact Page
├── admin.php               # Admin Dashboard
✜── messenger_send.php     # Message Handler
✜── style.css              # Main Stylesheet
✜── app.js                 # JavaScript Logic
├── README.md              # Documentation
```

---

## ⬄ License

MIT License - Free for personal and commercial use.

---
**Crafted with ❤️ for watch enthusiasts worldwide**
