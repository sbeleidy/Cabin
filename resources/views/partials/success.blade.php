@if (Session::has('success'))
<div data-alert class="alert-box success" tabindex="0" aria-live="assertive" role="alertdialog">
  {{ Session::get('success') }}
  <button tabindex="0" class="close" aria-label="Close Alert">&times;</button>
</div>
@endif