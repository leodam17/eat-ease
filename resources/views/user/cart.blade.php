@extends('base.base')

@section('title', 'EatEase | Cart')

@section('content')
<style>
.cart-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 2rem;
}

.cart-table th, 
.cart-table td {
    text-align: center;
    padding: 1rem;
    border-bottom: 1px solid #d1c6b1;
}

.cart-table th {
    background-color: transparent;
    font-weight: bold;
}

.cart-table tbody tr:last-child td {
    border-bottom: none;
}

.cart-table td img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 8px;
}

.cart-table td .product-details {
    font-size: 0.9rem;
}

.quantity-controls {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

.quantity-btn {
    font-weight: bold;
    padding: 0.4rem 0.6rem;
    border: 1px solid #c2b5a3;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.2s ease;
    min-width: 30px;
    text-align: center;
}

.quantity-btn:hover {
    background-color: #d6b67d;
}

.quantity-input {
    width: 50px;
    text-align: center;
    border: 1px solid #c2b5a3;
    border-radius: 4px;
    padding: 0.3rem;
}

.remove-item {
    background: none;
    border: none;
    font-size: 1.2rem;
    cursor: pointer;
    transition: color 0.3s ease;
} 

.remove-item:hover {
    transform: scale(1.1);
}

.summary-container {
    margin-top: 2rem;
    padding: 1rem 0;
    display: flex;
    justify-content: space-between;
    font-size: 1rem;
    font-weight: bold;
    text-align: center;
}

.checkout-btn {
    padding: 0.8rem 1.5rem;
    border-radius: 4px;
    text-transform: uppercase;
    font-weight: bold;
    cursor: pointer;
    border: none;
    transition: background-color 0.3s ease;
}

.checkout-btn:hover {
    background-color: #c89550;
}

.cart-table th.dark\:bg-[#333030] {
    background-color: #333030;
}

.cart-table th.dark\:text-[#e7e3d8] {
    color: #e7e3d8;
}

.quantity-btn.dark\:bg-[#9a7f48] {
    background-color: #9a7f48;
}

.quantity-btn.dark\:hover\:bg-[#7c6539] {
    background-color: #7c6539;
}

.quantity-input.dark\:bg-[#333030] {
    background-color: #333030;
}

.summary-container.dark\:text-[#e7e3d8] {
    color: #e7e3d8;
}

.checkout-btn.dark\:bg-[#7c6539] {
    background-color: #7c6539;
}

.checkout-btn.dark\:hover\:bg-[#6a4e33] {
    background-color: #6a4e33;
}

.min-h-screen {
    background-color: #e7e3d8;
}

.dark\:bg-[#1e1a14] {
    background-color: #1e1a14;
}
</style>


<!-- Header -->
<div class="relative w-full h-[300px] bg-cover bg-center" style="background-image: url('{{ asset('img/cart.png') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center">
        <div class="text-white text-sm mb-4">
            <a href="/home" class="hover:underline">Home</a>
            <span class="mx-2">></span>
            <a href="/menu" class="hover:underline">Menu</a>
            <span class="mx-2">></span>
            <span>Cart</span>
        </div>
        <h1 class="text-4xl font-bold text-white">Your Cart</h1>
    </div>
</div>
<div class="min-h-screen bg-[#e7e3d8] dark:bg-[#1e1a14] py-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

        @if(count($menuDetails) > 0)
            <div class="overflow-x-auto">
                <!-- Tabel Cart -->
                <table class="cart-table w-full text-center border-collapse">
                    <thead>
                        <tr>
                            <th class="bg-[#f8f4ec] text-[#4a3b2f] dark:bg-[#333030] dark:text-[#e7e3d8] py-3 px-4">Food & Drink</th>
                            <th class="bg-[#f8f4ec] text-[#4a3b2f] dark:bg-[#333030] dark:text-[#e7e3d8] py-3 px-4">Price</th>
                            <th class="bg-[#f8f4ec] text-[#4a3b2f] dark:bg-[#333030] dark:text-[#e7e3d8] py-3 px-4">Qty</th>
                            <th class="bg-[#f8f4ec] text-[#4a3b2f] dark:bg-[#333030] dark:text-[#e7e3d8] py-3 px-4" style="width: 150px;">Total</th>
                            <th class="bg-[#f8f4ec] text-[#4a3b2f] dark:bg-[#333030] dark:text-[#e7e3d8] py-3 px-4"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($menuDetails as $item)
                            <tr data-menu-id="{{ $item['id'] }}" class="border-b border-[#d6d1c4] dark:border-[#3a3631]">
                                <td class="py-4 px-4">
                                    <div class="flex flex-col items-center">
                                        <img src="{{ asset('img/' . $item['image']) }}" alt="{{ $item['name'] }}" class="w-16 h-16 rounded shadow">
                                        <div class="mt-2">
                                            <p class="product-name text-[#4a3b2f] dark:text-[#e7e3d8] font-bold">{{ $item['name'] }}</p>
                                            <p class="product-details text-[#6b4f3b] dark:text-[#d1c7b0] text-sm">Category: {{ $item['category'] ?? 'Default' }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-[#4a3b2f] dark:text-[#e7e3d8] py-4 px-4">
                                    Rp<span class="font-bold">{{ number_format($item['price'], 0, ',', '.') }}</span>,<span style="font-size: 0.75rem;">00</span>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="quantity-controls">
                                        <button class="quantity-btn text-white bg-[#d6a670] hover:bg-[#c89550] dark:bg-[#9a7f48] dark:hover:bg-[#7c6539] rounded-l px-2 py-1 text-sm"
                                            data-action="decrease">-</button>
                                        <input type="text" value="{{ $item['quantity'] }}" readonly
                                            class="quantity-input w-10 text-center bg-[#f8f4ec] text-[#4a3b2f] dark:bg-[#333030] dark:text-[#e7e3d8] border border-[#d6d1c4] dark:border-[#3a3631]">
                                        <button class="quantity-btn text-white bg-[#d6a670] hover:bg-[#c89550] dark:bg-[#9a7f48] dark:hover:bg-[#7c6539] rounded-r px-2 py-1 text-sm"
                                            data-action="increase">+</button>
                                    </div>
                                </td>
                                <td class="text-[#4a3b2f] dark:text-[#e7e3d8] py-4 px-4">
                                    Rp<span class="font-bold">{{ number_format($item['totalPrice'], 0, ',', '.') }}</span>,<span style="font-size: 0.75rem;">00</span>
                                </td>
                                <td class="py-4 px-4">
                                    <button class="remove-item" title="Remove">&#x2716;</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <!-- Payment Method -->
            <div class="payment-method-container mt-4">
                <label for="payment-method" class="block text-[#4a3b2f] dark:text-[#e7e3d8] font-bold mb-2">Select Payment Method</label>
                <select id="payment-method" class="w-full p-3 border border-[#d6c6a1] rounded dark:bg-[#3a3631] dark:text-[#e7e3d8] dark:border-[#7c6539]">
                    <option value="" disabled selected class="text-[#6b4f3b] dark:text-[#d1c7b0]">Select Here</option>
                    <option value="credit-card" class="text-[#4a3b2f] dark:text-[#e7e3d8]">Credit Card</option>
                    <option value="bank-transfer" class="text-[#4a3b2f] dark:text-[#e7e3d8]">Bank Transfer</option>
                    <option value="paypal" class="text-[#4a3b2f] dark:text-[#e7e3d8]">PayPal</option>
                    <option value="ovo" class="text-[#4a3b2f] dark:text-[#e7e3d8]">OVO</option>
                    <option value="gopay" class="text-[#4a3b2f] dark:text-[#e7e3d8]">GoPay</option>
                    <option value="cash" class="text-[#4a3b2f] dark:text-[#e7e3d8]">Cash</option>
                </select>
            </div>

            <!-- Total Order -->
            <div class="summary-container flex justify-between items-center mt-6 text-[#4a3b2f] dark:text-[#e7e3d8] p-4 rounded">
                <span class="font-bold">Order Total</span>
                <span id="order-total" class="font-bold">Rp<span class="font-bold">{{ number_format($orderTotal, 0, ',', '.') }}</span>,<span style="font-size: 0.75rem;">00</span></span>
            </div>

            <!-- Tombol Checkout -->
            <form action="{{ route('cart.storeOrder') }}" method="POST" id="checkout-form">
                @csrf
                <input type="hidden" name="payment_method" id="payment-method-input">
                <button type="submit" class="pay-now w-full mt-4 py-3 bg-[#d6a670] hover:bg-[#c89550] text-white font-bold rounded dark:bg-[#7c6539] dark:hover:bg-[#6a4e33]">
                    Pay Now
                </button>
            </form>


        @else
            <!-- Apabila cart kosong -->
            <div class="text-center py-10">
                <h2 class="text-2xl font-bold text-[#4a3b2f] dark:text-[#e7e3d8]">Oops, Your cart is empty!</h2>
                <p class="text-base text-[#6b4f3b] dark:text-[#d1c7b0] mt-4">
                    <em>
                    "It's as empty as a coffee cup in the morning! Fill it up with some delicious bites 🍔 and refreshing sips ☕!"
                    </em>
                </p>
                <a href="{{ url('/menu') }}" class="mt-6 inline-block bg-[#d6a670] hover:bg-[#c89550] text-white font-bold py-2 px-4 rounded dark:bg-[#9a7f48] dark:hover:bg-[#7c6539]">
                    Explore Menu 🍽️
                </a>
            </div>
        @endif
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const cartTable = document.querySelector('.cart-table tbody');

        // Update
        cartTable.addEventListener('click', (event) => {
            if (event.target.classList.contains('quantity-btn')) {
                const button = event.target;
                const tableRow = button.closest('tr');
                const menuId = tableRow.getAttribute('data-menu-id');
                const action = button.getAttribute('data-action');
                const quantityInput = tableRow.querySelector('.quantity-input');
                const totalPriceCell = tableRow.querySelector('td:nth-child(4)');
                const orderTotalCell = document.getElementById('order-total');

                // AJAX
                fetch(`/user/cart/update/${menuId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ action })
                })
                .then(response => response.json())
                .then(data => {
                    // Update quantity dan total harga
                    quantityInput.value = data.quantity;

                    totalPriceCell.innerHTML = `Rp<span class="font-bold">${data.itemTotalPrice.toLocaleString('id-ID')}</span>,<span style="font-size: 0.75rem;">00</span>`;

                    orderTotalCell.innerHTML = `Rp<span class="font-bold">${data.orderTotal.toLocaleString('id-ID')}</span>,<span style="font-size: 0.75rem;">00</span>`;
                })
                .catch(error => console.error('Error:', error));
            }
        });

        // Remove
        cartTable.addEventListener('click', (event) => {
            if (event.target.classList.contains('remove-item')) {
                const button = event.target;
                const tableRow = button.closest('tr');
                const menuId = tableRow.getAttribute('data-menu-id');
                const orderTotalCell = document.getElementById('order-total');

                // AJAX
                fetch(`/user/cart/remove/${menuId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Remove item dan update total order
                    tableRow.remove();

                    orderTotalCell.innerHTML = `Rp<span class="font-bold">${data.orderTotal.toLocaleString('id-ID')}</span>,<span style="font-size: 0.75rem;">00</span>`;
                })
                .catch(error => console.error('Error:', error));
            }
        });
    });

    // Update quantity
    $(document).on('click', '.quantity-btn', function() {
        const menuId = $(this).closest('tr').data('menu-id');
        const newQuantity = $(this).siblings('input.quantity-input').val();

        $.ajax({
            url: `/user/cart/update/${menuId}`,
            type: 'POST',
            data: { quantity: newQuantity },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    alert(response.message);
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
                alert('An error occurred.');
            }
        });
    });
</script>
@endsection