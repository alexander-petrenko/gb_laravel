<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCommentRequest;
use App\Http\Requests\UserRequestRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function comment()
    {
        return view('comment');
    }

    public function commentAdd(UserCommentRequest $request)
    {
        $request->validated();

        $name = $request->input('name');
        $comment = $request->input('comment');

        $str = $name . ': ' . $comment . ': ' . date('H:i:s Y-m-d') . PHP_EOL;

        if (file_put_contents(storage_path('app/public/comments.txt'), $str, FILE_APPEND)) {
            $message = 'Thank you for your feedback!';
        } else {
            $message = 'Error!';
        }

        return view('comment', [
            'message' => $message
        ]);
    }

    public function feedback()
    {
        $comments = explode("\n", file_get_contents(storage_path('app/public/comments.txt')));
        array_pop($comments);

        $feedback = [];
        foreach ($comments as $comment) {
            $comment = explode(": ", $comment);
            $feedback[] = $comment;
        }

        return view('feedback', [
            'comments' => $feedback
        ]);
    }

    public function request()
    {
        return view('request');
    }

    public function requestAdd(UserRequestRequest $request)
    {
        $request->validated();

        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $user_request = $request->input('request');

        $str = $name . ', ' . $phone . ', ' . $email . ', ' . $user_request . ', ' . date('H:i:s Y-m-d') . PHP_EOL;

        if (file_put_contents(storage_path('app/public/requests.txt'), $str, FILE_APPEND)) {
            $message = 'Thank you for your request!';
        } else {
            $message = 'Error!';
        }

        return view('request', [
            'message' => $message
        ]);
    }

    public function requests()
    {
        $requests = explode("\n", file_get_contents(storage_path('app/public/requests.txt')));
        array_pop($requests);

        $result = [];
        $i = 0;
        foreach ($requests as $request) {
            $request = explode(", ", $request);
            $result[] = [
                'id' => $i,
                'name' => $request[0],
                'phone' => $request[1],
                'email' => $request[2],
                'request' => $request[3],
                'time' => $request[4]
            ];
            $i++;
        }

        return view('requests', [
            'requests' => $result
        ]);
    }
}
