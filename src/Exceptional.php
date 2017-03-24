<?php

namespace Chocoholics\Exceptional;

trait Exceptional {

  /**
     * Handle the exception.
     *
     * @param  Exception  $exception
     * @return \Illuminate\Http\Response
     */
  public function handleException($exception)
  {
    return response()->json([
      'error' => [
        'code' => $exception->getCode(),
        'message' => $exception->getMessage(),
        'status' => 420
      ]
    ]);
  }

}
