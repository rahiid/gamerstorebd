<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'indexController@index');



Route::get('/signup', function () {
    return view('signup');
});

Route::get('/tournament', function () {
    return view('tournament');
});


Route::get('/match-cs-daily', function () {
    return view('match-cs-daily');
});
Route::get('/match-cs-daily', 'Matchcsdaily@index');

Route::get('/match-regular-daily', function () {
    return view('match-regular-daily');
});
Route::get('/match-regular-daily', 'Matchregulardaily@index');

Route::get('/match-cs-tournament', function () {
    return view('match-cs-tournament');
});
Route::get('/match-cs-tournament', 'Matchcstournament@index');


Route::get('/match-regular-tournament', function () {
    return view('match-regular-tournament');
});
Route::get('/match-regular-tournament', 'Matchregulartournament@index');


Route::get('/matchongoing', function () {
    return view('matchongoing');
});
Route::get('/matchongoing', 'Matchongoing@index');

Route::get('/matchresults', function () {
    return view('matchresults');
});
Route::get('/matchresults', 'Matchresults@index');


Route::get('match-results/results1', function () {
    return view('match-results.results1');
});
Route::get('match-results/results1', 'Res1Controller@index');

Route::get('match-results/results2', function () {
    return view('match-results.results2');
});
Route::get('match-results/results2', 'Res2Controller@index');

Route::get('match-results/results3', function () {
    return view('match-results.results3');
});
Route::get('match-results/results3', 'Res3Controller@index');

Route::get('match-results/results4', function () {
    return view('match-results.results4');
});
Route::get('match-results/results4', 'Res4Controller@index');

Route::get('match-results/results5', function () {
    return view('match-results.results5');
});
Route::get('match-results/results5', 'Res5Controller@index');

Route::get('match-results/results6', function () {
    return view('match-results.results6');
});
Route::get('match-results/results6', 'Res6Controller@index');

Route::get('match-results/results7', function () {
    return view('match-results.results7');
});
Route::get('match-results/results7', 'Res7Controller@index');

Route::get('match-results/results8', function () {
    return view('match-results.results8');
});
Route::get('match-results/results8', 'Res8Controller@index');

Route::get('match-results/results9', function () {
    return view('match-results.results9');
});
Route::get('match-results/results9', 'Res9Controller@index');

Route::get('match-results/results10', function () {
    return view('match-results.results10');
});
Route::get('match-results/results10', 'Res0Controller@index');

Route::get('match-results/results11', function () {
    return view('match-results.results11');
});
Route::get('match-results/results11', 'Res11Controller@index');

Route::get('match-results/results12', function () {
    return view('match-results.results12');
});
Route::get('match-results/results12', 'Res12Controller@index');

Route::get('match-results/results13', function () {
    return view('match-results.results13');
});
Route::get('match-results/results13', 'Res13Controller@index');

Route::get('match-results/results14', function () {
    return view('match-results.results14');
});
Route::get('match-results/results14', 'Res14Controller@index');

Route::get('match-results/results15', function () {
    return view('match-results.results15');
});
Route::get('match-results/results15', 'Res15Controller@index');

Route::get('match-results/results16', function () {
    return view('match-results.results16');
});
Route::get('match-results/results16', 'Res16Controller@index');

Route::get('match-results/results17', function () {
    return view('match-results.results17');
});
Route::get('match-results/results17', 'Res17Controller@index');

Route::get('match-results/results18', function () {
    return view('match-results.results18');
});
Route::get('match-results/results18', 'Res18Controller@index');

Route::get('match-results/results19', function () {
    return view('match-results.results19');
});
Route::get('match-results/results19', 'Res19Controller@index');

Route::get('match-results/results20', function () {
    return view('match-results.results20');
});
Route::get('match-results/results20', 'Res20Controller@index');


Route::get('tournament-results/tresults1', function () {
    return view('tournament-results.tresults1');
});
Route::get('tournament-results/tresults1', 'Tres1Controller@index');

Route::get('tournament-results/tresults2', function () {
    return view('tournament-results.tresults2');
});
Route::get('tournament-results/tresults2', 'Tres2Controller@index');

Route::get('tournament-results/tresults3', function () {
    return view('tournament-results.tresults3');
});
Route::get('tournament-results/tresults3', 'Tres3Controller@index');

Route::get('tournament-results/tresults4', function () {
    return view('tournament-results.tresults4');
});
Route::get('tournament-results/tresults4', 'Tres4Controller@index');

