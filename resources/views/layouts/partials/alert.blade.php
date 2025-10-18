@if (session('success'))
    <script>
        let message = "{{ session('success') }}";
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            customClass: {
                popup: 'swal-toast-custom',
                timerProgressBar: 'swal-progress-bar-success'
            },
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: message
        })
    </script>
@endif

@if (session('error'))
    <script>
        let messageError = "{{ session('error') }}";
        const ToastError = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            customClass: {
                popup: 'swal-toast-custom',
                timerProgressBar: 'swal-progress-bar-error'
            },
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        ToastError.fire({
            icon: 'error',
            title: messageError
        })
    </script>
@endif

@if (session('login'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let message = "{{ session('login') }}";
            Swal.fire({
                title: message,
                background: '#fffaf2',
                color: '#1D0B07',
                confirmButtonColor: '#5a3f2b'
            });
        });
    </script>
@endif
