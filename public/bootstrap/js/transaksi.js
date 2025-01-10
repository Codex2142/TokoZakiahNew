    document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.getElementById('searchInput');
        const clearSearch = document.getElementById('clearSearch');
        const leftTable = document.getElementById('leftTable');
        const rightTable = document.getElementById('rightTable');
        const totalAmount = document.getElementById('totalAmount');

        // Search functionality
        searchInput.addEventListener('input', () => {
            const query = searchInput.value.toLowerCase();
            Array.from(leftTable.rows).forEach(row => {
                const productName = row.cells[0].textContent.toLowerCase();
                if (productName.includes(query)) {
                    row.classList.remove('hidden');
                } else {
                    row.classList.add('hidden');
                }
            });
        });

        // Clear search
        clearSearch.addEventListener('click', () => {
            searchInput.value = '';
            Array.from(leftTable.rows).forEach(row => row.classList.remove('hidden'));
        });

        // Add to right table
        leftTable.addEventListener('click', event => {
            if (event.target.closest('.add-to-right')) {
                const row = event.target.closest('tr');
                const productName = row.cells[0].textContent;
                const price = parseInt(row.cells[1].textContent.replace(/\./g, ''), 10);
                addToRightTable(productName, price);
            }
        });

        // Add row to the right table or increment quantity if it exists
        function addToRightTable(productName, price) {
            // Check if the product already exists in the right table
            const existingRow = Array.from(rightTable.rows).find(row => row.cells[1].textContent === productName);

            if (existingRow) {
                // Increment the quantity and update the subtotal
                const quantityElem = existingRow.querySelector('.quantity');
                const subtotalElem = existingRow.querySelector('.subtotal');
                let quantity = parseInt(quantityElem.textContent, 10) + 1;
                quantityElem.textContent = quantity;
                subtotalElem.textContent = (price * quantity).toLocaleString('id-ID');
            } else {
                // Add a new row
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <th scope="row">${rightTable.rows.length + 1}.</th>
                    <td>${productName}</td>
                    <td>
                        <button class="btn btn-danger btn-sm decrement">-</button>
                        <span class="quantity">1</span>
                        <button class="btn btn-success btn-sm increment">+</button>
                    </td>
                    <td>${price.toLocaleString('id-ID')}</td>
                    <td class="subtotal">${price.toLocaleString('id-ID')}</td>
                `;
                rightTable.appendChild(newRow);
            }
            updateTotal();
        }

        // Handle increment and decrement
        rightTable.addEventListener('click', event => {
            const row = event.target.closest('tr');
            if (!row) return;

            const quantityElem = row.querySelector('.quantity');
            const subtotalElem = row.querySelector('.subtotal');
            const price = parseInt(row.cells[3].textContent.replace(/\./g, ''), 10);
            let quantity = parseInt(quantityElem.textContent, 10);

            if (event.target.classList.contains('increment')) {
                // Increment the quantity
                quantity++;
            } else if (event.target.classList.contains('decrement')) {
                // Decrement the quantity
                quantity--;
                if (quantity <= 0) {
                    // Remove the row if quantity is 0 or less
                    row.remove();
                    updateRowNumbers();
                    updateTotal();
                    return;
                }
            }

            quantityElem.textContent = quantity;
            subtotalElem.textContent = (price * quantity).toLocaleString('id-ID');
            updateTotal();
        });

        // Update row numbers
        function updateRowNumbers() {
            Array.from(rightTable.rows).forEach((row, index) => {
                row.cells[0].textContent = `${index + 1}.`;
            });
        }

        // Update total amount
        function updateTotal() {
            let total = 0;
            Array.from(rightTable.rows).forEach(row => {
                const subtotal = parseInt(row.querySelector('.subtotal').textContent.replace(/\./g, ''), 10);
                total += subtotal;
            });
            totalAmount.textContent = total.toLocaleString('id-ID');
        }
    });
