<footer class="mt-auto">
    <div class="container-fluid bg-danger bg-opacity-75 text-white d-flex justify-content-between py-1">
        
        @if(Auth::user()->role ?? '')<span>Staff: Hans Anderson</span>@endif
      <span>Copyright 2023</span>
    </div>
  </footer>
  
  @livewireScripts
  <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
