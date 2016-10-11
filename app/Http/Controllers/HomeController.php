<?php
namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

//use PDO;
class HomeController extends Controller
{
    /*
    public function __construct()
    {
        //Porta que ens diu on anar al fer la autenticació. Per evitar if/else.
        $this->middleware('auth');
        */
    }
    public
/**
 * @return mixed
 */
function index()
    {
        /*
        //Controlador només fa la seva feina.
        $user=Auth::user();
        return view('home')->withUser($user);
*/

//        $user = new \stdClass();
//
//    // Fem una pdo a partir del nostre fitxer sqlite.
//        $pdo = new PDO('sqlite:/home/manel/Code/laravelManualAuth/database/database.sqlite');
//        $query = $pdo->prepare('SELECT * FROM users WHERE id=1');
//        $query->execute();
//        $row = $query->fetch();
//        //dd($row);
//
//        //Funció estàtica que ens retorna el registre que li indiquem.
//        $user=User::find(1);
//        // 1) Aconseguir informació de la BD.
//        // 2) Mostrar vista home passant info del usuari.
////        $user = User::find(1);
////        $user->name="Manel";
////        $user->sn1="Gavaldà";
//        return view('home')->withUser($user); //resources/views/home.blade.php
    //Estat sessió
    $user = $this->getUser();
        return view('home')
            ->withUser($user);
    }
    private function getUser()
{
    //Opció 1: query strings $_GET
    return $_GET['user'];
}