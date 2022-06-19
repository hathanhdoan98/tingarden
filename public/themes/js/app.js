function addCart(id, sl) {
    $.ajax({
        url: 'ajax/addCart.php',
        type: 'POST',
        cache: !1,
        dataType: 'json',
        data: {
            pid: id,
            qty: sl
        },
        async: true,
        beforeSend: function() {},
        success: function(data) {
            GLOBAL.showToastr(lang.mua_thanh_cong + '[ ' + data.nameCart + ']' + ' thành công', 'success');
            $('#view-header').html(data.totalCart);
            $('.mask-num').html(data.totalCart);

        }

    });
}
$(function() {
    // ========slide cart======
    $('#giohang').click(function() {
        $('a[href="#step2"]').tab('show');
    });
    $('#xacnhan1, a[href="#step3"]').click(function(e) {
        e.preventDefault();
        var $id_user = $('input[name="id_user"]').val();

        var $t = $('input[name="fullname"]').val();

        var $n = $('input[name="phone"]').val();

        var $r = $('input[name="email"]').val();

        var $d = $('input[name="address"]').val();

        var $f = $('select[name="id_city"]').val();

        var $u = $('select[name="id_dist"]').val();

        var $w = $('select[name="id_ward"]').val();

        var $x = $('textarea[name="description"]').val();

        var $y = $('input[name="giaohang"]:checked').val();

        var $k = $('input[name="point"]:checked').val();

        var $z = $('input[name="httt"]:checked').val();

        var $el = check_order($t, $n, $r, $d, $f, $u, $w);
        if ($el) {
            $('a[href="#step3"]').tab('show');
        }
    });
    
    $('#payOnline').click(function() {
        var $id_user = $('input[name="id_user"]').val();

        var $t = $('input[name="fullname"]').val();

        var $n = $('input[name="phone"]').val();

        var $r = $('input[name="email"]').val();

        var $d = $('input[name="address"]').val();

        var $f = $('select[name="id_city"]').val();

        var $u = $('select[name="id_dist"]').val();

        var $x = $('textarea[name="description"]').val();

        var $y = $('input[name="giaohang"]:checked').val();

        var $k = $('input[name="point"]:checked').val();

        var $z = $('input[name="httt"]:checked').val();

        var $el = check_order($t, $n, $r, $d, $f, $u);
        if ($el) {
            $.ajax({
                url: 'ajax/thanh-toan-online.php',
                data: {
                    id_user: $id_user,
                    t: $t,
                    n: $n,
                    r: $r,
                    d: $d,
                    f: $f,
                    u: $u,
                    x: $x,
                    y: $y,
                    k: $k,
                    z: $z
                },
                type: 'POST',
                dataType: 'json',
                cache: !1,
                async: true,
                error: function() {
                    GLOBAL.showToastr(lang.loi_he_thong, 'error');
                },
                success: function(C) {}
            });
        }
    });
    $('a[role="tab"]').click(function(j) {
        j.preventDefault()
    });
    $('#add-product-list').click(function() {
        var product_id = $(this).data('product-id');
        var qty_id = $('input[name="qty"]').val();
        $.ajax({
            url: 'ajax/add_cart_list.php',
            type: 'post',
            dataType: 'json',
            data: {
                product_id: product_id,
                qty_id: qty_id
            },
            async: false,
            cache: false,
            success: function(res) {
                window.location.href = 'tra-cuu-don-hang.html';
            }
        })
    });
    $('#buy-all').click(function() {
        var product_id = [];
        var product_qty = [];
        $('.select-all').each(function() {
            product_id.push($(this).data('product-id'));
            product_qty.push($(this).data('product-qty'));
        });
        if (product_id.length > 0) {
            $.ajax({
                url: 'ajax/add_all_cart.php',
                type: 'POST',
                data: {
                    product_id: product_id,
                    product_qty: product_qty
                },
                cache: !1,
                async: 1,
                success: function(res) {
                    window.location.href = 'gio-hang.html';
                }
            });
        }
    });
    $('#buy-all-user').click(function() {
        var product_id = [];
        var product_qty = [];
        $('.select-all-user').each(function() {
            product_id.push($(this).data('product-id'));
            product_qty.push($(this).data('product-qty'));
        });
        if (product_id.length > 0) {
            $.ajax({
                url: 'ajax/add_all_cart.php',
                type: 'POST',
                data: {
                    product_id: product_id,
                    product_qty: product_qty
                },
                cache: !1,
                async: 1,
                success: function(res) {
                    window.location.href = 'gio-hang.html';
                }
            });
        }
    });
    $('#delete-all').click(function() {
        var cf = confirm(lang.ban_chac_co_muon_xoa)
        if (cf === true) {
            $.ajax({
                url: 'ajax/clear_cart_list.php',
                data: {},
                type: 'POST',
                success: function() {
                    window.location.reload(true);
                }
            })
        }
    });
    $('.quickview-heart').on('click', function(e) {
        var that = $(this);
        var id_user = that.attr('data-user');
        var id_product = that.attr('data-product');
        var act = that.attr('data-act');
        var ip = that.attr('data-ip');
        if (id_user == '' || id_user == 0) {
            alert(lang.chua_dang_nhap);
            window.location.href = 'dang-nhap.html';
        } else {
            $.ajax({
                url: 'ajax/ajax_addwishlist.php',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    id_user: id_user,
                    id_product: id_product,
                    ip: ip,
                    act: act
                },
                cache: !1,
                async: 1,
                success: function(C) {
                    if (C.error == 1) {
                        that.addClass('active');
                        that.attr('data-act', 'remove');
                    }
                    if (C.error == 2) {
                        that.removeClass('active');
                        that.attr('data-act', 'insert');
                    }
                }
            });
        }
    });

    $('body').on('click', '.delcart', function() {
        var id = $(this).data('id');
        var qty = $(this).data('qty');
        var price = $(this).data('price');
        var color = $(this).data('color');
        var size = $(this).data('size');
        var material = $(this).data('material');

        var params = {
            pid: parseInt(id),
            price: parseInt(price),
            color: parseInt(color),
            size: parseInt(size),
            material: parseInt(material)
        }
        $.ajax({
            url: 'ajax/deleteCart.php',
            type: 'POST',
            cache: !1,
            data: params,
            dataType: 'JSON',
            async: true,
            success: function(res) {
                window.location.reload(true);
            }
        });
    });
    // addwishlist
    $(".addwishlist").click(function(event) {
        event.preventDefault();
        var $this = $(this),
            $id = $this.attr('id-product');
        $.ajax({
            type: 'GET',
            dataType: 'JSON',
            cache: false,
            url: 'ajax/addwishlist.php',
            data: {
                id: $id,
            },
            success: function(data) {
                if (data.status == 0) {
                    var r = confirm(lang.chua_dang_nhap_de_thich);
                    if (r == true) {
                        $("#btn_dn").click();
                    }
                } else if (data.status == 1) {
                    GLOBAL.showToastr(lang.thich_thanh_cong, 'success');
                    $this.addClass('wished');
                } else if (data.status == 2) {
                    GLOBAL.showToastr(lang.da_co_trong_yeu_thich, 'error');
                } else {
                    GLOBAL.showToastr(lang.loi_he_thong, 'error');
                }
            }
        });
    });
    $(".removewishlist").click(function(event) {
        event.preventDefault();
        var $this = $(this),
            $id = $this.attr('id-product');
        $.ajax({
            type: 'GET',
            dataType: 'JSON',
            cache: false,
            url: 'ajax/removewishlist.php',
            data: {
                id: $id,
            },
            success: function(data) {
                if (data.status == 0) {
                    var r = confirm(lang.chua_dang_nhap_de_thich);
                    if (r == true) {
                        $("#btn_dn").click();
                    }
                } else if (data.status == 1) {
                    GLOBAL.showToastr(lang.xoa_thanh_cong, 'success');
                    $this.parents('.box_sp').parents('.box_items_5').fadeOut('slow');
                } else if (data.status == 2) {
                    GLOBAL.showToastr(lang.loi_he_thong, 'error');
                }
            }
        });
    });
});