# Patma CMS

Patma CMS adalah kepanjangan dari Cepat Mahir Content Management System. 
Cepat Mahir CMS, adalah Content Management System yang digunakan untuk 
proses pembelajaran php pada level menengah. 
Dibuat sesederhana mungkin agar lebih mudah dipahami untuk proses belajar membuat cms dengan PHP.

## Pola Routing

Semua akses ke aplikasi akan dilewatkan ke satu file yaitu, htdocs/index.php. Dari situ akan diparsing, user ingin mengakses halaman apa?

Pola Routingnya adalah sebagai berikut:
### 1. Frontend
http://mycms/index.php?m=nama_modul&c=nama_class&m=nama_method&p1=parameter1&p2=parameter2&dst

### 2. Backend/Admin
http://mycms/admin.php?m=nama_modul&c=nama_class&m=nama_method&p1=parameter1&p2=parameter2&dst
 