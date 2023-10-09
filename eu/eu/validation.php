<?php

declare(strict_types=1);

return [
    'accepted'             => ':attribute onartu beharra dago.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => ':attribute ez da baliozko URL bat.',
    'after'                => ':attribute :date osteko data izan behar da.',
    'after_or_equal'       => ':attribute :date osteko data edo data bera izan behar da.',
    'alpha'                => ':attribute hizkiak besterik ezin ditu izan.',
    'alpha_dash'           => ':attribute hizkiak, zenbakiak eta marrak besterik ezin ditu izan.',
    'alpha_num'            => ':attribute hizkiak eta zenbakiak besterik ezin ditu izan.',
    'array'                => ':attribute bilduma izan behar da.',
    'before'               => ':attribute :date aurreko data izan behar da.',
    'before_or_equal'      => ':attribute :date aurreko data edo data bera izan behar da.',
    'between'              => [
        'array'   => ':attribute-(e)k :min eta :max arteko elementu kopurua izan behar du.',
        'file'    => ':attribute-(e)k :min eta :max kilobyte arteko pisua izan behar du.',
        'numeric' => ':attribute :min eta :max artean egon behar da.',
        'string'  => ':attribute-(e)k :min eta :max karaktere artean izan behar ditu.',
    ],
    'boolean'              => ':attribute-(r)en balioa egia edo gezurra izan behar da.',
    'confirmed'            => ':attribute-(r)en berrespena ez dator bat.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => ':attribute ez da baliozko data.',
    'date_equals'          => 'The :attribute bat izan behar du data berdina :date.',
    'date_format'          => ':attribute datak ez du :format formatua.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => ':attribute eta :other ezberdinak izan behar dira.',
    'digits'               => ':attribute-(e)k :digits digitu eduki behar ditu.',
    'digits_between'       => ':attribute-(e)k :min eta :max arteko digitu kopurua eduki behar du.',
    'dimensions'           => ':attribute irudiaren neurriak baliogabeak dira.',
    'distinct'             => ':attribute-(e)k bikoiztutako balioa dauka.',
    'email'                => ':attribute baliozko helbide elektronikoa izan behar da.',
    'ends_with'            => ':attribute-(e)k ondorengo balioetako batekin amaitu behar du: :values',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => ':attribute baliogabea da.',
    'file'                 => ':attribute fitxategi bat izan behar da.',
    'filled'               => ':attribute derrigorrezkoa da.',
    'gt'                   => [
        'array'   => ':attribute-(e)k :value elementu baino gehiago izan behar ditu.',
        'file'    => ':attribute-(e)k :value kilobyte baino handiagoa izan behar du.',
        'numeric' => ':attribute-(e)k :value baino handiagoa izan behar du.',
        'string'  => ':attribute-(e)k :value karaktere baino gehiago izan behar ditu.',
    ],
    'gte'                  => [
        'array'   => ':attribute-(e)k :value elementu edo gehiago izan behar ditu.',
        'file'    => ':attribute-(e)k :value kilobyte edo gehiago izan behar ditu.',
        'numeric' => ':attribute-(e)k :value baino handiagoa edo berdina izan behar du.',
        'string'  => ':attribute-(e)k :value karaktere edo gehiago izan behar ditu.',
    ],
    'image'                => ':attribute irudi bat izan behar da.',
    'in'                   => ':attribute baliogabea da.',
    'in_array'             => ':attribute ez da existizen :other-(e)n.',
    'integer'              => ':attribute zenbaki osoa izan behar da.',
    'ip'                   => ':attribute baliozko IP helbidea izan behar da.',
    'ipv4'                 => ':attribute baliozko IPv4 helbidea izan behar da.',
    'ipv6'                 => ':attribute baliozko IPv6 helbidea izan behar da.',
    'json'                 => ':attribute baliozko JSON karaktere-katea izan behar da.',
    'lt'                   => [
        'array'   => ':attribute-(e)k :value elementu baino gutxiago izan behar ditu.',
        'file'    => ':attribute-(e)k :value kilobyte baino txikiagoa izan behar du.',
        'numeric' => ':attribute-(e)k :value baino txikiagoa izan behar du.',
        'string'  => ':attribute-(e)k :value karaktere baino gutxiago izan behar ditu.',
    ],
    'lte'                  => [
        'array'   => ':attribute-(e)k :value elementu edo gutxiago izan behar ditu.',
        'file'    => ':attribute-(e)k :value kilobyte edo gutxiago izan behar ditu.',
        'numeric' => ':attribute-(e)k :value baino txikiagoa edo berdina izan behar du.',
        'string'  => ':attribute-(e)k :value karaktere edo gutxiago izan behar ditu.',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => ':attribute-(e)k ezin du :max elementu baino gehiago eduki.',
        'file'    => ':attribute ezin da :max kilobyte baino handiagoa izan.',
        'numeric' => ':attribute ezin da :max baino handiagoa izan.',
        'string'  => ':attribute-(e)k ezin du :max karaktere baino gehiago eduki.',
    ],
    'mimes'                => ':attribute :values motako fitxategia izan behar da.',
    'mimetypes'            => ':attribute :values motako fitxategia izan behar da.',
    'min'                  => [
        'array'   => ':attribute-(e)k gutxienez :min elementu izan behar ditu.',
        'file'    => ':attribute-(e)k gutxienez :min kilobyte izan behar ditu.',
        'numeric' => ':attribute-(e)k gutxienez :min-(e)ko tamaina izan behar du.',
        'string'  => ':attribute-(e)k gutxienez :min karaktere izan behar ditu.',
    ],
    'multiple_of'          => 'The :attribute izan behar multiploa :value',
    'not_in'               => ':attribute baliogabea da.',
    'not_regex'            => ':attribute formatua baliogabea da.',
    'numeric'              => ':attribute zenbakizkoa izan behar da.',
    'password'             => 'Pasahitza ez da zuzena.',
    'present'              => ':attribute ezin da hutsik egon.',
    'prohibited'           => 'The :attribute eremuan, debekatuta dago.',
    'prohibited_if'        => 'The :attribute eremuan, debekatuta dago denean :other da :value.',
    'prohibited_unless'    => 'The :attribute eremuan, debekatuta dago ezean :other da :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => ':attribute baliogabea da.',
    'required'             => ':attribute derrigorrezkoa da.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => ':attribute derrigorrezkoa da :other :value denean.',
    'required_unless'      => ':attribute derrigorrezkoa da :other :values-(e)n egon ezean.',
    'required_with'        => ':attribute derrigorrezkoa da :values dagoenean.',
    'required_with_all'    => ':attribute derrigorrezkoa da :values daudenean.',
    'required_without'     => ':attribute derrigorrezkoa da :values ez dagoenean.',
    'required_without_all' => ':attribute derrigorrezkoa da :values ez daudenean.',
    'same'                 => ':attribute eta :other bat etorri behar dira.',
    'size'                 => [
        'array'   => ':attribute-(e)k :size elementu izan behar ditu.',
        'file'    => ':attribute-(e)k :size kilobyte izan behar behar ditu.',
        'numeric' => ':attribute-(e)k :size tamaina izan behar du.',
        'string'  => ':attribute-(e)k :size karaktere izan behar ditu.',
    ],
    'starts_with'          => ':attribute-(e)k ondorengo balioetako batekin hasi behar du :values',
    'string'               => ':attribute karaktere-katea izan behar da.',
    'timezone'             => ':attribute baliozko ordu-eremua izan behar da.',
    'unique'               => ':attribute jadanik erregistratua izan da.',
    'uploaded'             => ':attribute kargatzerakoan huts egin du.',
    'url'                  => ':attribute-(r)en formatua baliogabea da.',
    'uuid'                 => ':attribute-(e)k baliozko UUIDa izan behar du.',
    'attributes'           => [
        'address'                  => 'helbidea',
        'age'                      => 'adina',
        'amount'                   => 'Amount',
        'area'                     => 'Area',
        'available'                => 'erabilgarria',
        'birthday'                 => 'Birthday',
        'body'                     => 'gorputza',
        'city'                     => 'hiria',
        'content'                  => 'edukia',
        'country'                  => 'herrialdea',
        'created_at'               => 'Created At',
        'creator'                  => 'Creator',
        'current_password'         => 'Current Password',
        'date'                     => 'data',
        'date_of_birth'            => 'Date Of Birth',
        'day'                      => 'eguna',
        'deleted_at'               => 'Deleted At',
        'description'              => 'deskribapena',
        'district'                 => 'District',
        'duration'                 => 'Duration',
        'email'                    => 'posta elektronikoa',
        'excerpt'                  => 'pasartea',
        'filter'                   => 'Filter',
        'first_name'               => 'izena',
        'gender'                   => 'generoa',
        'group'                    => 'Group',
        'hour'                     => 'ordua',
        'image'                    => 'Image',
        'last_name'                => 'abizena',
        'lesson'                   => 'Lesson',
        'line_address_1'           => 'Line Address 1',
        'line_address_2'           => 'Line Address 2',
        'message'                  => 'mezua',
        'middle_name'              => 'Middle Name',
        'minute'                   => 'minutua',
        'mobile'                   => 'mugikorra',
        'month'                    => 'hilabetea',
        'name'                     => 'izena',
        'national_code'            => 'National Code',
        'number'                   => 'Number',
        'password'                 => 'pasahitza',
        'password_confirmation'    => 'pasahitzaren berrespena',
        'phone'                    => 'telefonoa',
        'photo'                    => 'Photo',
        'postal_code'              => 'Postal Code',
        'price'                    => 'Price',
        'province'                 => 'Province',
        'recaptcha_response_field' => 'Recaptcha Response Field',
        'remember'                 => 'Remember',
        'restored_at'              => 'Restored At',
        'result_text_under_image'  => 'Result Text Under Image',
        'role'                     => 'Role',
        'second'                   => 'segundoa',
        'sex'                      => 'sexua',
        'short_text'               => 'Short Text',
        'size'                     => 'neurria',
        'state'                    => 'State',
        'street'                   => 'Street',
        'student'                  => 'Student',
        'subject'                  => 'gaia',
        'teacher'                  => 'Teacher',
        'terms'                    => 'Terms',
        'test_description'         => 'Test Description',
        'test_locale'              => 'Test Locale',
        'test_name'                => 'Test Name',
        'text'                     => 'Text',
        'time'                     => 'denbora',
        'title'                    => 'izenburua',
        'updated_at'               => 'Updated At',
        'username'                 => 'erabiltzailea',
        'year'                     => 'urtea',
    ],
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];