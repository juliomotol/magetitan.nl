<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeToNewsletterRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;

class SubscribeToNewsletterController extends Controller
{
    public function __invoke(SubscribeToNewsletterRequest $request)
    {
        $validated = $request->validated();

        Http::asJson()
            ->acceptJson()
            ->withToken(config('services.sender.token'))
            ->post('https://api.sender.net/v2/subscribers', [
                'email' => $validated['email'],
                'name' => $validated['name'],
            ])
            ->onError(function (Response $response) {
                report($response->toException());
                throw ValidationException::withMessages(['email' => 'Unable to process at the moment. Please try again later.'])
                    ->redirectTo(url()->previous() . "#newsletter");
            });

        return redirect()
            ->back()
            ->with('notifications', [
                [
                    'type' => 'success',
                    'title' => 'Subrcribed!',
                    'message' => 'You have successfully subscribed to our newsletter.',
                ]
            ]);
    }
}