Route::get('tournament-results/tresults5', function () {
    return view('tournament-results.tresults5');
});
Route::get('tournament-results/tresults5', 'Tres5Controller@index');

Route::get('tournament-results/tresults6', function () {
    return view('tournament-results.tresults6');
});
Route::get('tournament-results/tresults6', 'Tres6Controller@index');




Route::get('match-reg/reg1', function () {
    return view('match-reg.reg1');
});
Route::get('match-reg/reg1', 'Reg1controller@index');
Route::post('match-reg/reg1','Reg1controller@store');


Route::get('match-reg/reg2', function () {
    return view('match-reg.reg2');
});
Route::get('match-reg/reg2', 'Reg2controller@index');
Route::post('match-reg/reg2','Reg2controller@store');


Route::get('match-reg/reg3', function () {
    return view('match-reg.reg3');
});
Route::get('match-reg/reg3', 'Reg3controller@index');
Route::post('match-reg/reg3','Reg3controller@store');

Route::get('match-reg/reg4', function () {
    return view('match-reg.reg4');
});
Route::get('match-reg/reg4', 'Reg4controller@index');
Route::post('match-reg/reg4','Reg4controller@store');

Route::get('match-reg/reg5', function () {
    return view('match-reg.reg5');
});
Route::get('match-reg/reg5', 'Reg5controller@index');
Route::post('match-reg/reg5','Reg5controller@store');

Route::get('match-reg/reg6', function () {
    return view('match-reg.reg6');
});
Route::get('match-reg/reg6', 'Reg6controller@index');
Route::post('match-reg/reg6','Reg6controller@store');

Route::get('match-reg/reg7', function () {
    return view('match-reg.reg7');
});
Route::get('match-reg/reg7', 'Reg7controller@index');
Route::post('match-reg/reg7','Reg7controller@store');

Route::get('match-reg/reg8', function () {
    return view('match-reg.reg8');
});
Route::get('match-reg/reg8', 'Reg8controller@index');
Route::post('match-reg/reg8','Reg8controller@store');

Route::get('match-reg/reg9', function () {
    return view('match-reg.reg9');
});
Route::get('match-reg/reg9', 'Reg9controller@index');
Route::post('match-reg/reg9','Reg9controller@store');

Route::get('match-reg/reg10', function () {
    return view('match-reg.reg10');
});
Route::get('match-reg/reg10', 'Reg10controller@index');
Route::post('match-reg/reg10','Reg10controller@store');

Route::get('match-reg/reg11', function () {
    return view('match-reg.reg11');
});
Route::get('match-reg/reg11', 'Reg11controller@index');
Route::post('match-reg/reg11','Reg11controller@store');

Route::get('match-reg/reg12', function () {
    return view('match-reg.reg12');
});
Route::get('match-reg/reg12', 'Reg12controller@index');
Route::post('match-reg/reg12','Reg12controller@store');

Route::get('match-reg/reg13', function () {
    return view('match-reg.reg13');
});
Route::get('match-reg/reg13', 'Reg13controller@index');
Route::post('match-reg/reg13','Reg13controller@store');

Route::get('match-reg/reg14', function () {
    return view('match-reg.reg14');
});
Route::get('match-reg/reg14', 'Reg14controller@index');
Route::post('match-reg/reg14','Reg14controller@store');

Route::get('match-reg/reg15', function () {
    return view('match-reg.reg15');
});
Route::get('match-reg/reg15', 'Reg15controller@index');
Route::post('match-reg/reg15','Reg15controller@store');

Route::get('match-reg/reg16', function () {
    return view('match-reg.reg16');
});
Route::get('match-reg/reg16', 'Reg16controller@index');
Route::post('match-reg/reg16','Reg16controller@store');

Route::get('match-reg/reg17', function () {
    return view('match-reg.reg17');
});
Route::get('match-reg/reg17', 'Reg17controller@index');
Route::post('match-reg/reg17','Reg17controller@store');

Route::get('match-reg/reg18', function () {
    return view('match-reg.reg18');
});
Route::get('match-reg/reg18', 'Reg18controller@index');
Route::post('match-reg/reg18','Reg18controller@store');

Route::get('match-reg/reg19', function () {
    return view('match-reg.reg19');
});
Route::get('match-reg/reg19', 'Reg19controller@index');
Route::post('match-reg/reg19','Reg19controller@store');

