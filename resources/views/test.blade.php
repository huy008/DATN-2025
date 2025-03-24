<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chọn Thuộc Tính & Biến Thể</title>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 700px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        select, input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #007bff;
            color: white;
        }
        input {
            text-align: center;
        }
        .delete-btn {
            background: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .delete-btn:hover {
            background: darkred;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Chọn thuộc tính sản phẩm</h2>
    
    <!-- Dropdown chọn màu sắc -->
    <label for="color">Màu sắc:</label>
    <select id="color" name="color" multiple>
        <option value="red">Red</option>
        <option value="blue">Blue</option>
        <option value="green">Green</option>
    </select>

    <!-- Dropdown chọn dung lượng -->
    <label for="memory">Dung lượng:</label>
    <select id="memory" name="memory" multiple>
        <option value="64GB">64GB</option>
        <option value="128GB">128GB</option>
        <option value="256GB">256GB</option>
    </select>

    <!-- Dropdown chọn RAM -->
    <label for="ram">RAM:</label>
    <select id="ram" name="ram" multiple>
        <option value="4GB">4GB</option>
        <option value="8GB">8GB</option>
        <option value="12GB">12GB</option>
    </select>

    <!-- Bảng hiển thị biến thể sản phẩm -->
    <table>
        <thead>
            <tr>
                <th>Màu sắc</th>
                <th>Dung lượng</th>
                <th>RAM</th>
                <th>Đường dẫn ảnh</th>
                <th>Giá ($)</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody id="variant-table">
            <!-- Dữ liệu sẽ tự động được tạo ở đây -->
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        // Khi thay đổi chọn thuộc tính -> cập nhật bảng
        $('select').on('change', function() {
            generateVariants();
        });

        // Khi người dùng nhập giá hoặc đường dẫn ảnh -> cập nhật dữ liệu
        $(document).on('input', '.variant-price, .variant-image', function() {
            let row = $(this).closest('tr');
            let key = row.attr('data-key');
            let newPrice = row.find('.variant-price').val();
            let newImage = row.find('.variant-image').val();

            // Cập nhật dữ liệu biến thể
            variantData[key].price = newPrice;
            variantData[key].image = newImage;
        });

        // Khi nhấn nút Xóa biến thể
        $(document).on('click', '.delete-btn', function() {
            let row = $(this).closest('tr');
            let key = row.attr('data-key');
            
            // Xóa biến thể khỏi dữ liệu
            delete variantData[key];
            
            // Xóa hàng khỏi bảng
            row.remove();
        });

        // Lưu dữ liệu biến thể
        let variantData = {};

        function generateVariants() {
            let colors = getSelectedValues('#color');
            let memories = getSelectedValues('#memory');
            let rams = getSelectedValues('#ram');

            let tableContent = '';
            variantData = {}; // Reset dữ liệu biến thể

            // Lặp qua tất cả các kết hợp thuộc tính
            colors.forEach(color => {
                memories.forEach(memory => {
                    rams.forEach(ram => {
                        let key = `${color}-${memory}-${ram}`;
                        
                        // Kiểm tra nếu biến thể đã tồn tại thì giữ lại giá trị cũ
                        if (!variantData[key]) {
                            variantData[key] = {
                                price: '',
                                image: ''
                            };
                        }

                        tableContent += `
                            <tr data-key="${key}">
                                <td>${color}</td>
                                <td>${memory}</td>
                                <td>${ram}</td>
                                <td><input type="text" class="variant-image" value="${variantData[key].image}" placeholder="Nhập đường dẫn ảnh"></td>
                                <td><input type="number" class="variant-price" value="${variantData[key].price}" placeholder="Nhập giá ($)"></td>
                                <td><button class="delete-btn">Xóa</button></td>
                            </tr>
                        `;
                    });
                });
            });

            // Cập nhật bảng biến thể
            $('#variant-table').html(tableContent);
        }

        // Hàm lấy danh sách giá trị đã chọn trong select[multiple]
        function getSelectedValues(selector) {
            return $(selector).val() || [];
        }
    });
</script>

</body>
</html>
