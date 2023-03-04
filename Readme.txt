Clone the source code,

- first of all migration the database with script : php spark migrate
- the second running script db seeder to store first data with php spark db:seed XexecuteSeeder
- to generate user authentication, you must check the database -> user table, if user tabel there are 2 value, remove 1 value user
- at the end running script : php spark db:seed XuserAuthentication

run php spark serve to show development start


------------------------Barang Masuk -----------------------                                            ----------------------Barang Keluar------
PO Purchase Order -> RV terima barang masuk (Transfer Stock) -> ( Product Stock - sesuai ID barang ) -> ID Order Header / Detail -> INV (Checkout) -> Shipment (Jika ada)


Status Nomor PO :
0 = Tunda
1 = Pengajuan
2 = diterima

List Routing 

/transaction

/inv-back/product
/inv-back/product-in
/inv-back/product-receive

/inv-back/product-stock

/inv-back/customer
/inv-back/supplier

/inv-back/role
/inv-back/user

/inv-back/category
/inv-back/unit

/inv-back/report/transaction-in
/inv-back/report/transaction-out