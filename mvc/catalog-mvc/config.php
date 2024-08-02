// config/database.php

return [
    'default' => env('DB_CONNECTION', 'mysql'),

    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'database' => env('DB_DATABASE', 'catalog_db'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],
    ],
];

// app/Services/UserSessionService.php

namespace App\Services;

use Illuminate\Support\Facades\Session;

class UserSessionService
{
    const USER_SESSION_KEY = 'user-session-id';

    public function getUserSession()
    {
        return Session::get(self::USER_SESSION_KEY, '');
    }

    public function setUserSession($value)
    {
        Session::put(self::USER_SESSION_KEY, $value);
    }

    public function unsetUserSession()
    {
        Session::forget(self::USER_SESSION_KEY);
    }

    public function checkUserPermissionToPage()
    {
        if ($this->getUserSession() === '') {
            return redirect(config('app.url')); // or redirect()->route('your.route')
        }
    }
}

// app/Http/Controllers/YourController.php

namespace App\Http\Controllers;

use App\Services\UserSessionService;

class YourController extends Controller
{
    protected $userSessionService;

    public function __construct(UserSessionService $userSessionService)
    {
        $this->userSessionService = $userSessionService;
    }

    public function index()
    {
        $this->userSessionService->checkUserPermissionToPage();

        // Your code logic here
        return view('your_view');
    }
}