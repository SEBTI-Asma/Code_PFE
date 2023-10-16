<div wire:ignore.self>
    @if($currentPage == PAGEARCHIVE)
        @include("livewire.archive.archives")
    @endif
    @if($currentPage == PAGECONSULTERDEMANDEARCHIVE)
        @include("livewire.archive.consulterdemandearchivee")
    @endif
</div>
<script>
    window.addEventListener("showSuccessMessage", event=>{
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: event.detail.message,
            showConfirmButton: false,
            timer: 1500
        })
    })
    window.addEventListener("showSuccessMessage", event=>{
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: event.detail.message,
            showConfirmButton: false,
            timer: 1500
        })
    })
    window.addEventListener("showConfirmMessage1", event=>{
        Swal.fire({
            title: event.detail.message.title,
            icon: event.detail.message.type,
            showCancelButton: true,
            confirmButtonColor: '#4367E9',
            cancelButtonColor: 'red',
            confirmButtonText: 'Confirmer',
            cancelButtonText: 'Annuler',
            }).then((result) => {
            if (result.isConfirmed) {
                @this.desarchiver(event.detail.message.data.demande_id)
            }
        })
    })
</script>
