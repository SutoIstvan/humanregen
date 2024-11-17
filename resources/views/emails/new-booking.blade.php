<x-mail::message>
# Egy új foglalás érkezett.

**Részletek:**

- **Ügyfél neve**: {{ $bookingDetails['name'] }}

- **Email**: {{ $bookingDetails['client_email'] }}

- **Telefon**: {{ $bookingDetails['client_phone'] }}

- **Foglalás dátuma**: {{ $bookingDetails['date'] }}

- **Foglalás időpontja**: {{ $bookingDetails['time'] }}

- **Időtartam**: {{ $bookingDetails['service'] }}

<x-mail::button :url="route('dashboard')">
    Műszerfal megnyitása
</x-mail::button>

<x-mail::panel>
    Kérem, erősítse meg a foglalást a műszerfalban, hogy az ügyfél értesítést kapjon a sikeres foglalásról.
</x-mail::panel>

</x-mail::message>
