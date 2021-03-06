@extends('layouts.nav-bar')

@section('content')
<style>
input[type=text]:dis {
background: #dddddd;
}
</style>
<div class="container mt-4 mb-4">
    <div class="card-group" style="border-style: solid; border-width: 3px; border-image: linear-gradient(to top, #4481eb 0%, #04befe 100%) 1;">
        <div class="card shadow-none">
          <div class="card-body">
            @if(\Session::has('success'))
            {{-- session ung nilagay mo sa return ng controller --}}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                {{ \Session::get('success')}}
              </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @if(count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Notice!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p>Please check the following:</p>
                <ul>
                  @foreach($errors->all() as $error)
                      <li>
                          {{$error}}
                      </li>
                  @endforeach
              </ul>

            </div>
            @endif
            <h3 class="card-title font-weight-bold">REGISTER NOW!</h3>
            <p class="card-text">Fill all the required information below:</p>
            <form method="POST" action="{{url('Events/XmasBazaarReg')}}">
              {{csrf_field()}}
                <div class="row text-center">
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="category" id="category1" required value="Food">
                            <label class="form-check-label" for="category1">Food</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="category" id="category2" required value="Arts and Craft">
                            <label class="form-check-label" for="category2">Arts and Craft</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="category" id="category3" required value="Clothing/Apparel/Accessories">
                            <label class="form-check-label" for="category3">Clothing/Apparel/Accessories</label>
                          </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Name/Business Name" required name="name">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Contact No." required name="contact_no">
                  </div>
                </div>
                <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Contact Person" required name="contact_person">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Email Address" required name="contact_email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <textarea required name="products_desc" id="" cols="30" rows="3" class="form-control" style="resize: none;" placeholder="Please enter the specific products you will sell."></textarea>
                    </div>
                    <p class="card-text"><small class="text-muted">*Please check all the information before submitting.</small></p>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <button class="btn btn-success btn-block font-weight-bold" disabled="disabled" type="submit">REGISTER</button>
                    </div>
                  </div>
              </form>
          </div>
        </div>
        <div class="card shadow-none">
          <div class="card-body text-center">
            <img class="w-100 mt-4" src="{{asset('assets/Bazaar_BG1.png')}}" alt="Card image cap">
          </div>
        </div>
      </div>
</div>
@endsection
