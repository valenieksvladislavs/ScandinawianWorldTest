<?php

namespace App\Http\Controllers;

use App\Services\PasswordService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PasswordController extends Controller
{
    public function __construct(private readonly PasswordService $passwordService) {}
    public function index(): View
    {
        return view('generate-password');
    }

    /**
     * @throws Exception
     */
    public function generate(Request $request): ?string
    {
        $length = $request->input('length', 12);
        $useNumbers = $request->input('useNumbers', false);
        $useUppercase = $request->input('useUppercase', false);
        $useLowercase = $request->input('useLowercase', false);

        return $this->passwordService->generate($length, $useNumbers, $useUppercase, $useLowercase);
    }
}
