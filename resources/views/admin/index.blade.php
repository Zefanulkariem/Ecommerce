@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
      <h3 class="font-weight-bold">Selamat Datang, {{Auth::user()->name}}</h3>
      <h6 class="font-weight-normal mb-0">kamu memiliki <span class="text-primary">3 pesan tak terbaca!</span></h6>
    </div>
    <div class="col-12 col-xl-4">
      <div class="justify-content-end d-flex">
        <div class="flex-md-grow-1 flex-xl-grow-0">
            <i class="mdi mdi-calendar"></i>
            Hari ini<p id="dateTime"></p>
        </div>
      </div>
    </div>
  </div>
@endsection

<script>
     function updateDateTime() {
            const dateTimeElement = document.getElementById('dateTime');
            const now = new Date();

            const options = {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            };

            const formattedDateTime = now.toLocaleString('en-ID', options);

            dateTimeElement.textContent = formattedDateTime;
        }

        setInterval(updateDateTime, 1000); // Update setiap detik
        updateDateTime();
</script>