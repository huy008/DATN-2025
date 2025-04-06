<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý giảm giá</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <style>
        .discount-card {
            border-left: 4px solid #28a745;
            transition: all 0.3s;
        }

        .discount-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .badge-discount {
            font-size: 0.9rem;
            padding: 5px 10px;
        }

        .discount-value {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .product-list {
            max-height: 300px;
            overflow-y: auto;
        }

        .product-item {
            border-bottom: 1px solid #eee;
            padding: 8px 0;
        }

        .product-item:last-child {
            border-bottom: none;
        }

        .active-discount {
            background-color: #f8f9fa;
            border-left: 4px solid #ffc107;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('discounts.index') }}">
                                <i class="fas fa-tags mr-2"></i> Quản lý giảm giá
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 py-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        function displayDiscountedPrices() {
            $('.product-price').each(function() {
                const $element = $(this);
                const originalPrice = parseFloat($element.data('original-price'));
                const discountType = $element.data('discount-type');
                const discountValue = parseFloat($element.data('discount-value'));

                if (discountType && discountValue) {
                    let discountedPrice;

                    if (discountType === 'fixed') {
                        discountedPrice = originalPrice - discountValue;
                    } else { // percentage
                        discountedPrice = originalPrice * (1 - (discountValue / 100));
                    }

                    discountedPrice = Math.max(0, discountedPrice).toFixed(2);

                    $element.html(`
                <span class="text-danger">${formatCurrency(discountedPrice)}</span>
                <small class="text-muted text-decoration-line-through">${formatCurrency(originalPrice)}</small>
                <span class="badge bg-danger ms-2">-${discountType === 'fixed' ? formatCurrency(discountValue) : discountValue + '%'}</span>
            `);
                }
            });
        }

        // Hàm định dạng tiền tệ
        function formatCurrency(amount) {
            return new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }).format(amount);
        }

        // Chạy khi trang tải xong
        $(document).ready(function() {
            displayDiscountedPrices();

            // Xử lý hiển thị thông báo
            setTimeout(function() {
                $('.alert').fadeOut('slow');
            }, 5000);
        });
    </script>
</body>

</html>
