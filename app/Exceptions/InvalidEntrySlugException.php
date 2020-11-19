<?php

namespace App\Exceptions;

use App\Models\Entry;

Use Exception;

class InvalidEntrySlugException extends Exception
{
  public $entri;
  public function __construct(Entry $entri)
  {
     $this->entri=$entri;
  }

  public function render()
  {
   return redirect($this->entri->getUrl());
  }

}