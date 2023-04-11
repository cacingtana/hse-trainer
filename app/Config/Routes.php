<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');
$routes->get('/testing', 'Test::index');

//Auth
$routes->get('/', 'Auth::index');
$routes->post('/credential/login', 'Auth::login');
$routes->get('/credential/logout', 'Auth::logout');

//['filter' => 'authfilter']
$routes->get('/dashboard', 'Home::index', ['filter' => 'authfilter']);

// Routing User ---------------------------------------------------------------------------------------->
$routes->get('/transaction', 'User\Transaction::index', ['filter' => 'authfilter']);
$routes->post('/transaction/new-transaction', 'User\Transaction::create', ['filter' => 'authfilter']);
$routes->add('/transaction/detail/(:segment)', 'User\Transaction::detail/$1', ['filter' => 'authfilter']);
$routes->post('/transaction/detail-order', 'User\Transaction::detailOrder', ['filter' => 'authfilter']);
$routes->post('/transaction/store', 'User\Transaction::store', ['filter' => 'authfilter']);

$routes->post('/transaction/add-to-cart-transaction', 'User\Transaction::addCartProductTransactionOut');
$routes->add('/transaction/update-to-cart-transaction/(:segment)', 'User\Transaction::updateCartProductTransactionOut/$1');
$routes->add('/transaction/delete/(:segment)', 'User\Transaction::delete/$1');

//Simper
$routes->get('/simper', 'User\Simper::index', ['filter' => 'authfilter']);
$routes->post('/simper', 'User\Simper::index', ['filter' => 'authfilter']);

$routes->post('/simper/new-request', 'User\Simper::create', ['filter' => 'authfilter']);
$routes->add('/simper/detail/(:segment)', 'User\Simper::detail/$1', ['filter' => 'authfilter']);
$routes->post('/simper/detail-order', 'User\Simper::detailOrder', ['filter' => 'authfilter']);
$routes->post('/simper/store', 'User\Simper::store', ['filter' => 'authfilter']);

$routes->add('/simper/detail-detail/(:segment)', 'User\Simper::detail_detail/$1', ['filter' => 'authfilter']);
$routes->post('/simper/update-detail-detail', 'User\Simper::update_detail_detail', ['filter' => 'authfilter']);

$routes->post('/simper/update-violation', 'User\Simper::updateViolation', ['filter' => 'authfilter']);
$routes->post('/simper/add-to-cart', 'User\Simper::storeSimperDetail', ['filter' => 'authfilter']);
$routes->post('/simper/delete', 'User\Simper::deleteSimperDetail', ['filter' => 'authfilter']);

//Commisioning
$routes->get('/commisioning', 'User\Commisioning::index', ['filter' => 'authfilter']);
$routes->get('/commisioning/new-request', 'User\Commisioning::create', ['filter' => 'authfilter']);
$routes->add('/commisioning/detail/(:segment)', 'User\Commisioning::detail/$1', ['filter' => 'authfilter']);
$routes->post('/commisioning/store-header', 'User\Commisioning::storeHeader', ['filter' => 'authfilter']);

$routes->add('/commisioning/detail-detail/(:segment)', 'User\Commisioning::detail_detail/$1', ['filter' => 'authfilter']);
$routes->post('/commisioning/store-detail-detail', 'User\Commisioning::update_detail_detail', ['filter' => 'authfilter']);

$routes->post('/commisioning/add-to-cart', 'User\Commisioning::storeCommisioningDetail', ['filter' => 'authfilter']);
$routes->add('/commisioning/delete/(:segment)', 'User\Commisioning::delete/$1', ['filter' => 'authfilter']);

$routes->post('/commisioning/update-no-unit', 'User\Commisioning::update_no_unit', ['filter' => 'authfilter']);
$routes->post('/commisioning/update-no-mesin', 'User\Commisioning::update_no_mesin', ['filter' => 'authfilter']);

//RestFull
$routes->get('/transaction/get-product/(:segment)', 'Restful\Products::getProductId/$1');



//Routing Admin ---------------------------------------------------------------------------------------->

//Employee
$routes->get('/inv-back/employee', 'Admin\Employee::index', ['filter' => 'authfilter']);
$routes->post('/inv-back/employee/store', 'Admin\Employee::store', ['filter' => 'authfilter']);
$routes->add('/inv-back/employee/detail/(:segment)', 'Admin\Employee::detail/$1', ['filter' => 'authfilter']);
$routes->post('/inv-back/employee/update', 'Admin\Employee::update', ['filter' => 'authfilter']);

$routes->add('/inv-back/employee/delete/(:segment)', 'Admin\Employee::store/$1', ['filter' => 'authfilter']);

