@if(Auth::user()->role ?? '')
  <footer class="mt-auto">
    <div class="container-fluid bg-danger bg-opacity-75 text-white d-flex justify-content-between py-1">
      <span>Staff: {{Auth::user()->name}}</span>
      <span>Copyright {{date("Y")}}</span>
    </div>
  </footer>
@endif
  
  @livewireScripts
  <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
