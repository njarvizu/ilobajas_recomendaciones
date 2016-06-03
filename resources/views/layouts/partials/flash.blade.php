@if (session()->has('flash_message'))

    <script>
        $(document).ready(function() {
            swal({
                {{--title: '{{ session('flash_message') }}',--}}
                text: '{{ session('flash_message') }}',
                type: '{{ session('flash_level') }}',
                confirmButtonText: 'Cool'
            })
        });
    </script>
@endif