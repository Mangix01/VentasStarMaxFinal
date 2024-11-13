@if (session('success'))
<script>
    let message = "{{ session('success') }}";
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: message,
        showConfirmButton: false,
        timer: 1500
    });
</script>
@elseif (session('error'))
<script>
    let message2 = "{{ session('error') }}"; // Cambiado a message2
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: message2, // Cambiado a message2
        showConfirmButton: false,
        timer: 1500
    });
</script>
@endif