@extends('layouts.dashboard')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<div class="container">
   <div class="row justify-content-center align-items-center">
      <div class="col-lg-6">
         <div class="intake-table">
            <div class="d-flex justify-content-between align-items-center">
               <h1 class="h1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Activate your Care provider account</font></font></h1>
            </div>
            <div class="panel-body">
               @if (Session::has('message'))
               <div class="alert alert-success text-center">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                  <p>{{ Session::get('message') }}</p>
               </div>
               @endif
            </div>
            <form 
               role="form" 
               action="{{ route('stripe.post') }}" 
               method="post" 
               class="require-validation"
               data-cc-on-file="false"
               data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
               id="payment-form">
               @csrf
               <div class="form-group">
                  <label for="name_on_card">Name on Card</label>
                  <input type="text" class="form-control" id="name_on_card"  placeholder="John Doe">
               </div>
               <div class="form-group">
                  <label for="card_number">Card Number</label>
                  <input autocomplete='off' class='form-control card-number' id="card_number" placeholder="0000 0000 0000 0000" data-slots="0" data-accept="\d" size='20' type='text'>
               </div>
               <div class="form-group row">
                  <div class="col-sm-2">
                     <label for="cvc" class=" col-form-label">CVC</label>
                     <input type='text' class='form-control card-cvc' autocomplete='off'  placeholder='000' data-slots="0" data-accept="\d" size='3'>
                  </div>
                  <div class="col-sm-4">
                     <label for="expiration_month" class=" col-form-label">Expiration Month</label>
                     <input class='form-control card-expiry-month'  placeholder='MM' data-slots="M"  data-accept="\d" size='2' type='text'>
                  </div>
                  <div class="col-sm-4">
                     <label for="expiration_year" class=" col-form-label">Expiration Year</label>
                     <input class='form-control card-expiry-year' id="expiration_year" placeholder='YYYY' data-slots="Y" data-accept="\d" size='4' type='text'>
                  </div>
               </div>
               <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now (€45)</button>
            </form>
         </div>
      </div>
   </div>
</div>
                
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
  $(function () {

/*------------------------------------------
--------------------------------------------
Stripe Payment Code
--------------------------------------------
--------------------------------------------*/

var $form = $(".require-validation");
$('form.require-validation').bind('submit', function (e) {
  var $form = $(".require-validation"),
    inputSelector = ['input[type=email]', 'input[type=password]',
      'input[type=text]', 'input[type=file]',
      'textarea'
    ].join(', '),
    $inputs = $form.find('.required').find(inputSelector),
    $errorMessage = $form.find('div.error'),
    valid = true;
  $errorMessage.addClass('hide');

  $('.has-error').removeClass('has-error');
  $inputs.each(function (i, el) {
    var $input = $(el);
    if ($input.val() === '') {
      $input.parent().addClass('has-error');
      $errorMessage.removeClass('hide');
      e.preventDefault();
    }
  });
  if (!$form.data('cc-on-file')) {
    e.preventDefault();
    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
    Stripe.createToken({
      number: $('.card-number').val(),
      cvc: $('.card-cvc').val(),
      exp_month: $('.card-expiry-month').val(),
      exp_year: $('.card-expiry-year').val()
    }, stripeResponseHandler);
  }
});

/*------------------------------------------
--------------------------------------------
Stripe Response Handler
--------------------------------------------
--------------------------------------------*/
function stripeResponseHandler(status, response) {
  if (response.error) {
    $('.error')
      .removeClass('hide')
      .find('.alert')
      .text(response.error.message);
  } else {
    /* token contains id, last4, and card type */
    var token = response['id'];
    $form.find('input[type=text]').empty();
    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
    $form.get(0).submit();
  }
}

});


document.addEventListener('DOMContentLoaded', () => {
for (const el of document.querySelectorAll("[placeholder][data-slots]")) {
  const pattern = el.getAttribute("placeholder"),
    slots = new Set(el.dataset.slots || "_"),
    prev = (j => Array.from(pattern, (c, i) => slots.has(c) ? j = i + 1 : j))(0),
    first = [...pattern].findIndex(c => slots.has(c)),
    accept = new RegExp(el.dataset.accept || "\\d", "g"),
    clean = input => {
      input = input.match(accept) || [];
      return Array.from(pattern, c =>
        input[0] === c || slots.has(c) ? input.shift() || c : c
      );
    },
    format = () => {
      const [i, j] = [el.selectionStart, el.selectionEnd].map(i => {
        i = clean(el.value.slice(0, i)).findIndex(c => slots.has(c));
        return i < 0 ? prev[prev.length - 1] : back ? prev[i - 1] || first : i;
      });
      el.value = clean(el.value).join``;
      el.setSelectionRange(i, j);
      back = false;
    };
  let back = false;
  el.addEventListener("keydown", (e) => back = e.key === "Backspace");
  el.addEventListener("input", format);
  el.addEventListener("focus", format);
  el.addEventListener("blur", () => el.value === pattern && (el.value = ""));
}
});
</script>
@endsection