//Employee
$routes->get('/inv-back/vehicle', 'Admin\Vehicle::index', ['filter' => 'authfilter']);
$routes->get('/inv-back/vehicle/create', 'Admin\Vehicle::create', ['filter' => 'authfilter']);
$routes->post('/inv-back/vehicle/store', 'Admin\Vehicle::store', ['filter' => 'authfilter']);
$routes->add('/inv-back/vehicle/detail/(:segment)', 'Admin\Vehicle::detail/$1', ['filter' => 'authfilter']);
$routes->post('/inv-back/vehicle/update', 'Admin\Vehicle::update', ['filter' => 'authfilter']);

$routes->add('/inv-back/employee/delete/(:segment)', 'Admin\Vehicle::store/$1', ['filter' => 'authfilter']);

//Role
$routes->get('/inv-back/role', 'Admin\Auth\Role::index', ['filter' => 'authfilter']);
$routes->post('/inv-back/role/store', 'Admin\Auth\Role::store', ['filter' => 'authfilter']);

//User
$routes->get('/inv-back/user', 'Admin\Auth\User::index', ['filter' => 'authfilter']);
$routes->get('/inv-back/user/create', 'Admin\Auth\User::create', ['filter' => 'authfilter']);
$routes->post('/inv-back/user/store', 'Admin\Auth\User::store', ['filter' => 'authfilter']);
$routes->post('/inv-back/user/update', 'Admin\Auth\User::update', ['filter' => 'authfilter']);
$routes->add('/inv-back/user/detail/(:segment)', 'Admin\Auth\User::detail/$1', ['filter' => 'authfilter']);

// Management User
$routes->get('/inv-back/manage-access/(:segment)', 'Admin\Auth\ManageAccess::index/$1', ['filter' => 'authfilter']);
$routes->post('/inv-back/manage-access/store-credential', 'Admin\Auth\ManageAccess::storeCredential', ['filter' => 'authfilter']);
$routes->post('/inv-back/manage-access/update-credential', 'Admin\Auth\ManageAccess::updateCredential', ['filter' => 'authfilter']);

$routes->post('/inv-back/manage-access/store-access', 'Admin\Auth\ManageAccess::storeAccess', ['filter' => 'authfilter']);


//User Privacy
$routes->get('/inv-back/privacy', 'Admin\Auth\Privacy::index');
$routes->post('/inv-back/privacy/update', 'Admin\Auth\Privacy::update');


//Reference -----------------------------------------------------------------------------------------------------------------------------
$routes->get('/inv-back/position', 'Admin\Reference\Position::index', ['filter' => 'authfilter']);
$routes->post('/inv-back/position/store', 'Admin\Reference\Position::store', ['filter' => 'authfilter']);

//Coorporate
$routes->get('/inv-back/coorporate', 'Admin\Reference\Coorporate::index', ['filter' => 'authfilter']);
$routes->post('/inv-back/coorporate/store', 'Admin\Reference\Coorporate::store', ['filter' => 'authfilter']);
$routes->add('/inv-back/coorporate/detail/(:segment)', 'Admin\Reference\Coorporate::detail/$1', ['filter' => 'authfilter']);
$routes->post('/inv-back/coorporate/update', 'Admin\Reference\Coorporate::update', ['filter' => 'authfilter']);
$routes->add('/inv-back/coorporate/delete/(:segment)', 'Admin\Reference\Employee::store/$1', ['filter' => 'authfilter']);

//Departments
$routes->get('/inv-back/departments', 'Admin\Reference\Departments::index', ['filter' => 'authfilter']);
$routes->post('/inv-back/departments/store', 'Admin\Reference\Departments::store', ['filter' => 'authfilter']);
$routes->add('/inv-back/departments/detail/(:segment)', 'Admin\Reference\Departments::detail/$1', ['filter' => 'authfilter']);
$routes->post('/inv-back/departments/update', 'Admin\Reference\Departments::update', ['filter' => 'authfilter']);
$routes->add('/inv-back/departments/delete/(:segment)', 'Admin\Reference\Departments::store/$1', ['filter' => 'authfilter']);
//end reference -------------------------------------------------------------------------------------------------------------------------

//Report
$routes->get('/inv-back/report/simper', 'Admin\Report\Simper::index', ['filter' => 'authfilter']);

$routes->get('/inv-back/report/simper/detail', 'Admin\Report\Simper::detail_report_simper', ['filter' => 'authfilter']);

$routes->get('/inv-back/report/commisioning', 'Admin\Report\Commisioning::index', ['filter' => 'authfilter']);

//Print card
$routes->get('/inv-back/print', 'User\Print\PdfController::index', ['filter' => 'authfilter']);
$routes->get('/inv-back/print/simper', 'User\Print\PdfController::htmlToPDF', ['filter' => 'authfilter']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