Route::get('match-reg/reg20', function () {
    return view('match-reg.reg20');
});
Route::get('match-reg/reg20', 'Reg20controller@index');
Route::post('match-reg/reg20','Reg20controller@store');


Route::get('tournament-reg/treg1', function () {
    return view('tournament-reg.treg1');
});
Route::get('tournament-reg/treg1', 'Treg1controller@index');
Route::post('tournament-reg/treg1','Treg1controller@store');

Route::get('tournament-reg/treg2', function () {
    return view('tournament-reg.treg2');
});
Route::get('tournament-reg/treg2', 'Treg2controller@index');
Route::post('tournament-reg/treg2','Treg2controller@store');

Route::get('tournament-reg/treg3', function () {
    return view('tournament-reg.treg3');
});
Route::get('tournament-reg/treg3', 'Treg3controller@index');
Route::post('tournament-reg/treg3','Treg3controller@store');

Route::get('tournament-reg/treg4', function () {
    return view('tournament-reg.treg4');
});
Route::get('tournament-reg/treg4', 'Treg4controller@index');
Route::post('tournament-reg/treg4','Treg4controller@store');

Route::get('tournament-reg/treg5', function () {
    return view('tournament-reg.treg5');
});
Route::get('tournament-reg/treg5', 'Treg5controller@index');
Route::post('tournament-reg/treg5','Treg5controller@store');

Route::get('tournament-reg/treg6', function () {
    return view('tournament-reg.treg6');
});
Route::get('tournament-reg/treg6', 'Treg6controller@index');
Route::post('tournament-reg/treg6','Treg6controller@store');

Route::get('/user', function () {
    return view('user');
});

Route::get('/user', 'UserController@index');
Route::post('submit4','UserController@update1');
Route::post('submit5','UserController@update2');
Route::post('submit6','UserController@update3');

Route::get('/topup', function () {
    return view('topup');
});


Route::get('/onlinepayment', function () {
    return view('onlinepayment');
});

Route::get('/walletpayment', function () {
    return view('walletpayment');
});



Route::get('/orders', function () {
    return view('orders');
});
Route::get('/orders', 'OrdersController@index');

Route::get('/wallet', function () {
    return view('wallet');
});
Route::get('/wallet', 'WalletController@index');

Route::get('/addmoney', function () {
    return view('addmoney');
});

Route::get('/addmoney', 'Addmoney@index');
Route::post('submit3','AddmoneyController@store');


Route::get('/withdraw', function () {
    return view('withdraw');
});

Route::get('/withdraw', 'WithdrawController@index');
Route::post('withdraw1','WithdrawController@store');

Route::get('/g1', function () {
    return view('g1');
});
Route::get('/g1', 'g1@index');
//Route::post('submit2', 'OrdersController@store');
//Route::post('submit2', 'OrdersController',['only' => ['store', 'update']]);
Route::resource('submit2', 'OrdersController',['only' => ['index', 'store', 'update']]);

Route::get('/g2', function () {
    return view('g2');
});
Route::get('/g2', 'g2@index');

Route::get('/g3', function () {
    return view('g3');
});
Route::get('/g3', 'g3@index');

Route::get('/g4', function () {
    return view('g4');
});
Route::get('/g4', 'g4@index');

Route::get('/g5', function () {
    return view('g5');
});
Route::get('/g5', 'g5@index');


Route::get('/g6', function () {
    return view('g6');
});
Route::get('/g6', 'g6@index');





Route::get('/termsandconditions', function () {
    return view('termsandconditions');
});

Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/shipmentinfo', function () {
    return view('shipmentinfo');
});

Route::get('/refundandreturnpolicy', function () {
    return view('refundandreturnpolicy');
});

Route::get('/contractus', function () {
    return view('contractus');
});
Route::post('submit','Contractus@store');

Route::get('/test', function () {
    return view('test');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', function () {
    return view('user');
});



Route::get('greetings/thankyou1', function () {
    return view('greetings.thankyou1');
});
Route::get('greetings/thankyou2', function () {
    return view('greetings.thankyou2');
});
Route::get('greetings/thankyou3', function () {
    return view('greetings.thankyou3');
});
Route::get('greetings/thankyou4', function () {
    return view('greetings.thankyou4');
});

Route::get('match-reg/reg4', function () {
    return view('match-reg.reg4');
});
