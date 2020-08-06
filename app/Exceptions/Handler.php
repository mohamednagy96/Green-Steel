<?php

namespace App\Exceptions;


use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
            if ($exception instanceof ModelNotFoundException && $request->wantsJson()) {
                return response()->json([
                    'code' => 404,
                    'status' => 'Failed',
                    'message' => 'Resource item not found.'
                ], 200);
            }

            if ($exception instanceof NotFoundHttpException && $request->wantsJson()) {
                return response()->json([
                    'code' => 404,
                    'status' => 'Failed',
                    'message' => 'Resource not found.'
                ], 200);
            }
            if ($exception instanceof ModelNotFoundException) {
                return response()->json([
                    'code' => 200,
                    'error' => 'Data not found in this section.']);

            }


            if ($exception instanceof MethodNotAllowedHttpException && $request->wantsJson()) {
                return response()->json([
                    'code' => 405,
                    'status' => 'Failed',
                    'message' => 'Method not allowed.'
                ], 200);
            }

            if ($exception instanceof MethodNotAllowedHttpException && $request->wantsJson()) {
                return response()->json([
                    'code' => 405,
                    'status' => 'Failed',
                    'message' => 'Method not allowed.'
                ], 200);
            }

            if ($exception instanceof TooManyRequestsHttpException && $request->wantsJson()) {
                return response()->json([
                    'code' => 429,
                    'status' => 'Failed',
                    'message' => 'Too Many Request.'
                ], 200);
            }

            // $statusCode = 500;
            // $response = ($statusCode == 500) ? ['code'=>500,'status'=>'Failed','message'=>'internal server error','error'=>$exception->getMessage()] : $exception->getMessage();
            // return response()->json($response, 200);


        //    if ($exception instanceof QueryException) {
        //        if($exception->getCode() == 23000){
        //            $code = $exception->errorInfo['1'];
        //            switch ($code) {
        //                case '1062':
        //                    $message = 'Sorry Cant dublicate data!';
        //                    break;

        //                case '1451':
        //                    $message = 'Sorry You cant delete this becuase it used in another model!';
        //                    break;

        //                default:
        //                    $message = "Sql Error 23000 [{$code}]";
        //                    break;
        //            }
        //            return response()->json([
        //                'code' => $code,
        //                'error' => $message
        //            ], 200);
        //        }
        //    }







        return parent::render($request, $exception);
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        if ($request->is('admin') || $request->is('admin/*')) {
            return redirect()->route('admin.login.show');
        }
        return redirect()->guest(route('login'));
    }
}
