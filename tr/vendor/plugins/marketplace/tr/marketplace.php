<?php

return [
    'name' => 'Bayi',
    'email' => [
        'store_new_order_title' => 'Yeni sipariş hakkında bildirim',
        'store_new_order_description' => 'Bir sipariş verildiğinde mağaza sahibine e-posta gönder',
        'verify_vendor_title' => 'Bayiyi doğrula',
        'verify_vendor_description' => 'Bir satıcı kaydolduğunda yöneticiye e-posta gönder',
        'pending_product_approval_title' => 'Bekleyen ürün onayı',
        'pending_product_approval_description' => 'Bir satıcı ürünlerini yayınladığında yöneticiye e-posta gönder',
        'vendor_account_approved_title' => 'Satıcı hesabı onaylandı',
        'vendor_account_approved_description' => 'Hesapları onaylandığında satıcıya e-posta gönder',
        'product_approved_title' => 'Ürün onaylandı',
        'product_approved_description' => 'Ürünleri onaylandığında satıcıya e-posta gönder',
        'withdrawal_approved_title' => 'Para çekme onaylandı',
        'withdrawal_approved_description' => 'Para çekme talebi onaylandığında satıcıya e-posta gönder',
    ],
    'current_balance' => 'Mevcut bakiye',
    'settings' => [
        'name' => 'Ayarlar',
        'menu_settings_name' => 'Menü Ayarları',
        'title' => 'Bayi Ayarları',
        'description' => 'Kurulum Komisyon Ücreti',
        'fee_per_order' => 'Ücret başına ücret (%), önerin: 2 veya 3',
        'default_commission_fee' => 'Varsayılan komisyon ücreti (%), önerin: 2 veya 3',
        'enable_commission_fee_for_each_category' => 'Her kategori için komisyon ücreti etkinleştirilsin mi?',
        'categories' => 'Kategoriler',
        'select_categories' => 'Kategori seç..',
        'commission_fee' => 'Komisyon ücreti (%)',
        'commission_fee_by_category' => 'Kategoriye göre komisyon ücreti (%)',
        'fee_withdrawal' => 'Ücret çekme (Sabit tutar)',
        'check_valid_signature' => 'Satıcının kazançlarında geçerli imzayı kontrol edin',
        'verify_vendor' => 'Satıcı doğrulaması (Satıcı, doğrulandıktan sonra ürün listelemesini yayınlayabilir)',
        'enable_product_approval' => 'Ürün onayını etkinleştir',
        'hide_store_phone_number' => 'Mağaza telefon numarası gizlensin mi?',
        'hide_store_email' => 'Mağaza e-postası gizlensin mi?',
        'allow_vendor_manage_shipping' => 'Satıcının sevkiyatı yönetmesine izin verilsin mi?',
        'commission_fee_each_category_fee_name' => 'Komisyon ayarının komisyon ücreti :key',
        'commission_fee_each_category_name' => 'Komisyon ayarı kategorileri :key',
        'add_new' => 'Yeni ekle',
    ],
    'theme_options' => [
        'name' => 'Bayi',
        'description' => 'Bayi için tema ayarları',
        'logo_vendor_dashboard' => 'Bayi panelindeki logo (Varsayılan ana logodur)',
    ],
    'store_name' => 'Mağaza adı',
    'store_email' => 'Mağaza e-posta',
    'store_phone' => 'Mağaza telefon',
    'product_name' => 'Ürün adı',
    'product_url' => 'Ürün URL',
    'withdrawal_amount' => 'Para çekme tutarı',
    'helpers' => [
        'customer_status' => 'Durumu ":status" dışında değiştirirseniz, bu satıcının mağazası da ":store" olarak değişir',
        'store_status' => 'Durumu ":status" dışında değiştirirseniz, bu mağazanın hesabı da ":müşteri" olarak değişir',
    ],
    'tables' => [
        'earnings' => 'Kazançlar',
        'products_count' => 'Ürün Sayısı',
    ],
    'vendors' => 'Bayiler',
    'payout_payment_methods' => [
        'bank_transfer' => 'Banka Transfer',
        'paypal' => 'PayPal',
    ],
    'reports' => [
        'name' => 'Raporlar',
        'total_fee_earnings' => 'Toplam ücret kazancı: :değer',
        'total_fee' => 'Toplam ücret',
        'total_amount' => 'Toplam tutar',
        'store_revenues' => 'Mağaza gelirleri',
        'sale_commissions' => 'Satış komisyonları',
        'fee' => 'Ücret (:sembol)',
        'amount' => 'Tutar (:symbol)',
    ],
    'vendor' => 'Bayi',
];
