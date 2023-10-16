<div wire:ignore.self>
    @if($currentPage == PAGECREATDEMANDE)
        @include("livewire.mesdemandes.formulaire_demande")
    @endif
    @if($currentPage == PAGEMESDEMANDE)
        @include("livewire.mesdemandes.mesdemandes")
    @endif
    @if($currentPage == PAGECONSULTERDEMANDE)
        @include("livewire.mesdemandes.consulterdemande")
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
    window.addEventListener("showConfirmMessage", event=>{
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
                @this.annuler(event.detail.message.data.demande_id)
            }
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
                @this.archiver(event.detail.message.data.demande_id)
            }
        })
    })
</script>
