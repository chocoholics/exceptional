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
        'status' => 420,
        'exceptional' => 'yes', // this can be used on the front end to test if response was sent by chocoholics/exceptional
        'class' => get_class($e)
      ]
    ]);
    
  }

}
