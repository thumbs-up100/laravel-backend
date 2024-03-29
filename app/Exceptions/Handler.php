<?php

namespace App\Exceptions;

use App\Common\lib\Utils;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Throwable;
use App\Exceptions\ExceptionReport;

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
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        if($request->is("api/*")){
            $reporter = ExceptionReport::make($exception);
            if ($reporter->shouldReturn()){
                return $reporter->report();
            }
            if(env('APP_DEBUG')){
                //开发环境，则显示详细错误信息
                return parent::render($request, $exception);
            }else{
                //线上环境,未知错误，则显示500
                return $reporter->prodReport();
            }
        }
        if (!request()->route()) {
            return redirect(route('admin::err404'));
        } else if (!env('APP_DEBUG') && stripos(request()->route()->getName(), 'admin') !== false) {
            if (request()->ajax()) {
                return Utils::exceptionResponse('Internal Server Error.');
            }
            return redirect(route('admin::err50x'));
        }
        return parent::render($request, $exception);
    }

    public function convertValidationExceptionToResponse(ValidationException $e, $request)
    {
        // return parent::convertValidationExceptionToResponse($e, $request); // TODO: Change the autogenerated stub
        $data = $e->validator->getMessageBag();
        $msg = collect($data)->first();
        if (is_array($msg)) {
            $msg = current($msg);
        }
        return ['status' => 0, 'msg' => $msg];
    }
}
