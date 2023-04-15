Clone the source code,

- first of all migration the database with script : php spark migrate
- the second running script db seeder to store first data with php spark db:seed XexecuteSeeder
- to generate user authentication, you must check the database -> user table, if user tabel there are 2 value, remove 1 value user
- at the end running script : php spark db:seed XuserAuthentication

run php spark serve to show development start

----------------------Alur Program--------------------------

Insert manual code 
ref_status_request
1 Training | T
2 Full | F
3 Instruktur | I
4 Probation | P
5 Restricted | R
6 Moving | M

Type Employee
1. TKI
2. TKA


