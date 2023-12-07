<div>
  @include('livewire.customerprofiles.form')
</div>
<script>
  document.addEventListener('livewire:initialized', () => {
    @this.on('swal',(event)=>{
      const data = event
      swal.fire({
        icon:data[0]['icon'],
        title:data[0]['title'],
        text:data[0]['text'],
      })
    })
    @this.on('toast', (event)=>{
      const data = event
      swal.fire({
        title:data[0]['title'],
        icon:data[0]['icon'],
        timer:3000,
        toast:true,
        position:'top-right',
        showConfirmButton: false,
      })
    })
  })
</script>