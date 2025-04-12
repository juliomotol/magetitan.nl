<?php

use function Laravel\Folio\name;
use App\Models\Speaker;

name('speakers.index');

$speakers = Speaker::all();
?>

<x-layout.base>

</x-layout.base>
