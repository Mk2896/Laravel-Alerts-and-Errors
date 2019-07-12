<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

@if(session()->has('message.head'))
<script>
Swal.fire({
type: {{ session('message.head') }},
title: {{ session('message.title') }},
text: {{ session('message.body') }},
})
</script>
@endif