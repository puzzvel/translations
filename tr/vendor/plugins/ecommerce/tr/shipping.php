<?php

return [
    'name' => 'Gönderim Kuralları',
    'shipping' => 'Kargo',
    'title' => 'Başlık',
    'amount' => 'Tutar',
    'enable' => 'Olanak Vermek',
    'enabled' => 'Etkinleştirilmiş',
    'disable' => 'Devre Dışı Bırak',
    'disabled' => 'Engelli',
    'create_shipping' => 'Gönderi oluştur',
    'edit_shipping' => 'Düzenle :code',
    'status' => 'Durum',
    'shipping_methods' => 'Kargo Yöntemleri',
    'create_shipping_method' => 'Gönderim yöntemi oluştur',
    'edit_shipping_method' => 'Gönderim yöntemini düzenle',
    'add_shipping_region' => 'Kargo Bölgesi Ekle',
    'country' => 'Ülke',
    'state' => 'İl',
    'city' => 'İlçe',
    'address' => 'Adres',
    'phone' => 'Telefon Numarası',
    'email' => 'E-Posta',
    'zip_code' => 'Posta Kodu',
    'methods' => [
        'default' => 'Varsayılan',
    ],
    'statuses' => [
        'not_approved' => 'Onaylanmamış',
        'approved' => 'Onaylandı',
        'pending' => 'Askıda',
        'arrange_shipment' => 'Sevkiyatı Düzenle',
        'ready_to_be_shipped_out' => 'Kargoya Verilmeye Hazır',
        'picking' => 'Toplama',
        'delay_picking' => 'Gecikmeli Toplama',
        'picked' => 'Seçildi',
        'not_picked' => 'Seçilmedi',
        'delivering' => 'Teslim',
        'delivered' => 'Teslim Edilmiş',
        'not_delivered' => 'Teslim Edilmedi',
        'audited' => 'Denetlendi',
        'canceled' => 'İptal Edildi',
    ],
    'cod_statuses' => [
        'pending' => 'Askıda',
        'completed' => 'Tamamlandı',
    ],
    'delete' => 'Sil',
    'shipping_rules' => 'Kargo Gönderme Kuralları',
    'shipping_rules_description' => 'Nakliye ücretini hesaplamak için kurallar.',
    'select_country' => 'Ülke Seç',
    'add_shipping_rule' => 'Gönderim Kuralı Ekle',
    'delete_shipping_rate' => 'Bölge için nakliye ücretini silin',
    'delete_shipping_rate_confirmation' => '<strong class="region-price-item-label"></strong> etiketini bu gönderim alanından silmek istediğinizden emin misiniz?',
    'delete_shipping_area' => 'Sevkiyat alanını sil',
    'delete_shipping_area_confirmation' => '<strong class="region-item-label"></strong> gönderim alanını silmek istediğinizden emin misiniz?',
    'add_shipping_fee_for_area' => 'Alan için kargo ücreti ekleyin',
    'confirm' => 'Onayla',
    'save' => 'Kaydet',
    'greater_than' => 'Daha Büyük',
    'type' => 'Tür',
    'shipping_rule_name' => 'Kargo Taşıma Kuralları',
    'shipping_fee' => 'Kargo Ücreti',
    'cancel' => 'İptal Et',
    'base_on_weight' => 'Ürünün ağırlığına göre (:unit)',
    'base_on_price' => 'Ürünün Fiyatına Göre',
    'shipment_canceled' => 'Kargo iptal edildi!',
    'at' => '-de',
    'cash_on_delivery' => 'Kapıda Ödeme',
    'update_shipping_status' => 'Kargo durumunu değiştir',
    'update_cod_status' => 'Kapıda Ödeme Durumunu Değiştir',
    'history' => 'Tarih',
    'shipment_information' => 'Gönderi Bilgileri',
    'order_number' => 'Sipariş Numarası',
    'shipping_method' => 'Kargo Firması',
    'select_shipping_method' => 'Gönderim yöntemini seçin',
    'cod_status' => 'Kapıda Ödeme',
    'shipping_status' => 'Kargo Durumu',
    'customer_information' => 'Müşteri Bilgileri',
    'sku' => 'SKU',
    'change_status_confirm_title' => '<span class="shipment-status-label"></span> onaylansın mı?',
    'change_status_confirm_description' => 'Bu gönderi için <span class="shipment-status-label"></span> işlemini onaylamak istediğinizden emin misiniz?',
    'accept' => 'Kabul Et',
    'weight_unit' => 'Desi (:unit)',
    'updated_at' => 'Son Güncelleme',
    'cod_amount' => 'Kapıda Ödeme Tutarı',
    'cancel_shipping' => 'Gönderimi iptal et',
    'shipping_address' => 'Kargo Adresi',
    'packages' => 'Paketler',
    'edit' => 'Düzenle',
    'fee' => 'Ücret',
    'note' => 'Olumsuz',
    'finish' => 'Bitti',
    'shipping_fee_cod' => 'Kargo / Kapıda Ödeme Ücreti',
    'send_confirmation_email_to_customer' => 'Müşteriye bilgilendirme E-postası gönder.',
    'form_name' => 'Ad Soyad',
    'changed_shipping_status' => 'Gönderim durumu : :status olarak değiştirildi. Güncelleyen: %user_name%',
    'order_confirmed_by' => 'Sipariş %user_name% tarafından onaylandı',
    'shipping_canceled_by' => 'Gönderim %user_name% tarafından iptal edildi',
    'update_shipping_status_success' => 'Gönderim durumu başarıyla güncellendi!',
    'update_cod_status_success' => 'Kargonun Kapıda Ödeme Durumu Başarıyla Güncellendi',
    'updated_cod_status_by' => 'COD durumu :status olarak güncellendi. Güncelleyen: %user_name%',
    'all' => 'Hepsi',
    'error_when_adding_new_region' => 'Yeni bölge eklenirken bir hata oluştu!',
    'delivery' => 'Teslimat',
    'adjustment_price_of' => 'Ayarlama Fiyatı :key',
    'warehouse' => 'Depo',
    'delivery_note' => 'İrsaliye',
    'shipments' => 'Kargo Durumu',
    'order_id' => 'Sipariş Kimliği',
    'not_available' => 'Mevcut Değil',
    'shipping_amount' => 'Kargo Tutarı',
    'additional_shipment_information' => 'Detaylı Kargo Bilgileri',
    'shipping_company_name' => 'Kargo Firması',
    'tracking_id' => 'Kargo Takip Numarası',
    'tracking_link' => 'Kargo Takip Adresi (Link)',
    'estimate_date_shipped' => 'Tahmini Teslim Tarihi (İsteğe Bağlı)',
    'date_shipped' => 'Gönderim Tarihi',
    'add_note' => 'Not Ekle... (İsteğe Bağlı)',
    'view_order' => 'View Order :order_id',
    'based_on_price' => 'Ürünün fiyatına göre',
    'based_on_weight' => 'Ürün ağırlığına göre (:unit)',
];