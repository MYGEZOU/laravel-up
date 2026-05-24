<x-mail::message>
# Pesan Baru dari Form Kontak Laravel Up

Anda menerima pesan baru melalui form kontak.

**Nama:** {{ $name }}  
**Email:** {{ $email }}

**Pesan:**
<x-mail::panel>
{{ $messageContent }}
</x-mail::panel>

Terima kasih,<br>
{{ config('app.name') }}
</x-mail::message>
