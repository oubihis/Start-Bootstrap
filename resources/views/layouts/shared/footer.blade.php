<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <ul class="list-inline text-center">
          {{ menu('social', 'layouts.components.social') }}
        </ul>
        <p class="copyright text-muted">
          Copyright &copy; {{ config('app.name') }} {{ date('Y') }}
        </p>
      </div>
    </div>
  </div>
</footer>