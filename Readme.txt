Clone the source code,

- first of all migration the database with script : php spark migrate
- the second running script db seeder to store first data with php spark db:seed XexecuteSeeder
- to generate user authentication, you must check the database -> user table, if user tabel there are 2 value, remove 1 value user
- at the end running script : php spark db:seed XuserAuthentication

run php spark serve to show development start


----------------------Alur Program--------------------------

Status Simper
- Training
- Full
- Instruktur
- Probation
- Restricted
- Moving

Status Pelanggaran
- Hijau
- Kuning
- Merah

Hasil Test
- Kimper detail
- commisioning detail

