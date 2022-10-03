@extends('layouts.app')
@section('title', 'Контакты')
@section('content')

<div class="container">
<div class="contact-schooll  ">
  <div class="col">
    <h1 class="">Контакты</h1>
    <div class="container-contact">
      <div class="row">
        <div class="col">
          <div class="schedule">
            <i class="fa fa-map-marker" aria-hidden="true"></i><p>г.Челябинск ул.Гагарина, 43</p>
            <p>График работы:</p>
            <p>пн-пт 9:00 - 21:00,</p>
            <p>сб 9:00 - 18:00</p>
          </div>
          <div class="tel">
              <p>
                <a href="tel:+"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>
                +7 (351) 265 55 54
                </a>
              </p>
              <p>
                <a href="tel:+">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>
                  +7 (351) 261 14 04
                </a></p>
          </div>
        <div class="сol">
          <h3 class="">Остались вопросы?</h3>
          <form action="{{route('question.store')}}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <input type="email" name="email" id="email" placeholder="Ваш email" class="container-fluid form-control"
            value="
            @if (Auth::check())
                {{Auth::user()->email}}
            @endif" style="margin-bottom: 5px">
            <textarea name="text" class="form-control" id="textarea" maxlength="100" placeholder="Ваш вопрос" style="resize: none; min-height: 200px"></textarea>
            <button class="bth-entry">Отправить вопрос</button>
          </form>
        </div>
      </div>
      <div class="col-sm-6">
        <a name="maps"></a>
        <div style="position:relative;overflow:hidden;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2281.4011881621245!2d61.43283741580248!3d55.1237552803898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c58d346bdc58f3%3A0xa2f7b6fc8577f60a!2z0YPQuy4g0JPQsNCz0LDRgNC40L3QsCwgNDMsINCn0LXQu9GP0LHQuNC90YHQuiwg0KfQtdC70Y_QsdC40L3RgdC60LDRjyDQvtCx0LsuLCA0NTQwNDY!5e0!3m2!1sru!2sru!4v1648803494276!5m2!1sru!2sru" width="2500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
  </div>        
</div>
</div>
</div>
</div>
@endsection