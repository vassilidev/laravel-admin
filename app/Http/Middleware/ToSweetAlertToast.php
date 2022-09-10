<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ToSweetAlertToast
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if ($request->session()->has('success')) {
            toast($request->session()->get('success'), 'success')->middleware();
        }

        if ($request->session()->has('info')) {
            toast($request->session()->get('info'), 'info')->middleware();
        }

        if ($request->session()->has('warning')) {
            toast($request->session()->get('warning'), 'warning')->middleware();
        }

        if ($request->session()->has('question')) {
            toast($request->session()->get('question'), 'question')->middleware();
        }

        if ($request->session()->has('info')) {
            toast($request->session()->get('info'), 'info')->middleware();
        }

        if ($request->session()->has('errors') && config('sweetalert.middleware.auto_display_error_messages')) {
            $error = $request->session()->get('errors');

            if (!is_string($error)) {
                $error = $this->getErrors($error->getMessages());
            }

            toast($error, 'error')->middleware();
        }

        if ($request->session()->has('status')) {

            if ($request->session()->get('status') === 'verification-link-sent') {
                toast(__('A new email verification link has been emailed to you!'), 'success')->middleware();
            } else {
                toast($request->session()->get('status'), 'info')->middleware();
            }
        }

        return $next($request);
    }

    /**
     * Get the validation errors
     *
     * @param array $errors
     *
     * @return string
     */
    private function getErrors(array $errors): string
    {
        return collect($errors)->flatten()->implode('<br />');
    }
}
