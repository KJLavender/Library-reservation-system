# 圖書館座位預約系統

[English](README.md) | **繁體中文**

用 PHP 和 MySQL 做的圖書館借書與座位預約網站，在 XAMPP 上執行。

## 安裝

1. 下載並安裝 [XAMPP](https://www.apachefriends.org)，打開它，會看到名稱那邊有 **Apache** 跟 **MySQL**，點這兩個的 **Start**，再點 MySQL 的 **Admin**。
2. 接著會帶你到 phpMyAdmin 的網頁，進去之後按 **匯入**，選擇這個 repo 裡的 `bbb.sql` 再匯入就好。
3. 把這個 repo 的 PHP 程式放進 XAMPP `htdocs` 底下一個叫 `bbb` 的資料夾。
4. 先在瀏覽器打上 `localhost`，確認網頁伺服器有開（`http://localhost/dashboard/`）。
5. 再開一個新分頁，打上 `localhost/bbb/new.php`，就會看到我們做的網頁了。

## 檔案

| 檔案 | 內容 |
|---|---|
| `*.php` | 網站頁面（登入、查書、查座位、預約、計數、刪除…） |
| `connect.php` | 資料庫連線 |
| `bbb.sql` | 給 phpMyAdmin 匯入的資料庫結構與資料 |
| `圖書館座位預約系統 報告書.pdf` / `圖書館座位預約系統 簡報檔.pdf` | 專題報告書與簡報 |
