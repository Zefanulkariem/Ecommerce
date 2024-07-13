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
    <div class="row mt-5">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
          <div class="card-people mt-auto">
            <img src="{{asset('admin_assets/assets/images/dashboard/people.svg')}}" alt="people">
            <div class="weather-info">
              <div class="d-flex">
                <div>
                  <h2 class="mb-0 font-weight-normal"><i class="icon-sun me-2"></i>19<sup>C</sup></h2>
                </div>
                <div class="ms-2">
                  <h4 class="location font-weight-normal">Bandung</h4>
                  <h6 class="font-weight-normal">Cerah</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
              <div class="card-body">
                <p class="mb-4">Today’s Bookings</p>
                <p class="fs-30 mb-2">4006</p>
                <p>10.00% (30 days)</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <p class="mb-4">Total Bookings</p>
                <p class="fs-30 mb-2">61344</p>
                <p>22.00% (30 days)</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
            <div class="card card-light-blue">
              <div class="card-body">
                <p class="mb-4">Number of Meetings</p>
                <p class="fs-30 mb-2">34040</p>
                <p>2.00% (30 days)</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card transparent">
            <div class="card card-light-danger">
              <div class="card-body">
                <p class="mb-4">Number of Clients</p>
                <p class="fs-30 mb-2">47033</p>
                <p>0.22% (30 days)</p>
              </div>
            </div>
          </div>
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