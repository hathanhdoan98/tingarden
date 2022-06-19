<?php
return [
   
    'status' => [
        'new' => 1, // Đơn mới tạo
        'delivery' => 2, // Đang vận chuyển
        'success' => 3, // Đã giao hàng
        'return' => 4, // Khách trả lại hàng
        'bom' => 5, // Bị bom hàng.
        'cancel' => 6, // Đơn bị hủy
    ],
    'response_code' => [
        'out_of_product' => 'out_of_product',
        'success' => 'success',
        'fail' => 'fail',
    ],
    'response_message' => [
        'out_of_product' => 'Sản phẩm tạm thời đã hết hàng. Mong quý khách thông cảm !',
        'success' => 'Đặt hàng thành công',
        'fail' => 'Đặt hàng thất bại !',
    ],
];
