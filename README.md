# Library Seat Reservation System

**English** | [繁體中文](README.zh-TW.md)

A library book and seat reservation website built with PHP and MySQL, running on XAMPP.

## Setup

1. Install [XAMPP](https://www.apachefriends.org) and open the XAMPP Control Panel. In the list you'll see **Apache** and **MySQL** — click **Start** for both, then click **Admin** next to MySQL.
2. This opens phpMyAdmin. Click **Import**, choose `bbb.sql` from this repository, and import it.
3. Put the PHP files from this repository into a folder named `bbb` under XAMPP's `htdocs`.
4. In a browser, open `localhost` to make sure the web server is running (`http://localhost/dashboard/`).
5. Open a new tab and go to `localhost/bbb/new.php` to see the site.

## Files

| File | Contents |
|---|---|
| `*.php` | Site pages (login, book search, seat search, booking, counters, deletion…) |
| `connect.php` | Database connection |
| `bbb.sql` | Database schema and data for phpMyAdmin import |
| `圖書館座位預約系統 報告書.pdf` / `圖書館座位預約系統 簡報檔.pdf` | Project report and slides (Traditional Chinese) |
